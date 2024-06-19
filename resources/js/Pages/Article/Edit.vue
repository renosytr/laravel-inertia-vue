<script setup>
import { Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
  articles: Array
});

const form = useForm({
  title: props.articles.title,
  author: props.articles.author,
  content: props.articles.content,
})

const onSubmit = () => {
  form.put(route('article.update', props.articles.id))
}
</script>
<template>
  <nav class="bg-white border-cyan-200 bg-emerald-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <Link :href="route('article.index')" class="flex items-center space-x-3 rtl:space-x-reverse">
          <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Articles</span>
      </Link>
      <div class="w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:mt-0">
          <li>
            <Link :href="route('article.index')" class="block py-2 px-3 text-white hover:text-cyan-300 md:p-0" aria-current="page">Home</Link>
          </li>
          <li>
            <Link :href="route('article.create')" class="block py-2 px-3 text-cyan-300 hover:text-cyan-300 md:p-0">Create</Link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <form class="w-full mx-auto" method="POST" @submit.prevent="onSubmit()">
      <div class="flex items-center gap-3">
        <div class="mb-5 w-full">
          <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
          <input type="title" v-model="form.title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Title" required />
        </div>
        <div class="mb-5 w-full">
          <label for="author" class="block mb-2 text-sm font-medium text-gray-900">Author</label>
          <input type="author" v-model="form.author" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Author" required />
        </div>
      </div>
      <div class="mb-5 w-full">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Content</label>
        <textarea id="message" v-model="form.content" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Content article"></textarea>
      </div>
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>
  </main>
</template>

