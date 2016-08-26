<title> Branch List | TAPS NITW</title>
<h3>Branch List</h3>
<?php $sno=1;?>
<hr>
<div class="row">
	<button class="btn waves-effect waves-light col s1 offset-s10" id="download_button">Excel</button>
</div>
<table id="data-table-simple" class="responsive-table display table2excel" cellspacing="0">
	<thead class="noExl">
		<tr>
			<th>Sno.</th>
			<th>Student ID</th>
			<th>Registration Number</th>
			<th>Roll Number</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>CGPA</th>
			<th>View Info</th>
		</tr>
	</thead>
	<tfoot >
		<tr>
			<th>Sno.</th>
			<th>Student ID</th>
			<th>Registration Number</th>
			<th>Roll Number</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>CGPA</th>
			<th>View Info</th>
		</tr>
	</tfoot>
	<tbody>

		<?php foreach($student as $result) {?>
		<tr>
			<td><?php echo $sno; $sno++?></td>
			<td><?php echo $result['userid'];?></td>
			<td><?php echo $result['registration_number'];?></td>
			<td><?php echo $result['roll_number'];?></td>
			<td><?php echo $result['first_name']." ".$result['middle_name']." ".$result['last_name'];?></td>
			<td><?php echo $result['email'];?></td>
			<td><?php echo $result['phone'];?></td>
			<td><?php echo $result['cgpa'];?></td>
			<td>view</td>
			
		</tr>
		<?php }?>
	</tbody>
</table>
<script src="<?php echo base_url()?>assets/materialize/js/jquery.table2excel.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$('#download_button').on('click',function(e){
		$(".table2excel").table2excel({
			exclude:'.noExl',
			name:'Student_list',
			fileext:'.xls',
			exclude_img:true,
			exclude_links:true,
			exclude_input:true
		});

	});
});
</script>
