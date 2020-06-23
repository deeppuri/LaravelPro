@extends('backend.layouts.master')
@section('pageContent')
<div class="app-content content container-fluid">
   <div class="content-wrapper">
      <div class="content-body">
         <!-- Basic form layout section start -->
         <section id="basic-form-layouts">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title" id="basic-layout-round-controls">Update Testimonials</h4>
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
                           <?php if (count($errors)>0):
                              ?>
                           <?php foreach ($errors->all() as $value): ?>
                           <h5 class="text-danger">{{ $value }}</h5>
                           <?php endforeach ?>
                           <?php endif ?>

                           <form class="form" action="{{route('Admin.Edit_testimonials',['id' => $testimonials->id])}}" method="post" enctype="multipart/form-data">
                              <div class="form-body">
                                 {{ csrf_field()}}
                                
                                 <div class="form-group col-md-12">
                                    <label for="complaintinput1">Name</label>
                                    <input type="text-center" name="name" value="{{$testimonials->name}}" class="form-control">
                                 </div>
                                <div class="form-group col-md-12">
                                     <img src="{{$testimonials->featured}}" alt="" style="height:100px;width:100px;border-radius:100px;">
                                    <label for="complaintinput1">Browse Picture</label>
                                    <input type="file" name="featured" name="{{$testimonials->featured}}" class="form-control bg-primary">
                                 </div>
                                 <div class="form-group col-md-12">
                                    <label for="complaintinput1">Add Content</label>
                                    <textarea name="content" id="content" cols="30"  rows="15" class="ckeditor">  
                                    {{ $testimonials->content }}                
                                    </textarea>
                                    
                                 </div>
                              </div>
                              <div class="form-actions">
                                 <button type="submit" id="btnSubmit"  class="btn btn-primary" name="save">
                                 <i class="icon-check2"></i>Update Testimonials
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