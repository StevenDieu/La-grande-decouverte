<?php

class My_loader extends CI_Loader {
    public function templateUtilisateur($template_name, $vars = array(), $return = FALSE)
    {
        $content  = $this->view('templates/header', $vars, $return);
        $content .= $this->view('utilisateur/'.$template_name, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        if ($return)
        {
            return $content;
        }
    }
    
        public function templateAdministrateur($template_name, $vars = array(), $return = FALSE)
    {
        $content  = $this->view('templates/header', $vars, $return);
        $content .= $this->view('administrateur/'.$template_name, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        if ($return)
        {
            return $content;
        }
    }
}