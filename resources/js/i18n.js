import Vue from 'vue'
import VueI18n from 'vue-i18n'
import ru from './lang/ru'
import uk from './lang/uk'

Vue.use(VueI18n);

const i18n = new VueI18n({
    locale: 'uk',
    fallbackLocale: 'ru',
    messages: {uk, ru}
});

export default i18n
