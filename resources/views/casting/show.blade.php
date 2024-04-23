<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Informations du Castings') }}
        </h2>
    </x-slot>

    @forelse ($castings as $casting)
    <div class='text-white'>
        <div>
            {{ $casting->libelle }}
        </div>
        <div >

            {{ $casting->description }}
            {{ $casting->date }}
            {{ $casting->type }}
        </div>
    </div>
    @empty
        <!-- Afficher un message si la liste des castings est vide -->
        <p class="text-center text-red-500 text-2xl absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">Aucune Informations.</p>
    @endforelse
</x-app-layout>
