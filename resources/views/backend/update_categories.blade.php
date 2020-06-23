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
                     <h4 class="card-title" id="basic-layout-round-controls">Update Categories</h4>
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
                      

                        <form class="form" action="{{ route('Admin.Update_categories',['id' => $categories->id]) }}" method="post">
                          {{ csrf_field()}}
                           <div class="form-body">
                              <div class="form-group">
                                 <label for="complaintinput1">Categories Name</label>
                                 <input type="text" class="form-control round" placeholder="Enter Category Name" value="{{$categories->name}}" name="name">
                              </div>
                              <div class="form-actions">
                                 <button type="submit" id="btnSubmit" name="submit" class="btn btn-primary">
                                 <i class="icon-check2"></i> Update
                                 </button>
                              </div>
                        </form>
                      <!--   <script type="text/javascript">
                           $(document).ready(function (e) {
                             $("#frm").on('submit',(function(e) {
                               e.preventDefault();
                               $.ajax({   
                                     url: "add_cat.php",
                                 type: "POST",
                                 data:  new FormData(this),
                                 contentType: false,
                                     cache: false,
                                 processData:false,
                                 success: function(data) {
                                           $('#alert').fadeIn().html(data);
                                   setTimeout(function() {
                                   $('#alert').fadeOut("slow");
                                   }, 1000 );
                                   $("form").trigger("reset");
                           
                                   }
                                });
                             }));
                           });
                        </script> -->
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