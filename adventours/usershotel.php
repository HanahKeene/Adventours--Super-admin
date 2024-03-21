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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>

.container {
    width: 80%; /* 80% width of the viewport */
    margin: 0 auto; /* Auto margin to center horizontally */
}
 /* Custom CSS for centering the table */
 .center-table {
    margin-top: 100px;
    width: 100%; /* 80% width of the viewport */
    margin-left: -310px;
    
}

/* Custom CSS for making the table bigger */
.big-table {
    font-size: 1.2rem; /* Increase font size */
}

.table-slipper {
    width: 200%; /* Make table width 100% of its container */
}

/* Adjust the width and padding of each column */
.table-slipper th,
.table-slipper td {
    padding: 10px; /* Adjust the padding as needed */
    text-align: left; /* Align text to the left */
}

/* Adjust the width of the Last Name and Email columns */
.table-slipper th:nth-child(2),
.table-slipper td:nth-child(2),
.table-slipper th:nth-child(3),
.table-slipper td:nth-child(3) {
    width: 30%; /* Adjust the width as needed */
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

.search-bar-container {
    position: relative;
    margin-top: 50px; /* Adjust as needed */
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
    /* Modal styles */
.modal-overlay {
    display: none; /* Hide the modal by default */
    position: fixed; /* Fixed position to cover the entire viewport */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Black background with transparency */
    z-index: 999; /* Ensure modal is above other content */
}

.modal-content {
    background-color: #fefefe; /* White background for modal content */
    position: fixed; /* Fixed position to center the modal */
    top: 50%; /* Position the modal 50% from the top */
    left: 55%; /* Position the modal 50% from the left */
    transform: translate(-50%, -50%); /* Translate the modal to center it */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Adjust the width as needed */
    max-width: 600px; /* Limit maximum width */
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

.modal-content h1 {
    text-align: center; /* Center the name */
    margin-bottom: 20px; /* Add some bottom margin for spacing */
}


</style>


</head>
<body>
        <div class="button-container">
        <a href="/Super-admin-main/adventours/users.php" class="btn" onclick="toggleButtonUnderline(this, 'travelers'); return false;">Travelers</a>
        <a href="/Super-admin-main/adventours/usershotel.php" class="btn active" onclick="toggleButtonUnderline(this, 'hotels'); return true;">Hotels</a>        
        <a href="/Super-admin-main/adventours/usersrestaurant.php" class="btn" onclick="toggleButtonUnderline(this, 'restaurants'); return true;">Restaurants</a> 
    </div>

<body class="p-0">
    <?php 
        $pageTitle = "USER MANAGEMENT";
        $subPageTitle = "User Profiles";
        include 'navbar.php';
    ?>
                <div class="table-responsive py-3 table-container" id="tableContainer">
                <table class="table table-slipper text-center center-table big-table" style="width: 95%; margin-left:20px;">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Location</th> 
                                <th>Information</th>
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

  <!-- Modal structure -->
  <div class="modal-overlay" id="modalOverlay">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div id="modalContent">
                <!-- Your modal content goes here -->
                <h1>Information</h1>
                <!-- Your form for adding rooms goes here -->
            </div>
        </div>
    </div>


    <script>
  // Modify this part of your code where you call openModal to pass all the necessary data
    
infoButton.onclick = function() {
    openModal(name, desc, gcash_account_name, gcash_account_number, maya_account_name, maya_account_number);
};
    console.log("Name:", name);
    console.log("Description:", desc);
    console.log("GCash Account Name:", gcash_account_name);
    console.log("GCash Account Number:", gcash_account_number);
    console.log("Maya Account Name:", maya_account_name);
    console.log("Maya Account Number:", maya_account_number);

    // Display the modal
    document.getElementById("modalOverlay").style.display = "block";
    
    // Populate the modal content dynamically
    var modalContent = document.getElementById("modalContent");
    modalContent.innerHTML = `
        <h1>${name}</h1>
        <p><strong>Description:</strong> ${desc}</p>
        <p><strong>GCash Account Name:</strong> ${gcash_account_name}</p>
        <p><strong>GCash Account Number:</strong> ${gcash_account_number}</p>
        <p><strong>Maya Account Name:</strong> ${maya_account_name}</p>
        <p><strong>Maya Account Number:</strong> ${maya_account_number}</p>
    `;




     // Close the modal when clicking outside of it
     modalOverlay.addEventListener("click", closeModal);
    

     // JavaScript function to close the modal
function closeModal() {
    var modalOverlay = document.getElementById("modalOverlay");
    if (modalOverlay) {
        modalOverlay.style.display = "none";
    } else {
        console.error("Modal overlay element not found");
    }
}

</script>




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

    // JavaScript function to open the modal and populate it with Firebase data
   function openModal(name, desc, gcash_account_name, gcash_account_number, maya_account_name, maya_account_number) {
        // Display the modal
        document.getElementById("modalOverlay").style.display = "block";
        
        // Populate the modal content dynamically
        var modalContent = document.getElementById("modalContent");
        modalContent.innerHTML = `
            <h1>${name}</h1>
            <p><strong>Description:</strong> ${desc}</p>
            <p><strong>GCash Account Name:</strong> ${gcash_account_name}</p>
            <p><strong>GCash Account Number:</strong> ${gcash_account_number}</p>
            <p><strong>Maya Account Name:</strong> ${maya_account_name}</p>
            <p><strong>Maya Account Number:</strong> ${maya_account_number}</p>
        `;
    }

     // Close the modal when clicking outside of it
     modalOverlay.addEventListener("click", closeModal);
    

     // JavaScript function to close the modal
function closeModal() {
    var modalOverlay = document.getElementById("modalOverlay");
    if (modalOverlay) {
        modalOverlay.style.display = "none";
    } else {
        console.error("Modal overlay element not found");
    }
}




    // Function to get all data once
    function GetAllDataOnce() {
        db.collection("Hotels").get().then((querySnapshot) => {
            var Hotels = [];
            querySnapshot.forEach(doc => {
                Hotels.push(doc.data());
            });
            AddAllItemsToTheTable(Hotels);
        });
    }

   // Function to add items to the table
function AddItemToTable(name, email, location, desc, gcash_account_name, gcash_account_number, maya_account_name, maya_account_number) {
    var trow = document.createElement('tr');
    var td1 = document.createElement('td');
    var td2 = document.createElement('td');
    var td3 = document.createElement('td');
    var td4 = document.createElement('td');

    td1.textContent = name;
    td2.textContent = email;
    td3.textContent = location;

     // Create information button
    let infoButton = document.createElement('button');
    infoButton.innerHTML = '<i class="fa fa-question-circle" aria-hidden="true"></i>';
    infoButton.onclick = function() {
        openModal(name, desc, gcash_account_name, gcash_account_number, maya_account_name, maya_account_number);
    };
    td4.appendChild(infoButton);

    // Append table cells to the table row
    trow.appendChild(td1);
    trow.appendChild(td2);
    trow.appendChild(td3);
    trow.appendChild(td4);

    // Append table row to the table body
    tbody.appendChild(trow);
}


// Function to add all items to the table
function AddAllItemsToTheTable(HotelsDocsList) {
    tbody.innerHTML = ""; // Clear table body
    HotelsDocsList.forEach(element => {
        AddItemToTable(element.name, element.email, element.location, element.desc, element.gcash_account_name, element.gcash_account_number, element.maya_account_name, element.maya_account_number);
    });
}
    </script>
    
    <script>
        // Function to add items to the table
function AddItemToTable(name, email, location, desc, gcash_account_name, gcash_account_number, maya_account_name, maya_account_number) {
    var trow = document.createElement('tr');
    var td1 = document.createElement('td');
    var td2 = document.createElement('td');
    var td3 = document.createElement('td');
    var td4 = document.createElement('td');

    td1.textContent = name;
    td2.textContent = email;
    td3.textContent = location;

     // Create information button
    let infoButton = document.createElement('button');
    infoButton.innerHTML = '<i class="fa fa-question-circle" aria-hidden="true"></i>';
    infoButton.onclick = function() {
        openModal(name, desc, gcash_account_name, gcash_account_number, maya_account_name, maya_account_number);
    };
    td4.appendChild(infoButton);

    // Append table cells to the table row
    trow.appendChild(td1);
    trow.appendChild(td2);
    trow.appendChild(td3);
    trow.appendChild(td4);

    // Append table row to the table body
    tbody.appendChild(trow);
}


// Function to add all items to the table
function AddAllItemsToTheTable(HotelsDocsList) {
    tbody.innerHTML = ""; // Clear table body
    HotelsDocsList.forEach(element => {
        AddItemToTable(element.name, element.email, element.location, element.desc, element.gcash_account_name, element.gcash_account_number, element.maya_account_name, element.maya_account_number);
    });
}

        var tbody = document.getElementById('tbody1');
        window.onload = GetAllDataOnce; // Call the function to load data once
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