<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>SUGAR Daddy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                
                </li>
                
            </ul>

            
        </div>
    </div>


    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    </nav>

   

    <title>Personalized Insulin Manager</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Personalized Insulin Manager</h1>
        <nav>
            <ul>
                <li><a href="#about">About Insulin</a></li>
                <li><a href="#log">Log Doses</a></li>
                <li><a href="#tips">Health Tips</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="about">
            <h2>About Insulin</h2>
            <p>
                Insulin is a hormone that helps regulate blood sugar levels. It's essential for people with diabetes to manage their insulin intake carefully. Proper management can help prevent complications and improve overall health.
            </p>
        </section>

        <section id="log">
            <h2>Log Insulin Doses</h2>
            <form id="insulinLogForm">
                <label for="date">Date:</label>
                <input type="date" id="date" required>
                
                <label for="dose">Insulin Dose (units):</label>
                <input type="number" id="dose" required>

                <label for="comments">Comments:</label>
                <textarea id="comments" placeholder="Optional"></textarea>

                <button type="submit">Log Dose</button>
            </form>
            <div id="logMessage"></div>
        </section>

        <section id="tips">
            <h2>Health Tips</h2>
            <ul>
                <li>Monitor your blood sugar levels regularly.</li>
                <li>Maintain a balanced diet and exercise regularly.</li>
                <li>Stay hydrated and get enough sleep.</li>
                <li>Consult your healthcare provider for personalized advice.</li>
            </ul>
        </section>
    </main>

    <footer>
        <section id="contact">
            <h2>Contact</h2>
            <p>If you have any questions or need support, please reach out to your healthcare provider.</p>
        </section>
        <p>&copy; 2024 Personalized Insulin Manager</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
