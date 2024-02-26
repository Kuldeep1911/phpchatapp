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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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
            <table class="table table-striped table-borderd">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Sr No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Manage</th>
                    </tr>
                
                            <?php
                            $count = 1;     
                            $sql = 'SELECT DISTINCT u.fname, u.img ,u.email ,m.incoming_msg_id , u.user_id
                            FROM messages m
                            INNER JOIN users u ON m.incoming_msg_id = u.unique_id WHERE u.unique_id                        
                            ';
                            $query = mysqli_query($conn, $sql);

                            if(mysqli_num_rows($query) == 0) {
                                echo '<tr><td colspan="3">No Data Found</td></tr>';
                            } else {
                                while($data = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                    <td><?=$count?></td>
                                    <td><?=$data['fname']?></td>
                                    <td><img src="php/images/<?=$data['img']?>" height="50px" width="50px"></td>
                                    <td>
                                        <button class="btn btn-danger btn-sm delete-btn" data-userid="<?=$data['user_id']?>" data-incomingmsgid="<?=$data['incoming_msg_id']?>">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                            <?php
                                    $count++;
                                            // Insert fetched data into the friends table

                                }
                            }
                            ?>
                </thead>
                <tbody>

               
    
                </tbody>
</table>



        </section>
    </div>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="javascript/users.js"></script>
    
</body>
</html>