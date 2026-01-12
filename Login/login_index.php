<?php
// Iniciar la sesión
session_start();
$error = '';

// Procesamiento mínimo del login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = isset($_POST['user_form']) ? $_POST['user_form'] : '';
    $pass = isset($_POST['password_form']) ? $_POST['password_form'] : '';

    // Credenciales solicitadas: root / 12345
    if ($user === 'root' && $pass === '12345') {
        // Login correcto: redirigir a otra página
        header("Location: \Act+Inf\Base_actividad\Centro_actividad\PHP\activities.php"); // Redirige a otra_pagina.php
        exit; 
    } else {
        $error = 'Usuario o contraseña incorrectos';
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" />
    <link href="\Act+Inf\Base_actividad\Login\css\styles.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- Contenedor total con fondo aleatorio -->
<div id="total_content">
  <div id="login_box">
    <div id="login_form">
    
      <div id="login_content">
        <!-- Logo en la parte superior -->
        <div id="logo_box">
          <img src="/Main/login/img/logo.png" width="154" height="172" alt="Logo"/>
        </div>

        <!-- Formulario de Login -->
        <div id="buttons_box">
          <form ACTION="login_index.php" METHOD="post" id="sunbox_login" name="login">
            <div class="form-group login">
              <input name="user_form" type="text" required class="input-control" id="user_form" placeholder="User Name" >
              <input name="password_form" type="password" required class="input-control" id="password_form" placeholder="Password" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{6,20}$" data-minlength="6">
              <button name="login_button" type="submit" class="button button--wayra button--border-thick button--text-upper button--size-s" value="Send">Login</button>
            </div>
            <?php if ($error): ?>
              <div id="login_error" style="color:#ff6b6b;text-align:center;margin-top:10px;"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
          </form>
        </div>
      
    </div>
  </div>
</div>

<!-- Script para cambiar el fondo de manera aleatoria -->
<script>
  const backgrounds = [
    'back1.jpg',
    'back2.jpg',
    'back3.jpg',
    'back4.jpg',
    'back5.jpg',
    'back6.jpg'
  ];
  
  // Seleccionamos una imagen aleatoria
  const randomBackground = backgrounds[Math.floor(Math.random() * backgrounds.length)];
  
  // Establecemos el fondo en el contenedor
  document.getElementById('total_content').style.backgroundImage = `url('/Main/login/img/${randomBackground}')`;
</script>

</body>
</html>
