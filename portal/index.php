<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color:#f4f4f4;
            margin:0;
            padding:0;
            display:flex;
            justify-content:center:
            align-items:center;  
            height:100vh;  
        }
        .login-box{
            background:#fff;
            padding:20px
            border-radius:10px;
            width:300px;
        }
        h2{
            text-aling:center:
        }
        input{
            
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="GET" action="login_action.php">
            <lable>Username</lable>
            <input name="username" type="text" placeholder="Enter Your name" required /><br>
            <lable>Password</lable>
            <input name="pass" type="password" required />
            <input type="submit" />
        </form>
    </div>
</body>

</html>