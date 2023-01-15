SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:00";


CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` char(11) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `InscriptionDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Users` (`id`, `Prenom`, `Nom`, `Email`, `Contact`, `Adresse`, `InscriptionDate`) VALUES #Insertion d'un nouvel utilisateur
(1, 'Damien', 'Bourdon', 'bourdon-d@gmail.com', '0657128545', 'Route de la Joneli�re, 44300 Nantes', '2018-11-28 05:41:26');

ALTER TABLE `Users` #Ajout de la clé primaire 'id' dans la table Users
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Users` #int(11) définit la plage d'adressage id de 0 à 2 147 483 647 et AUTO_INCREMENT=3 signifie que le premier utilisateur qui sera crée aura un id de 3.
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
