<template>
    <div id="screen4">
        <div class="d-flex align-items-center justify-content-center">
            <div class="text-center">
                <h1 class="mb-0">GRAND BARBECUE</h1>
                <h2>ANNUEL</h2>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-center mt-5">
            <p class="h1 text-uppercase text-center">Merci pour<br> votre commande</p>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        goToAlcohol() {
            this.$router.push('/alcohol')
        },
        goToSoft() {
            this.$router.push('/soft')
        }
    }
}
</script>
<style lang="scss">
#screen4 {
    h1 {
        color: #6c5aa7;
        font-weight: 800;
        font-family: 'Roboto Condensed', 'Roboto', sans-serif;
        font-size: 1.35rem;
    }
    h2 {
        letter-spacing: 0.4rem;
        font-size: 0.9rem;
    }
    p {
        font-weight: 800;
        font-family: 'Roboto Condensed', 'Roboto', sans-serif;
        color: #6c5aa7;
    }
}
</style>