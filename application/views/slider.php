<!-- #gallery -->
  <section id="gallery">
  	<div class="container">
    	<ul id="myRoundabout">
            <?php

            foreach($top_five_videos->result() as $video): ?>
      	
            <li><img src="<?php echo $video->imagen ?>" alt=""></li>
            <?php endforeach; ?>
            
      </ul>
  	</div>
  </section>
  <!-- /#gallery -->
