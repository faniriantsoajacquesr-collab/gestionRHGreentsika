<?php
$pageTitle = "Greentsika HR Management - Congés et Absences";
$activePage = "conges";
include '../../templates/header.php';
?>
<style>
        /* Styles spécifiques à la page */
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
</style>

<?php include 'sidebar_employe.php'; ?>

<!-- Le corps de la page commence ici. x-data est ajouté pour la gestion de la modale -->
<div class="flex-1 flex flex-col">
<header class="bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm sticky top-0 z-10 border-b border-accent dark:border-secondary/20" x-cloak>
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
<button class="bg-primary hover:bg-primary/90 text-secondary font-bold py-2 px-4 rounded-lg shadow-soft transition-colors flex items-center justify-center gap-2" type="button">
<span class="material-symbols-outlined">add</span>
<span>Faire une demande</span>
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
<?php include '../../templates/footer.php'; ?>