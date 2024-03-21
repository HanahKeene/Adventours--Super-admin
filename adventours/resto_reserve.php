

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/_dashboard.css">
    <?php require_once './headers.php' ?>
    <script src="../script.js"></script>
</head>
<body>
    <?php 

$pageTitle = "RESERVATION";
include 'navbar.php';

?>
    <div class="dashboard">
    </div>

<style>
        .button-container {
            position: absolute;
            left: 10px;
            margin-top: -5px; /* Adjust as needed */
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
</style>

        <div class="button-container">
        <button class="btn" onclick="toggleButtonUnderline(this, 'hotels')">Hotels</button>
        <a href="/Super-admin-main/adventours/restaurants_reservation.php" class="btn" onclick="toggleButtonUnderline(this, 'restaurants'); return false;">Restaurants</a>
        <a href="/Super-admin-main/adventours/resto_reserve.php" class="btn active" onclick="toggleButtonUnderline(this, 'restaurants'); return true;">Restaurants Reserve</a>
        <a href="/Super-admin-main/adventours/tours_reservation.php" class="btn" onclick="toggleButtonUnderline(this, 'tours'); return false;">Tours</a>
    </div>

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


</style>

<div class="dashboard">
    
        <div class="tab-content" id="myTabContent">

                <div class="d-flex align-items-center justify-content-between "style= "margin-top:50px; margin-left:10px;">
                    <!-- search tab -->
                    <form action="" method="post" class="col-7 col-lg-5">
                        <input type="text" placeholder="Search.." class="form-control">
                    </form>
                    <!-- add button -->
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addCustomer">Add Reservation</button>
                </div>

                <!-- Modal -->
                <form class="modal fade" id="addCustomer" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg rounded-0">
                        <div class="modal-content rounded-0">
                            <div class="modal-header bg-dark text-white rounded-0">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Restaurant Reservation</h1>
                                <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php
                                function generate_reservation_number($length = 8) {
                                    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                    $reservation_number = '';
                                    for ($i = 0; $i < $length; $i++) {
                                        $reservation_number .= $characters[rand(0, strlen($characters) - 1)];
                                    }

                                    return $reservation_number;
                                }
                                $reservation_number = generate_reservation_number(16);
                                $rollNo = generate_reservation_number(8);
                                ?>

                                <div class="mb-1">
                                    <label for="" class="form-label my-0">Reservation No.</label>
                                    <input name="reservation_no" readonly class="form-control" type="text"
                                        value="<?= $reservation_number ?>">
                                    <input class="form-control" name="rollNo" type="hidden" value="<?= $rollNo ?>">
                                </div>

                                <div class="mb-1">
                                    <label for="reservee" class="form-label my-0">Reservee</label>
                                    <input name="reservee" id="reservee" class="form-control" type="text" required>
                                </div>

                                <div class="mb-1">
                                    <label for="contact_no_1" class="form-label my-0">Contact No. 1</label>
                                    <input name="contact_no_1" id="contact_no_1" class="form-control" type="number"
                                        required>
                                </div>

                                <div class="mb-1">
                                    <label for="contact_no_2" class="form-label my-0">Contact No. 2</label>
                                    <input name="contact_no_2" id="contact_no_2" class="form-control" type="number"
                                        required>
                                </div>

                                <div>
                                    <p class="text-primary fw-bold mt-3">Reservation details</p>
                                </div>

                                <div class="mb-1">
                                    <label for="address" class="form-label my-0">Address</label>
                                    <input name="address" id="address" class="form-control" type="text" required>
                                </div>
                                <div class="mb-1">
                                    <label for="restaurant_name" class="form-label my-0">Restaurant Name</label>
                                    <input name="restaurant_name" id="restaurant_name" class="form-control" type="text"
                                        required>
                                </div>

                                <div class="row mb-1">
                                    <div class="mb-1 col">
                                        <label for="schedule_date" class="form-label my-0">Schedule date</label>
                                        <input name="schedule_date" id="schedule_date" class="form-control" type="date"
                                            required>
                                    </div>
                                    <div class="mb-1 col">
                                        <label for="schedule_time_from" class="form-label my-0">Schedule time
                                            from:</label>
                                        <input name="schedule_time_from" id="schedule_time_from" class="form-control"
                                            type="time" required>
                                    </div>
                                    <div class="mb-1 col">
                                        <label for="schedule_time_to" class="form-label my-0">Schedule time to:</label>
                                        <input name="schedule_time_to" id="schedule_time_to" class="form-control"
                                            type="time" required>
                                    </div>
                                </div>

                                <div class="mb-1">
                                    <label for="note" class="form-label my-0">Note</label>
                                    <textarea name="note" id="note" class="form-control" required></textarea>
                                </div>

                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-dark px-5">Reserve</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>

                <!-- update modal -->
                <form class="modal fade" id="updateCustomer" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg rounded-0">
                        <div class="modal-content rounded-0">
                            <div class="modal-header bg-dark text-white rounded-0">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Restaurant Reservation</h1>
                                <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-1">
                                    <label for="" class="form-label my-0">Reservation No.</label>
                                    <input name="reservation_no" readonly class="form-control" type="text">
                                    <input class="form-control" name="rollNo" type="hidden">
                                </div>

                                <div class="mb-1">
                                    <label for="reservee" class="form-label my-0">Reservee</label>
                                    <input name="reservee" id="reservee" class="form-control" type="text" required>
                                </div>

                                <div class="mb-1">
                                    <label for="contact_no_1" class="form-label my-0">Contact No. 1</label>
                                    <input name="contact_no_1" id="contact_no_1" class="form-control" type="number"
                                        required>
                                </div>

                                <div class="mb-1">
                                    <label for="contact_no_2" class="form-label my-0">Contact No. 2</label>
                                    <input name="contact_no_2" id="contact_no_2" class="form-control" type="number"
                                        required>
                                </div>

                                <div>
                                    <p class="text-primary fw-bold mt-3">Reservation details</p>
                                </div>

                                <div class="mb-1">
                                    <label for="address" class="form-label my-0">Address</label>
                                    <input name="address" id="address" class="form-control" type="text" required>
                                </div>
                                <div class="mb-1">
                                    <label for="restaurant_name" class="form-label my-0">Restaurant Name</label>
                                    <input name="restaurant_name" id="restaurant_name" class="form-control" type="text"
                                        required>
                                </div>

                                <div class="row mb-1">
                                    <div class="mb-1 col">
                                        <label for="schedule_date" class="form-label my-0">Schedule date</label>
                                        <input name="schedule_date" id="schedule_date" class="form-control" type="date"
                                            required>
                                    </div>
                                    <div class="mb-1 col">
                                        <label for="schedule_time_from" class="form-label my-0">Schedule time
                                            from:</label>
                                        <input name="schedule_time_from" id="schedule_time_from" class="form-control"
                                            type="time" required>
                                    </div>
                                    <div class="mb-1 col">
                                        <label for="schedule_time_to" class="form-label my-0">Schedule time to:</label>
                                        <input name="schedule_time_to" id="schedule_time_to" class="form-control"
                                            type="time" required>
                                    </div>
                                </div>

                                <div class="mb-1">
                                    <label for="note" class="form-label my-0">Note</label>
                                    <textarea name="note" id="note" class="form-control" required></textarea>
                                </div>

                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-dark px-5">Update</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>



                <script>
                function showUpdateModal(data) {
                    const decodedData = JSON.parse(decodeURIComponent(data));
                    $('#updateCustomer').modal('show');

                    Object.keys(decodedData)
                        .forEach(key => {
                            if (key == 'note') {
                                $(`#updateCustomer textarea[name="${key}"]`).val(decodedData[key]);
                            } else {
                                $(`#updateCustomer input[name="${key}"]`).val(decodedData[key]);
                            }

                        })

                }

                // For inserting restaurant reservation
                $(() => {
                    $('#addCustomer').submit(function(e) {
                        e.preventDefault();
                        const seachParams = new URLSearchParams($(this).serialize());
                        const data = {};
                        for (const [k, v] of seachParams.entries()) {
                            data[k] = v;
                        }

                        // get rollNo
                        const {
                            rollNo
                        } = data;

                        // Insert data
                        insertData("reservation/", rollNo, data);

                    })


                    // display data to #reservation_table
                    // update table on every 1s (1000ms)
                    setInterval(() => {
                        readData('reservation/', undefined, (error, data) => {
                            if (error) {
                                Swal.fire({
                                    title: "Error!",
                                    text: error,
                                    icon: "error",
                                });
                            } else {
                                $('#reservation_table tbody').html(null);
                                const objectKeys = Object.keys(data);
                                objectKeys.forEach((key, i) => {
                                    const dataKey = data[key];

                                    const {
                                        reservee,
                                        restaurant_name,
                                        rollNo,
                                        schedule_date,
                                    } = dataKey;

                                    let tr = `<tr>
                                        <td>${i + 1}</td>
                                        <td>${reservee}</td>
                                        <td>${restaurant_name}</td>
                                        <td>${schedule_date}</td>
                                        <td>${schedule_date}</td>
                                        
                                        <td>
                                            <button onclick="showUpdateModal('${encodeURIComponent(JSON.stringify(dataKey))}')" class="btn btn-sm btn-success">Edit</button>
                                            <button onclick="deleteData('reservation/', '${rollNo}')" class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>`;
                                    $('#reservation_table tbody').append(tr);
                                })
                            }
                        });
                    }, 1000);



                    // update reservation
                    $('#updateCustomer').submit(function(e) {
                        e.preventDefault();
                        const seachParams = new URLSearchParams($(this).serialize());
                        const data = {};
                        for (const [k, v] of seachParams.entries()) {
                            data[k] = v;
                        }

                        // get rollNo
                        const {
                            rollNo
                        } = data;

                        // Update data
                        updateData("reservation/", rollNo, data);
                        $(this).modal('hide');

                    })
                })
                
                </script>

                <!-- table 2 -->
                <div class="table-responsive py-3" style="min-height: 300px;">
                    <table class="table table-white table-striped table-hover" id="reservation_table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer Name</th>
                                <th>Restaurant Name</th>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>Action</th>
                              

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="7">
                                    <div class="d-flex align-items-center">
                                        <strong>Loading...</strong>
                                        <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Hotels tab -->
            <div class="tab-pane fade p-5" id="hotels-tab-pane" role="tabpanel" aria-labelledby="hotels-tab"
                tabindex="0">

            </div>


            <!-- Restaurants tab -->
            <div class="tab-pane fade p-5" id="restaurants-tab-pane" role="tabpanel" aria-labelledby="restaurants-tab"
                tabindex="0">

            </div>
        </div>
    </div>

  <script>

    // Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyAZatkT9OkYY4v7usIE67SyjbZ5yW-T85Q",
    authDomain: "adventours-2faf2.firebaseapp.com",
    databaseURL: "https://adventours-2faf2-default-rtdb.firebaseio.com",
    projectId: "adventours-2faf2",
    storageBucket: "adventours-2faf2.appspot.com",
    messagingSenderId: "780770207709",
    appId: "1:780770207709:web:c7577c840b5e71ab25f834",
  };
  
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  const db = firebase.database();
        // Change title
        (() => {
            let state = !0;
            const changeTitle = () => {
                document.title = state ? 'Adventours' : 'Reservation';
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