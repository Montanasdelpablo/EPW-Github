<head>
		
	<title> Personal Website </title>

	<?php wp_head(); 

	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo("template_url")?>/style.css">

</head>

<body>

<nav class="mainnavigation">
	<ul>
		<li> HOME  </li>
		<li> PORTFOLIO </li>
		<li> ABOUT ME</li>
		<li> MY BLOG </li>
		<li> CONTACT </li>
	</ul>

	
</nav>

	<button id="button" value="Show menu" onclick="opennav();"> </button>
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
