
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

$pageTitle = "NOTIFICATIONS";
include 'navbar.php';

?>

    <div class="dashboard">
<!-- Button to trigger the modal -->
<button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addNotification">Add Notification</button>

<!-- Modal -->
<div class="modal fade" id="addNotification" tabindex="-1" aria-labelledby="addNotificationLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNotificationLabel">Add Notification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" value="In App Notice" readonly>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Text</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light">Make a Schedule Notice</button>
                <button type="button" class="btn btn-dark">Publish</button>
            </div>
        </div>
    </div>
</div>
<!-- Table for Notifications -->
<div class="table-responsive py-3" style="min-height: 300px;">
    <h1 class="mt-2 fs-5">Notifications</h1>
    <table class="table table-white table-striped table-hover">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Text</th>
                <th>Schedule Date</th>
                <th>Schedule Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="notificationTableBody">
            <tr>
                <td>Sample Subject 1</td>
                <td>Sample Text 1</td>
                <td>2024-03-01</td>
                <td>09:00</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                    <button class="btn btn-dark btn-sm">Publish</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

    </div>
    <script>
        // Change title
        (() => {
            let state = !0;
            const changeTitle = () => {
                document.title = state ? 'Adventours' : 'Notifications';
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
<li class="<?= $pageTitle == 'NOTIFICATIONS' ? 'hovered': null ?>">
                <a href="./notification.php">
                    <span class="icon">
                        <ion-icon name="notifications-outline"></ion-icon>
                    </span>
                    <span class="title">Notification</span>
                </a>
            </li>