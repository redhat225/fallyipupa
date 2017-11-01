<!-- Modal Trigger -->
<div class="col hide">
    <a class='btn' data-target='newsletterModal' dismissible="true" open="mainctrl.openNewsletterModal" modal>Show Modal</a>
</div>
<!-- Modal Structure -->
<div id="newsletterModal" class="modal">
    <div class="modal-content mg-padding-0">
		<div class="row mg-margin-0 mg_sec_background_1">
			<div class="col l5 m5 s12 hide-on-small-only mg-padding-0 mg_sec_background_1">
				<div class="container">
					<div class="container">
						<?= $this->Html->image('assets/logo/website_logo_3.png',['style'=>'display:block;width:100%;margin-top:50%;']) ?>	

						 <button class="btn btn-primary white-text bold mg_prim_background none-border mg-size-18 mg-chub" style="width:100%;">Newsletter</button>
					</div>
				</div>
			</div>
			<div class="col l7 m7 s12 center" style="background: url('/img/assets/wallpaper/images.jpg') #f4f4f4 120% -14% no-repeat;">
				<h5 class="uppercase mg_sec_color_4 mg-padding-top-15 bold mg-chub" style="clear:both;">Follow Me</h5>
				<div class="divider"></div>

				<h6 class="mg-size-15 mg_prim_color mg-padding-top-0 mg-chub bold" style="clear:both;">
					<span>Music</span> 
					<i class="ion-record mg_prim_color ion-record white-text mg-size-5"></i> 
					<span>Tour</span> 
					<i class="ion-record mg_prim_color ion-record white-text mg-size-5"></i> 
					<span>Event</span> <i class="ion-record mg_prim_color ion-record white-text mg-size-5"></i>
					<span>Foundation</span>
				</h6>

				<h6 class="mg_sec_color_4 mg-padding-top mg-size-17 mg-weight-500 mg-margin-top-15 mg-margin-bottom-15" style="clear:both;">Be noticed on every posts about Fally Ipupa. Its free and no hidden fees.</h6> 

			    <i class="mg-margin-left-30 ion-social-snapchat small mg_prim_color mg-margin-right-0 "></i>
                <i class="mg-margin-left-30 ion-social-instagram-outline small mg_prim_color mg-margin-right-0"></i>
                <i class="mg-margin-left-30 ion-social-twitter small mg_prim_color mg-margin-right-0"></i>
                <i class="mg-margin-left-30 ion-social-facebook small mg_prim_color mg-margin-right-0"></i>

               <form class="mg-margin-top-15" name="newsletter_subscription" ng-submit="mainctrl.newsletter(newsletter)">
                <div class="col l12 s12 m12 mg-margin-top-0 input-field contrast-input mg-padding-0 mg-padding-left-0">
                      <input type="email" required placeholder="E-Mail" ng-model="newsletter.newsletter_email" ng-pattern="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-z]{2,8}$/">
                </div>
                <div class="col l12 s12 m12 mg-margin-top-0 mg-margin-bottom-25 mg-padding-0">
                     <button type="submit" ng-disabled="newsletter_subscription.$invalid || mainctrl.is_newsletter_subscribing" class="mg-chub mg-size-18 btn mg-height-49 mg_prim_background white-text mg-padding-top-5 bold mg-width-100-perc">Tokooos
                     </button>	
                </div>
              </form>

			</div>
		</div>
    </div>
</div>