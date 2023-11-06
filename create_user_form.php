<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>User Information Form</h2>
    <form action="save_user.php" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label>Gender:</label><br>
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female" required> Female
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <select class="form-control" name="city" required>
                <option value="Nagpur">Nagpur</option>
                <option value="Pune">Pune</option>
                <option value="Mumbai">Mumbai</option>
                <option value="shegaon">Shegaon</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</body>
</html>
