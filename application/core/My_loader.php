<?php

class My_loader extends CI_Loader {

    public function templatePages($template_name, $vars = array(), $return = FALSE) {
        $content = $this->view('templates/header', $vars, $return);
        $content .= $this->view('pages/' . $template_name, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        if ($return) {
            return $content;
        }
    }

    public function templateVoyage($template_name, $vars = array(), $return = FALSE) {
        $content = $this->view('templates/header', $vars, $return);
        $content .= $this->view('Voyage/' . $template_name, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        if ($return) {
            return $content;
        }
    }

    public function templateUser($template_name, $vars = array(), $return = FALSE) {
        $content = $this->view('templates/header', $vars, $return);
        $content .= $this->view('user/' . $template_name, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        if ($return) {
            return $content;
        }
    }

    public function templateTemplates($template_name, $vars = array(), $return = FALSE) {
        $content = $this->view('templates/header', $vars, $return);
        $content .= $this->view('templates/' . $template_name, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        if ($return) {
            return $content;
        }
    }

    public function templateAdministrateur($template_name, $vars = array(), $return = FALSE) {
        $content = $this->view('templates/header', $vars, $return);
        $content .= $this->view('administrateur/' . $template_name, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        if ($return) {
            return $content;
        }
    }

    public function templateCheckout($template_name, $vars = array(), $return = FALSE) {

        $content = $this->view('templates/header', $vars, $return);
        $content .= $this->view('checkout/' . $template_name, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        if ($return) {
            return $content;
        }
    }

}
