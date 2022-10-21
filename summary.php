<?php include('header.php') ?>

<section class="sec_arr summary_one">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span class="address">Summary</span>

            </div>
            <div class="col-md-6">
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li id="account"></li>
                        <li id="personal"></li>
                        <li id="payment" class="active"></li>
                    </ul> <!-- fieldsets -->


                </form>
            </div>

            <div class="col-md-4">
                <span class="pay_met">Payment method</span>
                <div class="row">
                    <div class="col-md-4">
                        <div class="border_pay">
                            <img src="assets/imgs/Paypal.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border_pay">
                            <img src="assets/imgs/Visa.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border_pay">
                            <img src="assets/imgs/Mastercard.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="border_pay">
                            <img src="assets/imgs/Maestro.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border_pay">
                            <img src="assets/imgs/Discover.png" alt="" class="img-fluid">
                        </div>
                    </div>                  
                    <div class="col-md-4">
                        <div class="border_pay">
                            <img src="assets/imgs/iDEAL.png" alt="" class="img-fluid">
                        </div>
                    </div>     
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <span class="pay_met">Address delivery</span>
                <div class="mt-3 w-50">
                <span class="deliber_txt">Beatrice Waddle 1391 Single Street. Chicago, MA 02129 USA +5 781-644-3627 BeatriceLWaddle@rhyta.com</span>

                </div>
            </div>


        </div>
    </div>
</section>

<section class="check_out mt-3 PAYMENT_page ">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container mb-4 ">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table  ">
                                    <!-- <thead>
                                        <tr class="table_clr">
                                            <th scope="col">Product</th>
                                            <th scope="col">Product Section</th>
                                            <th scope="col" class="text-center">QTY</th>
                                            <th scope="col" class="text-center">Price</th>
                                            <th scope="col" class="text-center">Delete</th>

                                            <th> </th>

                                        </tr>
                                    </thead> -->
                                    <tbody>
                                        <tr>
                                            <td class="col-sm-1 col-md-3">
                                                <div>
                                                    <a class="thumbnail pull-left" href="#">
                                                        <img src="assets/imgs/CG-1.png" class="img-fluid borderr_img">
                                                    </a>

                                                    <h4 class="media-heading"><a href="#"> <span class="h2_head ml-3">H2
                                                                Hoddies To Win <br> Apple
                                                                WatchSeriese 7 </span> </a></h4>
                                                    <h5 class="media-heading donate ml-3">
                                                        <a href="#">You Will Get <span class="coupons">2
                                                                Cupons</span> per
                                                            <br>
                                                            Unit if Donate</a>
                                                    </h5>


                                                </div>
                                            </td>
                                            <td class="col-sm-1 col-md-3">
                                                <div>
                                                    <button type="button" value="4"
                                                        class="btn btn-light GUSSS_bt ">11</button>
                                                    <button type="button" value="4"
                                                        class="btn btn-light GUSSS_bt ">43</button>

                                                    <button type="button" value="4"
                                                        class="btn btn-light GUSSS_bt ">78</button>

                                                    <button type="button" value="4"
                                                        class="btn btn-light GUSSS_bt ">09</button>
                                                    <button type="button" value="4"
                                                        class="btn btn-light GUSSS_bt ">08</button>
                                                    <button type="button" value="4"
                                                        class="btn btn-light GUSSS_bt ">34</button>
                                                    <button type="button" value="4"
                                                        class="btn btn-light GUSSS_bt ">43</button>

                                                    <button type="button" value="4"
                                                        class="btn btn-light GUSSS_bt ">78</button>
                                                    <button type="button" value="4"
                                                        class="btn btn-light GUSSS_bt ">43</button>




                                                </div>
                                            </td>
                                            <td class="col-sm-1 col-md-1 text-center">

                                                <div class="input-group mt-5 chk_inpt border rounded  ">
                                                    <span class="input-group-prepend check_btn">
                                                        <button type="button" class="btn  " data-type="minus"
                                                            data-field="quant[1]">
                                                            <span class="fa fa-minus"></span>
                                                        </button>
                                                    </span>
                                                    <input type="text" name="quant[1]" class="form-control input-number"
                                                        value="1" min="1" max="10">
                                                    <span class="input-group-append check_btn">
                                                        <button type="button" class="btn  btn-number" data-type="plus"
                                                            data-field="quant[1]">
                                                            <span class="fa fa-plus"></span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="col-sm-1 col-md-3 text-center  ">
                                                <span class=" mt-5"></span>

                                                <strong class="aed_dolar">
                                                    <span class=" mt-5">AED 650.00</span></strong>
                                            </td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>


<!-- product wants sec ends -->
<div class="clearfix mb-5">

