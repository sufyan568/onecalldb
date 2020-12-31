import AppForm from '../app-components/Form/AppForm';

Vue.component('user-segment-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                datetime:  '' ,
                name:  '' ,
                description:  '' ,
                query:  '' ,
                comments:  '' ,
                
            }
        }
    }

});