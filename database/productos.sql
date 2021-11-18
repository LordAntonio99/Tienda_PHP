create database campeones;
use campeones;

create table productos (
    id          int             auto_increment primary key,
    nombre      varchar(30)     not null,
    descripcion text            not null,
    precio      int             not null,
    tipo        enum('TOP', 'MID', 'SUPP', 'ADC', 'JGL') not null,
    imagen      varchar(30)     not null
);

insert into productos (nombre, descripcion, precio, tipo, imagen)
values
('Aatrox', 'Uno de los antiguos darkin, Aatrox fue una vez un maestro de las espadas sin igual que se deleitó en el sangriento caos del campo de batalla. Atrapado dentro de su propia espada por la magia de sus enemigos, esperó miles de años a encontrar un anfitrión adecuado para esgrimirlo.', '6500', 'TOP', './images/aatrox.jpg'),
('Ahri', 'Ahri es una vastaya conectada de forma innata al poder latente de Runaterra, y es capaz de convertir la magia en orbes de energía pura. Le gusta jugar con su presa, manipulando sus emociones antes de devorar su esencia de vida.', '3150', 'MID', './images/ahri.jpg'),
('Warwick', 'Warwick es un monstruo que acecha en los oscuros callejones de Zaun. Transformado por atroces experimentos, su cuerpo está fusionado con un complejo sistema de cámaras y bombas, una maquinaria que llena sus venas de furia alquímica.', '450', 'JGL', './images/warwick.jpg'),
('Shaco', 'Shaco fue fabricado hace mucho tiempo para entretener a un príncipe solitario, pero ahora la marioneta encantada se regocija en la muerte y el caos.', '3150', 'JGL', './images/shaco.jpg'),
('Thresh', 'Thresh, un ser sádico y astuto, es un ambicioso y trastornado espíritu de las Islas de la Sombra. Otrora guardián de innumerables secretos arcanos, acabó sucumbiendo a un poder por encima de la vida y la muerte.', '4800', 'SUPP', './images/thresh.jpg');

create table pedidos (
    idpedido        int         auto_increment primary key,
    correocliente   varchar(30) not null,
    fecha           datetime    not null
);

create table detallepedidos (
    idpedido        int,
    nombre          varchar(30)     not null,
    precio          int             not null,
    cantidad        int             not null,
    CONSTRAINT FK_IdPedido FOREIGN KEY (idpedido) REFERENCES pedidos(idpedido)
)