<!-- Modal Trigger -->
<div class="col hide">
    <a class='btn' data-target='tourModal' dismissible="true" open="mainctrl.opentourModal" modal>Show Modal</a>
</div>
<!-- Modal Structure -->
<div id="tourModal" class="modal">
    <div class="modal-content mg-padding-0">
		<div class="row mg-margin-0 mg_sec_background_2">
			<div class="col l7 m7 s12 mg-padding-0 hide-on-med-and-down" id="tour-pic" style="background:url('/img/assets/wallpaper/cover_1.jpg') 50%;"">	
					<div style="margin-top: 50%;margin-bottom: 50%;">&nbsp;</div>
			</div>
			<div class="col l5 m12 s12 center mg-padding-0" id="tour-dates">
				<div>
					<?= $this->Html->image("assets/tour/tour_1.jpg",['width'=>'98.5%','alt'=>'Fally Ipupa tour 1']) ?>
				</div>
				<div>
				    <?= $this->Html->image("assets/tour/tour_1.jpg",['width'=>'98.5%','alt'=>'Fally Ipupa tour 1']) ?>
				</div>
				<div>
				    <?= $this->Html->image("assets/tour/tour_1.jpg",['width'=>'98.5%','alt'=>'Fally Ipupa tour 1']) ?>
				</div>
				<div>
					<?= $this->Html->image("assets/tour/tour_1.jpg",['width'=>'98.5%','alt'=>'Fally Ipupa tour 1']) ?>
				</div>
			</div> 	

		</div>
    </div>
</div>