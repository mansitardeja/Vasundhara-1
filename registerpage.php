<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="styleregister.css">
        <style>
            small{
            font-size: 18px;
            color: white;
                }
body{
    background-image: url('bg.png');
    background-attachment: fixed;
    background-size: cover;
    font-family: 'Times New Roman', Times, serif;
}
.btn-info{
    margin-top:20px;
    margin-left: 160px;
    width: 180px;
    border-radius: 1000px;
}
input[type=text]{
    color: white;
}
input[type=password]{
    color: white;
}
input[type=date]{
    color: white;
}
input[type=email]{
    color: white;
}
p{
    color:ivory;
}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h1 class="text-centre">REGISTER HERE</h1>
                    <form action="registration.php" class="modal-content" method="post">
                        <label>Name</label>
                        <input type="text" class="form-control" name="user" placeholder="your name" required>
                        <br>
                        <label>Password</label>
                        <input type="password" class="form-control" name="pass" placeholder="create your password" required>
                        <small>Password must be 6 characters</small><br><br>
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="email here" required>
                        <br>
                        <label>Birth</label>
                        <input type="date" class="form-control" name="date" placeholder="Date of Birth" required>
                        <br>
                        <a href="loginpage.php">
                            <button type="submit" name="click" class="btn-primary btn-info">Register</button>
                        </a>
                        <p>Already a member?<a href="loginpage.php">   Sign in</a></p>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </body>
</html>