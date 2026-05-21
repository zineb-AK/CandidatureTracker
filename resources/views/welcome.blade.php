<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CandidatureTracker — Propulse ta recherche d'emploi</title>

    <!-- Fonts & Tailwind (Via CDN pour la démo, ou utilise Vite en production) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        /* Animation de flottement douce pour les illustrations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 antialiased selection:bg-indigo-500 selection:text-white">

    <!-- Navbar Transparente avec effet de flou au défilement -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/70 backdrop-blur-md border-b border-slate-200/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-2 font-bold text-xl tracking-tight text-indigo-600">
                <svg class="w-6 h-6 animate-pulse" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Candidature<span class="text-slate-800">Tracker</span></span>
            </a>

            <!-- Liens d'authentification -->
            <div class="flex items-center gap-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-6 py-2.5 rounded-full bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition-all shadow-md shadow-indigo-200 hover:shadow-lg">
                            Tableau de bord
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-5 py-2.5 rounded-full text-sm font-semibold text-slate-700 hover:text-indigo-600 transition-colors">
                            Connexion
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-6 py-2.5 rounded-full text-sm font-semibold bg-slate-900 text-white hover:bg-slate-800 transition-all shadow-sm">
                                Créer un compte
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative pt-32 pb-20 md:pt-44 md:pb-32 overflow-hidden bg-gradient-to-b from-indigo-50/50 via-white to-slate-50">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-10">
            
            <!-- Texte principal -->
            <div class="space-y-6 text-center md:text-left">
                <span class="inline-flex items-center gap-1.5 py-1.5 px-4 rounded-full text-xs font-semibold bg-indigo-50 text-indigo-700 border border-indigo-100">
                    Idéal pour les jeunes diplômés
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    Centralise tes candidatures. <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-violet-600">Décroche ton job.</span>
                </h1>
                <p class="text-lg text-slate-600 max-w-xl mx-auto md:mx-0 leading-relaxed">
                    Fini le stress des notes volantes. Organise tes démarches, planifie tes entretiens et suis ton entonnoir de recrutement au même endroit.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start pt-2">
                    <a href="{{ route('register') }}" class="px-8 py-4 rounded-full bg-indigo-600 text-white font-semibold text-center hover:bg-indigo-700 transition-all transform hover:-translate-y-0.5 shadow-xl shadow-indigo-200">
                        Commencer gratuitement
                    </a>
                    <a href="#features" class="px-8 py-4 rounded-full bg-white text-slate-700 font-semibold text-center border border-slate-200 hover:bg-slate-50 transition-all">
                        Découvrir les fonctionnalités
                    </a>
                </div>
            </div>

            <!-- Illustration Animée Significative -->
            <div class="relative flex justify-center items-center">
                <!-- Cercles décoratifs en arrière-plan -->
                <div class="absolute w-72 h-72 bg-indigo-200 rounded-full blur-3xl opacity-30 -top-10 -left-10 animate-pulse"></div>
                <div class="absolute w-72 h-72 bg-violet-200 rounded-full blur-3xl opacity-30 -bottom-10 -right-10 animate-pulse"></div>
                
                <!-- SVG Interactif simulant le tableau de bord -->
                <svg class="w-full max-w-md h-auto animate-float drop-shadow-2xl" viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Fenêtre principale de l'app -->
                    <rect width="500" height="400" rx="24" fill="white"/>
                    <rect x="0" y="0" width="500" height="60" rx="24" fill="#F8FAFC"/>
                    <circle cx="30" cy="30" r="6" fill="#EF4444"/>
                    <circle cx="50" cy="30" r="6" fill="#F59E0B"/>
                    <circle cx="70" cy="30" r="6" fill="#10B981"/>
                    
                    <!-- Colonne 1 : Candidatures (Kanban/Liste) -->
                    <rect x="30" y="90" width="200" height="80" rx="16" fill="#EEF2F6"/>
                    <rect x="50" y="110" width="120" height="12" rx="6" fill="#6366F1"/>
                    <rect x="50" y="132" width="80" height="8" rx="4" fill="#94A3B8"/>
                    <rect x="180" y="140" width="36" height="16" rx="8" fill="#E0E7FF"/>

                    <rect x="30" y="185" width="200" height="80" rx="16" fill="#EEF2F6"/>
                    <rect x="50" y="205" width="140" height="12" rx="6" fill="#0EA5E9"/>
                    <rect x="50" y="227" width="60" height="8" rx="4" fill="#94A3B8"/>
                    
                    <!-- Colonne 2 : Entretiens & Rappels -->
                    <rect x="270" y="90" width="200" height="175" rx="16" fill="#F5F3FF" stroke="#DDD6FE" stroke-width="2"/>
                    <!-- Icône Calendrier stylisée -->
                    <rect x="295" y="120" width="40" height="40" rx="12" fill="#8B5CF6"/>
                    <path d="M307 135L313 141L323 131" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <rect x="350" y="126" width="90" height="12" rx="6" fill="#4C1D95"/>
                    <rect x="350" y="146" width="70" height="8" rx="4" fill="#A78BFA"/>
                    
                    <!-- Graphique Statut / Entonnoir symbolique -->
                    <rect x="30" y="290" width="440" height="80" rx="16" fill="#F8FAFC"/>
                    <rect x="60" y="326" width="120" height="12" rx="6" fill="#10B981"/>
                    <rect x="195" y="326" width="160" height="12" rx="6" fill="#E2E8F0"/>
                    <circle cx="420" cy="332" r="16" fill="#10B981" fill-opacity="0.2"/>
                    <path d="M414 332L418 336L426 328" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
        </div>
    </header>

    <!-- Section Features / Bénéfices -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                    Tout pour maîtriser ton recrutement
                </h2>
                <p class="text-slate-600">
                    Conçu spécifiquement pour structurer tes recherches et te libérer de la charge mentale.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:shadow-xl hover:shadow-slate-100 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Suivi Centralisé</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Enregistre tes offres cibles (Startups, Agences, CAC 40) avec leur priorité, statut en français et tes notes personnelles.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:shadow-xl hover:shadow-slate-100 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-violet-50 flex items-center justify-center text-violet-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Zéro Relance Oubliée</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Planifie tes entretiens (RH, techniques ou visio) et prépare tes sessions directement liés à la fiche entreprise.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:shadow-xl hover:shadow-slate-100 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Système d'Archives</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Une offre est refusée ou abandonnée ? Archive-la en un clic via notre mécanique Soft Delete pour garder un historique complet.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-6">
            <p class="text-sm">&copy; {{ date('Y') }} CandidatureTracker. Fait pour propulser les jeunes talents.</p>
            <div class="flex gap-6 text-sm">
                <a href="#" class="hover:text-white transition-colors">Mentions légales</a>
                <a href="#" class="hover:text-white transition-colors">Confidentialité</a>
            </div>
        </div>
    </footer>

</body>
</html>