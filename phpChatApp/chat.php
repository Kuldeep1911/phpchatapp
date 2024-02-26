<?php 

  session_start();
  include "header.php";
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
          $user_id =  $_GET['user_id'];
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
      <div class="chat-box" >

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id"  name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button onclick="shownotification()"><i class="fa-brands fa-telegram"></i></button>
      </form>
    </section>
  </div>
          <div id="toastBox"></div>
 
          <script src="path/to/sweetalert.min.js"></script>
          <script src="javascript/chat.js"></script>

</body>
</html>
