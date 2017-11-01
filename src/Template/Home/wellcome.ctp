<?php $this->layout="blank"; ?>
 <style>
	.grow img {
	  height: 100% !important;
	  width: 100% !important;
	 
	  -webkit-transition: all 1s ease !important;
	     -moz-transition: all 1s ease !important;
	       -o-transition: all 1s ease !important;
	      -ms-transition: all 1s ease !important;
	          transition: all 1s ease !important;
	}
	 
	.grow img:hover {
	  width: 125% !important;
	  height: 125% !important;
	  transition-duration: 0.3s;
	}

	.brighten  data-rel="lightcase:slideshow"img {
	  -webkit-filter: brightness(100%);
	  -webkit-transition: all 1s ease;
	     -moz-transition: all 1s ease;
	       -o-transition: all 1s ease;
	      -ms-transition: all 1s ease;
	          transition: all 1s ease;
	}
	 
	.brighten  data-rel="lightcase:slideshow"img:hover {
	  -webkit-filter: brightness(120%);
	}

</style>
<div class="row mg-padding-top-0 mg-margin-0 mg_prim_background" id="gallery" style="background: url('/img/assets/')">
	    <?php foreach($contents as $content): ?>
	    	 <?php if($content['Size'] > 0): ?>
			   <a class="grow strip brannan brighten" data-strip-group="mygroup" data-rel="lightcase:slideshow" href="https://s3.eu-west-2.amazonaws.com/fallyipupa/<?= $content['Key'] ?>">
			        <img src="https://s3.eu-west-2.amazonaws.com/fallyipupa/<?= $content['Key'] ?>"/>
			    </a>
			<?php endif; ?>
	   <?php endforeach; ?>
</div>

<script>
	$(document).ready(function(){
		$('#gallery').justifiedGallery({
		    rowHeight : 250,
		    lastRow: 'justify',
		    cssAnimation:true,
		    margins:5
		}).on('jg.complete', function(){

		});

		$('#gallery a', this).hover(function(){
				$(this).removeClass('brannan');
			}, function(){
				$(this).addClass('brannan');
			});
	});
</script>