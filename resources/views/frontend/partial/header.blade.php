 <div class="loader-wrap">
            <div class="pin">
                <div class="pulse"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <!-- header-->
            <header class="main-header">
                <!-- header-top-->
                <div class="header-top fl-wrap">
                    <div class="container">
                        <div class="logo-holder">
                            <a href=""><img src="{{URL::asset('resources/images/logo.png')}}" alt=""></a>
                        </div>
                        <a href="dashboard-add-listing.html" class="add-hotel">Add Your Hotel <span><i class="far fa-plus"></i></span></a>
                        <div class="show-reg-form"><i class="fa fa-sign-in"></i><a href="{{route('/Register')}}" style="color:#fff">Sign In</a></div>
                         <div class="show-reg-form"><i class="fa fa-sign-in"></i><a href="{{route('/Login')}}" style="color:#fff">Login</a></div>
                        <div class="lang-wrap">
                             <div class="show-lang"><img src="{{URL::asset('resources/images/lan/1.png')}}" alt=""> <span>Eng</span><i class="fa fa-caret-down"></i></div>
                            <ul class="lang-tooltip green-bg">
                                <li><a href="#"><img src="{{URL::asset('resources/images/lan/4.png')}}" alt=""> De</a></li>
                                <li><a href="#"><img src="{{URL::asset('resources/images/lan/5.png')}}" alt=""> It</a></li>
                                <li><a href="#"><img src="{{URL::asset('resources/images/lan/2.png')}}" alt=""> Fr</a></li>
                                <li><a href="#"><img src="{{URL::asset('resources/images/lan/3.png')}}" alt=""> Es</a></li>
                            </ul>
                        </div>
                        <div class="currency-wrap">
                            <div class="show-currency-tooltip"><i class="fas fa-dollar-sign"></i> <span>USD <i class="fa fa-caret-down"></i> </span></div>
                            <ul class="currency-tooltip">
                                <li><a href="#"><i class="far fa-euro-sign"></i> EUR</a></li>
                                <li><a href="#"><i class="far fa-pound-sign"></i> GBP</a></li>
                                <li><a href="#"><i class="far fa-ruble-sign"></i>RUR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- header-top end-->
                <!-- header-inner-->
                <div class="header-inner fl-wrap">
                    <div class="container">
                        <div class="show-search-button"><span>Search</span> <i class="fas fa-search"></i> </div>
                        <div class="wishlist-link"><i class="fal fa-heart"></i><span class="wl_counter">3</span></div>
                        <div class="header-user-menu">
                            <div class="header-user-name">
                                <span><img src="{{URL::asset('resources/images/avatar/4.jpg')}}" alt=""></span>
                                My account
                            </div>
                            <ul>
                                <li><a href="dashboard-myprofile.html"> Edit profile</a></li>
                                <li><a href="dashboard-add-listing.html"> Add Listing</a></li>
                                <li><a href="dashboard-bookings.html">  Bookings  </a></li>
                                <li><a href="dashboard-review.html"> Reviews </a></li>
                                <li><a href="#">Log Out</a></li>
                            </ul>
                        </div>
                        <div class="home-btn"><a href="index.html"><i class="fas fa-home"></i></a></div>
                        <!-- nav-button-wrap-->
                        <div class="nav-button-wrap color-bg">
                            <div class="nav-button">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <!-- nav-button-wrap end-->
                        <!--  navigation -->
                        <div class="nav-holder main-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#" class="act-link">Home </a>
                                        <!--second level -->
                                    
                                    </li>
                                  
                                     <li>
                                        <a href="{{route('/about')}}" >About Us </a>
                                        <!--second level -->
                                    
                                    </li>
                                     <li>
                                        <a href="{{route('/pricing')}}" >Pricing </a>
                                        <!--second level -->
                                    
                                    </li>
                                     <li>
                                        <a href="{{route('/booking')}}" >Booking </a>
                                        <!--second level -->
                                    
                                    </li>
                                    

                                   
                                </ul>
                            </nav>
                        </div>
                        <!-- navigation  end -->
                        <!-- wishlist-wrap-->
                        <div class="wishlist-wrap scrollbar-inner novis_wishlist">
                            <div class="box-widget-content">
                                <div class="widget-posts fl-wrap">
                                    <ul>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="{{URL::asset('resources/images/gal/7.jpg')}}" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Park Central</a>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 JOURNAL SQUARE PLAZA, NJ, US</a></div>
                                                <span class="rooms-price">$80 <strong> /  Awg</strong></span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="{{URL::asset('resources/images/gal/8.jpg')}}" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Holiday Home</a>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 75 PRINCE ST, NY, USA</a></div>
                                                <span class="rooms-price">$50 <strong> /   Awg</strong></span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="{{URL::asset('resources/images/gal/9.jpg')}}" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Moonlight Hotel</a>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  70 BRIGHT ST NEW YORK, USA</a></div>
                                                <span class="rooms-price">$105 <strong> /  Awg</strong></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- wishlist-wrap end-->
                    </div>
                </div>
                <!-- header-inner end-->
                <!-- header-search -->
                <div class="header-search vis-search">
                    <div class="container">
                        <div class="row">
                            <!-- header-search-input-item -->
                            <div class="col-sm-4">
                                <div class="header-search-input-item fl-wrap location autocomplete-container">
                                    <label>Destination or Hotel Name</label>
                                    <span class="header-search-input-item-icon"><i class="fal fa-map-marker-alt"></i></span>
                                    <input type="text" placeholder="Location" class="autocomplete-input" id="autocompleteid" value=""/>
                                    <a href="#"><i class="fal fa-dot-circle"></i></a>
                                </div>
                            </div>
                            <!-- header-search-input-item end -->
                            <!-- header-search-input-item -->
                            <div class="col-sm-3">
                                <div class="header-search-input-item fl-wrap date-parent">
                                    <label>Date In-Out </label>
                                    <span class="header-search-input-item-icon"><i class="fal fa-calendar-check"></i></span>
                                    <input type="text" placeholder="When" name="header-search"   value=""/>
                                </div>
                            </div>
                            <!-- header-search-input-item end -->
                            <!-- header-search-input-item -->
                            <div class="col-sm-3">
                                <div class="header-search-input-item fl-wrap">
                                    <div class="quantity-item">
                                        <label>Rooms</label>
                                        <div class="quantity">
                                            <input type="number" min="1" max="3" step="1" value="1">
                                        </div>
                                    </div>
                                    <div class="quantity-item">
                                        <label>Adults</label>
                                        <div class="quantity">
                                            <input type="number" min="1" max="3" step="1" value="1">
                                        </div>
                                    </div>
                                    <div class="quantity-item">
                                        <label>Children</label>
                                        <div class="quantity">
                                            <input type="number" min="0" max="3" step="1" value="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- header-search-input-item end -->
                            <!-- header-search-input-item -->
                            <div class="col-sm-2">
                                <div class="header-search-input-item fl-wrap">
                                    <button class="header-search-button" onclick="window.location.href='listing.html'">Search <i class="far fa-search"></i></button>
                                </div>
                            </div>
                            <!-- header-search-input-item end -->
                        </div>
                    </div>
                    <div class="close-header-search"><i class="fal fa-angle-double-up"></i></div>
                </div>
                <!-- header-search  end -->
            </header>
               <div id="wrapper">
                <!-- content-->
                <div class="content">