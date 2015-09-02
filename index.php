<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>KeyGen.io - Random Key Generator</title>
	<meta name="description" content="Random Key Generator for Passwords, Encryption Keys, WPA Keys, WEP Keys, CodeIgniter Keys, Laravel Keys, and much more"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<!-- Loading Bootstrap -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Loading Font Awesome Icons -->
	<link href="css/font-awesome.min.css" rel="stylesheet">

	<!-- Loading Drunken Parrot UI -->
	<link href="css/drunken-parrot.css" rel="stylesheet">
	<link href="css/demo.css" rel="stylesheet">

	<link rel="shortcut icon" href="favicon.ico">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>
<body data-spy="scroll" data-target="#sidenav" data-offset="100">
	<div class="promo">
		<p class="text-center">Don't got what you're looking for! <a href="mailto:mark@webman.io">Send us a mail</a>.</p>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="componant-section" id="thumbnails">
					<h2 class="demo-section-title">KeyGen.io - Random Key Generators</h2>
					<div class="row">
						<?php
						
						foreach ($generators AS $key => $g)
						{
							?>
							
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="thumbnail thumbnail-caption">
							      	<img src="images/<?php echo $key; ?>-header.jpg" alt="100%x180">
							      	<div class="caption">
								        <h4><?php echo $g['name']; ?></h4>
								        <p>
									        <div class="form-group" style="padding-bottom: 40px;">
												<label class="col-sm-2 control-label">Key</label>
												<div class="col-sm-10">
													<div class="input-icon">
														<span class="fa fa-key"></span>
														<input id="input-<?php echo $key; ?>" type="text" class="form-control" placeholder="generating...">
													</div>
												</div>
											</div>
								        </p>
								        <p>
								        	<a href="#fakeLink" class="btn btn-primary" style="width: 45%; float: left;" onclick="copy('<?php echo $key; ?>')">Copy</a>
								        	<a href="#fakeLink" class="btn btn-default btn-stroke" style="width: 45%; float: right;" onclick="generate('<?php echo $key; ?>')">New</a>
								        	<div style="clear: both;"></div>
								        </p>
							      	</div>
							    </div>
							</div>
							
							<?php
						}
						
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/checkbox.js"></script>
	<script src="js/radio.js"></script>
	<script src="js/bootstrap-switch.js"></script>
	<script src="js/toolbar.js"></script>
	<script src="js/application.js"></script>
	<script>
	function generate(name)
	{
		$('#input-'+name).val('');
		$.ajax({
			url: "/api/"+name+".php"
		}).done(function(data)
		{
			$('#input-'+name).val(data);
		});
	}
	function copy(name) {
		var value = $('#input-'+name).val();
		window.prompt("Copy to clipboard: Ctrl+C, Enter", value);
	}
	generate('password');
	generate('strongpassword');
	generate('codeigniter');
	generate('laravel');
	</script>

	</body>
</html>
