<template>
  <AppLayout>
    <section id="about" class="about-section">
      <div class="container">
        <div class="about-content">
          <div class="about-text">
            <h1 class="greeting">Ciao, sono Oleksandra!</h1>
            <h2 class="title">Sviluppatore Web Junior</h2>
            <p class="description">
              Sono appassionata di sviluppo web e mi piace creare applicazioni moderne e intuitive.
              Ho esperienza con Laravel, Vue e altre tecnologie.
            </p>
            <a href="/#projects" class="btn btn-primary">Vedi i miei progetti</a>

            <!-- Aggiungi le icone e i link qui -->
            <div class="social-links">
              <a href="www.linkedin.com/in/oleksandra-ubska" target="_blank" class="social-link">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="https://github.com/ubska" target="_blank" class="social-link">
                <i class="fab fa-github"></i>
              </a>
              <a href="file:///C:/users/aless/OneDrive/Desktop/cv/CV%20Oleksandra%20Ubs'ka%20().pdf" target="_blank" class="social-link">
                <i class="fas fa-file-pdf"></i>
              </a>
            </div>
          </div>
          <div class="about-image">
            <img src="/images/IMG_2592.PNG" alt="Oleksandra" class="profile-image" />
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<style scoped>
.about-section {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh; /* Occupa l'intera altezza della viewport */
  padding: 2rem;
  background-color: #0a192f;
}

.container {
  max-width: 1200px;
  width: 100%;
  padding: 0 1rem;
}

.about-content {
  display: flex;
  align-items: center;
  gap: 2rem;
}

.about-text {
  flex: 1;
}

.greeting {
  font-size: 2.5rem;
  color: #64ffda;
  margin-bottom: 1rem;
}

.title {
  font-size: 4rem;
  color: #ccd6f6;
  margin-bottom: 1.5rem;
}

.description {
  font-size: 1.25rem;
  color: #8892b0;
  max-width: 600px;
  margin-bottom: 2rem;
}

.btn {
  display: inline-block;
  padding: 0.75rem 1.5rem;
  font-size: 1rem;
  font-weight: 500;
  text-align: center;
  text-decoration: none;
  border-radius: 4px;
  transition: all 0.3s ease;
}

.btn-primary {
  background-color: #64ffda;
  color: #0a192f;
  border: 2px solid #64ffda;
}

.btn-primary:hover {
  background-color: transparent;
  color: #64ffda;
}

.about-image {
  flex: 1;
  text-align: center;
}

.profile-image {
  width: 300px;
  height: 300px;
  border-radius: 50%;
  object-fit: cover;
  border: none;
  box-shadow: 0 0 20px rgba(100, 255, 218, 0.6), 0 0 40px rgba(100, 255, 218, 0.4);
}

/* Stili per i link social */
.social-links {
  margin-top: 1.5rem;
  display: flex;
  gap: 1rem;
}

.social-link {
  font-size: 1.5rem;
  color: #64ffda;
  text-decoration: none;
  transition: color 0.3s ease;
}

.social-link:hover {
  color: #ccd6f6;
}

/* Stili responsive */
@media (max-width: 768px) {
  .about-content {
    flex-direction: column;
    text-align: center;
  }

  .greeting {
    font-size: 2rem;
  }

  .title {
    font-size: 3rem;
  }

  .description {
    font-size: 1rem;
  }

  .profile-image {
    width: 200px;
    height: 200px;
  }

  .social-links {
    justify-content: center;
  }
}
</style>
