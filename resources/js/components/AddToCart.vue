<template>
<div class="product-hidden">

  <div class="add-to-cart">
    <a href="cart.html">Add to cart</a>
  </div>
  <div class="star-actions">
    <div class="product-rattings">
      <span><i class="fa fa-star"></i></span>
      <span><i class="fa fa-star"></i></span>
      <span><i class="fa fa-star"></i></span>
      <span><i class="fa fa-star-half-o"></i></span>
      <span><i class="fa fa-star-o"></i></span>
    </div>
    <ul class="actions">
      <li>
        <a href=""><i class="ion-android-favorite-outline"></i></a>
      </li>
      <li>
        <a href=""><i class="ion-ios-shuffle-strong"></i></a>
      </li>
    </ul>
  </div>
</div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
