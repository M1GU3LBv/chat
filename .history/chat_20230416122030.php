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
         
       
        <button class="send"><i class="fab fa-telegram-plane"></i></button>
      </form>
      <div class="uk-container uk-container-small uk-section">
        
        <div class="uk-margin-large">
            <textarea name="" class="one uk-textarea uk-margin uk-height-medium">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
            <button class="first-btn uk-button uk-button-primary">Start picker</button>
        </div>
        
        <div>
            <textarea name="" class="two uk-textarea uk-margin"></textarea>
            <button class="second-btn uk-button uk-button-primary">Start picker</button>
        </div>
        
    </div>
     
    </section>
  </div>
  <script>

new EmojiPicker({
    trigger: [
        {
            selector: '.first-btn',
            insertInto: ['.one', '.two'] // '.selector' can be used without array
        },
        {
            selector: '.second-btn',
            insertInto: '.two'
        }
    ],
    closeButton: true,
    //specialButtons: green
});

</script>
  <script src="javascript/chat.js"></script>
  <script src="javascript/vanillaEmojiPicker.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit-icons.min.js"></script>
</body>
</html>
