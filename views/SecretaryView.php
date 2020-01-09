<?php
/**
 * Created by PhpStorm.
 * UserView: Rohrb
 * Date: 25/04/2019
 * Time: 10:52
 */

class SecretaryView extends UserView
{

    /**
     * Affiche un formulaire d'inscription pour les secretaires
     * @return string   Renvoie le formulaire
     */
    public function displayFormSecretary()
    {
        return '<h2> Compte secrétaire </h2>' . $this->displayBaseForm('Secre');
    }

    /**
     * Souhaite la bienvenue à l'utilisateur
     */
    public function displayWelcomeAdmin()
    {
        echo '<h1>Écran connecté</h1>
              <form method="post" id="dlAllEDT">
              <label for="dlEDT">Mettre à jours des emplois du temps</label>
                <input id="dlEDT" type="submit" name="dlEDT" value="Télécharger">
              </form>';
    }

    /**
     * Affiche l'en-tête du tableau des secrétaires
     * @return string
     */
    public function displayHeaderTabSecretary()
    {
        $title = "Secrétaires";
        return $this->displayStartTabLog('secre', $title);
    }

    /**
     * Affiche une ligne avec le login d'un secrétaire
     * @param $row      int Numéro de ligne
     * @param $id       int ID du secrétaire
     * @param $login    string Login du secrétaire
     * @return string   Renvoie la ligne
     */
    public function displayAllSecretary($row, $id, $login)
    {
        $tab[] = $login;
        return $this->displayRowTable($row, 'secre', $id, $tab);
    }

    /**
     * Demande de sélectionner un utilisateur
     */
    public function displaynoUser()
    {
        return '<p class="alert alert-danger">Veuillez choisir un utilisateur </p>';
    }
}