/*=========================================================================================
  File Name: store.js
  Description: Vuex store
  ----------------------------------------------------------------------------------------
  Item Name: AVdesign- "Vue Admin"
  Author: Anselmo Velame
  Demo URL: https://www.avdesign.com.br/demo/vue-admin
==========================================================================================*/


import Vue from 'vue'
import Vuex from 'vuex'

import state from "./state"
import getters from "./getters"
import mutations from "./mutations"
import actions from "./actions"

Vue.use(Vuex)


export default new Vuex.Store({
    getters,
    mutations,
    state,
    actions,
    strict: process.env.NODE_ENV !== 'planion'
})
