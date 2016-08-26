<title> Delete Visit | TAPS NITW</title>
<div style="padding-left:300px">
 	<div class="container" style="padding-left:100px">
 		<br><br>
 		<h4> Delete Company Visit</h4>
 		<br>
 		<form action="cod/delete_company_visit" method="POST">
 		 		 <!-- obj null handling -->


                 <div class="row">
				  <select name="company_id">
				  <?php foreach ($query as $obj) :?>
				   
				  <option value="<?php echo $obj['company_id'] ?>"><?php echo $obj['title']?></option>
				   <?php endforeach ;?>
				  </select>
				</div>


 		<button class="btn waves-effect waves-light" type="submit" name="action">
 			<i class="material-icons right">send</i>
 		</button>
 	</form>

 	</div>
</div>