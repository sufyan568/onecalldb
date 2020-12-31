import AppForm from '../app-components/Form/AppForm';

Vue.component('category-search-index-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                last_updated:  '' ,
                category:  '' ,
                keywords:  '' ,
                meta:  '' ,
                
            }
        }
    }

});