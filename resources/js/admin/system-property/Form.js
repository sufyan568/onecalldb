import AppForm from '../app-components/Form/AppForm';

Vue.component('system-property-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                tag:  '' ,
                value:  '' ,
                description:  '' ,
                
            }
        }
    }

});