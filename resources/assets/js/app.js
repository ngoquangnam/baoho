/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('product-vue', require('./components/product.vue'));

// const app = new Vue({
//     el: '#app',
//     data: {

//     }
// });
const app = new Vue({
        el: '#app',
        data: {
            product_id: 0,
            product_image: '',
            item_name: '',
            price: 0,
            amount: 2,
            cart: [
                {}
            ],
            sort: 2,
            filter: 0,
            list: < ? php echo json_encode($products) ? >,
    },
    components: {
        'product-vue': temp,
    },
    computed: {
        lists: function(){

        if(this.sort == 2)
    {

        return this.list = _.orderBy(this.list, ['name'], ['asc']);

    }
else
if (this.sort == 3) {

    return this.list = _.orderBy(this.list, ['name'], ['desc']);

}
else if (this.sort == 4) {

    return this.list = _.orderBy(this.list, ['price'], ['desc']);

}
else if (this.sort == 5) {

    return this.list = _.orderBy(this.list, ['price'], ['asc']);

}

},
filters: function () {
    return this.filter;
}
,
cart_item: {
    get: function () {
        return this.cart;
    }
,
    set: function (item) {
        var item = item.split(',');
        this.cart.push({
            item_name: item[0],
            price: item[1],
        })
    }

}
,
total: function () {
    var price = 0;
    for (var i = 1; i < this.cart.length; i++) {

        price += parseInt(this.cart[i].price * this.cart[i].amount);
    }
    return price;
}
,


},
methods: {
    addCart: function (id, name, price, image) {
        var num = this.cart.length;
        if (num == 1) {
            this.cart.push({
                product_id: id,
                product_image: image,
                item_name: name,
                price: price,
                amount: 1,
            });
        }
        else {
            for (var i = 1; i < num; i++) {
                if (this.cart[i].item_name == name) {
                    // this.cart[i].amount++;
                    Vue.set(this.cart[i], this.cart[i].amount, this.cart[i].amount++);
                    break;
                }
                else {
                    if (i == num - 1) {
                        this.cart.push({
                            product_id: id,
                            product_image: image,
                            item_name: name,
                            price: price,
                            amount: 1,
                        });
                    }
                }
            }
        }

    }
,
    submitCart: function () {
        axios.post('/post-cart', {
            cart: this.cart_item,
            total: this.total,
        })
            .then(function (response) {
                console.log(response);
                window.location.href = '{!! route('
                checkout
                ') !!}';

            })
            .catch(function (error) {
                console.log(error);
            });
    }
,
    numberFormat: function (number, decimals, dec_point, thousands_sep) {
        var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
        var d = dec_point == undefined ? "," : dec_point;
        var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
        var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;

        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    }
,

}
,
})
;