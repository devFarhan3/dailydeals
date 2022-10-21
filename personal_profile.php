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
                <li class="mt-4 personl_det  p-4 w-75 mx-auto">
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
        <div class="col p-4 cell_respons">
            <div class="row">
                <div class="col-md-10">
                    <span class="personal">Personal <span class="detail">Detail</span> </span>
                </div>
                <div class="col-md-2">
                    <div class="view ">
                        <img src="assets/imgs/Group15985.png" alt="" class="img-fluid"> <br><br>
                        <span class="members">Mark Collins</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="col form_personal">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="col form_personal">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="col form_personal">
                        <input type="email" class="form-control" placeholder="Email" aria-label="First name">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="col form_personal">
                        <input type="num" class="form-control" placeholder="+971" aria-label="">
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="col form_personal">
                        <input type="email" class="form-control" placeholder="Please Select Nationality"
                            aria-label="First name">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="col form_personal">
                        <input type="num" class="form-control" placeholder="Please Select Country" aria-label="">
                    </div>

                </div>

                <div class="col-md-2 ml-4 mt-4">
                    <label class="container_1 labels">Male
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-md-2  ml-4 mt-4">
                    <label class="container_1 labels">Female
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="clearfix"></div>









            </div>

            <div class="row mt-5 ml-3">
                <div class="col-md-8 updste">
                    <button type="button" class="btn btn-secondary">Update</button>

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