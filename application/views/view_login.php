<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    echo $header;
?>
<div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
            <div class="login">
    <h3>Iniciar Sesión</h3>
    <?php echo validation_errors(); ?>
    <?php echo form_open('login/processLogin'); 
        $rfc = array(
            'name'=>'rfc',
            'placeholder' => 'Escribe tu RFC'
        );
        $pass = array(
            'name'=>'pass',
            "type"=>'password',
            'placeholder' => 'Escribe tu Password'
        );
    ?>
    <div><label >
    RFC:
    <?php echo form_input($rfc)?>
    </label></div>
    <div><label>Password:
    <?php echo form_input($pass)?>
    </label></div>
    <?php echo form_submit('','Submit')?>
    <?php
        echo form_close();
    ?>
       </div>
        </div>
      </div>
    </div>
  </div>
   
<?php
    echo $footer;
?>
