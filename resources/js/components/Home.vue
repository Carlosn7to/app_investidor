<template>
    <div class="container-home wh100">
        <a :href="link_logout">Deslogar</a>
    </div>
</template>

<script>
export default {
    name: "Home",
    props: ['link_logout'],
    methods: {
    },
    data () {
        return {
        }
    },
    components: {},
    computed: {},
    beforeMount() {},
    created() {},
    mounted() {}
}
</script>

<style scoped>

</style>
