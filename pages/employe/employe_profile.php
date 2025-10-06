<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Greentsika HR Management</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Nunito+Sans:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#7fe548",
            "secondary": "#2c542f",
            "accent": "#f2f4f0",
            "background-light": "#f7f8f6",
            "text-light": "#131711",
            "text-muted-light": "#708764",
            "background-dark": "#172111",
            "text-dark": "#f7f8f6",
            "text-muted-dark": "#a8b5a3"
          },
          fontFamily: {
            "display": ["Poppins", "sans-serif"],
            "body": ["Nunito Sans", "sans-serif"]
          },
          borderRadius: {
            "DEFAULT": "0.5rem",
            "lg": "0.75rem",
            "full": "9999px"
          },
          boxShadow: {
            "soft": "0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03)",
          }
        },
      },
    }
  </script>
<style>
    .status-badge {
      padding: 0.25rem 0.75rem;
      border-radius: 9999px;
      font-size: 0.875rem;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
    }
    .status-pending {
      background-color: #fef9c3;
      color: #854d0e;
    }
    .status-validated {
      background-color: #dcfce7;
      color: #166534;
    }
    .status-refused {
      background-color: #fee2e2;
      color: #991b1b;
    }
  </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-body text-text-light dark:text-text-dark">
<div class="flex min-h-screen">
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
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-light dark:text-text-dark bg-primary/10 dark:bg-primary/20 font-semibold" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span>Tableau de bord</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">groups</span>
<span>Suivi des employés</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">timer</span>
<span>Pointage</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">event_busy</span>
<span>Congés et absences</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">payments</span>
<span>Salaires</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">account_balance</span>
<span>Caisse sociale</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<span>Paramètres</span>
</a>
</nav>
</aside>
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
<main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8">
<div class="max-w-4xl mx-auto">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
<h2 class="text-3xl font-bold font-display text-text-light dark:text-text-dark">Mon Profil</h2>
<div class="status-badge status-pending">
<span>🟡</span> En attente
            </div>
</div>
<div class="bg-background-light dark:bg-background-dark/50 p-6 rounded-lg shadow-soft border-l-4 border-primary mb-8">
<div class="flex justify-between items-center mb-2">
<p class="text-sm font-semibold text-text-light dark:text-text-dark">Profil complété à 60%</p>
</div>
<div class="w-full bg-accent dark:bg-secondary/30 rounded-full h-2.5">
<div class="bg-primary h-2.5 rounded-full" style="width: 60%"></div>
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
<button class="w-full text-sm font-semibold py-2 px-4 rounded bg-accent dark:bg-secondary/30 hover:bg-primary/20 dark:hover:bg-primary/30 text-text-light dark:text-text-dark transition-colors">
                      Changer la photo
                    </button>
</div>
</div>
<div>
<h3 class="text-lg font-semibold font-display mb-2 text-text-light dark:text-text-dark">Documents</h3>
<div class="space-y-3">
<button class="w-full text-sm font-semibold py-2 px-4 rounded bg-accent dark:bg-secondary/30 hover:bg-primary/20 dark:hover:bg-primary/30 text-text-light dark:text-text-dark transition-colors text-left">
                      Téléverser une pièce d'identité
                    </button>
<button class="w-full text-sm font-semibold py-2 px-4 rounded bg-accent dark:bg-secondary/30 hover:bg-primary/20 dark:hover:bg-primary/30 text-text-light dark:text-text-dark transition-colors text-left">
                      Téléverser un contrat de travail
                    </button>
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
<button class="bg-primary text-secondary font-bold font-display py-3 px-6 rounded-lg hover:opacity-90 transition-opacity shadow-soft" type="submit">
                      Enregistrer ma fiche
                    </button>
</div>
</form>
</div>
</div>
</div>
</div>
</main>
</div>
</div>

</body></html>