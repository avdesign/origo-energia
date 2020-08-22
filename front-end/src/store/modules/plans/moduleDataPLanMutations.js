/*=========================================================================================
  File Name: moduleCalendarMutations.js
  Description: Calendar Module Mutations
  ----------------------------------------------------------------------------------------
  Item Name: AVdesign- "Vue Admin"
  Author: Anselmo Velame
  Demo URL: https://www.avdesign.com.br/demo/vue-admin
==========================================================================================*/


export default {
  ADD_ITEM(state, item) {
    state.plans.unshift(item)
  },
  SET_PLANS(state, plans) {
    state.plans = plans
  },
  // SET_LABELS(state, labels) {
  //   state.eventLabels = labels
  // },
  UPDATE_Plan(state, plan) {
      const planIndex = state.plans.findIndex((p) => p.id == plan.id)
      Object.assign(state.plans[planIndex], plan)
  },
  REMOVE_ITEM(state, itemId) {
      const ItemIndex = state.plans.findIndex((p) => p.id == itemId)
      state.plans.splice(ItemIndex, 1)
  },
}
