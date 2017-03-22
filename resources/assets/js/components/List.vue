<template>
    <ol>
        <li v-for="item in items">
            {{ item.task }}
        </li>
    </ol>
</template>

<script>
    export default {
        props: ['items'],
        mounted() {
            console.log(this.items);
        }
    }
</script>