</div>

<hr class="mt-5">

<section class="check_out mt-3">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container mb-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table  ">

                                    <tbody>
                                        <tr>
                                            <td class="col-sm-1 col-md-3">
                                                <div>
                                                    <a class="thumbnail pull-left" href="#">
                                                        <img src="assets/imgs/CG-1.png" class="img-fluid borderr_img">
                                                    </a>

                                                    <h4 class="media-heading"><a href="#"> <span class="h2_head ml-3">H2
                                                                Hoddies To Win <br> Apple
                                                                WatchSeriese 7 </span> </a></h4>
                                                    <h5 class="media-heading donate ml-3">
                                                        <a href="#">You Will Get <span class="coupons">2
                                                                Cupons</span> per
                                                            <br>
                                                            Unit if Donate</a>
                                                    </h5>


                                                </div>
                                            </td>
                                            <td class="col-sm-1 col-md-3">
                                                <span class="aed_dolarsss">Current Deal</span>
                                            </td>
                                            <td class="col-sm-1 col-md-1 text-center">

                                                <div class="input-group mt-5 chk_inpt border rounded  ">
                                                    <span class="input-group-prepend check_btn">
                                                        <button type="button" class="btn  " data-type="minus"
                                                            data-field="quant[1]">
                                                            <span class="fa fa-minus"></span>
                                                        </button>
                                                    </span>
                                                    <input type="text" name="quant[1]" class="form-control input-number"
                                                        value="1" min="1" max="10">
                                                    <span class="input-group-append check_btn">
                                                        <button type="button" class="btn  btn-number" data-type="plus"
                                                            data-field="quant[1]">
                                                            <span class="fa fa-plus"></span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="col-sm-1 col-md-3 text-center  ">
                                                <span class=" mt-5"></span>

                                                <strong class="aed_dolar">
                                                    <span class=" mt-5">AED 650.00</span></strong>
                                            </td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>


<!-- new table -->


<section class="check_out mt-3">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container mb-4">
                    <div class="row ">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table  ">
                                    <thead>
                                        <tr class="table_clr_blk">
                                            <th scope="col">Total cost</th>
                                            <th scope="col"> </th>
                                            <th scope="col" class="text-center"></th>
                                            <th scope="col" class="text-center"></th>
                                            <th scope="col" class="text-center">AED159.00</th>

                                            <th> </th>

                                        </tr>
                                    </thead>

                                </table>

                            </div>
                        </div>


                    </div>
                </div>





            </div>
        </div>

    </div>
</section>

<section class=" pay_now mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <i class="fa fa-arrow-left"></i>
                <span class="countine ml-2 ">Back</span>
            </div>
            <div class="col-md-2  "></div>

            <div class="col-md-2 check_outtt23 ">
                <button type="button" class="btn btn-primary">CONTINUE SHOPPING</button>

            </div>
            <div class="col-md-2 check_outtt1 ">

                <button type="button" class="btn btn-primary">PAY NOW</button>

            </div>
        </div>
    </div>
</section>


<section class="closing_deals mt-5">
    <div class="container">
        <span class="closes">CLOSING SOON</span>

        <div class="row">

            <div class="col-md-6 d-flex">
                <div class="row bg_closing p-4">
                    <div class="col-md-6">

                        <img src="assets/imgs/gold.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">

                        <span class="shop_txt">Shop the new <br> <span class="shop_txt1">Pencil and get inrolled In <br>
                                lucky Draw</span> </span>
                        <p class="price_1"> AED 50.00</p>
                        <button type="button" class="btn btn-primary view_detail">VIEW DETAIL</button>

                    </div>

                </div>

            </div>
            <div class="col-md-6 ">
                <div class="row bg_closing_2 p-4">
                    <div class="col-md-6">

                        <img src="assets/imgs/New-CR-00054-Combine.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary hot_deals">New Hot Deals </button>
                        <div class="clearfix"></div>

                        <span class="shop_txt ">Shop the new <br> <span class="shop_txt1">Pencil and get inrolled In
                                <br> lucky Draw</span> </span>
                        <p class="price_1"> AED 50.00</p>
                        <button type="button" class="btn btn-primary view_detail">VIEW ALL </button>

                    </div>

                </div>

            </div>


        </div>

    </div>
</section>

<?php include('footer.php') ?>

<script>
$(document).ready(function() {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;

    $(".next").click(function() {

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({
                    'opacity': opacity
                });
            },
            duration: 600
        });
    });

    $(".previous").click(function() {

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({
                    'opacity': opacity
                });
            },
            duration: 600
        });
    });

    $('.radio-group .radio').click(function() {
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });

    $(".submit").click(function() {
        return false;
    })

});
</script>