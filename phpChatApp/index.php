
<?php include 'header.php'; 
session_start();
if(isset($_SESSION['unique_id'])){
    header("location: users.php");
}
?>
<body>
<button type="button" onclick="toggleDarkMode()" id="darkModeToggle">Dark Mode</button>

    <div class="wrapper">
        <section class="form signup">
            <header>Chat Application</header>
            <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>

                <div class="field input">
                    <label for="">Email Address</label>
                    <input type="email" name="email" placeholder="Enter Your Email Here" required> 
                </div>
                
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="password" required>
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field image">
                    <label for="">Profile Image</label>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                </div>

                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signed up ?
                <a href="login.php">Login.php</a>
            </div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
    <script src="javascript/darkmode.js"></script>
</body>
</html>