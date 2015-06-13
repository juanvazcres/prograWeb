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
              	<figure><strong><?php echo date('d',strtotime($apartados->fechaInicio));?></strong><?php echo date('M',strtotime($apartados->fechaInicio));?></figure>
                <h3><a><?php echo $apartados->nombre;?></a></h3>
                <p>Hora Inicio:<?php echo $apartados->horaInicio;?><br/>Hora final: <?php echo $apartados->horaFin;?></p>
                  
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
