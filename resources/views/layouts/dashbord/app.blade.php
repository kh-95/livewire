<!DOCTYPE html>
<html dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LivewareScreencasts</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
 
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
 
  <!-- Ionicons -->
  
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('dashbord/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('dashbord/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('dashbord/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
 
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('dashbord/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('dashbord/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('dashbord/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  
  



  <link rel="stylesheet" href="{{asset('dashbord/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('dashbord/dist/css/adminlte.min.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('layouts.dashbord.nav')

  <!-- Main Sidebar Container -->
  
@include('layouts.dashbord.aside')
  <!-- Content Wrapper. Contains page content -->



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href=""><i class="fa fa-dashboard"></i>{{trans('site.Dashboard')}}</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
           
                
  @yield('content')                      
                
                      

  


  
  <!-- /.content-wrapper -->
</div>
<!-- @include('layouts.dashbord.footer') -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('layouts.dashbord.script')

@livewireScripts

<script type="text/javascript">

window.livewire.on('userStore', () => {
    $('#createModal').modal('hide');
    $('#updateModal').modal('hide');
});

</script>
<script type="text/javascript">

window.livewire.on('categoryStore', () => {
    $('#createModal').modal('hide');
    $('#updateModal').modal('hide');
});

</script>




<script type="text/javascript">

window.livewire.on('productStore', () => {
    $('#createModal').modal('hide');
    $('#updateModal').modal('hide');
});

</script>



 
</body>
</html>


<script>
window.Livewire.on('filechoosen', () => {
  let inputField = document.getElementById('image')
  let file=inputField.files[0]

let reader = new FileReader();
reader.onloadend= () =>{

window.Livewire.emit('fileUpload',reader.result)

}
reader.readAsDataURl(file);
});
</script>




