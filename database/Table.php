<?php

namespace Database;
use PDOException;

class Table{
	private $db;

	public function __construct(MySQL $db){
		$this->db = $db->connect();
	}

	public function getAllCategories(){
		$sql = "SELECT * FROM categories";
		$statement = $this->db->query($sql);
		return $statement->fetchAll();
	}

	// public function getCategory($id){
	// 	$sql = "SELECT * FROM menus WHERE category_id = $id";
	// 	$statement = $this->db->query($sql);
	// 	$result = $statement->fetch();
	// 	return $result;
	// }

	public function getAllMenus($id){
		if($id == 0){
			$sql = "SELECT * FROM menus";
			$statement = $this->db->query($sql);
			return $statement->fetchAll();
		}else{
			$sql = "SELECT * FROM menus WHERE category_id = $id";
			$statement = $this->db->query($sql);
			return $statement->fetchAll();
		}
	}

	public function getAllOrders(){
		$sql = "SELECT * FROM orders";
		$statement = $this->db->query($sql);
		return $statement->fetchAll();
	}
}


