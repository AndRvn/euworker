<template>
    <div>
        <p> Home page </p>
        <my-component />
    </div>

</template>

<script>
    import MyComponent from "../components/MyComponent";

    export default {
        name: "Home",
        components: {MyComponent}
    }
</script>

<style scoped>

</style>
