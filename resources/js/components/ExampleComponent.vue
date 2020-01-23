<template>
    <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">
        <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">Dashboard</div>
        <div class="w-full p-6">
            <p class="text-gray-700">
                You are logged in!
            </p>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
