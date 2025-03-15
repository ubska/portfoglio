<template>
  <AppLayout>
    <h1>Contattami</h1>
    <form @submit.prevent="submitForm">
      <div>
        <label for="name">Nome:</label>
        <input type="text" id="name" v-model="form.name" required />
      </div>
      <div>
        <label for="email">Email:</label>
        <input type="email" id="email" v-model="form.email" required />
      </div>
      <div>
        <label for="message">Messaggio:</label>
        <textarea id="message" v-model="form.message" required></textarea>
      </div>
      <button type="submit">Invia</button>
    </form>
  </AppLayout>
</template>

<script setup>
import { reactive } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';

const form = reactive({
  name: '',
  email: '',
  message: '',
});

const submitForm = () => {
  console.log('Form inviato:', form);
};
</script>

<style scoped>
h1 {
  font-size: 2rem;
  margin-bottom: 1rem;
}

form div {
  margin-bottom: 1rem;
}

label {
  display: block;
  margin-bottom: 0.5rem;
}

input, textarea {
  width: 100%;
  padding: 0.5rem;
  font-size: 1rem;
}

button {
  padding: 0.5rem 1rem;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}
</style>
