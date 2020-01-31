<template>
    <div>
        <h3>Header</h3>

        <div class="container">
            <router-link :to="{ name: 'home' }">Home</router-link>
            <router-link :to="{ name: 'socios' }">Socios</router-link>
        </div>
    </div>
</template>