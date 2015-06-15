<?php echo $header; ?>
  <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">

            <!--seccion de galería-->
            <?php foreach($all_videos->result() as $video):?>
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                    <img src="<?php echo $video->imagen?>" alt="...">
                    </a>
                </div>
                <div class="col-md-9">
                    <a href="#" class="thumbnail">
                    <h2>
                        <?php echo $video->titulo?>
                    </h2>
                    </a>
                    <p><?php echo $video->descripcion?></p>
                </div>
            </div>
            <?php endforeach; ?>
            <!--seccion de galería-->


            <!--seccion de paginado-->
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--seccion de paginado-->
        </div>
      </div>
    </div>
  </div>
  <?php echo $footer; ?>
