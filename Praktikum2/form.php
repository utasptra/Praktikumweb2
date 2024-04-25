<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Login</h1>
    <form action="submit.php" method="POST">
        <div>
            <label for="">Username</label>
            <input type="text" name="username" required>
        </div><br>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>