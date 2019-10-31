<template>
    <div class="">
        <h1>Profile</h1>
        <a href="#logout" @click.prevent="$auth.logout()"></a>
    </div>
</template>

<script>
    export default {
        name: "Profile"
    }
</script>

<style scoped>

</style>
