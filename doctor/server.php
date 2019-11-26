<?php

session_start();
// initializing variables
$last_name = "";
$first_name    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'locum');

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $hospital = mysqli_real_escape_string($db, $_POST['hospital']);
  $experience = mysqli_real_escape_string($db, $_POST['experience']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { array_push($errors, "first name is required"); }
  if (empty($last_name)) { array_push($errors, "last name is required"); }
  if (empty($hospital)) { array_push($errors, "CV is required"); }
  if (empty($experience)) { array_push($errors, "Password is required"); }
  if (empty($email)) { array_push($errors, "Policy Number is required"); }
  if (empty($dob)) { array_push($errors, "Date of Birth is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $doctor_check_query = "SELECT * FROM doctor WHERE last_name='$last_name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $doctor_check_query);
  $doctor = mysqli_fetch_assoc($result);
  
  if ($doctor) { // if user exists
    if ($doctor['last_name'] === $last_name) {
      array_push($errors, "user already exists");
    }

    if ($client['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO doctor (first_name, last_name, hospital, experience, email, dob, password) 
  			  VALUES('$first_name', '$last_name', '$hospital', '$experience', '$email', '$dob', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['last_name'] = $last_name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: register.php');
  }
}

// LOGIN USER

if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
    array_push($errors, "email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM doctor WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>