<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Insulin Management</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to an external stylesheet if needed -->
    <title>SUGAR Daddy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translucent Navbar Example</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: rgba(255, 255, 255, 0.8); /* Translucent white */
        }
    </style>
      <style>
          *{
              font-family: 'Poppins' , sans-serif;
          }
          .h-font{
              font-family: 'Merienda', cursive;
          }
          input: :-webkit-outer-spin-button,
          input: :-webkit-inner-spin-button {

              -webkit-appearance: none;
              margin: 0;
          
          }

          input[type=number] {
              -moz-appearance: textfield;
          }
          .custom-bg{
              background: color #2ec1ac;
          }

          .custom-bg:hover{
              background: color #279e8c;
          }
      </style>    



</head>

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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Register</a></li>
                        <div class="d-flex">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Register 
                </button>

                        <li><a class="dropdown-item" href="#">Patient Log-In</a></li>


                        <li><a class="dropdown-item" href="#">Doctor Log-In</a></li>


                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>

            <div class="d-flex">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Log-in 
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register 
                </button>
            </div>
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
            User Log-in

        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">login number</label>
        <input type="test" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Gentle reminder to always maintain acadmic honesty .Any kind of malpractice will not be tolerated under any circumstances.

        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div>
            <button type="submit" class="btl b">Log-In</button>
            <a href="javascript: void(0)">Forgot Password</a>

        </div>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal_lg">
    <div class="modal-content">
        <form action="">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
        </svg>
            User Registration

        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control" id="phone" required>
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
                <label class="form-check-label mr-3">
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
        <label for="exampleInputEmail1" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
      

        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>
        <div>
            <button type="submit" class="btl b">Register</button>
            <a href="javascript: void(0)">Confirm Password</a>

        </div>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insulin Awareness</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        header {
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            color: white;
        }
        .content {
            margin: 20px auto;
            max-width: 600px;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        img {
            max-width: 100%;
            height: auto;
        }
        .cta {
            text-align: center;
            margin-top: 20px;
        }
        .cta button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
        <style>
    <body> {
                font-family: Arial, sans-serif;
                margin: 20px;
                line-height: 1.6;
            }
            header {
                text-align: center;
                padding: 10px;
                background-color: #f4f4f4;
            }
            h1 {
                color: #2c3e50;
            }
            section {
                margin: 20px 0;
            }
            footer {
                text-align: center;
                margin-top: 20px;
                font-size: 0.9em;
                color: #666;
            }
    </style>
</head>
    </body>

<header>
    <h1>About Insulin Management</h1>
</header>

<section>
    <h2>What is Insulin Management?</h2>
    <p>Insulin management is the process of monitoring and regulating insulin levels in the body, especially for individuals with diabetes. It involves understanding how insulin works, how to administer it properly, and how to adjust dosages based on dietary intake, physical activity, and blood glucose levels.</p>
</section>

<section>
    <h2>The Importance of Insulin Management</h2>
    <p>Proper insulin management is crucial for maintaining blood glucose levels within a target range. This helps prevent complications associated with diabetes, such as cardiovascular disease, nerve damage, and kidney problems. Effective management can enhance overall quality of life and allow individuals to lead healthy, active lives.</p>
</section>

<section>
    <h2>Key Components of Insulin Management</h2>
    <ul>
        <li><strong>Monitoring Blood Glucose:</strong> Regularly checking blood sugar levels helps determine insulin needs.</li>
        <li><strong>Understanding Insulin Types:</strong> Familiarity with different types of insulin (rapid-acting, long-acting, etc.) is essential for effective management.</li>
        <li><strong>Dietary Considerations:</strong> Awareness of how food affects blood glucose can aid in dosage adjustments.</li>
        <li><strong>Physical Activity:</strong> Exercise impacts insulin sensitivity and glucose utilization, necessitating potential dose changes.</li>
        <li><strong>Education:</str>

