<?php
$pageTitle = "Greentsika HR Management - Complétez votre Profil";
$activePage = "profil";

include '../templates/header.php';
?>

<div class="flex flex-col min-h-screen">
    <header class="bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm sticky top-0 z-10 border-b border-accent dark:border-secondary/20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="/" class="flex items-center gap-2">
                    <img src="../assets/Logo-Greentsika.png" alt="Logo Greentsika" class="h-8 w-auto">
                    <span class="font-bold text-xl font-display text-primary dark:text-white">Greentsika</span>
                </a>
                <div class="flex items-center gap-4">
                </div>
            </div>
        </div>
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
            <p class="font-bold text-center">Bienvenue ! Veuillez compléter votre profil pour accéder à toutes les fonctionnalités de la plateforme.</p>
        </div>
    </header>

    <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8 flex items-center justify-center">
        <div class="max-w-6xl w-full">
          <div class="flex justify-center items-center">

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
                                    <p class="text-sm text-text-muted-light dark:text-text-muted-dark">Veuillez ajouter vos documents (CIN, contrat, etc.)</p>
                                    <button class="mt-2 w-full text-sm font-semibold py-2 px-4 rounded bg-primary text-white hover:bg-primary/90 transition-colors">
                                        Ajouter des documents
                                    </button>
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
                                    <input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="last_name" placeholder="Votre nom" type="text" required/>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="first_name">Prénom</label>
                                    <input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="first_name" placeholder="Votre prénom" type="text" required/>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="birth_date">Date de naissance</label>
                                <input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="birth_date" type="date" required/>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="address">Adresse</label>
                                <input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="address" placeholder="Votre adresse complète" type="text" required/>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="phone">Numéro de téléphone</label>
                                    <input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="phone" placeholder="+261 30 00 000 00" type="tel" required/>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="email">Email</label>
                                    <input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="email" placeholder="email@example.com" type="email" required/>
                                </div>
                            </div>
                             <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="job_title">Poste</label>
                                    <input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="job_title" placeholder="Ex: Développeur" type="text" required/>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-text-muted-light dark:text-text-muted-dark mb-1" for="department">Département</label>
                                    <input class="w-full bg-accent dark:bg-secondary/30 border-none rounded focus:ring-2 focus:ring-primary text-text-light dark:text-text-dark" id="department" placeholder="Ex: Technologie" type="text" required/>
                                </div>
                            </div>
                            <div class="pt-6 border-t border-accent dark:border-secondary/20 flex justify-end">
                                <button class="bg-primary text-white font-bold font-display py-3 px-6 rounded-lg hover:opacity-90 transition-opacity shadow-soft" type="submit">
                                    Enregistrer et continuer
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </main>
</div>

<?php include '../templates/footer.php'; ?>