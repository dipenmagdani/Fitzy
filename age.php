<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
  background-image: url("./img/images/food3.jpg");
  position: relative;
}

* {
  box-sizing: border-box;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
  margin-right: 38%;
  border-radius: 15px;
 
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #f36100;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  margin-top: 5%;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<h1 style="color: rgb(255, 251, 251);font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">FITZY</h1>
<div class="bg-img">
  <form action="DIET.php" class="container">
    <h1>ENTER YOUR DETAILS</h1>

    <label for="Age"><b>AGE</b></label>
    <input type="text" placeholder="Enter Age" name="age" required>
    <label for="weight"><b>HEIGHT</b></label>
    <input type="text" placeholder="Enter Height" name="Height" required>
    
    <label for="weight"><b>WEIGHT</b></label>
    <input type="text" placeholder="Enter WEIGHT" name="weight" required>
    <label for="weight"><b>Gender</b></label>
    <input type="radio" placeholder="male" name="Gender" required>
    <label for="Gender"><b>Male</b></label>
    <input type="radio" placeholder="Female" name="Gender" required>
    <label for="Gender"><b>Female</b></label>

  
    <button type="submit" class="btn">NEXT</button>
  </form>
</div>
</body>
</html>