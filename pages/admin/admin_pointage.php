<?php
$pageTitle = "Greentsika HR Management - Supervision Pointage";
$activePage = "pointage";
include '../../templates/header.php';
?>
<?php include 'sidebar_admin.php'; ?>
<div class="flex-1 flex flex-col">
<header class="bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm sticky top-0 z-10 border-b border-accent dark:border-secondary/20">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<h2 class="text-2xl font-bold font-display text-text-light dark:text-text-dark">Supervision du Pointage</h2>
<div class="flex items-center gap-4">
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-text-light dark:hover:text-text-dark">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://i.pravatar.cc/150?u=admin");'></div>
</div>
</div>
</div>
</header>
<main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8" x-data="{ dropdownOpen: false }">
    <!-- Filtres -->
    <div class="mb-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
            <div>
                <label for="search_employee" class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark">Rechercher un employé</label>
                <input type="text" id="search_employee" placeholder="Nom de l'employé..." class="mt-1 w-full bg-background-light dark:bg-background-dark border-secondary/20 rounded-md text-sm">
            </div>
            <div>
                <label for="filter_department" class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark">Département</label>
                <select id="filter_department" class="mt-1 w-full bg-background-light dark:bg-background-dark border-secondary/20 rounded-md text-sm">
                    <option>Tous les départements</option>
                    <option>Technologie</option>
                    <option>Terrain</option>
                    <option>Analyse</option>
                </select>
            </div>
            <div>
                <label for="filter_date" class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark">Date</label>
                <input id="filter_date" class="mt-1 w-full bg-background-light dark:bg-background-dark border-secondary/20 rounded-md text-sm" type="date" value="2024-03-18"/>
            </div>
            <button class="bg-primary text-secondary font-bold py-2.5 px-4 rounded-lg flex items-center justify-center gap-2 hover:bg-primary/90 transition-colors shadow-soft">
                <span class="material-symbols-outlined">filter_alt</span>
                <span>Filtrer</span>
            </button>
        </div>
    </div>

    <!-- Tableau de supervision -->
    <div class="bg-accent dark:bg-secondary/20 rounded-lg shadow-soft overflow-x-auto mb-8">
        <table class="w-full text-left">
            <thead class="border-b border-secondary/10 dark:border-secondary/30">
                <tr>
                    <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Employé</th>
                    <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Heure d'arrivée</th>
                    <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Heure de départ</th>
                    <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Statut</th>
                    <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Remarques</th>
                    <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Exemples de données -->
                <tr class="border-b border-accent dark:border-secondary/20">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://i.pravatar.cc/150?u=jane");'></div>
                            <div>
                                <p class="font-semibold text-text-light dark:text-text-dark">Jane Doe</p>
                                <p class="text-xs text-text-muted-light dark:text-text-muted-dark">Développeuse</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-sm font-semibold text-text-light dark:text-text-dark">08:02</td>
                    <td class="p-4 text-sm font-semibold text-text-light dark:text-text-dark">17:05</td>
                    <td class="p-4"><span class="status-badge status-present">Présent</span></td>
                    <td class="p-4 text-sm text-text-muted-light dark:text-text-muted-dark italic">--</td>
                    <td class="p-4 text-center"><button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary p-1"><span class="material-symbols-outlined">edit_note</span></button></td>
                </tr>
                <tr class="border-b border-accent dark:border-secondary/20">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://i.pravatar.cc/150?u=marc");'></div>
                            <div>
                                <p class="font-semibold text-text-light dark:text-text-dark">Marc Dubois</p>
                                <p class="text-xs text-text-muted-light dark:text-text-muted-dark">Vulgarisateur</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-sm font-semibold text-yellow-600 dark:text-yellow-400">08:17</td>
                    <td class="p-4 text-sm font-semibold text-text-light dark:text-text-dark">17:01</td>
                    <td class="p-4"><span class="status-badge status-late">En retard</span></td>
                    <td class="p-4 text-sm text-text-light dark:text-text-dark">Transport en commun</td>
                    <td class="p-4 text-center"><button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary p-1"><span class="material-symbols-outlined">edit_note</span></button></td>
                </tr>
                <tr class="border-b border-accent dark:border-secondary/20">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://i.pravatar.cc/150?u=paul");'></div>
                            <div>
                                <p class="font-semibold text-text-light dark:text-text-dark">Paul Martin</p>
                                <p class="text-xs text-text-muted-light dark:text-text-muted-dark">Chef de projet</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-sm font-semibold text-red-600 dark:text-red-400">--</td>
                    <td class="p-4 text-sm font-semibold text-red-600 dark:text-red-400">--</td>
                    <td class="p-4"><span class="status-badge status-absent">Absent</span></td>
                    <td class="p-4 text-sm text-text-light dark:text-text-dark">Congé validé</td>
                    <td class="p-4 text-center"><button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary p-1"><span class="material-symbols-outlined">edit_note</span></button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Rapports et Exports -->
    <div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft">
        <h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark mb-4">Rapports Mensuels & Exports</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            <div>
                <label for="report_month" class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark">Choisir un mois pour le rapport</label>
                <input type="month" id="report_month" value="<?php echo date('Y-m'); ?>" class="mt-1 w-full bg-background-light dark:bg-background-dark border-secondary/20 rounded-md text-sm">
                <div class="mt-4 flex flex-col sm:flex-row gap-2">
                    <button class="flex-1 bg-primary/20 text-primary font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2 hover:bg-primary/30 transition-colors">
                        <span class="material-symbols-outlined">summarize</span>
                        <span>Générer le rapport</span>
                    </button>
                </div>
            </div>
            <div>
                <p class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark">Exporter les données</p>
                <div class="mt-1 relative" @click.away="dropdownOpen = false">
                    <button @click="dropdownOpen = !dropdownOpen" class="w-full text-left bg-background-light dark:bg-background-dark border border-secondary/20 rounded-md text-sm p-2.5 flex justify-between items-center">
                        <span>Choisir un format d'export...</span>
                        <span class="material-symbols-outlined" x-text="dropdownOpen ? 'expand_less' : 'expand_more'"></span>
                    </button>
                    <div x-show="dropdownOpen" x-transition class="absolute w-full mt-1 bg-accent dark:bg-secondary/50 rounded-lg shadow-lg z-20">
                        <a href="#" class="block px-4 py-2 text-sm text-text-light dark:text-text-dark hover:bg-primary/10">Exporter la vue quotidienne (CSV)</a>
                        <a href="#" class="block px-4 py-2 text-sm text-text-light dark:text-text-dark hover:bg-primary/10">Exporter le rapport mensuel (PDF)</a>
                    </div>
                </div>
                <p class="text-xs text-text-muted-light dark:text-text-muted-dark mt-2">Le rapport mensuel inclut les retards cumulés, les absences et la présence moyenne par département.</p>
            </div>
        </div>
    </div>
</main>
</div>
<?php include '../../templates/footer.php'; ?>