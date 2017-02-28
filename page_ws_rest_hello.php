
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php include("includes/head.php"); ?>

<title>Web service REST X3 - Hello</title>
</head>

<body role="document">
	<?php include("includes/menu_home.php"); ?>
	
	<header>
		<div class="container">
			<div class="intro-text">
				<div class="intro-heading">WS REST X3 - Hello</div>
				<div class="intro-lead-in">How to call a subprogram X3 <br/> via a web service REST</div>

			</div>

		</div>
	</header>
	<p />
	<div class="container">
		<div class="bs-component">
			<div class="row">
				<div class="col-lg-9 col-md-5 col-sm-3 text-center">
			
				</div>
			</div>
		</div>
	</div>
	<div id="detail" class="container">
		<div class="bs-component">
			<div class="row">
				<div class="col-lg-9 col-md-5 col-sm-3">

					<form class="form-horizontal" action="page_ws_rest_hello_action.php"
						method="post">
						<fieldset>
							<legend>Form</legend>
							<div class="form-group" class="col-lg-4 control-label">
								<label for="formfirstname" class="col-lg-4 control-label">First name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="formfirstname"
										name="formfirstname" placeholder="" value="">
								</div>
							</div>
							<div class="form-group" class="col-lg-4 control-label">
								<label for="formlastname" class="col-lg-4 control-label">Last name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="formlastname"
										name="formlastname" placeholder="" value="">
								</div>
							</div>
							
						</fieldset>

						
						<fieldset>
							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<button type="reset" class="btn btn-default">Cancel</button>
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>



			</div>






		</div>
	</div>
	
<?php include("includes/end_body.php"); ?>
	<script type="text/javascript">
      // c'est ici que l'on va tester jQuery
      $(function(){
  // On peut accéder aux éléments.
  // $('#balise') marche.
  set_icon_connect();var isConnect = '<?PHP echo $isConnect;?>';
  set_icon_connect(isConnect);
  
  
          
		  	
    	  
    	 
});

    </script>
</body>
</html>


