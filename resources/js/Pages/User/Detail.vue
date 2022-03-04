<template>
  <div>
    <Layout>
      <h1>Profile {{ user.name }}</h1>
      <p>{{ user.email }}</p>
      <p>{{ user.created_at }}</p>
      <Link href="/user">Kembali</Link>
    </Layout>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import Layout from "../../Shared/Layout";
export default {
  props: {
    title: String,
    user: Array,
  },
  components: {
    Layout,
    Link,
  },
};
</script>
