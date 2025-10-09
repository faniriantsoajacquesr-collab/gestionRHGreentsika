 
<?php
session_start();

// profilesSignup.php
// Formulaire de création de profil après inscription.
// Ce fichier reprend le modèle visuel de `employe_profile.php` et enregistre les données
// dans la table `profiles` définie par `database.sql`.

require_once __DIR__ . '/../fonctions/connectionDB.php';

$pageTitle = "Greentsika HR Management - Compléter le profil";
$activePage = "profil";

// Déterminer l'utilisateur : preferer session, fallback à GET pour tests
$userId = $_SESSION['user_id'] ?? null;
if (!$userId && isset($_GET['user_id'])) {
	$userId = (int) $_GET['user_id'];
}

$errors = [];
$success = '';

// Traitement POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// récupération et nettoyage minimal
	$user_id = (int) ($_POST['user_id'] ?? 0);
	$first_name = trim($_POST['first_name'] ?? '');
	$last_name = trim($_POST['last_name'] ?? '');
	$date_of_birth = $_POST['date_of_birth'] ?? null;
	$poste = trim($_POST['job_title'] ?? '');
	$departement = trim($_POST['department'] ?? '');
	$phone_number = trim($_POST['phone'] ?? '');
	$address = trim($_POST['address'] ?? '');

	if ($user_id <= 0) {
		$errors[] = 'Identifiant utilisateur manquant. Veuillez vous connecter ou fournir user_id en paramètre.';
	}
	if ($first_name === '' || $last_name === '') {
 
					<button class="bg-primary text-white font-bold font-display py-3 px-6 rounded-lg hover:opacity-90 transition-opacity shadow-soft" type="submit">
						Enregistrer mon profil
					</button>
				</div>
			</form>
		</div>
	</div>
</main>
</div>
<?php include __DIR__ . '/../templates/footer.php'; ?>
