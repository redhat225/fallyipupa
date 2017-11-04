	    <?php foreach($photos->photoset->photo as $photo): ?>
			   <a class="grow strip brannan brighten" data-strip-group="mygroup" data-rel="lightcase:slideshow" href="https://farm<?= $photo->farm ?>.staticflickr.com/<?= $photo->server.'/'.$photo->id.'_'.$photo->secret.'.jpg' ?>">
			        <img src="https://farm<?= $photo->farm ?>.staticflickr.com/<?= $photo->server.'/'.$photo->id.'_'.$photo->secret.'.jpg' ?>"/>
			    </a>
	   <?php endforeach; ?>