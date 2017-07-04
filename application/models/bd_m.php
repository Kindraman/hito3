<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bd_m extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

        function getData($tableName){
		$query = $this->db->get($tableName); // Se carga la tabla de la base de datos segun su nombre(form1 es nombre de tabla)

		if($query->num_rows() > 0){ //si la tabla existe retorna resultado
			return $query->result();

		} else {
			return false;
			
		}
	}

}
?>




