-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 10 déc. 2024 à 11:10
-- Version du serveur : 5.7.24
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `title` char(50) NOT NULL,
  `text` text NOT NULL,
  `image_article` varchar(100) NOT NULL,
  `author` char(36) NOT NULL,
  `date_article` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `title`, `text`, `image_article`, `author`, `date_article`) VALUES
(6, 'Article 1', 'hdydgdtdsgsg svsgssfte vsssgghss svsgsvd dbddhhdgd hdgdt vegdvdfdc xbxggddvfd bdgdvdcddgbrb rbrrhrgr vfFdfffqvqqqbnnnh vgdfte ee DQEDSFRS  C5F8F4F4FD BGDDFbcghddjjddkk', '40k.jpg', '58a01095-7c97-11ee-998c-d8c4977be9d4', '2023-11-07'),
(7, 'Article 2', 'lJHTfhhdg svsgssfte vsssgghss svsgsvd dbddhhdgd gfdvc vsfscsdxde evegetfbff  nhfyfrrjrkrpls bbgdfdgjekele SFSRERSGSBS Vfsdfgee GFDREVt fdehe FRDESZRFV nhbff 8 54vmlgkgn nhbgf5f ghgjgogbenkinrinrip', '40k.jpg', '58a01095-7c97-11ee-998c-d8c4977be9d4', '2023-11-07'),
(10, 'Quid des sœurs de bataille ?', 'Praesent turpis quam, consequat sit amet iaculis non, tincidunt nec sem. Curabitur accumsan ultrices augue, quis fermentum risus lobortis ac. Cras dapibus pulvinar nisl id hendrerit. Vestibulum laoreet dolor in eros maximus interdum. Donec faucibus lacus a molestie efficitur. Nunc gravida, mauris ut lacinia molestie, enim quam facilisis velit, a placerat metus nulla in mi. In sit amet tristique velit. Proin tempor suscipit bibendum. Praesent gravida neque non turpis ultrices venenatis. Vestibulum maximus auctor accumsan. Nullam at ultrices magna. Quisque rutrum non nunc quis pharetra. Donec condimentum arcu at eros aliquam, molestie laoreet ex malesuada. Nullam efficitur, urna nec porta hendrerit, lorem metus dictum velit, vel eleifend augue nibh eu massa. In congue commodo varius. Ut feugiat feugiat metus, nec suscipit lacus vulputate in.\r\n\r\nPraesent turpis quam, consequat sit amet iaculis non, tincidunt nec sem. Curabitur accumsan ultrices augue, quis fermentum risus lobortis ac. Cras dapibus pulvinar nisl id hendrerit. Vestibulum laoreet dolor in eros maximus interdum. Donec faucibus lacus a molestie efficitur. Nunc gravida, mauris ut lacinia molestie, enim quam facilisis velit, a placerat metus nulla in mi. In sit amet tristique velit. Proin tempor suscipit bibendum. Praesent gravida neque non turpis ultrices venenatis. Vestibulum maximus auctor accumsan. Nullam at ultrices magna. Quisque rutrum non nunc quis pharetra. Donec condimentum arcu at eros aliquam, molestie laoreet ex malesuada. Nullam efficitur, urna nec porta hendrerit, lorem metus dictum velit, vel eleifend augue nibh eu massa. In congue commodo varius. Ut feugiat feugiat metus, nec suscipit lacus vulputate in.', '600px-HistoireDeImperium.jpg', '58a01095-7c97-11ee-998c-d8c4977be9d4', '2023-11-10'),
(12, 'La grande croisade, mythe ou réalité ?', 'Praesent turpis quam, consequat sit amet iaculis non, tincidunt nec sem. Curabitur accumsan ultrices augue, quis fermentum risus lobortis ac. Cras dapibus pulvinar nisl id hendrerit. Vestibulum laoreet dolor in eros maximus interdum. Donec faucibus lacus a molestie efficitur. Nunc gravida, mauris ut lacinia molestie, enim quam facilisis velit, a placerat metus nulla in mi. In sit amet tristique velit. Proin tempor suscipit bibendum. Praesent gravida neque non turpis ultrices venenatis. Vestibulum maximus auctor accumsan. Nullam at ultrices magna. Quisque rutrum non nunc quis pharetra. Donec condimentum arcu at eros aliquam, molestie laoreet ex malesuada. Nullam efficitur, urna nec porta hendrerit, lorem metus dictum velit, vel eleifend augue nibh eu massa. In congue commodo varius. Ut feugiat feugiat metus, nec suscipit lacus vulputate in.\r\n\r\nPraesent turpis quam, consequat sit amet iaculis non, tincidunt nec sem. Curabitur accumsan ultrices augue, quis fermentum risus lobortis ac. Cras dapibus pulvinar nisl id hendrerit. Vestibulum laoreet dolor in eros maximus interdum. Donec faucibus lacus a molestie efficitur. Nunc gravida, mauris ut lacinia molestie, enim quam facilisis velit, a placerat metus nulla in mi. In sit amet tristique velit. Proin tempor suscipit bibendum. Praesent gravida neque non turpis ultrices venenatis. Vestibulum maximus auctor accumsan. Nullam at ultrices magna. Quisque rutrum non nunc quis pharetra. Donec condimentum arcu at eros aliquam, molestie laoreet ex malesuada. Nullam efficitur, urna nec porta hendrerit, lorem metus dictum velit, vel eleifend augue nibh eu massa. In congue commodo varius. Ut feugiat feugiat metus, nec suscipit lacus vulputate in.\r\nPraesent turpis quam, consequat sit amet iaculis non, tincidunt nec sem. Curabitur accumsan ultrices augue, quis fermentum risus lobortis ac. Cras dapibus pulvinar nisl id hendrerit. Vestibulum laoreet dolor in eros maximus interdum. Donec faucibus lacus a molestie efficitur. Nunc gravida, mauris ut lacinia molestie, enim quam facilisis velit, a placerat metus nulla in mi. In sit amet tristique velit. Proin tempor suscipit bibendum. Praesent gravida neque non turpis ultrices venenatis. Vestibulum maximus auctor accumsan. Nullam at ultrices magna. Quisque rutrum non nunc quis pharetra. Donec condimentum arcu at eros aliquam, molestie laoreet ex malesuada. Nullam efficitur, urna nec porta hendrerit, lorem metus dictum velit, vel eleifend augue nibh eu massa. In congue commodo varius. Ut feugiat feugiat metus, nec suscipit lacus vulputate in.\r\n\r\nPraesent turpis quam, consequat sit amet iaculis non, tincidunt nec sem. Curabitur accumsan ultrices augue, quis fermentum risus lobortis ac. Cras dapibus pulvinar nisl id hendrerit. Vestibulum laoreet dolor in eros maximus interdum. Donec faucibus lacus a molestie efficitur. Nunc gravida, mauris ut lacinia molestie, enim quam facilisis velit, a placerat metus nulla in mi. In sit amet tristique velit. Proin tempor suscipit bibendum. Praesent gravida neque non turpis ultrices venenatis. Vestibulum maximus auctor accumsan. Nullam at ultrices magna. Quisque rutrum non nunc quis pharetra. Donec condimentum arcu at eros aliquam, molestie laoreet ex malesuada. Nullam efficitur, urna nec porta hendrerit, lorem metus dictum velit, vel eleifend augue nibh eu massa. In congue commodo varius. Ut feugiat feugiat metus, nec suscipit lacus vulputate in.\r\n\r\nPraesent turpis quam, consequat sit amet iaculis non, tincidunt nec sem. Curabitur accumsan ultrices augue, quis fermentum risus lobortis ac. Cras dapibus pulvinar nisl id hendrerit. Vestibulum laoreet dolor in eros maximus interdum. Donec faucibus lacus a molestie efficitur. Nunc gravida, mauris ut lacinia molestie, enim quam facilisis velit, a placerat metus nulla in mi. In sit amet tristique velit. Proin tempor suscipit bibendum. Praesent gravida neque non turpis ultrices venenatis. Vestibulum maximus auctor accumsan. Nullam at ultrices magna. Quisque rutrum non nunc quis pharetra. Donec condimentum arcu at eros aliquam, molestie laoreet ex malesuada. Nullam efficitur, urna nec porta hendrerit, lorem metus dictum velit, vel eleifend augue nibh eu massa. In congue commodo varius. Ut feugiat feugiat metus, nec suscipit lacus vulputate in.', '700px-DébutGrandeCroisade.jpg', '58a01095-7c97-11ee-998c-d8c4977be9d4', '2023-11-10'),
(13, 'Bien peindre ses figurines Warhammer', 'Praesent turpis quam, consequat sit amet iaculis non, tincidunt nec sem. Curabitur accumsan ultrices augue, quis fermentum risus lobortis ac. Cras dapibus pulvinar nisl id hendrerit. Vestibulum laoreet dolor in eros maximus interdum. Donec faucibus lacus a molestie efficitur. Nunc gravida, mauris ut lacinia molestie, enim quam facilisis velit, a placerat metus nulla in mi. In sit amet tristique velit. Proin tempor suscipit bibendum. Praesent gravida neque non turpis ultrices venenatis. Vestibulum maximus auctor accumsan. Nullam at ultrices magna. Quisque rutrum non nunc quis pharetra. Donec condimentum arcu at eros aliquam, molestie laoreet ex malesuada. Nullam efficitur, urna nec porta hendrerit, lorem metus dictum velit, vel eleifend augue nibh eu massa. In congue commodo varius. Ut feugiat feugiat metus, nec suscipit lacus vulputate in.\r\n\r\nPraesent turpis quam, consequat sit amet iaculis non, tincidunt nec sem. Curabitur accumsan ultrices augue, quis fermentum risus lobortis ac. Cras dapibus pulvinar nisl id hendrerit. Vestibulum laoreet dolor in eros maximus interdum. Donec faucibus lacus a molestie efficitur. Nunc gravida, mauris ut lacinia molestie, enim quam facilisis velit, a placerat metus nulla in mi. In sit amet tristique velit. Proin tempor suscipit bibendum. Praesent gravida neque non turpis ultrices venenatis. Vestibulum maximus auctor accumsan. Nullam at ultrices magna. Quisque rutrum non nunc quis pharetra. Donec condimentum arcu at eros aliquam, molestie laoreet ex malesuada. Nullam efficitur, urna nec porta hendrerit, lorem metus dictum velit, vel eleifend augue nibh eu massa. In congue commodo varius. Ut feugiat feugiat metus, nec suscipit lacus vulputate in.', 'heresy.jpg', 'c8081bab-7fac-11ee-b0b4-d8c4977be9d4', '2023-11-10');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` char(36) NOT NULL,
  `mail` varchar(254) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` char(20) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `mail`, `password`, `name`, `avatar`) VALUES
