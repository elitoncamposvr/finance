<?php
class salesController extends controller
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
		$u->setLoggedUser();
		$company = new Companies($u->getCompany());
		$data['company_name'] = $company->getName();
		$data['user_email'] = $u->getEmail();

		$data['statuses'] = array(
			'0' => 'Aguardando Pgto',
			'1' => 'Pago',
			'2' => 'Cancelado'
		);

		if ($u->hasPermission('sales_view')) {
			$s = new Sales();
			$offset = 0;

			$data['sales_list'] = $s->getList($offset, $u->getCompany());

			$this->loadTemplate('sales', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function add()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();
		$company = new Companies($u->getCompany());
		$data['company_name'] = $company->getName();
		$data['user_email'] = $u->getEmail();

		if ($u->hasPermission('sales_view')) {
			$s = new Sales();
			$c = new Clients();

			if (isset($_POST['client_id']) && !empty($_POST['client_id'])) {
				$client_id = addslashes($_POST['client_id']);
				$status = addslashes($_POST['status']);
				$quant = $_POST['quant'];
				

				$s->addSale($u->getCompany(), $client_id, $u->getId(), $quant, $status);
				header("Location: " . BASE_URL . "sales");
			}

			$data['clients_list'] = $c->getListAll($u->getCompany());

			$this->loadTemplate('sales_add', $data);
		} else {
			header("Location: " . BASE_URL . "unauthorized");
		}
	}

	public function edit($id)
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();
		$company = new Companies($u->getCompany());
		$data['company_name'] = $company->getName();
		$data['user_email'] = $u->getEmail();

		$data['statuses'] = array(
			'0' => 'Aguardando Pgto',
			'1' => 'Pago',
			'2' => 'Cancelado'
		);

		if ($u->hasPermission('sales_view')) {
			$s = new Sales();

			$data['permission_edit'] = $u->hasPermission('sales_edit');

			if (isset($_POST['status']) && $data['permission_edit']) {
				$status = addslashes($_POST['status']);

				$s->changeStatus($status, $id, $u->getCompany());




				header("Location: " . BASE_URL . "sales");
			}

			$data['sales_info'] = $s->getInfo($id, $u->getCompany());


			$this->loadTemplate('sales_edit', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}
}
