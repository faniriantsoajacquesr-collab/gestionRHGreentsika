<?php
$pageTitle = "Greentsika HR Management - Pointage";
$activePage = "pointage";
include '../templates/header.php';
include '../../templates/header.php';
?>
<?php include 'sidebar_manager.php'; ?>
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
<?php include '../templates/footer.php'; ?>
<?php include '../../templates/footer.php'; ?>