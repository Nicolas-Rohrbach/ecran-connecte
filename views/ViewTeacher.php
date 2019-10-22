<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 25/04/2019
 * Time: 10:58
 */

class ViewTeacher extends ViewG
{
    /**
     * Affiche un formulaire pour inscrire des enseignants via fichier Excel
     */
    public function displayInsertImportFileTeacher() {
        return '<h1> Création comptes enseignants</h1>'.$this->displayInsertImportFile("Prof");
    }

    /**
     * En-tête du tableau des enseignants
     * @return string
     */
    public function displayTabHeadTeacher(){
        $tab = ["Numéro Ent", "Code ADE"];
        $title = "Enseignants";
        return $this->displayStartTab('teacher', $tab, $title);
    }


    /**
     * Affiche une ligne contenant les données d'un enseignant
     * @param $result   Données de l'enseignant
     * @param $row      Numéro de ligne
     */
    public function displayAllTeachers($result, $row){
        return $this->displayAllTeacher($result, 'teacher', $row);
    }

    /**
     * Affiche le formulaire pour modifier un enseignant
     * @param $result   Données de l'enseignant
     */
    public function displayModifyMyTeacher($result){
        $this->displayModifyTeacher($result);
    }
}