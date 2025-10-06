<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Greentsika HR Management - Leave &amp; Absences View</title>
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
            gap: 0.25rem;
            line-height: 1;
            text-transform: capitalize;
        }
        .status-pending {
            background-color: #fef9c3;
            color: #ca8a04;
        }
        .status-approved {
            background-color: #dcfce7;
            color: #16a34a;
        }
        .status-refused {
            background-color: #fee2e2;
            color: #dc2626;
        }
        .dark .status-pending {
            background-color: #854d0e;
            color: #fef9c3;
        }
        .dark .status-approved {
            background-color: #166534;
            color: #dcfce7;
        }
        .dark .status-refused {
            background-color: #991b1b;
            color: #fee2e2;
        }
        [x-cloak] {
            display: none !important;
        }
    </style>
<script defer="" src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-background-light dark:bg-background-dark font-body text-text-light dark:text-text-dark" x-data="{ modalOpen: false }">
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
<span>Équipe</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-light dark:text-text-dark bg-primary/10 dark:bg-primary/20 font-semibold" href="#">
<span class="material-symbols-outlined">event_busy</span>
<span>Congés &amp; Absences</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">timer</span>
<span>Pointage</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">person</span>
<span>Mon Profil</span>
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
<h2 class="text-2xl font-bold font-display text-text-light dark:text-text-dark">Congés &amp; Absences</h2>
<div class="flex items-center gap-4">
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-text-light dark:hover:text-text-dark">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBEJg0aghtyYYbGJE6Jau-8Au9RfROclaYc0G7KvNZaCb95GVAkQiMkfe9Su2sGiUe9B78tjMSft4uuWYJ9rwFragzWSx9nzQN4MU24LmWvohh4o_TZ8HxNKP1yNDAD4QBU0tOi6tQELOVvvQocQo_mePE1gqUguHYKW21E4AOyixWB5IJ-s63ShJe1hCVEtsCpRD-iS5VuGpCW8RY1D1ItGn2ExfDbWBdT3iqRHSVOudNlIfvrAOZp8ljBUKbAxxZ7IQamP1-LCv2");'></div>
</div>
</div>
</div>
</header>
<main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8">
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<div class="lg:col-span-2 space-y-8">
<div>
<div class="flex justify-between items-center mb-6">
<div>
<h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark">Demandes de l'Équipe</h3>
<p class="text-text-muted-light dark:text-text-muted-dark">Consultez et gérez les demandes de congé de vos collaborateurs.</p>
</div>
</div>
<div class="bg-accent dark:bg-secondary/20 rounded-lg shadow-soft overflow-x-auto">
<table class="w-full text-left">
<thead class="border-b border-secondary/10 dark:border-secondary/30">
<tr>
<th class="p-4 font-semibold text-text-light dark:text-text-dark">Demandes (demande équipe)</th>
<th class="p-4 font-semibold text-text-light dark:text-text-dark text-center">Actions (Approuver/Refuser)</th>
</tr>
</thead>
<tbody class="divide-y divide-secondary/10 dark:divide-secondary/30">
<tr class="align-top">
<td class="p-4">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-cover bg-center flex-shrink-0" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBEJg0aghtyYYbGJE6Jau-8Au9RfROclaYc0G7KvNZaCb95GVAkQiMkfe9Su2sGiUe9B78tjMSft4uuWYJ9rwFragzWSx9nzQN4MU24LmWvohh4o_TZ8HxNKP1yNDAD4QBU0tOi6tQELOVvvQocQo_mePE1gqUguHYKW21E4AOyixWB5IJ-s63ShJe1hCVEtsCpRD-iS5VuGpCW8RY1D1ItGn2ExfDbWBdT3iqRHSVOudNlIfvrAOZp8ljBUKbAxxZ7IQamP1-LCv2");'></div>
<div>
<p class="font-semibold text-text-light dark:text-text-dark">Jane Doe</p>
<p class="text-sm text-text-muted-light dark:text-text-muted-dark">Congé payé</p>
<p class="text-sm font-semibold text-primary">Du 25 au 29 Mars 2024</p>
</div>
</div>
</td>
<td class="p-4">
<div class="flex justify-center items-center gap-2">
<button class="px-3 py-1.5 rounded-md text-sm font-semibold bg-green-500/10 text-green-700 dark:bg-green-500/20 dark:text-green-300 hover:bg-green-500/20 dark:hover:bg-green-500/30 transition-colors flex items-center gap-1">
<span class="material-symbols-outlined text-base">check</span>
<span>Approuver</span>
</button>
<button @click="modalOpen = true" class="px-3 py-1.5 rounded-md text-sm font-semibold bg-red-500/10 text-red-700 dark:bg-red-500/20 dark:text-red-300 hover:bg-red-500/20 dark:hover:bg-red-500/30 transition-colors flex items-center gap-1">
<span class="material-symbols-outlined text-base">close</span>
<span>Refuser</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div>
<div class="flex justify-between items-center mb-6">
<div>
<h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark">Historique des demandes</h3>
<p class="text-text-muted-light dark:text-text-muted-dark">Retrouvez l'historique des demandes de congés approuvées et refusées.</p>
</div>
<div class="flex items-center gap-2">
<button class="bg-primary text-secondary font-bold py-2 px-4 rounded-lg flex items-center gap-2 hover:bg-primary/90 transition-colors shadow-soft">
<span class="material-symbols-outlined">download</span>
<span>Exporter</span>
</button>
</div>
</div>
<div class="bg-accent dark:bg-secondary/20 rounded-lg shadow-soft overflow-x-auto">
<table class="w-full text-left">
<thead class="border-b border-secondary/10 dark:border-secondary/30">
<tr>
<th class="p-4 font-semibold text-text-light dark:text-text-dark">Employé</th>
<th class="p-4 font-semibold text-text-light dark:text-text-dark">Type de demande</th>
<th class="p-4 font-semibold text-text-light dark:text-text-dark">Dates</th>
<th class="p-4 font-semibold text-text-light dark:text-text-dark">Statut</th>
<th class="p-4 font-semibold text-text-light dark:text-text-dark">Justification</th>
</tr>
</thead>
<tbody class="divide-y divide-secondary/10 dark:divide-secondary/30">
<tr>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4oyNck-cFxGq5OtFM2IbokILAKjAKmbJYCm-8pr3X047ObLK76yPK74y4mib5s8R7-uL7OfnEuc_A6W4r4df-GQ8x7W9_FSJuwht4uF1pDos8fj-235LRANFLC5Uog0twYVDZGSJ-EZRP3wzsf8NRpP8rCOePxr9h83onFeDD8pywL-ZQO9fB9tip4T7j0B4TtQKoiEtRznhetSvmLXLaVsEUxgji4FvsmVYSVWGubtl-C-WuZsLH7fQZeJmfCV71g8Wh9PonQei3");'></div>
<div>
<p class="font-semibold text-text-light dark:text-text-dark">Paul Martin</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">Chef de projet</p>
</div>
</div>
</td>
<td class="p-4 text-sm text-text-muted-light dark:text-text-muted-dark">Congé maladie</td>
<td class="p-4 text-sm font-semibold text-primary">18 Mars 2024</td>
<td class="p-4">
<span class="status-badge status-approved">
<span class="material-symbols-outlined text-sm">check_circle</span> Approuvé
                                                </span>
