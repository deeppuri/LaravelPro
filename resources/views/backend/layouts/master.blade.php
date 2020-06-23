<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="Femina Clothing">
    <meta name="author" content="PIXINVENT">
    <title></title>
    <link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('public/app-assets/images/ico/apple-icon-60.png')}}')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('public/app-assets/images/ico/apple-icon-152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('public/app-assets/images/ico/favicon.ico')}}">
    <link rel="shortcut icon" type="image/png" href="{{URL::asset('public/app-assets/images/ico/favicon-32.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/css/bootstrap.css')}}">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/fonts/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/vendors/css/sliders/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/vendors/css/extensions/pace.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/css/colors.css')}}">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/css/plugins/calendars/clndr.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/app-assets/css/style.css')}}">
          <link href="{{URL::asset('public/app-assets/css/toastr.min.css') }}" rel="stylesheet">
 
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">


   <!-- page header -->
    @include('backend.partial.header')
    <!-- / page header -->
    
 
 <!-- BEGIN CHILD PAGE-->
   @yield('pageContent')
   <!-- END CHILD PAGE-->  


   <!-- footer -->
    @include('backend.partial.footer')
   <!-- / footer -->
         <!--  header end -->


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js">
      
   </script>
    <!-- END Custom CSS-->



      <script src="{{URL::asset('public/app-assets/js/core/libraries/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('public/app-assets/vendors/js/ui/tether.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('public/app-assets/js/core/libraries/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('public/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('public/app-assets/vendors/js/ui/unison.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('public/app-assets/vendors/js/ui/blockUI.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('public/app-assets/vendors/js/ui/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('public/app-assets/vendors/js/ui/jquery-sliding-menu.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('public/app-assets/vendors/js/sliders/slick/slick.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('public/app-assets/vendors/js/ui/screenfull.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('public/app-assets/vendors/js/extensions/pace.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
       <script src="{{URL::asset('public/app-assets/vendors/js/editors/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('public/app-assets/vendors/js/tables/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('public/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{URL::asset('public/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('public/app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('public/app-assets/js/scripts/ui/fullscreenSearch.js')}}" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{URL::asset('public/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>   
    <script src="{{URL::asset('public/app-assets/js/scripts/editors/editor-tinymce.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="{{URL::asset('public/app-assets/js/toastr.min.js') }}"></script>
  
  <script>

     @if(Session::has('success'))



toastr.success("{{Session::get('success')}}");
    

@endif

  @if(Session::has('info'))



toastr.info("{{Session::get('info')}}");
    

@endif

@if(Session::has('warning'))



toastr.warning("{{Session::get('warning')}}");
    

@endif
</script>
  </body>
</html>
