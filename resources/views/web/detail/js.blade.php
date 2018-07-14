<script type="text/javascript" src="{{ asset('web/js/jquery-2.1.4.min.js') }}"></script>
<!-- //js -->
<script src="{{ asset('web/js/modernizr.custom.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
<!-- Custom-JavaScript-File-Links -->
<!-- cart-js -->
<script type="text/javascript">
// ['nam','daoccho'],['namas','nasdd'],[]], ['namsd', 'nasmd']
    var temp = { 
        props: ['id', 'name', 'price', 'slug', 'image'],
        computed:{
            link: function()
            {
                return 'http://baoho.test/product/' + this.id +'/' + this.slug +'/';
            },
            num: function()
            {
                return this.$parent.numberFormat(this.price, 0, ',', ',');
            }

        },
        methods:{
            addItem: function()
            {
                this.$emit('add-cart', this.id, this.name, this.price, this.image);
            },
            numberFormat: function()
            {
                this.$emit('num-format', this.price, 0, ',', ',');
            }
        },
        template: `
        <div class="col-md-4 product-men">
            <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item">
                    <img :src="image" alt="" class="pro-image-front">
                    <img :src="image" alt="" class="pro-image-back">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a :href="link" class="link-product-add-cart">xem ngay
                        </a>
                        </div>
                    </div>
                    <span class="product-new-top">New</span>
                </div>
                <div class="item-info-product ">
                    <h4 style="display: block;height: 34px;">
                        <a :href="link">@{{ name }}
                        </a>
                    </h4>
                    <div class="info-product-price">
                        <span class="item_price" v-text="num"></span><span> vnđ</span>
                        <del></del>
                    </div>
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                        <form action="" method="post" v-on:submit.prevent="addItem">
                            <fieldset>
                                @csrf
                                <input type="hidden" name="cmd" value="_cart"/>
                                <input type="hidden" name="add" value="1"/>
                                <input type="hidden" name="id" :value="id"/>
                                <input type="hidden" name="item_name" :value="name"/>
                                <input type="hidden" name="amount" :value="price"/>
                                <input type="hidden" name="discount_amount" value="0"/>
                                <input type="hidden" name="currency_code" value="VND"/>
                                <input type="hidden" name="return" value=" "/>
                                <input type="hidden" name="cancel_return" value=" "/>
                                <input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" data-toggle="modal" data-target="#exampleModalLong"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            `,
    };
    var app = new Vue({
  el: '#app',
  data: {
    product_id: 0,
    product_image: '',
    item_name: '',
    price: 0,
    amount: 2,
    cart: [
        {

        }
    ],
    sort:2,
    filter: 0,
    list: <?php echo json_encode($products) ?>,
  },
  components:{
    'product-vue': temp, 
  },
   computed: {
    lists: function(){
       
        if(this.sort == 2)
        {

            return this.list = _.orderBy(this.list, ['name'], ['asc']); 

        }
        else if (this.sort == 3) {

            return this.list = _.orderBy(this.list, ['name'], ['desc']);

        } 
        else if (this.sort == 4) {

            return this.list = _.orderBy(this.list, ['price'], ['desc']);

        }
        else if(this.sort == 5) {

            return this.list = _.orderBy(this.list, ['price'], ['asc']);                         
             
        }
          
    },
    filters: function(){
        return this.filter;
    }, 
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
    },

    
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
            window.location.href = '{!! route('checkout') !!}' ;

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

<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
 $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 9000,
            values: [ 1000, 7000 ],
            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
 });
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

});//]]>  

</script>
<script type="text/javascript" src="{{ asset('web/js/jquery-ui.js') }}"></script>

<script src="{{ asset('web/js/responsiveslides.min.js') }}"></script>
                <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                         // Slideshow 4
                        $("#slider3").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: false,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                        $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                            }
                            });
                        });
                </script>
<!-- for bootstrap working -->
<script type="text/javascript" src="{{ asset('web/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/popper.min.js') }}"></script>


