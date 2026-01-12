<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BORRAR SHOW</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="../../assets/icons/favicon.ico" />
    <link rel="apple-touch-icon" href="../../assets/icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="../../assets/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="../../assets/icons/apple-touch-icon-114x114.png" />
    <!-- Bootstrap -->	
      <link href="../../css/reset.css" rel="stylesheet" type="text/css">
	  <link href="../../css/bootstrap.css" rel="stylesheet">
	  <link href="../css/floats.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body class="total_body">
  	<!-- body code goes here -->
    <div class="total_box delete_box">
      <div class="tittle_box">Eliminar Show</div>
      <form method="post" id="delete_show" name="delete_show">
        <div class="value_box"></div>
        <input name="id_activity" type="hidden" id="id_activity" value="">
        <div><a class="button_form green_button" href="javascript:parent.$.fancybox.close();">Cancelar</a><input name="delete_activity" type="submit" class="button_form red_button" id="delete_activity" value="Eliminar"></div>
        </form>  
    </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../../js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	 
	<script src="../../js/bootstrap.js"></script>
  </body>
</html>
