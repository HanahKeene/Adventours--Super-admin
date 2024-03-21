<?php 
     $pageTitle = "RESERVATIONS";
     include 'navbar.php';
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVATIONS</title>
    <link rel="stylesheet" href="assets/css/_dashboard.css">
    <?php require_once './headers.php'; ?>
    <script src="../script.js"></script>
</head>
<style>
    .text-success {
    color: green;
}

.text-primary {
    color: blue;
}

.text-warning {
    color: orange;
}

.text-gray {
    color: gray;
}

.text-cyan {
    color: cyan;
}

.text-danger {
    color: red;
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

.dropdown-menu {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

.button-container {
  position: absolute; /* Set position to fixed */
  left: 10px;
  top: 10%; /* Adjust as needed */
  display: flex;
  align-items: center; 
  z-index: 2; /* Adjusted to be between the profile-menu and other content */
}

.button-container a.btn {
  background-color: transparent;
  border: none;
  cursor: pointer;
  font-size: 16px;
  padding: 8px 16px;
  margin-right: 10px;
  text-decoration: none;
  position: relative;
  font-weight: bold; /* Added this line to make text bold */
}

.button-container a.btn:hover {
  color: blue; /* Change color on hover */
}

/* Removed absolute positioning for the underline */
.button-container a.btn::after {
  content: '';
  position: absolute;
  bottom: -2px; /* Adjust as needed */
  left: 0;
  width: 100%;
  height: 2px;
  background-color: transparent;
  transition: background-color 0.3s ease;
}

.button-container a.btn:focus::after {
  background-color: blue; /* Change underline color when clicked */
}
</style>
</head>
<body>
    <div class="button-container">
        <a href="/Super-admin-main/adventours/hotels_reservation.php" class="btn active">Hotels</a>
        <a href="/Super-admin-main/adventours/restaurants_reservation.php" class="btn">Restaurants</a>
        <a href="/Super-admin-main/adventours/tours_reservation.php" class="btn">Tours</a>
    </div>
   
    <div class="dashboard">
       
        <div class="tab-content" id="myTabContent">
            <!-- travelers tab -->
            <div class="tab-pane fade p-5 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">
                <div class="d-flex align-items-center justify-content-between">
                    <!-- search tab -->
                    <form action="" method="post" class="col-7 col-lg-5">
                    <input type="text" placeholder="Search.." class="form-control" id="searchInput" oninput="searchTable()">
                    </form>
                </div>
                <div class="spacer" style="height: 10px;"></div> <!-- Adjust height as needed -->

                <!-- table 1 -->
                <div class="table-responsive py-3 table-container" id="tableContainer">
                <table class="table table-slipper text-center center-table big-table" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Reservation ID</th>
                                <th>Customer Name</th>
                                <th>Hotel Name</th>
                                <th>Room Name</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Receipt</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                              <tbody>
                              <tbody id="tbody1">
                             <tr>
                            <td colspan="9">
                        <div id="loading" class="d-flex align-items-center">
                            <strong>Loading...</strong>
                            <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
    // Function to add items to the table
    function AddItemToTable(reservationId, CustomerName, HotelName, RoomName, CheckIn, CheckOut, receipt, status, action) {
    var tbody = document.getElementById('tbody1');
    var trow = document.createElement('tr');

    // Create table data cells
    var td1 = document.createElement('td');
    td1.innerHTML = reservationId;

    var td2 = document.createElement('td');
    td2.innerHTML = CustomerName;

    var td3 = document.createElement('td');
    td3.innerHTML = HotelName;

    var td4 = document.createElement('td');
    td4.innerHTML = RoomName;

    var td5 = document.createElement('td');
    td5.innerHTML = CheckIn;

    var td6 = document.createElement('td');
    td6.innerHTML = CheckOut;

    var td7 = document.createElement('td');
td7.innerHTML = "No receipt";
td7.style.color = "red"; // Set text color to red

var isImageDisplayed = false; // Flag to track if image is currently displayed
var overlayDiv; // Variable to store the transparent black background overlay

// Check if receipt image exists
if (receipt) {
    var img = document.createElement('img');
    img.src = receipt;
    img.alt = "Receipt Image";

    // Adjust the image size
    img.style.width = '27%'; // Set the width to 80% of the viewport width
    img.style.height = 'auto'; // Automatically adjust the height to maintain aspect ratio

    // Add event listener to display image on click
    td7.addEventListener('click', function() {
        // Check if image is already displayed
        if (!isImageDisplayed) {
            // Create transparent black overlay
            overlayDiv = document.createElement('div');
            overlayDiv.style.position = 'fixed';
            overlayDiv.style.top = '0';
            overlayDiv.style.left = '0';
            overlayDiv.style.width = '100%';
            overlayDiv.style.height = '100%';
            overlayDiv.style.backgroundColor = 'rgba(0, 0, 0, 0.7)'; // Transparent black background
            overlayDiv.style.zIndex = '9998'; // Below the image but above other content
            document.body.appendChild(overlayDiv);

            // Display the image
            img.style.position = 'fixed';
            img.style.top = '50%';
            img.style.left = '54%';
            img.style.right = '20%';
            img.style.transform = 'translate(-50%, -50%)';
            img.style.maxWidth = '90%';
            img.style.maxHeight = '200%';
            img.style.zIndex = '9999'; // Above the overlay
            img.style.backgroundColor = 'rgba(0, 0, 0, 0.9)';
            img.style.boxShadow = '0 0 20px rgba(0, 0, 0, 0.3)';
            img.style.borderRadius = '10px';
            document.body.appendChild(img);

            // Set flag to true indicating image is displayed
            isImageDisplayed = true;

            // Add click event to close image and overlay when clicked
            overlayDiv.addEventListener('click', closeImage);
            img.addEventListener('click', closeImage);
        }
    });

    // Update td7 content to "View Receipt"
    td7.innerHTML = "View Receipt";
    td7.style.color = "green"; // Set text color to red
    td7.style.cursor= "pointer"; // Set text color to red


}

// Function to close image and overlay
function closeImage() {
    if (isImageDisplayed) {
        document.body.removeChild(img);
        document.body.removeChild(overlayDiv);
        isImageDisplayed = false; // Reset flag
    }
}

var td8 = document.createElement('td');
td8.innerHTML = status;
td8.style.fontWeight = 'bold'; // Bold font for status

var td9 = document.createElement('td');


// Debugging date comparison
var currentDate = new Date();
var checkoutDate = new Date(CheckOut);
console.log("Current Date:", currentDate);
console.log("Check-out Date:", checkoutDate);
if (currentDate > checkoutDate) {
    console.log("Reservation Expired!");
    td8.innerHTML = "Expired";
    // Set text color to gray for expired status
    td8.style.color = "gray";
} else {
    console.log("Reservation Active.");
    // Ensure that the text color is reset for active reservations
    td8.style.color = ""; // Reset to default color
    // Create dropdown button (omitted for brevity)
}


    // Create dropdown button (omitted for brevity)
    // Define status classes
    var statusClasses = {
        'confirmed': 'text-success',
        'checked in': 'text-primary',
        'pending approval': 'text-primary',
        'in progress': 'text-warning',
        'on hold': 'text-gray',
        'expired': 'text-gray',
        'upcoming': 'text-cyan',
        'completed': 'text-success',
        'cancelled': 'text-danger',
        'no show': 'text-danger',
        'rejected': 'text-danger'
    };

    // Apply status class
    var lowercaseStatus = status.toLowerCase();
    if (statusClasses.hasOwnProperty(lowercaseStatus)) {
        td8.className = statusClasses[lowercaseStatus];
    }

    // Create dropdown button
    var dropdownButton = document.createElement('div');
    dropdownButton.classList.add('dropdown');

    var button = document.createElement('button');
    button.classList.add('btn', 'btn-secondary', 'dropdown-toggle');
    button.setAttribute('type', 'button');
    button.setAttribute('id', 'dropdownMenuButton');
    button.setAttribute('data-bs-toggle', 'dropdown');
    button.setAttribute('aria-expanded', 'false');
    button.innerText = 'Action';

    var dropdownMenu = document.createElement('ul');
    dropdownMenu.classList.add('dropdown-menu');
    dropdownMenu.setAttribute('aria-labelledby', 'dropdownMenuButton');

    var actions = [
        'Confirmed', 
        'Checked in',
        'In Progress',
        'On Hold',
        'Pending Approval',
        'Upcoming', 
        'Completed',
        'Cancelled',
        'Expired',
        'No show',
        'Rejected'
    ];

    actions.forEach(action => {
        var dropdownItem = document.createElement('li');
        dropdownItem.innerHTML = `<a class="dropdown-item" href="#" data-status="${action.toLowerCase()}">${action}</a>`;
        dropdownMenu.appendChild(dropdownItem);
    });
    

// Add event listener to dropdown items
dropdownMenu.addEventListener('click', function(event) {
    var target = event.target;
    if (target.tagName === 'A') {
        var newStatus = target.dataset.status;
        // Capitalize the first letter of each word
        var capitalizedStatus = newStatus.toLowerCase().replace(/\b\w/g, function(char) {
            return char.toUpperCase();
        });
        td8.innerText = capitalizedStatus; // Set capitalized status in the table

        // Update status in Firestore
        db.collection("Hotel Reservation").doc(reservationId).update({
            status: capitalizedStatus // Ensure status is saved with each word capitalized
        }).then(() => {
            console.log("Document successfully updated!");
            // Update color class based on the new status
            var lowercaseNewStatus = newStatus.toLowerCase();
            if (statusClasses.hasOwnProperty(lowercaseNewStatus)) {
                td8.className = ""; // Clear existing classes
                td8.classList.add(statusClasses[lowercaseNewStatus]); // Add the class for the new status
            }
        }).catch((error) => {
            console.error("Error updating document: ", error);
        });
    }
});

    // Append dropdown elements
    dropdownButton.appendChild(button);
    dropdownButton.appendChild(dropdownMenu);

    td9.appendChild(dropdownButton);

    trow.appendChild(td1);
    trow.appendChild(td2);
    trow.appendChild(td3);
    trow.appendChild(td4);
    trow.appendChild(td5);
    trow.appendChild(td6);
    trow.appendChild(td7);
    trow.appendChild(td8);
    trow.appendChild(td9);


    tbody.appendChild(trow);
}


// Function to update status and handle notification
function updateStatus(newStatus) {
    // Update status in the table (you may add the logic to update status in Firestore here)
    var td8 = event.target.closest('tr').querySelector('.status');
    td8.innerHTML = newStatus;
    
    // Trigger notification for the user
    notifyUser(newStatus);
}

// Function to notify user about status change
function notifyUser(status) {
    // Replace this alert with your notification mechanism
    alert("Your status has been updated to: " + status);
}


    // Function to add all items to the table
    function AddAllItemsToTheTable(HotelReservationDocsList) {
        stdNo = 0;
        tbody.innerHTML = "";
        HotelReservationDocsList.forEach(element => {
            AddItemToTable(element.reservationId, element.CustomerName, element.HotelName, element.RoomName, element.CheckIn, element.CheckOut, element.receipt, element.status, element.action);
        });
    }

    var stdNo = 0;
    var tbody = document.getElementById('tbody1');
    window.onload = GetAllDataOnce;


     // Function to get all data once
     function GetAllDataOnce() {
        db.collection("Hotel Reservation").get().then((querySnapshot) => {
            var HotelReservation = [];
            querySnapshot.forEach(doc => {
                HotelReservation.push(doc.data());
            });
            AddAllItemsToTheTable(HotelReservation);
        });
    }

    
</script>

<script>
        // Function to search for data in the table
function searchTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("tableContainer");
    tr = table.getElementsByTagName("tr");
    
    for (i = 0; i < tr.length; i++) {
        // Assuming the data cells start from index 1 (excluding the header row)
        td = tr[i].getElementsByTagName("td");
        for (var j = 1; j < td.length - 1; j++) { // Exclude the last td as it contains dropdown button
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break; // Break out of the inner loop if a match is found
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
}

// Assuming you have an input field with id "searchInput" and a button to trigger the search
document.getElementById("searchButton").addEventListener("click", searchTable);

</script>




<script>

    // Function to handle new reservations
    function handleNewReservation(doc) {
        // Reload the page only if it's currently not focused
        if (!document.hasFocus()) {
            location.reload();
        }
    }

    // Function to listen for new reservations
    function listenForNewReservations() {
        // Reference to the reservations collection
        var reservationsRef = db.collection("Hotel Reservation");

        // Listen for new reservations
        reservationsRef.onSnapshot(function(snapshot) {
            snapshot.docChanges().forEach(function(change) {
                if (change.type === "added") {
                    // Call handleNewReservation function when a new reservation is added
                    handleNewReservation(change.doc);
                }
            });
        });
    }

    // Call the function to listen for new reservations
    listenForNewReservations();



// Function to position the dropdown menu at the bottom of the viewport
function positionDropdownMenu() {
    var dropdownMenu = document.querySelector('.dropdown-menu');
    var windowHeight = window.innerHeight;
    var dropdownHeight = dropdownMenu.offsetHeight;
    var bottomPadding = 10; // Adjust as needed

    dropdownMenu.style.top = (windowHeight - dropdownHeight - bottomPadding) + 'px';
}

// Position the dropdown menu initially and listen for window resize events
document.addEventListener('DOMContentLoaded', function() {
    positionDropdownMenu();
    window.addEventListener('resize', positionDropdownMenu);
});


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
</script>

    <script>
        // Change title
        (() => {
            let state = true;
            const changeTitle = () => {
                document.title = state ? 'Adventours' : 'RESERVATIONS';
                state = !state;
            };
            changeTitle();
            setInterval(changeTitle, 1000);
        })();
    </script>
</body>

</html>
