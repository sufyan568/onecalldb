import AppForm from '../app-components/Form/AppForm';

Vue.component('geo-var-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                datetime:  '' ,
                comments:  '' ,
                name:  '' ,
                description:  '' ,
                lat1:  '' ,
                lng1:  '' ,
                lat2:  '' ,
                lng2:  '' ,
                tpl_var:  '' ,
                tpl_val:  '' ,
                
            }
        }
    }

});