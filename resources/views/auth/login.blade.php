<x-guest-layout>
    <!-- Status de Session (Succès) -->
    <x-auth-session-status class="mb-6 text-center text-sm font-medium p-3.5 bg-emerald-500/10 text-emerald-700 rounded-2xl border border-emerald-500/20 backdrop-blur-sm" :status="session('status')" />

    <!-- En-tête de la carte -->
    <div class="text-center mb-8 space-y-2">
        <a href="/" class="inline-flex items-center gap-2 font-bold text-2xl tracking-tight text-indigo-600 justify-center">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>Candidature<span class="text-slate-800">Tracker</span></span>
        </a>
        <p class="text-xs text-slate-500 font-medium tracking-wide">Accède à ton espace de suivi personnalisé</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Adresse Email -->
        <div class="space-y-1.5">
            <x-input-label for="email" :value="__('Adresse Email')" class="text-slate-700 font-bold text-[11px] uppercase tracking-wider pl-1" />
            <x-text-input id="email" 
                class="block w-full px-5 py-3 rounded-full border-slate-200/80 focus:border-indigo-500 focus:ring-indigo-500/20 bg-white/50 text-sm transition-all placeholder:text-slate-400" 
                type="email" 
                name="email" 
                :value="old('email')" 
                required 
                autofocus 
                autocomplete="username" 
                placeholder="nom@exemple.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-1 pl-2" />
        </div>

        <!-- Mot de passe -->
        <div class="space-y-1.5">
            <div class="flex items-center justify-between pl-1">
                <x-input-label for="password" :value="__('Mot de passe')" class="text-slate-700 font-bold text-[11px] uppercase tracking-wider" />
                @if (Route::has('password.request'))
                    <a class="text-xs text-indigo-600 hover:text-indigo-700 font-semibold transition-colors" href="{{ route('password.request') }}">
                        {{ __('Oublié ?') }}
                    </a>
                @endif
            </div>
            <x-text-input id="password" 
                class="block w-full px-5 py-3 rounded-full border-slate-200/80 focus:border-indigo-500 focus:ring-indigo-500/20 bg-white/50 text-sm transition-all placeholder:text-slate-400"
                type="password"
                name="password"
                required 
                autocomplete="current-password" 
                placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-1 pl-2" />
        </div>

        <!-- Se souvenir de moi -->
        <div class="flex items-center justify-between pt-1 pl-1">
            <label for="remember_me" class="inline-flex items-center cursor-pointer select-none">
                <input id="remember_me" type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500/30 transition-all cursor-pointer" name="remember">
                <span class="ms-2 text-xs text-slate-600 font-medium">{{ __('Rester connecté') }}</span>
            </label>
        </div>

        <!-- Bouton de connexion -->
        <div class="pt-2">
            <x-primary-button class="w-full justify-center py-3.5 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold shadow-lg shadow-indigo-600/20 active:scale-[0.98] transition-all text-sm normal-case tracking-normal">
                {{ __('Se connecter') }}
            </x-primary-button>
        </div>

        <!-- Lien d'inscription -->
        @if (Route::has('register'))
            <p class="text-center text-xs text-slate-500 pt-2">
                Nouveau sur la plateforme ? 
                <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-700 font-bold transition-colors pl-1">Créer un compte</a>
            </p>
        @endif
    </form>
</x-guest-layout>