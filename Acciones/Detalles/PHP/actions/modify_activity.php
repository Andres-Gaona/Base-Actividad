<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODIFICAR ACTIVIDAD</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="" />
    
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
  <div class="tittle_box">Modificar Actividad</div>
          <div class="tittle_box_show">Bingo</div>
        <form method="post" name="add_activitie" id="add_activitie" action="">
          <div>
            <input name="id_hotel" type="hidden" id="id_hotel" value="2">
              
            <input name="id_current" type="hidden" id="id_current" value="20958">
            <input name="id_activity" type="hidden" id="id_activity" value="77">
              
            <input name="current_day" type="hidden" id="current_day" value="3">
            
            <div class="box_form simple_form_box">
              <span class="white_text">Seleccionar Hora</span>
              <div class="field_box">
                <input style="text-align:center" type="text" name="hour" id="hour" value="14:00:00" class="multiple_option" /></div>
            </div>
            
            
            <div class="box_form">
              <span class="white_text">Seleccionar Lugar</span>
              <div class="form-group">
               <select name="place" class="form-control" id="place" form="add_activitie">
                                  <option value="50"></option>
                                  <option value="31"selected="selected">Alberca</option>
                                  <option value="37">Alberca Adultos</option>
                                  <option value="29">Bar Jorongo</option>
                                  <option value="28">Bar Teatro</option>
                                  <option value="21">Barcy Club</option>
                                  <option value="30">Canchas de Tenis</option>
                                  <option value="14">Centro de Convenciones</option>
                                  <option value="36">Deportes acuáticos</option>
                                  <option value="85">Estacionamiento</option>
                                  <option value="35">Gift shop</option>
                                  <option value="51">Jardín</option>
                                  <option value="26">Jardín Mirador</option>
                                  <option value="27">Jardín Palmas</option>
                                  <option value="25">Jardín Paraíso</option>
                                  <option value="69">Lobby</option>
                                  <option value="23">Lobby Bar</option>
                                  <option value="40">Palapa Barcy</option>
                                  <option value="39">Parque Acuático</option>
                                  <option value="34">Photoshop</option>
                                  <option value="22">Playa</option>
                                  <option value="32">Recepción</option>
                                  <option value="20">Salón de Juegos</option>
                                  <option value="33">Servicio a Huéspedes</option>
                                  <option value="42">Spa</option>
                                  <option value="46">Teatro</option>
                                  <option value="24">Teatro Oaxaca </option>
                                  <option value="41">Terraza Doña Rosa</option>
                                  <option value="38">Toallero</option>
                                </select>

              </div> 
              </div> 
            
            
            <div class="box_form">
              
              <span class="white_text">Seleccionar Tipo de Actividad</span>
              
              <div class="form-group">
                
                <select name="type_activity" class="form-control" id="type_activity" form="add_activitie">
                                    <option value="18"></option>
                                    <option value="11">Adolescentes</option>
                                    <option value="2">Adultos</option>
                                    <option value="13">Con costo</option>
                                    <option value="12">Costo $10 pesos</option>
                                    <option value="16">Costo Extra</option>
                                    <option value="10">En vivo</option>
                                    <option value="4">Especial</option>
                                    <option value="6">Evento Privado</option>
                                    <option value="1"selected="selected">Familiar</option>
                                    <option value="5">Grupo</option>
                                    <option value="19">Iguana Jones</option>
                                    <option value="9">Mujeres</option>
                                    <option value="3">Niños</option>
                                    <option value="8">Para Enamorados</option>
                                    <option value="17">Para papá</option>
                                    <option value="14">Previa reserva</option>
                                    <option value="15">Previa reserva 7 - 21 hrs</option>
                                    <option value="20">Programa Barcy</option>
                                    <option value="7">Sujeto a disponibilidad</option>
                                  </select>
                
              </div> 
              </div>
            
            
            
  <div class="box_form">
    
    <span class="white_text">Seleccionar Imagen</span>
    
    <div class="images_box"> 
        
        
        <select name="image_activity"  id="image_activity" class="image-picker show-html" form="add_activitie">
                    <option data-img-src="../../assets/activities/9bf31c7ff062936a96d3c8bd1f8f2ff3.jpg" value="9bf31c7ff062936a96d3c8bd1f8f2ff3">9bf31c7ff062936a96d3c8bd1f8f2ff3</option>
                    <option data-img-src="../../assets/activities/5487315b1286f907165907aa8fc96619.jpg" value="5487315b1286f907165907aa8fc96619">5487315b1286f907165907aa8fc96619</option>
                    <option data-img-src="../../assets/activities/e4bb4c5173c2ce17fd8fcd40041c068f.jpg" value="e4bb4c5173c2ce17fd8fcd40041c068f">e4bb4c5173c2ce17fd8fcd40041c068f</option>
                    <option data-img-src="../../assets/activities/0cb929eae7a499e50248a3a78f7acfc7.jpg" value="0cb929eae7a499e50248a3a78f7acfc7"selected="selected">0cb929eae7a499e50248a3a78f7acfc7</option>
                    <option data-img-src="../../assets/activities/f64eac11f2cd8f0efa196f8ad173178e.jpg" value="f64eac11f2cd8f0efa196f8ad173178e">f64eac11f2cd8f0efa196f8ad173178e</option>
                  </select>
        
      </div>
    
    </div>            
            
          </div>
          
  <div><a class="button_form green_button" href="javascript:parent.$.fancybox.close();">Cancelar</a><input name="save_activity" type="submit" class="button_form purple_button" id="save_activity" value="Guardar"></div>
          </form> 
      </div>
    </div>
    
  <!-- jQuery  --> 
	<script src="../../js/jquery.min.js"></script>
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


				$('#hour').timepicker(
				{ timeFormat: "HH:mm:00"});
				
			

			});
			

			
		</script>
      
    <script type="text/javascript" src="../js/image-picker.js"></script> 
    <script type="text/javascript">


			$("select.image-picker").imagepicker()

			
		</script>

	<!-- Plugins -->
	 
	<script src="../../js/bootstrap.js"></script>
  </body>
</html>
