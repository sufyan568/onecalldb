import AppForm from '../app-components/Form/AppForm';

Vue.component('admin-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                datetime:  '' ,
                user_id:  '' ,
                email:  '' ,
                password:  '' ,
                discription:  '' ,
                comments:  '' ,
                type:  '' ,
                status:  '' ,
                
            }
        }
    }

});