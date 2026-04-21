<script setup lang="ts">
import { ref } from 'vue';
import { RouterLink, useRouter } from 'vue-router';

const router = useRouter()
let name = ref();
let email = ref();
let birthdate = ref();
let password = ref();
let password_confirmation = ref();



</script>

<template>
    <div class="register-page">

        <!-- PARTIE GAUCHE : message de bienvenue -->
        <div class="register-left">
            <div class="register-welcome">
                <h1> Perfet<span> Home</span></h1>
                <p>Work hard .</p>

                <div class="register-quote">
                    "La meilleure façon de réussir est de travailler Intelligemment."
                </div>
            </div>
        </div>

        <!-- PARTIE DROITE : formulaire -->
        <div class="register-right">
            <div class="register-form-container">
                <h2>Créer un compte</h2>
                <p class="register-subtitle">Remplis le formulaire pour rejoindre YOWL</p>

                <form class="register-form" @submit.prevent="">
                    <div class="form-group">
                        <Label for="name">Nom complet</Label>
                        <input id="name" type="text" required autofocus tabindex="1" autocomplete="name" v-model="name" placeholder="Ton nom complet">
                    </div>

                    <div class="form-group">
                        <Label for="email">Adresse email</Label>
                        <input id="email" type="email" required tabindex="2" autocomplete="email" v-model="email" placeholder="email@exemple.com">
                    </div>

                    <div class="form-group">
                        <Label for="birthday">Date de naissance</Label>
                        <input id="birthday" type="date" required tabindex="3" autocomplete="bday" v-model="birthdate">
                    </div>

                    <div class="form-group">
                        <Label for="password">Mot de passe</Label>
                        <input id="password" type="password" required tabindex="4" autocomplete="new-password" v-model="password" placeholder="Mot de passe">
                    </div>

                    <div class="form-group">
                        <Label for="password_confirmation">Confirmer le mot de passe</Label>
                        <input id="password_confirmation" type="password" required tabindex="5" autocomplete="new-password" v-model="password_confirmation" placeholder="Confirmer le mot de passe">
                    </div>

                    <Button type="submit" @click="" class="register-btn" tabindex="6">Créer mon compte</Button>

                    <div class="register-login-link">Déjà un compte ?
                        <RouterLink to="/login"><a class="color-grey" tabindex="7">Se connecter</a></RouterLink>
                    </div>
                </Form>
            </div>
        </div>

    </div>
</template>

<style scoped>
@import '../assets/register.css';
</style>
