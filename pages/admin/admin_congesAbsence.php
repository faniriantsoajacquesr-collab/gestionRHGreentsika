<?php
$pageTitle = "Greentsika HR Management - Gestion des Congés";
$activePage = "conges";
include '../../templates/header.php';
?>
<?php include 'sidebar_admin.php'; ?>
<div class="flex-1 flex flex-col">
<header class="bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm sticky top-0 z-10 border-b border-accent dark:border-secondary/20">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<h2 class="text-2xl font-bold font-display text-text-light dark:text-text-dark">Gestion des Congés &amp; Absences</h2>
<div class="flex items-center gap-4">
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-text-light dark:hover:text-text-dark">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://i.pravatar.cc/150?u=admin");'></div>
</div>
</div>
</div>
</header>
<main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8" x-data="{ modalOpen: false, dropdownOpen: false }">
    <!-- Filtres -->
    <div class="bg-accent dark:bg-secondary/20 p-4 rounded-lg shadow-soft mb-8">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4 items-end">
            <div>
                <label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark">Employé</label>
                <input type="text" placeholder="Nom de l'employé..." class="mt-1 w-full bg-background-light dark:bg-background-dark border-secondary/20 rounded-md text-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark">Département</label>
                <select class="mt-1 w-full bg-background-light dark:bg-background-dark border-secondary/20 rounded-md text-sm">
                    <option>Tous</option><option>Technologie</option><option>Terrain</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark">Type de congé</label>
                <select class="mt-1 w-full bg-background-light dark:bg-background-dark border-secondary/20 rounded-md text-sm">
                    <option>Tous</option><option>Congé payé</option><option>Maladie</option><option>RTT</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark">Période</label>
                <input class="mt-1 w-full bg-background-light dark:bg-background-dark border-secondary/20 rounded-md text-sm" type="date"/>
            </div>
            <button class="bg-primary text-secondary font-bold py-2.5 px-4 rounded-lg flex items-center justify-center gap-2 hover:bg-primary/90 transition-colors shadow-soft">
                <span class="material-symbols-outlined">filter_alt</span>
                <span>Filtrer</span>
            </button>
        </div>
    </div>

    <!-- Demandes en attente -->
    <div class="mb-8">
        <h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark mb-4">Demandes en attente</h3>
        <div class="bg-accent dark:bg-secondary/20 rounded-lg shadow-soft overflow-x-auto">
            <table class="w-full text-left">
                <thead class="border-b border-secondary/10 dark:border-secondary/30">
                    <tr>
                        <th class="p-4 font-semibold text-sm">Employé</th>
                        <th class="p-4 font-semibold text-sm">Département</th>
                        <th class="p-4 font-semibold text-sm">Type & Durée</th>
                        <th class="p-4 font-semibold text-sm">Période</th>
                        <th class="p-4 font-semibold text-sm text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-secondary/10 dark:divide-secondary/30">
                    <tr>
                        <td class="p-4"><div class="font-semibold">Jane Doe</div><div class="text-xs text-text-muted-light">Développeuse</div></td>
                        <td class="p-4 text-sm">Technologie</td>
                        <td class="p-4 text-sm">Congé payé (5 jours)</td>
                        <td class="p-4 text-sm font-semibold text-primary">25/03/24 - 29/03/24</td>
                        <td class="p-4">
                            <div class="flex justify-center items-center gap-2">
                                <button class="px-3 py-1.5 rounded-md text-sm font-semibold bg-green-500/10 text-green-700 dark:text-green-300 hover:bg-green-500/20 flex items-center gap-1"><span class="material-symbols-outlined text-base">check</span><span>Approuver</span></button>
                                <button @click="modalOpen = true" class="px-3 py-1.5 rounded-md text-sm font-semibold bg-red-500/10 text-red-700 dark:text-red-300 hover:bg-red-500/20 flex items-center gap-1"><span class="material-symbols-outlined text-base">close</span><span>Refuser</span></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Historique complet -->
    <div class="mb-8">
        <h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark mb-4">Historique complet</h3>
        <div class="bg-accent dark:bg-secondary/20 rounded-lg shadow-soft overflow-x-auto">
            <table class="w-full text-left">
                <thead class="border-b border-secondary/10 dark:border-secondary/30">
                    <tr>
                        <th class="p-4 font-semibold text-sm">Employé</th>
                        <th class="p-4 font-semibold text-sm">Département</th>
                        <th class="p-4 font-semibold text-sm">Type</th>
                        <th class="p-4 font-semibold text-sm">Période</th>
                        <th class="p-4 font-semibold text-sm">Statut</th>
                        <th class="p-4 font-semibold text-sm">Traité par</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-secondary/10 dark:divide-secondary/30">
                    <tr>
                        <td class="p-4"><div class="font-semibold">Paul Martin</div><div class="text-xs text-text-muted-light">Chef de projet</div></td>
                        <td class="p-4 text-sm">Technologie</td>
                        <td class="p-4 text-sm">Congé maladie</td>
                        <td class="p-4 text-sm">18/03/2024</td>
                        <td class="p-4"><span class="status-badge status-approved">Approuvé</span></td>
                        <td class="p-4 text-sm">Admin</td>
                    </tr>
                    <tr>
                        <td class="p-4"><div class="font-semibold">Alice Dupont</div><div class="text-xs text-text-muted-light">Data Analyst</div></td>
                        <td class="p-4 text-sm">Analyse</td>
                        <td class="p-4 text-sm">Absence non justifiée</td>
                        <td class="p-4 text-sm">15/03/2024</td>
                        <td class="p-4"><span class="status-badge status-refused">Refusé</span></td>
                        <td class="p-4 text-sm">Manager Equipe A</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Rapports -->
    <div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft">
        <h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark mb-4">Générer un rapport</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-end">
            <div>
                <label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark">Type de rapport</label>
                <select class="mt-1 w-full bg-background-light dark:bg-background-dark border-secondary/20 rounded-md text-sm">
                    <option>Rapport mensuel global</option>
                    <option>Rapport par employé</option>
                    <option>Rapport par département</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark">Mois/Année</label>
                <input type="month" value="<?php echo date('Y-m'); ?>" class="mt-1 w-full bg-background-light dark:bg-background-dark border-secondary/20 rounded-md text-sm">
            </div>
            <div class="relative" @click.away="dropdownOpen = false">
                <button @click="dropdownOpen = !dropdownOpen" class="w-full bg-primary text-secondary font-bold py-2.5 px-4 rounded-lg flex items-center justify-center gap-2 hover:bg-primary/90 transition-colors shadow-soft">
                    <span class="material-symbols-outlined">download</span>
                    <span>Exporter</span>
                    <span class="material-symbols-outlined text-sm" x-text="dropdownOpen ? 'expand_less' : 'expand_more'"></span>
                </button>
                <div x-show="dropdownOpen" x-transition class="absolute bottom-full mb-2 w-full bg-accent dark:bg-secondary/50 rounded-lg shadow-lg z-20">
                    <a href="#" class="block px-4 py-2 text-sm text-text-light dark:text-text-dark hover:bg-primary/10">Exporter en CSV</a>
                    <a href="#" class="block px-4 py-2 text-sm text-text-light dark:text-text-dark hover:bg-primary/10">Exporter en PDF</a>
                </div>
            </div>
        </div>
    </div>
</main>
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
<?php include '../../templates/footer.php'; ?>