  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule an Appointment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">SUGAR Daddy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home-page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="management.php">Insulin Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="Awareness.php">Awareness</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="Contactus.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="About.php">About</a>
                </li>
        </div>
    </div>
</nav>

<div class="container">
    <h1>Schedule an Appointment</h1>
    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="date">Appointment Date</label>
            <input type="date" id="date" name="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="time">Appointment Time</label>
            <input type="time" id="time" name="time" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="details">Additional Details</label>
            <textarea id="details" name="details" rows="4" class="form-control"></textarea>
        </div>

        <input type="submit" value="Schedule Appointment" class="btn btn-primary">
    </form>

    <h2 class="mt-5">Scheduled Appointments</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Time</th>
                <th>Details</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Database connection
        $conn = new mysqli('localhost', 'username', 'password', 'appointment_db');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check if POST data is set
            if (isset($_POST['name'], $_POST['email'], $_POST['date'], $_POST['time'], $_POST['details'])) {
                $name = htmlspecialchars(trim($_POST['name']));
                $email = htmlspecialchars(trim($_POST['email']));
                $date = htmlspecialchars(trim($_POST['date']));
                $time = htmlspecialchars(trim($_POST['time']));
                $details = htmlspecialchars(trim($_POST['details']));

                // Prepare and bind
                $stmt = $conn->prepare("INSERT INTO appointments (name, email, date, time, details) VALUES (?, ?, ?, ?, ?)");
                if ($stmt) {
                    $stmt->bind_param("sssss", $name, $email, $date, $time, $details);
                    if ($stmt->execute()) {
                        echo "<div class='alert alert-success'>Appointment scheduled successfully!</div>";
                    } else {
                        echo "Error executing statement: " . $stmt->error;
                    }
                    $stmt->close();
                } else {
                    echo "Error preparing statement: " . $conn->error;
                }
            } else {
                echo "<div class='alert alert-danger'>All fields are required.</div>";
            }
        }

        // Retrieve and display appointments
        $result = $conn->query("SELECT * FROM appointments");
        if ($result) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['date']}</td>
                            <td>{$row['time']}</td>
                            <td>{$row['details']}</td>
                            <td>{$row['created_at']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No appointments scheduled.</td></tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Error retrieving appointments: " . $conn->error . "</td></tr>";
        }

        // Close connection
        $conn->close();
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
