<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['uid'])){
    header("location: login.html");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area" style="width:100%" >
      <header>
        <?php 
        if(!isset($_GET['iid']))
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          else
$user_id=$_GET['iid'];
          $sql = mysqli_query($conn, "SELECT * FROM user_info WHERE user_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-right"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['first_name']. " " . $row['last_name'] ?></span>
          <p><?php  if($row['status']=="Active now")
echo "متصل";
else {
echo "اخر ظهور  ";
echo $row['ft'];}

?></p>

        </div>
      </header>
      <div class="chat-box" dir="ltr">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="محتوى الرساله..." autocomplete="off">
        <button class="bt"><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>

</body>
</html>
