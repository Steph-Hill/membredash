<?php

//création de la class 
    class FormNewsHtml
    
    {
        //creation de mes variables dynamiques
        public $title = '';

        public $bouton = '';

        public $actionText = '';

        function afficheForm(){

            //ça retourne le formulaire 
            return '<div class="formConnexion">

                        <form action="'.$this->actionText.'" method="post"> /*ajout de la variable dynamique actionText*/

                            <h2>'.$this->title.'</h2> /*ajout de la variable dynamique title,*/

                            <label for="">Actu</label>

                            <input type="text" name="actu" placeholder="Ex : la Galleria Ferme definitivement ses porte en Martinique !">

                            <input class="btnSubmit" type="submit" value="'.$this->bouton.'"> /*ajout de la variable dynamique bouton*/

                        </form>

                    </div>';

        }


    }




?>