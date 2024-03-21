<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="assets/css/_dashboard.css">
    <?php require_once './headers.php' ?>
    <script src="../script.js"></script>
    <style>

.container {
    width: 80%; /* 80% width of the viewport */
    margin: 0 auto; /* Auto margin to center horizontally */
}
 /* Custom CSS for centering the table */
 .center-table {
    margin-top: 100px;
    width: 100%; /* 80% width of the viewport */
    margin-left: -350px;
    
}

/* Custom CSS for making the table bigger */
.big-table {
    font-size: 1.2rem; /* Increase font size */
}

    /* Adjust the width and padding of each column */
    .table-slipper th,
    .table-slipper td {
        padding: 10px; /* Adjust the padding as needed */
        text-align: left; /* Align text to the left */
    }

    /* Adjust the width of the Last Name and Email columns */
    .table-slipper th:nth-child(2),
    .table-slipper td:nth-child(2){
        width: 30%; /* Adjust the width as needed */
    }

    .table-slipper td:nth-child(3){
        width: 40%; /* Adjust the width as needed */
        text-align: justify; /* Align text to the center */
    }
    .table-slipper th:nth-child(3){
        text-align: center; /* Align text in the "Email" title column header to the center */
    }


.tab-pane.fade {
max-height: calc(-5000vh - -100vh); /* Adjust the maximum height as needed */
margin-bottom: -20000vh;
}

.tab-pane.fade {
padding-bottom: -10px; /* Adjust as needed */
}

.table-responsive {
position: relative;
overflow: visible; /* Allow overflow to make dropdown fully visible */
margin-bottom: 0;
}
</style>
<style>
        .button-container {
            position: absolute;
            left: 300px;
            margin-top: 100px; /* Adjust as needed */
            display: flex;
            align-items: center;
            z-index: 2; /* Adjusted to be between the profile-menu and other content */
        }

        .button-container button.btn,
        .button-container a.btn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 8px 16px;
            margin-right: 10px;
            text-decoration: none;
            font-weight: bold; /* Added this line to make text bold */
            position: relative;
        }

        .button-container button.btn.active::after,
        .button-container a.btn.active::after {
            content: '';
            position: absolute;
            bottom: -2px; /* Adjust as needed */
            left: 0;
            width: 100%;
            height: 2px;
            background-color: blue;
            transition: background-color 0.3s ease;
        }

       
        .tab-pane.fade {
        max-height: calc(-5000vh - -100vh); /* Adjust the maximum height as needed */
        margin-bottom: -20000vh;
        }



</style>


</head>
<body>
        <div class="button-container">
        <a href="/Super-admin-main/adventours/users.php" class="btn active" onclick="toggleButtonUnderline(this, 'travelers'); return false;">Travelers</a>
        <a href="/Super-admin-main/adventours/usershotel.php" class="btn" onclick="toggleButtonUnderline(this, 'hotels'); return true;">Hotels</a>        
        <a href="/Super-admin-main/adventours/usersrestaurant.php" class="btn" onclick="toggleButtonUnderline(this, 'restaurants'); return true;">Restaurants</a> 
    </div>

<body class="p-0">
    <?php 
        $pageTitle = "USER MANAGEMENT";
        $subPageTitle = "User Profiles";
        include 'navbar.php';
    ?>
                <div class="table-responsive py-3 table-container" id="tableContainer">
                <table class="table table-slipper text-center center-table big-table" style="width: 90%; margin-left:30px;">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th> 
                              </tr>
                              <tbody>
                              <tbody id="tbody1">
                             <tr>
                            <td colspan="5">
                            <div id="loading" class="d-flex align-items-center">
                            <strong>Loading...</strong>
                            <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-firestore.js"></script>

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

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    const db = firebase.firestore();

    // Function to get all data once
    function GetAllDataOnce() {
        db.collection("users").get().then((querySnapshot) => {
            var restaurantReservation = [];
            querySnapshot.forEach(doc => {
                restaurantReservation.push(doc.data());
            });
            AddAllItemsToTheTable(restaurantReservation);
        });
    }

    // Function to add items to the table
    function AddItemToTable(firstName, lastName, email) {
        var trow = document.createElement('tr');
        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        var td3 = document.createElement('td');
        

        td1.innerHTML = firstName;
        td2.innerHTML = lastName;
        td3.innerHTML = email;

        trow.appendChild(td1);
        trow.appendChild(td2);
        trow.appendChild(td3);

        tbody.appendChild(trow);
    }

    // Function to add all items to the table
    function AddAllItemsToTheTable(RestaurantReservationDocsList) {
        stdNo = 0;
        tbody.innerHTML = "";
        RestaurantReservationDocsList.forEach(element => {
            AddItemToTable(element.firstName, element.lastName, element.email);
        });
    }

    var stdNo = 0;
    var tbody = document.getElementById('tbody1');
    window.onload = GetAllDataOnce;
</script>


    <script>
    // Change title
    (() => {
        let state = !0;
        const changeTitle = () => {
            document.title = state ? 'Adventours' : 'User Management';
            state = !state;
        }
        changeTitle();
        setInterval(() => {
            changeTitle()
        }, 1000)
    })();
    </script>

</body>
</html>