</td>
<td class="p-4 text-sm text-text-muted-light dark:text-text-muted-dark italic">"Bon rétablissement Paul."</td>
</tr>
<tr>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4oyNck-cFxGq5OtFM2IbokILAKjAKmbJYCm-8pr3X047ObLK76yPK74y4mib5s8R7-uL7OfnEuc_A6W4r4df-GQ8x7W9_FSJuwht4uF1pDos8fj-235LRANFLC5Uog0twYVDZGSJ-EZRP3wzsf8NRpP8rCOePxr9h83onFeDD8pywL-ZQO9fB9tip4T7j0B4TtQKoiEtRznhetSvmLXLaVsEUxgji4FvsmVYSVWGubtl-C-WuZsLH7fQZeJmfCV71g8Wh9PonQei3");'></div>
<div>
<p class="font-semibold text-text-light dark:text-text-dark">Alice Dupont</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">Data Analyst</p>
</div>
</div>
</td>
<td class="p-4 text-sm text-text-muted-light dark:text-text-muted-dark">Absence non justifiée</td>
<td class="p-4 text-sm font-semibold text-primary">15 Mars 2024</td>
<td class="p-4">
<span class="status-badge status-refused">
<span class="material-symbols-outlined text-sm">cancel</span> Refusé
                                                </span>
