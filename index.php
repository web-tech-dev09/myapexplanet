<!DOCTYPE html>
<html>
<head>
    <title>Basic PHP Form</title>
</head>
<body>
    <form action="process.php" method="post">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
