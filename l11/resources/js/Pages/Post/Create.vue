<template>

    <Head title="Create post" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create post</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex justify-center">
                        <div class="w-full">
                            <form @submit.prevent="submit" class="mt-6 p-4 space-y-6">
                                <div class="relative">
                                    <TextInput id="title" type="text" class="mt-1 block w-full"
                                        :class="{ 'border-red-500': form.errors.title }" v-model="form.title" required
                                        autofocus autocomplete="title" />
                                    <InputLabel for="title" value="Title" />
                                    <InputError class="mt-2" :message="form.errors.title" />
                                </div>

                                <div class="relative">
                                    <TextAreaInput id="content" type="text" class="mt-1 block w-full"
                                        :class="{ 'border-red-500': form.errors.title }" v-model="form.content" required
                                        autocomplete="content" />
                                    <InputLabel for="content" value="Content" />
                                    <InputError class="mt-2" :message="form.errors.content" />
                                </div>

                                <div class="relative">
                                    <div class="flex items-center mb-4">
                                        <input id="publish" v-model="form.publish" type="radio" value="1"
                                            name="default-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="publish"
                                            class="ms-2 text-sm font-medium text-gray-700 dark:text-gray-300">Publish</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input checked id="not-publish" v-model="form.publish" type="radio" value="0"
                                            name="default-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="not-publish"
                                            class="ms-2 text-sm font-medium text-gray-700 dark:text-gray-300">Not
                                            publish</label>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <PrimaryButton :disabled="form.processing">Save</PrimaryButton>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextAreaInput from "@/Components/TextAreaInput.vue";

const form = useForm({
    title: '',
    content: '',
    publish: false,
    message: ''
});

const submit = () => {
    form.post(route('posts.store'), {
        preserveScroll: true,
        onSuccess: () => form.reset()
    }
    );
};
</script>
