angular.module('fally.controllers',[])
	.controller('MainCtrl',['$scope','NewsletterService','BannerService', function($scope,NewsletterService,BannerService){
		var self = this;
		//checkcookie banner
		BannerService.check().then(function(response){
			    				if(response.data.banner_state==="undone")
									self.openNewsletterModal = true;
			    			}, function(errResponse){
			    				Materialize.toast('Une erreur est survenue', 4000,'red mg-bold white-text');
			    			});
		
		self.show_newsletter_modal = function(){
		    self.openNewsletterModal = true;
		};

		self.show_contact_modal = function(){
		    self.opencontactModal = true;
		};

		self.show_foundation_modal = function(){
		    self.openfoundationModal = true;
		};

		self.show_music_modal = function(){			
		    self.openmusicModal = true;
		};

		self.show_tour_modal = function(){
		    self.opentourModal = true;
		};

		self.show_music_modal = function(){
		    self.openmusicModal = true;
		};

        // Newsletter        
        self.newsletter = function(newsletter){
            self.is_newsletter_subscribing = true;
            newsletter.newsletter_token = 'default';
            NewsletterService.subscribe(newsletter).then(function(response){
                Materialize.toast('Félicitations, votre demande a été enregistrée',4000,'mg_prim_background white-text bold');
                newsletter.newsletter_email = '';
                self.openNewsletterModal = false;
            }, function(errResponse){
               switch(errResponse.status){
                case 401:
                    Materialize.toast('Cette adresse existe déjà',4000,'orange white-text bold');
                break;

                default:
                   Materialize.toast('Une erreur est survenue, veuillez réessayer',4000,'orange white-text bold');
                break;
               }
            }).finally(function(){
                self.is_newsletter_subscribing = false;
            });     
        };



	}])
	.controller('WellcomeCtrl',['$scope','PaceService','$rootScope','S3Services', function($scope,PaceService,$rootScope,S3Services){
		var self = this;

		// console.log(checkCookie);

		self.s3  = S3Services;
		self.prefix_index = 0;
		self.prefix = 'pool_';
		self.is_rest_pics = true;

		self.flushGallery = function(){
			self.prefix_index = self.prefix_index+1;
			var request_prefix = self.prefix+self.prefix_index+'/';
			    S3Services.loadMore(request_prefix).then(function(response){
				$('#gallery').append(response.data);
				$('#gallery').justifiedGallery('norewind');
				$('#gallery a').hover(function(){
					$(this).removeClass('brannan');
				}, function(){
					$(this).addClass('brannan');
				});
			}, function(errResponse){
		        self.is_rest_pics = false;
		        console.log('no more pics!!!');
			});
		};

		// infinite scrolling feature
		$(window).scroll(function() {
		  if($(window).scrollTop() + $(window).height() == $(document).height()) {
		  	if(self.is_rest_pics)
		  	   self.flushGallery();
		  }
		});



	}])