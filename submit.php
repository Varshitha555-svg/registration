<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission</title>
  <style>
    body {
      background-color: #e8f0fe;
      font-family: 'Poppins', sans-serif;
      text-align: center;
      padding-top: 50px;
      color: #333;
    }
    .container {
      background-color: #ffffff;
      width: 60%;
      margin: 0 auto;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      color: #0077b6;
      margin-bottom: 20px;
    }
    p {
      font-size: 18px;
      line-height: 1.6;
    }
    strong {
      color: #005f73;
    }
    .success {
      color: green;
      font-weight: bold;
      margin-top: 15px;
    }
    footer {
      margin-top: 30px;
      font-size: 14px;
      color: #777;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Submitted Information</h2>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $dob = $_POST['dob'];
          $education = $_POST['education'];
          $gender = $_POST['gender'];
          $course = $_POST['course'];
          $phone = $_POST['phone'];

          echo "<p><strong>Full Name:</strong> $name</p>";
          echo "<p><strong>Email:</strong> $email</p>";
          echo "<p><strong>Gender:</strong> $gender</p>";
          echo "<p><strong>Course:</strong> $course</p>";
          echo "<p><strong>Phone Number:</strong> $phone</p>";
          echo "<p class='success'>Form submitted successfully!</p>";
      }
    ?>
  </div>
  <footer>© 2025 Sreelekha Vennapusa | All Rights Reserved</footer>
</body>
</html>

