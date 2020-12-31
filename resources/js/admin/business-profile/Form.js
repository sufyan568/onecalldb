import AppForm from '../app-components/Form/AppForm';

Vue.component('business-profile-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                user_id:  '' ,
                datetime:  '' ,
                name:  '' ,
                phone:  '' ,
                address:  '' ,
                latlng:  '' ,
                discription:  '' ,
                products_services:  '' ,
                keywords:  '' ,
                comments:  '' ,
                published_id:  '' ,
                currency:  '' ,
                status:  '' ,
                
            }
        }
    }

});