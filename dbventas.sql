categoria
	idcategoria int
	nombre varchar(45)

producto
	idProducto int(11)
	detalle varchar(26)
	inicioDate date
	finDate date
	area varchar(28)
	cantidad int
	categoria int

proveedor
	idproveedor int(11)
 	nombre varchar(28)
 	apellidos varchar(28)
 	idProducto int

 cliente
 	dni int(11)
 	nombre varchar(28)
 	apellidos varchar(28)
 	direccion varchar(28)
 	FechaNacimiento varchar(28)
 	descripcionVenta(200)

User
	password varchar(200)
	iduser int(11)
	username varchar(40)

venta
	idDocVenta int(11)
	codCliente int(11)
	tipoServicio varchar(28)
	DireccionVenta varchar(28)
	codRuc int(11)
	igv decimal(8,2)
	descripcionVenta varchar(200)

detaleVenta
	iddetalle_venta int,
	ventaid int
	productoid int
	cantidad int

inventary
	idinventar int(11)
	especificaciones varchar(200)
	fecha datetime
	descripcionVenta varchar(200)












