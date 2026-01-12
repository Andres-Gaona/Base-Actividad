<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODIFICAR BAR</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="../../assets/icons/favicon.ico" />
    <link rel="apple-1touch-icon" href=".2./../assets/icons/apple-touch-icon.png" />
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
  <div class="tittle_box">Modificar  Bar</div>
        <form method="post" name="add_bar" id="add_bar" action="modify_bar.php">
          <div>
            <input name="id_hotel" type="hidden" id="id_hotel" value="2">
              
            <input name="id_bar" type="hidden" id="id_bar" value="">
            
               <div class="box_form">
              <span class="white_text">Seleccionar Bar</span>
              <div class="form-group">
               <select name="name_bar" class="form-control" id="name_bar">
                                  <option value="8">Bar Jorongo</option>
                                  <option value="7">Bar Teatro</option>
                                  <option value="9">Lobby Bar </option>
                                  <option value="6">Pool Bar</option>
                                </select>

              </div> 
              </div>
               
<div class="box_form simple_form_box">
              <span class="white_text">Hora Apertura</span>
              <div class="field_box">
                <input style="text-align:center" type="text" name="hour" id="hour" value="" class="multiple_option" autocomplete="off" />
                                              </div>
            </div>
              
               <div class="box_form simple_form_box">
              <span class="white_text">Hora Cierre</span>
              <div class="field_box">
                <input style="text-align:center" type="text" name="close" id="close" value="" class="multiple_option" autocomplete="off" />
                                                </div>
            </div>
            
            
            <div class="box_form">
              <span class="white_text">Código de Vestimenta</span>
              <div class="form-group">
               <select name="dress" class="form-control" id="dress">
                                  <option value="2">Casual</option>
                                  <option value="3">Elegante</option>
                                  <option value="1">Formal</option>
                                </select>

              </div> 
            </div> 
            
            
            <div class="box_form">
              
              <span class="white_text">Reservación</span>
              
              <div class="form-group">
                
                <select name="reservation" class="form-control" id="reservation">
                  <option value="N" >No Requerida</option>
                  <option value="Y" >Requiere Reservación</option>
                </select>
              </div> 
              </div>
            
            
            
           
            
          </div>
          
  <div><a id="close_window" class="button_form green_button" href="javascript:parent.$.fancybox.close();">Cancelar</a><input name="save_bar" type="submit" class="button_form purple_button" id="save_bar" value="Guardar"></div>
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
	<script src="../../js/bootstrap.js"></script>
  </body>
</html>
