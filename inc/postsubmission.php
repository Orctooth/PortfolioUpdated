<?php
include 'connection.php';

//connect to db
$conn = OpenCon();
global $success;
//grab time stamp
$timestamp = date('Y-m-d H:i:s');
$firstname = $lastname = $email = $subject = $message = "";

//filter inputs
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$firstname = test_input($_POST["first"]);
$lastname = test_input($_POST["last"]);
$email = test_input($_POST["email"]);
$subject = test_input($_POST["subject"]);
$message = test_input($_POST["message"]);
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}


//test for user errors

if(empty($firstname)){
    $session->getFlashBag()->add('error', 'Please enter your first name');
    header('Location: /PortfolioTemplateMockup/index.php#contact-form');
    exit();
}
if(empty($lastname)){
    $session->getFlashBag()->add('error', 'Please enter your last name');
    header('Location: /PortfolioTemplateMockup/index.php#contact-form');
    exit();
}
if(empty($email)){
    $session->getFlashBag()->add('error', 'Please enter your email');
    header('Location: /PortfolioTemplateMockup/index.php#contact-form');
    exit();
}

if(empty($subject)){
    $session->getFlashBag()->add('error', 'Please enter a message subject');
    header('Location: /PortfolioTemplateMockup/index.php#contact-form');
    exit();
}

if(empty($message)){
    $session->getFlashBag()->add('error', 'Please enter your message to us');
    header('Location: /PortfolioTemplateMockup/index.php#contact-form');
    exit();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $session->getFlashBag()->add('error', 'Invalid email');
    header('Location: /PortfolioTemplateMockup/index.php#contact-form');
    exit();
}




//attempt insertion
try{
    $query = $conn->query("INSERT INTO submissions (`first-name`, `last-name`, `email`, `subject`, `message`) VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')");
    if($query){
        $session->getFlashBag()->add("success", "Submission successful! We'll process your enquiry within 2 working days.");
        header('Location: /PortfolioTemplateMockup/index.php#contact-form');
    }
}catch(Exception $e){
    throw $e;
}

?>