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
    <title>Register</title>
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
        <h1 class='text-red-600 text-2xl'>Register</h1>
        <div class='bg-red-600 w-5 h-1'></div>
        </div>
    </div>
    <div class='flex justify-center'>
        <form action="register_process.php" method="POST">
            <div class='flex justify-center'>
                <div>
                    <div class='flex gap-3'>
                        <label for="username" class='text-red-600'>Username :</label>
                        <input type="text" name="username" id="username" required class='border border-red-600 rounded-md pl-2 text-zinc-600'>
                    </div>
                    <br>
                    <div class='flex gap-3'>
                        <label for="password" class='text-red-600'>Password :</label>
                        <input type="password" name="password" id="password" required class='border border-red-600 rounded-md pl-2 text-zinc-600'>
                    </div>
                </div>
            </div>
            <div class='flex justify-center p-5'>
            <input type="submit" value="Register" class='bg-red-600 px-5 py-1 rounded-md shadow-md text-white'>
            </div>
        </form>
    </div>

    <div class='flex justify-center'>
        <a href="login.php" class='text-red-600 text-xs'>
            login
        </a>
    </div>
    
</body>
</html>