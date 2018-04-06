<script type="text/javascript" src="{{ asset('web/js/jquery-2.1.4.min.js') }}"></script>
<!-- //js -->
<script src="{{ asset('web/js/modernizr.custom.js') }}"></script>
<!-- Custom-JavaScript-File-Links -->
<!-- cart-js -->
<script src="{{ asset('web/js/minicart.min.js') }}"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>

<!-- //cart-js -->
<!-- script for responsive tabs -->
<script src="{{ asset('web/js/easy-responsive-tabs.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!-- //script for responsive tabs -->
<!-- stats -->
<script src="{{ asset('web/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('web/js/jquery.countup.js') }}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('web/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/jquery.easing.min.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="{{ asset('web/js/bootstrap.js') }}"></script>