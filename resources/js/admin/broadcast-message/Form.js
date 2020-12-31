import AppForm from '../app-components/Form/AppForm';

Vue.component('broadcast-message-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                datetime:  '' ,
                mobile_number:  '' ,
                message:  '' ,
                channel:  '' ,
                type:  '' ,
                status:  '' ,
                
            }
        }
    }

});