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
<body>

<header>
    <h1>Raise Awareness About Insulin</h1>
</header>

<div class="content">
    <h2>What is Insulin?</h2>
    <p>Insulin is a hormone produced by the pancreas that helps regulate blood sugar levels. It is essential for the body to use glucose for energy.</p>

    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_66lF6xUhMfAvP83_q-WrIeQhH4zspUZ9EA&s" alt="Insulin">

    <h2>Why is Insulin Important?</h2>
    <p>Understanding insulin is vital for managing diabetes. Without enough insulin, blood sugar levels can rise dangerously high, leading to serious health complications.</p>

    <h2>Get Involved</h2>
    <p>Help spread the word about the importance of insulin in diabetes management. Share this page and educate others!</p>

    <div class="cta">
        <button onclick="window.location.href='https://www.diabetes.org/'">Learn More</button>
    </div>
</div>


<header>
    <h1>Lifestyle and Diet Plan</h1>
</header>

<section>
    <h2>Diet Plan for Diabetic Patients</h2>
    <p>Maintaining a balanced diet is crucial for managing diabetes. Here are some recommended food options:</p>
</section>

<section>
    <h3>Vegetarian Foods</h3>
    <p>Here are some vegetarian foods that are beneficial for diabetic patients:</p>
    <ul>
        <li>Leafy Greens (Spinach, Kale)</li>
        <li>Whole Grains (Quinoa, Brown Rice)</li>
        <li>Legumes (Lentils, Chickpeas)</li>
        <li>Nuts and Seeds (Almonds, Chia Seeds)</li>
        <li>Non-Starchy Vegetables (Broccoli, Cauliflower)</li>
        <li>Fruits (Berries, Apples - in moderation)</li>
        <li>Low-Fat Dairy Products (Greek Yogurt, Cottage Cheese)</li>
    </ul>
</section>

<section>
    <h3>Non-Vegetarian Foods</h3>
    <p>Here are some non-vegetarian foods that are beneficial for diabetic patients:</p>
    <ul>
        <li>Lean Poultry (Chicken, Turkey)</li>
        <li>Fish (Salmon, Mackerel - high in Omega-3 fatty acids)</li>
        <li>Lean Cuts of Red Meat (Sirloin, Tenderloin - in moderation)</li>
        <li>Shellfish (Shrimp, Crab)</li>
        <li>Eggs (High in protein and healthy fats)</li>
    </ul>
</section>

<header>
    <h1>Health Issues related to Insulin</h1>
</header>

<section>
    <h2>Symptoms of lack of Insulin in body</h2>
    <p>- fatigue
- nasuea
- Looking pale (pallor)
- Shakiness
- Dizziness or lightheadedness
- Sweating
- Hunger or nausea
- An irregular or fast heartbeat
- Difficulty concentrating
- Feeling weak and having no energy (fatigue)Irritability or anxiety
- HeadacheTingling or numbness of the lips, tongue or cheek</p>
</section>

<section>
    <h3>Signs of overdose of insulin</h3>>
    <ul>
        <li>Confusion</li>
        <li>Extreme hunger</li>
        <li>Fatigue</li>
        <li>Irritability</li>
        <li>Sweating or clammy skin</li>
        <li>Trembling hands</li>
        <li>If your blood sugar levels continue to fall, you could have seizures or pass out</li>
    </ul>
</section>

<section>
    <h3>Signs of underdose of insulin</h3>
    <p>Here are some non-vegetarian foods that are beneficial for diabetic patients:</p>
    <ul>
        <li>Giving too little insulin will cause your blood glucose to rise above acceptable levels.</li>
        <li>This is called hyperglycaemia.</li>
        <li> A hyper is when your blood glucose levels are above 7mmol/L before a meal, or above 8,5mmol/L two hours after a meal</li>
        <li>You will not usually experience any symptoms but as they rise you may need to urinate more often especially at night, feel thirsty, have headaches, or feel lethargic and sleepy.</li>
    </ul>
</section>
</li>

<header>
    <h1>Risks of diabetes</h1>
</header>      


<section>
    <h3></h3>
    <ul>
        <li>Eye disease: Diabetes can damage the blood vessels in your eyes, which can lead to vision loss or blindness. You should get your eyes checked every 1–2 years. </li>
        <li>Foot problems: Diabetes can cause nerve damage and poor blood flow in your feet, which can lead to foot ulcers and amputation.</li>
        <li>Heart disease and stroke: Diabetes can damage the blood vessels and nerves that control your heart and blood vessels, which can increase your risk of heart attack and stroke.  </li>
        <li>Kidney disease: Diabetes can damage the blood vessels in your kidneys, which can lead to kidney failure. </li>
        <li>Nerve damage: Diabetes can damage the nerves and blood vessels that nourish them, which can lead to nerve problems.  </li>
        
        <li>Skin conditions: Diabetes can cause skin problems, including infections. </li>
        <li>Gum disease: Diabetes can increase your risk of gum disease because of high blood sugar levels in your saliva. </li>
        <li> Hearing impairment: Diabetes can make hearing problems more common. </li>
        <li>Dementia: Diabetes can increase your risk of Alzheimer's disease and other disorders that cause dementia. </li>
    </ul>
