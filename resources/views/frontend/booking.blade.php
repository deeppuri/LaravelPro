@extends('frontend.layouts.master')


@section('pageContent')
  
<div class="breadcrumbs-fs fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Pages</a><span>Booking Page</span></div>
                        </div>
                    </div>
                    <section class="middle-padding gre y-blue-bg">
                        <div class="container">
                            <div class="list-main-wrap-title single-main-wrap-title fl-wrap">
                                <h2>Booking form for : <span>Park Central</span></h2>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="bookiing-form-wrap">
                                        <ul id="progressbar">
                                            <li class="active"><span>01.</span>Personal Info</li>
                                            <li><span>02.</span>Billing Address</li>
                                            <li><span>03.</span>Payment Method</li>
                                            <li><span>04.</span>Confirm</li>
                                        </ul>
                                        <!--   list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                                            <div class="profile-edit-container">
                                                <div class="custom-form">
                                                    <form>
                                                        <fieldset class="fl-wrap">
                                                            <div class="list-single-main-item-title fl-wrap">
                                                                <h3>Your personal Information</h3>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>First Name <i class="far fa-user"></i></label>
                                                                    <input type="text" placeholder="Your Name" value=""/>                                                  
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Last Name <i class="far fa-user"></i></label>
                                                                    <input type="text" placeholder="Your Last Name" value=""/> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Email Address<i class="far fa-envelope"></i>  </label>
                                                                    <input type="text" placeholder="yourmail@domain.com" value=""/>                                                  
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Phone<i class="far fa-phone"></i>  </label>
                                                                    <input type="text" placeholder="87945612233" value=""/>
                                                                </div>
                                                            </div>
                                                            <div class="log-massage">Existing Customer? <a href="#" class="modal-open">Click here to login</a></div>
                                                            <div class="log-separator fl-wrap"><span>or</span></div>
                                                            <div class="soc-log fl-wrap">
                                                                <p>For faster login or register use your social account.</p>
                                                                <a href="#" class="facebook-log"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                                                            </div>
                                                            <div class="filter-tags">
                                                                <input id="check-a" type="checkbox" name="check">
                                                                <label for="check-a">By continuing, you agree to the<a href="#" target="_blank">Terms and Conditions</a>.</label>
                                                            </div>
                                                            <span class="fw-separator"></span>
                                                            <a  href="#"  class="next-form action-button btn no-shdow-btn color-bg">Billing Address <i class="fal fa-angle-right"></i></a>
                                                        </fieldset>
                                                        <fieldset class="fl-wrap">
                                                            <div class="list-single-main-item-title fl-wrap">
                                                                <h3>Billing Address</h3>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>City <i class="fal fa-globe-asia"></i></label>
                                                                    <input type="text" placeholder="Your city" value=""/>                                                  
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Country </label>
                                                                    <div class="listsearch-input-item ">
                                                                        <select data-placeholder="Your Country" class="chosen-select no-search-select" >
                                                                            <option>United states</option>
                                                                            <option>Asia</option>
                                                                            <option>Australia</option>
                                                                            <option>Europe</option>
                                                                            <option>South America</option>
                                                                            <option>Africa</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label>Street <i class="fal fa-road"></i> </label>
                                                                    <input type="text" placeholder="Your Street" value=""/>                                                  
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                    <label>State<i class="fal fa-street-view"></i></label>
                                                                    <input type="text" placeholder="Your State" value=""/>                                                  
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label>Postal code<i class="fal fa-barcode"></i> </label>
                                                                    <input type="text" placeholder="123456" value=""/>
                                                                </div>
                                                            </div>
                                                            <div class="list-single-main-item-title fl-wrap">
                                                                <h3>Addtional Notes</h3>
                                                            </div>
                                                            <textarea cols="40" rows="3" placeholder="Notes"></textarea>
                                                            <span class="fw-separator"></span>
                                                            <a  href="#"  class="previous-form action-button back-form   color-bg"><i class="fal fa-angle-left"></i> Back</a>
                                                            <a  href="#"  class="next-form back-form action-button btn no-shdow-btn color-bg">Payment Step <i class="fal fa-angle-right"></i></a>
                                                        </fieldset>
                                                        <fieldset class="fl-wrap">
                                                            <div class="list-single-main-item-title fl-wrap">
                                                                <h3>Payment method</h3>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Cardholder's Name<i class="far fa-user"></i></label>
                                                                    <input type="text" placeholder="" value="Adam Kowalsky"/>                                                  
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Card Number <i class="fal fa-credit-card-front"></i></label>
                                                                    <input type="text" placeholder="xxxx-xxxx-xxxx-xxxx" value=""/> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <label>Expiry Month<i class="fal fa-calendar"></i></label>
                                                                    <input type="text" placeholder="MM" value=""/>                                                  
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label>Expiry Year<i class="fal fa-calendar"></i></label>
                                                                    <input type="text" placeholder="YY" value=""/>                                                  
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label>CVV / CVC *<i class="fal fa-credit-card"></i></label>
                                                                    <input type="password" placeholder="***" value=""/> 
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <p style="padding-top:20px;">*Three digits number on the back of your card</p>
                                                                </div>
                                                            </div>
                                                            <div class="log-separator fl-wrap"><span>or</span></div>
                                                            <div class="soc-log fl-wrap">
                                                                <p>Select Other Payment Method</p>
                                                                <a href="#" class="paypal-log"><i class="fab fa-paypal"></i>Pay With Paypal</a>
                                                            </div>
                                                            <span class="fw-separator"></span>
                                                            <a  href="#"  class="previous-form  back-form action-button    color-bg"><i class="fal fa-angle-left"></i> Back</a>
                                                            <a  href="#"  class="next-form  action-button btn color2-bg no-shdow-btn">Confirm and Pay<i class="fal fa-angle-right"></i></a>                                               
                                                        </fieldset>
                                                        <fieldset class="fl-wrap">
                                                            <div class="list-single-main-item-title fl-wrap">
                                                                <h3>Confirmation</h3>
                                                            </div>
                                                            <div class="success-table-container">
                                                                <div class="success-table-header fl-wrap">
                                                                    <i class="fal fa-check-circle decsth"></i>
                                                                    <h4>Thank you. Your reservation has been received.</h4>
                                                                    <div class="clearfix"></div>
                                                                    <p>Your payment has been processed successfully.</p>
                                                                    <a href="invoice.html" target="_blank" class="color-bg">View Invoice</a>
                                                                </div>
                                                            </div>
                                                            <span class="fw-separator"></span>
                                                            <a  href="#"  class="previous-form action-button  back-form   color-bg"><i class="fal fa-angle-left"></i> Back</a>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--   list-single-main-item end -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box-widget-item-header">
                                        <h3> Your  cart</h3>
                                    </div>
                                    <!--cart-details  --> 
                                    <div class="cart-details fl-wrap">
                                        <!--cart-details_header--> 
                                        <div class="cart-details_header">
                                            <a href="#"  class="widget-posts-img"><img src="images/gal/3.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Park Central</a>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 JOURNAL SQUARE PLAZA, NJ, US</a></div>
                                            </div>
                                        </div>
                                        <!--cart-details_header end-->       
                                        <!--ccart-details_text-->          
                                        <div class="cart-details_text">
                                            <ul class="cart_list">
                                                <li>Room Type <span>Standard Family Room <strong>$81</strong></span></li>
                                                <li>From <span>02-11-18</span></li>
                                                <li>To <span>04-11-18</span></li>
                                                <li>Days<span>3 </span></li>
                                                <li>Adults <span>2</span></li>
                                                <li>Childs <span>1 <strong>-10%</strong></span></li>
                                                <li>Taxes And Fees <span><strong>$12</strong></span></li>
                                            </ul>
                                        </div>
                                        <!--cart-details_text end --> 
                                    </div>
                                    <!--cart-details end --> 
                                    <!--cart-total --> 
                                    <div class="cart-total">
                                        <span class="cart-total_item_title">Total Cost</span>
                                        <strong>$690</strong>                                
                                    </div>
                                    <!--cart-total end -->                             
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->


@endsection