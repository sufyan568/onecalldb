import AppForm from '../app-components/Form/AppForm';

Vue.component('sms-log-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                datetime:  '' ,
                tag:  '' ,
                to:  '' ,
                message:  '' ,
                api_request:  '' ,
                api_response:  '' ,
                status:  '' ,
                
            }
        }
    }

});