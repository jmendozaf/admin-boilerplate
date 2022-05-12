import AppForm from '../app-components/Form/AppForm';

Vue.component('profile-edit-profile-form', {
    mixins: [AppForm],
    props: ['message','documenttypes','countries'],
    data: function() {
        return {
            form: {
                first_name:  '' ,
                last_name:  '' ,
                email:  '' ,
                password:  '' ,
                activated:  false ,
                forbidden:  false ,
                language:  '' ,
                document:  '' ,
                document_type:  '' ,
                country:  '' ,
                phone:  '' ,


            },
            mediaCollections: ['avatar']
        }
    },
    mounted: function () {
        if(this.message.length>0){
            this.$notify({ type: 'error', title: 'Atención', text: this.message});
        }
    },
    methods: {
        onSuccess(data) {
            if(data.notify) {
                this.$notify({ type: data.notify.type, title: data.notify.title, text: data.notify.message});
            } else if (data.redirect) {
                window.location.replace(data.redirect);
            }
        }
    }
});
