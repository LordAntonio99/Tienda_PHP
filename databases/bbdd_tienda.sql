create database tienda;
use tienda;

create table Productos (
    id_producto     int,
    nom_prod        varchar(30) not null,
    descripcion     varchar(500) not null,
    precio_unidad   decimal(5,2) not null,
    image_name		varchar(30) not null,
    primary key (id_producto)
);

insert into Productos (id_producto, nom_prod, descripcion, precio_unidad, image_name)
values
(1, "Iphone 8 - 128GB","
The iPhone 8 features a 4.7-inch display with a resolution of 1334 by 750 with 326 pixels per inch and a 1400:1 contrast ratio, while the iPhone 8 Plus features a 5.5-inch display with a 1920 by 1080 resolution, 401 pixels per inch, and a 1300:1 contrast ratio.
", "799,99", "iphone8.png"),
(2, "Iphone X - 128GB", "
The iPhone X featured the first new iPhone design Apple has introduced since the iPhone 6 and 6 Plus launched in 2014 with new screen sizes.
","899,99", "iphonex.png"),
(3, "Iphone 6 Plus - 128GB","
The iPhone 6 Plus breaks a lot of the rules and defies a lot of the logic that Apple has stuck to for a number of years. It's a copycat device, it chases a market that the company did not create for itself, it introduces fragmentation in a previously restrained product lineup, and it doesn't immediately give you the sense that you need to own one. In short, it's the most un-Apple-like Apple product we've seen in a very, very long time.
", "699,99", "iphone6plus.png");

create table Usuarios (
    id_usuario      int not null AUTO_INCREMENT,
    nombre_usuario  varchar(8)  not null,
    password        varchar(12) not null,
    primary key (id_usuario)
);

insert into Usuarios (nombre_usuario, password)
values
("admin", "123"),
("antonio", "123");

create table Pedidos (
    id_pedido int not null,
    id_usuario int not null,
    total decimal(10,2) not null,
    CONSTRAINT FK_Pedidos foreign key (id_usuario) references Usuarios(id_usuario)
);

insert into Pedidos (id_pedido, id_usuario, total)
values
(1, 2, "699,99");