</section>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises for Diabetic Patients</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        h1 {
            color: #2c3e50;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #e2e2e2;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

</head>
<body>
<header>
    <h1>Exercises for Diabetic Patients</h1>
    </header>
    <p>Regular exercise can help manage blood sugar levels and improve overall health. Here are some recommended exercises:</p>

    <ul class="exercise-list">
        <li class="exercise-item">
            <h2>Walking</h2>
            <img src="data:image/jpeg;base64,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" alt="Walking" class="exercise-image">
            <p>Duration: 30 minutes</p>
            <p>Frequency: Most days of the week</p>
            <p>Benefits: Improves cardiovascular health and aids in blood sugar control.</p>
        </li>
        <li class="exercise-item">
            <h2>Swimming</h2>
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMWFhUWFxcYGBgYGBgaHRcXFxcYFhoXGBgaHSggGBolGxcXITEhJSkrLi4uGB8zODMtNygtLisBCgoKDg0OGxAQGy8mICUtLS0vLzAtLS0vLy0tLS0tLS0vMisyLS0vLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAADBAECBQAGB//EAEEQAAECBAQDBQYEBAUDBQAAAAECEQADITEEEkFRYXGBBSKRobEGEzLB0fAUQuHxFVJiciNTgqKyFpLSM0Rjk8L/xAAbAQACAwEBAQAAAAAAAAAAAAACAwABBAUGB//EADcRAAIBAgQDBAoBAwUBAAAAAAABAgMRBBIhMQVBURNhgaEGIjJxkbHB0eHwMxQjQhZTkuLxFf/aAAwDAQACEQMRAD8A8oMQLq9P0iqlpyqYg2pqeEaCJIy0ScyS+ZS0gEbEG8LY4LfvFiqpPdqdaijco7bPJRceQtKykC9NHa+3hHLlgG5pxgJYC59PSLAJIa1RU8q0O59Ig22t7ljKB/VzaLJA/mA6fWOSkA0PSjeBjgirBXjEBv3l1US+YXZgA9rtduMDElr0cA1TcGxAAdoKqXuxb70iuXwiWIpI6WsXzMBumng0WE0qLJEst/QBA1SgakDqIkch99IrKgs/Q0ez8YtBpxYBkj0jQldr4gXWQDZ8rDxTXxjCQRdSgnmT6CsUmKNWYPepr11jLVwVCrK8oRb70maKWLrU1ZSa9zse0wvtFMA+NCgCzlwefwwf/rOUCxSo2qBv/c0fP82484akoSaqc8APOukcyt6OYCo7uNvdp+DdDjWKjon8dT6ZI7XkzaMOoBH0gOJ9n8NN/IBxRT0pHzqdNU2WWMieLAmNTsvtUoUAJjW7pJuWHdUxBroWvHJq+jdbDpzwdZp9NfmvqvE30+MUqzyV4J+fzNnF+xGsqY96LH/6T9Iwcf7O4mXUyircpqByYv5R67D+0IAZSVBrkpIHPaGMN7RSVkh7NfjGWHF+MYX+aGZLqvqvyOnw7h9Z+o8r7n9GfM1Zg4KSPF/OKiWG2PKPr0/Cypg76UqB3AMZGK9ksMv4QU8i/kY6OH9LsNLStBxfdqvo/Ix1vR+sv45Jrv0+583WHFDUX+3iglvdWXm0evxvsRMDlBQvm6T8wYwcX2HPlB1y1AcnHVnDR3sNxTB4j+Kon3Xs/g7M5dXA4ml7cH77X81dCMxTBs56QupJIoekM+4S7EMqlKi9ix5iCzMOAzhnr5kb7g+Eb9GZb26mchZTqYYGIXoQPKGfdJ1B8Ysop4+ETKU6ifISM5e58oulS2urTbrzgiyPy/KIEvl0LeVYliZu4KmcAXBUQ2oSatruH12gSJyipgwFRW2rddHiWuA1Q1naoO3DRvkaHD/YEVZkvEscRMzMlixAZkmthYVP0i+GkzMwJUAxsokO9HZNgID7jUAxxwyjWvjEsyXjysUm4iY9VEs9Tq963PWJ9+ooZ+jlwLuDtSzwVOGLaxQyRv8AfhEyl5o9AYmjVtvhTpT7MTFm/t8THRLEuhz8cQSFMz17qX2v8ojMo2AA/mY1HEfSJXg2BOYtpVL9Q5LdIsZaiySoAgkAnMSkPZ7EXoBqYsX6rWhYIUACoDK9SCP+JYxScn+oF3ZtOekVmyjmylYU1jpU6bC/jA1hq39fCLBsjlS02cPuD84ElDak8bw5+BJIo7gKAsa1sfppC87MC2VQL2IILxAk+SKDNqQOjRZaWLKLOdXduULT5yhckt8w4doXC8wLkgvp1d/KBbHRp82OmYGoC25Jt98Y7DTEm6kpYakkGoDC4er9DCU5ClEZg3dAowtY0Z33McZINSVE90aEMA19LBoG7GOnG241NUMzBTcjTpFAk/zHwMDCdAacoaTh3BvYZebi/R/KCAdo8wa63UTzi8lSgGQpQ6UiTJILqUTfe+7xBmrNhTR4gN77EGfMUXV3vvhEFTmqGgZSXqW4C/lF5RWLW5P5xEW+oYzW+AK4lVvL6wbCY4BQzoBH8yXB4F3gAWvb75QSalbZiyfD0MVKKkrMqM3F3Vj23ZmOWUuhSVDZy48h6RryO0qd5JDDSvz+2j5vJxZCcyVBL2CiljxqIrIXPnLYz1BIqciiw2AY3jzdb0YoYio8jS8P1Hfo8ZnTp3qLbvPqUntJCie9qB3u71rDiZgLVFXbpwj5zhsSqWWdRGrnMeqlOTyhqT2ucwJIRuf5ugI+cczGeh1WnrCSaNWH9IKVTdWZ7DE9mSJhdUpB4sxpao23jExnsTKU/upikOGYspO+tfOA/wDUqQWKwo2uHsbeXgIKPa+SkUq1W+T14xho4LjOGdqTlb33XwenxNNXEcPqr+5b5P7mNi/ZDFIcoUlfIgP/AKTr1jJxWDmy6TUEc008bHpHtcN7U5inNKICgSCC4I6DnG3h8dLmChBfSOg+PcSwVliqSa6rTzV15GF8JwWJ1ozafx+dn5nyhAGmXz+hi+Yu1uIY/rH0rFdhYabVUpL7junbRox8X7EINZc1SeCmUOVGPrHSw/pXgqmlS8Perryu/Iw1uAYiPsWl42fnp5ni1JJrmfn9IrMAe/y8438X7G4hNsq/7Sx8FRjT+y5kv40LTzB9Y7mHx+GxH8VRPx1+G5y6uErUf5IteH1BTArQ08bcBzPjCyZD0zG+xhyVSznh+8EDa+TP99I1MRF2WguiXl3bf9oGSTRydnenEfrDE2Wp6UHN/QRyQPzEgxCarVijq+/3joc99L/mjomhLvoGXXVLNoANeA9YGE0YsbVGm+sSnEkFlffGl4MFpcd651peusVcWkxZILG3NgWG9mgMtBL95i1KX4UhmZiU/lKTuDR/rHIlqWR3kOqwKwD/ALreMVmDs10F0yyK1uKjQjjxi8tKkkGhDG9aWqNIlXWny0gbKeiSX2iyrtlDKTV2Dn7qYKrFIOUEAsGY5mZgBV+Gm53iktOhcc9+scG0B6BolgrtHCQkuTTlTytFUyBWjuGrpxESpSQePGscqaNvveJZEvItLlJH6xVRGj9I4JO1Hi2WLK94IKVufCsSpD1bxJhlGGUQSGYf1JoS9L8D4RSWRqTpVIBNxoTXxiF36FGGt4qqgcCnlBcWtCSMqswarpap0aFF4sqIDFq/fCKbCjFsIie23SIYrLqURWtdL68AYBnvfoP1i8ln+GjGpJagJrq27dIFuyuMjDUHilFdEpBY/EkUHB9rVJ/Xe7OliQEgsokJWdiFJChzDERhKUCwQkLewBUEBq2JBVqXV6CPQY8ZCMywtWUO1ksPhGjAMzcmETCVZRqqm9FZuz3e2vct+iu9LjsbBSpadV/4M9vdoypkwrlS8iT+V3Y+QHIR5yfjAFd4EpNwPUcdekXxXaB0fpGLjcWdj1jdUlFQyiMNRebM0a0yaxa4Fn1Gm8MS8an8yT0/eA4FaTLQTfKPKkMFKT+gjHC7RVbKptW2CIx0sfDMUl70V8oOnGs2Wbc3qkWrUiEjhwd4qJBD5Szs7Eh2s7GsBOnfez95I1YrZte5m5K7YxAoJovuC3TL6xoyPaHED8wU2hlqfoRHlZalgv8AEQ92NCG1teCYPEZVvk5sqYly5Luk+QaOfV4bhp3zUY/BfY208bVja1WXi2eyR7UzAWUgcSyqdCBDkj2mlKOU66M/qA/jHiRiCqqpihRILhJNi7KUNC3nCWIxRSwCszjvZgBVyGGVTEUBfi2lebU9HcDV2i4vuv8AU2R4tiof5KS7/wAH0KbKwk34paX1y92u3dhdPs/hHcZrgtmLNtUR4CRjSlykAHcFSX8Iew/bk5LMsUehLu+5LmEy4LjqSth8Q7dG3+Ri4lhqj/vUV4JHqZ/skkKKpS2/pUHBGgzU4xm9p9iKSo9w5d01YtUGm71guG9pqDOlVLMXfhpGrhfaeWSwVXZVIRHF8awr/uU86X7uvqhrocNr+xLK3+8/oePOAHCOj6IcfKNSlJO9D5xMX/qupzw7/wCX/Ur/AODD/d8vyfNZmHuyi2zlz9/OKhL5s1KEuBdQDgcH4D6gqFlKg4YchbTQ68IXmIJq7PvqBTap/WPYnmo6bsAmlqXsTR9ulIgYegy1O1z4couZT6jepH0iBLAqTFDEw8iakpylNh8Tl3AYAiri2j0vHSVqSXEwobz4U+cRKkgihHVhTxA/eLYnDZaODxH6RAOYXE0IAIUa1LNcil3s8LLlnUHp8oL+CNqgkniGGtq1pR7eIMQFJLaPTiOnCJcijroSGAbISd3qPAtHKSlvhKaM+a5bXhwgoVmT8Fh8XJ7ncnf5wOXKewu/lWrxC9UQiXRtOrc4tLSRw4htNN4MEgUcUoz/AGOscsBqFzqA5s/CkWBmYAqf9ogy31PpDQyZapc7uQ3QfOOkBDspZSA9QCp9mH1iXJfoKJlp/Qj5xp9m9lpUlU5ZaXLuNVEN3QdHcCu8LKUh27zblkk82+sP4sypWFlNVUwlRB2qKg6WZ6wM3skNpa3bV7GbjZ3vFFQQEhgAA1AKCwAgOVLEq7oAN3OtufGJ/Fd1gCwsNj+wEUlJM1QllJ7ygm+5vaI9Fvb6BQzSmtOYuMekd2WnKnUi55mPTdiYeXOKgpWTKASVOQX0DA1tU0jAldnhE0JUQaOPP6R7zFygMOhaACQgOAztR23L6emub+tp0bwp8/8ALnfx38TpVeG1qtPOleS/xfTnsYWJOGScplrSHIC86CDyoxjMmLkAFke8UXqpWUJSC1ct6esMJWuapMuWk3BBdjxYCwY1LwH2gwqpE3JnKwpL94lwdW4UjKsTUekpv4j6OHqKi59jFNfv7qLyEJYsA2wBYcs1YuzWLdIFh/gfifl4xYJdgNfu0dCg/wC2ji4pS7WWbf8ABfN92i4TxPRoGcGQ4U1A7BQDWuW8nikmWWGRAcOM1Nx0f71huYTk6MIUH94lL8IEicUVqSQaVYOCHdJD3jk4ws9zq1uDNW0TMXkYcJozP4RRcoHQQxKxSFAB8p4vrxgkzDK0ry+gq0UmiOMkZ5wwPDr6xX8KN/SHxI1JHQ28IGlYBNCoeHrF3RdpLmIqwzWjjiFC4J4/uCIfTPSSxQpPhFlLlEm45h4p2CV+djMmYxRPxK6p/WOh8GTv4pMTA2QV+4VK7OmwYd40poH3q1qwJSSbluH6w+lyT7tSFuDQEggMdCK0GkJzJ5IyqcMC1K7s5sIvQFNsqsPpYaD1iBLOxAguGxZSCkJBuRSxapFHsPWBkLUon4jct600iXLsxnCYZSiAkOTa+7PS2t40p/YkymRJWkgsoFIBNdHY14+EJdjZSvKtRSNPmLFnS4DC5rHrsL2QhCB7tRG4U/e5gOC4N2LsIz1q+R2ZqoYftE2tTyk/CTZZeaFBWhU4swuzebUPB1vfFZ1O7B+6DwbaPdYqZNqnKkoAu6qnUAFRJcKBpsRxjDws8FTJJBzZSFUdKW7uU0Iq1ecVTr5lcurhsrsZi5QTLzoUpPAlwUnbRram7QnJLjTiA467RsYslSe+4dRdjlKbkpYs4KQznVmuQc7DS1pJTRQsxKtS4OYBs1x4CGxmxEqSAlN6UNNtntpE/iFE91g2jP5VimJ94aArJAJU4oEpLc3cMXG14e7HwLrCilKkuxIIp3TRnv5VrBZgOzElTQCXvfx+WsCmYonYDkH5PBu28LkmOAUoU5QdS1D5+sbHs72BNnkTJhKZZBqfiW9KUtxPSBnVjCOaT0G0cLOrLJBXYDs72enKXLCkj3ZyqUc4cINWIFQSOGseh7W7AM9KcrApYJJYJybMC4I0ppxeN3DYJEtATLAADBzU0pc7NaLY6eUh2Ki7EDf9S8c2eMnL1oLY71LhtKHqVHo/2xg4H2PkJAMzMtWo+EDwL+caRwUqUnuS0JPAB6bm+vrC2I7aLUDUo7ueUZ+H7QmKKsyCHZqjfXaxjn1qteb9Z6HUoUsLS9hL4a+ZgdqI/wActxb1bxMaOCxRUAMzFOmm8L9opzqJFGLgtqNzCcqcXezba0NodDbURUfrXQyO0p6VTsRKCbhNRUhNwnhWvSMjH9sLnzUKUgpS1czUOrcIH21OmiYhCVlCGzU1LnXhSkK4WcsS/wDEUpSlLJdRZkhgL2s/WGRjzAqVJZbcjc/hc5MvMEO4zAA1ALMCm7tXYPeEpCHULEg2ILFqsWqNqnWG/wDqnuspTm2cPld7vWraCHsD2oheWZMSlaXYqZnvSh2GrgRrp4qUVlmvgcyvw6E250pavXUysfhShia5q3JADAkXcs7QtMWaEinIgNahaPTYnAJmBwcgSaEl+6XzDU6DTVuMYC8GQopIHMkVFa5nbTSN0JKS0ONOOR2kCeoAc3NE8HJ8AfCBqdykhyDRq2vvBVS3oHKt6kmoDWqNLtSLqwqiSlQsCCMhDce6B41grspZQAcqdVa1L1L8RpB/e5bO2xL+ESMFUMpKQQL1FhqOFa1ik7DqSSxCgNUnTdrt0gotAy1YdHaJtmV1Lt43iyJoVervUaUs0JpQ9ohExr330MWC10HlBOqg29acDtFxhkX96m3OEpc48Ov1hgplkVTlVu9+tvKLsUkluhhOClEf+og/6gPIx0IjFEUZ2/tPyMdFZWN9UkSU2cjpBSl0jvKUDobXjRw01TjvODoyWAY94g62rwL3qWV2WTVQUtKi2WWpKDdzlSQRpC3NIBRk/wB/WYqZCSSQlqaP4VPGNTsTBIWSpTFmoXLVbvMx284FKkygpveKSpLgBaQCli9r6mjvQ8I0MFJnUVnQUOctbUNBpUtQvvpC6jk4vKPouCms5pyeykJZQAq+ajO9WF21EMTMSkUZRFdtmvevnCyMLNKgVrSHcAAAkipu7a2aHf4fLSAdjc0cit9uNox9lJ6yZ0niYR9WBmYmYDdSqda0DEWAq9KwiZ6QVILkG2YuGflz0d408b2dnUVCZdqAAPdhoT+0Zc7s3KQySS1Sp2FRrWovcW1hiiorYTndSXtak/gZTBRUGL5QSK2uaHz0HCA/w0BaRmSK1AclmJFEqpWjnnW0JT5U9jMAfKpiEpIuzlAdywc310iMPh1oV31FiUpqQlJJIWe6S5DtWt+bU5tK1xqoRdna5qrwc9wXypsnMtBYOySqpUdA1XpR4JhMKoMPeAqNFCWCoAFzUuEpNX0vq8amDle8UhWVGVxkUU5j3SU0ILWetGzQ8rs4UCvhSSzFiSDq1GtGWeJlHS5vp4KnLVxuxXsbAlRK1h00CSoJzKYMf7U0tckF43kJBo4A526cYVSQlLCwtw+kAxGPQKEjxEYZSc5Ns68IRpQSTS6jsyaACAaC2lnb1PjCqsUFABwQfi46+VIx8XjgugU33wteGezQcimUGcqQBWrDUtrDsPmT1M+MdNxTT1Qz+CST3WzDWtjW1ratGacCoqLJUw5m3DR3tGzg891M5LvvzFuUOsXrStXodzTpGvs4y1OZ20o6bnlZmDXkf4SSHBFBWzHrWMntfBIbMCQpLFQoxzUcDTj1j26ujAlqcKO+3SMb+ElSVKWKKBcnZu8Wq9ATpZojpouNZvU8R2ljApKe6SUqYKBYh7vwjLxEsrDpT3AWalGetTVn2jaxWCAANbmnF9OihC+KQaZU5UoLKFNC772vFwptbg1cSmrIxEyFli2YJD5VOQCSQ3EsTDiDOUoABhLbukMCS70F/wAtdhGvIkhIIZwp362rpaFFSFJcoLbGpIO7Cj/dIdLDuxjhxBZrDns9iFKUuWFEEAkZdDrRT6UO/lGliux1rV30LBrlKUgWcuoitgNNekefwWKWiYFBszGqQkX5hq6xup9pJwoVsdSUAHxDMKmGUoSirCMRWpzlma+A5/AssrMbEju1dgHPEkc+mwv4gEoaWkOMuYqIIzCmgDDqb3pUE7t9eUfCGY0d6tqpwGBvGVMxzgpYpDks7058oeot7mSUtfVQ7ju00u6AgChICfhNLU4eZjMw01JVUAO5ejueJt0rA1rSfsbbQIcD9jTeDBUdDbndnAAKSbs3iw1L0r8oBNwqxQpd7EVfXrcQDAqmJLgtzJ4VIs8P4eTMcKBUGdiLA9NeLRabQDSuInBLuA3MQMyFj8ih/bUeEblHbvFT3ZJ+Y9IuQpKmbw+/lF5wopswPdK4f9sdHpkBag+W/wDUPrHQH9RH9Y3sJ/qEps8S1KWFFRVYDL3QAKAM9QelL62wvaLlJYpIDkit1ENStgRTW8ed9+sM1G6+tIbOMm0JQkuHDh2DtStLQicJvRD4OmtWenGIQp86gpILgFLuX1pXb1hcSpRUcikAhz3VEVcn4O84ZttaaR5z381WrcLQL3C1B2KuNx+8VGjPqHKrTa1iehOJm5gTNTQJ7xRlGgIFC5FKcYNO7ZmpSAZcwiwUzPcuBQ73EeXTh5hsCbCmwtFpfZ8wmiC/AM3WD7KXNi+0pcl5m1N7ZUCT7oFyzlJNhuCY7D9tKS4UTucvdA1BCe8Goa2hCX2HOID0SKh10B4VpA5+GykvMc0dlEuzkVFKEmDjDloLm4b6+R6E9uGpWmboC7HKCNCUbaHeIndoypq2mIWpTEOfiAZnKRs9KCMCWhRPdznlm5fKCCWsVZYO9YjpXBVVJW1selT2jKAoZjJAobBLEBgFBrC3GKq7dag3f4Q/gbDlxjzK5izr92ipmq1I8xCnh5raw7+opy3uem/iiCUsEpLUTlFWcuf5iz1p1vAF4yWUgLJobkmx1LbRgpnEfu/HUQaXiaAM99AOb6W4Qp05reI6NSn/AIy+Z6CVjJI7ycwzAixJZ6aG7aGNDs3tWUGAIAa1qknuj79Y8UJ7KenLvUD1ArSHpQCySlSE1ssvyejFuIbhAtKO6GJzlop+aZ7n+IS9Ha9gdNSLG0ExGNSUgBCSpQo+mtem0eRweBnJJEv/ABAGAYg0dwHJNNG8o5HaypaznQUhrAMHfR3rQ84kXF7FTVWN8x7KT2lLcaNfpf16xg9udvj/ABAHcgguW7rnQVA+trwKTjJKiTL7y1NnSaEUIsWF/vYuLmSJLCYoEkPlAGtuIBY1doLJZgqrJruFsJkUhaiksoZas7khqaF6xkzMD7tykkgVsaBwkEkO9+EBxPbqahKSlNAKuzVJA6veLqm4hTElQS2uUEgh2UQHULXgs2XVi3B1NECxc1gwSWAqoj4jqK0GnnGVMWQtypnD90eW33wh+fLURlCVGxu4Js7E7NptGRLBB+GxOgbXQAa7wcambYW8N2abasMZbEspRejZSNXPjHKVpk8DTz9IA0wgjMzlyQGJ1vBAksxUSIekxLSLjMftvlF1SzECLpSYYoi2yZOHGoJ5n5NB0oa1IGHifeQaSFSbYzLmEXWfAQWTia/H/tfytC6J4/lQeb/IwT3YUR8KeTn1MU0iLTmaCMcGYTabZH86RZKAQwWCGf4CB5kCM5WGFe+aXoA3nFTJIsSfD0BgMq5Ma6kua+ZpISlq1PAJA/5REZ4W2i/H9IiCysXmj0QxNlg5ggB6Ek8AXAsDWvhSIkYRXxLKWYXCiQBQCmlPOGjhiPzJfWrRwDBiAeuuhF6+EA4qwMakk9UJoU9PhBBGWp0Y+XoIZQpIDElr1B+sEl4dgVfMW8QT0hX8fLJYunRwxfj3qwto0wlproy07EITZaTyH6wWVj2SwCVA61pyUk0MZOJmIzFKUpI3rXwLCCYVd0shL3qz9WcxS7y+112NSVkUe8E81ZlN4kwxMyI+D3Z4ulPoHjC/iQT+Qt0YeJEPYftpCqe6ST/ab7uHEVm11Dyu14nTsTNP5k10Ff8AkDCqxN1U3KkPrxGZywHAMB4M8IzZar5T1P0eHRaMtRyT3BnBrOsCXgyLmDJlK0Cf95+UEyNcpfkPV4JyBTfIS91Ey5blnbiaQ5KUlJchKhtmSPSsa8kJAphMzi7mgNGqICc7bL5fcfRp53q7eD+iMDDSgpYBUA+pb5mHsNgAfzJ5HrxeNEyQP/blJ3ypIHV4phFIBAMu+tDYncWtCXVb2+hplhYwtd3+KIwhmSSvIshw5Zqn7JEaCO0kZmmIuB8KQBve8KrqpQ92KUDVOheCmW5BYXFyfOAlCM/aRUKlSnpB6dN0TmRMJ9zJYgVoRehqKi9ecYOLl5zmKiru0zKJIA0qSW1vrG7lVUJAchi5WAzNTKK6UjNxbpQFJQkmoNdGbYesXTjGL0BrVJzir/Y87jSAkPcqVysLdTDWHx8yhcGjWeL46USlJy/zUpSz+kZ8pLE0ryhtlfVXAhUaXquw/wDjZpASC2WxAY1/qFWhb3StiYL7zcOddPOGJM0GgBGv2YZDKtEKnVqSV3rYS9yraLJknaNFID1U3QmImSUaTAehEMFqbaEwiLAwT3I3iTJEFYHMigY3MSJadzFwgbRYFtIgLl0Kpw6NlGCiUkWQepi3vyzRT3sQFuQSuifODqxS/wAxfmQfWFPeR2YcIqxV2NDFnc+UTCmflHRWRB9rMNh5IUq5CtipieVQG4Roe4AHdLbu7+DRWbKlAFk3FnUz8w4HNoCmcpspzKD0U7kUYiz71peEu72GqMVoyq0ZfydciiL6UhCcEaoVzyKEM4uSsB0qmZRuCG0o4aFU5v8ANpyBbyEWrsCUUtgORD0c8MprDEmUH7oalQtNPMfMRypSiQfenhp6QM5g7TQb3+pirdUX7mDnSFCwCuXp9vCgnEOA6QTUCz8Rbq0aMvFpYOuutCIpiVS1EVBDVJcHo3zgHDU0KelxH8VMHwqHgPlDMrtZIDMc2uYJPzDeEW/Cyz+/1EWHZctX52O9D8hFOMlqmXGpFuzQRPayFMMwAOgSR6Jiyzhye8Lm7H6Ax38CWPgmK6N/5RZPZk4VUuYeWR/UxSm3v9BjoLv8xo9koIdEsM1CafOnhBUTZsugUQOCifIktApmOUgBOVR4rZ/9rCEZuImH8ng59DBRi3ukU0o+zJ3PRy8VMV3SzGlX16NCiZynYgM1r2NHjOw2MVlLh2uC9+Zepbyi8ufMWMyUUswY73r8oigldWSJOdSVnmb8x2XiVZn90oksWA3tEzcchPfVJVrQUNb8tYXGOmgupLEMzpOgYXjP7Q7UmNly5bHfr5xJIqm97/IjEdoYdT/4KgT/AFtCM6ZLI7qVg8VAjwywqpUdmiiyFTDZy20HwuGzAnMRuw+bwmqYOMGkYhSbW2i1a+pclK2hoKwOZg5PIXjXwWEXLFJOajOrYcKRlomFg4bhBJa0vXN0MOcFujNGpJaP6fY0zMVrKl+Q+cTm/wDileZ9DCBmS95nlEZ5W8zyiWL/AHkOrnn/AC5Y5A/WBicrYeUIzJiPy5upEU96INJC5ZjRM3+lP3ygZHIQmmZwgoPCCsKafMKvmOkCV1ggWdhEhZ4RYOwsrrFDyh9KoOlA1SD/AKkxTdgozMl+EdGv7tH+WP8A7P1joHN+6DNOvz+wVcxY7oQbM+UC25JhVeKUB8JY3o48jUxuSMLNDlUlXMOehFVJMAnFIL+7ZRo4NX2cBx4xlpV4VPZOljuHYjBu1Zd11qvivlv3GbKxM0oISKWY08A8VThVM5ZzUgAuBxEacgoFwobDMTzuYjvZnBA1TSrWol4bm7jA45lqzKQkGoIiVy0i4emgt4x05ZzM3e2FH84uuXVm8YZuZL5RFRqwQvwH0iAtX8q/ECHysWBPiLwMyEnU8iIrxDU10FQkvXN/3I/8oYls1ZhT98CYIjAp/mB4VHqICpBSWUjzMWteYeZFlT0puQvnmB8X+UXTlWklIWlWjLcGBKnosZfmYUxE07ZhxqRAuHQ0wq8mDmKU7EnqYlMmocgdYVM3SIzGLuTKa0mWMuULBLsNGelN+cDRhUEl5uXidegjNg0+UQbk8d+W8Baz3D3Ww3MwiACRPQ/HN82jKxM4g1UF8QX8HgiwCGJbiPprGfNJBbV9oCaad7jqWVxtbU0cNPksc6FKOhBZukLzhsOX28XM2YUtlNBuXa75XtFJHf25ZgD5kQnMluOySekVcZxEiWEO00LargZH4G7M0JJDtd9IfnIQEMFKfRLpUH/00HjCYV40aCQNVa7GlWODxfPFSqNpzSwMS4gBVEZjEJlGc0VKoCCYsAYsmUvnMSFmK+7VsYjIYhVkHBMECoVeO95EBcLjfvYJKL6pHMgetIzxMjjM6RCKmbIw8zTIeqI6MbPEwNn+oPLHo/j+D6v75CU5lqGlidagCjqJGmt2SKxhY/tqRNoJBU1cz5WG7h2HF2MefxmMmT1AAEs+35mfusArSpc0hlWHXmCCM70DVJNLVfUPWupADR5qqqtKW1j63hYYHGUryaknyBTQguUq6KIfxsYlU05Mjs+1C3zEbMnsKShOaYc1jdkgGgsxLmjhn0Sq8J4s4eqUy1Bug6Ob8wDwjZR4hJWVVfc87xH0So1W58Pk0+j9nwe68bmMrAk/CtwLBXoPsQyy0JBWL31ZuEDSDUpJpcEN9YEudRjmH9qqPxFo6kKsaizQdzw+LwWIwtTssTBp/vg/AYUWsCeX6xErEv8AkURyH0gOHmpUCFEjgzP1BZokhSKpAO3e9IZfvMfZX5FpmJymqVp5h/k8FXKUoM3GxHypCUvFTFfkHj+vyhqT2gspqKjdyRwe8VmZfZpd3mLTsMtPxII6RQAaxoysQoqeoNmOvJr+vCKzMJMIzZC1X/bSLU+obi+RmT8PLI2MZ82SUxqzkAU15NAm6wVrhwm4mVnMXVMJZ6taGsRINwOkKKcXEA0aYyTWhGQQriksoUtvYw1WKzKCtuMDJXVhkJNMOjNM/wAQFOb4nJYuk6OWJG14XmyRKWlSkAuMxQqxfUHXnVopKmh+7pXh+8F7QZY94Cc35hUh9xsIDIpRt0HRm4yuKqmOvujKDZPDhpB0SsxZJ/RoTqRbwPm0O9l4gNS+vHi8BCFpWvoHXl6uZLXyNBJOsTm4RzhUUKDGs5ZY8ooUnaIZUc6ogR2VUFlYOYoOA4gKs0UZW8QJd4UpULmOzQGu8SDEJlCuIgqEQlQi9IhQP3o2iPecIuW2ipVFlqxz8IiIzmOii7DcnEHzpGvgO2piCMynTetWF46OgJQUlZlU606M81N2NNePGIGZJIyuWJNwkkklnBypAzB2DpAF4y1z0rLaFgKNmDd1wKNQsmwuXMdHR53H0o05+qfWfRvE1MThc1Tdfn7G32N2SSgKUQJZTmAZ3SLltB5/0iHMd7PYcskKVLWoOKOCN2AZuFI6OgaU3TtKO4GNowxjdOsrrXyPL9qdkrkKAOUpNAoG/TT7qYBNYAFPziI6O7Qm6kE5HzTiOGhhcRKnT2VtxZS1BlDKoHmPRoiX2mygFSx0MdHQ1trZmFQjJ2aG5Pa4Qp8pA1BCVg9CzQ8vtULHdB/toKalwKeJjo6Btd3YaeWNlzGMPPb4qkpJTm7xA4loUxWIUKlKFDYpTboxjo6KSVw5TlquhlzcS/5QOX6xScoKsG84mOjRYz94pkNmhfELy3FOkRHRUlZD6WsrMFKKSaBj4Q0pCgj4mSTZzVuFtY6OioJWuMqaSSM9cxGo8nhrDLBDpYjk0dHQu/rDakEoXGEbgwYTHpYx0dDDG1qQp4p7wx0dBEjqTniMjx0dEI9CDKiCkREdELTbILRwXEx0QKxdMyJeOjogLR2WOjo6IDc//9k=" alt="Swimming" class="exercise-image">
            <p>Duration: 30 minutes</p>
            <p>Frequency: 3-5 times a week</p>
            <p>Benefits: Low-impact exercise that strengthens muscles and enhances flexibility.</p>
        </li>
        <li class="exercise-item">
            <h2>Biking</h2>
            <img src="data:image/jpeg;base64,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" alt="Biking" class="exercise-image">
            <p>Duration: 30 minutes</p>
            <p>Frequency: 3-4 times a week</p>
            <p>Benefits: Increases stamina and helps with weight management.</p>
        </li>
        <li class="exercise-item">
            <h2>Strength Training</h2>
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQTERUTExMWFhUXGBgZGBgXGBgXFhgaGBgXFxoaGBgaHSggGh0mHRcXIjEhJSktLi8uGB8zODMtNygtLisBCgoKDg0OGhAQGy0mICYtLS0tLS0tLS0tLS8tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALMBGQMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAFBgMEAAIHAQj/xABJEAABAwIEAgcFBAcFBwQDAAABAgMRAAQFEiExQVEGEyJhcYGRMkKhscEUUtHwBxUjYnKC4SQzkqLxFiU1U1SywkNz0uIXNGP/xAAaAQADAQEBAQAAAAAAAAAAAAAAAQIDBAUG/8QAKhEAAgICAQMDAwUBAQAAAAAAAAECEQMSIQQxQSJRYRMUMgVxgZGx4UL/2gAMAwEAAhEDEQA/ACCrV6NW0keX40ObOq0NpyuJMECIEieyOcUfx69LacjYl1WiR9T3VUw3Ceq1PafXud8s7+dYt+EaoEWtqttJCWlGd1GSdd6kTiOUQWo/PhTWxZ5R38TXrluOVVQrEfFroPISkJiFoVz9lQMVcTiqJ9lVEukjADaIES60NORWJq8y3lWSAB5CjgAGMYa5K9Kq4li46shn2zoCdAmePlTNiuJ9U2pa4IGgGVJKidABpqSar4apwtS+hoqOsdWmEg7JniQONKkFsAYa4wy3lC5O6id1KO5NAX5UrmSfrXQiy2rdhn/AKWOl/VpSAwhKXREZEmPPWJprgGLoaSCpWWVbcePMim/CrhtbYKYTGhTtFLOGM5rdbinVdYkglI7Ox796PW/RUEguOLUMugEAydTrFJ8ggqEAjhBpdtkfZLnqz/cvGUHglXFPnRI9FWuDjyfMfhUb3Q9Ko/buQNe0AYPdSoYW6qvAjWgDOGOLK0NXi87ZgpUkpPdx2768Rht+Do6D5j8KVBZrfM/7xR/7J+dW8StEqZUSBIE+BHGha7W7FyklSOuyGJIjLIn40SXYYgtByhhwHQ5FCRPwFPUVgjo5cZv2ShlUBKf3k8xRS5cSnSZVyGpq/h3RJZbSp45i3IShnLn8CtRAqW3sbhC1Fu0U2kgCMwWdJ1JkwTPCjWw2F1/DetPbbSkfvCVem9O/RBnDWmyt9SUqR/zDHmOEeFC3ErBhTRB5QZ+VDsQtFLaWjq1AqBAJBgfCnTQWhs6QfpWt7f8AZ2jJcJGiiChvxAjMr4eNI2OdOHrkDrXVJCtkpOVA15DeO+aicwlK20oXooAQRuCKpJscySh9IOUwFfeHPTY1L27sFRlhjCg71bkHPoSNzpofOjeFdIEhCW1IKikRqPkaT32fYWkGEKGU/eTMfCrF+khBKZkHhvQlzwN9uR1uek4SMjIJc+6dUpniTyqxg4bQesUS48v2nB8gOA7q5cziLrclIUCd9KtN4o+sQCtP8OlVySPPSjpG2hxnMoKyrBVwUAFoP0oZ0s6ZsPICG0FUHUkRpBG/Hek1+37aC4pS8yhmk9qJ76YsTLLTILVstCgR2lwtJ30Jmq2YqLrxuHnQGlhDSoKSASR67Gi6sMRax1wW4lQ7alKC0njGQetVbTpezKVdUWXJAUIltQPyope4/brWhIMqSrMqEmcsEbRrvS4C2WnsQbXbOIZWmcqsvVkJIkaAppA6L2QNupaerWsqUkoWoggAxpzkU04jb4e9J0SuCZTmQvQSTHGl/DcOSi3BC23BmJUkmCkngFbbQaG12Y1fcEYsAl9iEqajSHTmQnf2f3aHdYeYpmuHm23WFFJPZBCVdsKDm+p8NKK/7OM/cHpU7pFaNjqzhLlutanu08pRKdoCSezttAolbWuUSdVHc1M22pSi4sytXw7hU1WlRLZDkrVaKnitFJpiAXSRvsN/+81/3ipzAUonQDc1H0odShDZUQkdc3qdvaoe+sXbxabUCymC6oH2+IbB5cT3acaljIrRs3LofUP2SJ6lJ48C4fp3a8aKAZjHAVbW37iRA7uA5VKhmBFFAVFIgVz64cUXCCk7ntTXTFopfxTo91hK2yAeIOxP0poBJaQOr1ny8ZroGH3CHWkrQZSRoa57b4si2cyPoUFIJBEfEcxTX0At1C2WpQIS44taAdCEk8qHyAwBuRWIFeu3CGxK1ADvqG0S/cmbZk5f+Yvso8id/KpGCMfQllxFyn25CVJHvpJ104kb1s9jAmGkFajtpTUei1uyA9f3AJ4DNkR4J95XlHhShb3lunEurtnMzS2+P3wfhx9KXNhwVk2y3bpCXtFFJUIHugiU/EU4IRCQkaJHugQPhQu5a/t7R/8A5OfNFHUIq0hA4sZTPun4VSxe1W2RcMySn20gnto46cxuKYeqnQ1oynKcp8vwp0IoWjgdQlxCpChIM1IwpYC+2rSePdVVbP2R7MP/ANd1Xa5NLPvdyVHfkfE0Tdb/AGbsfdPyoAHM2nWNpUrtEpEmBQPGrpq1hKkZ1qJCQlIVEAGVSQOIptw7S1QrSQ2DqYBOXnXNbvEw/mceSqR7oVJSrbYcBJ5VMnRpjjsTDEVLGbPoDt/QUCuXTnlKuM93pyqy5fJKciERwk70PuLcpKiVQkDfmTwT4ac6xs6HHgbUXNqWs/2UnTUpdUNQNdDtVD9a2ZbCxb3I7krQqPU1v0ZbmxWo6JK1RPckA/GapYclAYSAFFYBkJSTGp3NXbOalYPxbErR0NFPXiHBnzJbMJ4xlOp7quX15ZvN9WxcuZyoQgsr11jwq9aYEJbfytolUnN2sySIAyjSTNb21padc8G0LccQQSj2B7WmQjUgHjRuGpdDrEhIvGirbKptSTPKCN6pYs31R61IQXIgKEpGvOYqviuJXCXHDaqbRmMk5AVzABhR4acqSMWeuFKl9S1HmSSPKmnYmqHKwxpalxcPN5CFJJAGYSIBnuqEWLHVdUHwuV51EEakCABSSyEnjrRVJbS22QntHNm+lDXIJ8UNq4DaAgNFTYhtapJSPDjFB/slz/1CfU15Y3CShRGmUA6CeMbVV/Wh5p9KSQ2/k68hLn/Wz/KmtSLn3bxsjvbH0VRT9UI76z9TI7605FwC/wC2cLlg+LZ/+VRXF1epE9ZbqPAAKk/5qN/qZHM1Qa6NIaCsqlHMVEzqddfSlyHAr3ibu/tkZgzkKwowogkJOo18KpWCH7NxfVI0VPZJlM8NRTT0TwofZG+197/uNEV4R+9SafcaoC2mK3mWfszZnj1kf+NSqxm7G9oPJwfhRP8AVZHvCtVYcedPkXAKV0gfG9kvyUk1r/tK4lKlKtHQACT7PDzouLBXOh6cEdOfrHStKiYSNAEnh30rY6Qpv4TcYglFypaUhUlCIEJE6SeNX7DpO641BQUlCihXVpKjKdJHKtf1ddsOIt2XRlhRbkeyBuDz3o9g2BuMN5c0qUoqWealamlYJFbCsdtkLCltOLIOudtRn4U0P9PUKEJlsfwqJ+I0oZ1Kxwqt1dwXCMqQ3AgxKieNFg4gHpTdi+WWGkB1xKcynFkgonlOpNe4TZNMoNs6lLL2ULSsGcxGygTxB4VBjNrc2jy7tpAWlaQlYO4PAgCrVk1fPQ640y2pKSlJW2VqIPgoRTElyXMPx9px9rMtIWlK0qkwJBTt3GJpqbu2/vp9RXOsUaxRJ7DTap95tpAP+dUil13FL63czPpck/eToY5EaelLZ+xekfLOu4vjrdu3nIW5JiGhnOxMnWEp09o6CRVXBulNvdtlQPVlKohZTOwMgpJHH4Vz9rH7hxBWi2MAGTJE9yQr2vKaBYRfO2qT1jSwlRmSCANAN47qX1JU+CvpRtc8HbVYnbrQUOLSQRBGpBB8qEYbijbSHWVOFSAD1S4JJSRolWkyNp4iKQWulCFcSnzrc4yD70+MGs3ml7Gq6eD8jja402ttLb6siUICQgZiFKAiVKSJAnlSO4wW5WUmTqSkqUmBtBI+g32rdeMACcoV3bVXZxVtR0K0xumKN5PwNY4R8gR7FxmOXiaLWuCvugKDTkcColKRPEFX0oibhGYKQEHvIE+tELXE3s05j8x5ihTj5B45V3HXozhNi1bt/aQVugEqBCsgJJMJA7PHfiZNHWMfZ6uGbYJBkQoJTptqlMyD40iN3x1M5VAajdJHMjiO/cVbtLornJlS4OCpKddQQRukgHXu7q3SVcHG7vksXzEzsATMJEAeFK+KYPupBUlUEZkmFCe/iO6j7y7vkwf5iKG3D15/yGj4Of0pOKHYnN3CmVZHtj7K+B8eRrXHgCyT3j50XxJu4WCFWgg7gKBBpcuLO4CVN9WrLwB1KfPjSoLPH8OQrhHhVN7C1p9hU9xokm4WAJZVpWruIidW1jTlT5FwBhcLQFAgjMIPeJmq3X+NFrq9SoeyrzFCfKmhM+i04+PuH1r0dIkz7B+FAVuRFVnVmZHd6GvK+7y+56n22P2Gv9fo+6r4VqrpA3yV8KWg5tXkEwR40/vMgvtcYW6MYq2myQpRKUjNJIMDtkb0dZuAshKQVE7AJM/Kl/EEn9WrCRrBgD+KnDo//ej+A/SvThLZJnnzWraKrzZSCpSFADclKoHjpVX7Y394U6XPsK8DWykDaB6VpRnYli5bPvp9amEd1NS7ZBB7CTpyFbtJ7I0GwoodnNMUebTeMlS0iEOcRxy1f+3txo4nu1qhjwQi9ul9WgrOVsqUJISW0nTkZoMsCa4M3UvHKkjrw4FONs1xbpfcsLCfsWYHQKbWHArnATqP5gKHDp4oBf2hLtvAGWWvaJmRMaRp4zVy6WdxRTo+6O2kiSpJA+f4VOPqd5KL/wBNJ4dIuS/wUP8Ab9SyACvyAM+Qqs90tfQohzrWxOmYKST8AKZ7vHGW1ZIhSRJATw319DUV/eIdTulQIggwdxOtdbxr3OdZWvCBFv0pCjqtf+I1fax1J0M+dbYT0XtLprMlKmnEnKotmBPPKZT6AUa//EbmRKmbzcAw42eIndKvpUfSb7M0WePlC7fXWbv7hV3BrWO04BBGx+tbn9G2JoUcqrdcHg4ofNAqS56AYuUE5rcn7qXVZvKUBPxrP6E7NX1EKooYtgdk7JyBCvvN9g+g0PmKU77oxlJ6p8KHJeh9RIPoKzFra8tlFNw062R95JKfJYlJ8jQdWJKOyp8K0Uci8mTlifg1dtXkmCNuRH41BctOIIKgpM7E7HwOxqRD7jiwhAK1nQJSCpR8ANTT/h2FOJSlm6byqUlJymD2c2u0idNRW8Y2vk5py547HPmL1SeNE7fHVDjRvE+jLCkKWgFC88AJPZMq07J2AB4RScWIAIO/dsaUsRUczQ02/SHLCyfZI8wdCPT4xR/DsSbS6oNrBE+z90k6gHkeXDw25qUKn8x40Ww7OI0gb6URjqTOezs63bsofO5BjhxrHsDHBSqWOjt8pLiSZ3/IrptnhpebC2ykjlOoPI6b06JsTXcII981Sew8z7Wop/c6OuxsPWh970fWgjMN+I1pOI7ERyxUOVVLi0M6jgKZ3WtYqncs6jw+tIYrPWYO4ob9jHKmm5aiqHVjnUjGS4XCT3GqynzE8OFWFagg8apsjSPumK8aj2CwyqeNWGpiqyUAJIG1TnafClQBt9z/AHco8f8A7im7Ah+0/lP0pNu/+Gq/PvinTAR+0/l/CvbxL0r9keRl/J/uGrn2TpOm1SUA6RdI0W/YVllWglxA5alJMxVa/wCkFw2As2/7Mwc6P2qSDxlB0HeRGtauSRmoNhzFb9LLZWqeQA4n6eNKLvTh5MAWRUO5ZmB/LpQ7HulzFy11bqGyiZ1VMkTEayONI2K2ltI+zl5K53S6co5e0SSPOpjtkb0LkoYknk4v3Y24k+X+sdDTiFOLBKFAyIQlOh4jTeql5bLSlJXlTJhKSe2T4d8caBWVriKVZEugp+8tSSAJ7iVE+VT3+FYgtxuHWnQlQUQcyNRwjXhx03rjeGE53JnXvKEKii6q3XwbXt901awZtaXhmRCTIk7CRE1Qu8eWzo+y6yrmRmb8liUn1qAdK2wNYI7jWCwaNM332TQVxWyCkrAASlUpcy+0oePLSl+26HOkqQyuAo7lMwI41bR0oazZkuGOAiCCOBo3h/SZCxAVr8a6Y5GpXyYTx3GuGXej+AfY2ihCs6lQVKUTqQI0A20p3wTFgsBtQKFgACdlQN0n6UkKvxp2hqYE8zw8+FS290QZJIPyNerFQyQuJ4k3kxTqTOjtnU+P0FbiqWD3XWtBekneOY0q7WFVwdSdqxVxa6BvrcBSQUvhKhOpCmHTHxFFbzAbV8kvWzDhk6rbQo+pE1Rxbo8wbpq8KP26VoSFSdu0nbbZR4UdSN/GkMXXMLZYUQyy00NNG0JR65RS10rt5abXGqXFJnkFIV9QmnLFU6+lA7i0623WjiZI/iScw+Ijzpf+h+BBWQEN/wAQPjBE/MVzwoEqHeabekDqkhS4KUN/skToVrUtKnFRyAQB5Upg6n1rRkmpZn8/KiLNwB5b6bd5HDxHdVKzTmzK4CKsMshXjwPHyNQMLWl8J7+7h5U89EukymVTlWpB0UIgRzlUQRXOllCYD2YgbHjHjt+d6PWCipIFs1KT/wCo52wOcAbGpKO/Wd0l1tK0GUqEj8DyI5VWxhEpHiPnXL8EvnLVRUha1LUIUDmUlWx9nRKduAkTvvXQLTFhctA+ysRnRIMHmOaapMVCU/bDOTx1qu818qJvI1VPM/OoFtfKsywDeM6UCzCm26a0NIPUK50UFjjGp+FQumdKs4hsFDlVeweAHaSFSRvPDlFeKlbPY8WRNFWZKTxO/dVu4Sa3uXkhtRDbgVsA0qVczqUQkd81HhzyUoKnmn9RmhTrbigJicohUT3VusG3ZozeSvAauB/u0+X/AHimq0ui3KgNcseFczxbpYx1KmmivUpSJEJT2gZ23pkt8eSoaOzHen8K9CL1ijz5RcpsXOkrbb5KwQSCZWNSSfmZq9+j/pgbJK7S4WkJkKaUqR7W6e7gfM1duCwuM42kjUxJ32NDbjo7ZuKzEEcyHFa92pNKOTn1M0niTXpXI5dIHG3msxZQRqTlQFZpG5ga0gNdFg6sdWlbaSqVKnsADXQK3J0EDSmuzxVtlAaZCUpSIABGg860VjU7Gn9fX8W/kS6e16kvj4KK+jFwNGrllXIKSpJ8yCflVC7N9akAoaUT7wWdPUA0WFwV7kj+EwR4EbVbt8zqVMvHMNMi4hf80aedZcST1VPwW24/k7QqLxi7O6UQeSt/IiKr3Vq24JXbSs8ZQB/lINEryzU2soUNR6EcCK0Gwrk+5yR4aOj6UHyVcE6PNKQ4HGGyZbKDqVABXaE8iIG9S4xhzDbyUtN9WcmZWVSuK0pG58aJ4fcdWoKPsnQ+HP5GquKtqXduqgxlbQnTftoE+Zk17n6dkh1EPWla+P6Pnf1OOTpp3CTSfy/5FnEbZ0qEqKmyR2DG47yNeYpotW1wCVFXHWd+M99XLywSpKkROp9aD2rqm/YOdI3SfaT4HceB05GvSjCNelJHlTy5Nl9Rtj/0SxEtZkL1B1A5Ef0+VMf65T901zmzxKFA9rnORZHqBFHcQxxlpjr1q7MgaamTwjevP6iDTs9fpcsZR19gvjePoQhBKD/etj1WBRRvEkakyNeVc9x3FWnbNt9C/wBn1zRk6RDiZnlGtNLCwpIUkgg7EbVz2dZev7hK/Zodh43PeamSK1tEwCO80vIHPv0ldGs7gdakrUCS3vOUSVJHONxXNUNmHTBJASkd6lEAD0mu7Yw6BeWkncuD/JP0oJ0w6Dh7M7b9lc51tpgdaQIlKiQEK+B7t6tMVHLVthpnJIzxmX3ToBXrBy5fCvb2zU2lSFpyuOEEo/5aE7BR+8Tw7uNVAtRMJSTTEHm3pTBykclbHzqIW5bJKUqCVanK6pA9EkT61DgqLlSyGUJURvmAKU/xE6A/Gm4YNdKILj7Q01yt5oPIEkAVLRSBltbrWNc4RvGZZ81qmf5QfE8KJWLyWClxKkpObQp7MwdZjfYjjxqJ/B8v96484DM5VBA/woAMcd5qO1s0oILDzmWF5wFZzMoyylXbmCs6fd8JVDLvSrHnAUKZJAXmmBsqQRObXaaYVvBLWdWwRmPkJoJbXCHv2T0LPtJ/ejUFHPv5bGda26W3+Szc7CkykpExx8DypRVsbfBTb6UsuSMqkzMExBpU+30uuWS+qW52jkImDoAeNXf1Dc/d/wA1aNRuqM7flnUFolNUbhvVIA51faPZqkskqr51Huk9uVSKkU1J1SD5CvLZcp212qRBOnzpiLa8CYctkKLYSvMntJGVWqgNSN/OtrnoU0T2XFDxCT8dD8aUbzpQ5bXakLJUyotkj7sGSU/hXQcMx5i4/unUqMTAPaHiN69jHFOCfweZOTU2k/Ig9NMHcsm0OIcUtKl5CNRlMEgySeVJ7uPuAZdY8f6V3DHMLRdMLZXoFbHilQ1Ch4GuJdKOjj9osdakFKycqkmQY+RjWK1jCDXyQ8s12ZCnpE4IgACdQNyOOvPvrp7WENLt0lGeXEZgrMZ4eWxrjSUEmAkk92prq36PMezMJtlgh1uQnMDCkbiDzA0juq444rwQ8s35CeC4WWBAVI3Obf1oxbmDJNepSTuNfz6Vqtjifl9ZqdEnaHu2qZav7YPoj3h7J+h7qVHmiklKhBG4plZ0+7/i/CsxXDutRmTGdPKe0OWo9K5Oq6fdbR7/AOnR0+bV6vsLjvs7V7g2MLuUuM5R1luQZGqlpMhJA5p29DWKGhoX0GWr9Z3A09jiOREVH6ZPXK/2H+pY1kw18jBcoW2gyCkrhKAd43Uo0KurdKoUEE8lpUEr04g8R40yXuHBausdJcVwkkIA5BAIkeNQOMITJUSo+SUjuAFfSRlR8pPE3wVcKK/ZMnkViPKUqI+FX8Vwxu4Z6p7TWQUnVJ57fOhyruBpPqG0+pImp2E5hndICRxUYQPVIB8ZNTkjsaYJuHCKPS7CEW2DLbbJUAUqzHckrBmj36P/APh7GkdgUs9NcfYcsXWG1ZiAIIHZ0UDv+FMX6PP+H2+s9ivNnBxlTPZxzUo2hnSK8Z4+NYDGs0pdIelATKUKgcSNz+AqW0u5rGLk6Ra6SKbVcMLzAllSlEDckpKQJ4b0GxbpOpWkkCdthHeN+VLL+OZjB0J2P52oc4/2iSZE9/wPCfzyqotPlCknF0yTFT10qiFcfwP49/LUZgGCpcUFXDyUNbhAXlUs/vH3U/PhpvdtbIkB3Mcp1TwnhJHCOfGPKrDVqDqTArLLm14Rri6ffljZbsJQlKWwkIHshIhInlGnnWrhABg939OVLf24NEZFQBuJ7J8R9aJoxFK09YnYyIkTI3Hj/TgaUMqmGTE4FsOBWh30mYjTQigOL4fKszZWCD7isqtAdtwfP/W0q8zZgngYUDo4N9NdD9Y41qkgCZ5D/QHVJ7u/vqzMgwp7Oe0Qo5pBKcpChtI1GaeKSDzFUOn2ModQENmQjNm/inLHwNFmj1joCB21aSJ2/ejgIpF6QlLfWteyrOezuecz3kk1phStv2IydqLVif7NdpHtZAfEER86q/7SHmaHuXRTrtnbAPr/AEqn9pHKqyOpOiVFSSs7Q02ernjFD2miSk+vnVxFyeqOvAR50PU6REc9a+fuPB7iUuQlbJiZ51iUn4VoyshG2mb6VoXfz5VLaBJi70wwptaA63/fF1KFEnTUaaelBOjqFs3KVkwptWoHHgR4UbxvD28wclWbMgkBRy6ECYoTbr/tLnia9GGRrEq9jiljTyOzp9j0iz5uxlCRMk0Hv3k30tux1aTmABgyNN/Aml9h3WNe1odao3dy5bvpIUerUYMjYHT50oZZs1eGCVs6DgVhboYAZSkFUyQAZgkRO9W7W0AcSTtImABS50UvwFKtyY9ooPxI19fWiK8aLLmV/RJMBY9n+bl8q0UrqzOUKbSGG+XroO/l8aHl5KwUklJjQjh3jhWl08ASTrOxnSOFDL+4TGZG41PePxqZSaYKKaFm36fuNOLbeQFZCpMtwkkpMa5geVHOjPTNdysj7M7GwWntoBn3lQANK5ZjDqTcukHslxRkbwTJj413tL7LLKEtJCW0pGUDaI3/AK11bcHLGNuivd4dnXmHZB3468xUH6gLeZ230eIIC1apMwe0Ijh5VaTeyJkAVcbxFJ0GwSD3HwrKEYwlslybSUpLVkDdutSU9aoZ4GbLtPGCeHlXr2GoUkglWo9oKhQ7xWlzdQM2v8omhqsaSfZUDzB0I8auXUzb7mUekxpfiJ+LoVavqQVqzbpXJBUk7azPD4UMxS8W5lDil7SAtSojWCEnTzox0/dzIbcESlRE6HQidQdDqPjSK/eKUSVElR3J3Nerh6pTgmzzcnSLHNpBDrJSsfukEeRrs/Q1kN2bKBwSK4s1Zr+zqeUCE9kDv11PhXbOjryfs7f8Iri6nMp5El4R14cThBt+Sl0zxrqkhuYzJKjz3gD51y3EMTBNPn6T2h1Tbw905VeB1Hxn1rkVwokyBXLNWzrxy1jwXHLieNXLK+zjIr2uHePT56UBS8ZCQNSQBOmp03Og86YUdC8RJ0tik7yXGh/504pomclIYsRxZKQ2E+zlHoBAA8qGO4wY1nXahF6lxJKHQUOtGFJ8dZEaEd45iprJZOuhA4cTWeSPk3wzb4B95fLJO4FXujV8cy0EntAEcII00PA9oehrTFsNUvtoJB4p/Cg+FLUHCRIKUkngRBSPmaqFPsY5XJOmPDV2Fe0cqk+yRppxA7tpQZiNNNrLNwpZSkDtEgAA6EknadteHCle2vgtRAgaE66CRrEHbw2o10FbzL+1OwltkHU7FauzIHICde+tDGx4s8MVbtKLYSt5Q3JhPgO751zHFbHrrx7rnEtlMkmCUlWgyjnvT50i6Ytt26lsrQpyOyN9TxjurnWIF1LilyntmcyROpAJAJ21NXF0hMF4qYVl+6Inn4UPk1YUoqCiSSriTvvWZe6iUm3bElR0lV0+BHUK+FCH8UuereWOrT1RTmG6oWYEDY610BxmfaM+UD0FK1x0KaUVHrHBmMkAiN5rmj0+NeDqnnyPyLtl0nunFpbkEKUNAkCfOm1vrz/6cefdVbDuh7LTiVhSyUmRJEedNaF91EunxvwEM+SK7i5cWTriIDOVyfbzaCNgRxodZ9ELoOZ5TrM0/suCiNu4K2jijVGcskrsSE9F7k8UfGg/TLDHGmh1mp3BGxFdbSof60g9O+kbDgLAIKk5pVplnTQHn+FRLBFK4o0x5pN1J8MA49aO2xadkeyFpUOJ009I9aa8btVLaGZE5kg6d4pTxTHW37G2a1zozIUTySAAZ4g6eldHwd1L9kyqZIQBPekZT8RSeLuv6KeXs/4YodHrJ5TZOclKRk6s+6UkkEHvBiO6qrDiiog7GRTFh5LNwtBHZWJEfeH9J9KoY/bgErRxMnx/rWclcbLhKpanJbuwcQpSS2vQmCUqggHeYp06N4m46wlt1DkNQAqFBKk7JE8xt6U4WVyS0nwqUrncVreyOdRcJAu5wpK0dhx1H8K5Hoqajwth1tvq8xWpBzbkFSSZIg8uQqK+C2VZkgls7xrl8RyqC0xJRdQoR2TJ7wdDWTddzpStWhwYvUkcqGYzgDNytKytTatipEajhmBGsHjXuMsKKeuZ7WklI4jmO/upfw3GVKVqdOU1MriwilJF246BXS1dSXW+omes1LmnDJz75j5UUt/0Z2qQJK1nmo/QACmHA8SDjQ17SdD9D+eVEOuFdsJLX09jhmnt6u4uXXQplacqisjTTMY02q5a9HG0JCQpcD940TcfFeIfFGsfYLYKxLo4060tsqIzJIBJJg8DB5GDXE32FNrU2sQpBKT4gxpXe3X++uXfpKwrK6LlA7K4C44LGx8wPUd9RNLwXjlQlXFvPCus/ovu0XLBad1cZgSSZUg+yfERHpXKi7pTh+jB/LepA99CwfTN/wCIqIumXOKatHSce6LMvsuICQHCmErjUEajXeJriDDi2lKSoEKSogg7ggwR8K+hS9XKv0qYR1bqblA7Lmi+5YGh/mA9U99aZI2iMUqYGsr8KMHc0x9D7W3dccQW05yM2aO0QCAUk9xg/wClc5S9BBpp6J32W9t1j3l5T/OCjX1rCK1kmdE2pxY3XHQ+2EywlXipVVGejzSVaM5UwQUhaspPMg6SKd7kg8BQXEsRZZBU44hIG8qAOuwjnptXVRxiueiVvGqDOvvmqb/R9AASgQmZIzEz61Zc6U9fpasOOGNVKhDae4qPHuFUXrS4c/vn8ifuMjL6rOpqRgDEcKbaJ6xYA5A9r4CasfqK0/6k/wCF3/4USXhbITlCToImSTvO57yai+wN9/rUts0UYPu3/X/R9UrvqJSqnWKhUjuoA1B762BrXq+6syUAWG10RtV0MbTV5iBVIlnuKYal8QtE6R7biPLsEaUm470aaaSMtsJKhqHVKUU8QCqYPeQaenLuBw+FLl3cZ3JVzqtmTqhSusKt05Q87cMgiQlwMkx3KSRI8qL4RibC0KsbB8tqALgW9qFqTBKUweztPkdDrRvE78KypyoVH30IXHhIMVAlpftIKE6e62hJ9Qmi7DUVr/phctkpet4eToFSQgngYAg+Rg1bf6TPqbT1bQdltKnAApRB0nRIOUAzPj5UwYy846gNounWU5QFDqWlkmNSlaVpUAeW9K9ngv2d0Ot3qyRMpS1lUoHdJJcKYPH13qNUVtII2/TC1U22lAWl1SwkoUNEzoTmAgiY7+6jiXPzNCrlFmtXWKsusdmStbhbkjiQjQn4mNamTcTtA7qzkq7FxbfcIZ6EXOBqcXNuO0fdGnjFGbHC3nYIQQn7x7KY56nXyo6UtsphB7QSe3puCmfn5UKG3ce7i+ARgeFPtIIdUJ3SkGfHX6UGx/o2IVcMiFCStIG/EqA58xxpsuMRSToZ8CN62bJUrbfTT86mrcFWpKyPbYR+imKLD4SAVE6EAEmDxp/JPGriGkpOVCEp+9ASI23A47+lRXB7Whj8aUIaKgyZN3dFJa/GvUKPOsdRrJJju4/Co4q7Ioxw99Ub+zS82tpYJSsQeY5Ed4Oo8KtLbHL51AW/KpA43jWEOWzqmnNTulXBSeCh+HA0Q6H3fVXLTh0CVQfBXZJ9CaeemWDdfb5k6ralSdIOX3hPgJ8QK523bH3fOs5OjfHHY7uTVLG8NTc262VaBY0P3VDVKvIxVHopiBft0mZUiEL23A0O3EQfWjOaPdHrWydowaadHz1d26mnFNrELQSlQ7x9KvYXd9WpCvuLSr/CQfpTh+k7BQqLpAgiEuxrI2Sry2PlypBZVBispI1gzvq1pUAQdCAR4Gku2fefxB1L0FDSVJSMqewlRTlkxJKgkHyo90XuwuzZJ91ASTB9zsa+lCG2cl484Do7lnT7ggRy3rW7Rk1yWH7cJBCAEiSYAgSdzpQW5a13otdr7/iaE3H51pDB7jZ51H1J51K46RwrTr+40gHxauRPr8udQlR7/wA/n+tbqX3ePPzH1qJRn8/I0xnpUa1rRaO/894rVP5/P40DLDYPdRC3niE/Wh7R7qKWkcopksy5SCNCn0g0v3kg7/OmS5QkjvoFiKD49xoAFuKKvePkamQVAe0qoCmOA+NSJcPBNAyN4EnWfhWob1970BrcvK5EV4o/n870ARuN8sx8UgfWtetjl61IR3GsDfGKGCDSekb5SElSDw1RPCKGXt8+oadVx2RG8a7xwrwPAf1qJxZOyvnSCiTCsTeLgS4600iDK1I0HHTWJ4Cni0xRkAZHEOH7wcbnyAVFJdrZ5j2oI8/rV9/BU5ZSI8tPWmTQeuMcbR7S0IB4laCfgTNVUY/ayCXcx7gTvO8CB60pLZSDFXsNwnOpKiklM+tIBsdeBiPhWJUeB/PrWi3CPd+NaB0n3J/PdSA0udeNV26jxW5DTSnSnRInf+mg7+Fc/e6V3h1ShsDhEKjzKtfShILGHpn0nRbjqSyXOsT2pUkJymQRxJnYiBoTBrnzGNwpRLcpKiRB7SQSYTyMDSdNqrX6XXHCtwypRkk8/wA8OFVhbLPD4jjtuRQ4pqmEZuLtBdvpKtt5DjOZKUqSpSCYCymdFRwhRHdM12/DL9LzSHUDsOJCkmTMHgfDbyr55LJG4A8TO3hpXV/0ZXa/sykKCg2kjq1RooqkrCRxAMa/vHlQlSpA5OTtjRjFw2GHS9lDWRWcxPZiDoNZ8K4SXUlcJVx0kRPKukdM+kLrAdQttpSHCUISpJGZGROZWYK7WqiIgEQOc1ydKaGrBSo6f0O6RNsNdW8oplxIRAJ1XII07wP8VN9+zqf6c64S5cLUnKTIme8EcZrsOE4v19q25KcxSMwgntDQ+EkH1pRTSoqUk3aKt5bDXb1AoLcedFrxZJ3FC3jzj40w4B7gPfUWSrDpT3VFCfyR+NIQ9qVqoctu6o1H2O/esrKpjPUp37q0J0njI+VZWVE2dXTxTu0WkL7KNt+QNS4eZGvOsrKcDPP3CRT2o4UFxnRJIrysq/JzglIkjwrZR3FZWUxkc6+VRuKOlZWUhkSHDB861eWedZWUCKyTtVlj2gKyspIbC9vsD+d6Iu3KkwlJgGJiPnvWVlMQItUBTpChPa+tMlso9pIJATsASOVZWUAQrWSrUnY8e6tc0Z+7asrKkCtfq/s7iveg6+Qrmj1g3M5dSddSPrWVlUiWVnbJA93hzNU1sJHAVlZTERttJ5DjXUv0c3Cl2rudRVlCssmYhMisrKkaOYYhfuPrK3VlajpJ5A6AAaAdwqnlr2soEYNz3AmnboFcq6txOYxoqO8lQJ9Ej0rKykNB6++h+n40GuVb+NZWUiiklZI1rSsrKAP/2Q==" alt="Strength Training" class="exercise-image">
            <p>Duration: 20-30 minutes</p>
            <p>Frequency: 2-3 times a week</p>
            <p>Benefits: Builds muscle, improves insulin sensitivity, and boosts metabolism.</p>
        </li>
        <li class="exercise-item">
            <h2>Yoga</h2>
            <img src="data:image/jpeg;base64,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" alt="Yoga" class="exercise-image">
            <p>Duration: 30 minutes</p>
            <p>Frequency: 3-4 times a week</p>
            <p>Benefits: Reduces stress and improves flexibility and balance.</p>
        </li>
    </ul>

    <h2>Important Tips</h2>
    <p>Before starting any exercise program, consult with your healthcare provider, especially if you have complications related to diabetes.</p>

<footer>
    <p>&copy; 2024 Insulin Management Awareness. All Rights Reserved.</p>
</footer>
