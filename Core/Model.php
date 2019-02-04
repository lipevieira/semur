<?php 
namespace Core;

  /**
     * Autoria: felladrin.
     * Adaptação feita por mim.
     * forked from felladrin/pdo.class.php
    */
  class Model{
  	private $db_host = "127.0.0.1";
  	private $db_nome = "nti";
  	private $db_usuario = "root";
  	private $db_senha = "root";
  	private $db_driver = "mysql";
  	protected static $db;
  	private function __construct(){
  		try{
  			self::$db = new \PDO("$this->db_driver:host=$this->db_host; dbname=$this->db_nome", $this->db_usuario, $this->db_senha);
  			self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
  			self::$db->exec('SET NAMES utf8');
  		}
  		catch (PDOException $e){
  			die("Connection Error: ".$e->getMessage());
  		}
  	}
  	public static function conexao(){
  		if (!self::$db){
  			new Model();
  		}
  		return self::$db;
  	}
  }