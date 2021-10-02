<template>
  <div class="row">
    <input type="hidden" v-model="paymentMethodID" name="paymentMethodID" id="paymentMethodID">
    <div class="col-md-9">
      <div ref="card" class="form-control" style="height:2.6rem; padding-top:.7em"></div>
    </div>
    <div class="col-md-3">
      <div class="btn btn-success" @click.prevent="submitPaymentMethod">save</div>
    </div>
  </div>
</template>

<script>
let stripe = Stripe(process.env.MIX_STRIPE_KEY);
let elements = stripe.elements()
const style = {
  base:{
    border:'1px solid #D8D8D8',
    borderRadius:'4px',
    color:"#000",
  },
  invalid:{
    
  } 
}
export default {
  data(){
    return {
      fullName:'ddsss',
      card:'', 
      paymentMethodID:''
    }
  },
  mounted() {
    
    this.loadIntent();
    this.card = elements.create('card', style)
    this.card.mount(this.$refs.card)
  },
  methods: {
  async  loadIntent() {
        let response  = await axios.get('/user/setup-intent')
        this.intentToken = response.data
    },
    submitPaymentMethod(){
       stripe.confirmCardSetup(
         this.intentToken.client_secret, {
           payment_method:{
             card: this.card,
             billing_details:{
               name:this.fullName
             }
           }
         }
       ).then(function(result){
         if(result.error){
           console.log(result.error)
         }else{

           this.paymentMethodID = setupIntent.payment_method
           this.card.clear()
         }

    
       }.bind(this));  

    } 
  },
}
</script>
