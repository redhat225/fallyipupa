<!-- Modal Trigger -->
<div class="col hide">
    <a class='btn' data-target='newsletterModal' dismissible="true" open="mainctrl.openNewsletterModal" modal>Show Modal</a>
</div>
<!-- Modal Structure -->
<div id="newsletterModal" class="modal">
    <div class="modal-content mg-padding-0">
		<div class="row mg-margin-0 mg_sec_background_1">
			<div class="col l5 m5 s12 hide-on-med-and-down mg-padding-0 mg_sec_background_1">
				<div class="container">
					<div class="container">
						<?= $this->Html->image('assets/logo/website_logo_3.png',['style'=>'display:block;width:100%;margin-top:50%;','alt'=>'Fally ipupa website logo']) ?>	

						 <button class="btn btn-primary white-text bold mg_prim_background none-border mg-size-18 mg-chub" style="width:100%;">Newsletter</button>
					</div>
				</div>
			</div>
			<div class="col l7 m12 s12 center" style="background: url('/img/assets/wallpaper/images.jpg') #f4f4f4 120% -14% no-repeat;">
				<section>
					<h1 class="uppercase mg_sec_color_4 mg-padding-top-15 bold mg-chub mg-size-22 mg-margin-bottom-10" style="clear:both;">Newsletter</h1>
					<div class="divider"></div>

					<h2 class="mg-size-15 mg_prim_color mg-padding-top-10 mg-chub bold mg-margin-bottom-10" style="clear:both;">
						<span>Musique</span> 
						<i class="ion-record mg_prim_color ion-record white-text mg-size-5"></i> 
						<span>Posts</span> 
						<i class="ion-record mg_prim_color ion-record white-text mg-size-5"></i> 
						<span>Event</span> <i class="ion-record mg_prim_color ion-record white-text mg-size-5"></i>
						<span>Fondation</span>
					</h2>

					<h3 class="mg_sec_color_4 mg-padding-top mg-size-17 mg-weight-500 mg-margin-top-0 mg-margin-bottom-15" style="clear:both;">En temps réel, soyez alerté des dernières nouveautés sur Fally Ipupa, et celà sans frais cachés!</h3> 
					
					<p class="social-icons">
						<a href="https://www.facebook.com/FallyIpupaOfficial/" class="hvr-bob">
							 <i class="mg-margin-left-30 ion-social-facebook small mg_prim_color mg-margin-right-0 "></i>
						</a>

						<a href="https://www.instagram.com/fallyipupa01/" class="hvr-bob">
							<i class="mg-margin-left-30 ion-social-instagram-outline small mg_prim_color mg-margin-right-0"></i>
						</a>

						<a href="https://twitter.com/fallyipupa01" class="hvr-bob">
		                    <i class="mg-margin-left-30 ion-social-twitter small mg_prim_color mg-margin-right-0"></i>
						</a>

						<a href="https://www.youtube.com/user/fallyipupa" class="hvr-bob">
		                    <i class="mg-margin-left-30 ion-social-youtube small mg_prim_color mg-margin-right-0"></i>
						</a>
					</p>

				   
	               <form class="mg-margin-top-15" name="newsletter_subscription" ng-submit="mainctrl.newsletter(newsletter)">
		                <div class="col l12 s12 m12 mg-margin-top-0 input-field contrast-input mg-padding-0 mg-padding-left-0">
		                      <input type="email" required placeholder="E-Mail" ng-model="newsletter.newsletter_email" ng-pattern="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-z]{2,8}$/">
		                </div>
		                <div class="col l12 s12 m12 mg-margin-top-0 mg-margin-bottom-25 mg-padding-0">
		                     <button type="submit" ng-disabled="newsletter_subscription.$invalid || mainctrl.is_newsletter_subscribing" class="mg-chub mg-size-18 btn mg-height-49 mg_prim_background white-text mg-padding-top-5 bold mg-width-100-perc">Tokooos
		                     </button>	
		                </div>
	              </form>
				</section>
			</div>
		</div>
    </div>
</div>