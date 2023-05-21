<?php
class usersController extends controller
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

		if ($u->hasPermission('users')) {
			$data['users_list'] = $u->getList();

			$this->loadTemplate('users', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function create()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if ($u->hasPermission('users')) {

			$schools = new Schools();

			if (isset($_POST['email']) && !empty($_POST['email'])) {
				$name_user = addslashes($_POST['name_user']);
				$email = addslashes($_POST['email']);
				$pass = addslashes($_POST['password']);
				$school_id = addslashes($_POST['school_id']);

				$a = $u->create($name_user, $email, $pass, $school_id);

				if ($a == '1') {
					header("Location: " . BASE_URL . "users");
				} else {
					$data['error_msg'] = "Usuário já existe!";
				}
			}

			$data['schools_list'] = $schools->getListAll();

			$this->loadTemplate('users_create', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function update($id)
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if ($u->hasPermission('users')) {

			$schools = new Schools();

			if (isset($_POST['name_user']) && !empty($_POST['name_user'])) {
				$email = addslashes($_POST['email']);
				$name_user = addslashes($_POST['name_user']);
				$pass = addslashes($_POST['password']);
				$school_id = addslashes($_POST['school_id']);

				$u->update($email, $name_user, $pass, $school_id, $id);
				header("Location: " . BASE_URL . "users");
			}
			$data['user_info'] = $u->getInfo($id);
			$data['schools_list'] = $schools->getListAll();


			$this->loadTemplate('users_update', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function destroy($id)
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if ($u->hasPermission('users')) {
			$p = new Permissions();

			$u->destroy($id);
			header("Location: " . BASE_URL . "users");

			$this->loadTemplate('users', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function block($id)
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		$status = 2;
		$u->isBlock($id, $status);
		header("Location: " . BASE_URL . "users/update/" . $id);
	}


	public function unblock($id)
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		$status = 1;
		$u->isBlock($id, $status);
		header("Location: " . BASE_URL . "users/update/" . $id);
	}


	public function permissions()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if ($u->hasPermission('permissions_view')) {

			$permissions = new Permissions();
			$data['permissions_list'] = $permissions->getList();

			$this->loadTemplate('permissions', $data);
		} else {

			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function permissions_group()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if ($u->hasPermission('permissions_view')) {

			$permissions = new Permissions();
			$data['permissions_groups_list'] = $permissions->getGroupList();

			$this->loadTemplate('permissions_group', $data);
		} else {

			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}


	public function permissions_add()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if ($u->hasPermission('permissions_view')) {
			$permissions = new Permissions();

			if (isset($_POST['name']) && !empty($_POST['name'])) {
				$pname = addslashes($_POST['name']);
				$permission_title = addslashes($_POST['permission_title']);
				$permissions->add($pname, $permission_title);
				header("Location: " . BASE_URL . "users/permissions");
			}

			$this->loadTemplate('permissions_add', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function permissions_add_group()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if ($u->hasPermission('permissions_view')) {
			$permissions = new Permissions();

			if (isset($_POST['name']) && !empty($_POST['name'])) {
				$pname = addslashes($_POST['name']);
				$plist = $_POST['permissions'];

				$permissions->addGroup($pname, $plist);
				header("Location: " . BASE_URL . "users/permissions_group");
			}

			$data['permissions_list'] = $permissions->getList();

			$this->loadTemplate('permissions_addgroup', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function permissions_delete($id)
	{

		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if ($u->hasPermission('permissions_view')) {
			$permissions = new Permissions();
			$permissions->delete($id);
			header("Location: " . BASE_URL . "users/permissions");
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function permissions_delete_group($id)
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if ($u->hasPermission('permissions_view')) {
			$permissions = new Permissions();
			$permissions->deleteGroup($id);
			header("Location: " . BASE_URL . "users/permissions_group");
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function permissions_edit_group($id)
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if ($u->hasPermission('permissions_view')) {
			$permissions = new Permissions();

			if (isset($_POST['name']) && !empty($_POST['name'])) {
				$pname = addslashes($_POST['name']);
				$plist = $_POST['permissions'];

				$permissions->editGroup($pname, $plist, $id);
				header("Location: " . BASE_URL . "users/permissions_group");
			}

			$data['permissions_list'] = $permissions->getList();
			$data['group_info'] = $permissions->getGroup($id);

			$this->loadTemplate('permissions_editgroup', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}
}
