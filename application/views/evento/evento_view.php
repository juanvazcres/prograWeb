<?php echo $header;?>
<div class="main-box">
    <div class="container">
      
        <div class="container">
    <div class="col-sm-6">
        <div class="form-group">
            <div >
                <div >
                    <div id="datetimepicker12" style="width:100%;" ></div>
                </div>
            </div>
        </div>
        <button class="btn btn-default"  style="width:100%;" >Agregar un evento</button>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker12').datetimepicker({
                inline: true,
                sideBySide: true,
                format: 'YYYY/MM/dd',
                 daysOfWeekDisabled: [0, 6]
            });
            $('#datetimepicker12').on("dp.change",function(e){
             var fecha= $('#datetimepicker12').data('DateTimePicker').date();
                var fecha_uri=(fecha.year()+"-"+fecha.month()+"-"+fecha.date());
                window.location = "<?php echo base_url().'index.php/Eventos/byDate/' ?>" + fecha_uri;
                
            });
        });
    </script>
            <div class="col-md-5">
                <?php if($eventos):?>
            <ul>
                <?php foreach($eventos as $evento):?>
                <li>
                    <div class="col-md-12"> 
                        <h2><?php echo $evento->nombre; ?></h2>
                        <p>Materia: <?php echo $evento->Materia_idMateria; ?></p>     
                        <p>Sala: <?php echo $evento->Sala_idSala; ?></p> 
                        <p>Apartó: <?php echo $evento->Usuario_idUsuario; ?></p>
                        <p><?php echo $evento->fechaInicio; ?> a <?php echo $evento->fechaFin; ?></p> 
                        <p><?php echo $evento->horaInicio; ?> a <?php echo $evento->horaFin; ?></p>     
                    </div>
                </li>
                <?php endforeach;?> 
            </ul>
                <?php else:?> 
                <p>No hay en eventos en esta fecha</p>
                <?php endif;?> 
                </div>
</div>
        
    </div>
  </div>
<?php echo $footer;?>