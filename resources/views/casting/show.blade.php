<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Informations du Castings') }}
        </h2>
    </x-slot>

    @forelse ($castings as $casting)

        <body class="bg-gray-100 min-h-screen flex items-center justify-center">
            <div class='bg-white m-8 p-5 rounded w-96 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 shadow-lg'>
                <div class="font-bold text-2xl text-center mb-3">
                    {{ $casting->libelle }}
                </div>
                <div class="text-center">
                    <div class="mb-2">{{ $casting->type }}</div>
                    <div class="mb-2">{{ $casting->description }}</div>
                    <div class="mb-2">{{ $casting->date }}</div>
                    <div class="mb-2">{{ $casting->adresse_id}}</div>
                    <div class="mb-2">{{ $casting->partenaire_id}}</div>
                    <button class="bg-green-600 p-2 rounded hover:bg-green-500">
                        <a href="{{ route('casting.postule') }}">Postuler</a>
                    </button>
                </div>
            </div>
        </body>

    @empty

        <!-- Afficher un message si la liste des castings est vide -->
        <p class="text-center text-red-500 text-2xl absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">Aucune Informations.</p>

    @endforelse
</x-app-layout>
