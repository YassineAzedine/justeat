<template>
    <div class="container">
    
          
        
        <div class="row justify-content-center">
            
            <div class="col-md-4">
               
                <div class="card">
                     <h3>Your Adrress</h3>
                <vue-google-autocomplete
    id="map"
    ref="address"
    classname="form-control"
    placeholder="Start typing"
    v-on:placechanged="getAddressData"
>
</vue-google-autocomplete>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import VueGoogleAutocomplete from 'vue-google-autocomplete'

    export default {
        data(){
            return {
                address:''
            }
        },
        components:{
             VueGoogleAutocomplete
        },
        mounted() {
 this.$refs.address.focus();
        },
        methods:{ 
        getAddressData(addressData,placeResultData,id){
this.address = addressData
        }
    }
    }
</script>
