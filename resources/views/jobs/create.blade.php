<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Vacante De Trabajo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col md:items-center">
                        <h1 class="text-xl font-semibold">Agrega Los Detalles De Tu Vacante De Trabajo</h1>
                        <livewire:create-job>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
