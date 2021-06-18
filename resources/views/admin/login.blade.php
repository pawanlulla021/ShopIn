<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop In | Login</title>
  

  <link rel="apple-touch-icon" href="{{asset('Admin_Theme/apple-icon.png')}}">
 


  <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/themify-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/selectFX/css/cs-skin-elastic.css')}}">
  <link rel="stylesheet" href="{{asset('Admin_Theme/assets/css/style.css')}}">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body class="bg-dark">
<div class="sufee-login d-flex align-content-center flex-wrap">
  <div class="container">
    <div class="login-content">
      <div class="login-logo">
        <a href="index.html">
          <img class="align-content" src="images/logo.png" alt="">
        </a>
      </div>
      
      <div class="login-form">
       <form action="/admin/login" method="POST">
        @csrf

        <div class="form-group">
          <label>Email address</label>
          <input type="email" name="email" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
         <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>                                         
       </form>
      </div>
    </div>
  </div>
</div>
  
</body>
</html>