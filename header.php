<head>
		
	<title> Personal Website </title>

	<?php wp_head(); 

	?>
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo("template_url")?>/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo("template_url")?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo("template_url")?>/css/menu.css">	
	
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo("template_url")?>/css/theme-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo("template_url")?>/style.css">
	
	
	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic' rel='stylesheet' type='text/css'>

</head>

<body>



	<script type="text/javascript">
		open = false;

		function opennav ()
		{
			if (open == false) {
			open = true;
			}
			else {
				open = false;
			}
		}

		if (open== true) {
		var menu = document.querySelector('.mainnavigation') // Using a class instead, see note below.
		menu.classList.toggle('mainnavigationopen');
		}
		


	</script>
