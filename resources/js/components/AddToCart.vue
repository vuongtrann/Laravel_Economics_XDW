<template>
<div class="product-hidden">

  <div class="add-to-cart">
    <button class="button" v-on:click.prevent="addProductToCart()">Add To Card</button>
  </div>
 
</div>
</template>

<script>
export default {
  data(){
    return{
      
    }
  },
  props:['productId','userId'],
  methods:{
      async addProductToCart(){
        //checking if user logged in
        if(this.userId == 0){
          this.$toastr.e('Bạn cần đăng nhập trước khi thêm sản phẩm vào giỏ hàng !');
          return;

        }
        //if user logged in then add item to cart
        let response = await axios.post('/cart',{
          'product_id': this.productId
        });

        this.$root.$emit('changeInCart', response.data.items);

        // console.log(response.data);

      }
  },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
