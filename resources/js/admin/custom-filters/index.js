import numberFormat from './numberFormat';
import dbNumberFormat from './dbNumberFormat';
import limitCharecters from './limitCharecters';

Vue.use(numberFormat,{
    mixins: Vue.filter('numberFormat', numberFormat)
});

Vue.use(dbNumberFormat,{
    mixins: Vue.filter('dbNumberFormat', dbNumberFormat)
});

Vue.use(limitCharecters,{
    mixins: Vue.filter('limitCharecters', limitCharecters)
});
