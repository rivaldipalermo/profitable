<?php 

    Class Fungsi {

        protected $ci;

        function __construct() 
        {
            $this->ci =& get_instance();
        }

        function user_login()
        {
            $this->ci->load->model();
        }
    }

?>