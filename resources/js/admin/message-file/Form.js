import AppForm from '../app-components/Form/AppForm';

Vue.component('message-file-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                message_id:  '' ,
                file:  '' ,
                meta:  '' ,
                type:  '' ,
                status:  '' ,
                
            }
        }
    }

});