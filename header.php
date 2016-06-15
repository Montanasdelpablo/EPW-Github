<head>
		
	<title> Personal Website </title>

	<?php wp_head(); 

	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo("template_url")?>/style.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic' rel='stylesheet' type='text/css'>

</head>

<body>

<nav class="mainnavigation">
	<ul>
		<li> HOME  </li>
		<li> ABOUT ME</li>
		<li> PORTFOLIO </li>
		<li> BLOG </li>
		<li> CONTACT </li>
	</ul>

	
</nav>

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
