<?php
$pageTitle = "Greentsika HR Management - Admin Dashboard";
$activePage = "dashboard";
include '../../templates/header.php';
?>
<?php include 'sidebar_admin.php'; ?>
<div class="flex-1 flex flex-col">
<header class="bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm sticky top-0 z-10 border-b border-accent dark:border-secondary/20">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<h2 class="text-2xl font-bold font-display text-text-light dark:text-text-dark">Tableau de bord Administrateur</h2>
<div class="flex items-center gap-4">
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-text-light dark:hover:text-text-dark">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://i.pravatar.cc/150?u=admin");'></div>
</div>
</div>
</div>
</header>
<main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft flex items-center gap-4 border-t-4 border-primary">
        <div class="bg-primary/20 text-primary p-3 rounded-full"><span class="material-symbols-outlined text-3xl">groups</span></div>
        <div>
            <p class="text-sm text-text-muted-light dark:text-text-muted-dark">Effectif total</p>
            <p class="text-2xl font-bold font-display text-text-light dark:text-text-dark">15</p>
        </div>
    </div>
    <div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft flex items-center gap-4 border-t-4 border-red-500">
        <div class="bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600 dark:text-yellow-400 p-3 rounded-full"><span class="material-symbols-outlined text-3xl">person_alert</span></div>
        <div>
            <p class="text-sm text-text-muted-light dark:text-text-muted-dark">Profils en attente</p>
            <p class="text-2xl font-bold font-display text-text-light dark:text-text-dark">1</p>
        </div>
    </div>
    <div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft flex items-center gap-4 border-t-4 border-red-500">
        <div class="bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600 dark:text-yellow-400 p-3 rounded-full"><span class="material-symbols-outlined text-3xl">pending_actions</span></div>
        <div>
            <p class="text-sm text-text-muted-light dark:text-text-muted-dark">Demandes de congé</p>
            <p class="text-2xl font-bold font-display text-text-light dark:text-text-dark">2</p>
        </div>
    </div>
    <div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft flex items-center gap-4 border-t-4 border-primary">
        <div class="bg-primary/20 text-primary p-3 rounded-full"><span class="material-symbols-outlined text-3xl">shield_person</span></div>
        <div>
            <p class="text-sm text-text-muted-light dark:text-text-muted-dark">Employés actifs</p>
            <p class="text-2xl font-bold font-display text-text-light dark:text-text-dark">14</p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Fiches en attente de validation -->
    <div class="bg-background-light dark:bg-background-dark/50 p-6 rounded-lg shadow-soft">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark">Fiches en attente de validation</h3>
            <a href="admin_equipe.php" class="text-sm font-semibold text-primary hover:underline">Tout voir</a>
        </div>
        <div class="space-y-4">
            <div class="flex items-center justify-between p-3 bg-accent dark:bg-secondary/20 rounded-lg">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://i.pravatar.cc/150?u=marc");'></div>
                    <div>
                        <p class="font-semibold">Marc Dubois</p>
                        <p class="text-xs text-text-muted-light dark:text-text-muted-dark">Poste: Vulgarisateur</p>
                    </div>
                </div>
                <a class="text-primary hover:underline text-sm font-semibold" href="admin_equipe.php">Valider</a>
            </div>
            <!-- Ajouter d'autres fiches en attente ici -->
        </div>
    </div>

    <!-- Demandes de congé récentes -->
    <div class="bg-background-light dark:bg-background-dark/50 p-6 rounded-lg shadow-soft">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark">Demandes de congé récentes</h3>
            <a href="admin_congesAbsence.php" class="text-sm font-semibold text-primary hover:underline">Tout voir</a>
        </div>
        <div class="space-y-4">
            <div class="flex items-center justify-between p-3 bg-accent dark:bg-secondary/20 rounded-lg">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://i.pravatar.cc/150?u=jane");'></div>
                    <div>
                        <p class="font-semibold">Jane Doe</p>
                        <p class="text-xs text-text-muted-light dark:text-text-muted-dark">Congé payé (3 jours)</p>
                    </div>
                </div>
                <a class="text-primary hover:underline text-sm font-semibold" href="admin_congesAbsence.php">Traiter</a>
            </div>
            <div class="flex items-center justify-between p-3 bg-accent dark:bg-secondary/20 rounded-lg">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://i.pravatar.cc/150?u=paul");'></div>
                    <div>
                        <p class="font-semibold">Paul Martin</p>
                        <p class="text-xs text-text-muted-light dark:text-text-muted-dark">Absence maladie (1 jour)</p>
                    </div>
                </div>
                <a class="text-primary hover:underline text-sm font-semibold" href="admin_congesAbsence.php">Traiter</a>
            </div>
        </div>
    </div>
</div>
</div>
</main>
</div>
<?php include '../../templates/footer.php'; ?>