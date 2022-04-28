import { BaseForm } from 'craftable';

export default {
	mixins: [BaseForm],
    methods: {
        onSuccess(data) {
            $("[type=submit]").css({ 'pointer-events': 'all' });
            $("[type=submit]").find('i').removeClass().addClass('fa fa-download');
            $("[type=submit]").removeAttr("disabled");
            if(data.notify) {
                this.$notify({ type: data.notify.type, title: data.notify.title, text: data.notify.message});
                if(data.notify.log){
                    console.error(data.notify.log);
                }
            } else if (data.redirect) {
                this.$notify({ type: 'success', title: 'Atención', text: data.message});
                setTimeout(function(){ window.location.replace(data.redirect); }, 1000);
            }
        },

    }
};
