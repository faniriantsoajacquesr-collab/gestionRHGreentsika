<?php $activePage = isset($activePage) ? $activePage : ''; ?>
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
        <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'dashboard') ? 'text-text-light dark:text-text-dark bg-primary/10 dark:bg-primary/20 font-semibold' : 'text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10'; ?> transition-colors">
            <span class="material-symbols-outlined">dashboard</span>
            <span>Tableau de bord</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'suivi') ? 'text-text-light dark:text-text-dark bg-primary/10 dark:bg-primary/20 font-semibold' : 'text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10'; ?> transition-colors">
            <span class="material-symbols-outlined">groups</span>
            <span>Suivi des employés</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'pointage') ? 'text-text-light dark:text-text-dark bg-primary/10 dark:bg-primary/20 font-semibold' : 'text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10'; ?> transition-colors">
            <span class="material-symbols-outlined">timer</span>
            <span>Pointage</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'conges') ? 'text-text-light dark:text-text-dark bg-primary/10 dark:bg-primary/20 font-semibold' : 'text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10'; ?> transition-colors">
            <span class="material-symbols-outlined">event_busy</span>
            <span>Congés et absences</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'salaires') ? 'text-text-light dark:text-text-dark bg-primary/10 dark:bg-primary/20 font-semibold' : 'text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10'; ?> transition-colors">
            <span class="material-symbols-outlined">payments</span>
            <span>Salaires</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'caisse') ? 'text-text-light dark:text-text-dark bg-primary/10 dark:bg-primary/20 font-semibold' : 'text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10'; ?> transition-colors">
            <span class="material-symbols-outlined">account_balance</span>
            <span>Caisse sociale</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg <?php echo ($activePage === 'parametres') ? 'text-text-light dark:text-text-dark bg-primary/10 dark:bg-primary/20 font-semibold' : 'text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10'; ?> transition-colors">
            <span class="material-symbols-outlined">settings</span>
            <span>Paramètres</span>
        </a>
    </nav>
</aside>