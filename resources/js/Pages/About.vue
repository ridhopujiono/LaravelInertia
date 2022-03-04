<template>
  <Layout>
    <h1 v-text="name"></h1>
  </Layout>
</template>
<script>
import Layout from "../Shared/Layout";

export default {
  props: ["name"],
  components: {
    Layout,
  },
};
</script>


