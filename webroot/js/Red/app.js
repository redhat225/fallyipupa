angular.module('fally-website-app',['ui.router','fally.controllers','fally.services','fally.directives','ui.materialize'])
		.run(['$rootScope', function($rootScope){
		    // Verifications Here
		    $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams) {
            });
            $rootScope.$on('$viewContentLoaded', function(event, toState, toParams, fromState, fromParams) {
            });

		}])
		.config(['$httpProvider','$urlRouterProvider','$stateProvider','$locationProvider', function($httpProvider,$urlRouterProvider,$stateProvider,$locationProvider){
				$httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
			}])