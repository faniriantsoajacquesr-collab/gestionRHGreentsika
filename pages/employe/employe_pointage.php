<?php
$pageTitle = "Greentsika HR Management - Pointage";
$activePage = "pointage";
include '../../templates/header.php';
?>

<?php include 'sidebar_employe.php'; ?>
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
<?php include '../../templates/footer.php'; ?>