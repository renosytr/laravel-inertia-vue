<script setup>
import { Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
  articles: Array,
  success: Boolean,
  message: String,
});

const formatDate = (date) => {
  return new Date(date).toLocaleDateString();
}

const form = useForm({})

const onEdit = (id) => {
  form.get(route('article.edit', id));
}

const onDelete = (id) => {
  form.delete(route('article.destroy', id));
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
            <Link :href="route('article.index')" class="py-2 px-3 text-cyan-300 md:p-0" aria-current="page">Home</Link>
          </li>
          <li>
            <Link :href="route('article.create')" class="py-2 px-3 text-white hover:text-cyan-300 md:p-0">Create</Link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <div v-if="props.success" class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 w-full" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <div>
        <span class="font-medium">{{ props.message }}</span>
      </div>
    </div>
    <div v-for="article in props.articles" class="p-6 mb-6 border border-gray-200 rounded-lg shadow w-full">
      <div class="flex justify-between">
        <div>
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ article.title }}</h5>
          <h5 class="mb-2 text-sm tracking-tight text-gray-900">{{ article.author }}</h5>
        </div>
        <p class="mb-2 text-sm tracking-tight text-gray-900">{{ formatDate(article.created_at) }}</p>
      </div>
      <p class="mb-3 font-normal text-gray-700" v-html="article.content"></p>
      <div class="flex justify-end">
        <button type="button" @click="onEdit(article.id)" class="bg-emerald-600 hover:bg-emerald-700 text-white py-2 px-4 rounded mr-3">Edit</button>
        <button type="button" @click="onDelete(article.id)" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded">Delete</button>
      </div>
    </div>
  </main>
</template>


