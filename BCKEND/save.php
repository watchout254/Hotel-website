<?php
 require_once 'connect.php';
 session_start();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $email = $_POST['email'];
     $question = $_POST['question'];

    //  Validate data
    $errors = [];
    if(empty($email)){
        $errors['email'] = 'Email is required';
    }
    if(empty($question)){
        $errors['question'] = 'question is required';
    }
    if(!empty($errors)){
        $_SESSION['error'] = "All fields are required";
        $_SESSION['errors'] = $errors;
        $_SESSION['old_data'] = $_POST;
        header('Location: contact.php');
        exit;
    }

    //  Insert data into database
    else {
        try {
        $stmt = $db->prepare("INSERT INTO faqs (email,question) VALUES (?,?)");
        $stmt->execute([$email,$question]);
        $_SESSION['success'] = 'Message sent successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
 }

 header('Location: faqs.php');