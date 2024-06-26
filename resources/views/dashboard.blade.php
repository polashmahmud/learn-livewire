<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-2">
{{--                <livewire:toggle-example />--}}
                <livewire:create-book />
                <livewire:book-index />
            </div>
        </div>
    </div>
</x-app-layout>
