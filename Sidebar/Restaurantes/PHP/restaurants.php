<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PESTAÑA RESTAURANTES</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="" />
    
    <!-- Bootstrap -->
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/basics.css" rel="stylesheet" type="text/css">
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="css/layout.css" rel="stylesheet" type="text/css">
	<link href="css/hover.css" rel="stylesheet" type="text/css">

    <link href="../css/animate.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link href="../css/fonts.css" rel="stylesheet" type="text/css">
      
     
      <script src="../js/jquery.min.js"></script>

      
    <link rel="stylesheet" href="../js/owl/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../js/owl/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="../js/owl/docs/assets/owlcarousel/owl.carousel.js"></script>
      
          <link href="../css/animate.css" rel="stylesheet" type="text/css">
          <link href="css/btable.css" rel="stylesheet" type="text/css">
      

  </head>
  <body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    
    

       <a  class="hvr-forward" href="\Act+Inf\Base_actividad\Centro_actividad\PHP\activities.php">Actividades</a>
   
       <a  class="hvr-forward" href="\Act+Inf\Base_actividad\Sidebar\Shows\PHP\shows.php">Shows</a>
  
       <a  class="hvr-forward" href="\Act+Inf\Base_actividad\Sidebar\Restaurantes\PHP\restaurants.php">Restaurantes</a>
	
	     <a  class="hvr-forward" href="\Act+Inf\Base_actividad\Sidebar\Bares\PHP\bars.php">Bares</a>
   	
		   <a  class="hvr-forward" href="\Act+Inf\Base_actividad\Sidebar\Promos\PHP\promos.php">Promociones</a>
	
	
	
	
    
    
</div>
  
  <div class="logo_box">
   <img class="hvr-bounce-out main_button " src="img/Red_Icon.png" width="69" height="72" alt="" onclick="openNav()"/> 
  </div>        
  <div class="header">
      
    <a class="update_button fancybox_delete" href="\Act+Inf\Base_actividad\Acciones\Actualizar\PHP\actions\update_screen.php">Actualizar</a><div class="day_box">
        <form action="#" method="post" id="form_select_day" name="form_select_day">
              <select name="day_selected" id="day_selected" onchange="this.form.submit()" style="line-height: 30px; height: 30px; text-transform: uppercase;" class="selectpicker"  data-style="btn-info">
                <option value="1" >Lunes</option>
                <option value="2" >Martes</option>
                <option value="3" >Miércoles</option>
                <option value="4" >Jueves</option>
                <option value="5" >Viernes</option>
                <option value="6" >Sábado</option>
                <option value="0" >Domingo</option>
              </select>
            </form>
      </div><a id="exit_button" name="exit_button" class="logout_button" href="\Act+Inf\Base_actividad\Login\login_index.php">Salir</a> </div>
