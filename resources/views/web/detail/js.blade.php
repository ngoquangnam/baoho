<script type="text/javascript" src="{{ asset('web/js/jquery-2.1.4.min.js') }}"></script>
<!-- //js -->
<script src="{{ asset('web/js/modernizr.custom.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<!-- Custom-JavaScript-File-Links -->
<!-- cart-js -->
<script type="text/javascript">

    var app = new Vue({
  el: '#app',
  data: {
    product_id: 0,
    product_image: '',
    item_name: '',
    price: 0,
    amount: 0,
    cart: [
        {

        }
    ],

  },
   computed: {
    cart_item: {
        get: function(){
            return this.cart;
        },
        set: function(item){
            var item = item.split(',');
            this.cart.push({
                item_name: item[0],
                price: item[1],
            })
        }

    },
    total: function(){
        var price = 0;
        for(var i = 1; i < this.cart.length; i++){

           price += parseInt(this.cart[i].price*this.cart[i].amount);
        }
        return price;
    }
  },
  methods: {
    addCart: function(id, name, price, image)
    {
        var num = this.cart.length; 
        if(num==1)
        {
                this.cart.push({
                product_id:id,
                product_image:image,
                item_name: name,
                price: price,
                amount: 1,
                });
        }
        else
        {
            for(var i=1; i<num; i++)
            {
                if(this.cart[i].item_name == name)
                {
                    // this.cart[i].amount++;
                    Vue.set(this.cart[i],this.cart[i].amount,this.cart[i].amount++);
                    break;
                }
                else{
                    if(i==num-1)
                    {
                        this.cart.push({
                        product_id:id,
                        product_image:image,
                        item_name: name,
                        price: price,
                        amount: 1,
                        });
                    }
                }
            } 
        }
    
    },
    submitCart: function(){
        axios.post('/post-cart', {
                cart: this.cart_item,
                total: this.total,
          })
          .then(function (response) {
            console.log(response);
            window.location.href = 'http://baoho.test/checkout';

          })
          .catch(function (error) {
            console.log(error);
          });
    },
        numberFormat: function(number, decimals, dec_point, thousands_sep )
        {
        var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
        var d = dec_point == undefined ? "," : dec_point;
        var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
        var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
                                  
        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
        },

  },


 

});
</script>
<!-- //cart-js -->
<!-- script for responsive tabs -->
<script src="{{ asset('web/js/responsiveslides.min.js') }}"></script>

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

