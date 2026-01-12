<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODIFICAR PROMO</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="../../assets/icons/favicon.ico" />

    <!-- Bootstrap -->	
      <link href="../../css/reset.css" rel="stylesheet" type="text/css">
	  <link href="../../css/bootstrap.css" rel="stylesheet">
	  <link href="../css/floats.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <link href="../css/image-picker.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" media="all" type="text/css" href="../css/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="../js/timepicker/dist/jquery-ui-timepicker-addon.css" />
		<style type="text/css">
#tabs, #ui-datepicker-div, .ui-datepicker {
	font-size: 85%;
}
</style>

  </head>
  <body class="total_body">
  	<!-- Cuerpo -->
    <div class="total_box">
      <div class="form_total_box">
  <div class="tittle_box">Modificar Promoción</div>
        <form action="modify_promo.php" method="post" name="modify_promo" id="modify_promo">
          <div>
          
            <input name="id_promo" type="hidden" id="id_promo" value="432">
			  

			  
			  
            <div class="box_form">
              <span class="white_text">Título Promoción</span>
				   
				   
              <div class="form-group">
               
				  <input name="tittle_es" type="text" class="type_field" id="tittle_form" value="Barceló">
				  
				  
                                </div> 
              </div>
              
              
			  
			  <div class="box_form">
              <span class="white_text">Tittle Promo</span>
              <div class="form-group">
               
			    <input name="tittle_en" type="text" class="type_field" id="tittle_form" value="Huatulco">
                              </div> 
              </div>
			  
			  
			  
			  <div class="box_form">
              <span class="white_text">Texto Promoción</span>
              <div class="form-group">
               
			    <input name="promo_es" type="text" class="type_field" id="tittle_form" value="Accede a nuestra App">
				  
				  
                              </div> 
              </div>
			  
			  
			  
			  <div class="box_form">
              <span class="white_text">Promo Text</span>
              <div class="form-group">
               
			    <input name="promo_en" type="text" class="type_field" id="tittle_form" value="For information, please scan the QR code">
				  
				  
                              </div> 
              </div>
			  
			  
			  <div class="box_form" >
              <span class="white_text">Extención Teléfono</span>
              <div class="form-group">
               
			    <input name="promo_ext" type="text" class="type_field" id="tittle_form" value="">
				 
				  

              </div> 
              </div>
		
            <div class="box_form">
              <span class="white_text">Vigencia Inicial</span>
              <div class="form-group">
                <input name="time_start" type="text" class="multiple_option" id="time_start" style="text-align:center" autocomplete="off" value="2025-07-01" />
				  
				  
                              </div>
            </div>
	  
               <div class="box_form">
              <span class="white_text">Término de Vigencia</span>
              <div class="form-group">
                <input name="time_end" type="text" class="multiple_option" id="time_end" style="text-align:center" autocomplete="off" value="2050-12-31" />
				  
				  
				  
                              </div>
            </div>
				  
			   <div class="box_form">
              <span class="white_text">Tema de Publicación</span> 
              <div class="form-group">
               <select name="promo_theme" class="form-control" id="promo_theme">
                 <option value="blue" selected="selected">Azul</option>
                 <option value="green" >Verde</option>
                 <option value="purple" >Morado</option>
                 <option value="red" >Rojo</option>
               </select>

              </div> 
            </div> 
               			  
          </div>
          
  <div><br>
<br>
<br>
<br>
<a id="close_window" class="button_form green_button" href="javascript:parent.$.fancybox.close();">Cancelar</a><input name="save_promo" type="submit" class="button_form purple_button" id="save_promo" value="Guardar"></div>
        </form> 
      </div>
    </div>
    
  <!-- jQuery --> 
  <script src="../../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/timepicker/dist/jquery-ui.min.js"></script> 

  <script>
 $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '< Ant',
 nextText: 'Sig >',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 dateFormat: 'yy-mm-dd',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
$(function () {
$( "#time_start, #time_end").datepicker();
});
    </script>  
	  

  <script src="../../js/bootstrap.js"></script>
	  
  <script src="../css/cf/js/custom-file-input.js"></script>
  
</body>
</html>
