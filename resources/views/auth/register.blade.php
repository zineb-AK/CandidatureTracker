<x-guest-layout>
    <!-- En-tête de la carte d'inscription -->
    <div class="text-center mb-6 space-y-2">
        <a href="/" class="inline-flex items-center gap-2 font-bold text-2xl tracking-tight text-indigo-600 justify-center">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>Candidature<span class="text-slate-800">Tracker</span></span>
        </a>
        <p class="text-xs text-slate-500 font-medium tracking-wide">Rejoins-nous pour propulser ta recherche d'emploi</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <!-- Nom / Prénom -->
        <div class="space-y-1.5">
            <x-input-label for="name" :value="__('Nom complet')" class="text-slate-700 font-bold text-[11px] uppercase tracking-wider pl-1" />
            <x-text-input id="name" 
                class="block w-full px-5 py-3 rounded-full border-slate-200/80 focus:border-indigo-500 focus:ring-indigo-500/20 bg-white/50 text-sm transition-all placeholder:text-slate-400" 
                type="text" 
                name="name" 
                :value="old('name')" 
                required 
                autofocus 
                autocomplete="name" 
                placeholder="Alex Martin" />
            <x-input-error :messages="$errors->get('name')" class="mt-1 pl-2" />
        </div>

        <!-- Adresse Email -->
        <div class="space-y-1.5">
            <x-input-label for="email" :value="__('Adresse Email')" class="text-slate-700 font-bold text-[11px] uppercase tracking-wider pl-1" />
            <x-text-input id="email" 
                class="block w-full px-5 py-3 rounded-full border-slate-200/80 focus:border-indigo-500 focus:ring-indigo-500/20 bg-white/50 text-sm transition-all placeholder:text-slate-400" 
                type="email" 
                name="email" 
                :value="old('email')" 
                required 
                autocomplete="username" 
                placeholder="alex.martin@exemple.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-1 pl-2" />
        </div>

        <!-- Mot de passe -->
        <div class="space-y-1.5">
            <x-input-label for="password" :value="__('Mot de passe')" class="text-slate-700 font-bold text-[11px] uppercase tracking-wider pl-1" />
            <x-text-input id="password" 
                class="block w-full px-5 py-3 rounded-full border-slate-200/80 focus:border-indigo-500 focus:ring-indigo-500/20 bg-white/50 text-sm transition-all placeholder:text-slate-400"
                type="password"
                name="password"
                required 
                autocomplete="new-password" 
                placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-1 pl-2" />
        </div>

        <!-- Confirmer le mot de passe -->
        <div class="space-y-1.5">
            <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" class="text-slate-700 font-bold text-[11px] uppercase tracking-wider pl-1" />
            <x-text-input id="password_confirmation" 
                class="block w-full px-5 py-3 rounded-full border-slate-200/80 focus:border-indigo-500 focus:ring-indigo-500/20 bg-white/50 text-sm transition-all placeholder:text-slate-400"
                type="password"
                name="password_confirmation" 
                required 
                autocomplete="new-password" 
                placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 pl-2" />
        </div>

        <!-- Bouton d'action principal -->
        <div class="pt-3">
            <x-primary-button class="w-full justify-center py-3.5 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold shadow-lg shadow-indigo-600/20 active:scale-[0.98] transition-all text-sm normal-case tracking-normal">
                {{ __('Créer mon compte') }}
            </x-primary-button>
        </div>

        <!-- Lien de redirection vers la connexion -->
        <p class="text-center text-xs text-slate-500 pt-3">
            Déjà inscrit ? 
            <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-700 font-bold transition-colors pl-1">Se connecter</a>
        </p>
    </form>
</x-guest-layout>