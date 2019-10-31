'use strict'

import Vue from 'vue'
import Vuex from 'vuex'
import layout from './modules/layout'
import locale from './modules/locale'
Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        layout,
        locale
    },

})
