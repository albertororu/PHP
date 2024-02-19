<?php
class usuario
    {
        public $usuario;
        public $id;
        public $pwd;
        public $email;

        function __construct($usuario, $id, $pwd, $email)
        {
            $this->usuario = $usuario;
            $this->id = $id;
            $this->pwd = $pwd;
            $this->email = $email;
        }

        function set_usuario($usuario)
        {
            $this->usuario;
        }

        function set_id($id)
        {
            $this->id;
        }

        function set_pwd($pwd)
        {
            $this->pwd;
        }

        function set_email($email)
        {
            $this->email;
        }

        function get_usuario()
        {
            return $this->usuario;
        }

        function get_id()
        {
            return $this->id;
        }

        function get_pwd()
        {
            return $this->pwd;
        }

        function get_email()
        {
            return $this->email;
        }
    }