<div id="main" onclick="closeNav()">
  
    
    
    
   <div class="add_restaurant_box">
    
             <a class="add_restaurant hvr-shrink fancybox_activity" href="\Act+Inf\Base_actividad\Acciones\Acciones_Restaurant\Agregar_Restaurant\PHP\actions\add_restaurant.php">Agregar Restaurant</a>
    
          </div>
  
    
  <table class="table btable btable_colored btable_green">
    
    
    <thead class="btable__thead">
      <tr>
        <th class="btable__th text_rest caps" >Desayuno</th>
        <th class="btable__th text_rest caps">Tipo de Comida</th>
        <th class="btable__th text_rest caps">Horario</th>
        <th class="btable__th text_rest caps">Vestimenta</th>
                    <th class="btable__th center_button text_rest caps">Herramientas</th>
                  </tr>
    </thead>
    <tbody class="btable__tbody">
      
      
      
              <tr class="btable__mobile-head">
          <td class="btable__cell" colspan="3">
            <span class="btable__mobile-column text_rest caps">Desayuno</span>
          </td>
        </tr>
        <tr class="btable__row">
          <td class="btable__cell">
            <span class="btable__mobile-column tittle_rest">Restaurant</span>
            <span class="btable__mobile-column text_rest">Doña Rosa              
                            </span>
          </td>
          <td class="btable__cell">
            <span class="btable__mobile-column tittle_rest">Tipo de Comida</span>
            <span class="btable__mobile-column text_rest">Buffet</span>
          </td>
          <td class="btable__cell">
            <span class="btable__mobile-column tittle_rest">Horario</span>
            <span class="btable__mobile-column text_rest">7:00 AM - 12:00 PM</span>
          </td>
          <td class="btable__cell">
            <span class="btable__mobile-column tittle_rest">Vestimenta</span>
            <span class="btable__mobile-column text_rest">Casual</span>
          </td>
            
            
          <td class="btable__cell center_button">
            <span class="btable__mobile-column tittle_rest">Herramientas</span>
            <span class="btable__mobile-column">
              <a class="edit_rest_button fancybox_activity hvr-grow" href="\Act+Inf\Base_actividad\Acciones\Acciones_Restaurant\Modificar_Restaurant\PHP\actions\modify_restaurant.php">
              <span class="glyphicon glyphicon-record"></span></a>
              
              <a class="edit_rest_button red_icon fancybox_delete hvr-grow" href="\Act+Inf\Base_actividad\Acciones\Acciones_Restaurant\Eliminar_Restaurant\PHP\actions\delete_restaurant.php">
                  <span class="glyphicon glyphicon-remove-circle"></span> </a>
              
              
              </span>
          </td>
                        
        </tr>
                <tr class="btable__mobile-head">
          <td class="btable__cell" colspan="3">
            <span class="btable__mobile-column text_rest caps">Desayuno</span>
          </td>
        </tr>
        <tr class="btable__row">
          <td class="btable__cell">
            <span class="btable__mobile-column tittle_rest">Restaurant</span>
            <span class="btable__mobile-column text_rest">La Tortuga              
                            </span>
          </td>
          <td class="btable__cell">
            <span class="btable__mobile-column tittle_rest">Tipo de Comida</span>
            <span class="btable__mobile-column text_rest">Buffet</span>
          </td>
          <td class="btable__cell">
            <span class="btable__mobile-column tittle_rest">Horario</span>
            <span class="btable__mobile-column text_rest">8:00 AM - 11:00 AM</span>
          </td>
          <td class="btable__cell">
            <span class="btable__mobile-column tittle_rest">Vestimenta</span>
            <span class="btable__mobile-column text_rest">Casual</span>
          </td>
            
            
          <td class="btable__cell center_button">
            <span class="btable__mobile-column tittle_rest">Herramientas</span>
            <span class="btable__mobile-column">
              <a class="edit_rest_button fancybox_activity hvr-grow" href="actions/modify_restaurant.php?current_restaurant=3244">
              <span class="glyphicon glyphicon-record"></span></a>
              
              <a class="edit_rest_button red_icon fancybox_delete hvr-grow" href="actions/delete_restaurant.php?id_restaurant=3244">
                  <span class="glyphicon glyphicon-remove-circle"></span> </a>
              
              
              </span>
          </td>
                        
        </tr>
            </tbody>
  </table>
      
    <table class="table btable btable_colored btable_aqua">
    
    
    <thead class="btable__thead">
      <tr>
        <th class="btable__th text_rest caps" >Comida</th>
        <th class="btable__th text_rest caps">Tipo de Comida</th>
        <th class="btable__th text_rest caps">Horario</th>
        <th class="btable__th text_rest caps">Vestimenta</th>
          
        <th class="btable__th center_button text_rest caps">Herramientas</th>
          
        </tr>
    </thead>
    <tbody class="btable__tbody">
      
      
      
      
              <tr class="btable__mobile-head">
          <td class="btable__cell" colspan="3"><span class="btable__mobile-column text_rest caps">Desayuno</span></td>
        </tr>
        <tr class="btable__row">
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Restaurant</span> <span class="btable__mobile-column text_rest">La Tortuga                      </span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Tipo de Comida</span> <span class="btable__mobile-column text_rest">Buffet</span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Horario</span> <span class="btable__mobile-column text_rest">12:00 PM - 6:30 PM</span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Vestimenta</span> <span class="btable__mobile-column text_rest">Casual</span></td>
         
                        <td class="btable__cell center_button"><span class="btable__mobile-column tittle_rest">Herramientas</span> <span class="btable__mobile-column"> 
              
          <a class="edit_rest_button fancybox_activity hvr-grow" href="actions/modify_restaurant.php?current_restaurant=2876">
              <span class="glyphicon glyphicon-record"></span></a> 
           
          <a class="edit_rest_button red_icon fancybox_delete hvr-grow" href="actions/delete_restaurant.php?id_restaurant=2876">
              <span class="glyphicon glyphicon-remove-circle"></span> </a>    
              
              </span></td>
                        
        </tr>
                <tr class="btable__mobile-head">
          <td class="btable__cell" colspan="3"><span class="btable__mobile-column text_rest caps">Desayuno</span></td>
        </tr>
        <tr class="btable__row">
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Restaurant</span> <span class="btable__mobile-column text_rest">Doña Rosa                      </span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Tipo de Comida</span> <span class="btable__mobile-column text_rest">Buffet</span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Horario</span> <span class="btable__mobile-column text_rest">2:00 PM - 4:30 PM</span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Vestimenta</span> <span class="btable__mobile-column text_rest">Casual</span></td>
         
                        <td class="btable__cell center_button"><span class="btable__mobile-column tittle_rest">Herramientas</span> <span class="btable__mobile-column"> 
              
          <a class="edit_rest_button fancybox_activity hvr-grow" href="actions/modify_restaurant.php?current_restaurant=3346">
              <span class="glyphicon glyphicon-record"></span></a> 
           
          <a class="edit_rest_button red_icon fancybox_delete hvr-grow" href="actions/delete_restaurant.php?id_restaurant=3346">
              <span class="glyphicon glyphicon-remove-circle"></span> </a>    
              
              </span></td>
                        
        </tr>
            </tbody>
  </table>
      
    
    <table class="table btable btable_colored btable_blue">
    
    
    <thead class="btable__thead">
      <tr>
        <th class="btable__th text_rest caps" >Cena</th>
        <th class="btable__th text_rest caps">Tipo de Comida</th>
        <th class="btable__th text_rest caps">Horario</th>
        <th class="btable__th text_rest caps">Vestimenta</th>
          
        <th class="btable__th center_button text_rest caps">Herramientas</th>
                </tr>
    </thead>
    <tbody class="btable__tbody">
      
      
              <tr class="btable__mobile-head">
          <td class="btable__cell" colspan="3"><span class="btable__mobile-column text_rest caps">Desayuno</span></td>
        </tr>
        <tr class="btable__row">
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Restaurant</span> <span class="btable__mobile-column text_rest">Doña Rosa                      </span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Tipo de Comida</span> <span class="btable__mobile-column text_rest">Buffet</span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Horario</span> <span class="btable__mobile-column text_rest">6:30 PM - 10:30 PM</span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Vestimenta</span> <span class="btable__mobile-column text_rest">Casual</span></td>
         
                        <td class="btable__cell center_button"><span class="btable__mobile-column tittle_rest">Herramientas</span> <span class="btable__mobile-column"> 
              
              <a class="edit_rest_button fancybox_activity hvr-grow" href="actions/modify_restaurant.php?current_restaurant=3347">
              <span class="glyphicon glyphicon-record"></span></a> 
              
              <a class="edit_rest_button red_icon fancybox_delete hvr-grow" href="actions/delete_restaurant.php?id_restaurant=3347">
              <span class="glyphicon glyphicon-remove-circle"></span> </a>  
              
              </span></td>
                        
        </tr>
            </tbody>
  </table>
      
    <table class="table btable btable_colored btable_pink">
    
    
    <thead class="btable__thead">
      <tr>
        <th class="btable__th text_rest caps" >Especialidad</th>
        <th class="btable__th text_rest caps">Tipo de Comida</th>
        <th class="btable__th text_rest caps">Horario</th>
        <th class="btable__th text_rest caps">Vestimenta</th>
          
        <th class="btable__th center_button text_rest caps">Herramientas</th>
                </tr>
    </thead>
    <tbody class="btable__tbody">
      
      
      
              <tr class="btable__mobile-head">
          <td class="btable__cell" colspan="3"><span class="btable__mobile-column text_rest caps">Desayuno</span></td>
        </tr>
        <tr class="btable__row">
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Restaurant</span> <span class="btable__mobile-column text_rest">El Agave                        <span class="reserve_box">R</span>
                      </span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Tipo de Comida</span> <span class="btable__mobile-column text_rest">Mexicano</span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Horario</span> <span class="btable__mobile-column text_rest">6:00 PM - 6:30 PM</span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Vestimenta</span> <span class="btable__mobile-column text_rest">Formal</span></td>
            
          <td class="btable__cell center_button"><span class="btable__mobile-column tittle_rest">Herramientas</span> <span class="btable__mobile-column"> 
              
              <a class="edit_rest_button fancybox_activity hvr-grow" href="actions/modify_restaurant.php?current_restaurant=3399">
              <span class="glyphicon glyphicon-record"></span></a>  
              
              <a class="edit_rest_button red_icon fancybox_delete hvr-grow" href="actions/delete_restaurant.php?id_restaurant=3399">
              <span class="glyphicon glyphicon-remove-circle"></span> </a>  
              </span></td>
                        
        </tr>
                <tr class="btable__mobile-head">
          <td class="btable__cell" colspan="3"><span class="btable__mobile-column text_rest caps">Desayuno</span></td>
        </tr>
        <tr class="btable__row">
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Restaurant</span> <span class="btable__mobile-column text_rest">Kyoto                        <span class="reserve_box">R</span>
                      </span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Tipo de Comida</span> <span class="btable__mobile-column text_rest">Sushi Bar</span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Horario</span> <span class="btable__mobile-column text_rest">6:00 PM - 9:00 PM</span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Vestimenta</span> <span class="btable__mobile-column text_rest">Formal</span></td>
            
          <td class="btable__cell center_button"><span class="btable__mobile-column tittle_rest">Herramientas</span> <span class="btable__mobile-column"> 
              
              <a class="edit_rest_button fancybox_activity hvr-grow" href="actions/modify_restaurant.php?current_restaurant=3386">
              <span class="glyphicon glyphicon-record"></span></a>  
              
              <a class="edit_rest_button red_icon fancybox_delete hvr-grow" href="actions/delete_restaurant.php?id_restaurant=3386">
              <span class="glyphicon glyphicon-remove-circle"></span> </a>  
              </span></td>
                        
        </tr>
                <tr class="btable__mobile-head">
          <td class="btable__cell" colspan="3"><span class="btable__mobile-column text_rest caps">Desayuno</span></td>
        </tr>
        <tr class="btable__row">
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Restaurant</span> <span class="btable__mobile-column text_rest">La Fontana                        <span class="reserve_box">R</span>
                      </span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Tipo de Comida</span> <span class="btable__mobile-column text_rest">Italiano</span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Horario</span> <span class="btable__mobile-column text_rest">6:00 PM - 9:30 PM</span></td>
          <td class="btable__cell"><span class="btable__mobile-column tittle_rest">Vestimenta</span> <span class="btable__mobile-column text_rest">Formal</span></td>
            
          <td class="btable__cell center_button"><span class="btable__mobile-column tittle_rest">Herramientas</span> <span class="btable__mobile-column"> 
              
              <a class="edit_rest_button fancybox_activity hvr-grow" href="actions/modify_restaurant.php?current_restaurant=3362">
              <span class="glyphicon glyphicon-record"></span></a>  
              
              <a class="edit_rest_button red_icon fancybox_delete hvr-grow" href="actions/delete_restaurant.php?id_restaurant=3362">
              <span class="glyphicon glyphicon-remove-circle"></span> </a>  
              </span></td>
                        
        </tr>
            </tbody>
  </table>
  
    
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
      
      
     
      
        <script type="text/javascript" src="js/FB/source/jquery.fancybox.js"></script>
    <link rel="stylesheet" type="text/css" href="js/FB/source/jquery.fancybox.css" media="screen" />
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox_delete').fancybox({
				type: 'iframe',
                autoSize : false,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : false,
				padding: 0,
				width: 500,
				height : 250,
				
				
			
			
				autoScale: true,
				
				    helpers : {
						
        overlay : {
			closeClick: false,
            css : {
                'background' : 'rgba(60,47,95,0.80)'
            }
        }
    },
                 beforeShow: function () {
        if (this.type == "iframe") {
            $(".fancybox-skin").css({
                backgroundColor: "transparent"
            });
        }
    }

			});
			
			
			
			$('.fancybox_activity').fancybox({
				type: 'iframe',
                autoSize : false,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : false,
				padding: 0,
				width: 700,
				height : 600,
				
				
			
			
				autoScale: true,
				
				    helpers : {
        overlay : {
			closeClick: false,
			
            css : {
                'background' : 'rgba(60,47,95,0.80)'
            }
        }
    },
                beforeShow: function () {
        if (this.type == "iframe") {
            $(".fancybox-skin").css({
                backgroundColor: "transparent"
            });
        }
    }

			});
			
			
			
		});
        
        
   
        
	</script>
      
      

<!-- Plugins --> 
<script src="../js/bootstrap.js"></script>  
</body>
</html>