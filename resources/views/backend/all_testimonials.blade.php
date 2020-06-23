@extends('backend.layouts.master')

@section('pageContent')

<div class="app-content content container-fluid">
   <div class="content-wrapper">
      <div class="content-body">
         <!-- Basic form layout section start -->
         <section id="basic-form-layouts">
            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title" id="basic-layout-round-controls">Add Categories Here</h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                           <ul class="list-inline mb-0">
                              <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                              <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                              <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                              <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="card-body collapse in">
                        <div class="card-block">
                           <table class="table table-striped table-bordered zero-configuration">
                              <thead>
                                 <tr>
                                   
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                 </tr>
                              </thead>
                              <tbody>
                                @foreach($data as $value)
                                 
                            <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->cat_name}}</td>
                            <td><a href="{{route('Admin.Update_testimonials',[$value->t_id])}}" class="btn btn-primary ">Edit</a></td>
                            <td><a href="{{route('Admin.Delete_testimonials',[$value->t_id])}}" class="btn btn-danger ">Delete</a></td>
                                   
                                 </tr>
                                 @endforeach
                              </tbody>
                           </table>
                         
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- // Basic form layout section end -->
      </div>
   </div>
</div>

 @endsection