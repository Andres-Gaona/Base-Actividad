<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PESTAÑA SHOWS</title>
    <meta name="Panel" content="noindex, nofollow">
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
     
      <script src="../js/jquery-1.11.3.min.js"></script>
 
      
    <link rel="stylesheet" href="../js/owl/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../js/owl/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="../js/owl/docs/assets/owlcarousel/owl.carousel.js"></script>
      
          <link href="../css/animate.css" rel="stylesheet" type="text/css">

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
      
    <a class="update_button fancybox_delete" href="\A+O\Base_actividad\Acciones\Actualizar\PHP\actions\update_screen.php">Actualizar</a><div class="day_box">
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
      </div><a id="exit_button" name="exit_button" class="logout_button" href="\A+O\Base_actividad\Login\login_index.php">Salir</a> </div>
<div id="main" onclick="closeNav()">
  
  
  <div id="activity_rotator" class="owl-carousel">
    
        <div class="item">
  <div class="total_activitie_box">
    <div class="relative">
      
      <div class="activitie_content no_shadow">
          
          <a class="hvr-shrink add_activity fancybox_activity" href="\A+O\Base_actividad\Acciones\Acciones_Shows\Agregar_Show\PHP\actions\add_show.php">Agregar Show</a>
          
        
          
          
        </div>
      </div>
      
          
  </div>
  </div>
      
          <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/show_karaoke.jpg)">
            
            <div class="day_prom_week"><span class="vertical-text">
             Domingo             
              </span></div>
            
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp show_name">
                      Noche Karaoke</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity place_show_box">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer pointer_show"></span>
                      <div class="gray_text">Teatro Oaxaca </div>
                    </div>
                  </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      9:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div> 
                </div>
                
                
              </div>
            </div>
          </div>
            
            
          <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="\A+O\Base_actividad\Acciones\Acciones_Shows\Modificar_Show\PHP\actions\modify_show.php">Editar</a></div>
          <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="\A+O\Base_actividad\Acciones\Acciones_Shows\Eliminar_Show\PHP\actions\delete_show.php">Eliminar</a></div>
            
            
        </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/show_legends.jpg)">
            
            <div class="day_prom_week"><span class="vertical-text">
             Lunes             
              </span></div>
            
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp show_name">
                      Leyendas</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity place_show_box">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer pointer_show"></span>
                      <div class="gray_text">Teatro Oaxaca </div>
                    </div>
                  </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      9:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div> 
                </div>
                
                
              </div>
            </div>
          </div>
            
            
          <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="\A+O\Base_actividad\Acciones\Acciones_Shows\Modificar_Show\PHP\actions\modify_show.php">Editar</a></div>
          <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="\A+O\Base_actividad\Acciones\Acciones_Shows\Eliminar_Show\PHP\actions\delete_show.php">Eliminar</a></div>
            
            
        </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/show_tropical.jpg)">
            
            <div class="day_prom_week"><span class="vertical-text">
             Martes             
              </span></div>
            
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp show_name">
                      Tropical</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity place_show_box">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer pointer_show"></span>
                      <div class="gray_text">Teatro Oaxaca </div>
                    </div>
                  </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      9:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div> 
                </div>
                
                
              </div>
            </div>
          </div>
            
            
          <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="/A+O/Base_actividad/Acciones/Acciones_Shows/Modificar_Show/PHP/actions/modify_show.php">Editar</a></div>
          <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="\A+O\Base_actividad\Acciones\Acciones_Shows\Eliminar_Show\PHP\actions\delete_show.php">Eliminar</a></div>
            
            
        </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/show_elixir.jpg)">
            
            <div class="day_prom_week"><span class="vertical-text">
             Miércoles             
              </span></div>
            
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp show_name">
                      Elixir Musical</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity place_show_box">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer pointer_show"></span>
                      <div class="gray_text">Teatro Oaxaca </div>
                    </div>
                  </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      9:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div> 
                </div>
                
                
              </div>
            </div>
          </div>
            
            
          <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="\A+O\Base_actividad\Acciones\Acciones_Shows\Modificar_Show\PHP\actions\modify_show.php">Editar</a></div>
          <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="\A+O\Base_actividad\Acciones\Acciones_Shows\Eliminar_Show\PHP\actions\delete_show.php">Eliminar</a></div>
            
            
        </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/show_muxical.jpg)">
            
            <div class="day_prom_week"><span class="vertical-text">
             Jueves             
              </span></div>
            
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp show_name">
                      Muxical Show</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity place_show_box">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer pointer_show"></span>
                      <div class="gray_text">Teatro Oaxaca </div>
                    </div>
                  </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      9:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div> 
                </div>
                
                
              </div>
            </div>
          </div>
            
            
          <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="\A+O\Base_actividad\Acciones\Acciones_Shows\Modificar_Show\PHP\actions\modify_show.php">Editar</a></div>
          <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="\A+O\Base_actividad\Acciones\Acciones_Shows\Eliminar_Show\PHP\actions\delete_show.php">Eliminar</a></div>
            
            
        </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/show_mexican.jpg)">
            
            <div class="day_prom_week"><span class="vertical-text">
             Viernes             
              </span></div>
            
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp show_name">
                      Mexicano</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity place_show_box">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer pointer_show"></span>
                      <div class="gray_text">Teatro Oaxaca </div>
                    </div>
                  </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      9:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div> 
                </div>
                
                
              </div>
            </div>
          </div>
            
            
          <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="\A+O\Base_actividad\Acciones\Acciones_Shows\Modificar_Show\PHP\actions\modify_show.php">Editar</a></div>
          <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="\A+O\Base_actividad\Acciones\Acciones_Shows\Eliminar_Show\PHP\actions\delete_show.php">Eliminar</a></div>
            
            
        </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/show_fantastic.jpg)">
            
            <div class="day_prom_week"><span class="vertical-text">
             Sábado             
              </span></div>
            
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp show_name">
                      Fantastic</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity place_show_box">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer pointer_show"></span>
                      <div class="gray_text">Teatro Oaxaca </div>
                    </div>
                  </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      9:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div> 
                </div>
                
                
              </div>
            </div>
          </div>
            
            
          <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="\A+O\Base_actividad\Acciones\Acciones_Shows\Modificar_Show\PHP\actions\modify_show.php">Editar</a></div>
          <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="\A+O\Base_actividad\Acciones\Acciones_Shows\Eliminar_Show\PHP\actions\delete_show.php">Eliminar</a></div>
            
            
        </div>
      </div>
            
    
    
    
    
    
  </div>

    
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
      
      
 <script>
        $( document ).ready( function () {
            var owl = $( '#activity_rotator' );
            owl.owlCarousel( {
                autoplay: true,
                autoplayTimeout: 9000,
                margin: 0,
                nav: false,
                loop: false,
                smartSpeed: 2000,
                mouseDrag: true,
                pullDrag: true,
                touchDrag: true,
                autoplayHoverPause: false,
                autoWidth:false,
          
                 responsive:{
                    0:{
                        items:1,
                        
                    },
                    500:{
                        items:2,
                    },
                    700:{
                        items:3,
                    },
                    1000:{
                        items:4,
                    },
                     1500:{
                        items:6,
                    }
    }

            } )

        } )
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
    
<script src="../js/bootstrap.js"></script>  
</body>
</html>