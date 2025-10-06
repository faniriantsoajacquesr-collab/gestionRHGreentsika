<?php
$pageTitle = "Greentsika HR Management - Mon Équipe";
$activePage = "equipe";
include '../templates/header.php';
?>
<?php include 'sidebar_manager.php'; ?>
<div class="flex-1 flex flex-col">
<header class="bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm sticky top-0 z-10 border-b border-accent dark:border-secondary/20">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<h2 class="text-2xl font-bold font-display text-text-light dark:text-text-dark">Mon Équipe</h2>
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
<div class="flex justify-between items-center mb-6">
<h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark">Membres de l'équipe</h3>
<button class="bg-primary text-secondary font-bold py-2 px-4 rounded-lg flex items-center gap-2 hover:bg-primary/90 transition-colors shadow-soft">
<span class="material-symbols-outlined">add</span>
<span>Créer un profil</span>
</button>
</div>
<div class="bg-accent dark:bg-secondary/20 rounded-lg shadow-soft overflow-x-auto">
<table class="w-full text-left">
<thead class="border-b border-secondary/10 dark:border-secondary/30">
<tr>
<th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Employé</th>
<th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Poste</th>
<th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Statut du profil</th>
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
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">jane.doe@greentsika.com</p>
</div>
</div>
</td>
<td class="p-4 text-sm text-text-light dark:text-text-dark">Développeuse</td>
<td class="p-4">
<span class="status-badge status-validated">
<span class="material-symbols-outlined text-sm">check_circle</span>
                                    Validé
                                </span>
</td>
<td class="p-4">
<div class="flex items-center gap-2">
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">visibility</span></button>
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">edit</span></button>
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">note_add</span></button>
</div>
</td>
</tr>
<tr class="border-b border-accent dark:border-secondary/20">
<td class="p-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4oyNck-cFxGq5OtFM2IbokILAKjAKmbJYCm-8pr3X047ObLK76yPK74y4mib5s8R7-uL7OfnEuc_A6W4r4df-GQ8x7W9_FSJuwht4uF1pDos8fj-235LRANFLC5Uog0twYVDZGSJ-EZRP3wzsf8NRpP8rCOePxr9h83onFeDD8pywL-ZQO9fB9tip4T7j0B4TtQKoiEtRznhetSvmLXLaVsEUxgji4FvsmVYSVWGubtl-C-WuZsLH7fQZeJmfCV71g8Wh9PonQei3");'></div>
<div>
<p class="font-semibold text-text-light dark:text-text-dark">Marc Dubois</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">marc.dubois@greentsika.com</p>
</div>
</div>
</td>
<td class="p-4 text-sm text-text-light dark:text-text-dark">Designer</td>
<td class="p-4">
<span class="status-badge status-pending">
<span class="material-symbols-outlined text-sm">pending</span>
                                    En attente
                                </span>
</td>
<td class="p-4">
<div class="flex items-center gap-2">
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">visibility</span></button>
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">edit</span></button>
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">note_add</span></button>
</div>
</td>
</tr>
<tr class="border-b border-accent dark:border-secondary/20">
<td class="p-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4oyNck-cFxGq5OtFM2IbokILAKjAKmbJYCm-8pr3X047ObLK76yPK74y4mib5s8R7-uL7OfnEuc_A6W4r4df-GQ8x7W9_FSJuwht4uF1pDos8fj-235LRANFLC5Uog0twYVDZGSJ-EZRP3wzsf8NRpP8rCOePxr9h83onFeDD8pywL-ZQO9fB9tip4T7j0B4TtQKoiEtRznhetSvmLXLaVsEUxgji4FvsmVYSVWGubtl-C-WuZsLH7fQZeJmfCV71g8Wh9PonQei3");'></div>
<div>
<p class="font-semibold text-text-light dark:text-text-dark">Paul Martin</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">paul.martin@greentsika.com</p>
</div>
</div>
</td>
<td class="p-4 text-sm text-text-light dark:text-text-dark">Chef de projet</td>
<td class="p-4">
<span class="status-badge status-validated">
<span class="material-symbols-outlined text-sm">check_circle</span>
                                    Validé
                                </span>
</td>
<td class="p-4">
<div class="flex items-center gap-2">
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">visibility</span></button>
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">edit</span></button>
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">note_add</span></button>
</div>
</td>
</tr>
<tr>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4oyNck-cFxGq5OtFM2IbokILAKjAKmbJYCm-8pr3X047ObLK76yPK74y4mib5s8R7-uL7OfnEuc_A6W4r4df-GQ8x7W9_FSJuwht4uF1pDos8fj-235LRANFLC5Uog0twYVDZGSJ-EZRP3wzsf8NRpP8rCOePxr9h83onFeDD8pywL-ZQO9fB9tip4T7j0B4TtQKoiEtRznhetSvmLXLaVsEUxgji4FvsmVYSVWGubtl-C-WuZsLH7fQZeJmfCV71g8Wh9PonQei3");'></div>
<div>
<p class="font-semibold text-text-light dark:text-text-dark">Alice Dupont</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">alice.dupont@greentsika.com</p>
</div>
</div>
</td>
<td class="p-4 text-sm text-text-light dark:text-text-dark">Data Analyst</td>
<td class="p-4">
<span class="status-badge status-refused">
<span class="material-symbols-outlined text-sm">cancel</span>
                                    Refusé
                                </span>
</td>
<td class="p-4">
<div class="flex items-center gap-2">
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">visibility</span></button>
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">edit</span></button>
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">note_add</span></button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</main>
</div>
<?php include '../templates/footer.php'; ?>