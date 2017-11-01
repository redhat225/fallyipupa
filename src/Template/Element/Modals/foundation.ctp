<style>
	.visit-fally-btn{
		background: transparent;
		border:2px solid red;
		color: red;
	}

	.visit-fally-btn:hover{
		background: red;
		transition-duration: 0.3s;
		color: white;
	}
</style>

<!-- Modal Trigger -->
<div class="col hide">
    <a class='btn' data-target='foundationModal' dismissible="true" open="mainctrl.openfoundationModal" modal>Show Modal</a>
</div>
<!-- Modal Structure -->
<div id="foundationModal" class="modal">
    <div class="modal-content mg-padding-0">
		<div class="row mg-margin-0 white">
			<div class="col l7 m6 s12 hide-on-small-only mg-padding-0" id="foundation-pic" style="background:url('/img/assets/wallpaper/cover_2.jpg') 70%;">	
						<div style="margin-top: 50%;margin-bottom: 50%;">&nbsp;</div>
			</div>
			<div class="col l5 m6 s12 center" style="background:url('/img/assets/wallpaper/fif_2.jpg') 74% 62%">
					<h5 class="uppercase mg-padding-top-15 bold mg-chub red-text">The foundation</h5>
					<div class="divider"></div>
					<h6 class="mg_sec_color_3 mg-padding-top mg-size-17 left-align mg-padding-top-20 mg-padding-top-20">
						Fally Ipupa Foundation (FIF) aims to help the different segments of the population living in need. IFF has already conducted its very first action. For example, she has rehabilitated the buildings of the St Jean-Baptiste school, where the artist did a part of her studies and gave her 100 benches and desks.
						IFF funds will be raised during concerts and other socio-cultural events it plans to hold.
					</h6>

					<div class="col l6 m12 s12 mg-padding-0 mg-margin-top-10">
				      <a href="https://foundation.riehl-emmanuel.xyz" target="_blank" class="mg-chub mg-size-18 btn mg-height-49 visit-fally-btn mg-padding-top-5 bold mg-width-100-perc">Visit</a>
					</div>

					<div class="col l6 m12 s12 mg-padding-0 mg-margin-top-10 mg-margin-bottom-30">
 						 <a href="https://foundation.riehl-emmanuel.xyz" target="_blank" class="mg-chub mg-size-18 btn mg-height-49 red white-text mg-padding-top-5 bold mg-width-100-perc">Donate</a>
					</div>
				    

			</div>
		</div>
    </div>
</div>


<script>
	$('#foundation-pic').addClass('magictime vanishIn');
</script>