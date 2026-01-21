<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
       
        body {
            font-family: sans-serif;
            background-color: #f4f4f4; 
            display: flex;
            justify-content: center; 
            align-items: center;     
            height: 100vh;           
            margin: 0;
        }

        .login-box {
            background: white;
            padding: 30px;
            border-radius: 8px;      
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; 
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #EA7B7B; 
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #9CAB84; 
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Masuk</h2>
        <form action="index.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>