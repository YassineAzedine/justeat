<template>
          <p><a class="btn btn-default" @click.prevent="addToCart" href="#" role="button">Add to cart &raquo;</a></p>

</template>

<script>


    export default {

        props:{
            basketCount:{
                required:true,
            }

        },
  
        mounted() {

        },
        methods:{
            addToCart(){
                alert('addToCart')
            }
        }
        }

  
</script>
