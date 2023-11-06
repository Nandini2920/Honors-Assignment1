<?php
include 'db_connection.php';
    $query = "SELECT * FROM registration_form";
    $stmt = mysqli_query($con,$query);
    $total = mysqli_num_rows($stmt);
    $users = mysqli_fetch_assoc($stmt);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User List</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<body>
<div class="container">
    <h2>User List</h2>
    <table class="table" tborder="5">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <?php while($users = mysqli_fetch_assoc($stmt)){ ?>
                <tr>
                    <td><?php echo $users['Name']; ?></td>
                    <td><?php echo $users['Email']; ?></td>
                    <td><?php echo $users['Gender']; ?></td>
                    <td><?php echo $users['City']; ?></td>
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>