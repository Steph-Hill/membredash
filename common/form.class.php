<?php

//création de la class 
    class FormHtml
    
    {
        //creation de mes variables dynamiques
        public $title = '';

        public $bouton = '';

        public $actionText = '';

        function afficheForm(){

            //ça retourne le formulaire 
            return '<div class="formConnexion">

                        <form action="'.$this->actionText.'" method="post"> /*ajout de la variable dynamique actionText*/

                            <h2>'.$this->title.'</h2> /*ajout de la variable dynamique title*/

                            <label for="">Email</label>

                            <input type="text" name="email" placeholder="inserer votre adresse e-mail !">

                            <label for="">Mot de Passe</label>

                            <input type="text" name="pass" placeholder="créer un mot de passe">

                            <input class="btnSubmit" type="submit" value="'.$this->bouton.'"> /*ajout de la variable dynamique bouton*/

                        </form>

                    </div>';

        }


    }




?>