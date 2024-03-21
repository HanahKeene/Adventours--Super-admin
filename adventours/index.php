<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/4.0.0-beta/jquery.min.js"
        integrity="sha512-qFOQ9YFAeGj1gDOuUD61g3D+tLDv3u1ECYWqT82WQoaWrOhAY+5mRMTTVsQdWutbA5FORCnkEPEgU0OF8IzGvA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- code inserted -->
    <!-- firebase SDK v8.6.8 -->
    <!-- version 10+ not supported -->
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>
    <!-- code inserted -->
</head>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>


<script>
    // Firebase configuration
    const firebaseConfig = {
    apiKey: "AIzaSyDjVbE7gj-dlFxeXVCvgBPK0WdiQBK4ZqQ",
    authDomain: "adventours-402501.firebaseapp.com",
    databaseURL: "https://adventours-402501-default-rtdb.firebaseio.com",
    projectId: "adventours-402501",
    storageBucket: "adventours-402501.appspot.com",
    messagingSenderId: "419913978490",
    appId: "1:419913978490:web:b57200bf9d04b15a8521c3",
    measurementId: "G-Q5VE5M59WR"
    };

</script>
<body>


     <!-- Form -->
     <img src="assets/imgs/5.png">
    <form class="form" action="" method="POST">
        <div class="username">
            <input required type="text" name="username" placeholder="Username">
        </div>
        <div class="pass">
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="submit">
            <!-- Change the name attribute to "Login" -->
            <input required type="submit" name="login" value="LogIn">
        </div>
    </form>



    <script>
        // Function to handle logout
        function logout() {
            // Remove user login status and redirect to login page
            localStorage.removeItem('user_login');
            localStorage.removeItem('user');
            window.location.href = './index.php';
        }

        $(document).ready(function () {
            // Return the user to the dashboard if they are currently logged in
            if (localStorage.getItem('user_login') === 'true') {
                window.location.href = './dashboard.php';
            }

            // Handle login function
            function handleLogin(username, password) {
                // Check if the username and password match
                if (username === "inquiry.adventours@gmail.com" && password === "admin123") {
                    // Simulate Firebase authentication success
                    var user = { username: username }; // Mock user object
                    localStorage.setItem('user_login', 'true');
                    localStorage.setItem('user', JSON.stringify(user));

                    Swal.fire({
                        title: "Success!",
                        text: "Login successfully",
                        icon: "success"
                    }).then(() => {
                        window.location.href = './dashboard.php'; // Redirect to dashboard
                    });
                } else {
                    // Simulate Firebase authentication failure
                    Swal.fire({
                        title: "Error!",
                        text: "Invalid username or password",
                        icon: "error"
                    });
                }
            }

            // Handle form submission
            $('form').submit(function (e) {
                e.preventDefault();
                let username = $('[name="username"]').val();
                let password = $('[name="password"]').val();
                handleLogin(username, password);
            });
        });
    </script>

</body>

</html>