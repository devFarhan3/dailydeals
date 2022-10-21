<!--footer starts from here-->
<footer class="footer">
    <div class="container ">
        <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                <img src="assets/imgs/footer_logo.PNG" alt="" class="img-fluid">
                <!--headin5_amrc-->
                <p class="mb10">
                    House My Brand designs clothing for the young, the old & everyone in between – but most importantly,
                    for the fashionable



            </div>


            <div class=" col-sm-4 col-md  col-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="#">Order Status </a></li>
                    <li><a href="#">Shipping and Delivery </a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#"> Payment Options </a></li>
                    <li><a href="#">Hair Masking/Clipping</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>


            <div class=" col-sm-4 col-md  col-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#"> FAQs </a></li>
                    <li><a href="#">How it Works </a></li>
                    <li><a href="#"> Charities</a></li>
                    <li><a href="#">Hair Masking/Clipping</a></li>
                    <li><a href="#"> Campaign Draw Terms & Conditions</a></li>
                </ul>
                <span >Say Hello To our Latest App on store</span>

                <!--footer_ul_amrc ends here-->
            </div>


            <div class=" col-sm-4 col-md  col-12 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Payment method</h5>
                <!--headin5_amrc ends here-->

                <!-- <ul class="footer_ul2_amrc">
  <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
  <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
  <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
  </ul> -->

                <img src="assets/imgs/paymentoption.PNG" alt="" class="img-fluid">
                <!--footer_ul2_amrc ends here-->
            </div>
        </div>
    </div>


    <div class="container">
        <ul class="foote_bottom_ul_amrc">
            <li>
                <a href="">
                    <img src="assets/imgs/002-facebook-logo.png" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="assets/imgs/001-twitter-logo-silhouette.png" alt="">
                </a>
            </li>
            </li>
            <li>
                <a href="">
                    <img src="assets/imgs/004-linkedin-logo.png" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="assets/imgs/instagram (1).png" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="assets/imgs/005-youtube.png" alt="">
                </a>
            </li>

            <li> 
            </li>
        </ul>
        <!--foote_bottom_ul_amrc ends here-->
        <p class="text-center">Daily Deals-©2021. ALL RIGHTS RESERVED.</a>
        </p>


    </div>

</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="assets/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
(function($) {

    // Number of seconds in every time division
    var days = 24 * 60 * 60,
        hours = 60 * 60,
        minutes = 60;

    // Creating the plugin
    $.fn.countdown = function(prop) {

        var options = $.extend({
            callback: function() {},
            timestamp: 0
        }, prop);

        var left, d, h, m, s, positions;

        // Initialize the plugin
        init(this, options);

        positions = this.find('.position');

        (function tick() {

            // Time left
            left = Math.floor((options.timestamp - (new Date())) / 1000);

            if (left < 0) {
                left = 0;
            }

            // Number of days left
            d = Math.floor(left / days);
            updateDuo(0, 1, d);
            left -= d * days;

            // Number of hours left
            h = Math.floor(left / hours);
            updateDuo(2, 3, h);
            left -= h * hours;

            // Number of minutes left
            m = Math.floor(left / minutes);
            updateDuo(4, 5, m);
            left -= m * minutes;

            // Number of seconds left
            s = left;
            updateDuo(6, 7, s);

            // Calling an optional user supplied callback
            options.callback(d, h, m, s);

            // Scheduling another call of this function in 1s
            setTimeout(tick, 1000);
        })();

        // This function updates two digit positions at once
        function updateDuo(minor, major, value) {
            switchDigit(positions.eq(minor), Math.floor(value / 10) % 10);
            switchDigit(positions.eq(major), value % 10);
        }

        return this;
    };


    function init(elem, options) {
        elem.addClass('countdownHolder');

        // Creating the markup inside the container
        $.each(['Days', 'Hours', 'Minutes', 'Seconds'], function(i) {
            $('<span class="count' + this + '">').html(
                '<span class="position">\
					<span class="digit static">0</span>\
				</span>\
				<span class="position">\
					<span class="digit static">0</span>\
				</span>'
            ).appendTo(elem);

            if (this != "Seconds") {
                elem.append('<span class="countDiv countDiv' + i + '"></span>');
            }
        });

    }

    // Creates an animated transition between the two numbers
    function switchDigit(position, number) {

        var digit = position.find('.digit')

        if (digit.is(':animated')) {
            return false;
        }

        if (position.data('digit') == number) {
            // We are already showing this number
            return false;
        }

        position.data('digit', number);

        var replacement = $('<span>', {
            'class': 'digit',
            css: {
                top: '-2.1em',
                opacity: 0
            },
            html: number
        });

        // The .static class is added when the animation
        // completes. This makes it run smoother.

        digit
            .before(replacement)
            .removeClass('static')
            .animate({
                top: '2.5em',
                opacity: 0
            }, 'fast', function() {
                digit.remove();
            })

        replacement
            .delay(100)
            .animate({
                top: 0,
                opacity: 1
            }, 'fast', function() {
                replacement.addClass('static');
            });
    }
})(jQuery);

