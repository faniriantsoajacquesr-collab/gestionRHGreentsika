<?php $activePage = isset($activePage) ? $activePage : ''; ?>
<aside class="w-64 bg-secondary dark:bg-background-dark border-r border-accent dark:border-secondary/20 flex flex-col">
    <div class="flex items-center justify-center h-16 px-6 border-b border-accent dark:border-secondary/20">
        <img src="../../assets/greentsika.png" alt="Greentsika Logo" class="h-8">
    </div>
    <nav class="p-4 space-y-2">
        <a href="manager_dashboard.php" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'dashboard') ? 'text-white dark:text-text-dark bg-primary/20 font-semibold' : 'text-gray-300 dark:text-text-muted-dark hover:bg-primary/20 hover:text-white'; ?> transition-colors">
            <span class="material-symbols-outlined">dashboard</span>
            <span>Tableau de bord</span>
        </a>
        <a href="manager_equipe.php" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'equipe') ? 'text-white dark:text-text-dark bg-primary/20 font-semibold' : 'text-gray-300 dark:text-text-muted-dark hover:bg-primary/20 hover:text-white'; ?> transition-colors">
            <span class="material-symbols-outlined">groups</span>
            <span>Équipe</span>
        </a>
        <a href="manager_congesAbsence.php" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'conges') ? 'text-white dark:text-text-dark bg-primary/20 font-semibold' : 'text-gray-300 dark:text-text-muted-dark hover:bg-primary/20 hover:text-white'; ?> transition-colors">
            <span class="material-symbols-outlined">event_busy</span>
            <span>Demandes de congé</span>
        </a>
        <a href="manager_pointage.php" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'pointage') ? 'text-white dark:text-text-dark bg-primary/20 font-semibold' : 'text-gray-300 dark:text-text-muted-dark hover:bg-primary/20 hover:text-white'; ?> transition-colors">
            <span class="material-symbols-outlined">timer</span>
            <span>Pointage</span>
        </a>
        <a href="manager_profile.php" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'profil') ? 'text-white dark:text-text-dark bg-primary/20 font-semibold' : 'text-gray-300 dark:text-text-muted-dark hover:bg-primary/20 hover:text-white'; ?> transition-colors">
            <span class="material-symbols-outlined">person</span>
            <span>Mon Profil</span>
        </a>
    </nav>
    <div class="mt-auto p-4">
        <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg text-red-400 hover:bg-red-500/20 hover:text-red-300 transition-colors">
            <span class="material-symbols-outlined">logout</span>
            <span>Déconnexion</span>
        </a>
    </div>
    </nav>
</aside>