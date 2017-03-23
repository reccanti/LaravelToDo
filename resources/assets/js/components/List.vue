<template>
    <ol>
        <li v-for="item in items">
            {{ item.task }}
        </li>
    </ol>
</template>

<style>
    li {
        color: blue;
    }
</style>

<script>
    export default {
        data() {
            return {
                "items": []
            }
        },
        mounted() {
            axios.get('api/tasks')
                .then(response => {
                    this.items = response.data;
                });
        }
    }
</script>
