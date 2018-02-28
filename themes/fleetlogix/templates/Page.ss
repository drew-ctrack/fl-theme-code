<!doctype html>
<html class="no-js" lang="en">
<head>
	<% base_tag %>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FleetLogix</title>
	<link rel="stylesheet" href="$ThemeDir/assets/css/app.css">
	
</head>
<body>
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	
	<!-- mobile menu -->
	<div class="menu-wrap">
		<nav class="menu">
			<ul class="nav-menu">
				<% loop Menu(1) %>
					<li class="nav-item"><a href="$Link">$Title</a></li>
				<% end_loop %>
			</ul>
			<button class="close-button" id="close-button">X</button>
		</nav>
	</div>
	<button class="menu-button fa fa-bars" id="open-button"><span></button>
        
	<% include Header %>
          
	$Layout
      
	<% include Footer %>
    
	<script src="$ThemeDir/assets/js/app.js"></script>

	<script src="$ThemeDir/assets/js/gallery/featherlight.js"></script>
	<script src="$ThemeDir/assets/js/gallery/featherlight.gallery.js"></script>
	<script src="$ThemeDir/assets/js/gallery/owl.carousel.js"></script>
	<script src="$ThemeDir/assets/js/gallery/owl.navigation.js"></script>
	<script src="$ThemeDir/assets/js/gallery/owl.autoplay.js"></script>
	<script src="$ThemeDir/assets/js/gallery/gallery.js"></script>
</body>
</html>
