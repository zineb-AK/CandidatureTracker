<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Créer une candidature
            </h2>

            <a href="{{ route('dashboard') }}"
               class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
                ← Retour
            </a>
        </div>
    </x-slot>

    <div class="py-10 bg-gray-100 min-h-screen">

        <div class="max-w-4xl mx-auto px-6">

            <!-- CARD -->
            <div class="bg-white shadow-lg rounded-2xl p-8">

                <h3 class="text-xl font-bold text-gray-800 mb-6">
                    Ajouter une nouvelle opportunité
                </h3>

                <form method="POST" action="{{ route('candidature.store') }}" class="space-y-5">
                    @csrf

                    <!-- Entreprise -->
                    <div>
                        <label class="text-sm font-medium text-gray-700">Nom de l'entreprise</label>
                        <input type="text" name="nom_entreprise"
                            class="w-full mt-1 rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value="{{ old('nom_entreprise') }}">
                    </div>

                    <!-- Poste -->
                    <div>
                        <label class="text-sm font-medium text-gray-700">Poste</label>
                        <input type="text" name="poste"
                            class="w-full mt-1 rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value="{{ old('poste') }}">
                    </div>

                    <!-- URL -->
                    <div>
                        <label class="text-sm font-medium text-gray-700">URL de l'offre</label>
                        <input type="url" name="url_offre"
                            class="w-full mt-1 rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value="{{ old('url_offre') }}">
                    </div>

                    <!-- GRID -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                        <!-- Statut -->
                        <div>
                            <label class="text-sm font-medium text-gray-700">Statut</label>
                            <select name="statut"
                                class="w-full mt-1 rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">

                                <option value="a examiner">À examiner</option>
                                <option value="entretien programme">Entretien programmé</option>
                                <option value="offre reçue">Offre reçue</option>
                                <option value="refusee">Refusée</option>
                                <option value="abandonnee">Abandonnée</option>

                            </select>
                        </div>

                        <!-- Priorité -->
                        <div>
                            <label class="text-sm font-medium text-gray-700">Priorité</label>
                            <select name="priorite"
                                class="w-full mt-1 rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">

                                <option value="faible">Faible</option>
                                <option value="moyenne" selected>Moyenne</option>
                                <option value="haute">Haute</option>

                            </select>
                        </div>

                    </div>

                    <!-- Date -->
                    <div>
                        <label class="text-sm font-medium text-gray-700">Date de candidature</label>
                        <input type="date" name="date_candidature"
                            class="w-full mt-1 rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <!-- Notes -->
                    <div>
                        <label class="text-sm font-medium text-gray-700">Notes</label>
                        <textarea name="notes" rows="4"
                            class="w-full mt-1 rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>

                    <!-- BUTTON -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                            Enregistrer
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>