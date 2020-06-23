@extends('frontend.layouts.master')


@section('pageContent')

  
                    <div class="breadcrumbs-fs fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Pages</a><span>Contacts</span></div>
                        </div>
                    </div>
                    <section  id="sec1" class="grey-b lue-bg middle-padding">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <!--   list-single-main-item -->
                                    <div class="list-single-main-item fl-wrap">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Our Office </h3>
                                        </div>
                                        <div class="list-single-main-media fl-wrap">
                                            <img src="images/all/8.jpg" alt="" class="respimg">
                                        </div>
                                        <p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor.   </p>
                                        <div class="list-single-main-item-title fl-wrap mar-top">
                                            <h3>Working Hours </h3>
                                        </div>
                                        <ul class="cat-item">
                                            <li><a href="#">Monday to Friday</a> <span>9am - 7pm</span></li>
                                            <li><a href="#">Saturday to Sunday </a> <span>Closed</span></li>
                                        </ul>
                                    </div>
                                    <!--   list-single-main-item end -->
                                </div>
                                <div class="col-md-8">
                                    <div class="list-single-main-item fl-wrap">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Get In Touch</h3>
                                        </div>
                                        <div id="contact-form">
                                            <div id="message"></div>
                                            <form  class="custom-form" action="http://easybook.kwst.net/php/contact.php" name="contactform" id="contactform">
                                                <fieldset>
                                                    <label><i class="fal fa-user"></i></label>
                                                    <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                                                    <div class="clearfix"></div>
                                                    <label><i class="fal fa-envelope"></i>  </label>
                                                    <input type="text"  name="email" id="email" placeholder="Email Address*" value=""/>
                                                    
                                                    <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                                </fieldset>
                                                <button class="btn float-btn color2-bg" style="margin-top:15px;" id="submit">Send Message<i class="fal fa-angle-right"></i></button>
                                            </form>
                                        </div>
                                        <!-- contact form  end--> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-decor"></div>
                    </section>
                    <!-- section end -->


@endsection