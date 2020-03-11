<?php
//session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>


</head>
<body>
<div class="container">
    <div class="col-lg-6">
        <h4>LOGIN</h4>
        <form method="post" action="?route=postlogin">
            <div class="form-group">
                <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="User">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputAge" placeholder="Age">
            </div>

            <div class="form-group">
<!--                             <label for="exampleInputPassword1">Password</label>-->
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputAddress" placeholder="Address">
            </div>

            <?php if($_SESSION['Login_err']):?>
            <p style="color:red"><?php echo $_SESSION['login_err'];?></p>
            <?php $_SESSION['login_err'] = null; endif;?>

            <div class="form-group">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>

        </form>
    </div>
</div>

</body>
</html>
