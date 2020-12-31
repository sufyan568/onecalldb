import AppForm from '../app-components/Form/AppForm';

Vue.component('user-messge-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                datetime:  '' ,
                to:  '' ,
                from:  '' ,
                message:  '' ,
                type:  '' ,
                status:  '' ,
                
            }
        }
    }

});