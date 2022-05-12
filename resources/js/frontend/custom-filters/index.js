import numberFormat from './numberFormat';
import limitCharecters from './limitCharecters';

Vue.use(numberFormat,{
    mixins: Vue.filter('numberFormat', numberFormat)
});

Vue.use(limitCharecters,{
    mixins: Vue.filter('limitCharecters', limitCharecters)
});
