	    <?php foreach($contents as $content): ?>
	    	 <?php if($content['Size'] > 0): ?>
			   <a class="grow strip brannan brighten"  data-strip-group="mygroup" data-rel="lightcase:slideshow" href="https://s3.eu-west-2.amazonaws.com/fallyipupa/<?= $content['Key'] ?>">
			        <img src="https://s3.eu-west-2.amazonaws.com/fallyipupa/<?= $content['Key'] ?>"/>
			    </a>
			<?php endif; ?>
	   <?php endforeach; ?>