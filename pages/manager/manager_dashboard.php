<?php
$pageTitle = "Greentsika HR Management - Manager Dashboard";
$activePage = "dashboard";
include '../../templates/header.php';
?>
<?php include 'sidebar_manager.php'; ?>
<div class="flex-1 flex flex-col">
<header class="bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm sticky top-0 z-10 border-b border-accent dark:border-secondary/20">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<h2 class="text-2xl font-bold font-display text-text-light dark:text-text-dark">Tableau de bord Manager</h2>
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
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
<div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft flex items-center gap-4">
<div class="bg-primary/20 text-primary p-3 rounded-full">
<span class="material-symbols-outlined text-3xl">groups</span>
</div>
<div>
<p class="text-sm text-text-muted-light dark:text-text-muted-dark">Effectif total</p>
<p class="text-2xl font-bold font-display text-text-light dark:text-text-dark">15</p>
</div>
</div>
<div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft flex items-center gap-4">
<div class="bg-primary/20 text-primary p-3 rounded-full">
<span class="material-symbols-outlined text-3xl">check_circle</span>
</div>
<div>
<p class="text-sm text-text-muted-light dark:text-text-muted-dark">Présents aujourd'hui</p>
<p class="text-2xl font-bold font-display text-text-light dark:text-text-dark">12</p>
</div>
</div>
<div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft flex items-center gap-4">
<div class="bg-primary/20 text-primary p-3 rounded-full">
<span class="material-symbols-outlined text-3xl">event_busy</span>
</div>
<div>
<p class="text-sm text-text-muted-light dark:text-text-muted-dark">En congé</p>
<p class="text-2xl font-bold font-display text-text-light dark:text-text-dark">3</p>
</div>
</div>
<div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft flex items-center gap-4">
<div class="bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600 dark:text-yellow-400 p-3 rounded-full">
<span class="material-symbols-outlined text-3xl">pending_actions</span>
</div>
<div>
<p class="text-sm text-text-muted-light dark:text-text-muted-dark">Demandes en attente</p>
<p class="text-2xl font-bold font-display text-text-light dark:text-text-dark">2</p>
</div>
</div>
</div>
<div class="bg-background-light dark:bg-background-dark/50 p-6 rounded-lg shadow-soft">
<h3 class="text-xl font-bold font-display mb-4 text-text-light dark:text-text-dark">Mon Équipe</h3>
<div class="space-y-4">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBEJg0aghtyYYbGJE6Jau-8Au9RfROclaYc0G7KvNZaCb95GVAkQiMkfe9Su2sGiUe9B78tjMSft4uuWYJ9rwFragzWSx9nzQN4MU24LmWvohh4o_TZ8HxNKP1yNDAD4QBU0tOi6tQELOVvvQocQo_mePE1gqUguHYKW21E4AOyixWB5IJ-s63ShJe1hCVEtsCpRD-iS5VuGpCW8RY1D1ItGn2ExfDbWBdT3iqRHSVOudNlIfvrAOZp8ljBUKbAxxZ7IQamP1-LCv2");'></div>
<div>
<p class="font-semibold">Jane Doe</p>
<p class="text-sm text-text-muted-light dark:text-text-muted-dark">Développeuse</p>
</div>
</div>
<a class="text-primary hover:underline" href="#">Voir profil</a>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4oyNck-cFxGq5OtFM2IbokILAKjAKmbJYCm-8pr3X047ObLK76yPK74y4mib5s8R7-uL7OfnEuc_A6W4r4df-GQ8x7W9_FSJuwht4uF1pDos8fj-235LRANFLC5Uog0twYVDZGSJ-EZRP3wzsf8NRpP8rCOePxr9h83onFeDD8pywL-ZQO9fB9tip4T7j0B4TtQKoiEtRznhetSvmLXLaVsEUxgji4FvsmVYSVWGubtl-C-WuZsLH7fQZeJmfCV71g8Wh9PonQei3");'></div>
<div>
<p class="font-semibold">Marc Dubois</p>
<p class="text-sm text-text-muted-light dark:text-text-muted-dark">Designer</p>
</div>
</div>
<a class="text-primary hover:underline" href="#">Voir profil</a>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4oyNck-cFxGq5OtFM2IbokILAKjAKmbJYCm-8pr3X047ObLK76yPK74y4mib5s8R7-uL7OfnEuc_A6W4r4df-GQ8x7W9_FSJuwht4uF1pDos8fj-235LRANFLC5Uog0twYVDZGSJ-EZRP3wzsf8NRpP8rCOePxr9h83onFeDD8pywL-ZQO9fB9tip4T7j0B4TtQKoiEtRznhetSvmLXLaVsEUxgji4FvsmVYSVWGubtl-C-WuZsLH7fQZeJmfCV71g8Wh9PonQei3");'></div>
<div>
<p class="font-semibold">Paul Martin</p>
<p class="text-sm text-text-muted-light dark:text-text-muted-dark">Chef de projet</p>
</div>
</div>
<a class="text-primary hover:underline" href="#">Voir profil</a>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4oyNck-cFxGq5OtFM2IbokILAKjAKmbJYCm-8pr3X047ObLK76yPK74y4mib5s8R7-uL7OfnEuc_A6W4r4df-GQ8x7W9_FSJuwht4uF1pDos8fj-235LRANFLC5Uog0twYVDZGSJ-EZRP3wzsf8NRpP8rCOePxr9h83onFeDD8pywL-ZQO9fB9tip4T7j0B4TtQKoiEtRznhetSvmLXLaVsEUxgji4FvsmVYSVWGubtl-C-WuZsLH7fQZeJmfCV71g8Wh9PonQei3");'></div>
<div>
<p class="font-semibold">Alice Dupont</p>
<p class="text-sm text-text-muted-light dark:text-text-muted-dark">Data Analyst</p>
</div>
</div>
<a class="text-primary hover:underline" href="#">Voir profil</a>
</div>
<button class="w-full text-sm font-semibold py-3 px-4 rounded bg-primary/20 hover:bg-primary/30 text-primary transition-colors">
                                Voir toute l'équipe
                            </button>
</div>
</div>
</main>
</div>
<?php include '../../templates/footer.php'; ?>