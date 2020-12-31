import AppForm from '../app-components/Form/AppForm';

Vue.component('default-grocery-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                categroy:  '' ,
                product_name:  '' ,
                weight_packing:  '' ,
                description:  '' ,
                price:  '' ,
                currency:  '' ,
                images:  '' ,
                meta:  '' ,
                status:  '' ,
                
            }
        }
    }

});