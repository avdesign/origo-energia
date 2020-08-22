<!-- =========================================================================================
  File Name: AddNewDataSidebar.vue
  Description: Add New Data - Sidebar component
  ----------------------------------------------------------------------------------------
  Item Name: AVdesign- "Vue Admin"
  Author: Anselmo Velame
  Demo URL: https://www.avdesign.com.br/demo/vue-admin
========================================================================================== -->
<template>
  <vs-sidebar click-not-close position-right parent="body" default-index="1" color="primary" class="add-new-data-sidebar items-no-padding" spacer v-model="isSidebarActiveLocal">
    <div class="mt-6 flex items-center justify-between px-6">
        <h4>{{ Object.entries(this.data).length === 0 ? "ADICIONAR" : "ALTERAR" }} PLANO (FACK)</h4>
        <feather-icon icon="XIcon" @click.stop="isSidebarActiveLocal = false" class="cursor-pointer"></feather-icon>
    </div>
    <vs-divider class="mb-0"></vs-divider>

    <VuePerfectScrollbar class="scroll-area--data-plan-add-new" :settings="settings" :key="$vs.rtl">
      <div class="p-6">
        <!-- NAME -->
        <vs-input label="Nome" v-model="dataName" class="mt-5 w-full" name="item-name" v-validate="'required'" />
        <span class="text-danger text-sm" v-show="errors.has('item-name')">{{ errors.first('item-name') }}</span>
        <!-- PRICE -->
        <vs-input
          icon-pack="feather"
          label="Preço"
          v-model="dataPrice"
          class="mt-5 w-full"
          v-validate="{ required: true, regex: /\d+(\.\d+)?$/ }"
          name="item-price" />
        <span class="text-danger text-sm" v-show="errors.has('item-price')">{{ errors.first('item-price') }}</span>
      </div>
    </VuePerfectScrollbar>

    <div class="flex flex-wrap items-center p-6" slot="footer">
      <vs-button class="mr-6" @click="submitData" :disabled="!isFormValid">Cadastrar</vs-button>
      <vs-button type="border" color="danger" @click="isSidebarActiveLocal = false">Cancelar</vs-button>
    </div>
  </vs-sidebar>
</template>

<script>
import VuePerfectScrollbar from 'vue-perfect-scrollbar'

export default {
  props: {
    isSidebarActive: {
      type: Boolean,
      required: true
    },
    data: {
      type: Object,
      default: () => {},
    }
  },
  watch: {
    isSidebarActive(val) {
      if(!val) return
      if(Object.entries(this.data).length === 0) {
        this.initValues()
        this.$validator.reset()
      }else {
        let {  id, name,  price } = JSON.parse(JSON.stringify(this.data))
        this.dataId = id
        this.dataName = name
        this.dataPrice = price
        this.initValues()
      }
      // Object.entries(this.data).length === 0 ? this.initValues() : { this.dataId, this.dataName, this.dataCategory, this.dataOrder_status, this.dataPrice } = JSON.parse(JSON.stringify(this.data))
    }
  },
  data() {
    return {
      dataId: null,
      dataName: "",
      dataPrice: 0,
      settings: {
          maxScrollbarLength: 60,
          wheelSpeed: .60,
      },
    }
  },
  computed: {
    isSidebarActiveLocal: {
      get() {
        return this.isSidebarActive
      },
      set(val) {
        if(!val) {
          this.$emit('closeSidebar')
        }
      }
    },
    isFormValid() {
      return !this.errors.any() && this.dataName && (this.dataPrice > 0)
    }
  },
  methods: {
    initValues() {
      if(this.data.id) return
        this.dataId = null
        this.dataName = ""
        this.dataPrice = 0
    },
    submitData() {
      this.$validator.validateAll().then(result => {
          if (result) {
            const obj = {
              id: this.dataId,
              name: this.dataName,
              price: this.dataPrice
            }

            if(this.dataId !== null && this.dataId >= 0) {
              this.$store.dispatch("dataPlan/updateItem", obj).catch(err => { console.error(err) })
            }else{
              delete obj.id
              obj.popularity = 0
              this.$store.dispatch("dataPlan/addItem", obj).catch(err => { console.error(err) })
            }

            this.$emit('closeSidebar')
            this.initValues()
          }
      })
    },
    updateCurrImg(input) {
      if (input.target.files && input.target.files[0]) {
        var reader = new FileReader()
        reader.onload = e => {
          this.dataImg = e.target.result
        }
        reader.readAsDataURL(input.target.files[0])
      }
    }
  },
  components: {
    VuePerfectScrollbar,
  }
}
</script>

<style lang="scss" scoped>
.add-new-data-sidebar {
  ::v-deep .vs-sidebar--background {
    z-index: 52010;
  }

  ::v-deep .vs-sidebar {
    z-index: 52010;
    width: 400px;
    max-width: 90vw;
  }
}

.scroll-area--data-list-add-new {
    // height: calc(var(--vh, 1vh) * 100 - 4.3rem);
    height: calc(var(--vh, 1vh) * 100 - 16px - 45px - 82px);
}
</style>
