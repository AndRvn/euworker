<template>
    <div>
      <button @click="setLayout('auth-layout')">auth-layout</button>
      <button  @click="setLayout('app-layout')">App Layout</button>
    </div>
</template>

<script>
export default {
  methods: {
    setLayout (layout) {
      this.$store.commit('SET_LAYOUT', layout)
    }
  }
}
</script>

