
@extends('admin/master_admin')
@section('content_header')   
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
          <input type="email" name="email_id" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="email_password" class="form-control" placeholder="Password">
        </div>
         <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>                                         
       </form>
      </div>
    </div>
  </div>


@endsection
@section('content_footer')  
@endsection