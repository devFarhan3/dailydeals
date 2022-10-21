<?php include('header.php') ?>

<section class="Profile_pagess sec_arr">
    <div class="row" id="body-row">
        <!-- Sidebar -->
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
            <!-- Bootstrap List Group -->
            <ul class="list-group ">
                <li class="mt-5 text-center"> <img src="assets/imgs/Group 28.PNG" alt="" class="img-fluid">
                </li>

                <li class="mt-4 personl_det  p-4 w-75 mx-auto">
                    <div class="view ">
                        <img src="assets/imgs/Group15985.png" alt="" class="img-fluid">
                    </div>
                    <span class="ml-3  w-50">Personal Details</span>
                    <div class="row">
                        <div class="col-md-6 members">
                            <span>Member From March 2020</span>
                        </div>
                        <div class="col-md-5 ">
                            <span class="pull-right edit_bt">
                                <button type="button" class="btn btn-primary">Edit</button>

                            </span>
                        </div>

                    </div>

                </li>
                <li class="mt-4 personl_det  p-4 w-75 mx-auto activee">
                    <div class="view ">
                        <img src="assets/imgs/noun_Heart_-2.png" alt="">
                    </div>
                    <span class="ml-3  w-50">Wish List</span>


                </li>
                <li class="mt-4 personl_det  p-4 w-75 mx-auto">
                    <div class="view ">
                        <img src="assets/imgs/ticket (1).png" alt="" class="img-fluid">
                    </div>
                    <span class="ml-3  w-50">Cupons</span>
                </li>

                <li class="mt-4 personl_det  p-4 w-75 mx-auto">
                    <div class="view ">
                        <img src="assets/imgs/token.png" alt="">
                    </div>
                    <span class="ml-3  w-50">Earned Points</span>
                </li>
                <li class="mt-4 personl_det  p-4 w-75 mx-auto">
                    <div class="view ">
                        <img src="assets/imgs/ticket (1).png" alt="">
                    </div>
                    <span class="ml-3  w-50">Terms and Conditions</span>
                </li>
                <li class="mt-4 personl_det  p-4 w-75 mx-auto">
                    <div class="view ">
                        <img src="assets/imgs/ticket (1).png" alt="">
                    </div>
                    <span class="ml-3  w-50">Settings</span>
                </li>
                <li class="mt-4 personl_det  p-4 w-75 mx-auto">
                    <div class="view ">
                        <img src="assets/imgs/logout.png" alt="">
                    </div>
                    <span class="ml-3  w-50">Logout</span>
                </li>

            </ul>

            <!-- List Group END-->
        </div><!-- sidebar-container END -->
        <!-- MAIN -->
        <div class="col p-4 centerr_mb">
            <div class="row">
                <div class="col-md-10">
                    <div class="view ">
                        <img src="assets/imgs/noun_Heart_-2.png" alt="">
                    </div>
                    <span class="personal ml-3 ">Wish <span class="detail">List</span> </span>
                </div>
                <div class="col-md-2">
                    <div class="view ">
                        <img src="assets/imgs/Group15985.png" alt="" class="img-fluid"> <br><br>
                        <span class="members">Mark Collins</span>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>



            <!-- guess and wins sec -->
            <section class="currnt_deals ">
                <h2>Guess &amp; win</h2>
                <div class="container current_dealSBox ">
                    <div class="row ">

                        <div class="col-md-6 p-5 deals_pad_mb ">
                            <button type="button" class="timer_left_deals btn-primary p-3">
                                <svg viewBox="0 0 120 120">
                                    <circle cx="55" cy="55" r="50" class="solid"></circle>
                                    <foreignObject x="5" y="5" height="100px" width="100px">
                                        <div class="circle_text">100</div>
                                    </foreignObject>
                                </svg>
                                <span>Sold</span>


                                <svg viewBox="0 0 120 120">
                                    <circle cx="55" cy="55" r="50" class="solid"></circle>
                                    <foreignObject x="5" y="5" height="100px" width="100px">
                                        <div class="circle_text">100</div>
                                    </foreignObject>
                                </svg>

                            </button>
                            <div class="heart2 ml-auto ">
                                <!-- <i class="fa fa-heart-o" aria-hidden="true"></i> -->
                                <img src="assets/imgs/heart.PNG" alt="" class="img-fluid ">
                            </div>
                            <div class="text-center goldd">worth of Gold
                                <br> <span class="goldd2">AED15,000</span>
                            </div>
                            <img src="assets/imgs/gold.png" alt="" class="img-fluid cell_img">

                            <div class="text-center ">
                                <span class="buy_Pencil_2  ">
                                    Buy a pencil Set and make it yours!<br><span
                                        class="get_chance_bld_new ">AED30.00</span>
                                </span>
                                <div class="mt-3 margin_tp">
                                    <button type="button" class="btn btn-primary prize_detail p-3">Prize Details

                                    </button>
                                    <button type="button" class="btn btn-primary prize_detail p-3 ml-1 cart">
                                        <i class="fa fa-shopping-bag"></i>
                                        Add to Cart </button>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6 p-4 mt-5">
                            <div class="pull-right p-4"><i class="fa fa-share-alt" aria-hidden="true"></i>
                            </div>
                            <span class="get_chance1">Select Your Lucky Number
                                <form class="otc" name="one-time-code" action="#">
                                    <fieldset>

                                        <div class="text-center">

                                            <!-- Autocomplete not to put on other input -->
                                            <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1" value=""
                                                inputtype="numeric" id="otc-2" required="">
                                            <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1" value=""
                                                inputtype="numeric" id="otc-3" required="">
                                            <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1" value=""
                                                inputtype="numeric" id="otc-4" required="">
                                            <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1" value=""
                                                inputtype="numeric" id="otc-5" required="">
                                            <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1" value=""
                                                inputtype="numeric" id="otc-5" required="">

                                            <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1" value=""
                                                inputtype="numeric" id="otc-6" required="">
                                        </div>
                                    </fieldset>
                                </form>
                                <div class="mt-3">
                                    <div class="row md_class">
                                        <div class="col-md-6">
                                            <span class="hurry">Hurry Up and participate before Its End!</span>
                                        </div>
                                        <div class="col-md-6 mt-3 my_page">
                                            <button type="button" class="btn btn-primary prize_detail p-3 ml-3 cart">
                                                Click Here
                                            </button>

                                        </div>
                                        <div class="row text-center p-1 mt-5">
                                            <div class="col-md-4 closed1">Closing in</div>
                                            <div class="col-md-3">
                                                <div class="text-center">
                                                    <img src="assets/imgs/slider_run.PNG" alt="" class="img-fluid">

                                                </div>
                                            </div>

                                            <div class="col-md-5 closed1">26TH NOV 2021</div>


                                        </div>
                                        <div class="  ctimer text-center p-4 ">
                                            <div id="#" class="countdownHolder"><span class="countDays">
                                                    <span class="position3">
                                                        <span class="digit static"
                                                            style="top: 0px; opacity: 1;">0</span>
                                                    </span> <span class="position3">
                                                        <span class="digit static"
                                                            style="top: 0px; opacity: 1;">9</span>
                                                    </span>
                                                </span><span class="countDiv countDiv0"></span><span class="countHours">
                                                    <span class="position3">
                                                        <span class="digit static"
                                                            style="top: 0px; opacity: 1;">2</span>
                                                    </span>
                                                    <span class="position3">
                                                        <span class="digit static"
                                                            style="top: 0px; opacity: 1;">3</span>
                                                    </span>
                                                </span>
                                                <span class="countDiv countDiv1"></span><span class="countMinutes">
                                                    <span class="position">
                                                        <span class="digit static"
                                                            style="top: 0px; opacity: 1;">5</span>
                                                    </span> <span class="position3">
                                                        <span class="digit static"
                                                            style="top: 0px; opacity: 1;">9</span>
                                                    </span>
                                                </span><span class="countDiv countDiv2"></span>
                                                <span class="countSeconds"><span class="position3">
                                                        <span class="digit static"
                                                            style="top: 0px; opacity: 1;">4</span>
                                                    </span> <span class="position3">
                                                        <span class="digit static"
                                                            style="top: 0px; opacity: 1;">2</span>
                                                    </span>
                                                </span>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12 text-center P-4 font_text_sty mt-4 sec">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">Days</li>
                                                <li class="list-inline-item">Hours</li>
                                                <li class="list-inline-item">Mins</li>
                                                <li class="list-inline-item">Sec</li>

                                            </ul>
                                        </div>

                                    </div>


                                </div>
                            </span>
                        </div>


                    </div>


                </div>






            </section>

            <!-- guess and wins sec ends -->

            <section class="currnt_deals ">
                <h2>Current Deals</h2>
                <div class="container current_dealSBox ">
                    <div class="row">

                        <div class="col-md-6 p-5 ">
                            <button type="button" class="timer_left_deals btn-primary p-3">
                                <svg viewBox="0 0 120 120">
                                    <circle cx="55" cy="55" r="50" class="solid"></circle>
                                    <foreignObject x="5" y="5" height="100px" width="100px">
                                        <div class="circle_text">100</div>
                                    </foreignObject>
                                </svg>
                                <span>Sold</span>


                                <svg viewBox="0 0 120 120">
                                    <circle cx="55" cy="55" r="50" class="solid"></circle>
                                    <foreignObject x="5" y="5" height="100px" width="100px">
                                        <div class="circle_text">100</div>
                                    </foreignObject>
                                </svg>

                            </button>
                            <div class="heart2 ml-auto">
                                <!-- <i class="fa fa-heart-o" aria-hidden="true"></i> -->
                                <img src="assets/imgs/heart.PNG" alt="" class="img-fluid">
                            </div>
                            <img src="assets/imgs/JW-00034.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6 p-4 mobile_classs">
                            <div class="pull-right p-4"><i class="fa fa-share-alt" aria-hidden="true"></i>
                            </div>
                            <span class="get_chance">Get A Chance To Win <br><span class="get_chance_bld">Apple
                                    WatchSeriese 7</span> </span> <br><br>
                            <span class="buy_Pencil ">Buy a pencil Set and make it yours!<br><span
                                    class="get_chance_bld">AED30.00</span> </span>
                            <div class="mt-3">
                                <button type="button" class="btn btn-primary prize_detail p-3">Prize Details </button>
                                <button type="button" class="btn btn-primary prize_detail p-3 ml-3 cart">
                                    <i class="fa fa-shopping-bag"></i> Add to Cart </button>
                            </div>

                        </div>


                    </div>
                    <div class="container  ">
                        <div class="row text-center p-5 ">
                            <div class="col-md-4 closed">Closing in</div>
                            <div class="col-md-2">
                                <div class="text-center">
                                    <img src="assets/imgs/slider_run.PNG" alt="" class="img-fluid">

                                </div>
                            </div>

                            <div class="col-md-5 closed">26TH NOV 2021</div>


                        </div>
                    </div>


                </div>
            </section>

            <div class="container">
                <div class="row my_page">
                    <div class="col-md-10 mx-auto  ">
                        <div class="ctimer_deals text-center p-5 ">
                            <div id="#" class="countdownHolder"><span class="countDays"><span class="position_2"> <span
                                            class="digit static" style="top: 0px; opacity: 1;">0</span> </span> <span
                                        class="position_2"> <span class="digit static"
                                            style="top: 0px; opacity: 1;">9</span> </span>
                                </span><span class="countDiv countDiv0"></span><span class="countHours"><span
                                        class="position_2"> <span class="digit static"
                                            style="top: 0px; opacity: 1;">2</span> </span> <span class="position_2">
                                        <span class="digit static" style="top: 0px; opacity: 1;">3</span> </span>
                                </span><span class="countDiv countDiv1"></span><span class="countMinutes"><span
                                        class="position_2"> <span class="digit static"
                                            style="top: 0px; opacity: 1;">5</span> </span> <span class="position_2">
                                        <span class="digit static" style="top: 0px; opacity: 1;">9</span> </span>
                                </span><span class="countDiv countDiv2"></span><span class="countSeconds"><span
                                        class="position_2"> <span class="digit static"
                                            style="top: 0px; opacity: 1;">4</span> </span> <span class="position_2">
                                        <span class="digit static" style="top: 0px; opacity: 1;">2</span>
                                    </span>
                                </span>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12 text-center P-4 font_text_sty ">
                        <ul class="list-inline neww">
                            <li class="list-inline-item">Days</li>
                            <li class="list-inline-item">Hours</li>
                            <li class="list-inline-item">Mins</li>
                            <li class="list-inline-item">Sec</li>

                        </ul>
                    </div>

                </div>



            </div>

            <div class="row mt-5 ml-3">
                <div class="col-md-8 updste">

                </div>
                <div class="col-md-1">
                    <div class="view ">
                        <img src="assets/imgs/Combined Shape-1.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="view ml-2">
                        <img src="assets/imgs/Combined Shape.png" alt="" class="img-fluid">
                    </div>
                </div>


            </div>

        </div><!-- Main Col END -->
    </div><!-- body-row END -->

</section>





<?php include('footer.php') ?>


<script>
// Hide submenus
$('#body-row .collapse').collapse('hide');

// Collapse/Expand icon
$('#collapse-icon').addClass('fa-angle-double-left');

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

function SidebarCollapse() {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if (SeparatorTitle.hasClass('d-flex')) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }

    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}
</script>