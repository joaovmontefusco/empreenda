<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mensagem_model extends MY_Model {

    /**
    * table
    *
    * nome da tabela no model
    *
    * @protected
    */
    protected $table = 'mensagens';

    /**
    * table_id
    *
    * chave da tabela no model
    *
    * @protected
    */
    protected $table_id = 'id';

    // metodo construtor
    public function __construct() {
        parent::__construct();
    }

}