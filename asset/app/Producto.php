<?php 


class Producto
{
	private $id;
	private $nombre;
	private $imagen;
	private $precio;
	private $stock;
	
	
	function __construct($nombre=false,$imagen=false,$precio=false,$stock=false)
	{
		$this->nombre = $nombre;
		$this->imagen = $imagen;
		$this->precio = $precio;
		$this->stock = $stock;
		$this->datos=array();
		$this->cn = new mysqli('localhost', 'root', '', 'dv_ventas');		
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
    public function getImagen()
    {
        return $this->imagen;
    }
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
        return $this;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
        return $this;
    }
    public function getStock()
    {
        return $this->stock;
    }
    public function setStock($stock)
    {
        $this->stock = $stock;
        return $this;
    }

    /*METODOS PARA LISTAR*/
    public function Listar()
    {
    	$consulta = "SELECT * FROM product";

		$resultado = $this->cn->query($consulta);

		while ($fila = mysqli_fetch_object($resultado)) {
			$this->datos[] =$fila;
		}

		return $this->datos;
    }






















}