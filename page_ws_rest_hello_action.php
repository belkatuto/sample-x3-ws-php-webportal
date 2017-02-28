<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php include("includes/head.php"); ?>

<title>Web service executed</title>
</head>

<body role="document">
	<?php include("includes/menu_home.php"); ?>
	
	<header>
		<div class="container">
			<div class="intro-text">
				<div class="intro-heading">Web service executed</div>
				<div class="intro-lead-in">Give the result of the subprogram</div>

			</div>

		</div>
	</header>
	<p />
	<div class="container">
		<div class="bs-component">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Result</h2>

					
                    <?php
																				require_once ('WebServiceREST/SubprogWSHello.php');
																				require_once ('WebServiceREST/UUID.php');
																				$formfirstname 	= $_POST ['formfirstname'];
																				$formlastname 	= $_POST ['formlastname'];
																				
																				$subprogWS 		= new SubprogWSHello();
																				$bodyRequest	= "";
																				$bodyRequest   .= "{\n  \n  \"WSEXEC\": true,\n  \"WSNAME\": \"WSHELLO\",\n  \"WSTEMPLATE\": false,\n  \"WSTYPE\": 1,\n  \"ZWSRPARLINESIN\": [\n    {\n      \"\$uuid\": \"".UUID::v4()."\",\n      \"IN_PARCOD\": \"I_FIRSTNAME\",\n      \"IN_PARVAL\": \"".$formfirstname."\"\n     \n    },\n    {\n      \"\$uuid\": \"cc6019c7-094f-472c-9c31-9f3656ec25de\",\n      \"IN_PARCOD\": \"I_LASTNAME\",\n      \"IN_PARVAL\": \"".$formlastname."\"\n     \n    }\n  ]\n  \n}";
																				$subprogWS->setConfig($bodyRequest);
																				$subprogWS->execute();
																				
																				
																				$err = $subprogWS->getErr();
																				
																				if ($err) {
																					echo "cURL Error #:" . $err;
																				} else {
																				   
																					echo $subprogWS->result();
																					
																				}	
																				
																				?>
																				<div class="container">
																				<div class="intro-text">
																				<div class="intro-heading">Json response</div>
																				<div class="intro-lead-in"><?php var_dump($subprogWS->getResponse());?></div>
																				
																				</div>
																				
																				</div>
																				
								
                   
				</div>
			</div>

		</div>
	</div>
	
<?php include("includes/end_body.php"); ?>
	<script type="text/javascript">
      // c'est ici que l'on va tester jQuery
      $(function(){
    	  var isConnect = '<?PHP echo $isConnect;?>';
    	  set_icon_connect(isConnect);
  // On peut accéder aux éléments.
  // $('#balise') marche.
          //$val = $('#sohnum').attr('placeholder');
    	  //$('#formsohnum').attr('placeholder',$val);
    	 
});

    </script>
</body>
</html>


