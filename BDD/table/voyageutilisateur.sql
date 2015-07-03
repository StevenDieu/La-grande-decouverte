
CREATE TABLE `voyageutilisateur` (
`id` int(11) NOT NULL,
  `nbPersonnes` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `voyage_id` int(11) NOT NULL,
  `prix_total` int(11) NOT NULL,
  `assurance` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;	

--
-- Index pour la table `voyageutilisateur`
--
ALTER TABLE `voyageutilisateur`
 ADD PRIMARY KEY (`id`,`utilisateur_id`,`voyage_id`), ADD KEY `fk_voyageutilisateur_utilisateur_idx` (`utilisateur_id`), ADD KEY `fk_voyageutilisateur_voyage1_idx` (`voyage_id`);


--
-- AUTO_INCREMENT pour la table `voyageutilisateur`
--
ALTER TABLE `voyageutilisateur`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;SET FOREIGN_KEY_CHECKS=1;