<script setup>
import { onMounted, reactive } from 'vue';
import { useRouter } from 'vue-router';
const router = useRouter();
const userData = reactive({
    user: {}
});
function fetchUserDetails() {
    axios.get('user').then(response => {
        userData.user = response.data;
    });
}
function signOut() {
    axios.post('logout').finally(() => {
        localStorage.removeItem('token');
        axios.defaults.headers.common['Authorization'] = 'Bearer';
        router.push({ name: 'login' });
    });
}
onMounted(fetchUserDetails);
</script>

<template>
    <div>
        <div>User ID: {{ userData.user.id }}</div>
        <div>Email Address: {{ userData.user.email }}</div>
        <div>
            <button @click="signOut" type="button">Sign Out</button>
        </div>
    </div>
</template>