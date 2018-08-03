<?php 

class Brand
{
	private $id;
	private $nombre;

	function __construct($nombre=false)
	{
		$this->nombre=$nombre;
		$this->datos=array();
		$this->cn= new mysqli('localhost','root','','dv_ventas') or die('error al conectar');
		
	}

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }
    /*METODO PARA MANTENEMIENTO BRAND*/

    public function Listar()
    {
    	$consulta= "SELECT * FROM brand";
    	$result = $this->cn->query($consulta);

    	while ($fila = mysqli_fetch_object($result)) {
    		$this->datos[]=$fila;
    	}
    	return $this->datos;
    }


}