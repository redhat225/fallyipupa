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

<div ng-controller="WellcomeCtrl as wellcomectrl" class="row mg-padding-top-0 mg-margin-0 mg_prim_background" id="gallery" style="background: url('/img/assets/')">
	    <?php foreach($photos->photoset->photo as $photo): ?>
			   <a class="grow strip brannan brighten" data-strip-group="mygroup" data-rel="lightcase:slideshow" href="https://farm<?= $photo->farm ?>.staticflickr.com/<?= $photo->server.'/'.$photo->id.'_'.$photo->secret.'.jpg' ?>">
			        <img alt="Fally Ipupa world music" src="https://farm<?= $photo->farm ?>.staticflickr.com/<?= $photo->server.'/'.$photo->id.'_'.$photo->secret.'.jpg' ?>"/>
			    </a>
	    <?php endforeach; ?>
</div>



<script>
	$(document).ready(function(){
		$('#gallery').justifiedGallery({
		    rowHeight : 250,
		    cssAnimation:true,
		    margins:5,
		    sizeRangeSuffixes: {
			    100 : '_t', // used with images which are less than 100px on the longest side
			    240 : '_m', // used with images which are between 100px and 240px on the longest side
			    320 : '_n', // ...
			    500 : '',
			    640 : '_z',
			    1024 : '_b' // used which images that are more than 640px on the longest side
			},
			captions:false
		});

		$('#gallery a', this).hover(function(){
				$(this).removeClass('brannan');
			}, function(){
				$(this).addClass('brannan');
			});
	});
</script>