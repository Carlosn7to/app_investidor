<template>
    <div class="container-login df wh100">
        <div class="card-login df">
            <form class="wh100%" :action="page_authentic" method="POST">
                <input type="hidden" name="_token" :value="_token">
                <label for="email">Login:</label><br>
                <input type="text" name="email" id="email"><br><br><br>
                <label for="password">Senha:</label><br>
                <input type="password" name="password" id="password"><br>
                <button class="df" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "Login",
    props: ['_token', 'page_authentic'],
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
