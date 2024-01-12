<?php


class elemento{
    public $nombre;
    public $cantidad;
    public $precio;

    function __construct ($nombre,$cantidad,$precio){
        $this->nombre =$nombre;
        $this->cantidad=$cantidad;
        $this->precio=$precio;
    }

//Metodos getter y setter
    function set_nombre ($nombre){
        $this->nombre =$nombre;
    }

    function get_nombre(){
        return $this->nombre;
    }

    function set_cantidad($cantidad){
        $this->cantidad=$cantidad;
    }

     function get_cantidad(){
        return $this->cantidad;
    }
     function set_precio($precio){
        $this->precio=$precio;
    }

     function get_precio(){
        return $this->precio;
    }
}

?>