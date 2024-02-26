<?php  include 'header.php'; 
session_start();
if(isset($_SESSION['unique_id'])){
    header("location: users.php");
}
?>
<body>

    <div class="wrapper">
        <section class="form login">
            <header>Login </header>
            <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="field input">
                    <label for="">Email Address</label>
                    <input type="email" name="email" placeholder="Enter Your Email Here" required>
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Enter Your password Here" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="continue to Chat">
                </div>
            </form>
            <div class="link">Not yet Signed up ? <a href="index.php">Register Here</a></div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>