</td>
<td class="p-4 text-sm text-text-muted-light dark:text-text-muted-dark italic">"Aucun justificatif fourni."</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="lg:col-span-1">
<div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft sticky top-24">
<h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark mb-4">Soldes de Congés</h3>
<div class="space-y-4">
<div class="p-4 bg-background-light dark:bg-background-dark rounded-lg">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBEJg0aghtyYYbGJE6Jau-8Au9RfROclaYc0G7KvNZaCb95GVAkQiMkfe9Su2sGiUe9B78tjMSft4uuWYJ9rwFragzWSx9nzQN4MU24LmWvohh4o_TZ8HxNKP1yNDAD4QBU0tOi6tQELOVvvQocQo_mePE1gqUguHYKW21E4AOyixWB5IJ-s63ShJe1hCVEtsCpRD-iS5VuGpCW8RY1D1ItGn2ExfDbWBdT3iqRHSVOudNlIfvrAOZp8ljBUKbAxxZ7IQamP1-LCv2");'></div>
<div>
<p class="font-semibold text-text-light dark:text-text-dark">Jane Doe</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">Développeuse</p>
</div>
</div>
<div class="mt-3 grid grid-cols-2 gap-2 text-center">
<div>
<p class="text-xl font-bold text-primary">12j</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">Congés Payés</p>
</div>
<div>
<p class="text-xl font-bold text-primary">3j</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">RTT</p>
</div>
</div>
</div>
<div class="p-4 bg-background-light dark:bg-background-dark rounded-lg">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4oyNck-cFxGq5OtFM2IbokILAKjAKmbJYCm-8pr3X047ObLK76yPK74y4mib5s8R7-uL7OfnEuc_A6W4r4df-GQ8x7W9_FSJuwht4uF1pDos8fj-235LRANFLC5Uog0twYVDZGSJ-EZRP3wzsf8NRpP8rCOePxr9h83onFeDD8pywL-ZQO9fB9tip4T7j0B4TtQKoiEtRznhetSvmLXLaVsEUxgji4FvsmVYSVWGubtl-C-WuZsLH7fQZeJmfCV71g8Wh9PonQei3");'></div>
<div>
<p class="font-semibold text-text-light dark:text-text-dark">Marc Dubois</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">Designer</p>
</div>
</div>
<div class="mt-3 grid grid-cols-2 gap-2 text-center">
<div>
<p class="text-xl font-bold text-primary">8j</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">Congés Payés</p>
</div>
<div>
<p class="text-xl font-bold text-primary">1j</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">RTT</p>
</div>
</div>
</div>
<div class="p-4 bg-background-light dark:bg-background-dark rounded-lg">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4oyNck-cFxGq5OtFM2IbokILAKjAKmbJYCm-8pr3X047ObLK76yPK74y4mib5s8R7-uL7OfnEuc_A6W4r4df-GQ8x7W9_FSJuwht4uF1pDos8fj-235LRANFLC5Uog0twYVDZGSJ-EZRP3wzsf8NRpP8rCOePxr9h83onFeDD8pywL-ZQO9fB9tip4T7j0B4TtQKoiEtRznhetSvmLXLaVsEUxgji4FvsmVYSVWGubtl-C-WuZsLH7fQZeJmfCV71g8Wh9PonQei3");'></div>
<div>
<p class="font-semibold text-text-light dark:text-text-dark">Alice Dupont</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">Data Analyst</p>
</div>
</div>
<div class="mt-3 grid grid-cols-2 gap-2 text-center">
<div>
<p class="text-xl font-bold text-primary">15j</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">Congés Payés</p>
</div>
<div>
<p class="text-xl font-bold text-primary">5j</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">RTT</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</div>
<div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm" x-cloak="" x-show="modalOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-end="opacity-100" x-transition:enter-start="opacity-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-end="opacity-0" x-transition:leave-start="opacity-100">
<div @click.away="modalOpen = false" class="bg-accent dark:bg-secondary/40 rounded-lg shadow-soft max-w-md w-full p-6 m-4" x-show="modalOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-end="opacity-100 scale-100" x-transition:enter-start="opacity-0 scale-90" x-transition:leave="transition ease-in duration-200" x-transition:leave-end="opacity-0 scale-90" x-transition:leave-start="opacity-100 scale-100">
<div class="flex justify-between items-center mb-4">
<h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark">Justification de refus</h3>
<button @click="modalOpen = false" class="text-text-muted-light dark:text-text-muted-dark hover:text-text-light dark:hover:text-text-dark">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<div>
<label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="refusal_reason">Motif du refus</label>
<textarea class="w-full bg-background-light dark:bg-background-dark border-secondary/20 dark:border-secondary/40 rounded-md p-2 text-sm focus:ring-primary focus:border-primary placeholder:text-text-muted-light/70" id="refusal_reason" name="refusal_reason" placeholder="Veuillez saisir la raison du refus (ex: Période de forte activité, demande non conforme...)." rows="4"></textarea>
</div>
<div class="flex justify-end gap-2 mt-6">
<button @click="modalOpen = false" class="px-4 py-2 rounded-md text-sm font-semibold text-text-muted-light dark:text-text-muted-dark hover:bg-secondary/10 dark:hover:bg-secondary/30 transition-colors">Annuler</button>
<button @click="modalOpen = false" class="px-4 py-2 rounded-md text-sm font-semibold bg-red-600 text-white hover:bg-red-700 transition-colors shadow-soft">Confirmer le refus</button>
</div>
</div>
</div>

</body></html>