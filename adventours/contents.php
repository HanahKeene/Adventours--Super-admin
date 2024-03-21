

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/_dashboard.css">
    <!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php require_once './headers.php' ?>
</head>
<body>
    <?php 

$pageTitle = "CONTENT MANAGEMENT";
include 'navbar.php';

?>
    <div class="dashboard">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="hotels-tab" data-bs-toggle="tab" data-bs-target="#hotels-tab-pane"
                type="button" role="tab" aria-controls="hotels-tab-pane" aria-selected="true">Hotels</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="restaurants-tab" data-bs-toggle="tab" data-bs-target="#restaurants-tab-pane"
                type="button" role="tab" aria-controls="restaurants-tab-pane" aria-selected="false">Restaurants</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tours-tab" data-bs-toggle="tab" data-bs-target="#tours-tab-pane"
                type="button" role="tab" aria-controls="tours-tab-pane" aria-selected="false">Tours</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="event-tab" data-bs-toggle="tab" data-bs-target="#event-tab-pane"
                type="button" role="tab" aria-controls="event-tab-pane" aria-selected="false">Events</button>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="hotels-tab-pane" role="tabpanel" aria-labelledby="hotels-tab">
        <div class="d-flex align-items-center justify-content-between mt-5">
                    <!-- search tab -->
                    <form action="" method="post" class="col-7 col-lg-5">
                        <input type="text" placeholder="Search.." class="form-control">
                    </form>
                    <!-- add button -->
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addHotel">Add Hotel</button>
                </div>

<!-- table Hotel -->
<div class="table-responsive py-3" style="min-height: 300px;">
    <h1 class="mt-2 fs-5">Hotels</h1>
    <table class="table table-white table-striped table-hover">
        <thead>
            <tr>
                <th>Hotel ID</th>
                <th>Hotel Name</th>
                <th>Image</th>
                <th>Address</th>
                <th>Location</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Hotel A</td>
                <td><img src="hotel_image.jpg" alt="Hotel A" style="max-width: 100px;"></td>
                <td>123 Main St</td>
                <td>New York</td>
                <td><button class="btn btn-primary">Edit</button> <button class="btn btn-danger">Delete</button></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<!-- table Rooms -->
<div class="table-responsive py-3" style="min-height: 300px;">
    <h1 class="mt-2 fs-5">Rooms</h1>
    <table class="table table-white table-striped table-hover">
        <thead>
            <tr>
                <th>Hotel ID</th>
                <th>Hotel Name</th>
                <th>Room Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Type</th>
                <th>Pax</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Hotel A</td>
                <td>Room 101</td>
                <td><img src="room_image.jpg" alt="Room 101" style="max-width: 100px;"></td>
                <td>$100</td>
                <td>Standard</td>
                <td>2</td>
                <td><button class="btn btn-primary">Edit</button> <button class="btn btn-danger">Delete</button></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

        </div>
        <div class="tab-pane fade" id="restaurants-tab-pane" role="tabpanel" aria-labelledby="restaurants-tab">
        <div class="d-flex align-items-center justify-content-between mt-5">
                    <!-- search tab -->
                    <form action="" method="post" class="col-7 col-lg-5">
                        <input type="text" placeholder="Search.." class="form-control">
                    </form>
                    <!-- add button -->
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addRestaurant">Add Restaurant</button>
                </div>
                
<!-- table Restaurant -->
<div class="table-responsive py-3" style="min-height: 300px;">
    <h1 class="mt-2 fs-5">Restaurants</h1>
    <table class="table table-white table-striped table-hover">
        <thead>
            <tr>
                <th>Restaurant ID</th>
                <th>Restaurant Name</th>
                <th>Image</th>
                <th>Address</th>
                <th>Contact</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Restaurant A</td>
                <td><img src="room_image.jpg" alt="Room 101" style="max-width: 100px;"></td>
                <td>Quezon City</td>
                <td>639919396371</td>
                <td><button class="btn btn-primary">Edit</button> <button class="btn btn-danger">Delete</button></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

        </div>
        <div class="tab-pane fade" id="tours-tab-pane" role="tabpanel" aria-labelledby="tours-tab">
        <div class="d-flex align-items-center justify-content-between mt-5">
                    <!-- search tab -->
                    <form action="" method="post" class="col-7 col-lg-5">
                        <input type="text" placeholder="Search.." class="form-control">
                    </form>
                    <!-- add button -->
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addTouristDestination">Add Tourist Destination</button>
                
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addTour">Add Tour</button>
                </div>
