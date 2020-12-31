import AppForm from '../app-components/Form/AppForm';

Vue.component('query-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                datetime:  '' ,
                latlng:  '' ,
                from:  '' ,
                categogry:  '' ,
                type:  '' ,
                status:  '' ,
                comments:  '' ,
                
            }
        }
    }

});