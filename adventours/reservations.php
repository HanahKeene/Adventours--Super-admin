
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/_dashboard.css">
    <?php require_once './headers.php' ?>
</head>
<body>
    <?php 

$pageTitle = "RESERVATIONS";
include 'navbar.php';

?>
    <div class="dashboard">
    </div>

    <style>
        body, html {
            height: 100%;
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }

        .container {
          margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Align items to the top */
            height: 50%;
        }

        .top-container {
            margin-bottom: auto; /* Push the container to the top */
        }

        .bottom-container {
            margin-top: auto; /* Push the container to the top */
        }

        .btn {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: transparent;
            color: rgba(10, 20, 45, 1);
            text-decoration: none;
            border: 2px solid black; /* Add border */
            border-radius: 10px; /* Optional: Add border radius */
            width: 250px; /* Set fixed width */
            height: 250px; /* Set fixed height */
            font-size: 25px; /* Increase font size of text */
            margin: 10px; /* Add margin between buttons */
        }

        .btn:hover {
            border: 2px solid black; /* Add border */
            color: #30AFBF;
        }

        .btn i {
            margin-bottom: -10px; /* Adjust spacing between icon and text */
            font-size: 85px; /* Increase icon size */
        }

        .btn ion-icon {
            margin-bottom: -10px; /* Adjust spacing between icon and text */
            font-size: 85px; /* Increase icon size */
        }
    </style>
</head>
<body>
    <div class="container top-container">
        <a href="/Super-admin-main/adventours/hotels_reservation.php" class="btn"><ion-icon name="bed-outline"></ion-icon><br>Hotels</a>
        <a href="/Super-admin-main/adventours/restaurants_reservation.php" class="btn"><ion-icon name="restaurant-outline"></ion-icon><br>Restaurants</a>
    </div>
    <div class="container bottom-container">
        <a href="/Super-admin-main/adventours/tours_reservation.php" class="btn"><i class="fa solid fa-map-location-dot"></i><br>Tours</a>
    </div>

            
    <script>
        // Change title
        (() => {
            let state = !0;
            const changeTitle = () => {
                document.title = state ? 'Adventours' : 'Reservations';
                state = !state;
            }
            changeTitle();
            setInterval(() => {
                changeTitle()
            }, 1000)
        })();
    </script>

 <!-- ====== ionicons ======= -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>