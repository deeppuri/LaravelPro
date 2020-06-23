@extends('frontend.layouts.master')
@section('pageContent')
<div class="breadcrumbs-fs fl-wrap">
   <div class="container">
      <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Pages</a><span>Login</span></div>
   </div>
</div>
<section class="middle-padding gre y-blue-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-4"></div>
         <div class="col-md-4">
            <div class="bookiing-form-wrap">
               <!--   list-single-main-item -->
               <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                  <div class="profile-edit-container">
                     <div class="custom-form">
                        <?php if (count($errors)>0):
                           ?>
                        <?php foreach ($errors->all() as $value): ?>
                        <h5 class="text-danger">{{ $value }}</h5>
                        <?php endforeach ?>
                        <?php endif ?>
                        <form method="post" action="{{action('HotelsusersController@dologin') }}"   class="main-register-form" >
                        @csrf
                              <label>Email Address <span>*</span></label>
                           <input name="email" type="text" >
                           <label >Password <span>*</span></label>
                           <input name="password" type="password" >
                           <button type="submit" class="log-submit-btn color-bg"  ><span>Register</span></button>
                        </form>
                     </div>
                  </div>
               </div>
               <!--   list-single-main-item end -->
            </div>
         </div>
      </div>
   </div>
</section>
<!-- section end -->
@endsection