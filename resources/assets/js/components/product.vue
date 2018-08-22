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
                        <input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" data-toggle="modal"
                               data-target="#exampleModalLong"/>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
`,
};