<?php
$pageTitle = "Greentsika HR Management - Gestion des Employés";
$activePage = "equipe";
include '../../templates/header.php';
?>
<?php include 'sidebar_admin.php'; ?>
<div class="flex-1 flex flex-col">
<header class="bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm sticky top-0 z-10 border-b border-accent dark:border-secondary/20">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<h2 class="text-2xl font-bold font-display text-text-light dark:text-text-dark">Gestion des Employés</h2>
<div class="flex items-center gap-4">
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-text-light dark:hover:text-text-dark">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBEJg0aghtyYYbGJE6Jau-8Au9RfROclaYc0G7KvNZaCb95GVAkQiMkfe9Su2sGiUe9B78tjMSft4uuWYJ9rwFragzWSx9nzQN4MU24LmWvohh4o_TZ8HxNKP1yNDAD4QBU0tOi6tQELOVvvQocQo_mePE1gqUguHYKW21E4AOyixWB5IJ-s63ShJe1hCVEtsCpRD-iS5VuGpCW8RY1D1ItGn2ExfDbWBdT3iqRHSVOudNlIfvrAOZp8ljBUKbAxxZ7IQamP1-LCv2");'></div>
</div>
</div>
</div>
</header>
<main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8" x-data="{ 
    tab: 'pending',
    modal: null,
    dropdownOpen: false
}">
    <div class="flex justify-between items-center mb-6">
        <div class="flex border-b border-accent dark:border-secondary/20">
            <button @click="tab = 'pending'" :class="{'border-primary text-primary font-semibold': tab === 'pending', 'border-transparent text-text-muted-light dark:text-text-muted-dark hover:text-text-light dark:hover:text-text-dark': tab !== 'pending'}" class="px-4 py-2 border-b-2 transition-colors duration-300">
                En attente <span class="bg-yellow-200 text-yellow-800 text-xs font-bold ml-1 px-2 py-0.5 rounded-full">1</span>
            </button>
            <button @click="tab = 'validated'" :class="{'border-primary text-primary font-semibold': tab === 'validated', 'border-transparent text-text-muted-light dark:text-text-muted-dark hover:text-text-light dark:hover:text-text-dark': tab !== 'validated'}" class="px-4 py-2 border-b-2 transition-colors duration-300">
                Validés
            </button>
            <button @click="tab = 'refused'" :class="{'border-primary text-primary font-semibold': tab === 'refused', 'border-transparent text-text-muted-light dark:text-text-muted-dark hover:text-text-light dark:hover:text-text-dark': tab !== 'refused'}" class="px-4 py-2 border-b-2 transition-colors duration-300">
                Refusés
            </button>
        </div>
        <div class="flex items-center gap-4">
            <div class="relative" @click.away="dropdownOpen = false">
                <button @click="dropdownOpen = !dropdownOpen" class="bg-accent dark:bg-secondary/30 text-text-light dark:text-text-dark font-semibold py-2 px-4 rounded-lg flex items-center gap-2 hover:bg-gray-200 dark:hover:bg-secondary/50 transition-colors shadow-soft">
                    <span class="material-symbols-outlined">download</span>
                    <span>Exporter</span>
                    <span class="material-symbols-outlined" x-text="dropdownOpen ? 'expand_less' : 'expand_more'"></span>
                </button>
                <div x-show="dropdownOpen" x-transition class="absolute right-0 mt-2 w-48 bg-accent dark:bg-secondary/50 rounded-lg shadow-lg z-20">
                    <a href="#" class="block px-4 py-2 text-sm text-text-light dark:text-text-dark hover:bg-primary/10">Exporter en CSV</a>
                    <a href="#" class="block px-4 py-2 text-sm text-text-light dark:text-text-dark hover:bg-primary/10">Exporter en Excel</a>
                    <a href="#" class="block px-4 py-2 text-sm text-text-light dark:text-text-dark hover:bg-primary/10">Exporter en PDF</a>
                </div>
            </div>
            <button @click="modal = 'create'" class="bg-primary text-secondary font-bold py-2 px-4 rounded-lg flex items-center gap-2 hover:bg-primary/90 transition-colors shadow-soft">
                <span class="material-symbols-outlined">add</span>
                <span>Créer un profil</span>
            </button>
        </div>
    </div>

    <div class="bg-accent dark:bg-secondary/20 rounded-lg shadow-soft overflow-x-auto">
        <table class="w-full text-left">
            <thead class="border-b border-secondary/10 dark:border-secondary/30">
                <tr>
                    <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Employé</th>
                    <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Poste</th>
                    <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Département</th>
                    <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Statut</th>
                    <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fiche en attente -->
                <tr x-show="tab === 'pending'" class="border-b border-accent dark:border-secondary/20">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://.../marc.dubois.jpg");'></div>
                            <div>
                                <p class="font-semibold text-text-light dark:text-text-dark">Marc Dubois</p>
                                <p class="text-xs text-text-muted-light dark:text-text-muted-dark">marc.dubois@example.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-sm text-text-light dark:text-text-dark">Vulgarisateur</td>
                    <td class="p-4 text-sm text-text-light dark:text-text-dark">Terrain</td>
                    <td class="p-4"><span class="status-badge status-pending">En attente</span></td>
                    <td class="p-4">
                        <div class="flex justify-center items-center gap-2">
                            <button @click="modal = 'validate'" class="px-3 py-1.5 rounded-md text-sm font-semibold bg-green-500/10 text-green-700 dark:bg-green-500/20 dark:text-green-300 hover:bg-green-500/20 flex items-center gap-1">
                                <span class="material-symbols-outlined text-base">how_to_reg</span> Valider
                            </button>
                            <button @click="modal = 'refuse'" class="px-3 py-1.5 rounded-md text-sm font-semibold bg-red-500/10 text-red-700 dark:bg-red-500/20 dark:text-red-300 hover:bg-red-500/20 flex items-center gap-1">
                                <span class="material-symbols-outlined text-base">gpp_bad</span> Refuser
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Fiche validée -->
                <tr x-show="tab === 'validated'" class="border-b border-accent dark:border-secondary/20">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://.../jane.doe.jpg");'></div>
                            <div>
                                <p class="font-semibold text-text-light dark:text-text-dark">Jane Doe</p>
                                <p class="text-xs text-text-muted-light dark:text-text-muted-dark">jane.doe@greentsika.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-sm text-text-light dark:text-text-dark">Développeuse</td>
                    <td class="p-4 text-sm text-text-light dark:text-text-dark">Technologie</td>
                    <td class="p-4"><span class="status-badge status-approved">Validé</span></td>
                    <td class="p-4">
                        <div class="flex justify-center items-center gap-2">
                            <button @click="modal = 'validate'" class="text-text-muted-light dark:text-text-muted-dark hover:text-primary p-1" title="Modifier"><span class="material-symbols-outlined">edit</span></button>
                            <button @click="modal = 'archive'" class="text-text-muted-light dark:text-text-muted-dark hover:text-red-500 p-1" title="Archiver"><span class="material-symbols-outlined">archive</span></button>
                        </div>
                    </td>
                </tr>
                 <!-- Fiche refusée -->
                <tr x-show="tab === 'refused'" class="border-b border-accent dark:border-secondary/20">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center"><span class="material-symbols-outlined">person</span></div>
                            <div>
                                <p class="font-semibold text-text-light dark:text-text-dark">Alice Dupont</p>
                                <p class="text-xs text-text-muted-light dark:text-text-muted-dark">alice.dupont@example.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-sm text-text-light dark:text-text-dark">Data Analyst</td>
                    <td class="p-4 text-sm text-text-light dark:text-text-dark">Analyse</td>
                    <td class="p-4"><span class="status-badge status-rejected">Refusé</span></td>
                    <td class="p-4">
                        <div class="flex justify-center items-center gap-2">
                            <button class="text-text-muted-light dark:text-text-muted-dark hover:text-red-500 p-1" title="Supprimer définitivement"><span class="material-symbols-outlined">delete_forever</span></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modale de Validation / Modification -->
    <div x-show="modal === 'validate' || modal === 'create'" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm" x-transition>
        <div @click.away="modal = null" class="bg-accent dark:bg-secondary/40 rounded-lg shadow-soft w-full max-w-4xl max-h-[95vh] m-4 flex flex-col">
            <div class="flex justify-between items-center p-4 border-b border-secondary/10 dark:border-secondary/30">
                <h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark" x-text="modal === 'create' ? 'Créer un nouveau profil' : 'Valider/Modifier le profil'"></h3>
                <button @click="modal = null" class="text-text-muted-light dark:text-text-muted-dark hover:text-text-light"><span class="material-symbols-outlined">close</span></button>
            </div>
            <div class="p-6 overflow-y-auto space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div><label class="block text-sm font-medium">Nom</label><input type="text" value="Dubois" class="w-full bg-background-light dark:bg-background-dark border-none rounded mt-1"></div>
                    <div><label class="block text-sm font-medium">Prénom</label><input type="text" value="Marc" class="w-full bg-background-light dark:bg-background-dark border-none rounded mt-1"></div>
                    <div><label class="block text-sm font-medium">Matricule</label><input type="text" placeholder="Ex: GTK-0123 ou MENJA-456" class="w-full bg-background-light dark:bg-background-dark border-none rounded mt-1"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div><label class="block text-sm font-medium">Poste</label><input type="text" value="Vulgarisateur" class="w-full bg-background-light dark:bg-background-dark border-none rounded mt-1"></div>
                    <div><label class="block text-sm font-medium">Département</label><input type="text" value="Terrain" class="w-full bg-background-light dark:bg-background-dark border-none rounded mt-1"></div>
                    <div><label class="block text-sm font-medium">Salaire</label><input type="number" placeholder="Salaire mensuel brut" class="w-full bg-background-light dark:bg-background-dark border-none rounded mt-1"></div>
                </div>
                <div><label class="block text-sm font-medium">Type de contrat</label><input type="text" value="CDD" class="w-full bg-background-light dark:bg-background-dark border-none rounded mt-1"></div>
                
                <!-- Section Documents -->
                <div>
                    <h4 class="text-lg font-semibold font-display mb-2 text-text-light dark:text-text-dark">Documents</h4>
                    <div class="space-y-3">
                        <div class="p-3 bg-background-light dark:bg-background-dark rounded-lg flex items-center justify-between">
                            <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary">badge</span><p>carte_identite.pdf</p></div>
                            <div class="flex items-center gap-2"><a href="#" class="text-sm font-semibold text-primary hover:underline">Voir</a><a href="#" class="text-sm font-semibold text-primary hover:underline">Changer</a></div>
                        </div>
                         <div class="p-3 bg-background-light dark:bg-background-dark rounded-lg flex items-center justify-between">
                            <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary">description</span><p>contrat_de_travail.pdf</p></div>
                            <div class="flex items-center gap-2"><a href="#" class="text-sm font-semibold text-primary hover:underline">Voir</a><a href="#" class="text-sm font-semibold text-primary hover:underline">Changer</a></div>
                        </div>
                    </div>
                </div>

                <!-- Section Historique -->
                <div>
                    <h4 class="text-lg font-semibold font-display mb-2 text-text-light dark:text-text-dark">Historique</h4>
                    <ul class="text-sm text-text-muted-light dark:text-text-muted-dark space-y-1 list-disc list-inside">
                        <li>Fiche créée par <span class="font-semibold">Marc Dubois</span> le 18/07/2024.</li>
                        <li x-show="modal !== 'create'">Fiche corrigée par <span class="font-semibold">Admin</span> le 19/07/2024.</li>
                    </ul>
                </div>
            </div>
            <div class="flex justify-end gap-4 p-4 bg-accent/50 dark:bg-secondary/20 border-t border-secondary/10 dark:border-secondary/30">
                <button @click="modal = null" class="px-4 py-2 rounded-md text-sm font-semibold text-text-muted-light dark:text-text-muted-dark hover:bg-black/5 dark:hover:bg-white/5">Annuler</button>
                <button @click="modal = null" class="px-6 py-2 rounded-md text-sm font-bold bg-primary text-secondary hover:bg-primary/90 shadow-soft" x-text="modal === 'create' ? 'Créer et Valider' : 'Valider le profil'"></button>
            </div>
        </div>
    </div>

    <!-- Modale de Refus -->
    <div x-show="modal === 'refuse'" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm" x-transition>
        <div @click.away="modal = null" class="bg-accent dark:bg-secondary/40 rounded-lg shadow-soft max-w-md w-full p-6 m-4">
            <h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark mb-4">Motif du refus</h3>
            <textarea class="w-full bg-background-light dark:bg-background-dark border-secondary/20 rounded-md p-2" rows="4" placeholder="Ex: Numéro de CIN manquant, photo non conforme..."></textarea>
            <div class="flex justify-end gap-2 mt-6">
                <button @click="modal = null" class="px-4 py-2 rounded-md text-sm font-semibold">Annuler</button>
                <button @click="modal = null" class="px-4 py-2 rounded-md text-sm font-semibold bg-red-600 text-white hover:bg-red-700 shadow-soft">Confirmer le refus</button>
            </div>
        </div>
    </div>

    <!-- Modale d'Archivage -->
    <div x-show="modal === 'archive'" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm" x-transition>
        <div @click.away="modal = null" class="bg-accent dark:bg-secondary/40 rounded-lg shadow-soft max-w-md w-full p-6 m-4">
            <h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark mb-2">Archiver l'employé</h3>
            <p class="text-sm text-text-muted-light dark:text-text-muted-dark mb-4">Vous êtes sur le point d'archiver Jane Doe. Veuillez indiquer le motif.</p>
            <select class="w-full bg-background-light dark:bg-background-dark border-secondary/20 rounded-md p-2">
                <option>Démission</option>
                <option>Licenciement</option>
                <option>Fin de contrat</option>
                <option>Autre</option>
            </select>
            <div class="flex justify-end gap-2 mt-6">
                <button @click="modal = null" class="px-4 py-2 rounded-md text-sm font-semibold">Annuler</button>
                <button @click="modal = null" class="px-4 py-2 rounded-md text-sm font-semibold bg-red-600 text-white hover:bg-red-700 shadow-soft">Confirmer l'archivage</button>
            </div>
        </div>
    </div>
</main>
</div>
<?php include '../../templates/footer.php'; ?>