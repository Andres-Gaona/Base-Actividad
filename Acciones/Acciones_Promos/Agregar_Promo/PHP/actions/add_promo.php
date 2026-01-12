<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AGREGAR PROMOCIÓN</title>
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

	  
		<link rel="stylesheet" type="text/css" href="../css/cf/css/normalize.css" />
	
		<link rel="stylesheet" type="text/css" href="../css/cf/css/component.css" />

		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
	  
	  
  </head>
  <body class="total_body">


  	<!-- Cuerpo -->
    <div class="total_box">
      <div class="form_total_box">
  <div class="tittle_box">Agregar Promoción</div>
        <form action="" method="post" enctype="multipart/form-data" name="add_promo" id="add_promo">
          <div>
            <input name="id_hotel" type="hidden" id="id_hotel" value="2">
              

            
               <div class="box_form">
              <span class="white_text">Título Promoción
			
				   
			     </span>
              <div class="form-group">
               
				  <input name="tittle_es" type="text" class="type_field" id="tittle_form" value="">
                  
				                </div> 
              </div>
              
              
			  
			  <div class="box_form">
              <span class="white_text">Tittle Promo</span>
              <div class="form-group">
               
			    <input name="tittle_en" type="text" class="type_field" id="tittle_form" value="">
				
			                     </div> 
              </div>
			  
			  
			  
			  <div class="box_form">
              <span class="white_text">Texto Promoción</span>
              <div class="form-group">
               
			    <input name="promo_es" type="text" class="type_field" id="tittle_form" value="">
				  
	
			                     </div> 
              </div>
			  
			  
			  
			  <div class="box_form">
              <span class="white_text">Promo Text</span>
              <div class="form-group">
               
			    <input name="promo_en" type="text" class="type_field" id="tittle_form" value="">
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
                <input style="text-align:center" type="text" name="time_start" id="time_start" value="" class="multiple_option" autocomplete="off"
 />
                              </div>
            </div>

			  
			  
			  
			  
               <div class="box_form">
              <span class="white_text">Término de Vigencia</span>
              <div class="form-group">
                <input style="text-align:center" type="text" name="time_end" id="time_end" value="" class="multiple_option" autocomplete="off" />
                              </div>
            </div>
			  
			  
			  
			   <div class="box_form">
              <span class="white_text">Tema de Publicación</span> 
              <div class="form-group">
               <select name="promo_theme" class="form-control" id="promo_theme" form="add_promo">
                 <option value="blue">Azul</option>
                 <option value="green">Verde</option>
                 <option value="purple">Morado</option>
                 <option value="red">Rojo</option>
               </select>

              </div> 
            </div> 
           
            
           <div class="box">
					<input type="file" name="file-1" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" style=" display: none" value="" />
					<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Selecionar Imagen</span></label>
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

  <!-- jQuery  --> 
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
