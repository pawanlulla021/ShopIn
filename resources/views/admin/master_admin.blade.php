<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop In</title>

  <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/themify-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/selectFX/css/cs-skin-elastic.css')}}">
  <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('Admin_Theme/assets/css/style.css')}}">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


  <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('Admin_Theme/assets/css/style.css')}}">
</head>
<body>

{{View::make('admin/header_admin')}}
@yield('content_header')

{{View::make('admin/footer_admin')}}
@yield('content_footer')
</body>
</html>