<!-- =============== __navigation ================ -->
<link rel="stylesheet" href="assets/css/_style.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
</style>
<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    transition: all 0.3s;
    font-family: 'Roboto', sans-serif;
}

.left-align {
    text-align: left;
    font-weight: bolder;
    margin-top: 25px;
    margin-left: 15px;
}

.rounded-rectangle {
    width: 150px;
    height: 150px;
    background-color: #ffffff;
    border: 1px solid #000000;
    border-radius: 15px;
    padding: 20px;
    float: left;
    margin-top: 20px;
    margin-left: 20px;
    font-weight: bolder;
}

.title {
    font-size: 20px;
    margin-bottom: 40px;
    text-align: center;
}

li a {
    display: flex;
    align-items: start;
    justify-content: start;
}

li a .icon {
    margin-bottom: 20px;
}

li a .title {
    margin-top: 5px;
}
</style>
<div class="_container">
    <div class="__navigation">
        <ul>
            <li style="text-align: center;">
                <a href="#">
                    <div>
                        <img src="assets/imgs/5.png" alt="logo" height="200px" width="200px"
                            style="display: block; margin: 0 auto;">
                    </div>
                </a>
            </li>


            <li class="<?= $pageTitle == 'Dashboard' ? 'hovered': null ?>">
                <a href="./dashboard.php">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="<?= $pageTitle == 'USER MANAGEMENT' ? 'hovered': null ?>">
                <a href="./users.php">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Users</span>
                </a>
            </li>
           

            <li class="<?= $pageTitle == 'RESERVATION' ? 'hovered': null ?>">
                <a href="./reservation.php">
                    <span class="icon">
                        <ion-icon name="book"></ion-icon>
                    </span>
                    <span class="title">Reservations</span>
                </a>
            </li>

            <li class="<?= $pageTitle == 'HELP' ? 'hovered': null ?>">
                <a href="help.php">
                    <span class="icon">
                        <ion-icon name="help-outline"></ion-icon>
                    </span>
                    <span class="title">Help</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- ========================= Main ==================== -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <div class="page-header">
                <div class="pagetitle">
                    <div class="submenu mt-3">
                        <?php if (isset($pageTitle) && $pageTitle === "USER MANAGEMENT"): ?>
                        <p>USER MANAGEMENT</p>

                        <?php elseif (isset($pageTitle) && $pageTitle === "RESERVATIONS"): ?>
                        <p>RESERVATIONS</p>

                        <?php else: ?>
                        <p><?php echo isset($pageTitle) ? $pageTitle : "DASHBOARD"; ?></p>
                        <?php endif; ?>
                        <!-- Repeat the above structure for other page titles and subpages -->
                    </div>
                </div>

                <div class="profile p-0 pt-3 px-5">
                    <i class="fa-solid fa-user" style="color: white;"></i>
                    <p>ADMINISTRATOR</p><i class="fa-solid fa-caret-down" style="color: white;"></i>
                    <div class="profile-menu">
                        <ul>
                        <li onclick="logout()">Logout</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>


        <!-- =========== Scripts =========  -->

        <script>
    // Function to handle logout
    function logout() {
        // Remove user login status and redirect to login page
        localStorage.removeItem('user_login');
        localStorage.removeItem('user');
        window.location.href = './index.php';
    }
</script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>

        // return the user to the dashboard if
        // they are currently logged in
        if (localStorage.getItem('user_login') != 'true') {
            location.href = './index.php';
        }

        function changeSubpageTitle(subpageTitle) {
            $('#subpageTitle').text(subpageTitle);
        }

        let toggle = document.querySelector(".toggle");
        let __navigation = document.querySelector(".__navigation");
        let main = document.querySelector(".main");

        toggle.onclick = function() {
            __navigation.classList.toggle("active");
            main.classList.toggle("active");
        };
        </script>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>