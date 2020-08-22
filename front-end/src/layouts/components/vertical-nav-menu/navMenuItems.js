/*=========================================================================================
  File Name: sidebarItems.js
  Description: Sidebar Items list. Add / Remove menu items from here.
  ----------------------------------------------------------------------------------------
  Item Name: AVdesign- "Vue Admin"
  Author: Anselmo Velame
  Demo URL: https://www.avdesign.com.br/demo/vue-admin
==========================================================================================*/


export default [
  {
    url: "/",
    name: "Home",
    slug: "home",
    icon: "HomeIcon",
  },
  {
    header: "Teste técnico: Órigo Energia",
    icon: "FileIcon",
    i18n: "Planos",
    items: [
      {
        url: '/pagina/planos',
        slug: 'page-plan',
        name: "Planos",
        icon: "CopyIcon",
        i18n: "Plan",
      },
      {
        url: '/pagina/clientes',
        slug: 'page-customer',
        name: "Clientes",
        icon: "UsersIcon",
        i18n: "Customer",
      },
    ]
  },



]
