<?php   
session_start();
include "php/config.php";
if(!isset($_SESSION['unique_id'])){
    header("loaction: login.php");
}
?>

<?php

include "header.php";


?>
<body>
    
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
    <?php  
         $sql=mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
         if(mysqli_num_rows($sql) > 0){
            $row=mysqli_fetch_assoc($sql);
         }
    ?>
                    <img src="php/images/<?php  echo $row['img']  ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname']."".$row['lname']; ?> </span>
                        <p><?php  echo $row['status'];?></p>
                    </div>
                </div>

                <a href="php/logout.php?logout_id=<?php echo $row['unique_id'];?>" class="logout">logout</a>
            </header>

            <div class="search">
                <span class="text">Click on search icone to find someone</span>
                <input type="text" placeholder="Enter name to Search..">
                <button><i class="fas fa-search"></i></button>
            </div>
            <nav>
            <ul>
                <li><a href="profile.php" rel="noopener noreferrer">Home</a></li>

                <li><a href="friends.php" rel="noopener noreferrer">Friends<span class="badge"></span></a></li>
                <li><a href="users.php" rel="noopener noreferrer">All Users</a></li>
            </ul>
        </nav>

        </section>
    </div>
    <script src="javascript/users.js"></script>
    
</body>
</html>