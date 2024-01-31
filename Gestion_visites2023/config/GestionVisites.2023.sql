SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `visiteur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `visiteur` (`id`, `pseudo`, `email`, `motdepasse`) VALUES
(1, 'Vaishnu', 'senthalan@admin.com', 'GESTION#123');

-- --------------------------------------------------------

CREATE TABLE `rapports` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `Nom_Medecin` varchar(50),
  `Prenom_Medecin` varchar(50),
  `specialiteComplementaire` varchar(50),
  `date` date NOT NULL,
  `Nom_Medicament` varchar(50),
  `bilan` text NOT NULL,
  `Famille_Medicament` varchar(50)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `rapports` (`id`, `image`, `Nom_Medecin`, `Prenom_Medecin`, `specialiteComplementaire`, `date`, `Nom_Medicament`, `bilan`, `Famille_Medicament`) VALUES
(1, 'https://paracetamol.bayer.com.ar/sites/g/files/vrxlpx30376/files/2022-10/LOGO_PARACETAMOL_BAYER.png', 'Dupont','Jean','Cardiologie Interventionnelle','2022-05-10','Paracetamol','Discussion positive sur les traitements', 'Analgesique'),
(2, 'https://www.apotheekonline.net/wp-content/uploads/2019/06/simvastatine-20mg.png', 'Martin','Marie', 'Medecine de la Douleur', '2022-02-02','Simvastatine','Medecin reconnaissant pour les informations fournies','Statine'),
(3, 'https://www.ndsplus.fr/resize/600x600/media/finish/img/origin/70/3400930137154-amoxicilline-mylan-1-g-comprimes-dispersibles-b-14-2x.png', 'Garcia','Laura', 'Chirurgie Oncologique','2022-11-10','Amoxicilline','Medecin interesse par les options de traitement', 'Antibiotique'),
(4, 'https://www.manovaistine.lt/private/uploads/images/products/omeprazole-inteli-20mg-caps-n14.png','Dubois','Isabelle','Endocrinologie','2021-12-07','Omeprazole', 'Medecin a besoin de plus informations', 'anti-ulcereux'),
(5, 'https://www.aversi.ge/uploads/matimg/132c17c3310cc142121890b44f104b00.png','Lefebre','Sophie', 'Electrophysiologie Cardiaque','2022-06-11', 'Salbutamol','Medecin favorable a une future collaboration','Bronchodilatateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rapports`
--
ALTER TABLE `rapports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `rapports`
--
ALTER TABLE `rapports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

