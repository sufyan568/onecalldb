import AppForm from '../app-components/Form/AppForm';

Vue.component('log-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                datetime:  '' ,
                tag:  '' ,
                value:  '' ,
                
            }
        }
    }

});