<?php 
$activePage = isset($activePage) ? $activePage : ''; 
// Définit un état par défaut si la variable n'est pas définie sur la page appelante.
// Un profil est considéré comme complet par défaut, sauf indication contraire.
$isProfileComplete = isset($isProfileComplete) ? $isProfileComplete : true;
?>
<aside class="w-64 bg-secondary dark:bg-background-dark border-r border-accent dark:border-secondary/20 flex flex-col">
    <div class="flex items-center justify-center h-16 px-6 border-b border-accent dark:border-secondary/20">
        <img src="../../assets/greentsika.png" alt="Greentsika Logo" class="h-8">
    </div>
    <nav class="p-4 space-y-2">
        <a href="employe_dashboard.php" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'dashboard') ? 'text-white dark:text-text-dark bg-primary/20 font-semibold' : 'text-gray-300 dark:text-text-muted-dark hover:bg-primary/20 hover:text-white'; ?> transition-colors">
            <span class="material-symbols-outlined">dashboard</span>
            <span>Tableau de bord</span>
        </a>
        <a href="employe_profile.php" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'profil') ? 'text-white dark:text-text-dark bg-primary/20 font-semibold' : 'text-gray-300 dark:text-text-muted-dark hover:bg-primary/20 hover:text-white'; ?> transition-colors">
            <span class="material-symbols-outlined">person</span>
            <span>Mon Profil</span>
        </a>
        <?php if ($isProfileComplete): ?>
            <a href="employe_pointage.php" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'pointage') ? 'text-white dark:text-text-dark bg-primary/20 font-semibold' : 'text-gray-300 dark:text-text-muted-dark hover:bg-primary/20 hover:text-white'; ?> transition-colors">
                <span class="material-symbols-outlined">timer</span>
                <span>Pointage</span>
            </a>
            <a href="employe_absenceConges.php" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'conges') ? 'text-white dark:text-text-dark bg-primary/20 font-semibold' : 'text-gray-300 dark:text-text-muted-dark hover:bg-primary/20 hover:text-white'; ?> transition-colors">
                <span class="material-symbols-outlined">event_busy</span>
                <span>Congés et absences</span>
            </a>
        <?php else: ?>
            <div class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-500 dark:text-gray-600 cursor-not-allowed" title="Veuillez compléter votre profil pour accéder à cette page">
                <span class="material-symbols-outlined">timer</span>
                <span>Pointage</span>
            </div>
            <div class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-500 dark:text-gray-600 cursor-not-allowed" title="Veuillez compléter votre profil pour accéder à cette page">
                <span class="material-symbols-outlined">event_busy</span>
                <span>Congés et absences</span>
            </div>
        <?php endif; ?>
    </nav>
    <div class="mt-auto p-4">
        <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg text-red-400 hover:bg-red-500/20 hover:text-red-300 transition-colors">
            <span class="material-symbols-outlined">logout</span>
            <span>Déconnexion</span>
        </a>
    </div>
</aside>