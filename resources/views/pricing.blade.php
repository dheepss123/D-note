<x-app-layout>
    @include('layouts.navigation')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    @include('components.pricing')
</x-app-layout>


