<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['uid'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM user_info WHERE user_id = {$_SESSION['uid']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>

<a href="../store.php" class="back-icon" style="margin:10px;font-size:20px"><i class="fa fa-arrow-right"></i></a>
        
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span style="font-size:14px"><?php echo $row['first_name']. " " . $row['last_name'] ?></span>
            <p><?php echo 'متصل'; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['user_id']; ?>" class="logout">تسجيل خروج</a>
      </header>
      <div class="search">
        <span class="text">يرجي اختيار مستخدم للدردشه</span>
        <input type="text" placeholder="اسم المستخدم...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