<!-- table Tourist Destination-->
<div class="table-responsive py-3" style="min-height: 300px;">
    <h1 class="mt-2 fs-5">Tourist Destination</h1>
    <table class="table table-white table-striped table-hover">
        <thead>
            <tr>
                <th>Tourist ID</th>
                <th>Tourist Desination Name</th>
                <th>Image</th>
                <th>Time Open</th>
                <th>Date Open</th>
                <th>Inclusion</th>
                <th>Address</th>
                <th>Contact</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Tourist Spot A</td>
                <td><img src="spot_image.jpg" alt="Tourist Spot A" style="max-width: 100px;"></td>
                <td>9:00 AM - 5:00 PM</td>
                <td>Monday - Saturday</td>
                <td>Guided Tour, Entrance Fee</td>
                <td>123 Main St</td>
                <td>123-456-7890</td>
                <td><button class="btn btn-primary">Edit</button> <button class="btn btn-danger">Delete</button></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<!-- table Tour -->
<div class="table-responsive py-3" style="min-height: 300px;">
    <h1 class="mt-2 fs-5">Tour</h1>
    <table class="table table-white table-striped table-hover">
        <thead>
            <tr>
                <th>Tourist ID</th>
                <th>Tourist</th>
                <th>Tourist Spot Name</th>
                <th>Package Type</th>
                <th>Schedule Date From:</th>
                <th>Schedule Date To:</th>
                <th>Inclusion</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>Tourist Spot A</td>
                <td>Standard</td>
                <td>2024-02-25</td>
                <td>2024-02-27</td>
                <td>Guided Tour, Entrance Fee</td>
                <td><button class="btn btn-primary">Edit</button> <button class="btn btn-danger">Delete</button></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>


        </div>
        <div class="tab-pane fade" id="event-tab-pane" role="tabpanel" aria-labelledby="event-tab">
        <div class="d-flex align-items-center justify-content-between mt-5">
                    <!-- search tab -->
                    <form action="" method="post" class="col-7 col-lg-5">
                        <input type="text" placeholder="Search.." class="form-control">
                    </form>
                    <!-- add button -->
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addEvent">Add Event</button>
                </div>
                
<!-- table Event -->
<div class="table-responsive py-3" style="min-height: 300px;">
    <h1 class="mt-2 fs-5">Events</h1>
    <table class="table table-white table-striped table-hover">
        <thead>
            <tr>
                <th>Event ID</th>
                <th>Event Name</th>
                <th>City</th>
                <th>Event Venue</th>
                <th>Additional Information</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
        <tr>
        <td>2</td>
        <td>Event Name 2</td>
        <td>City 2</td>
        <td>Event Venue 2</td>
        <td>Additional Information 2</td>
        <td>
            <!-- Add action buttons here -->
        </td>
    </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
        </div>
    </div>
</div>
              <!-- Hotel Modal -->
<form class="modal fade" id="addHotel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg rounded-0">
        <div class="modal-content rounded-0">
            <div class="modal-header bg-dark text-white rounded-0">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Hotel</h1>
                <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <?php
                function generate_hotel_id($length = 8)
                {
                    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $hotel_id = '';
                    for ($i = 0; $i < $length; $i++) {
                        $hotel_id .= $characters[rand(0, strlen($characters) - 1)];
                    }

                    return $hotel_id;
                }
                $hotel_id = generate_hotel_id(16);
                $rollNo = generate_hotel_id(8);
                ?>
                   <div class="mb-1">
                    <label for="" class="form-label my-0">Hotel ID No.</label>
                    <input name="hotelNo" readonly class="form-control" type="text" value="<?= $hotel_id ?>">
                    <input class="form-control" name="rollNo" type="hidden" value="<?= $rollNo ?>">
                </div>

                <div class="row mb-3">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <div class="col">
                            <label for="image<?= $i ?>" class="form-label"> </label><!--- <?= $i ?>----->
                            <img id="preview<?= $i ?>" src="" alt="Preview Image" style="width: 100px; height: 100px; margin-top: 5px; display: none;">
                            <input type="file" class="form-control mt-2" id="image<?= $i ?>" accept="image/*" onchange="previewImage(event, <?= $i ?>)">
                          
                        </div>
                    <?php endfor; ?>
                </div>

             
                <div class="mb-1">
                    <label for="HotelName" class="form-label my-0">Hotel Name</label>
                    <input name="HotelName" id="HotelName" class="form-control" type="text" required>
                </div>

                <div class="mb-1">
                    <label for="contact_no_1" class="form-label my-0">Contact No. 1</label>
                    <input name="contact_no_1" id="contact_no_1" class="form-control" type="number" required>
                </div>

                <div class="mb-1">
                    <label for="address" class="form-label my-0">Address</label>
                    <input name="address" id="address" class="form-control" type="text" required>
                </div>

                <div class="row mb-1">
                    <div class="mb-1 col">
                        <label for="lattitude" class="form-label my-0">Set Lattitude</label>
                        <input name="lattitude" id="lattitude" class="form-control" type="number" placeholder="Lattitude" required>
                    </div>
                    <div class="mb-1 col">
                        <label for="longitude" class="form-label my-0"></label>
                        <input name="longitude" id="longitude" class="form-control" type="number" placeholder="Longitude" required>
                    </div>
                </div>

                <div class="mb-1">
                    <label for="note" class="form-label my-0">Hotel Description</label>
                    <textarea name="note" id="note" class="form-control" required></textarea>
                </div>

                <div class="text-center mt-3">
                    <button type="submit"  id="addHotelBtn" class="btn btn-dark px-5">Add Hotel</button>
                </div>

            </div>
        </div>
    </div>
