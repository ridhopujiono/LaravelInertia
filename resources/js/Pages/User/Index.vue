<template>
  <div>
    <Layout title="Daftar User">
      <h1>Daftar {{ title }}</h1>
      <button class="bg-sky-400 w-100 p-4 text-white">Tambah User</button>
      <ul>
        <li v-for="users in user" :key="users.id" style="">
          <span>
            {{ users.name }}
            <Link :href="`/users/${users.id}`">Detail</Link>
          </span>
        </li>
      </ul>
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
