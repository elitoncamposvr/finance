<?php
class Provider extends model
{

    public function getList($offset, $id_company)
    {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM provider WHERE id_company = :id_company ORDER BY name_provider ASC LIMIT $offset, 10");
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getListProvider($id_company)
    {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM provider WHERE id_company = :id_company ORDER BY name_provider ASC");
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getInfo($id, $id_company)
    {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM provider WHERE id = :id AND id_company = :id_company");
        $sql->bindValue(":id", $id);
        $sql->bindValue("id_company", $id_company);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getCount($id_company)
    {
        $r = 0;

        $sql = $this->db->prepare("SELECT COUNT(*) as pd FROM provider WHERE id_company = :id_company");
        $sql->bindValue('id_company', $id_company);
        $sql->execute();
        $row = $sql->fetch();

        $r = $row['pd'];



        return $r;
    }

    public function add($name_provider, $provider_type, $cnpj, $cpf, $state_registration, $contact_name, $phone, $cellphone, $whatsapp, $birth_date, $email, $site, $aditional_info, $address_zipcode, $address, $address_number, $address2, $address_neighb, $address_city, $address_state, $id_company)
    {

        $sql = $this->db->prepare("INSERT INTO provider SET name_provider = :name_provider, provider_type = :provider_type, cnpj = :cnpj, cpf = :cpf, state_registration = :state_registration, contact_name = :contact_name, phone = :phone, cellphone = :cellphone, whatsapp = :whatsapp, birth_date = :birth_date, email = :email, site = :site, aditional_info = :aditional_info, address_zipcode = :address_zipcode, address = :address, address_number = :address_number, address2 = :address2, address_neighb = :address_neighb, address_city = :address_city, address_state = :address_state, id_company = :id_company");

        $sql->bindValue(":name_provider", $name_provider);
        $sql->bindValue("provider_type", $provider_type);
        $sql->bindValue("cnpj", $cnpj);
        $sql->bindValue("cpf", $cpf);
        $sql->bindValue("state_registration", $state_registration);
        $sql->bindValue("contact_name", $contact_name);
        $sql->bindValue("phone", $phone);
        $sql->bindValue("cellphone", $cellphone);
        $sql->bindValue("whatsapp", $whatsapp);
        $sql->bindValue("birth_date", $birth_date);
        $sql->bindValue("email", $email);
        $sql->bindValue("site", $site);
        $sql->bindValue("aditional_info", $aditional_info);
        $sql->bindValue("address_zipcode", $address_zipcode);
        $sql->bindValue("address", $address);
        $sql->bindValue("address_number", $address_number);
        $sql->bindValue("address2", $address2);
        $sql->bindValue("address_neighb", $address_neighb);
        $sql->bindValue("address_city", $address_city);
        $sql->bindValue("address_state", $address_state);
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();
    }


    public function edit($id, $id_company, $name_provider, $cnpj, $cpf, $state_registration, $contact_name, $phone, $cellphone, $whatsapp, $birth_date, $email, $site, $aditional_info, $address_zipcode, $address, $address_number, $address2, $address_neighb, $address_city, $address_state)
    {
        $sql = $this->db->prepare("UPDATE provider SET name_provider = :name_provider, cnpj = :cnpj, cpf = :cpf, state_registration = :state_registration, contact_name = :contact_name, phone = :phone, cellphone = :cellphone, whatsapp = :whatsapp, birth_date = :birth_date, email = :email, site = :site, aditional_info = :aditional_info, address_zipcode = :address_zipcode, address = :address, address_number = :address_number, address2 = :address2, address_neighb = :address_neighb, address_city = :address_city, address_state = :address_state WHERE id = :id AND id_company = :id_company");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":id_company", $id_company);
        $sql->bindValue(":name_provider", $name_provider);
        $sql->bindValue("cnpj", $cnpj);
        $sql->bindValue("cpf", $cpf);
        $sql->bindValue("state_registration", $state_registration);
        $sql->bindValue("contact_name", $contact_name);
        $sql->bindValue("phone", $phone);
        $sql->bindValue("cellphone", $cellphone);
        $sql->bindValue("whatsapp", $whatsapp);
        $sql->bindValue("birth_date", $birth_date);
        $sql->bindValue("email", $email);
        $sql->bindValue("site", $site);
        $sql->bindValue("aditional_info", $aditional_info);
        $sql->bindValue("address_zipcode", $address_zipcode);
        $sql->bindValue("address", $address);
        $sql->bindValue("address_number", $address_number);
        $sql->bindValue("address2", $address2);
        $sql->bindValue("address_neighb", $address_neighb);
        $sql->bindValue("address_city", $address_city);
        $sql->bindValue("address_state", $address_state);
        
        $sql->execute();
    }

    public function delete($id, $id_company)
    {
        $sql = $this->db->prepare("DELETE FROM provider WHERE id = :id AND id_company = :id_company");
        $sql->bindValue(":id", $id);
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();
    }

    public function searchProvider($sp, $id_company){
		$array = array();

		$sql = $this->db->prepare("SELECT name_provider, phone, contact_name, id FROM provider WHERE name_provider LIKE '%$sp%' ORDER BY name_provider ASC");
		$sql->bindValue(":name_provider", $sp.'%');
		$sql->bindValue(":id_company", $id_company);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;
	}
}
