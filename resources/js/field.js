import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
Nova.booting((Vue, router, store) => {
    Vue.component('index-JsonField', require('./components/IndexField'));
    Vue.component('detail-JsonField', require('./components/DetailField'));
    Vue.component('form-JsonField', require('./components/FormField'));
    Vue.use(ElementUI);
});
