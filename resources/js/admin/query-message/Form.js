import AppForm from '../app-components/Form/AppForm';

Vue.component('query-message-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                query_id:  '' ,
                type:  '' ,
                content:  '' ,
                meta:  '' ,
                
            }
        }
    }

});