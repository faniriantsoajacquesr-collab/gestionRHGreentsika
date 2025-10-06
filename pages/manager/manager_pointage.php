<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Greentsika HR Management - Attendance View</title>
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
        .status-present {
            background-color: #dcfce7;
            color: #16a34a;
        }
        .status-late {
            background-color: #fef9c3;
            color: #ca8a04;
        }
        .status-absent {
            background-color: #fee2e2;
            color: #dc2626;
        }
        .dark .status-present {
            background-color: #166534;
            color: #dcfce7;
        }
        .dark .status-late {
            background-color: #854d0e;
            color: #fef9c3;
        }
        .dark .status-absent {
            background-color: #991b1b;
            color: #fee2e2;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-body text-text-light dark:text-text-dark">
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
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">event_busy</span>
<span>Demandes de congé</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-light dark:text-text-dark bg-primary/10 dark:bg-primary/20 font-semibold" href="#">
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
<h2 class="text-2xl font-bold font-display text-text-light dark:text-text-dark">Pointage &amp; Présence</h2>
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
<div class="lg:col-span-2">
<div class="flex justify-between items-center mb-6">
<div>
<h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark">Pointage de l'Équipe</h3>
<p class="text-text-muted-light dark:text-text-muted-dark">Lundi 18 Mars 2024</p>
</div>
<div class="flex items-center gap-2">
<input class="bg-accent dark:bg-secondary/20 border-secondary/20 dark:border-secondary/30 rounded-lg p-2 text-sm focus:ring-primary focus:border-primary" type="date" value="2024-03-18"/>
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
<th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Employé</th>
<th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Heure d'arrivée</th>
<th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Statut</th>
<th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Remarques</th>
<th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Actions</th>
</tr>
</thead>
<tbody>
<tr class="border-b border-accent dark:border-secondary/20">
<td class="p-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBEJg0aghtyYYbGJE6Jau-8Au9RfROclaYc0G7KvNZaCb95GVAkQiMkfe9Su2sGiUe9B78tjMSft4uuWYJ9rwFragzWSx9nzQN4MU24LmWvohh4o_TZ8HxNKP1yNDAD4QBU0tOi6tQELOVvvQocQo_mePE1gqUguHYKW21E4AOyixWB5IJ-s63ShJe1hCVEtsCpRD-iS5VuGpCW8RY1D1ItGn2ExfDbWBdT3iqRHSVOudNlIfvrAOZp8ljBUKbAxxZ7IQamP1-LCv2");'></div>
<div>
<p class="font-semibold text-text-light dark:text-text-dark">Jane Doe</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">Développeuse</p>
</div>
</div>
</td>
<td class="p-4 text-sm font-semibold text-text-light dark:text-text-dark">08:02</td>
<td class="p-4">
<span class="status-badge status-present">
<span class="material-symbols-outlined text-sm">check_circle</span>
                                        Présent
                                    </span>
</td>
<td class="p-4 text-sm text-text-muted-light dark:text-text-muted-dark italic">--</td>
<td class="p-4">
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">edit_note</span></button>
</td>
</tr>
<tr class="border-b border-accent dark:border-secondary/20">
<td class="p-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4oyNck-cFxGq5OtFM2IbokILAKjAKmbJYCm-8pr3X047ObLK76yPK74y4mib5s8R7-uL7OfnEuc_A6W4r4df-GQ8x7W9_FSJuwht4uF1pDos8fj-235LRANFLC5Uog0twYVDZGSJ-EZRP3wzsf8NRpP8rCOePxr9h83onFeDD8pywL-ZQO9fB9tip4T7j0B4TtQKoiEtRznhetSvmLXLaVsEUxgji4FvsmVYSVWGubtl-C-WuZsLH7fQZeJmfCV71g8Wh9PonQei3");'></div>
<div>
<p class="font-semibold text-text-light dark:text-text-dark">Marc Dubois</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">Designer</p>
</div>
</div>
</td>
<td class="p-4 text-sm font-semibold text-yellow-600 dark:text-yellow-400">08:17</td>
<td class="p-4">
<span class="status-badge status-late">
<span class="material-symbols-outlined text-sm">schedule</span>
                                        En retard
                                    </span>
