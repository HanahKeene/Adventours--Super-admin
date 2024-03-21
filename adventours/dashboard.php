<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php require_once './headers.php' ?>

</head>
<style>
    .container {
        display: flex;
    }

    .flex-container {
        display: flex;
        align-items: center; /* Align children vertically center */
    }

    .rounded-rectangle {
        border: 1px solid #ccc;
        padding: 10px;
        margin-right: 10px;
    }

    .title0 {
        font-weight: bold;
        margin-bottom: 5px;
        color: pink;
        font-size: 40px;
    }

    .text-center {
        text-align: center;
    }
    .image-container {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-top: 20px;
    }

    .large-image img {
        max-width: 100%;
        height: auto;
    }

    .small-images {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .small-image img {
        max-width: 100%;
        height: auto;
    }
</style>


<body>
    <?php
    $pageTitle = "Dashboard";
    require_once './navbar.php';
    ?>
    <div class="dashboard">
        <div class="greetings">
            <p>Welcome, <b>Trixie Soriano!</b></p>
        </div>
        <div class="announcement">
            <div class="icon">
                <i class="fa-solid fa-bullhorn"></i>
            </div>
            <div class="announcement-txt">
                <marquee> W E L C O M E  T O  A D V E N T O U R S !!! </marquee>
            </div>
            <div class="announce-btn">
                <button id="myBtn">NEW ANNOUNCEMENT</button>
                <!-- The __modal -->
                <div id="my__modal" class="__modal">
                    <!-- __modal content -->
                    <div class="__modal-content">
                        <div class="__modal-header">
                            <span class="close">&times;</span>
                            <h2>Add New Announcement</h2>
                        </div>
                        <div class="__modal-body">
                            <input type="text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="total-counts">
            <div class="users-box">
                <p>Total Users</p>
                <p class="count">200</p>
            </div>
            <div class="bookings-box">
                <p>Active Reservations</p>
                <p class="count">200</p>
            </div>
            <div class="packages-box">
                <p>Packages</p>
                <p class="count">200</p>
            </div> 
        </div>
        


    <h1>POPULAR HOTELS | ALAMINOS  </h1>




    </div>
    <script>
        // Change title
        (() => {
            let state = !0;
            const changeTitle = () => {
                document.title = state ? 'Adventours' : 'Admin Dashboard';
                state = !state;
            }
            changeTitle();
            setInterval(() => {
                changeTitle()
            }, 1000)
        })();
    </script>

    <script>
        // Get the __modal
        var __modal = document.getElementById("my__modal");

        // Get the button that opens the __modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the __modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the __modal 
        btn.onclick = function() {
            __modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the __modal
        span.onclick = function() {
            __modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the __modal, close it
        window.onclick = function(event) {
            if (event.target == __modal) {
                __modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
