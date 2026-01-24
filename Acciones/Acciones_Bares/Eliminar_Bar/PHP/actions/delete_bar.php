
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ELIMINAR BAR</title>
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
      <div class="tittle_box">Eliminar Bar</div>
      <form method="post" id="delete_bar" name="delete_bar">
        <div class="value_box"></div>
        <input name="id_bar" type="hidden" id="id_bar" value="">
		  <input name="id_hotel" type="hidden" id="id_hotel" value="2">
        <div><a class="button_form green_button" href="javascript:parent.$.fancybox.close();">Cancelar</a><input name="delete_bar" type="submit" class="button_form red_button" id="delete_bar" value="Eliminar"></div>
        </form>  
    </div>

  <!-- jQuery (Necesario para los plugins de Bootstrap) --> 
<script src="../../js/jquery.min.js"></script>


  <!-- Plugins -->
<script src="../../js/bootstrap.js"></script>
</body>
</html>
