<?php
$pageTitle = "Greentsika HR Management - Mon Profil";
$activePage = "profil";

// Simulation du statut du profil. Dans une application réelle, cette valeur viendrait de la base de données.
// Mettez cette variable à `true` pour simuler un profil complet.
$isProfileComplete = false; 

include '../../templates/header.php';
?>

<?php include 'sidebar_employe.php'; ?>
<div class="flex-1 flex flex-col">
<header class="bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm sticky top-0 z-10 border-b border-accent dark:border-secondary/20">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-end h-16">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBEJg0aghtyYYbGJE6Jau-8Au9RfROclaYc0G7KvNZaCb95GVAkQiMkfe9Su2sGiUe9B78tjMSft4uuWYJ9rwFragzWSx9nzQN4MU24LmWvohh4o_TZ8HxNKP1yNDAD4QBU0tOi6tQELOVvvQocQo_mePE1gqUguHYKW21E4AOyixWB5IJ-s63ShJe1hCVEtsCpRD-iS5VuGpCW8RY1D1ItGn2ExfDbWBdT3iqRHSVOudNlIfvrAOZp8ljBUKbAxxZ7IQamP1-LCv2");'></div>
</div>
</div>
</div>
</header>
<main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8" x-data="{ modalOpen: false, documentUrl: '' }">
<div class="max-w-4xl mx-auto">
<?php if (!$isProfileComplete): ?>
<div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded-lg mb-8 shadow-soft" role="alert">
<p class="font-bold">Profil en attente de validation</p>
<p>Votre profil doit être complété et validé par un administrateur. Certaines fonctionnalités comme le pointage et la gestion des congés sont désactivées en attendant.</p>
</div>
<?php endif; ?>

<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
<h2 class="text-3xl font-bold font-display text-text-light dark:text-text-dark">Mon Profil</h2>
<div class="status-badge <?php echo $isProfileComplete ? 'status-approved' : 'status-pending'; ?>">
<span><?php echo $isProfileComplete ? '🟢' : '🟡'; ?></span> <?php echo $isProfileComplete ? 'Validé' : 'En attente'; ?>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<div class="lg:col-span-1">
<div class="space-y-6">
<div>
<h3 class="text-lg font-semibold font-display mb-2 text-text-light dark:text-text-dark">Photo de profil</h3>
<div class="flex flex-col items-center space-y-4">
<div class="w-40 h-40 rounded-full bg-accent dark:bg-secondary/30 flex items-center justify-center bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBEJg0aghtyYYbGJE6Jau-8Au9RfROclaYc0G7KvNZaCb95GVAkQiMkfe9Su2sGiUe9B78tjMSft4uuWYJ9rwFragzWSx9nzQN4MU24LmWvohh4o_TZ8HxNKP1yNDAD4QBU0tOi6tQELOVvvQocQo_mePE1gqUguHYKW21E4AOyixWB5IJ-s63ShJe1hCVEtsCpRD-iS5VuGpCW8RY1D1ItGn2ExfDbWBdT3iqRHSVOudNlIfvrAOZp8ljBUKbAxxZ7IQamP1-LCv2");'>
</div>
<button class="w-full text-sm font-semibold py-2 px-4 rounded bg-secondary text-white hover:bg-secondary/90 dark:bg-secondary/30 dark:hover:bg-primary/30 dark:text-text-dark transition-colors">
                      Changer la photo
                    </button>
</div>
</div>
<div>
<h3 class="text-lg font-semibold font-display mb-2 text-text-light dark:text-text-dark">Documents</h3>
<div class="space-y-3">
<div class="p-3 bg-accent dark:bg-secondary/30 rounded-lg">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-2xl">badge</span>
<div>
<p class="font-semibold text-sm text-text-light dark:text-text-dark">carte_identite.pdf</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">Pièce d'identité</p>
</div>
</div>
<div class="flex items-center gap-4 flex-shrink-0">
<button @click="documentUrl = 'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf'; modalOpen = true" class="text-sm font-semibold text-primary hover:underline">Voir</button>
<a href="#" class="text-sm font-semibold text-primary hover:underline">Changer</a>
</div>
</div>
</div>
<div class="p-3 bg-accent dark:bg-secondary/30 rounded-lg">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-2xl">description</span>
<div>
<p class="font-semibold text-sm text-text-light dark:text-text-dark">contrat_de_travail.pdf</p>
<p class="text-xs text-text-muted-light dark:text-text-muted-dark">Contrat de travail</p>
</div>
</div>
<div class="flex items-center gap-4 flex-shrink-0">
<button @click="documentUrl = 'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf'; modalOpen = true" class="text-sm font-semibold text-primary hover:underline">Voir</button>
<a href="#" class="text-sm font-semibold text-primary hover:underline">Changer</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="lg:col-span-2">
<div class="bg-background-light dark:bg-background-dark/50 p-6 rounded-lg shadow-soft">
<h3 class="text-xl font-bold font-display mb-6 border-b border-accent dark:border-secondary/20 pb-4 text-text-light dark:text-text-dark">Informations Personnelles</h3>
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="last_name">Nom</label>
<input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="last_name" placeholder="Doe" type="text"/>
</div>
<div>
<label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="first_name">Prénom</label>
<input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="first_name" placeholder="John" type="text"/>
</div>
</div>
<div>
<label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="birth_date">Date de naissance</label>
<input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="birth_date" type="date"/>
</div>
<div>
<label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="address">Adresse</label>
<input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="address" placeholder="123 Rue de la Pomme, 75001 Paris" type="text"/>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="phone">Numéro de téléphone</label>
<input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="phone" placeholder="+33 6 12 34 56 78" type="tel"/>
</div>
<div>
<label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="email">Email</label>
<input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="email" placeholder="john.doe@greentsika.com" type="email"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="job_title">Poste</label>
<input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="job_title" placeholder="Développeur Frontend" type="text"/>
</div>
<div>
<label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="department">Département</label>
<input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="department" placeholder="Technologie" type="text"/>
</div>
</div>
<div class="pt-6 border-t border-accent dark:border-secondary/20 flex justify-end">
<button class="bg-primary text-white font-bold font-display py-3 px-6 rounded-lg hover:opacity-90 transition-opacity shadow-soft" type="submit">
                      Modifier mes informations
                    </button>
</div>
</form>
</div>
</div>
<!-- Modal pour afficher le document -->
<div x-show="modalOpen" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
<div @click.away="modalOpen = false" class="bg-accent dark:bg-secondary/40 rounded-lg shadow-soft w-full max-w-4xl h-[90vh] m-4 flex flex-col" x-show="modalOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
<div class="flex justify-between items-center p-4 border-b border-secondary/10 dark:border-secondary/30 flex-shrink-0">
<h3 class="text-lg font-bold font-display text-text-light dark:text-text-dark">Aperçu du document</h3>
<button @click="modalOpen = false" class="text-text-muted-light dark:text-text-muted-dark hover:text-text-light dark:hover:text-text-dark">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<div class="p-4 flex-grow">
<iframe :src="documentUrl" class="w-full h-full border-0 rounded-md bg-white"></iframe>
</div>
</div>
</div>
</main>
</div>
<?php include '../../templates/footer.php'; ?>