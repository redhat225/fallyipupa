angular.module('fally.services',[])
   .factory('S3Services',['$http','$q', function($http,$q){
      return{
         loadMore: function(auto_prefix){
            return $http.get('/home/load-more',{params:{prefix:auto_prefix}}).then(function(response){
                  return response;
            }, function(errResponse){
               return $q.reject(errResponse);
            });
         }
      }
   }]).factory('NewsletterService',['$http','$q', function($http,$q){
         return{
            subscribe: function(evidence){
               return $http.post('/newsletter/subscribe',evidence).then(function(response){
                  return response;
               }, function(errResponse){
                  return $q.reject(errResponse);
               });
            }
         };
      }]).factory('BannerService',['$http','$q', function($http,$q){
         return{
            check: function(){
               return $http.get('/home/bannerState').then(function(response){
                  return response;
               }, function(errResponse){
                  return $q.reject(errResponse);
               });
            }
         }
      }])