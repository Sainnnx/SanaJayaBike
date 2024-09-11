<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <title>Admin| Sana Jaya</title>
    <style>
    input{
    border: 1px solid #ccc;
    padding: 6px 12px;
    display: inline-block;
    width: 350px;
    overflow: hidden;
    position: relative;
    z-index: 1;
    box-sizing: border-box;
    border-radius: 4px;
    margin: 0px 0px 5px 0px;
    }
    form{
        transform: scale(1.4);
        font-family: 'Monument Extended', sans-serif;
    }
    </style>
</head>

<body>
<div class="form-admin">
<form action="admin-validate.php" method="post" name="DataBeli">
    <div><label for="username">Username</label></div>
    <div><input type="text" name="username" id="username"></div>

    <div><label for="password">Password</label></div>
    <div><input type="password" name="password" id="password"></div>
    
    <div class="buttons">
        <button type="submit" class="submit">Login</button>
        <button type="reset" class="cancel">Cancel</button>
    </div>
</form>
</div>
</body>
</html>