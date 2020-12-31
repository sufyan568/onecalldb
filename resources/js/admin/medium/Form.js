import AppForm from '../app-components/Form/AppForm';

Vue.component('medium-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                model_type:  '' ,
                model_id:  '' ,
                uuid:  '' ,
                collection_name:  '' ,
                name:  '' ,
                file_name:  '' ,
                mime_type:  '' ,
                disk:  '' ,
                conversions_disk:  '' ,
                size:  '' ,
                manipulations:  '' ,
                custom_properties:  '' ,
                genrated_conversions:  '' ,
                responsive_images:  '' ,
                
            }
        }
    }

});