// other one
$(function() {

    var note = $('#note'),
        ts = new Date(2012, 0, 1),
        newYear = true;

    if ((new Date()) > ts) {
        // The new year is here! Count towards something else.
        // Notice the *1000 at the end - time must be in milliseconds
        ts = (new Date()).getTime() + 10 * 24 * 60 * 60 * 1000;
        newYear = false;
    }

    $('#countdown').countdown({
        timestamp: ts,
        callback: function(days, hours, minutes, seconds) {

            var message = "";

            message += days + " day" + (days == 1 ? '' : 's') + ", ";
            message += hours + " hour" + (hours == 1 ? '' : 's') + ", ";
            message += minutes + " minute" + (minutes == 1 ? '' : 's') + " and ";
            message += seconds + " second" + (seconds == 1 ? '' : 's') + " <br />";

            if (newYear) {
                message += "left until the new year!";
            } else {
                message += "left to 10 days from now!";
            }

            note.html(message);
        }
    });

});
</script>

<script>
$(document).ready(function() {

    $('.owl-carousel').owlCarousel({
        mouseDrag: false,
        loop: true,
        margin: 24,
        nav: true,
        dots: false,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 3
            },
            600: {
                items: 1
            },
            
        }
    });

    $('.owl-prev').click(function() {
        $active = $('.owl-item .item.show');
        $('.owl-item .item.show').removeClass('show');
        $('.owl-item .item').removeClass('next');
        $('.owl-item .item').removeClass('prev');
        $active.addClass('next');
        if ($active.is('.first')) {
            $('.owl-item .last').addClass('show');
            $('.first').addClass('next');
            $('.owl-item .last').parent().prev().children('.item').addClass('prev');
        } else {
            $active.parent().prev().children('.item').addClass('show');
            if ($active.parent().prev().children('.item').is('.first')) {
                $('.owl-item .last').addClass('prev');
            } else {
                $('.owl-item .show').parent().prev().children('.item').addClass('prev');
            }
        }
    });

    $('.owl-next').click(function() {
        $active = $('.owl-item .item.show');
        $('.owl-item .item.show').removeClass('show');
        $('.owl-item .item').removeClass('next');
        $('.owl-item .item').removeClass('prev');
        $active.addClass('prev');
        if ($active.is('.last')) {
            $('.owl-item .first').addClass('show');
            $('.owl-item .first').parent().next().children('.item').addClass('prev');
        } else {
            $active.parent().addClass('show');
            if ($active.parent().next().children('.item').is('.last')) {
                $('.owl-item .first').addClass('next');
            } else {
                $('.owl-item .show').parent().next().children('.item').addClass('next');
            }
        }
    });

});
</script>


<!-- WINNERS SCRIPT CARASOUL -->
<SCRIpt>
// optional
$('#blogCarousel').carousel({
    interval: 5000
});
</SCRIpt>

</body>

</html>