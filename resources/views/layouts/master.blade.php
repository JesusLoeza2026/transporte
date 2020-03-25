<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta name="token" id="token" value="{{csrf_token()}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('titulo')</title>
	<meta name="description" content="Blueprint: A basic template for a responsive multi-level menu" />
	<meta name="keywords" content="blueprint, template, html, css, menu, responsive, mobile-friendly" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="ad/favicon.ico">
	<!-- food icons -->
	<link rel="stylesheet" type="text/css" href="ad/css/organicfoodicons.css" />
	<!-- demo styles -->
	<link rel="stylesheet" type="text/css" href="ad/css/demo.css" />
	<!-- menu styles -->
	<link rel="stylesheet" type="text/css" href="ad/css/component.css" />
    <script src="ad/js/modernizr-custom.js"></script>
	{{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="dist/semantic.css">
	<link rel="stylesheet" type="text/css" href="kitchensink.css">
    <link rel="stylesheet" href="css/recurso.css">
	<script src="js/jquery2.0.3.js"></script>
	<script src="js/jquery.address-1.5.js"></script>
	<link rel="stylesheet" href="sweetAlert2/sweetalert2.min.css">  
  

	<!-- Used with Tab History !-->
	
	<script src="js/semantic.js"></script>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="sweetAlert2/sweetalert2.min.css"> 
    <script src="js/vue.js"></script>
    <style>
    .color{
        color: azure;
    }
    .ctf{
        border-bottom-color: black;
        color:black;
    }
    </style>
    
</head>

<body>
	<!-- Main container -->
	<div class="container">
		<!-- Blueprint header -->
		<header class="bp-header cf">
			<div class="dummy-logo">
				<div class="dummy-icon foodicon "><img src="img/1.jpg" width="20%"></div>
            <h2 class="dummy-heading color">{{Session::get('usuario')}}</h2>
			</div>
			<div class="bp-header__main">
				<span class="bp-header__present">Live Software <span class="bp-tooltip bp-icon bp-icon--about" data-content="UTC izamal"></span></span>
			
				<nav class="bp-nav">
					<a class="bp-nav__item bp-icon bp-icon--prev" href="{{url('salir')}}" data-info="Regresar"><span>Salir</span></a>
					</nav>
			</div>
		</header>
		<button class="action action--open ctf" aria-label="Open Menu"><span class="icon icon--menu"></span></button>
		<nav id="ml-menu" class="menu">
			<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
			<div class="menu__wrap">
				<ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="All">
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1" aria-owns="submenu-1">Transportes</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-2" aria-owns="submenu-2" href="#">Choferes</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-3" aria-owns="submenu-2" href="#">Mi Cuenta</a></li>

				</ul>
				<!-- Submenu 1 -->
				<ul data-menu="submenu-1" id="submenu-1" class="menu__level" tabindex="-1" role="" aria-label="Vegetables">
					
					<li class="menu_item" role="menuitem"><a class="menu__link" href="detalles">Detalles</a></li>

					
					</ul>
		
				<!-- Submenu 2 -->
				<ul data-menu="submenu-2" id="submenu-2" class="menu__level" tabindex="-1" role="menu" aria-label="Fruits">
					<li class="menu_item" role="menuitem"><a class="menu__link" href="detalleschofer">Detalles de choferes</a></li>
					<li class="menu_item" role="menuitem"><a class="menu__link" href="admichoferrr">Administrar</a></li>

				</ul>
				<!-- Submenu 3 -->
				<ul data-menu="submenu-3" id="submenu-3" class="menu__level" tabindex="-1" role="menu" aria-label="Fruits">
                        <li class="menu_item" role="menuitem"><a class="menu__link" href="cambio">Cambiar Contraseña</a></li>
                        <li class="menu_item" role="menuitem"><a class="menu__link" href="#">Editar mis datos</a></li>
    
                    </ul>
			</div>
		</nav>
		<div class="content">
			@yield('contenido')
		</div>
	</div>
	@stack('scripts')
	<!-- /view -->
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

	<script src="ad/js/classie.js"></script>
	<script src="ad/js/dummydata.js"></script>
	<script src="ad/js/main.js"></script>
	<script>
	(function() {
		var menuEl = document.getElementById('ml-menu'),
			mlmenu = new MLMenu(menuEl, {
				// breadcrumbsCtrl : true, // show breadcrumbs
				// initialBreadcrumb : 'all', // initial breadcrumb text
				backCtrl : false, // show back button
				// itemsDelayInterval : 60, // delay between each menu item sliding animation
				onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
			});

		// mobile menu toggle
		var openMenuCtrl = document.querySelector('.action--open'),
			closeMenuCtrl = document.querySelector('.action--close');

		openMenuCtrl.addEventListener('click', openMenu);
		closeMenuCtrl.addEventListener('click', closeMenu);

		function openMenu() {
			classie.add(menuEl, 'menu--open');
			closeMenuCtrl.focus();
		}

		function closeMenu() {
			classie.remove(menuEl, 'menu--open');
			openMenuCtrl.focus();
		}

		// simulate grid content loading
		var gridWrapper = document.querySelector('.content');

		function loadDummyData(ev, itemName) {
			ev.preventDefault();

			closeMenu();
			gridWrapper.innerHTML = '';
			classie.add(gridWrapper, 'content--loading');
			setTimeout(function() {
				classie.remove(gridWrapper, 'content--loading');
				gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
			}, 700);
		}
	})();
	</script>
	<style type="text/css">
		.transition.demo .button {
		  margin-bottom: 0.5em;
		}
		</style>
		<script type="text/javascript">
		$(document)
		  .ready(function(){
			$('.transition.demo .button')
			  .on('click', function() {
				var animation = $(this).text();
				if(typeof animation == 'string') {
				  animation = animation.toLowerCase();
				}
				$('.transition.demo .image')
				  .each(function(index, value){
					var $this = $(this);
					setTimeout(function() {
					  $this.transition(animation);
					}, index * 100)
				  })
				;
			  })
			;
		  })
		;
		</script>
		
<script src="js/recurso.js"></script>
 <!--    Plugin sweet Alert 2  -->
 <script src="sweetAlert2/sweetalert2.all.min.js"></script>


</body>

</html>