</form>

<!-- Modal for adding rooms -->
<form class="modal fade" id="addRoomsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="addRoomsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg rounded-0">
        <div class="modal-content rounded-0">
            <div class="modal-header bg-dark text-white rounded-0">
                <h1 class="modal-title fs-5" id="addRoomsModalLabel">Add Rooms</h1>
                <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="mb-3 col">
                        <label for="hotelName" class="form-label">Hotel Name</label>
                        <input id="hotelName" class="form-control" type="text" readonly>
                    </div>
                    <div class="mb-3 col">
                        <label for="hotelNo" class="form-label">Hotel Number</label>
                        <input id="hotelNo" class="form-control" type="text" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <div class="col">
                            <label for="roomImage<?= $i ?>" class="form-label"></label><!---<?= $i ?>---->
                            <img id="previewRoomImage<?= $i ?>" src="" alt="Preview Room Image" style="max-width: 100px; max-height: 100px; margin-top: 5px; display: none;">
                            <input type="file" class="form-control mt-2" id="roomImage<?= $i ?>" accept="image/*" onchange="previewRoomImage(event, <?= $i ?>)">
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="roomName" class="form-label">Room Name</label>
                        <input type="text" class="form-control" id="roomName" required>
                    </div>
                    <div class="col">
                        <label for="roomPrice" class="form-label">Room Price</label>
                        <input type="number" class="form-control" id="roomPrice" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="paxCounter" class="form-label">Pax</label>
                        <input type="number" class="form-control" id="paxCounter" required>
                    </div>
                    <div class="col">
                        <label for="roomType" class="form-label">Room Type</label>
                        <input type="text" class="form-control" id="roomType" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="inclusionType" class="form-label">Inclusion</label>
                        <input type="text" class="form-control" id="inclusionType" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="roomDescription" class="form-label">Room Description</label>
                        <textarea class="form-control" id="roomDescription" rows="3" required></textarea>
                    </div>
                </div>
                <div class="text-center mt-3">
                       <button type="button" class="btn btn-dark px-5" id="addRoom">Add Room</button>
                </div>
                <!-- Add room fields here -->
            </div>
        </div>
    </div>
