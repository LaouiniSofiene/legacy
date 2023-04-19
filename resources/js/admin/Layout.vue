<template>
    <div class="container">
        <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
        <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
            <a class="navbar-brand" style="font-family: 'Montserrat', sans-serif;font-size: 1.875em;font-weight: 700;line-height: 1;" href="/admin">Legacy Ventures</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <ul class="navbar-nav ms-auto" v-if="isLoggedIn">
                <li class="nav-item">
                    <router-link to="/admin/dashboard" class="nav-link">Dashboard</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/admin/posts" class="nav-link">Vacancies</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/admin/subscribers" class="nav-link">Subscribers</router-link>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="cursor: pointer;" @click="logout">Logout</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto" v-else>
                <li class="nav-item">
                    <router-link to="/admin" class="nav-link">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/admin/login" class="nav-link">Login</router-link>
                </li>
                
            </ul>
        </nav>
        <router-view></router-view>
    </div>
</template>
<script>

    export default {
        name: "AdminLayout",
        data() {
            return {
                isLoggedIn: false,
            }
        },
        created() {
            if (window.Laravel.isLoggedin) {
                this.isLoggedIn = true
            }
        },
        methods: {
            logout(e) {
                e.preventDefault()
                this.$axios.get('/sanctum/csrf-cookie').then(response => {
                    this.$axios.post('/api/logout')
                    .then(response => {
                        if(response.data.success) {
                            window.location.href = "/admin"
                        } else {
                            console.log(response);
                        }
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
                })
            }
        },
    }
</script>
<style lang="scss" scoped>
@import '~bootstrap/scss/bootstrap';
</style>