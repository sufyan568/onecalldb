import AppForm from '../app-components/Form/AppForm';

Vue.component('business-account-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                datetime:  '' ,
                business_id:  '' ,
                debit:  '' ,
                credit:  '' ,
                balance:  '' ,
                currency:  '' ,
                discription:  '' ,
                type:  '' ,
                status:  '' ,
                
            }
        }
    }

});