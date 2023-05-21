<?php
class schoolsController extends controller
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

		if ($u->hasPermission('schools')) {
			$schools = new Schools();
			$offset =  0;

			$data['p'] = 1;
			if (isset($_GET['p']) && !empty($_GET['p'])) {
				$data['p'] = intval($_GET['p']);
				if ($data['p'] == 0) {
					$data['p'] = 1;
				}
			}

			$offset = (15 * ($data['p'] - 1));

			$data['school_list'] = $schools->getList($offset);
			$data['school_count'] = $schools->getCountSchool();
			$data['p_count'] = ceil($data['school_count'] / 15);

			$this->loadTemplate('schools', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function create()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if ($u->hasPermission('schools')) {
			$schools = new Schools();

			if (isset($_POST['school_name']) && !empty($_POST['school_name'])) {
				$school_name = addslashes($_POST['school_name']);
				$head_school = addslashes($_POST['head_school']);

				$schools->create($school_name, $head_school);
				header("Location: " . BASE_URL . "schools");
			}

			$this->loadTemplate('school_create', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function update($id)
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if ($u->hasPermission('schools')) {
			$schools = new Schools();

			if (isset($_POST['school_name']) && !empty($_POST['school_name'])) {
				$school_name = addslashes($_POST['school_name']);
				$head_school = addslashes($_POST['head_school']);


				$schools->update($id, $school_name, $head_school);
				header("Location: " . BASE_URL . "schools");
			}

			$data['school_info'] = $schools->getInfo($id);

			$this->loadTemplate('school_update', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function destroy($id)
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if ($u->hasPermission('schools')) {
			$schools = new Schools();

			$schools->destroy($id);
			header("Location: " . BASE_URL . "schools");


			$this->loadTemplate('schools', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function search(){
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if($u->hasPermission('schools')){
			$schools = new Schools();

			$sp = addslashes($_GET['sp']);


			$data['schools_list'] = $schools->searchSchools($sp);
			$this->loadTemplate('school_search', $data);
		} else {
			header("Location: ".BASE_URL."home/unauthorized");
		}

	}

}
