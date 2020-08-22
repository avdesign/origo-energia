<!-- =========================================================================================
    File Name: Error404.vue
    Description: 404 Page
    ----------------------------------------------------------------------------------------
    Item Name: AVdesign- "Vue Admin"
      Author: Anselmo Velame
    Demo URL: https://www.avdesign.com.br/demo/vue-admin
========================================================================================== -->


<template>
    <div class="h-screen flex w-full bg-img">
        <div class="vx-col flex items-center justify-center flex-col sm:w-1/2 md:w-3/5 lg:w-3/4 xl:w-1/2 mx-auto text-center">
            <img src="@/assets/images/pages/404.png" alt="graphic-404" class="mx-auto mb-4 max-w-full">
            <h1 class="sm:mx-0 mx-4 mb-12 text-5xl d-theme-heading-color">404 - Página não encontrada!</h1>
            <p class="sm:mx-0 mx-4 mb-4 sm:mb-16 d-theme-text-inverse text-danger">Desculpa, a página que você está procurando não existe mais ou você digitou o endereço errado.</p>
            <vs-button size="large" to="/">Voltar</vs-button>
        </div>
    </div>
</template>
