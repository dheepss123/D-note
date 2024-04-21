<x-app-layout>
    @include('components.navbar')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    @include('components.hero')
    @include('components.section')
    @include('components.footer')
</x-app-layout>


