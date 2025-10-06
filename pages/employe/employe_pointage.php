<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Greentsika HR Management - Pointage</title>
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
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .status-present {
            background-color: #dcfce7;
            color: #166534;
        }
        .status-retard {
            background-color: #fef9c3;
            color: #854d0e;
        }
        .status-absent {
            background-color: #fee2e2;
            color: #991b1b;
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
<span>Suivi des employés</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-light dark:text-text-dark bg-primary/10 dark:bg-primary/20 font-semibold" href="#">
<span class="material-symbols-outlined">timer</span>
<span>Pointage</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
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
<h2 class="text-2xl font-bold font-display text-text-light dark:text-text-dark">Pointage</h2>
<div class="flex items-center gap-4">
<span class="font-semibold">John Doe</span>
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBEJg0aghtyYYbGJE6Jau-8Au9RfROclaYc0G7KvNZaCb95GVAkQiMkfe9Su2sGiUe9B78tjMSft4uuWYJ9rwFragzWSx9nzQN4MU24LmWvohh4o_TZ8HxNKP1yNDAD4QBU0tOi6tQELOVvvQocQo_mePE1gqUguHYKW21E4AOyixWB5IJ-s63ShJe1hCVEtsCpRD-iS5VuGpCW8RY1D1ItGn2ExfDbWBdT3iqRHSVOudNlIfvrAOZp8ljBUKbAxxZ7IQamP1-LCv2");'></div>
</div>
</div>
</div>
</header>
<main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8">
<div class="max-w-5xl mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
<div class="lg:col-span-1 bg-gradient-to-br from-primary/80 to-primary/60 dark:from-primary/50 dark:to-primary/30 p-6 rounded-lg shadow-soft text-center">
<div class="w-24 h-24 rounded-full mx-auto mb-4 bg-cover bg-center border-4 border-white dark:border-background-dark shadow-md" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBEJg0aghtyYYbGJE6Jau-8Au9RfROclaYc0G7KvNZaCb95GVAkQiMkfe9Su2sGiUe9B78tjMSft4uuWYJ9rwFragzWSx9nzQN4MU24LmWvohh4o_TZ8HxNKP1yNDAD4QBU0tOi6tQELOVvvQocQo_mePE1gqUguHYKW21E4AOyixWB5IJ-s63ShJe1hCVEtsCpRD-iS5VuGpCW8RY1D1ItGn2ExfDbWBdT3iqRHSVOudNlIfvrAOZp8ljBUKbAxxZ7IQamP1-LCv2");'></div>
<h3 class="font-display text-2xl font-bold text-secondary dark:text-text-dark">Bienvenue, John!</h3>
<p class="text-secondary/80 dark:text-text-muted-dark mt-1">Prêt pour une nouvelle journée productive.</p>
<div class="mt-6 space-y-4">
<button class="w-full flex items-center justify-center gap-3 bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-6 rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
<span class="text-3xl">🟢</span>
<span class="text-xl">Check-in</span>
</button>
<button class="w-full flex items-center justify-center gap-3 bg-blue-500 hover:bg-blue-600 text-white font-bold py-4 px-6 rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
<span class="text-3xl">🔵</span>
<span class="text-xl">Check-out</span>
</button>
</div>
</div>
<div class="lg:col-span-2">
<div class="bg-white dark:bg-background-dark/50 p-6 rounded-lg shadow-soft">
<div class="flex justify-between items-center mb-4 border-b border-accent dark:border-secondary/20 pb-4">
<h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark">Historique de Pointage</h3>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-text-muted-light dark:text-text-muted-dark">calendar_today</span>
<span class="font-semibold text-sm">Aujourd'hui: 24 Juillet 2024</span>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="border-b border-accent dark:border-secondary/20">
<tr>
<th class="py-3 px-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Date</th>
<th class="py-3 px-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Arrivée</th>
<th class="py-3 px-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Départ</th>
<th class="py-3 px-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Total Heures</th>
<th class="py-3 px-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark text-center">Statut</th>
</tr>
</thead>
<tbody>
<tr class="border-b border-accent dark:border-secondary/20">
<td class="py-3 px-4 font-medium">24/07/2024</td>
<td class="py-3 px-4">08:00</td>
<td class="py-3 px-4">17:05</td>
<td class="py-3 px-4">8h 05m</td>
<td class="py-3 px-4 text-center"><span class="status-badge status-present">Présent</span></td>
</tr>
<tr class="border-b border-accent dark:border-secondary/20">
<td class="py-3 px-4 font-medium">23/07/2024</td>
<td class="py-3 px-4">08:15</td>
<td class="py-3 px-4">17:02</td>
<td class="py-3 px-4">7h 47m</td>
<td class="py-3 px-4 text-center"><span class="status-badge status-retard">Retard</span></td>
</tr>
<tr class="border-b border-accent dark:border-secondary/20">
<td class="py-3 px-4 font-medium">22/07/2024</td>
<td class="py-3 px-4 font-mono text-text-muted-light dark:text-text-muted-dark">--:--</td>
<td class="py-3 px-4 font-mono text-text-muted-light dark:text-text-muted-dark">--:--</td>
<td class="py-3 px-4 font-mono text-text-muted-light dark:text-text-muted-dark">--:--</td>
<td class="py-3 px-4 text-center"><span class="status-badge status-absent">Absent</span></td>
</tr>
<tr class="border-b border-accent dark:border-secondary/20">
<td class="py-3 px-4 font-medium">21/07/2024</td>
<td class="py-3 px-4">07:58</td>
<td class="py-3 px-4">17:01</td>
<td class="py-3 px-4">8h 03m</td>
<td class="py-3 px-4 text-center"><span class="status-badge status-present">Présent</span></td>
</tr>
<tr class="border-b border-accent dark:border-secondary/20">
<td class="py-3 px-4 font-medium">20/07/2024</td>
<td class="py-3 px-4">08:05</td>
<td class="py-3 px-4">17:30</td>
<td class="py-3 px-4">8h 25m</td>
<td class="py-3 px-4 text-center"><span class="status-badge status-present">Présent</span></td>
</tr>
<tr>
<td class="py-3 px-4 font-medium">19/07/2024</td>
<td class="py-3 px-4">08:20</td>
<td class="py-3 px-4">16:55</td>
<td class="py-3 px-4">7h 35m</td>
<td class="py-3 px-4 text-center"><span class="status-badge status-retard">Retard</span></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</div>

</body></html>