<?php
$listeMedecins = [
    ['Nom_Medecin' => 'Dupont', 'Prenom_Medecin' => 'Jean'],
    ['Nom_Medecin' => 'Martin', 'Prenom_Medecin' => 'Marie'],
    ['Nom_Medecin' => 'Lefevre', 'Prenom_Medecin' => 'Sophie'],
    ['Nom_Medecin' => 'Garcia', 'Prenom_Medecin' => 'Laura'],
    ['Nom_Medecin' => 'Dubois', 'Prenom_Medecin' => 'Isabelle'],
    ['Nom_Medecin' => 'Leroux', 'Prenom_Medecin' => 'Pierre'],
    ['Nom_Medecin' => 'Moreau', 'Prenom_Medecin' => 'Claire'],
    ['Nom_Medecin' => 'Roux', 'Prenom_Medecin' => 'Alexandre'],
    ['Nom_Medecin' => 'Fournier', 'Prenom_Medecin' => 'Emilie'],
    ['Nom_Medecin' => 'Bertrand', 'Prenom_Medecin' => 'Olivier'],
];
session_start();

require("../config/commandes.php");

if (!isset($_SESSION['xRttpHo0greL39'])) {
    header("Location: ../login.php");
}

if (empty($_SESSION['xRttpHo0greL39'])) {
    header("Location: ../login.php");
}

foreach ($_SESSION['xRttpHo0greL39'] as $i) {
    $nom = $i->pseudo;
    $email = $i->email;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
        crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <title>Ajouter un nouveau rapport</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../">PharmaConnect360</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../visiteur/afficher.php">Rapports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="font-weight: bold;" aria-current="page" href="../visiteur/">Nouveau</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="supprimer.php">Suppression</a>
                    </li>

                </ul>
                <div style="margin-right: 500px">
                    <h5 style="color: #545659; opacity: 0.5;">Connecté en tant que: <?= $nom ?></h5>
                </div>

                <a class="btn btn-danger d-flex" style="display: flex; justify-content: flex-end;" href="destroy.php">Se deconnecter</a>
            </div>
        </div>
    </nav>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


                <form method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">L'image du medicament</label>
                        <input type="text" class="form-control" name="image" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nom du médicament</label>
                        <select class="form-select" name="Nom_Medicament" required>
                            <?php
                            $nomsMedicaments = ['Paracetamol',
                            'Simvastatine',
                            'Amoxicilline',
                            'Omeprazole',
                            'Salbutamol',
                            'Citalopram',
                            'Losartan',
                            'Warfarine',
                            'Lipitor',
                            'Morphine',
                            'Oxycodone',
                            'Ampicilline',
                            'Naproxene',
                            'Clarithromycine',
                            'Azithromycine'];
                            foreach ($nomsMedicaments as $nomMedicament) : ?>
                                <option value="<?= $nomMedicament ?>"><?= $nomMedicament ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nom du médecin</label>
                        <select class="form-select" name="Nom_Medecin" required>
                            <?php foreach ($listeMedecins as $medecin) : ?>
                                <option value="<?= $medecin['Nom_Medecin'] ?>">
                                    <?= $medecin['Nom_Medecin'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Prénom du médecin</label>
                        <select class="form-select" name="Prenom_Medecin" required>
                            <?php foreach ($listeMedecins as $medecin) : ?>
                                <option value="<?= $medecin['Prenom_Medecin'] ?>">
                                    <?= $medecin['Prenom_Medecin'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Spécialité complémentaire</label>
                        <select class="form-select" name="specialiteComplementaire" required>
                            <?php
                            $specialites = ['Cardiologie Interventionnelle', 'Médecine de la Douleur', 'Chirurgie Oncologique', 'Endocrinologie', 'Electrophysiologie Cardiaque'];
                            foreach ($specialites as $specialite) : ?>
                                <option value="<?= $specialite ?>"><?= $specialite ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Date</label>
                        <input type="date" class="form-control" name="date" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Bilan</label>
                        <textarea class="form-control" name="bilan" required></textarea>
                    </div>
                    <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Famille du médicament</label>
                            <select class="form-select" name="Famille_Medicament" required>
                                <?php
                                $famillesMedicaments = [ 'Analgesique',
                                'Statine',
                                'Antibiotique',
                                'anti-ulcereux',
                                'Bronchodilatateur',
                                'Antidepresseur',
                                'Antagoniste des recepteurs de angiotensine II',
                                'Anticoagulant',
                                'Analgesiques opioides',
                                'Analgésiques non opioides',
                                'Penicillines',
                                'Macrolides'];
                                foreach ($famillesMedicaments as $famille) : ?>
                                    <option value="<?= $famille ?>"><?= $famille ?></option>
                                <?php endforeach; ?>
                            </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Quantité</label>
                        <input type="number" class="form-control" name="quantite" required>
                    </div>

                    

                    <button type="submit" name="valider" class="btn btn-primary">Ajouter un nouveau rapport</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>

<?php

if (isset($_POST['valider'])) {
    if (isset($_POST['image']) AND isset($_POST['Nom_Medicament']) AND isset($_POST['Nom_Medecin']) AND isset($_POST['Prenom_Medecin']) AND isset($_POST['specialiteComplementaire']) AND isset($_POST['date']) AND isset($_POST['bilan']) AND isset($_POST['Famille_Medicament'])) {
        if (!empty($_POST['image']) AND !empty($_POST['Nom_Medicament']) AND !empty($_POST['Nom_Medecin']) AND !empty($_POST['Prenom_Medecin']) AND !empty($_POST['specialiteComplementaire']) AND !empty($_POST['date']) AND !empty($_POST['bilan']) AND !empty($_POST['Famille_Medicament'])) {
            $image = htmlspecialchars(strip_tags($_POST['image']));
            $Nom_Medicament = htmlspecialchars(strip_tags($_POST['Nom_Medicament']));
            $Nom_Medecin = htmlspecialchars(strip_tags($_POST['Nom_Medecin']));
            $Prenom_Medecin = htmlspecialchars(strip_tags($_POST['Prenom_Medecin']));
            $specialiteComplementaire = htmlspecialchars(strip_tags($_POST['specialiteComplementaire']));
            $date = htmlspecialchars(strip_tags($_POST['date']));
            $bilan = htmlspecialchars(strip_tags($_POST['bilan']));
            $Famille_Medicament = htmlspecialchars(strip_tags($_POST['Famille_Medicament']));
            $quantite = htmlspecialchars(strip_tags($_POST['quantite']));
            try {
                // Utilisez la fonction appropriée de votre fichier commandes.php
                ajouter($image, $Nom_Medicament, $Nom_Medecin, $Prenom_Medecin, $specialiteComplementaire, $date, $bilan, $Famille_Medicament,$quantite,$id);
                header('Location: afficher.php');
            } catch (Exception $e) {
                echo $e->getMessage();
            }

        }
    }
}
?>
