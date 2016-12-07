<div class="panel panel-default container col-md-12">
<div class="panel-body">

<form method="post" action="index.php?r=situation/add-situation">

<div class="row">
	<div class="col-md-4">
	Choose situation type
	</div>
	<div class="col-md-8">
		<div class="form-group">
		 	<select name="type" class="form-control">
		 		<option value="0">Hadees</option>
		 		<option value="1">Situation</option>
		 	</select> <br>
	 	</div>
 	</div>
</div>

	<div class="row">
		<div class="col-md-4">
			Enter the content
		</div>
		<div class="col-md-8">
		 	<div class="form-group">
		 		<textarea name="content" class="form-control"></textarea>
		 	</div>
	 	</div>
 	</div>
 	<div class="row">
 			<div class="col-md-4">
				Enter the tag
			</div>
			<div class="col-md-8">
	 			<div class="form-group">
	 				<input type="text" name="tag" /> <br>
	 			</div>
 			</div>
 	</div>

 	<input type="submit" value="Submit" class="btn btn-success" />

</form>

</div>
</div>