('58a01095-7c97-11ee-998c-d8c4977be9d4', 'adresseadmin@exemple.fr', '$2y$10$AhMEpUYhWXzDcv7X/ZVqx.OPvTxgDvIOPcsEITvUKaUT521jdGHyG', 'Alexis', 'avatar1.jpg'),
('c8081bab-7fac-11ee-b0b4-d8c4977be9d4', 'adresselecteur@exemple.fr', '$2y$10$pgHJupNRw/NZviKNhjUrmOBTd8iUJjl7OQalNq2xuvNO1eJmimTsa', 'JoJo', 'avatar2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `text_comment` varchar(150) NOT NULL,
  `date_comment` datetime DEFAULT CURRENT_TIMESTAMP,
  `author_comment` char(36) NOT NULL,
  `article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`text_comment`, `date_comment`, `author_comment`, `article`) VALUES
('Je suis le texte du commentaire', '2023-11-08 11:59:34', '58a01095-7c97-11ee-998c-d8c4977be9d4', 6),
('Je suis le texte du second commentaire pour l\'article 6', '2023-11-08 12:00:11', '58a01095-7c97-11ee-998c-d8c4977be9d4', 6),
('Test commentaire avec insulte : **** va !', '2023-11-09 11:38:38', '58a01095-7c97-11ee-998c-d8c4977be9d4', 7),
('Hello les gens, merci pour ce tuto', '2023-11-10 11:01:23', 'c8081bab-7fac-11ee-b0b4-d8c4977be9d4', 13);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `author` (`author`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD KEY `author_comment` (`author_comment`),
  ADD KEY `article` (`article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`author`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`author_comment`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`article`) REFERENCES `article` (`id_article`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
