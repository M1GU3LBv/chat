<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Escribe aquí un mensaje..." autocomplete="off">
        <button class="first-btn uk-button uk-button-primary active">😀</button>
        <button class="send"><i class="fab fa-telegram-plane"></i></button>
      </form>
      <!-- <div class="uk-container uk-container-small uk-section">
        
        <div class="uk-margin-large">
            
            <button class="first-btn uk-button uk-button-primary">Start picker</button>
        </div>
      </div> -->
     
    </section>
  </div>
 
  <script src="javascript/chat.js"></script>
  <script src="javascript/vanillaEmojiPicker.js"></script>
    <script>

        new EmojiPicker({
            trigger: [
                {
                    selector: '.first-btn',
                    insertInto: '.message' // '.selector' can be used without array
                },
                {
                    selector: '.second-btn',
                    insertInto: '.message'
                }
            ],
            closeButton: true,
            //specialButtons: green
        });

    </script>
</body>
</html>
