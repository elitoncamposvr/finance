<?php
class homeController extends controller
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
        $sh = new Schedule();
        $sh->setServicesPending();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();

        $c = new Clients();
        $sh = new Schedule();
        $pd = new Provider();

        $data['clients_count'] = $c->getCount($u->getCompany());
        $data['providers_count'] = $pd->getCount($u->getCompany());
        $data['schedule_count'] = $sh->getCount($u->getCompany());
        $data['schedule_count_active'] = $sh->getCountActive($u->getCompany());




        $this->loadTemplate('home', $data);
    }

    public function unauthorized()
    {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();

        $this->loadTemplate('unauthorized', $data);
    }
}
