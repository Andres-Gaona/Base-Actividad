<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ELIMINAR RESTAURANT</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="" />
    
    <!-- Bootstrap -->	
      <link href="../../css/reset.css" rel="stylesheet" type="text/css">
	  <link href="../../css/bootstrap.css" rel="stylesheet">
	  <link href="../css/floats.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


  </head>
  <body class="total_body">
  	<!-- Cuerpo -->
    <div class="total_box delete_box">
      <div class="tittle_box">Eliminar Restaurant</div>
      <form method="post" id="delete_restaurant" name="delete_restaurant">
        <div class="value_box"></div>
        <input name="id_restaurant" type="hidden" id="id_restaurant" value="">
        <div><a class="button_form green_button" href="javascript:parent.$.fancybox.close();">Cancelar</a><input name="delete_restaurant" type="submit" class="button_form red_button" id="delete_restaurant" value="Eliminar"></div>
        </form>  
    </div>

  <!-- jQuery  --> 
	<script src="../../js/jquery.min.js"></script>
	 
	<script src="../../js/bootstrap.js"></script>
  </body>
</html>
