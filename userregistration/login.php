<html>
<head>
        <tiltle> User Login And Registration </title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>    
<body>
    
<div class="cotainer">
    <div class="login-box">
    <div Class="row">
    <div class="col-md-6 login-left">
        <h2> Login Here </h2>
        <form action="validation.php" method="post">
          <div class="form-group">
            <label>Usename</label>
            <input type="text" name="user" class="form-control" required>  
            </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>  
            </div>
            <button type="submit" class="btn btn-primary"> Login </button>
        </form>
    </div>
        
        <div class="col-md-6 login-right">
        <h2> Register Here </h2>
        <form action="registration.php" method="post">
          <div class="form-group">
            <label>Usename</label>
            <input type="text" name="user" class="form-control" required>  
            </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>  
            </div>
            <button type="submit" class="btn btn-primary"> Register </button>
        </form>
        </div>
        </div>
    
</div> 
    
</div>    
</body>
</html>    
    