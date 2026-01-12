
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Centro Actividades</title>
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
  
  
  <div id="activity_rotator" class="owl-carousel">
    
       <div class="item">
  <div class="total_activitie_box">
    <div class="relative">
      
      <div class="activitie_content no_shadow">
          
          <a class="hvr-shrink add_activity fancybox_activity" href="\Act+Inf\Base_actividad\Acciones\Agregar\PHP\actions\add_activity.php">Agregar Actividad</a>
          
        
          
          
        </div>
      </div>
      
          
  </div>
  </div>
    
      
          <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_gym.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Gimnasio                         </div>
                    <div class="name_activity_eng">Gym</div>
                    </div> 
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      7:00 AM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Adultos / Adults</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="\Act+Inf\Base_actividad\Acciones\Detalles\PHP\actions\modify_activity.php">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="\Act+Inf\Base_actividad\Acciones\Borrar\PHP\actions\delete_activity.php">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_strech.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Estiramientos                         </div>
                    <div class="name_activity_eng">Stretching class</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Alberca</div>
                      <div class="gray_text">Pool</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      10:00 AM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=18224">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=18224">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_boardgames.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Juegos de Mesa                         </div>
                    <div class="name_activity_eng">Table games </div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Barcy Club</div>
                      <div class="gray_text">Barcy Club</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      10:00 AM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Niños / Kids</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=21795">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=21795">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_handcraft.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Manualidad                         </div>
                    <div class="name_activity_eng">Handcraft</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Barcy Club</div>
                      <div class="gray_text">Barcy Club</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      11:00 AM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Niños / Kids</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=21796">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=21796">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_fishsight.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Visitando a los Peces	                         </div>
                    <div class="name_activity_eng">Visiting the Fish</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Playa</div>
                      <div class="gray_text">Beach</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      11:00 AM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=22024">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=22024">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_waterpolo.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Polo acuático                         </div>
                    <div class="name_activity_eng">Waterpolo</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Alberca</div>
                      <div class="gray_text">Pool</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      11:00 AM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=17179">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=17179">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_aquagym.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Aquagym                         </div>
                    <div class="name_activity_eng">Aquagym</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Alberca</div>
                      <div class="gray_text">Pool</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      12:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=20303">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=20303">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_poolgames.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Juegos de alberca                         </div>
                    <div class="name_activity_eng">Pool games</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Parque Acuático</div>
                      <div class="gray_text">Water Park</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      12:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Niños / Kids</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=21797">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=21797">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_mfair.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Feria Mexicana                         </div>
                    <div class="name_activity_eng">Mexican Fair</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Jardín</div>
                      <div class="gray_text">Garden</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      1:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=22217">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=22217">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_aquavolley.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Volleyball acuático                         </div>
                    <div class="name_activity_eng">Water Volleyball</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Alberca</div>
                      <div class="gray_text">Pool</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      2:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=18802">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=18802">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_barcygames.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Juegos en Barcy                         </div>
                    <div class="name_activity_eng">Games in Barcy</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Salón de Juegos</div>
                      <div class="gray_text">Entertainment center</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      3:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Niños / Kids</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=21495">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=21495">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_goldengol.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Golden gol                         </div>
                    <div class="name_activity_eng">Golden gol</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Alberca</div>
                      <div class="gray_text">Pool</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      3:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=18809">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=18809">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_kite.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Papalotes                         </div>
                    <div class="name_activity_eng">Kites</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Playa</div>
                      <div class="gray_text">Beach</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      4:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Niños / Kids</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=21799">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=21799">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_crazygames.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Juegos Locos                         </div>
                    <div class="name_activity_eng">Crazy Games</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Alberca</div>
                      <div class="gray_text">Pool</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      4:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=20813">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=20813">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_livemusic.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Música en Vivo                         </div>
                    <div class="name_activity_eng">Live Music</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Lobby</div>
                      <div class="gray_text">Lobby</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      7:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=10049">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=10049">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_billiardt.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Torneo de Billar                         </div>
                    <div class="name_activity_eng">Billiard Tournament</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Salón de Juegos</div>
                      <div class="gray_text">Entertainment center</div>
                    </div>
                    </div>  
                                    
                  <div class="hour_activity">
                    <div class="hour_activity_content">
                      <span class="glyphicon glyphicon-time clock_icon activity_clock"></span> 
                      8:00 PM</div>
                    </div>
                  
                  <div class="type_activity">
                    <span  class="icon icon-male type_icon"></span>
                    <div class="type_activity_content">Familiar / Family</div>
                    </div>  
                  </div>
                
                 
              </div>
            </div>
          </div>
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=12750">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=12750">Eliminar</a></div>
            
                  </div>
      </div>
            <div class="item">
        <div class="total_activitie_box">
          <div class="actitivie_box" style="background-image: url(../assets/activities/act_mexican.jpg)">
            
            <div class="activitie_content">
              
              <div class="info_activitie_box">
                
                <div class="activity_text white_text">
                  <div class="name_activity">
                    <div class="name_activity_esp">
                      Mexicano                         </div>
                    <div class="name_activity_eng">Mexican</div>
                    </div> 
                  
                  
                  
                  
                                    <div class="place_activity">
                    <div class=" place_activity_content">
                      <span  class="icon icon-ios-location icon_pointer"></span>
                      <div>Teatro Oaxaca </div>
                      <div class="gray_text">Oaxaca Theater</div>
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
                    <div class="button_edit_box"><a class="button_form_blue hvr-shrink fancybox_activity" href="actions/modify_activity.php?id_activity=22528">Editar</a></div>
            
                    <div class="button_edit_box"><a class="button_form_red hvr-shrink fancybox_delete" href="actions/delete_activity.php?id_activity=22528">Eliminar</a></div>
            
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
                autoplayHoverPause: true,
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
      
        <script type="text/javascript" src="js/FB/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="js/FB/source/jquery.fancybox.css?v=2.1.5" media="screen" />
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