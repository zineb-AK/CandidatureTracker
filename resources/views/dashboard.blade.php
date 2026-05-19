<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>

            <a href="{{ route('candidature.create') }}"
               class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                + Ajouter candidature
            </a>
        </div>
    </x-slot>

    <div class="py-10 bg-gray-100 min-h-screen">

        <div class="max-w-7xl mx-auto px-4">

            <!-- WELCOME CARD -->
            <div class="bg-white shadow rounded-xl p-6">
                <h3 class="text-lg font-semibold text-gray-800">
                    Bienvenue 👋
                </h3>

                <p class="text-gray-600 mt-2">
                    Ici vous pouvez gérer vos candidatures, suivre vos entretiens et organiser votre recherche d’emploi.
                </p>
            </div>

            <!-- QUICK ACTIONS -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">

                <div class="bg-blue-50 p-6 rounded-xl shadow">
                    <h4 class="font-semibold text-blue-700">Créer une candidature</h4>
                    <p class="text-gray-600 text-sm mt-2">
                        Ajouter une nouvelle opportunité.
                    </p>
                    <a href="{{ route('candidature.create') }}"
                       class="text-blue-600 font-medium mt-3 inline-block">
                        Accéder →
                    </a>
                </div>

                <div class="bg-green-50 p-6 rounded-xl shadow">
                    <h4 class="font-semibold text-green-700">Mes candidatures</h4>
                    <p class="text-gray-600 text-sm mt-2">
                        Voir la liste des candidatures.
                    </p>
                    <a href="#"
                       class="text-green-600 font-medium mt-3 inline-block">
                        Accéder →
                    </a>
                </div>

                <div class="bg-purple-50 p-6 rounded-xl shadow">
                    <h4 class="font-semibold text-purple-700">Entretiens</h4>
                    <p class="text-gray-600 text-sm mt-2">
                        Suivi des entretiens programmés.
                    </p>
                    <a href="#"
                       class="text-purple-600 font-medium mt-3 inline-block">
                        Accéder →
                    </a>
                </div>

            </div>

        </div>

    </div>

</x-app-layout>