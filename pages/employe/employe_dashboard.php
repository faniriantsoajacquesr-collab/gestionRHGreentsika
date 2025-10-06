<?php
$pageTitle = "Greentsika HR Management - Tableau de Bord";
$activePage = "dashboard";
include '../../templates/header.php';
?>
<style>
    .status-badge {
        padding: 0.25rem 0.75rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    .status-pending { background-color: #fef9c3; color: #854d0e; }
    .status-approved { background-color: #dcfce7; color: #166534; }
    .status-rejected { background-color: #fee2e2; color: #991b1b; }
</style>

<?php include 'sidebar_employe.php'; ?>

<div class="flex-1 flex flex-col">
    <header class="bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm sticky top-0 z-10 border-b border-accent dark:border-secondary/20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <h2 class="text-2xl font-bold font-display text-text-light dark:text-text-dark">Tableau de Bord</h2>
                <div class="flex items-center gap-4">
                    <span class="font-semibold">John Doe</span>
                    <div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBEJg0aghtyYYbGJE6Jau-8Au9RfROclaYc0G7KvNZaCb95GVAkQiMkfe9Su2sGiUe9B78tjMSft4uuWYJ9rwFragzWSx9nzQN4MU24LmWvohh4o_TZ8HxNKP1yNDAD4QBU0tOi6tQELOVvvQocQo_mePE1gqUguHYKW21E4AOyixWB5IJ-s63ShJe1hCVEtsCpRD-iS5VuGpCW8RY1D1ItGn2ExfDbWBdT3iqRHSVOudNlIfvrAOZp8ljBUKbAxxZ7IQamP1-LCv2");'></div>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="max-w-6xl mx-auto">
            <div class="mb-8">
                <h3 class="text-3xl font-bold font-display text-text-light dark:text-text-dark">Bienvenue, John !</h3>
                <p class="text-text-muted-light dark:text-text-muted-dark mt-1">Voici un aperçu de votre journée et de vos informations.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Cartes de résumé -->
                <div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft flex items-center gap-4">
                    <div class="bg-primary/20 text-primary p-3 rounded-full">
                        <span class="material-symbols-outlined text-3xl">event_available</span>
                    </div>
                    <div>
                        <p class="text-sm text-text-muted-light dark:text-text-muted-dark">Solde de congés</p>
                        <p class="text-2xl font-bold font-display text-text-light dark:text-text-dark">15 jours</p>
                    </div>
                </div>
                <div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft flex items-center gap-4">
                    <div class="bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600 dark:text-yellow-400 p-3 rounded-full">
                        <span class="material-symbols-outlined text-3xl">pending_actions</span>
                    </div>
                    <div>
                        <p class="text-sm text-text-muted-light dark:text-text-muted-dark">Demandes en attente</p>
                        <p class="text-2xl font-bold font-display text-text-light dark:text-text-dark">1</p>
                    </div>
                </div>
                <div class="bg-accent dark:bg-secondary/20 p-6 rounded-lg shadow-soft flex items-center gap-4">
                    <div class="bg-primary/20 text-primary p-3 rounded-full">
                        <span class="material-symbols-outlined text-3xl">timer</span>
                    </div>
                    <div>
                        <p class="text-sm text-text-muted-light dark:text-text-muted-dark">Heures (semaine)</p>
                        <p class="text-2xl font-bold font-display text-text-light dark:text-text-dark">32h 15m</p>
                    </div>
                </div>
            </div>
            
            <!-- Activité Récente -->
            <div class="bg-white dark:bg-background-dark/50 p-6 rounded-lg shadow-soft">
                <div class="flex justify-between items-center mb-4 border-b border-accent dark:border-secondary/20 pb-4">
                    <h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark">Demandes Récentes</h3>
                    <a href="employe_absenceConges.php" class="text-sm font-semibold text-primary hover:underline">Voir tout</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <tbody>
                            <tr class="border-b border-accent dark:border-secondary/20">
                                <td class="py-3 px-2 font-medium">Congés annuels <span class="text-text-muted-light text-sm">(5 jours)</span></td>
                                <td class="py-3 px-2 text-sm">01/08/24 - 05/08/24</td>
                                <td class="py-3 px-2 text-right"><span class="status-badge status-pending">🟡 En attente</span></td>
                            </tr>
                            <tr class="border-b border-accent dark:border-secondary/20">
                                <td class="py-3 px-2 font-medium">Absence maladie <span class="text-text-muted-light text-sm">(1 jour)</span></td>
                                <td class="py-3 px-2 text-sm">15/05/24 - 15/05/24</td>
                                <td class="py-3 px-2 text-right"><span class="status-badge status-approved">🟢 Validée</span></td>
                            </tr>
                            <tr>
                                <td class="py-3 px-2 font-medium">Raisons personnelles <span class="text-text-muted-light text-sm">(3 jours)</span></td>
                                <td class="py-3 px-2 text-sm">10/04/24 - 12/04/24</td>
                                <td class="py-3 px-2 text-right"><span class="status-badge status-rejected">🔴 Refusée</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include '../../templates/footer.php'; ?>