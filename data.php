<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .modal_lg {
            max-width: 800px;
        }
    </style>
</head>
<body>

<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light px-lg-3 py-lg-2 shadow-sm sticky-top">
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
                    <a class="nav-link me-2" href="Contactus.php">Contact-Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="About.php">About</a>
                </li>
                </li>
            </ul>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    </nav>

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
        </svg>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
      </div>
        </form>
      </div>
    </div>
  </div>
</div>





<!-- Button to open the modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">
  Open Registration Form
</button>

<!-- Registration Modal -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal_lg">
        <div class="modal-content">
            <form id="register-form">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">User Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input name="name" type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input name="phonenum" type="tel" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" class="form-control shadow-none" rows="1" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pincode</label>
                        <input name="pincode" type="number" class="form-control shadow-none" required>
                    </div>
                    <div class="form-group">
                        <label for="diabetesType">Diabetes Type</label>
                        <select class="form-control" id="diabetesType" required>
                            <option value="" disabled selected>Select Type</option>
                            <option value="type1">Type 1</option>
                            <option value="type2">Type 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sinceWhen">Since When (Year)</label>
                        <input type="text" class="form-control" id="sinceWhen" placeholder="e.g., 2020" required>
                    </div>
                    <div class="form-group">
                        <label for="doctors">Current/Past Doctors</label>
                        <textarea class="form-control" id="doctors" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medicalHistory">Medical History</label>
                        <textarea class="form-control" id="medicalHistory" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" id="age" required>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div>
                            <label class="form-check-label me-3">
                                <input type="radio" name="gender" value="male" required> Male
                            </label>
                            <label class="form-check-label">
                                <input type="radio" name="gender" value="female" required> Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="diet">Diet Preference</label>
                        <select class="form-control" id="diet" required>
                            <option value="" disabled selected>Select Preference</option>
                            <option value="veg">Vegetarian</option>
                            <option value="non-veg">Non-Vegetarian</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="pass" type="password" class="form-control" id="password" required>
                    </div>
                    <div>
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input name="cpass" type="password" class="form-control shadow-none" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Table to display user data -->
<div class="container mt-5">
    <h2>Registered Users</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Pincode</th>
                <th>Diabetes Type</th>
                <th>Since When</th>
                <th>Doctors</th>
                <th>Medical History</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Diet</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody id="userTableBody">
            <!-- User data will be appended here -->
        </tbody>
    </table>
</div>

<script>
    document.getElementById('register-form').addEventListener('submit', function(event) {
        event.preventDefault();

        // Get values from the form
        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;
        const address = document.querySelector('textarea[name="address"]').value;
        const pincode = document.querySelector('input[name="pincode"]').value;
        const diabetesType = document.getElementById('diabetesType').value;
        const sinceWhen = document.getElementById('sinceWhen').value;
        const doctors = document.getElementById('doctors').value;
        const medicalHistory = document.getElementById('medicalHistory').value;
        const age = document.getElementById('age').value;
        const gender = document.querySelector('input[name="gender"]:checked').value;
        const diet = document.getElementById('diet').value;
        const email = document.getElementById('email').value;

        // Create a new row
        const newRow = `<tr>
            <td>${name}</td>
            <td>${phone}</td>
            <td>${address}</td>
            <td>${pincode}</td>
            <td>${diabetesType}</td>
            <td>${sinceWhen}</td>
            <td>${doctors}</td>
            <td>${medicalHistory}</td>
            <td>${age}</td>
            <td>${gender}</td>
            <td>${diet}</td>
            <td>${email}</td>
        </tr>`;

        // Append the new row to the table
        document.getElementById('userTableBody').innerHTML += newRow;

        // Reset the form and close the modal
        this.reset();
        var modal = bootstrap.Modal.getInstance(document.getElementById('registerModal'));
        modal.hide();
    });
</script>

</body>
</html>



