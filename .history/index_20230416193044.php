<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<!--Elias bot-->
<?php include_once "header.php"; ?>
<body class="bc-black" >
  <div class="wrapper">
    <section class="form signup">
      <header>Chat App "Los F5"</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nombres</label>
            <input type="text" name="fname" placeholder="Nombres" required>
          </div>
          <div class="field input">
            <label>Apellidos</label>
            <input type="text" name="lname" placeholder="Apellidos" required>
          </div>
        </div>
        <div class="field input">
          <label>Correo Electrónico</label>
          <input type="text" name="email" placeholder="Ingresa tu correo" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa una contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Seleccionar Imagen</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continuar Chateando">
        </div>
      </form>
      <div class="link">Ya te has registrado? <a href="login.php">Iniciar Sesión</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
