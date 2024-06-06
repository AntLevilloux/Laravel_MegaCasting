<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Postuler au Castings') }}
        </h2>
    </x-slot>

    @if ($castings == null)

        <!-- Afficher un message si la liste des castings est vide -->
        <p class="text-center text-red-500 text-2xl absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">Pas possible de postuler</p>

        @else

        @foreach ( $castings as $casting )

            <form action="{{ route('postulation.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="first_name" class="block text-sm font-medium text-gray-700">Votre prénom</label>
                    <input type="text" id="first_name" name="first_name" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Votre nom de famille</label>
                    <input type="text" id="last_name" name="last_name" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="age" class="block text-sm font-medium text-gray-700">Votre âge</label>
                    <input type="number" id="age" name="age" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Votre numéro de téléphone</label>
                    <input type="text" id="phone" name="phone" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Votre Email</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="consent" class="block text-sm font-medium text-gray-700">
                        <input type="checkbox" id="consent" name="consent" required class="mr-2">
                        J'autorise le stockage de mes informations personnelles
                    </label>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Postuler
                    </button>
                </div>
            </form>

        @endforeach

    @endif

</x-app-layout>
