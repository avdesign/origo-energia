/*=========================================================================================
  File Name: moduleDataList.js
  Description: Calendar Module
  ----------------------------------------------------------------------------------------
  Item Name: AVdesign- "Vue Admin"
  Author: Anselmo Velame
  Demo URL: https://www.avdesign.com.br/demo/vue-admin
==========================================================================================*/


import state from './moduleDataPlanState.js'
import mutations from './moduleDataPLanMutations.js'
import actions from './moduleDataPlanActions.js'
import getters from './moduleDataPlanGetters.js'

export default {
  isRegistered: false,
  namespaced: true,
  state: state,
  mutations: mutations,
  actions: actions,
  getters: getters
}

