<script setup lang="ts">
import { ref } from 'vue';
import { useRouter } from 'vue-router';

const email = ref();
const password = ref();
const router = useRouter()


</script>

<template>
  <div class="page">
    <div class="header">
      <span class="logo-white">Perfect</span><span class="logo-orange"> Home</span>
    </div>

    <div class="cadre">
      <h1 class="titre">Connexion</h1>
      <p class="sous-titre">La finalité est d'être heureux pas d'être riche</p>


      <form @submit.prevent="">
        <div class="input-group">
          <label>Adresse email</label>
          <input v-model="email" type="email" placeholder="ton.email@exemple.com" />
        </div>

        <div class="input-group">
          <label>Mot de passe</label>
          <input v-model="password" type="password" placeholder="123Exemple" />
        </div>

        <button type="submit" class="btn">
          Se connecter →
        </button>
      </form>

  
      <p class="signup">
        Pas encore de compte ? <RouterLink to="/register">S'inscrire</RouterLink>
      </p>
    </div>
  </div>
</template>

<style scoped>
@import '../assets/login.css';
</style>
<style>

</style>