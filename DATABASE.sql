            -- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mer 08 Mars 2017 à 15:26
-- Version du serveur :  5.6.28
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `absolumentpasTVfinaldb`
--

-- --------------------------------------------------------

--
-- Structure de la table `actuality`
--

CREATE TABLE `actuality` (
  `id` int(11) NOT NULL,
  `title_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_news` longtext COLLATE utf8_unicode_ci NOT NULL,
  `author_news` int(11) NOT NULL,
  `date_news` datetime NOT NULL,
  `rank_news` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `actuality`
--

INSERT INTO `actuality` (`id`, `title_news`, `subtitle_news`, `image_news`, `content_news`, `author_news`, `date_news`, `rank_news`) VALUES
(1, 'Tchoupi revient !', 'Tchoupi revient tous les matins pour te faire un coucou', 'https://i.ytimg.com/vi/AV4rJMwBLFQ/maxresdefault.jpg', 'Les grands bonheurs et les petits soucis de T\'choupi, traités avec tendresse et humour.\r\nDes histoires dans lesquelles les petits prennent plaisir à reconnaître les situations de la vie quotidienne.', 1, '2017-02-07 00:00:00', 1),
(2, 'Les Super Nanas sauvent Paris', 'Une fourmi géante attaque Paris', 'https://static.mmzstatic.com/wp-content/uploads/2015/06/supernana-2016.jpg', 'Bulle ne pouvant pas frapper correctement une fourmi géante attaquant la ville, ses deux sœurs l\'emmènent voir le Professeur pour un examen.', 1, '2017-02-18 05:00:00', 1),
(3, 'Ben 10 arrive !', 'Ne rate pas Ben 10 tous les matins', 'https://www.cosmicbooknews.com/sites/default/files/new-ben-10.jpg', 'Alors que c\'est le premier jour de vacances, Ben trouve une montre étrange, l\'Omnitrix, qui lui permet de se transformer en de nombreux aliens avec des pouvoirs incroyables. Mais des forces négatives viennent sur Terre afin de récupérer cette montre et de semer la terreur.', 1, '2017-01-01 00:00:00', 1),
(4, 'Oui Oui et ses amis à la télé', 'Oui-Oui est un pantin de bois, à la tête articulée par un ressort qui se balance d\'avant en arrière', 'http://www.loopio.fr/images/rubriques/cat-ouioui.jpg', 'Oui-Oui est un pantin de bois, à la tête articulée par un ressort qui se balance d\'avant en arrière, comme pour dire oui. Il porte toujours un bonnet bleu surmonté d\'un grelot qui sonne quand sa tête bouge et un éternel foulard jaune à pois rouges. Il vit au pays des jouets, Miniville, dans lequel il a sa « maison-pour-lui-tout-seul ». Bien qu\'étant un enfant1, Oui-Oui est le chauffeur de taxi (et livreur) de la ville, et transporte ses amis dans sa voiture, douée elle aussi d\'une personnalité (elle ne parle pas, mais prend des initiatives et s\'exprime à coups d\'avertisseur sonore).', 1, '2016-12-01 00:00:00', 1),
(5, 'Des Titans !', 'Robin et Cyborg se télescopent, laissant échapper leur ennemi', 'https://i.ytimg.com/vi/yGadQ0xi9Yc/maxresdefault.jpg', 'Tentant d\'arrêter Cinderblock, Robin et Cyborg se télescopent, laissant échapper leur ennemi. Après une dispute entre les deux, Cyborg décide de quitter l\'équipe. Entre-temps, sur la demande du mystérieux Deathstroke, Cinderblock libère Plasmus, contre lequel les quatre autres Titans devront combattre.', 1, '2016-10-01 00:00:00', 1),
(6, 'L\'âne Trotro apprend Symfony', 'Trotro va-t-il enfin réussir à construire son site web ?', 'https://i.ytimg.com/vi/f5ATIl__j2k/hqdefault.jpg', 'L\'âne Trotro a fait l\'objet d\'une série télévisée d\'animation française en 78 épisodes de 4 minutes, réalisée par Éric Cazes et Stéphane Lezoray d\'après les albums créés par Bénédicte Guettier et diffusée depuis le 23 avril 2004 sur France 5.\r\n\r\nTrotro est également adapté en comédie musicale sous le titre Trotro fait son cirque et se joue actuellement aux Folies Bergère [archive] à Paris. Une tournée dans toute la France est prévue à partir d\'octobre 2015.', 1, '2012-01-01 00:00:00', 3),
(7, 'Nouvel article', 'Sous titre', 'https://i.ytimg.com/vi/f5ATIl__j2k/hqdefault.jpg', 'Le contenu', 1, '2012-01-01 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `email_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plain_password_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_user` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE `personnage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_perso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `personnage`
--

INSERT INTO `personnage` (`id`, `name`, `serie`, `image_perso`, `rank`) VALUES
(1, 'T\'choupi', 'T\'choupi', 'http://focus.tv5monde.com/tchoupialecole/wp-content/uploads/sites/63/2014/10/tchoupi.png', 1),
(2, 'Dora', 'Dora l\'exploratrice', 'http://happysport.fr/site/medias/Happysport-Dora-lexploratrice.jpg', 1),
(3, 'Ben', 'Ben 10', 'https://s-media-cache-ak0.pinimg.com/originals/60/6d/8c/606d8cea6d24e23e94c3adaf0aa037cd.jpg', 1),
(4, 'Oui-Oui', 'Oui-Oui et ses amis', 'http://www.babelio.com/users/QUIZ_Oui-Oui-_1866.jpeg', 1),
(5, 'Robin', 'Teen Titans', 'https://s-media-cache-ak0.pinimg.com/originals/76/31/3b/76313bce38217ce981ef123b4fafc1bb.jpg', 1),
(6, 'Starfire', 'Ben 10', 'https://s-media-cache-ak0.pinimg.com/originals/25/c2/81/25c281ea56375f209307b6680815eb9c.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

CREATE TABLE `programme` (
  `id` int(11) NOT NULL,
  `title_program` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number_season` int(11) NOT NULL,
  `date_program` datetime NOT NULL,
  `image_program` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_program` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `programme`
--

INSERT INTO `programme` (`id`, `title_program`, `number_season`, `date_program`, `image_program`, `description_program`) VALUES
(1, 'Garfield', 9, '2017-02-08 10:10:00', 'http://www.thegarfieldshow-diary.com/wp-content/uploads/2012/01/GRFCW.png', 'Harry, le chat de gouttière et ami de Garfield, tente d\'attraper un oiseau pour en faire son repas...sans succès. Garfield se souvient peu après du bon vieux temps quand il chassait les oiseaux. Il décide alors de chasser un oiseau, en vain. Malheureusement, ce même oiseau (qui était la mère de trois œufs) est resté coincé dans un garage en essayant de manger un ver de terre. Garfield repère alors un nid et grimpe dans un arbre pour attendre la mère oiseau. Le problème, c\'est que ça prenait des heures pour attendre cet oiseau. Peu après, Garfield regarde alors un documentaire sur les oiseaux et apprend, apeuré, que si la mère ne s\'occupe pas de ses œufs, ils seront perdus...Le lendemain, Garfield dormait dans le même arbre qu\'hier et pendant la nuit, les œufs ont éclos et prennent Garfield pour leur maman...'),
(2, 'Dora l\'Exploratrice', 9, '2012-01-01 00:00:00', 'http://images.telequebec.tv/livrables/42/default/w1152_h648.jpg', 'Dora âgée de 8 ans vient de recevoir un sac à dos magique et une carte savante douée de la parole. Accompagné de son meilleur ami Babouche, Dora va aider ses amis Véra, Totor ... Mais Chipeur sera toujours là pour les embêter mais n\'y arrive presque jamais. Dora vivra de folles aventures.'),
(3, 'Ben 10', 4, '2012-01-01 00:00:00', 'http://68.media.tumblr.com/a21ac16e422abf60198d84f0be93aaed/tumblr_inline_nqfftlv1nk1tpgwgf_1280.jpg', 'Ben 101 est une série d\'animation américaine de 49 épisodes, créée par Duncan Rouleau (en), Joe Casey, Joe Kelly et Steven T. Seagle, initialement diffusée entre le 27 décembre 2005 et le 15 avril 2008 sur Cartoon Network aux États-Unis. La série met en scène les exploits d\'un jeune garçon de 10 ans nommé Ben Tennyson, aidé d\'un objet attaché à son poignet appelé Omnitrix le transformant en une variété de monstres. Les trois derniers épisodes ont été réunis en un téléfilm nommé Le Secret de l\'Omnitrix.  La série se popularise rapidement auprès du public, évoluant ainsi en une franchise, et est nommée pour deux Emmy Awards. Plusieurs séries suivront : Ben 10: Alien Force en 2008, puis Ben 10: Ultimate Alien en 2010, et Ben 10: Omniverse en 2012.'),
(4, 'Marsupilami', 5, '2012-01-01 00:00:00', 'http://www.programme.tv/media/cache/relative_max_355x272/upload/epgs/2013/01/les-aventures-du-marsupilami_3227538_1.jpg', 'Journaliste, Dan Geraldo débarque en Palombie pour y animer une émission spéciale. Il ne va pas plus loin que l\'aéroport. Les sbires du dictateur local, le général Pochero, l\'embarquent manu militari. En prison, Dan fait la connaissance de Hermoso, un vieux botaniste tout occupé à détailler les propriétés de la plante qu\'il vient de découvrir. Quiconque en absorbe retrouve sa jeunesse. Le Marsupilami s\'empare de la plante miraculeuse et s\'enfuit avec elle. Pablito Camarone, le contact de Dan en Palombie, se fait arrêter tout exprès pour pouvoir s\'évader avec le journaliste et gagner ainsi le salaire dont il a besoin pour rembourser des truands, qui ne le laissent pas en repos...');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actuality`
--
ALTER TABLE `actuality`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A647912A5F6CC` (`email_user`),
  ADD UNIQUE KEY `UNIQ_957A6479468AD5E` (`username_user`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Index pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actuality`
--
ALTER TABLE `actuality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `personnage`
--
ALTER TABLE `personnage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `programme`
--
ALTER TABLE `programme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;