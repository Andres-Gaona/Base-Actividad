<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AÑADIR SHOW</title>
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
        <div class="tittle_box">Agregar Show</div>
        <form method="post" name="add_activitie" id="add_activitie" action="">
          <div>
            <input name="id_hotel" type="hidden" id="id_hotel" value="2">
              
          
            
            <div class="box_form">
              <span class="white_text">Seleccionar Show</span> 
              <div class="form-group">
               <select name="id_show" class="form-control" id="id_show" form="add_activitie">
                                  <option value="82">70's & 80's</option>
                                  <option value="503">Alma Latina</option>
                                  <option value="424">Barce Rock</option>
                                  <option value="871">Barcelove</option>
                                  <option value="1010">Cabaret</option>
                                  <option value="403">Casa del Horror</option>
                                  <option value="923">Cena Show 70's & 80's</option>
                                  <option value="922">Cena Show Alma Latina</option>
                                  <option value="924">Cena Show Barce Rock</option>
                                  <option value="925">Cena Show Barcelove</option>
                                  <option value="1014">Cena Show Cabaret</option>
                                  <option value="926">Cena Show Casa del Horror</option>
                                  <option value="1015">Cena Show Circus</option>
                                  <option value="927">Cena Show El Cascanueces</option>
                                  <option value="928">Cena Show Elixir Musical</option>
                                  <option value="920">Cena Show Fantastic</option>
                                  <option value="929">Cena Show Fiesta en América</option>
                                  <option value="930">Cena Show Forever</option>
                                  <option value="931">Cena Show Freak</option>
                                  <option value="932">Cena Show Golden</option>
                                  <option value="933">Cena Show Guelaguetza</option>
                                  <option value="921">Cena Show Halloween</option>
                                  <option value="934">Cena Show Internacional</option>
                                  <option value="935">Cena Show Juegos</option>
                                  <option value="945">Cena Show Leyendas</option>
                                  <option value="485">Cena Show Mexicano</option>
                                  <option value="936">Cena Show Muxical</option>
                                  <option value="938">Cena Show Noche Casino</option>
                                  <option value="939">Cena Show Pop Rock</option>
                                  <option value="940">Cena Show Rhytm</option>
                                  <option value="941">Cena Show San Valentin</option>
                                  <option value="942">Cena Show Star Wars</option>
                                  <option value="943">Cena Show Todo puede suceder</option>
                                  <option value="944">Cena Show Tropical</option>
                                  <option value="937">Cena Show Xandú</option>
                                  <option value="1012">Circus</option>
                                  <option value="348">Copa Mundial 2018 </option>
                                  <option value="533">Cuento de Navidad</option>
                                  <option value="197">Día de la mujer</option>
                                  <option value="405">El Cascanueces</option>
                                  <option value="771">Elixir Musical</option>
                                  <option value="128">Fantastic</option>
                                  <option value="486">Fiesta en América</option>
                                  <option value="836">Forever</option>
                                  <option value="404">Freak Show</option>
                                  <option value="540">Golden</option>
                                  <option value="893">Guelaguetza</option>
                                  <option value="396">Halloween</option>
                                  <option value="230">Hora del Planeta</option>
                                  <option value="83">Internacional</option>
                                  <option value="427">Juegos</option>
                                  <option value="85">Leyendas</option>
                                  <option value="87">Mexicano</option>
                                  <option value="660">Muxical Show</option>
                                  <option value="426">Noche Casino</option>
                                  <option value="333">Noche Karaoke</option>
                                  <option value="471">Pop Rock</option>
                                  <option value="811">Rhytm</option>
                                  <option value="692">San Valentin</option>
                                  <option value="484">Show Especial Día de las Madres</option>
                                  <option value="86">Star Wars</option>
                                  <option value="506">Súper Bowl LIV</option>
                                  <option value="693">Súper Bowl LVI</option>
                                  <option value="84">Todo puede suceder</option>
                                  <option value="88">Tropical</option>
                                  <option value="743">Xandú</option>
                                </select>

              </div> 
            </div> 
              
              <div class="box_form">
              <span class="white_text">Seleccionar Día</span>
              <div class="form-group">
               <select name="current_day" class="form-control" id="current_day" form="add_activitie">
                 <option value="0">Domingo</option>
                 <option value="1">Lunes</option>
                 <option value="2">Martes</option>
                 <option value="3">Miércoles</option>
                 <option value="4">Jueves</option>
                 <option value="5">Viernes</option>
                 <option value="6">Sábado</option>
                 
               </select>

              </div> 
              </div>
              
            <div class="box_form simple_form_box">
              <span class="white_text">Seleccionar Hora</span>
              <div class="field_box">
                <input style="text-align:center" type="text" name="hour" id="hour" value="" class="multiple_option" /></div>
            </div>
            
            
            <div class="box_form">
              <span class="white_text">Seleccionar Lugar</span>
              <div class="form-group">
               <select name="place" class="form-control" id="place" form="add_activitie">
                                  <option value="50"></option>
                                  <option value="31">Alberca</option>
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
                                    <option value="1">Familiar</option>
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
      

	<!-- Plugins -->
	 
	<script src="../../js/bootstrap.js"></script>
  </body>
</html>
