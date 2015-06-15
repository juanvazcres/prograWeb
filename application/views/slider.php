<!-- #gallery -->
  <section id="gallery">
  	<div class="container">
    	<ul id="myRoundabout">
            <?php

            foreach($top_five_videos->result() as $video): ?>
      	
            <li><a href="<?php echo base_url()."index.php/Galeria/index/".$video->idItem ; ?>"><img src="<?php echo $video->imagen ?>" alt=""></a></li>
            <?php endforeach; ?>
            
      </ul>
  	</div>
  </section>
  <!-- /#gallery -->