</form>

  <!-- Restaurant Modal -->
  <form class="modal fade" id="addRestaurant" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg rounded-0">
        <div class="modal-content rounded-0">
            <div class="modal-header bg-dark text-white rounded-0">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Restaurant</h1>
                <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <?php
                function generate_restaurant_id($length = 8)
                {
                    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $restaurant_id = '';
                    for ($i = 0; $i < $length; $i++) {
                        $restaurant_id .= $characters[rand(0, strlen($characters) - 1)];
                    }

                    return $restaurant_id;
                }
                $restaurant_id = generate_restaurant_id(16);
                $rollNo = generate_restaurant_id(8);
                ?>
                   <div class="mb-1">
                    <label for="" class="form-label my-0">Restaurant ID No.</label>
                    <input name="restaurantNo" readonly class="form-control" type="text" value="<?= $restaurant_id ?>">
                    <input class="form-control" name="rollNo" type="hidden" value="<?= $rollNo ?>">
                </div>

                <div class="row mb-3">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <div class="col">
                            <label for="resimage<?= $i ?>" class="form-label"> </label><!--- <?= $i ?>----->
                            <img id="previewres<?= $i ?>" src="" alt="Preview Image" style="width: 100px; height: 100px; margin-top: 5px; display: none;">
                            <input type="file" class="form-control mt-2" id="image<?= $i ?>" accept="image/*" onchange="previewResImage(event, <?= $i ?>)">
                          
                        </div>
                    <?php endfor; ?>
                </div>

             
                <div class="mb-1">
                    <label for="RestaurantName" class="form-label my-0">Restaurant Name</label>
                    <input name="RestaurantName" id="RestaurantName" class="form-control" type="text" required>
                </div>

                <div class="mb-1">
                    <label for="contact_no_1" class="form-label my-0">Contact No. 1</label>
                    <input name="contact_no_1" id="contact_no_1" class="form-control" type="number" required>
                </div>

                <div class="mb-1">
                    <label for="address" class="form-label my-0">Address</label>
                    <input name="address" id="address" class="form-control" type="text" required>
                </div>

                <div class="row mb-1">
                    <div class="mb-1 col">
                        <label for="lattitude" class="form-label my-0">Set Lattitude</label>
                        <input name="lattitude" id="lattitude" class="form-control" type="number" placeholder="Lattitude" required>
                    </div>
                    <div class="mb-1 col">
                        <label for="longitude" class="form-label my-0"></label>
                        <input name="longitude" id="longitude" class="form-control" type="number" placeholder="Longitude" required>
                    </div>
                </div>

                <div class="mb-1">
                    <label for="note" class="form-label my-0">Restaurant Description</label>
                    <textarea name="note" id="note" class="form-control" required></textarea>
                </div>

                <div class="text-center mt-3">
                    <button type="submit"  id="addRestaurantBtn" class="btn btn-dark px-5">Add Restaurant</button>
                </div>

            </div>
        </div>
    </div>
</form>
<!-- Tour Modal -->
<form class="modal fade" id="addTour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg rounded-0">
        <div class="modal-content rounded-0">
            <div class="modal-header bg-dark text-white rounded-0">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Tour</h1>
                <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <?php
                function generate_tour_id($length = 8)
                {
                    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $tour_id = '';
                    for ($i = 0; $i < $length; $i++) {
                        $tour_id .= $characters[rand(0, strlen($characters) - 1)];
                    }

                    return $tour_id;
                }
                $tour_id = generate_tour_id(16);
                $rollNo = generate_tour_id(8);
                ?>
                   <div class="mb-1">
                    <label for="" class="form-label my-0">Tour ID No.</label>
                    <input name="tourNo" readonly class="form-control" type="text" value="<?= $tour_id ?>">
                    <input class="form-control" name="rollNo" type="hidden" value="<?= $rollNo ?>">
                </div>
                <div class="mb-1">
                    <label for="" class="form-label my-0">Tourist</label>
                    <input name="tourist" class="form-control" type="text" id="tourist" required>
                </div>   
                <div class="mb-1">
                    <label for="TouristSpot" class="form-label my-0">Tourist Spot</label>
                    <input name="TouristSpotName" id="TouristSpotName" class="form-control" type="text" required>
                </div>
                <div class="mb-1">
                    <label for="PackageType" class="form-label my-0">Package Type</label>
                    <input name="PackageType" id="PackageType" class="form-control" type="text" required>
                </div>
                <div class="mb-1">
    <label for="Time" class="form-label my-0">Time</label>
    <div>
        <input type="radio" id="night" name="time" value="night">
        <label for="night">Night</label>
    </div>
    <div>
        <input type="radio" id="day" name="time" value="day">
        <label for="day">Day</label>
    </div>