</td>
<td class="p-4 text-sm text-text-light dark:text-text-dark">Prévenu par SMS, transport en commun.</td>
<td class="p-4">
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">edit_note</span></button>
</td>
</tr>
<tr class="border-b border-accent dark:border-secondary/20">
<td class="p-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4oyNck-cFxGq5OtFM2IbokILAKjAKmbJYCm-8pr3X047ObLK76yPK74y4mib5s8R7-uL7OfnEuc_A6W4r4df-GQ8x7W9_FSJuwht4uF1pDos8fj-235LRANFLC5Uog0twYVDZGSJ-EZRP3wzsf8NRpP8rCOePxr9h83onFeDD8pywL-ZQO9fB9tip4T7j0B4TtQKoiEtRznhetSvmLXLaVsEUxgji4FvsmVYSVWGubtl-C-WuZsLH7fQZeJmfCV71g8Wh9PonQei3");'></div>
<div>
<p class="font-semibold text-text-light dark:text-text-dark">Paul Martin</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">Chef de projet</p>
</div>
</div>
</td>
<td class="p-4 text-sm font-semibold text-red-600 dark:text-red-400">--</td>
<td class="p-4">
<span class="status-badge status-absent">
<span class="material-symbols-outlined text-sm">person_off</span>
                                        Absent
                                    </span>
</td>
<td class="p-4 text-sm text-text-light dark:text-text-dark">Jour de congé validé.</td>
<td class="p-4">
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">edit_note</span></button>
</td>
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
<td class="p-4 text-sm font-semibold text-text-light dark:text-text-dark">07:55</td>
<td class="p-4">
<span class="status-badge status-present">
<span class="material-symbols-outlined text-sm">check_circle</span>
                                        Présent
                                    </span>
</td>
<td class="p-4 text-sm text-text-muted-light dark:text-text-muted-dark italic">--</td>
<td class="p-4">
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">edit_note</span></button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="lg:col-span-1">
<div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft">
<h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark mb-4">Mon Pointage</h3>
<div class="flex items-center justify-center gap-4 my-6">
<button class="flex flex-col items-center justify-center w-32 h-32 rounded-full bg-green-100 dark:bg-green-900/50 text-green-600 dark:text-green-300 hover:bg-green-200 dark:hover:bg-green-800/70 transition-all duration-300 transform hover:scale-105 shadow-soft">
<span class="material-symbols-outlined text-5xl">login</span>
<span class="font-semibold mt-1">Check-in</span>
</button>
<button class="flex flex-col items-center justify-center w-32 h-32 rounded-full bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800/70 transition-all duration-300 transform hover:scale-105 shadow-soft">
<span class="material-symbols-outlined text-5xl">logout</span>
<span class="font-semibold mt-1">Check-out</span>
</button>
</div>
<div class="mt-8">
<h4 class="font-semibold text-text-light dark:text-text-dark mb-3">Mon Historique Récent</h4>
<div class="space-y-3">
<div class="flex justify-between items-center p-3 bg-background-light dark:bg-background-dark rounded-lg">
<div>
<p class="font-semibold">Vendredi 15 Mars</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">08:05 - 17:02</p>
</div>
<p class="font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">8h 57m</p>
</div>
<div class="flex justify-between items-center p-3 bg-background-light dark:bg-background-dark rounded-lg">
<div>
<p class="font-semibold">Jeudi 14 Mars</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">07:58 - 17:10</p>
</div>
<p class="font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">9h 12m</p>
</div>
<div class="flex justify-between items-center p-3 bg-background-light dark:bg-background-dark rounded-lg">
<div>
<p class="font-semibold">Mercredi 13 Mars</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">08:15 - 17:00</p>
</div>
<p class="font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">8h 45m</p>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</div>

</body></html>