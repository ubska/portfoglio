<template>
  <AppLayout>
    <section id="contact" class="contact-section">
      <div class="container">
        <h2 class="section-title">Contattami</h2>
        <form @submit.prevent="submitForm" class="contact-form">
          <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" id="name" v-model="form.name" required />
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" v-model="form.email" required />
          </div>
          <div class="form-group">
            <label for="message">Messaggio:</label>
            <textarea id="message" v-model="form.message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Invia</button>
        </form>
      </div>
    </section>
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
.contact-section {
  padding: 4rem 2rem;
  background-color: #0a192f;
}

.section-title {
  font-size: 2.5rem;
  color: #ccd6f6;
  text-align: center;
  margin-bottom: 2rem;
}

.contact-form {
  max-width: 600px;
  margin: 0 auto;
  text-align: left;
}

.form-group {
  margin-bottom: 1.5rem;
}

label {
  display: block;
  font-size: 1rem;
  color: #ccd6f6;
  margin-bottom: 0.5rem;
}

input, textarea {
  width: 100%;
  padding: 0.75rem;
  font-size: 1rem;
  border: 1px solid #8892b0;
  border-radius: 4px;
  background-color: transparent;
  color: #ccd6f6;
}

textarea {
  resize: vertical;
  min-height: 150px;
}

/* Stili responsive */
@media (max-width: 768px) {
  .contact-form {
    padding: 0 1rem;
  }
}
</style>