</div>
                <div class="row mb-1">
                                    <div class="mb-1 col">
                                        <label for="schedule_date" class="form-label my-0">Price</label>
                                        <input name="schedule_date" id="schedule_date" class="form-control" type="number"
                                            required>
                                    </div>
                                    <div class="mb-1 col">
                                        <label for="schedule_time_from" class="form-label my-0">Start Date:</label>
                                        <input name="schedule_date_from" id="schedule_date_from" class="form-control"
                                            type="date" required>
                                    </div>
                                    <div class="mb-1 col">
                                        <label for="schedule_time_to" class="form-label my-0">End Date:</label>
                                        <input name="schedule_date_to" id="schedule_date_to" class="form-control"
                                            type="date" required>
                                    </div>
                                </div>

                <div class="mb-1">
                    <label for="note" class="form-label my-0">Inclusion</label>
                    <textarea name="note" id="note" class="form-control" required></textarea>
                </div>

                <div class="text-center mt-3">
                    <button type="submit"  id="addTourBtn" class="btn btn-dark px-5">Add Tour</button>
                </div>

            </div>
        </div>
    </div>
</form>
<!-- Tourist Destination Modal -->
<form class="modal fade" id="addTouristDestination" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg rounded-0">
        <div class="modal-content rounded-0">
            <div class="modal-header bg-dark text-white rounded-0">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Tourist Destination</h1>
                <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <?php
                function generate_tourS_id($length = 8)
                {
                    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $tourS_id = '';
                    for ($i = 0; $i < $length; $i++) {
                        $tourS_id .= $characters[rand(0, strlen($characters) - 1)];
                    }

                    return $tourS_id;
                }
                $tourS_id = generate_tourS_id(16);
                $rollNo = generate_tourS_id(8);
                ?>
                   <div class="mb-1">
                    <label for="" class="form-label my-0">Tourist Destination ID No.</label>
                    <input name="tourNo" readonly class="form-control" type="text" value="<?= $tourS_id ?>">
                    <input class="form-control" name="rollNo" type="hidden" value="<?= $rollNo ?>">
                </div>

                <div class="row mb-3">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <div class="col">
                            <label for="imageTour<?= $i ?>" class="form-label"> </label><!--- <?= $i ?>----->
                            <img id="previewTour<?= $i ?>" src="" alt="Preview Image" style="width: 100px; height: 100px; margin-top: 5px; display: none;">
                            <input type="file" class="form-control mt-2" id="image<?= $i ?>" accept="image/*" onchange="previewTourImage(event, <?= $i ?>)">
                          
                        </div>
                    <?php endfor; ?>
                </div>

             
                <div class="mb-1">
                    <label for="TouristSpot" class="form-label my-0">Tourist Spot Name</label>
                    <input name="TouristSpotName" id="TouristSpotName" class="form-control" type="text" required>
                </div>
                <div class="mb-1">
                    <label for="PackageType" class="form-label my-0">Package Type</label>
                    <input name="PackageType" id="PackageType" class="form-control" type="text" required>
                </div>
                <div class="row mb-1">
                                    <div class="mb-1 col">
                                        <label for="schedule_date" class="form-label my-0">Price</label>
                                        <input name="schedule_date" id="schedule_date" class="form-control" type="number"
                                            required>
                                    </div>
                                    <div class="mb-1 col">
                                        <label for="schedule_time_from" class="form-label my-0">Start Date:</label>
                                        <input name="schedule_date_from" id="schedule_date_from" class="form-control"
                                            type="date" required>
                                    </div>
                                    <div class="mb-1 col">
                                        <label for="schedule_time_to" class="form-label my-0">End Date:</label>
                                        <input name="schedule_date_to" id="schedule_date_to" class="form-control"
                                            type="date" required>
                                    </div>
                                </div>
                <div class="mb-1">
                    <label for="contact_no_1" class="form-label my-0">Contact No. 1</label>
                    <input name="contact_no_1" id="contact_no_1" class="form-control" type="number" required>
                </div>

                <div class="mb-1">
                    <label for="address" class="form-label my-0">Address</label>
                    <input name="address" id="address" class="form-control" type="text" required>
                </div>

                <div class="row mb-1">
                    <div class="mb-1 col">
                        <label for="lattitude" class="form-label my-0">Set Lattitude</label>
                        <input name="lattitude" id="lattitude" class="form-control" type="number" placeholder="Lattitude" required>
                    </div>
                    <div class="mb-1 col">
                        <label for="longitude" class="form-label my-0"></label>
                        <input name="longitude" id="longitude" class="form-control" type="number" placeholder="Longitude" required>
                    </div>
                </div>

                <div class="mb-1">
                    <label for="note" class="form-label my-0">Tourist Spot Inclusion</label>
                    <textarea name="note" id="note" class="form-control" required></textarea>
                </div>

                <div class="text-center mt-3">
                    <button type="submit"  id="addTouristDestinationBtn" class="btn btn-dark px-5">Add Tourist Destination</button>
                </div>

            </div>
        </div>
    </div>
