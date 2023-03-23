<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>

<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get the form data and store it in variables
  $name = $_POST["name"];
  $email = $_POST["email"];
  $dob = $_POST["dob"];
  $grade = $_POST["grade"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];

  // Open the file for writing (or create it if it doesn't exist)
  $filename = 'D:\VsCode\Workspaces\Learn\Web\data\admission_data.txt';
  $file = fopen($filename, 'a');

  // Write the data to the file
  fwrite($file, "$name,$email,$dob,$grade,$phone,$address\n");

  // Close the file
  fclose($file);

  // Redirect to a thank-you page or display a message
  header("D:\VsCode\Workspaces\Learn\Web\HTML\thank_you.html");
  exit;
}
?>
