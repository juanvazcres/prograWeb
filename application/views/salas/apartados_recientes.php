<!-- aside -->
        <?php
            
        ?>
          <aside>
            <h2>Apartados <span>Recientes</span></h2>
            <!-- .news -->
              <?php
                if($top_five_apartados):
              ?>
            <ul class="news">
                <?php
                  foreach($top_five_apartados->result() as $apartados):
                ?>
              <li>
              	<figure><strong><?php echo $apartados->fechaInicio;?></strong></figure>
                <h3><a href="#"><?php echo $apartados->nombre;?></a></h3>
                <?php echo $apartados->horaInicio;?> <a href="#">...</a>
              </li>
                <?php
                  endforeach;
                ?>
            </ul>
              <?php else: ?>
              <p>No hay salas apartadas</p>
              <?php endif;?>
            <!-- /.news -->
          </aside>
