
 	<!--Import jQuery before materialize.js-->
<title> Add News | TAPS NITW</title>
<div style="padding-left:100px">
 	<div class="container" style="padding-left:100px">
 		<br><br>
 		<h4> Add News Feed </h4>
 		<br>
 		<form action="cod/add_news_feed" method="POST">
 		 		<div class="row">
 			<div class="input-field col s12 l6">
 				<input id="title" type="text" name="title" class="validate">
 				<label for="title">Title</label>
 			</div>
 		</div>
 		<div class="row">
 			<div class="input-field col s12 l6">
 				<textarea id="content" class="materialize-textarea" name="content"></textarea>
 				<label for="content">Content</label>
 			</div>
 		</div>
 		<button class="btn waves-effect waves-light" type="submit" name="action">
 			<i class="material-icons right">add</i>
 		</button>
 	</form>

 	</div>
</div>
 
 





 