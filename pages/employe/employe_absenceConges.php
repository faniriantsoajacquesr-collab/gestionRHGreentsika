<!DOCTYPE html>
<html lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Greentsika HR Management - Congés et Absences</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Nunito+Sans:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#7fe548",
                        "secondary": "#2c542f",
                        "accent": "#f2f4f0",
                        "background-light": "#f7f8f6",
                        "text-light": "#131711",
                        "text-muted-light": "#708764",
                        "background-dark": "#172111",
                        "text-dark": "#f7f8f6",
                        "text-muted-dark": "#a8b5a3"
                    },
                    fontFamily: {
                        "display": ["Poppins", "sans-serif"],
                        "body": ["Nunito Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "full": "9999px"
                    },
                    boxShadow: {
                        "soft": "0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03)",
                    }
                },
            },
        }
    </script>
<style>
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .status-pending {
            background-color: #fef9c3;
            color: #854d0e;
        }
        .status-approved {
            background-color: #dcfce7;
            color: #166534;
        }
        .status-rejected {
            background-color: #fee2e2;
            color: #991b1b;
        }
        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            opacity: 0.6;
        }
        input[type="date"]::-webkit-calendar-picker-indicator:hover {
            opacity: 1;
        }
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-body text-text-light dark:text-text-dark" x-data="{ modalOpen: false }" x-cloak>
<div class="flex min-h-screen">
<aside class="w-64 bg-accent dark:bg-background-dark border-r border-accent dark:border-secondary/20 flex-shrink-0">
<div class="flex items-center gap-3 h-16 px-6 border-b border-accent dark:border-secondary/20">
<div class="text-primary">
<svg class="h-8 w-8" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M12.0799 24L4 19.2479L9.95537 8.75216L18.04 13.4961L18.0446 4H29.9554L29.96 13.4961L38.0446 8.75216L44 19.2479L35.92 24L44 28.7521L38.0446 39.2479L29.96 34.5039L29.9554 44H18.0446L18.04 34.5039L9.95537 39.2479L4 28.7521L12.0799 24Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h1 class="text-xl font-display font-bold text-text-light dark:text-text-dark">Greentsika</h1>
</div>
<nav class="p-4 space-y-2">
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span>Tableau de bord</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">groups</span>
<span>Suivi des employés</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">timer</span>
<span>Pointage</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-light dark:text-text-dark bg-primary/10 dark:bg-primary/20 font-semibold" href="#">
<span class="material-symbols-outlined">event_busy</span>
<span>Congés et absences</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">payments</span>
<span>Salaires</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">account_balance</span>
<span>Caisse sociale</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<span>Paramètres</span>
</a>
</nav>
</aside>
<div class="flex-1 flex flex-col">
<header class="bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm sticky top-0 z-10 border-b border-accent dark:border-secondary/20">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<h2 class="text-2xl font-bold font-display text-text-light dark:text-text-dark">Congés et Absences</h2>
<div class="flex items-center gap-4">
<span class="font-semibold">John Doe</span>
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBEJg0aghtyYYbGJE6Jau-8Au9RfROclaYc0G7KvNZaCb95GVAkQiMkfe9Su2sGiUe9B78tjMSft4uuWYJ9rwFragzWSx9nzQN4MU24LmWvohh4o_TZ8HxNKP1yNDAD4QBU0tOi6tQELOVvvQocQo_mePE1gqUguHYKW21E4AOyixWB5IJ-s63ShJe1hCVEtsCpRD-iS5VuGpCW8RY1D1ItGn2ExfDbWBdT3iqRHSVOudNlIfvrAOZp8ljBUKbAxxZ7IQamP1-LCv2");'></div>
</div>
</div>
</div>
</header>
<main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8">
<div class="max-w-6xl mx-auto">
<div class="flex justify-between items-center mb-6">
<div class="bg-green-100 dark:bg-green-900/30 p-4 rounded-lg shadow-soft flex items-center gap-4">
<div class="text-center">
<h4 class="font-display text-base font-semibold text-green-800 dark:text-green-200">Solde de congés</h4>
<p class="text-sm text-green-700 dark:text-green-300">jours restants</p>
</div>
<p class="text-4xl font-bold text-green-600 dark:text-primary">15</p>
</div>
<button @click="modalOpen = true" class="bg-primary hover:bg-primary/90 text-secondary font-bold py-2 px-4 rounded-lg shadow-soft transition-colors flex items-center justify-center gap-2" type="button">
<span class="material-symbols-outlined">add</span>
<span>Demander un congé ou une absence</span>
</button>
</div>
<div class="bg-white dark:bg-background-dark/50 p-6 rounded-lg shadow-soft">
<div class="flex justify-between items-center mb-4 border-b border-accent dark:border-secondary/20 pb-4">
<h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark">Historique des Demandes</h3>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-text-muted-light dark:text-text-muted-dark">history</span>
<span class="font-semibold text-sm">Mes 5 dernières demandes</span>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="border-b border-accent dark:border-secondary/20">
<tr>
<th class="py-3 px-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Période</th>
<th class="py-3 px-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Jours</th>
<th class="py-3 px-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Motif</th>
<th class="py-3 px-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark text-center">Statut</th>
</tr>
</thead>
<tbody>
<tr class="border-b border-accent dark:border-secondary/20">
<td class="py-4 px-4 font-medium">01/08/24 - 05/08/24</td>
<td class="py-4 px-4 text-center">5</td>
<td class="py-4 px-4">Congés annuels</td>
<td class="py-4 px-4 text-center"><span class="status-badge status-pending">🟡 En attente</span></td>
</tr>
<tr class="border-b border-accent dark:border-secondary/20">
<td class="py-4 px-4 font-medium">15/05/24 - 15/05/24</td>
<td class="py-4 px-4 text-center">1</td>
<td class="py-4 px-4">Absence maladie</td>
<td class="py-4 px-4 text-center"><span class="status-badge status-approved">🟢 Validée</span></td>
</tr>
<tr class="border-b border-accent dark:border-secondary/20">
<td class="py-4 px-4 font-medium">10/04/24 - 12/04/24</td>
<td class="py-4 px-4 text-center">3</td>
<td class="py-4 px-4">Raisons personnelles</td>
<td class="py-4 px-4 text-center"><span class="status-badge status-rejected">🔴 Refusée</span></td>
</tr>
<tr class="border-b border-accent dark:border-secondary/20">
<td class="py-4 px-4 font-medium">20/02/24 - 28/02/24</td>
<td class="py-4 px-4 text-center">7</td>
<td class="py-4 px-4">Congés annuels</td>
<td class="py-4 px-4 text-center"><span class="status-badge status-approved">🟢 Validée</span></td>
</tr>
<tr>
<td class="py-4 px-4 font-medium">05/01/24 - 05/01/24</td>
<td class="py-4 px-4 text-center">1</td>
<td class="py-4 px-4">Rendez-vous médical</td>
<td class="py-4 px-4 text-center"><span class="status-badge status-approved">🟢 Validée</span></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</main>
</div>
</div>
<div class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center" x-show="modalOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
<div @click.away="modalOpen = false" class="bg-white dark:bg-background-dark/80 backdrop-blur-lg w-full max-w-lg p-6 rounded-lg shadow-soft m-4" x-show="modalOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
<div class="flex justify-between items-center mb-4">
<h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark">Nouvelle Demande</h3>
<button @click="modalOpen = false" class="text-text-muted-light dark:text-text-muted-dark hover:text-text-light dark:hover:text-text-dark">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<form class="space-y-4">
<div>
<label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="start-date-modal">Date de début</label>
<input class="w-full bg-accent dark:bg-secondary/20 border-secondary/20 rounded focus:ring-primary focus:border-primary" id="start-date-modal" type="date"/>
</div>
<div>
<label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="end-date-modal">Date de fin</label>
<input class="w-full bg-accent dark:bg-secondary/20 border-secondary/20 rounded focus:ring-primary focus:border-primary" id="end-date-modal" type="date"/>
</div>
<div>
<label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="reason-modal">Motif</label>
<textarea class="w-full bg-accent dark:bg-secondary/20 border-secondary/20 rounded focus:ring-primary focus:border-primary" id="reason-modal" rows="3"></textarea>
</div>
<div class="flex justify-between items-center bg-green-100/50 dark:bg-green-900/20 p-3 rounded-lg">
<span class="font-semibold text-secondary dark:text-text-dark">Nombre de jours:</span>
<span class="font-bold text-lg text-secondary dark:text-text-dark">5</span>
</div>
<button class="w-full bg-primary hover:bg-primary/90 text-secondary font-bold py-3 px-4 rounded-lg shadow-soft transition-colors flex items-center justify-center gap-2" type="submit">
<span class="material-symbols-outlined">send</span>
<span>Envoyer la demande</span>
</button>
</form>
</div>
</div>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body></html>