<template>
  <main>
    <header>
      <Link href="/home" class="text-sky-700">Home</Link>
      <Link href="/about" class="text-sky-700">About</Link>
      <Link href="/user" class="text-sky-700">User</Link>
    </header>
    <article>
      <slot />
    </article>
    <footer>@ridhopujiono</footer>
  </main>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import { Head } from "@inertiajs/inertia-vue";
export default {
  components: {
    Link,
    Head,
  },
};
</script>