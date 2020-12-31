import AppForm from '../app-components/Form/AppForm';

Vue.component('business-order-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                datetime:  '' ,
                buisness_id:  '' ,
                buisness_account_id:  '' ,
                from_username:  '' ,
                category:  '' ,
                query_id:  '' ,
                delivery_id:  '' ,
                comments:  '' ,
                status:  '' ,
                
            }
        }
    }

});