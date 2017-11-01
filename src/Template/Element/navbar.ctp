<style>
      nav ul.main-menu a:hover {
          background-color: transparent !important;
          color: #9656a4;
          transition-duration: 0.3s;
      }

      .brighten-item:hover{
        color: yellow !important;
        transition-duration: 0.3s;
      }
</style>

<div class="navbar-fixed" id="wrapper-navbar">
  <nav class="mg_sec_background_3" id="navbar">
    <div class="nav-wrapper">

        <a href="#" data-activates="mobile-demo" class="side-nav-button left"><i class="ion-android-menu small mg_prim_color mg-margin-left-20 brighten-item mg-size-36"></i>
        </a>
        
        <ul class="center brand-logo scrolling-logo">
            <li class="mid-logo-scrolling mg-height-64">
              <a class="mg-line-height-92 mg-height-64">
                <?= $this->Html->image('assets/logo/website_logo_2.png',['class'=>'mg-width-90']) ?>
              </a>
            </li>
        </ul>
        
        <ul id="nav-mobile" class="center hide-on-med-and-down brand-logo main-menu top-menu-wrapper-items">
              <li>

                 <a target="_blank" ng-click="mainctrl.show_music_modal()" class="mg-chub mg-size-17 mg-padding-left-0 bold"><span class="new badge mg_prim_background"></span> Music </a>
              </li> 
              <i class="ion-record white-text ion-record white-text mg-size-5"></i>
             
              <li ng-click="mainctrl.show_tour_modal()">
                <a class="mg-chub mg-size-17 mg-padding-left-0 bold">Tour</a>
              </li>
              <i class="ion-record white-text ion-record white-text mg-size-5"></i>

              <li>
                <a ng-click="mainctrl.show_newsletter_modal()" class="mg-chub mg-size-17 mg-padding-left-0 bold">Newsletter</a>
              </li> 

               <i class="ion-record white-text ion-record white-text mg-size-5"></i>
              <li>
                <a ng-click="mainctrl.show_foundation_modal()" class="mg-chub mg-size-17 mg-padding-left-0 bold">Foundation</a>
              </li>
                        <i class="ion-record white-text ion-record white-text mg-size-5"></i>
              <li>
                <a ng-click="mainctrl.show_contact_modal()" class="mg-chub mg-size-17 mg-padding-left-0 bold">Contact</a>
              </li> 
        </ul>


      <ul id="nav-mobile" class="right hide-on-med-and-down top-menu-wrapper-items">
        <li class="social-icons-item mg_sec_color_5 tooltipped" data-tooltip="Facebook" data-delay="5s" data-position="left">
            <a href="https://www.facebook.com/FallyIpupaOfficial/" target="_blank">
               <i class="ion-social-facebook social-icon-element small white-text right"></i>
            </a>
        </li>
        <li class="social-icons-item mg_sec_color_5 tooltipped" data-tooltip="Instagram" data-delay="5s" data-position="left">
           <a href="https://www.instagram.com/p/BamII_LjPOt/" target="_blank">
              <i class="ion-social-instagram-outline social-icon-element right small white-text"></i>
            </a>
         </li>
        <li class="social-icons-item mg_sec_color_5 tooltipped" data-tooltip="Twitter" data-delay="5s" data-position="left">
           <a href="https://twitter.com/fallyipupa01">
             <i class="ion-social-twitter social-icon-element right small white-text"></i>
           </a>
         </li>
        <li class="social-icons-item mg_sec_color_5 tooltipped" data-tooltip="YouTube" data-delay="5s" data-position="left">
           <a href="https://www.youtube.com/user/fallyipupa" target="_blank">
             <i class="ion-social-youtube-outline social-icon-element right small white-text"></i>
           </a>
         </li>
      </ul>

    </div>
  </nav>
