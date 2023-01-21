<html>
    <head>
    <title> User Login And Registration </title>
    <link rel="stylesheet" type="text/css" href="styleslogin.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.usebootstrap.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-6 login left">
            <h2> Login Here </h2>
            <form action="validation.php" method="post">
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="user" class="form-control" required>
</div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control" required>
            <button type="submit" class="btn btn-primary"> Login </button>
            </div>
</form>
</div>
</div>
<div class="container">
        <div class="row">
            <div class="col-md-6 login right">
            <h2> Registration Here </h2>
            <form action="registration.php" method="post">
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="user" class="form-control" required>
</div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control" required>
            <button type="submit" class="btn btn-primary"> Registrer </button>
            </div>
</form>
</body>
</html>