<template>
  <Layout>
    <h1>Hello, {{ title }}</h1>
  </Layout>
</template>

<style>
</style>

<script>
import Layout from "../Shared/Layout";
export default {
  props: ["title"],
  components: {
    Layout,
  },
};
</script>
