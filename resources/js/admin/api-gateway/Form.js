import AppForm from '../app-components/Form/AppForm';

Vue.component('api-gateway-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                description:  '' ,
                key:  '' ,
                path:  '' ,
                status:  '' ,
                
            }
        }
    }

});