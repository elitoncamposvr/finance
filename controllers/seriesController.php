<?php

class seriesController extends controller
{
    public function __construct()
    {

        $u = new Users();
        if ($u->isLogged() == false) {
            header("Location: " . BASE_URL . "login");
            exit;
        }
    }

    public function index()
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('series')) {

            $this->loadTemplate('reports', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }
}
