<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ice Cream Factory Feedback</title>
<style>
   body {
    margin: 0;
    padding: 0;
    background-image: url('icecream-background.jpg'); /* Replace with actual image URL */
    background-size: cover;
    font-family: Arial, sans-serif;
  }
  .container {
    width: 80%;
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: rgba(255, 182, 193, 0.8); /* Baby Pink */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }
  .form-group {
    margin-bottom: 20px;
  }
  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }
  input[type="text"],
  input[type="email"],
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  textarea {
    height: 100px;
  }
  button {
    padding: 10px 20px;
    background-color: #ff69b4; /* Hot Pink */
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  button:hover {
    background-color: #ff1493; /* Deep Pink */
  }
</style>
</head>
<body>
<div class="container">
  <h2>ICE CREAM FACTORY</h2>
  <h3>Customer Feedback and Suggestions</h3>
  <form method="post" action="process_feedback.php">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" id="phone" name="phone" required>
    </div>
    <div class="form-group">
      <label for="experience">Rate your overall experience:</label>
      <select id="experience" name="experience" required>
        <option value="" disabled selected>Select an option</option>
        <option value="excellent">Excellent</option>
        <option value="very-good">Very Good</option>
        <option value="good">Good</option>
        <option value="fair">Fair</option>
        <option value="poor">Poor</option>
      </select>
    </div>
    <div class="form-group">
      <button type="submit" name="submit">Submit</button>
    </div>
  </form>
</div>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $experience = $_POST['experience'];
        
        // Process the form data (e.g., save to a database)
        // You can customize this part based on your needs
        
        // For demonstration purposes, let's just display the submitted data
        echo "<div class='container'>";
        echo "<h2>Thank you for your feedback, $name!</h2>";
        echo "<p>Email: $email</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Overall Experience: $experience</p>";
        echo "</div>";
    } else {
        echo "<div class='container'>";
        echo "<h2>Form submission error. Please try again.</h2>";
        echo "</div>";
    }
}
?>
