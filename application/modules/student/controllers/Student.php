<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('stud_model');
		$this->load->model('cod/cod_model');
		$this->load->helper('file');
		$this->load->library('auth/ion_auth');
		if(!$this->ion_auth->logged_in())
		{
			redirect('/auth/login/','refresh');
		}
		if(!$this->ion_auth->in_group('stud'))
		{
			redirect('/admin/','refresh');
		}		
	}

	function index()
	{
		$id=$this->ion_auth->get_user_id();

		if($this->stud_model->check_lock($id))
		{
			$this->stud_model->lock_it($id);
		}
		if($this->stud_model->check_approval($id))
		{
			$data=$this->get_user_data();
			$data['current_page']="rules";
			$this->_render_page('stud_rules',$data);

		}
		else
		{
			$data=$this->get_user_data();
			$data['current_page']="rules";
			$this->_render_page('stud_rules',$data);

		}
		
	}


	function news_all()
	{
		$data=$this->get_user_data();
		$data['news']=$this->stud_model->get_news();
		$data['current_page']="news";
		$this->_render_page('news',$data);
	}

	function resume()
	{
		$data=$this->stud_model->resume();
		$data['current_page']="resume";
		$this->_render_page('resume.php',$data);
	}

	function new_application()
	{
		$data=$this->get_user_data();
		$data['current_page']="new_application";
		$data['visits'] = $this->stud_model->get_eligible_visits($data['id']);
		$this->_render_page('new_application',$data);
	}

	function apply()
	{
		if(!$this->input->post('apply_id'))
		{
			redirect('student/new_application');
		}
		$userid = $this->ion_auth->get_user_id();
		$applyid = $this->input->post('apply_id');
		$this->stud_model->apply($userid, $applyid);
	}

	function withdraw()
	{
		if(!$this->input->post('withdraw_id'))
		{
			redirect('student/new_application');
		}
		$userid = $this->ion_auth->get_user_id();
		$withdrawid = $this->input->post('withdraw_id');
		$this->stud_model->withdraw($userid, $withdrawid);
	}

	function verify()
	{
		$data=array("id"=>$this->ion_auth->get_user_id(),"vid"=>$this->input->post('id'));
		$flag=$this->stud_model->verify($data);
		$app_type=$this->apply($this->input->post('id'),$flag);
		$app_type1= $app_type[0]['application_format'];
		$app_link= $app_type[0]['app_link'];
		echo (json_encode(array("m1"=>$app_type1,"m2"=>$flag,"m3"=>$app_link)));
	}

	function application_status()
	{
		$id=$this->ion_auth->get_user_id();
		$data=$this->stud_model->app_status($id);
		$data['current_page']="application_status";
		$this->_render_page('application_status',$data);
	}

	function show_calender()
	{
		$data=$this->stud_model->get_user_info();
		$data['id']=$this->ion_auth->get_user_id();
		$data['object']=$this->stud_model->get_events();
		$data['current_page']="show_calender";
		$this->_render_page('customized_calender',$data);
	}

	function return_events()
	{
		echo json_encode($this->stud_model->get_events());
	}

	function get_user_data()
	{
		$data=$this->stud_model->get_user_info();
		$data['id']=$this->ion_auth->get_user_id();
		return $data;
	}

	function profile()
	{
		$data=$this->stud_model->get_profile_info();
		$data['id']=$this->ion_auth->get_user_id();
		$data['current_page']="profile";
		$this->_render_page('student_profile',$data);
	}

	function display()
	{
		$id=$this->ion_auth->get_user_id();
		$flag=$this->stud_model->profile_display($id);
		if($flag==1)
		{
			redirect('student/profile');
		}
	}

	function companies()
	{
		$data=$this->stud_model->get_profile_info();
		$data['id']=$this->ion_auth->get_user_id();
		$data['current_page']="companies";
		$data['companies'] = $this->cod_model->get_all_companies();
		$this->_render_page('companies',$data);
	}

	function help()
	{
		$data=$this->stud_model->help_reply();

		$this->_render_page('help',$data);
	}

	function stud_help()
	{
		$data['nul']="";
		$data['current_page']="help";
		$this->_render_page('stud_help',$data);
	}

	function deactivate_req()
	{
		$id=$this->ion_auth->get_user_id();
		$this->stud_model->deactivate_req($id);
		//$this->ion_auth->logout();
		redirect('/student/settings','refresh');
	}

	function getSpecialization()
	{
		$data=$this->stud_model->get_specialized($this->input->post('branch'));
		echo "<option value=''>"."None"."</option>";
		foreach ($data as $key => $value)
		{
			$id=$value['id'];
			echo "<option value='$id'>".$value['name']."</option>";
		}
	}

	function feedback_list()
	{
		$data['res']=$this->stud_model->feedback_list();
		$data['current_page']="feedback_list";
		$this->_render_page('feedback_list',$data);
	}

	function feedback_form($visit_id)
	{
		$data['visit_id']=$visit_id;
		$data['current_page']="feedback_form";
		$this->_render_page('feedback_form',$data);
	}

	function feedback()
	{
		$this->stud_model->feedback();
		$this->index();
	}

	function round_detail()
	{
		$company_id=$this->input->post('id');
		$data=$this->stud_model->get_round_data($company_id);
		$data['current_page']="round_detail";
		if(count($data['result'])<1)
		{
			echo "No Rounds for this";
		}
		else
		{
			$this->load->view('round_detail',$data);
		}
	}

	function get_company()
	{
		if (isset($_GET['term']))
		{
			$q = strtolower($_GET['term']);
			$this->stud_model->search_company($q);
		}
	}

	//search direction to be discussed
	function search()
	{}

	function stud_help_temp()
	{
		$this->_render_page('stud_help',$data);
	}

	function profile_temp()
	{
		$data=$this->stud_model->get_profile_info();
		$data['id']=$this->ion_auth->get_user_id();
		$this->load->view('stud_dash_temp',$data);
		$this->load->view('student_profile',$data);
	}
	function all_coordinators()
	{

		$data=$this->stud_model->get_cod();
		$data['current_page']="all_cod";
		$this->_render_page('all_coordinators',$data);
	}
	function settings()
	{
		$data=$this->stud_model->student_settings();
		$data['current_page']="settings";
		$this->_render_page('settings',$data);
	}
	function _render_page($view,$data)
	{
		$data['user']=$this->stud_model->get_user_info();
		$data['id']=$this->ion_auth->get_user_id();
		$this->load->view('stud_dash',$data);
		$this->load->view($view,$data );
		$this->load->view('footer',$data);
	}
}
