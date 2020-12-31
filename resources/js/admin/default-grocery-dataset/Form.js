import AppForm from '../app-components/Form/AppForm';

Vue.component('default-grocery-dataset-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                product_id:  '' ,
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