<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>
<body>

	<div class ="container">
		<!-- Add Menu Here -->
		<div class="row">
		    <div class="twelve columns">
		        <?php wp_nav_menu(array(
		        	'menu' => 'Another Menu',
		            'sort_column' => 'menu_order', 
		            'container_class' => 'blank-menu-header'
		            ));?>
		         <ul class="social-media"> 
			    	<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
			    	<li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest-square"></i></a></li>
			    	<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
			    </ul>   
		    </div>
		</div>
		

		
<!-- END HEADER -->