</form>
<!-- Modal for adding event reservation -->
<form class="modal fade" id="addEvent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg rounded-0">
        <div class="modal-content rounded-0">
            <div class="modal-header bg-dark text-white rounded-0">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Event</h1>
                <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <?php
                function generate_event_number($length = 8) {
                    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $event_number = '';
                    for ($i = 0; $i < $length; $i++) {
                        $event_number .= $characters[rand(0, strlen($characters) - 1)];
                    }

                    return $event_number;
                }
                $event_number = generate_event_number(16);
                $rollNo = generate_event_number(8);
                ?>

                <div class="mb-1">
                    <label for="event_number" class="form-label my-0">Event Number</label>
                    <input name="event_number" readonly class="form-control" type="text"
                        value="<?= $event_number ?>">
                    <input class="form-control" name="rollNo" type="hidden" value="<?= $rollNo ?>">
                </div>
                
                <div class="mb-1">
                    <label for="event_name" class="form-label my-0">Event Name</label>
                    <input name="event_name" id="event_name" class="form-control" type="text" required>
                </div>

                <div class="mb-1">
                    <label for="city" class="form-label my-0">City</label>
                    <input name="city" id="city" class="form-control" type="text" required>
                </div>

                <div class="mb-1">
                    <label for="event_venue" class="form-label my-0">Event Venue</label>
                    <input name="event_venue" id="event_venue" class="form-control" type="text" required>
                </div>
                <div class="row mb-1">
                                    <div class="mb-1 col">
                                        <label for="schedule_time_from" class="form-label my-0">Start Date:</label>
                                        <input name="schedule_date_from" id="schedule_date_from" class="form-control"
                                            type="date" required>
                                    </div>
                                    <div class="mb-1 col">
                                        <label for="schedule_time_to" class="form-label my-0">End Date:</label>
                                        <input name="schedule_date_to" id="schedule_date_to" class="form-control"
                                            type="date" required>
                                    </div>
                                </div>
                <div class="mb-1">
                    <label for="additional_info" class="form-label my-0">Additional Information</label>
                    <textarea name="additional_info" id="additional_info" class="form-control" required></textarea>
                </div>

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-dark px-5">Add Event</button>
                </div>

            </div>
        </div>
    </div>
</form>

<script>
    document.getElementById('addHotelBtn').addEventListener('click', function () {
        // Logic to save the hotel (assuming this is already implemented)

        // Close the addHotel modal
        var addHotelModal = new bootstrap.Modal(document.getElementById('addHotel'));
        addHotelModal.hide();

        // Set hotel name and number in the addRoomsModal
        var hotelName = document.getElementById('HotelName').value;
        var hotelNo = document.getElementsByName('hotelNo')[0].value;
        document.getElementById('hotelName').value = hotelName;
        document.getElementById('hotelNo').value = hotelNo;

        // Show the addRoomsModal
        var addRoomsModal = new bootstrap.Modal(document.getElementById('addRoomsModal'));
        addRoomsModal.show();
    });
    
    function previewRoomImage(event, index) {
        var input = event.target;
        var previewId = 'previewRoomImage' + index;
        var preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }
</script>
<script>
  document.getElementById('addRoom').addEventListener('click', function () {
    // Ask the user if they want to add more rooms
    Swal.fire({
        title: 'Do you want to add more rooms?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            // Show the "Add Rooms" modal again
            var addRoomsModal = new bootstrap.Modal(document.getElementById('addRoomsModal'));
            addRoomsModal.show();
        }
    });
});

</script>
<script>
    function previewImage(event, index) {
        var input = event.target;
        var previewId = 'preview' + index;
        var preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }
    function previewResImage(event, index) {
        var input = event.target;
        var previewId = 'previewres' + index;
        var preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }
    function previewTourImage(event, index) {
        var input = event.target;
        var previewId = 'previewTour' + index;
        var preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }
</script>


<script>
    var triggerTabList = [].slice.call(document.querySelectorAll('#myTab button'))
    triggerTabList.forEach(function (triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', function (event) {
            event.preventDefault()
            tabTrigger.show()
        })
    })
</script>

    <script>
        // Change title
        (() => {
            let state = !0;
            const changeTitle = () => {
                document.title = state ? 'Adventours' : 'Content Management';
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