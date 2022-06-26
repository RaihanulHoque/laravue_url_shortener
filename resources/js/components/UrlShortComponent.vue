<template>
    <h3>Generate your URL from the bellow</h3>
    <!-- <h2>{{ title }}</h2> -->
    <form onkeydown="return event.key != 'Enter';">
        <div class="row mt-4">
        <div class="col">
            <input type="text" placeholder="product name" class="form-control product-name">
        </div>
        <div class="col">
            <input type="text" placeholder="product price" class="form-control product-price">
        </div>
        </div>
        <button class="btn mt-3 btn-block btn-primary add-product">Submit</button>
    </form>
</template>
<script>
export default {
    setup:() =>({
        title: 'How to work with Laravel 9 and Vuejs 3'
    }),
}
</script>
