import AppForm from '../app-components/Form/AppForm';

Vue.component('marker-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                place_id:  '' ,
                name:  '' ,
                tel_country_code:  '' ,
                phone:  '' ,
                address:  '' ,
                city:  '' ,
                region:  '' ,
                country:  '' ,
                lat:  '' ,
                lng:  '' ,
                timezone:  '' ,
                photo_urls:  '' ,
                
            }
        }
    }

});