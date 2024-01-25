<?php
    session_start();
    if (isset($_SESSION['username'])) {
        header("Location: home.php");
        exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>

    <div class='flex justify-center'>
        <div class='p-10'>
            <h1 class='text-red-600 text-2xl'>Register Login</h1>
            <div class='bg-red-600 w-5 h-1'></div>
        </div>
    </div>
    <div class='flex justify-center gap-5'>
        <a href="login.php" class='bg-red-500 text-white px-5 py-1 shadow-md rounded-md'>Login</a>
        <a href="register.php" class='bg-red-500 text-white px-5 py-1 shadow-md rounded-md'>Register</a>
    </div>
    
</body>
</html>