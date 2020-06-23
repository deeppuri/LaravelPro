<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Hotel Booking Online - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{URL::asset('resources/css/reset.css')}}">
        <link type="text/css" rel="stylesheet" href="{{URL::asset('resources/css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{URL::asset('resources/css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{URL::asset('resources/css/color.css')}}">
        
        
              <link href="{{URL::asset('resources/css/toastr.min.css') }}" rel="stylesheet">

        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{URL::asset('resources/images/favicon.ico')}}">
    </head>
    <body>


   

   <!-- page header -->
    @include('frontend.partial.header')
    <!-- / page header -->
    
 
 <!-- BEGIN CHILD PAGE-->
   @yield('pageContent')
   <!-- END CHILD PAGE-->  


   <!-- footer -->
    @include('frontend.partial.footer')
   <!-- / footer -->
         <!--  header end -->




         <script type="text/javascript" src="{{URL::asset('resources/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('resources/js/plugins.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('resources/js/scripts.js')}}"></script>
       
         <script src="{{URL::asset('resources/js/toastr.min.js') }}"></script>
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