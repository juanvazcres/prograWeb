<?php echo $header; ?>
<div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-offset-4 col-md-3">
                  <?php echo validation_errors(); ?>
    <?php 
$attributes = array('class' => 'navbar-form navbar-left','role'=>'search', 'id' => 'myform');
echo form_open('login/solicitudRegistro',$attributes); ?>
     <div class="form-group">
    <?php
        $nombre = array(
            'name'=>'nombre',
            'class'=>'form-control',
            'placeholder' => 'Escribe tu nombre',
            'required' => true
        );
        $apellido_paterno = array(
            'name'=>'apellido_paterno',
            'class'=>'form-control',
            'placeholder' => 'Escribe tu apellido paterno:',
            'required' => true
        );
$apellido_materno = array(
            'name'=>'apellido_materno',
            'class'=>'form-control',
            'placeholder' => 'Escribe tu apellido materno:',
            'required' => true
        );
$email = array(
            'type'=>'email',
            'name'=>'email',
            'class'=>'form-control',
            'placeholder' => 'Escribe tu E-mail:',
            'required' => true
        );

$telefono =array(
            'type'=>'text',
            'name'=>'telefono',
            'class'=>'form-control',
            'placeholder' => 'Escribe tu teléfono:',
            'pattern'=>'[0-9]*',
            'required' => true
        );
$rfc=array(
            'type'=>'text',
            'name'=>'rfc',
            'class'=>'form-control',
            'placeholder' => 'Escribe tu RFC:',
            'pattern'=>'[A-Za-z]{3,4}[0-9]{6}[0-9a-zA-z]{3}',
            'required' => true
        );

$pass=array(
            'name'=>'password',
            'class'=>'form-control',
            'placeholder' => 'Escribe tu Password:',
            'required' => true
        );


$bumit= array(
            'name'=>'submit',
            'class'=>'btn btn-default',
        );

    $options=array();
    foreach($carreras->result() as $carrera){
        
        $array_key = array($carrera->idCarrera);
        $carrera_item = array_fill_keys($array_key,$carrera->nombre);
        
        $options+=$carrera_item;
        
    };
?>
                <label>Nombre: <?php echo form_input($nombre)?></label>
                <label>Apellido Paterno: <?php echo form_input($apellido_paterno)?></label>
                <label>Apellido Materno: <?php echo form_input($apellido_materno)?></label>
                <label>Email: <?php echo form_input($email)?></label>
                <label>Teléfono: <?php echo form_input($telefono)?></label>
                <label>RFC: <?php echo form_input($rfc)?></label>
                <label>Password: <?php echo form_password($pass)?></label>
                <label>Carrera: <?php echo form_dropdown('carrera',$options,1)?></label>
                <label><?php echo form_submit($bumit,"Enviar")?></label>
                </div>    
    <?php echo form_close()?>
                    
                    
                    
                    
                
            </div>
        </div>
      </div>
    </div>
  </div>
<?php echo $footer; ?>
