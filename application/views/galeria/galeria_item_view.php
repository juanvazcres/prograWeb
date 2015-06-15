
<?php
echo $header;
$all_videos=$all_videos->result();
foreach( $all_videos as $video): ?>
    <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <!-- 16:9 aspect ratio -->
                    <div align="center" class="embed-responsive embed-responsive-16by9">
                    <?php echo $video->url; ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <h2>
                        <?php echo $video->titulo;?>
                    </h2>
                    <p>
                        <?php echo  $video->descripcion; ?>
                    </p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

<?php endforeach;
echo $footer;
?>