</div>

    <div class="row center mg-margin-bottom-0 mg-padding-top-15 mg-padding-bottom-15" style="background:url('/webroot/img/assets/shapes/shape_2.png') no-repeat;">
        <?= $this->Html->image('assets/logo/website_logo.png',['class'=>'mg-width-136']) ?>
    </div>
    <!-- SideNav -->
      <ul class="side-nav mg_sec_background_3" id="mobile-demo">
          <li class="center mg-margin-top-20">
             <?= $this->Html->image('assets/logo/website_logo_2.png',['style'=>'width:180px;margin-right:30px;']) ?>
          </li>

          <li ng-click="mainctrl.show_music_modal()" class="mg_sec_background_3" style="border-top: 3px solid #ff00ff">
            <a target="_blank" class="mg-chub mg-size-17 mg-padding-left-65 white-text"><span class="new badge mg_prim_background"></span> Music</a>
          </li>

          <li class="mg_sec_background_3" ng-click="mainctrl.show_tour_modal()" style="border-top: 3px solid #ff00ff">
            <a class="mg-chub mg-size-17 mg-padding-left-65 white-text">Tour</a>
          </li>

          <li class="mg_sec_background_3" style="border-top: 3px solid #ff00ff" ng-click="mainctrl.show_newsletter_modal()">
            <a class="mg-chub mg-size-17 mg-padding-left-65 white-text">Newsletter</a>
          </li> 


          <li ng-click="mainctrl.show_foundation_modal()" class="mg_sec_background_3" style="border-top: 3px solid #ff00ff"><a href="collapsible.html" class="mg-chub mg-size-17 mg-padding-left-65 white-text">Foundation</a></li>


          <li ng-click="mainctrl.show_contact_modal()" class="mg_sec_background_3" style="border-top: 3px solid #ff00ff">
            <a class="mg-chub mg-size-17 mg-padding-left-65 white-text">Contact</a>
          </li> 

          <li class="mg_sec_background_1 mg-margin-top-0 mg-height-50">
             <a href="https://www.facebook.com/FallyIpupaOfficial/" target="_blank" class="left mg-padding-right-0">
               <i class="mg-margin-left-30 ion-social-facebook small white-text mg-margin-right-0"></i>
             </a>
             <a href="https://www.instagram.com/fallyipupa01/" class="left mg-padding-0" target="_blank">
               <i class="mg-margin-left-30 ion-social-instagram-outline small white-text mg-margin-right-0"></i>
             </a>
             <a href="https://twitter.com/fallyipupa01" class="left mg-padding-0" target="_blank">
               <i class="mg-margin-left-30 ion-social-twitter small white-text mg-margin-right-0"></i>
             </a>
             <a href="https://www.youtube.com/user/fallyipupa" class="left mg-padding-0" target="_blank">
               <i class="mg-margin-left-30 ion-social-youtube-outline small white-text mg-margin-right-0"></i>
             </a>
               
             </a>
           </li>
      </ul>


    <div class="fixed-action-btn navigation-button" ng-click="mainctrl.trigger_scroll()">
      <a class="btn-floating btn-large mg_sec_background_3">
        <i class="small ion-android-navigate mg_prim_color brighten-item"></i>
      </a>
    </div>
        
      <?= $this->element('Modals/contact') ?>
      <?= $this->element('Modals/newsletter') ?>
      <?= $this->element('Modals/foundation') ?>
      <?= $this->element('Modals/tour') ?>
      <?= $this->element('Modals/music') ?>

    <script>
    $(document).ready(function(){
        $('.tooltipped').tooltip();
        $('.scrolling-logo').hide();
        $('.navigation-button').hide();

         $(".side-nav-button").sideNav();

          $('#tour-dates').slick({
                autoplay: true,
                autoplaySpeed: 2000,
                dots:false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false
          });


        $(window).scroll(function() {
          var scrollTop = $(window).scrollTop();
           if(scrollTop>=200)
           {
               $('.main-menu').fadeOut('fast');
               if(scrollTop>250)
                 $('.scrolling-logo').fadeIn('fast');
                if(scrollTop<250)
                 $('.scrolling-logo').fadeOut('fast');

               if(scrollTop>800)
                $('.navigation-button').fadeIn();

               if(scrollTop<800)
                 $('.navigation-button').fadeOut();
           }
           else
           {
                 $('.scrolling-logo').fadeOut('fast');

               $('.main-menu').fadeIn('fast');
           }
        });

        $('.mid-logo-scrolling').addClass('magictime vanishIn');
        $('.navigation-button').on('click', function(){
          $('#navbar').scroll();
        });
      });
    </script>

