<?php
$pageTitle = "Greentsika HR Management - Pointage";
$activePage = "pointage";
include '../../templates/header.php';
?>
<style>
    .tab-button {
        padding: 10px 20px;
        cursor: pointer;
        border: none;
        background-color: transparent;
        border-bottom: 2px solid transparent;
        transition: all 0.3s ease;
        font-weight: 600;
    }
    .tab-button.active {
        border-bottom: 2px solid #4CAF50;
        color: #4CAF50;
    }
    .status-badge {
        padding: 0.25rem 0.75rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    .status-present {
        background-color: #dcfce7;
        color: #166534;
    }
    .status-late {
        background-color: #fef9c3;
        color: #854d0e;
    }
    .status-absent {
        background-color: #fee2e2;
        color: #991b1b;
    }
</style>

<?php include 'sidebar_manager.php'; ?>

<div class="flex-1 flex flex-col" x-data="{ tab: 'equipe' }">
    <header class="bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm sticky top-0 z-10 border-b border-accent dark:border-secondary/20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <h2 class="text-2xl font-bold font-display text-text-light dark:text-text-dark">Pointage &amp; Présence</h2>
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
        <div class="mb-6 border-b border-gray-200 dark:border-gray-700">
            <nav class="-mb-px flex gap-6" aria-label="Tabs">
                <button @click="tab = 'equipe'" :class="{ 'active': tab === 'equipe' }" class="tab-button">
                    Pointage de l'équipe
                </button>
                <button @click="tab = 'mon_pointage'" :class="{ 'active': tab === 'mon_pointage' }" class="tab-button">
                    Mon pointage
                </button>
            </nav>
        </div>

        <!-- Tab Content for Team Time Tracking -->
        <div x-show="tab === 'equipe'" x-cloak>
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark">Pointage de l'Équipe</h3>
                    <p class="text-text-muted-light dark:text-text-muted-dark">Lundi 18 Mars 2024</p>
                </div>
                <div class="flex items-center gap-2">
                    <input class="bg-accent dark:bg-secondary/20 border-secondary/20 dark:border-secondary/30 rounded-lg p-2 text-sm focus:ring-primary focus:border-primary" type="date" value="2024-03-18"/>
                    <button class="bg-primary text-secondary font-bold py-2 px-4 rounded-lg flex items-center gap-2 hover:bg-primary/90 transition-colors shadow-soft">
                        <span class="material-symbols-outlined">download</span>
                        <span>Exporter</span>
                    </button>
                </div>
            </div>
            <div class="bg-accent dark:bg-secondary/20 rounded-lg shadow-soft overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="border-b border-secondary/10 dark:border-secondary/30">
                        <tr>
                            <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Employé</th>
                            <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Heure d'arrivée</th>
                            <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Statut</th>
                            <th class="p-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Remarques</th>
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
                                        <p class="text-xs text-text-muted-light dark:text-text-muted-dark">Développeuse</p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4 text-sm font-semibold text-text-light dark:text-text-dark">08:02</td>
                            <td class="p-4"><span class="status-badge status-present"><span class="material-symbols-outlined text-sm">check_circle</span> Présent</span></td>
                            <td class="p-4 text-sm text-text-muted-light dark:text-text-muted-dark italic">--</td>
                            <td class="p-4"><button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">edit_note</span></button></td>
                        </tr>
                        <tr class="border-b border-accent dark:border-secondary/20">
                            <td class="p-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4oyNck-cFxGq5OtFM2IbokILAKjAKmbJYCm-8pr3X047ObLK76yPK74y4mib5s8R7-uL7OfnEuc_A6W4r4df-GQ8x7W9_FSJuwht4uF1pDos8fj-235LRANFLC5Uog0twYVDZGSJ-EZRP3wzsf8NRpP8rCOePxr9h83onFeDD8pywL-ZQO9fB9tip4T7j0B4TtQKoiEtRznhetSvmLXLaVsEUxgji4FvsmVYSVWGubtl-C-WuZsLH7fQZeJmfCV71g8Wh9PonQei3");'></div>
                                    <div>
                                        <p class="font-semibold text-text-light dark:text-text-dark">Marc Dubois</p>
                                        <p class="text-xs text-text-muted-light dark:text-text-muted-dark">Designer</p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4 text-sm font-semibold text-yellow-600 dark:text-yellow-400">08:17</td>
                            <td class="p-4"><span class="status-badge status-late"><span class="material-symbols-outlined text-sm">schedule</span> En retard</span></td>
                            <td class="p-4 text-sm text-text-light dark:text-text-dark">Prévenu par SMS, transport en commun.</td>
                            <td class="p-4"><button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary dark:hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">edit_note</span></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tab Content for My Time Tracking -->
        <div x-show="tab === 'mon_pointage'" x-cloak>
            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                    <div class="lg:col-span-1 bg-gradient-to-br from-primary/80 to-primary/60 dark:from-primary/50 dark:to-primary/30 p-6 rounded-lg shadow-soft text-center">
                        <div class="w-24 h-24 rounded-full mx-auto mb-4 bg-cover bg-center border-4 border-white dark:border-background-dark shadow-md" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBEJg0aghtyYYbGJE6Jau-8Au9RfROclaYc0G7KvNZaCb95GVAkQiMkfe9Su2sGiUe9B78tjMSft4uuWYJ9rwFragzWSx9nzQN4MU24LmWvohh4o_TZ8HxNKP1yNDAD4QBU0tOi6tQELOVvvQocQo_mePE1gqUguHYKW21E4AOyixWB5IJ-s63ShJe1hCVEtsCpRD-iS5VuGpCW8RY1D1ItGn2ExfDbWBdT3iqRHSVOudNlIfvrAOZp8ljBUKbAxxZ7IQamP1-LCv2");'></div>
                        <h3 class="font-display text-2xl font-bold text-secondary dark:text-text-dark">Bienvenue!</h3>
                        <p class="text-secondary/80 dark:text-text-muted-dark mt-1">Prêt pour une nouvelle journée productive.</p>
                        <div class="mt-6 space-y-4">
                            <button class="w-full flex items-center justify-center gap-3 bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-6 rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
                                <span class="text-3xl">🟢</span>
                                <span class="text-xl">Check-in</span>
                            </button>
                            <button class="w-full flex items-center justify-center gap-3 bg-blue-500 hover:bg-blue-600 text-white font-bold py-4 px-6 rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
                                <span class="text-3xl">🔵</span>
                                <span class="text-xl">Check-out</span>
                            </button>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div class="bg-white dark:bg-background-dark/50 p-6 rounded-lg shadow-soft">
                            <div class="flex justify-between items-center mb-4 border-b border-accent dark:border-secondary/20 pb-4">
                                <h3 class="text-xl font-bold font-display text-text-light dark:text-text-dark">Mon Historique de Pointage</h3>
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-text-muted-light dark:text-text-muted-dark">calendar_today</span>
                                    <span class="font-semibold text-sm">Aujourd'hui: 24 Juillet 2024</span>
                                </div>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-left">
                                    <thead class="border-b border-accent dark:border-secondary/20">
                                        <tr>
                                            <th class="py-3 px-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Date</th>
                                            <th class="py-3 px-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Arrivée</th>
                                            <th class="py-3 px-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Départ</th>
                                            <th class="py-3 px-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark">Total Heures</th>
                                            <th class="py-3 px-4 font-semibold text-sm text-text-muted-light dark:text-text-muted-dark text-center">Statut</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b border-accent dark:border-secondary/20">
                                            <td class="py-3 px-4 font-medium">24/07/2024</td>
                                            <td class="py-3 px-4">08:00</td>
                                            <td class="py-3 px-4">17:05</td>
                                            <td class="py-3 px-4">8h 05m</td>
                                            <td class="py-3 px-4 text-center"><span class="status-badge status-present">Présent</span></td>
                                        </tr>
                                        <tr class="border-b border-accent dark:border-secondary/20">
                                            <td class="py-3 px-4 font-medium">23/07/2024</td>
                                            <td class="py-3 px-4">08:15</td>
                                            <td class="py-3 px-4">17:02</td>
                                            <td class="py-3 px-4">7h 47m</td>
                                            <td class="py-3 px-4 text-center"><span class="status-badge status-late">Retard</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include '../../templates/footer.php'; ?>
