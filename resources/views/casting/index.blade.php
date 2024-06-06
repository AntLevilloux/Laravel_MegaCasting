<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Liste des Castings') }}
        </h2>
    </x-slot>

    @if ($castings == null)

        <!-- Afficher un message si la liste des castings est vide -->
        <p class="text-center text-red-500 text-2xl absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">Aucun casting trouvé.</p>

        @else

        @foreach ( $castings as $casting )

        <body class="bg-gray-100 flex items-center justify-center min-h-screen">
            <div class="space-y-8 flex flex-col items-center justify-center w-full">
                <div class="bg-white p-[2%] rounded w-96 shadow-lg mb-[5%]">
                    <h2 class="font-bold text-2xl text-center mb-3"><strong>{{$casting->libelle}}</strong></h2>
                    <div class="mb-5 text-center">{{$casting->description}}</div>
                    <div class="gap-x-5 flex justify-center">
                        <a class="text-blue-500 hover:underline" href="{{ route('casting.show', [$casting->id]) }}">En savoir plus</a>
                        <button class="bg-green-600 p-2 rounded hover:bg-green-500">
                            <a href="{{ route('casting.postule') }}">Postuler</a>
                        </button>
                    </div>
                </div>
            </div>
        </body>

        @endforeach

    @endif

</x-app-layout>
