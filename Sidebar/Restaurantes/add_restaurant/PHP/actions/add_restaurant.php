<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galileo System</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="De la Mora Comunicaciones | www.bydelamora.com">
    <link rel="shortcut icon" href="../../assets/icons/favicon.ico" />
    <link rel="apple-touch-icon" href="../../assets/icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="../../assets/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="../../assets/icons/apple-touch-icon-114x114.png" />
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

	
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body class="total_body">
  	<!-- body code goes here -->
    <div class="total_box">
      <div class="form_total_box">
  <div class="tittle_box">Agregar Restaurant</div>
        <form method="post" name="add_restaurant" id="add_restaurant" action="">
          <div>
            <input name="id_hotel" type="hidden" id="id_hotel" value="2">
              
            <input name="current_day" type="hidden" id="current_day" value="3">
            
               <div class="box_form">
              <span class="white_text">Seleccionar Restaurant</span>
              <div class="form-group">
               <select name="id_restaurant" class="form-control" id="id_restaurant" form="add_restaurant">
                                  <option value="9">Doña Rosa</option>
                                  <option value="11">El Agave</option>
                                  <option value="40">Jardín Paraíso</option>
                                  <option value="14">Kyoto</option>
                                  <option value="23">La Fontana</option>
                                  <option value="10">La Tortuga</option>
                                  <option value="13">La Trattoria</option>
                                  <option value="27">Salones</option>
                                  <option value="24">Sea food</option>
                                </select>

              </div> 
              </div>
              
              
              <div class="box_form">
              <span class="white_text">Seleccionar Servicio</span>
              <div class="form-group">
               <select name="type_service" class="form-control" id="type_service" form="add_restaurant">
                 <option value="breakfast">Desayuno</option>
                 <option value="meal">Comida</option>
                 <option value="dinner">Cena</option>
               </select>

              </div> 
              </div> 
              
              
              <div class="box_form">
              <span class="white_text">Seleccionar Tipo</span>
              <div class="form-group">
               <select name="type_restaurant" class="form-control" id="type_restaurant" form="add_restaurant">
                 <option value="normal">Normal</option>
                 <option value="specialty">Especialidad</option>
               </select>

              </div> 
              </div>
            
              
              <div class="box_form">
              <span class="white_text">Tipo de Comida</span>
              <div class="form-group">
               <select name="type_food" class="form-control" id="type_food" form="add_restaurant">
                                  <option value="18">Buffet</option>
                                  <option value="41">Carnes y Mariscos</option>
                                  <option value="59">Cena Especial</option>
                                  <option value="42">Cena Show Mexicano</option>
                                  <option value="22">Del Mar</option>
                                  <option value="16">Española</option>
                                  <option value="7">Internacional</option>
                                  <option value="15">Italiano</option>
                                  <option value="17">Japonés</option>
                                  <option value="19">Mexicano</option>
                                  <option value="35">Oaxaqueña</option>
                                  <option value="21">Oriental</option>
                                  <option value="20">Parrillada</option>
                                  <option value="61">Sushi Bar</option>
                                  <option value="60">Taquería</option>
                                  <option value="34">Tex-Mex</option>
                                </select>

              </div> 
              </div>
              
              
            <div class="box_form simple_form_box">
              <span class="white_text">Hora Apertura</span>
              <div class="field_box">
                <input style="text-align:center" type="text" name="hour" id="hour" value="" class="multiple_option" autocomplete="off" /></div>
            </div>
              
               <div class="box_form simple_form_box">
              <span class="white_text">Hora Cierre</span>
              <div class="field_box">
                <input style="text-align:center" type="text" name="close" id="close" value="" class="multiple_option" autocomplete="off" /></div>
            </div>
            
            
            <div class="box_form">
              <span class="white_text">Código de Vestimenta</span>
              <div class="form-group">
               <select name="dress" class="form-control" id="dress" form="add_restaurant">
                                  <option value="2">Casual</option>
                 <option value="3">Elegante</option>
                 <option value="1">Formal</option>
               </select>

              </div> 
            </div> 
            
            
            <div class="box_form">
              
              <span class="white_text">Reservación</span>
              
              <div class="form-group">
                
                <select name="reservation" class="form-control" id="reservation" form="add_restaurant">
                  <option value="N">No Requerida</option>
                  <option value="Y">Requiere Reservación</option>
                </select>
              </div> 
              </div>
            
            
            
           
            
          </div>
          
  <div><a id="close_window" class="button_form green_button" href="javascript:parent.$.fancybox.close();">Cancelar</a><input name="save_restaurant" type="submit" class="button_form purple_button" id="save_restaurant" value="Guardar"></div>
          </form> 
      </div>
    </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/timepicker/dist/jquery-ui.min.js"></script> 
<script type="text/javascript" src="../js/timepicker/dist/jquery-ui-timepicker-addon.js"></script> 
<script type="text/javascript" src="../js/timepicker/dist/i18n/jquery-ui-timepicker-addon-i18n.min.js"></script> 
<script type="text/javascript">
			
			$(function(){
			
			$.timepicker.regional['es'] = {
	                timeOnlyTitle: 'Elegir Hora',
	                timeText: 'Elegida',
	                hourText: 'Hora',
              		minuteText: 'Minuto',
					currentText: 'Ahora',
					closeText: 'Cerrar',
					timeFormat: 'HH:mm',
					amNames: ['AM', 'A'],
					pmNames: ['PM', 'P'],
};

                $.timepicker.setDefaults($.timepicker.regional['es']);


				$('#hour, #close').timepicker(
				{ timeFormat: "HH:mm:00"});
				
			

			});
			

			
		</script>
      
    <script type="text/javascript" src="../js/image-picker.js"></script> 
    <script type="text/javascript">


			$("select.image-picker").imagepicker()

			
		</script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	 
	<script src="../../js/bootstrap.js"></script>
  </body>
</html>
