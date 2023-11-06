<?php
//try {
    // Include the database connection file
include 'db_connection.php';
if(isset($_POST['submit']))
{
    // Validate and sanitize user input
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Gender = $_POST['gender'];
    $City = $_POST['city'];

    /*if (empty($Name) || empty($Email) || empty($Gender) || empty($City)) {
        // Handle validation errors
        die('Please fill out all required fields.');
    }*/

    // Insert user data into the database
    $query = "INSERT INTO registration_form(Name,Email,Gender,City) VALUES('$Name','$Email','$Gender','$City')";
    if(mysqli_query($con,$query)){
        echo "<script>alert('new record inserted')</script>";
        echo "<script>window.open('user_list.php','_self')</script>";
        //header('Location: user_list.php');
    }
    else{
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
    //$stmt = $pdo->prepare($query);
    //$stmt->execute([$Name, $Email, $Gender, $City]);

    // Redirect to the user list page
    //header('Location: user_list.php');
//catch (PDOException $e) {
    // Handle database errors
    //die('Database error: ' . $e->getMessage());
//}
}