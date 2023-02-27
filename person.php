<?php
/*
3.Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal variable. Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and email properties based on the form data. Use the getName() and getEmail() methods to display the properties on the webpage.*/

include "index.php";
echo "\n";



if (isset($_POST["name"]) && !empty($_POST["name"])) {
  $name = $_POST["name"];
} else {
 
  $name = "Anonymous";
}

if (isset($_POST["email"]) && !empty($_POST["email"])) {
  $email = $_POST["email"];
} else {
 
  $email = "example@example.com";
}


$person = new Person();


$person->setName($name);
$person->setEmail($email);


echo "Hello, " . $person->getName() . "!<br>";
echo "Your email is: " . $person->getEmail() . "<br>";
?>