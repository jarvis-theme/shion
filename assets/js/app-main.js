var dirTema = document.getElementsByTagName('link')[1].getAttribute('href');

require.config({
	baseUrl: '/',
	shim: {
		"bootstrap"	: {
			deps: ['jquery'],
		},
		"flexslider" : {
			deps : ['jquery'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
	},

	paths: {
		// LIBRARY
		bootstrap 		: ['//maxcdn.bootstrapcdn.com/bootstrap/2.2.1/js/bootstrap.min','js/bootstrap.min'],
		cart			: 'js/cart',
		flexslider		: dirTema+'assets/js/lib/jquery.flexslider',
		fancybox		: dirTema+'assets/js/lib/jquery.fancybox',
		jq_ui			: 'js/jquery-ui',
		jquery 			: ['//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min',dirTema+'assets/js/lib/jquery1.7.2.min'],
		noty			: 'js/jquery.noty',
		respond			: dirTema+'assets/js/lib/respond',
		sharrre			: dirTema+'assets/js/lib/jquery.sharrre',

		// ROUTE
		router          : 'js/router',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		cart          	: 'js/shop_cart',

		// CONTROLLER
		blog            : dirTema+'assets/js/pages/blog',
		home            : dirTema+'assets/js/pages/home',
		main            : dirTema+'assets/js/pages/default',
		member          : dirTema+'assets/js/pages/member',
		produk          : dirTema+'assets/js/pages/produk',
	}
});
require([
	'router',
	'bootstrap',
	'main',
	'cart'
], function(router,b,main,cart){
	// BLOG
	router.define('blog/*', 'blog@run');
	
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// MEMBER
	router.define('member/*', 'member@run');

	// PRODUK
	router.define('produk/*', 'produk@run');
	
	router.run();
	main.run();
	cart.run();
});