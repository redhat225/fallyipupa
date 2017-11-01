angular.module('fally-website-app',['ui.router','fally.controllers','fally.services','fally.directives','ui.materialize'])
		.run(['$rootScope', function($rootScope){
		    // Verifications Here
		    $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams) {
		    	$rootScope.on_loading = true;
		    	$rootScope.on_loading_attribute = 'page_loading';
            });
            $rootScope.$on('$viewContentLoaded', function(event, toState, toParams, fromState, fromParams) {
		    	$rootScope.on_loading = false;
		    	$rootScope.on_loading_attribute = 'page_notloading';
            });

		}])
		.config(['$httpProvider','$urlRouterProvider','$stateProvider','$locationProvider', function($httpProvider,$urlRouterProvider,$stateProvider,$locationProvider){
				// Enabling Html5Mode
				$locationProvider.html5Mode(true);
			    $locationProvider.hashPrefix('!');

			    //routing file
			    $stateProvider.state('app',{
			    	url:'/',
			    	abstract:true,
			    	views:{
			    		"navbar":{
			    			templateUrl:'/element/navbar',
			    			controller:'MainCtrl as mainctrl'
			    		},
			    		"":{
			    			template:'<ui-view/>',
			    			controller:'MainCtrl as mainctrl'
			    		},
			    		"footer":{
			    			templateUrl:'/element/footer',
			    			controller:'MainCtrl as mainctrl'
			    		}
			    	}

			    })
			    .state('app.wellcome',{
			    	url:'wellcome',
			    	templateUrl:'/home/wellcome',
			    	controller:'WellcomeCtrl as wellcomectrl'
			    });

			    $urlRouterProvider.otherwise('wellcome');
				// //Custom Setting $httpProvider
				$httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
						}])