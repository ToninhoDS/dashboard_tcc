-

-- show databases;
-- SELECT @@autocommit;

-- drop database db_tcc_estacionamento;
-- create database db_tcc_estacionamento;
-- use db_tcc_estacionamento;


create table if not exists tb_uf(
cd_uf int not null auto_increment,
sg_uf char(10),
constraint pk_uf
primary key(cd_uf))
engine=InnoDB;


create table if not exists tb_cidade(
cd_cidade int not null auto_increment,
nm_cidade varchar(45),
cd_uf int,
constraint 
primary key(cd_cidade),
foreign key(cd_uf)
references tb_uf(cd_uf)
 ON DELETE CASCADE 
 ON UPDATE CASCADE)
engine=InnoDB;


create table if not exists tb_bairro(
cd_bairro int not null auto_increment,
nm_bairro varchar(45),
cd_cidade int,
constraint pk_bairro
primary key (cd_bairro),
foreign key(cd_cidade)
references tb_cidade(cd_cidade)
 ON DELETE CASCADE 
 ON UPDATE CASCADE)
engine=InnoDB;


create table if not exists tb_login(
cd_login int not null auto_increment,
cd_email_login varchar(45),
cd_senha_login varchar (20),
constraint pk_login
primary key(cd_login))
engine=InnoDB;

create table if not exists tb_cliente(
cd_cliente int not null auto_increment,
cd_email_cliente varchar(45),
cd_senha_cliente varchar (20),
cd_login int,
nm_cliente varchar (75),
constraint pk_cliente
primary key(cd_cliente),
foreign key(cd_login)
references tb_login(cd_login)
 ON DELETE CASCADE 
 ON UPDATE CASCADE)
engine=InnoDB;


create table if not exists tb_telefone(
cd_telefone int not null auto_increment,
cd_numero1 varchar (20),
cd_numero2 varchar (20),
cd_cliente int,
constraint pk_telefone
primary key(cd_telefone),
foreign key(cd_cliente)
references tb_cliente(cd_cliente)
 ON DELETE CASCADE 
 ON UPDATE CASCADE)
engine=InnoDB;


create table if not exists tb_pessoa_juridica(
cd_pessoa_juridica int not null auto_increment,
cd_cnpj varchar(20),
cd_bairro int,
cd_cliente int,
constraint pk_pessoa_juridica
primary key(cd_pessoa_juridica),
foreign key(cd_cliente)
references tb_cliente(cd_cliente)
 ON DELETE CASCADE 
 ON UPDATE CASCADE)
engine=InnoDB;


create table if not exists tb_pessoa_fisica(
cd_pessoa_fisica int not null auto_increment,
cd_cpf varchar (20),
cd_cliente int,
cd_bairro int, 
constraint pk_pessoa_fisica
primary key(cd_pessoa_fisica),
foreign key(cd_bairro)
references tb_bairro(cd_bairro)
 ON DELETE CASCADE 
 ON UPDATE CASCADE)
engine=InnoDB;

create table if not exists tb_marca(
cd_marca int not null auto_increment,
nm_marca varchar (45),
constraint pk_marca
primary key(cd_marca))
engine=InnoDB;


create table if not exists tb_cor(
cd_cor int not null auto_increment,
nm_cor varchar (45),
constraint pk_cor
primary key(cd_cor))
engine=InnoDB;

create table if not exists tb_modelo(
cd_modelo int not null auto_increment,
nm_modelo varchar (45),
cd_marca int,
constraint pk_modelo
primary key(cd_modelo),
foreign key(cd_marca)
references tb_marca(cd_marca)
 ON DELETE CASCADE 
 ON UPDATE CASCADE)
engine=InnoDB;


create table if not exists tb_veiculo(
cd_veiculo int not null auto_increment,
cd_placa varchar (20),
cd_cliente int,
cd_cor int,
cd_modelo int,
constraint pk_veiculo
primary key(cd_veiculo),
constraint fk_cliente
foreign key(cd_cliente)
references tb_cliente(cd_cliente)
 ON DELETE CASCADE 
 ON UPDATE CASCADE,
constraint fk_modelo
foreign key(cd_modelo)
references tb_modelo(cd_modelo)
 ON DELETE CASCADE 
 ON UPDATE CASCADE,
constraint fk_cor
foreign key(cd_cor)
references tb_cor(cd_cor)
 ON DELETE CASCADE 
 ON UPDATE CASCADE)
engine=InnoDB;

-- tirar do banco de dados
create table if not exists tb_horario(
cd_horario int not null auto_increment,
hr_entrada time,
hr_saida time,
constraint pk_horario
primary key (cd_horario))
engine=InnoDB;

create table if not exists tb_patio(
cd_patio int not null auto_increment,
ds_patio varchar (25),
constraint pk_patio
primary key(cd_patio))
engine=InnoDB;
-- fim 

create table if not exists tb_estacionamento(
cd_estacionamento int not null auto_increment,
nm_estacionamento varchar(100),
dt_entrada date,
dt_saida date,
cd_veiculo int,
cd_horario int,
constraint pk_estacionamento
primary key(cd_estacionamento),
foreign key (cd_horario)
references tb_horario(cd_horario)
 ON DELETE CASCADE 
 ON UPDATE CASCADE,
foreign key(cd_veiculo)
references tb_veiculo(cd_veiculo)
 ON DELETE CASCADE 
 ON UPDATE CASCADE)
engine=InnoDB; 


create table if not exists tb_vaga(
cd_vaga int not null auto_increment,
cd_numero int ,
cd_patio int,
ds_status varchar(20),
cd_estacionamento int,
constraint pk_vaga
primary key(cd_vaga),
constraint fk_patio
foreign key(cd_patio)
references tb_patio(cd_patio)
 ON DELETE CASCADE 
 ON UPDATE CASCADE,
constraint fk_estacionamento
foreign key(cd_estacionamento)
references tb_estacionamento(cd_estacionamento)
 ON DELETE CASCADE 
 ON UPDATE CASCADE)
engine=InnoDB;

-- tabelas novas 22/04/2023 -------
create table if not exists tb_uf_empresa(
cd_uf int not null auto_increment,
sg_uf char(10),
constraint pk_uf
primary key(cd_uf))
engine=InnoDB;

create table if not exists tb_cidade_empresa(
cd_cidade int not null auto_increment,
nm_cidade varchar(45),
cd_uf int,
constraint pk_cidade
primary key(cd_cidade),
foreign key(cd_uf)
references tb_uf_empresa(cd_uf)
 ON DELETE CASCADE 
 ON UPDATE CASCADE)
engine=InnoDB;

create table if not exists tb_bairro_empresa(
cd_bairro int not null auto_increment,
nm_bairro varchar(45),
cd_cidade int,
constraint pk_bairro
primary key (cd_bairro),
foreign key(cd_cidade)
references tb_cidade_empresa(cd_cidade)
 ON DELETE CASCADE 
 ON UPDATE CASCADE)
engine=InnoDB;

create table if not exists tb_relatorio_atividade(
cd_relatorio_atividade int not null auto_increment,
nm_nome_acao varchar(20),
nm_origem varchar (50),
nm_funcionario varchar (100),
cd_funcionario int,
dt_hora time,
dt_data date,
img_icon varchar (150),
constraint pk_relatorio_atividade
primary key (cd_relatorio_atividade)
) engine=InnoDB auto_increment=0;

create table if not exists tb_relatorio_atividade_lixeira(
cd_relatorio_atividade_lixeira int not null auto_increment,
nm_nome_acao varchar(20),
nm_origem varchar (50),
nm_funcionario varchar (100),
cd_funcionario int,
dt_hora time,
dt_data date,
img_icon varchar (150),
constraint pk_relatorio_atividade_lixeira
primary key (cd_relatorio_atividade_lixeira)
) engine=InnoDB auto_increment=0;




create table if not exists tb_gerente(
cd_gerente int not null auto_increment,
nm_gerente varchar(45),
nm_cargo varchar (60),
nm_descricao varchar (500),
nm_reviews varchar (500),
nm_idade varchar (10),
nm_email varchar (75),
nm_senha varchar (75),
cd_telefone varchar (20),
cd_img varchar (150),
cd_bairro int,
constraint pk_gerente
primary key(cd_gerente),
foreign key(cd_bairro)
references tb_bairro_empresa(cd_bairro)
 ON DELETE CASCADE 
 ON UPDATE CASCADE)
engine=InnoDB;


drop table tb_funcionario;
create table if not exists tb_funcionario(
cd_funcionario int not null auto_increment,
nm_nome varchar (150),
nm_cargo varchar (150),
nm_formacao varchar (100) null,
dt_emissao_contratual date,
nm_sexo varchar (20),
nm_maternidade varchar(150) null,
nm_estado_civil varchar(50) null,
cd_data_nascimento varchar (20),
cd_idade varchar (5) null,
cd_cpf varchar (20),
cd_rg varchar (20) null,
cd_credencial varchar (30), -- usuario podera usar credencial para logar junto com a senha a baixo
cd_email_funcionario varchar(45),
cd_senha_funcionario varchar (20),
cd_telefone varchar (20),
img_imagem varchar (150),
cd_bairro int,
cd_gerente int,
constraint pk_funcionario
primary key(cd_funcionario),
foreign key(cd_bairro)
references tb_bairro_empresa(cd_bairro),
foreign key(cd_gerente)
references tb_gerente(cd_gerente))
engine=InnoDB;

create table if not exists tb_status_vagas(
cd_status_vagas int not null auto_increment,
cd_numero_vaga double,
nm_nome varchar (50) default 'Cliente',
img_icon varchar (50) check (img_icon in ('Carro','Moto','Bicicleta','Patins','Outros','Livre')),
dt_entrada time,
sg_placa varchar (20),
cd_cpf varchar (20),
nm_status varchar(20) check (nm_status in('Ocupado','Livre','Reserva')),
constraint pk_status_vagas
primary key (cd_status_vagas)
) engine=InnoDB auto_increment=0;


create table if not exists tb_bike_outros(
cd_bike_outros int not null auto_increment,
cd_transporte varchar (50),
cd_detalhes varchar (150),
cd_nome varchar (100),
cd_observacao varchar (150),
constraint pk_bike_outros
primary key(cd_bike_outros))
engine=InnoDB;

insert into tb_bike_outros values
('1','bike', 'cor rosa', 'ALAN',NULL),
('2','patins', 'esta sem roda','CARLOS',NULL),
('3','chinelo', 'com prego','LORENA',NULL),
('4','pop', 'pneu careca','MAIKEN','Roubada');


insert into tb_uf_empresa values
('1','MT'),
('2','DF'),
('3','SE'),
('4','AM'),
('5','SP'),
('6','AC');

insert into tb_cidade_empresa values
('1', 'Rondonópolis', '1'),
('2', 'Brasília', '2'),
('3', 'Aracaju', '3'),
('4', 'Manaus', '4'),
('5', 'Sertãozinho', '5'),
('6', 'Rio Branco', '6');


insert into tb_bairro_empresa values
('1', 'Jardim Brasília', '1'),
('2', 'Riacho Fundo II', '2'),
('3', 'Aeroporto', '3'),
('4', 'Novo Aleixo', '4'),
('5', 'Conjunto Habitacional Antônio Pedro Ortolan', '5'),
('6', 'Loteamento Joafra', '6');

insert into tb_gerente value
('1','Denisse','Gerente','Atuante no mercado','Compromisso'
,'30','Denissegerente@vagaspark.com','123456','13981603708','https://assets.pokemon.com/assets/cms2/img/pokedex/full/064.png','1'),
('2','Luciano','Gerente','Atuante no mercado','Compromisso'
,'32','Denissegerente@vagaspark.com','123456','13981603708','https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png','2'),
('3','Anderson','Gerente','Atuante no mercado','Compromisso'
,'33','Denissegerente@vagaspark.com','123456','13981603708','https://assets.pokemon.com/assets/cms2/img/pokedex/full/054.png','3');

insert into tb_funcionario value
('1','Antonio carlos','Tec. Manutencao Informatica Junior','Ensino Completo','2023-04-22','Masculino',
'Elisete dos Santos','Casado','1988-03-05','30','12345678901','996665558','30039','Antoniogerente@vagaspark.com','123456','13981603708','https://assets.pokemon.com/assets/cms2/img/pokedex/full/064.png','1','1'),

('2','Carlos Fafa','Tec. Manutencao Informatica Junior','Ensino Completo','2023-04-22','Masculino',
'Elisete dos Santos','Casado','1988-03-05','30','12345678901','996665558','30039','Antoniogerente@vagaspark.com','123456','13981603708','https://assets.pokemon.com/assets/cms2/img/pokedex/full/064.png','1','1'),
('3','Renato','Tec. Manutencao Informatica Junior','Ensino Completo','2023-04-22','Masculino',
'Elisete dos Santos','Casado','1988-03-05','30','12345678901','996665558','30039','Antoniogerente@vagaspark.com','123456','13981603708','https://assets.pokemon.com/assets/cms2/img/pokedex/full/064.png'
,'1','2'),
('4','Douglas','Tec. Manutencao Informatica Junior','Ensino Completo','2023-04-22','Masculino',
'Elisete dos Santos','Casado','1988-03-05','30','12345678901','996665558','30039','Antoniogerente@vagaspark.com','123456','13981603708','https://assets.pokemon.com/assets/cms2/img/pokedex/full/064.png'
,'1','2'),
('5','Julia','Tec. Manutencao Informatica Junior','Ensino Completo','2023-04-22','Masculino',
'Elisete dos Santos','Casado','1988-03-05','30','12345678901','996665558','30039','Antoniogerente@vagaspark.com','123456','13981603708','https://assets.pokemon.com/assets/cms2/img/pokedex/full/064.png'
,'1','2'),
('6','RAfael','Tec. Manutencao Informatica Junior','Ensino Completo','2023-04-22','Masculino',
'Elisete dos Santos','Casado','1988-03-05','30','12345678901','996665558','30039','Antoniogerente@vagaspark.com','123456','13981603708','https://assets.pokemon.com/assets/cms2/img/pokedex/full/064.png'
,'1','3');

insert into tb_status_vagas  (cd_status_vagas, cd_numero_vaga, nm_nome, img_icon, dt_entrada, sg_placa, cd_cpf, nm_status) values
('1','1','Antonio','Carro','19:03','ANS-3908','136.230.852-86','Ocupado'),
('2','2','Enzxo Farinhado','Moto','19:03','NEJ-8313','558.882.025-84','Ocupado'),
('3','3','kaike','Patins','18:03','AOM-2970','067.846.794-31','Livre'),
('4','4','Carlos','Outros','14:03','KPF-4778','333.564.700-94','Reserva'), 
('5','5','Tonico','Bicicleta','1:03','NEW-3182','743.721.422-93','Reserva'),
('6','6','Rayra hasuhsuh','Outros','1:03','HZO-2490','006.248.620-97','Ocupado'), 
('7','7','','Livre','','MUV-1609','399.443.846-23','Livre'),
('8','8','Antonio','Carro','19:03','MOU-6604','559.186.550-00','Ocupado'), 
('9','9','Enzxo Farinhado','Moto','19:03','MQY-3954','187.233.440-75','ocupado'), 
('10','10','kaike','Patins','18:03','KET-8904','448.196.880-06','Livre'), 
('11','11','Carlos','Outros','14:03','DNO-2637','991.851.233-40','Reserva'),
('12','12','Tonico','Bicicleta','1:03','HPI-7589','300.831.410-49','Reserva'), 
('13','13','Rayra hasuhsuh','Outros','1:03','MZX-0024','567.596.008-27','ocupado'),
('14','14','Antonio','Carro','19:03','HZM-8017','031.574.345-00','Ocupado'),
('15','15','Enzxo Farinhado','Moto','19:03','JTC-3907','248.969.750-14','ocupado'),
('16','16','kaike','Patins','18:03','NAE-7471','859.364.540-29','Livre'), 
('17','17','Carlos','Outros','14:03','CON-1661','357.235.070-01','Reserva'), 
('18','18','Tonico','Bicicleta','1:03','IEW-8686','226.615.300-53','Reserva'), 
('19','19','Rayra hasuhsuh','Outros','1:03','ENB-0247','049.161.186-26','ocupado'),
('20','20','','Livre','','HZZ-4802','652.159.799-01','Livre');

-- fim @@@@@@@@@@@@@@@@@@@@

insert into tb_login values
('1','julio-pereira88@simoesmendonca.adv.br', 'HA0bRoSHGs'),
('2','francisco_bernardes@petrobrais.com.br', 'tpRjDeDiSI'),
('3','rebeca_silveira@wwlimpador.com.br', '66kt9COrDu'),
('4','enrico_martins@live.com.pt', 'EMOXEdB81Y'),
('5','laviniamarciarocha@pisbrasil.com.br', 'eBkzc3zruE'),
('6','eliane_jennifer_dacruz@damha.com.br', 'XIXaXAdkgx'),
('7','elisa_malu_rodrigues@moyageorges.com.br', 'B9ifWchxsJ'),
('8','henriqueerickmelo@wredenborg.se', 'dw4d4uicW3'),
('9','giovanni_darosa@kof.com.mx', 'hGKoIJAPcI'),
('10','rebeca_agatha_viana@tanby.com.br', '7wqU0tHtEu'),
('11','raimunda-aparicio70@qmagico.com.br', 'fL58W9J7Yi'),
('12','mirellavanessadacosta@live.se', 'bLzkcIiz8l'),
('13','noahjuliocortereal@santander.com.br', 'tk5cQaf89N'),
('14','larissa-campos96@genesyslab.com', 'AdsBFGGGT2'),
('15','marcio.henry.ribeiro@oi15.com.br', 'TOOaG6ZrGa'),
('16','ruan_dasilva@stembalagens.com.br', 'Cz3Jt7lWTq'),
('17','vanessa-lima80@2014fwcao.com', 'j4G4p7PckW'),
('18','lavinia.andreia.almada@yahoo.com.br', 'r2BiF1Im9D'),
('19','leandro_emanuel_peixoto@piemme.com.br', 'ZXmAHxBKF3'),
('20','emanuelly_sara_barbosa@tanet.com.br', 'hYYjbWOOcf');
 
 
 insert into tb_cliente values
('1', 'julio-pereira88@simoesmendonca.adv.br', 'HA0bRoSHGs', '1', 'Julio Thiago Pereira'),
('2', 'francisco_bernardes@petrobrais.com.br', 'tpRjDeDiSI', '2',  'Francisco Caleb Vitor Bernardes'),
('3', 'rebeca_silveira@wwlimpador.com.br', '66kt9COrDu', '3',  'Rebeca Sophie Silveira'),
('4', 'enrico_martins@live.com.pt', 'EMOXEdB81Y', '4',  'Enrico Bento Tiago Martins'),
('5', 'laviniamarciarocha@pisbrasil.com.br', 'eBkzc3zruE', '5',  'Lavínia Márcia Rocha'),
('6', 'eliane_jennifer_dacruz@damha.com.br', 'XIXaXAdkgx', '6',  'Eliane Jennifer da Cruz'),
('7', 'elisa_malu_rodrigues@moyageorges.com.br', 'B9ifWchxsJ', '7',  'Elisa Malu Nair Rodrigues'),
('8', 'henriqueerickmelo@wredenborg.se', 'dw4d4uicW3', '8',  'Henrique Erick Melo'),
('9', 'giovanni_darosa@kof.com.mx', 'hGKoIJAPcI', '9',  'Giovanni Antonio Luís da Rosa'),
('10', 'rebeca_agatha_viana@tanby.com.br', '7wqU0tHtEu', '10',  'Rebeca Agatha Viana'),
('11', 'raimunda-aparicio70@qmagico.com.br', 'fL58W9J7Yi', '11',  'Raimunda Analu Aparício'),
('12', 'mirellavanessadacosta@live.se', 'bLzkcIiz8l', '12',  'Mirella Vanessa Alessandra da Costa'),
('13', 'noahjuliocortereal@santander.com.br', 'tk5cQaf89N', '13',  'Noah Julio Thomas Corte Real'),
('14', 'larissa-campos96@genesyslab.com', 'AdsBFGGGT2', '14',  'Larissa Marlene Josefa Campos'),
('15', 'marcio.henry.ribeiro@oi15.com.br', 'TOOaG6ZrGa', '15',  'Márcio Henry Ruan Ribeiro'),
('16', 'ruan_dasilva@stembalagens.com.br', 'Cz3Jt7lWTq', '16',  'Ruan Murilo da Silva"'),
('17', 'vanessa-lima80@2014fwcao.com', 'j4G4p7PckW', '17',  'Vanessa Luna Lima'),
('18', 'lavinia.andreia.almada@yahoo.com.br', 'r2BiF1Im9D', '18',  'Lavínia Andreia Almada'),
('19', 'leandro_emanuel_peixoto@piemme.com.br', 'ZXmAHxBKF3', '19',  'Leandro Emanuel Cláudio Peixoto'),
('20', 'emanuelly_sara_barbosa@tanet.com.br', 'hYYjbWOOcf', '20',  'Emanuelly Sara Tânia Barbosa');


-- 3

insert into tb_uf values
('1','MT'),
('2','DF'),
('3','SE'),
('4','AM'),
('5','SP'),
('6','AC'),
('7','PI'),
('8','MS'),
('9','PA'),
('10','DF'),
('11','PE'),
('12','PR'),
('13','PB'),
('14','RO'),
('15','RR'),
('16','PA'),
('17','MG'),
('18','PR'),
('19','SP'),
('20','SP');


-- 4

insert into tb_cidade values
('1', 'Rondonópolis', '1'),
('2', 'Brasília', '2'),
('3', 'Aracaju', '3'),
('4', 'Manaus', '4'),
('5', 'Sertãozinho', '5'),
('6', 'Rio Branco', '6'),
('7', 'Parnaíba', '7'),
('8', 'Campo Grande', '8'),
('9', 'Belém', '9'),
('10', 'Brasília', '10'),
('11', 'Jaboatão dos Guararapes', '11'),
('12', 'Ponta Grossa', '12'),
('13', 'João Pessoa', '13'),
('14', 'Cacoal', '14'),
('15', 'Boa Vista', '15'),
('16', 'Belém', '16'),
('17', 'Barbacena', '17'),
('18', 'Curitiba', '18'),
('19', 'Araraquara', '19'),
('20', 'Guarulhos', '20');

-- 5

insert into tb_bairro values
('1', 'Jardim Brasília', '1'),
('2', 'Riacho Fundo II', '2'),
('3', 'Aeroporto', '3'),
('4', 'Novo Aleixo', '4'),
('5', 'Conjunto Habitacional Antônio Pedro Ortolan', '5'),
('6', 'Loteamento Joafra', '6'),
('7', 'João XXIII', '7'),
('8', 'Jardim São Conrado', '8'),
('9', 'Tapanã (Icoaraci)', '9'),
('10', 'Setor Sul (Gama)', '10'),
('11', 'Santo Aleixo', '11'),
('12', 'Colônia Dona Luíza', '12'),
('13', 'Mandacaru', '13'),
('14', 'Village do Sol', '14'),
('15', 'Jardim Floresta', '15'),
('16', 'Jurunas', '16'),
('17', 'Nossa Senhora Aparecida', '17'),
('18', 'Alto da Rua XV', '18'),
('19', 'Vila Xavier (Vila Xavier)', '19'),
('20', 'Cidade Seródio', '20');

 -- 6

insert into tb_cor values
('1','Branco'),
('2','Cinza'),
('3','Preto'),
('4','Prata'),
('5','Azul'),
('6','Vermelho'),
('7','Marrom/Bege'),
('8','Verde'),
('9','Amarelo'),
('10','Minions'),
('11','Branco'),
('12','Cinza'),
('13','Preto'),
('14','Prata'),
('15','Azul'),
('16','Vermelho'),
('17','Marrom/Bege'),
('18','Verde'),
('19','Amarelo'),
('20','Outros');

 
-- 7

insert into tb_marca values
('1','Fiat'),
('2','Volkswagen'),
('3','Bentley'),
('4','Hyundai'),
('5','Fiat'),
('6','Volkswagen'),
('7','Bentley'),
('8','Hyundai'),
('9','Fiat'),
('10','Volkswagen'),
('11','Bentley'),
('12','Hyundai'),
('13','Fiat'),
('14','Volkswagen'),
('15','Bentley'),
('16','Hyundai'),
('17','Fiat'),
('18','Volkswagen'),
('19','Bentley'),
('20','Chevrolet');


-- 8

insert into tb_modelo values
('1','Volkswagen Gol','1'),
('2','Fiat Strada','2'),
('3','Chevrolet Onix','3'),
('4','Hyundai HB20','4'),
('5','Volkswagen Gol','5'),
('6','Fiat Strada','6'),
('7','Chevrolet Onix','7'),
('8','Hyundai HB20','8'),
('9','Volkswagen Gol','9'),
('10','Fiat Strada','10'),
('11','Chevrolet Onix','11'),
('12','Hyundai HB20','12'),
('13','Volkswagen Gol','13'),
('14','Fiat Strada','14'),
('15','Chevrolet Onix','15'),
('16','Hyundai HB20','16'),
('17','Volkswagen Gol','17'),
('18','Fiat Strada','18'),
('19','Chevrolet Onix','19'),
('20','Chevrolet Onix Plus','20');

-- 9

insert into tb_horario values
('1','13:30','15:30'),
('2','12:00','13:00'),
('3','12:00','13:40'),
('4','12:00','12:30'),
('5','12:00','14:30'),
('6','11:00','12:00'),
('7','11:30','13:40'),
('8','12:30','15:30'),
('9','09:00','13:00'),
('10','11:40','12:00'),
('11','12:50','16:00'),
('12','13:30','20:00'),
('13','13:00','21:00'),
('14','08:00','18:00'),
('15','18:00','21:00'),
('16','18:30','19:00'),
('17','18:40','22:00'),
('18','18:00','23:00'),
('19','19:00','23:00'),
('20','19:30','22:00');


-- 10

insert into tb_patio values
('1','1'),
('2','2');


-- 11

insert into tb_veiculo values
('1','ANS-3908','1','1','1'),
('2','NEJ-8313','2','2','2'),
('3','AOM-2970','3','3','3'),
('4','KPF-4778','4','4','4'),
('5','NEW-3182','5','5','5'),
('6','HZO-2490','6','6','6'),
('7','MUV-1609','7','7','7'),
('8','MOU-6604','8','8','8'),
('9','MQY-3954','9','9','9'),
('10','KET-8904','10','10','10'),
('11','DNO-2637','11','2','11'),
('12','HPI-7589','12','5','12'),
('13','MZX-0024','13','9','13'),
('14','HZM-8017','14','7','14'),
('15','JTC-3907','15','8','15'),
('16','NAE-7471','16','6','16'),
('17','CON-1661','17','7','17'),
('18','IEW-8686','18','8','18'),
('19','ENB-0247','19','9','19'),
('20','HZZ-4802','20','2','20');


-- 12
insert into tb_estacionamento values
('1','Tonho Estacionamento','20220510','20220511','1','1'),
('2','Tonho Estacionamento','20220610','20220612','2','2'),
('3','Enzo Park','20220615','20220621','3','3'),
('4','Enzo Park','20220712','20220713','4','4'),
('5','Tonho Estacionamento','20220610','20220622','5','5'),
('6','Enzo Park','20220720','20220721','6','6'),
('7','Tonho Estacionamento','20220510','20220511','7','7'),
('8','Enzo Park','20220701','20220703','8','8'),
('9','Tonho Estacionamento','20220530','20220531','9','9'),
('10','Tonho Estacionamento','20220801','20220802','10','10'),
('11','Enzo Park','20220622','20220623','11','11'),
('12','Enzo Park','20220920','20220921','12','12'),
('13','Tonho Estacionamento','20220510','20220521','13','13'),
('14','Tonho Estacionamento','20220910','20220911','14','14'),
('15','Enzo Park','20220625','20220626','15','15'),
('16','Enzo Park','20220721','20220726','16','16'),
('17','Enzo Park','20220801','20220802','17','17'),
('18','Enzo Park','20220620','20220629','18','18'),
('19','Enzo Park','20220723','20220824','19','19'),
('20','Enzo Park','20220810','20220815','20','20');


-- 13

insert into tb_vaga values
('1','11','1','Em uso','1'),
('2','11','2', null,'2'),
('3','11','2','Em uso','3'),
('4','11','2','Em uso','4'),
('5','11','1', null,'5'),
('6','11','1','Em uso','6'),
('7','11','1','Em uso','7'),
('8','11','2','Em uso','8'),
('9','11','2','Em uso','9'),
('10','11','1', null,'10'),
('11','11','1','Em uso','11'),
('12','11','1','Em uso','12'),
('13','11','2', null,'13'),
('14','11','2','Em uso','14'),
('15','11','2','Em uso','15'),
('16','11','1','Em uso','16'),
('17','11','1', null,'17'),
('18','11','1','Em uso','18'),
('19','11','2','Em uso','19'),
('20','11','2','Em uso','20');


-- 14

insert into tb_pessoa_fisica values
('1', '136.230.852-86', '1', '1'),
('2', '558.882.025-84', '2', '2'),
('3', '067.846.794-31', '3', '3'),
('4', '333.564.700-94', '4', '4'),
('5','743.721.422-93', '5', '5'),
('6', '006.248.620-97', '6', '6'),
('7','399.443.846-23', '7', '7'),
('8', '559.186.550-00', '8', '8'),
('9', '187.233.440-75', '9', '9'),
('10', '448.196.880-06', '10', '10'),
('11','991.851.233-40', '11', '11'),
('12', '300.831.410-49', '12', '12'),
('13','567.596.008-27', '13', '13'),
('14','031.574.345-00', '14', '14'),
('15','248.969.750-14', '15', '15'),
('16', '859.364.540-29', '16', '16'),
('17', '357.235.070-01', '17', '17'),
('18', '226.615.300-53', '18', '18'),
('19','049.161.186-26', '19', '19'),
('20','652.159.799-01', '20', '20');

-- 15

insert into tb_pessoa_juridica values
('1', null,'1', '1'),
('2', null, '2', '2'),
('3', null, '3', '3'),
('4', '42.511.777/0001-60', '4', '4'),
('5', null, '5', '5'),
('6', '59.067.078/0001-76', '6', '6'),
('7', null, '7', '7'),
('8', '43.861.452/0001-70', '8', '8'),
('9', '37.962.613/0001-10', '9', '9'),
('10', '65.254.503/0001-39', '10', '10'),
('11', null, '11', '11'),
('12', '31.492.526/0001-60', '12', '12'),
('13', null, '13', '13'),
('14', null, '14', '14'),
('15', null, '15', '15'),
('16', '72.181.135/0001-01', '16', '16'),
('17', '36.062.069/0001-97', '17', '17'),
('18', '01.695.631/0001-35', '18', '18'),
('19', null, '19', '19'),
('20', null, '20', '20');

-- 16

insert into tb_telefone values
('1','(66) 99163-1531', null,'1'),
('2','(61) 98153-5596','(61) 3763-1803','2'),
('3','(79) 98421-1175','(79) 2914-8488','3'),
('4','(92) 98271-7282', null,'4'),
('5','(16) 99124-3887', null,'5'),
('6','(68) 99917-1591','(68) 2557-3140','6'),
('7','(86) 98133-6502', null,'7'),
('8','(67) 99200-4118', null,'8'),
('9','(91) 99787-5532', null,'9'),
('10','(61) 98421-5775','(61) 2905-4970','10'),
('11','(81) 98767-3939','(81) 2737-2601','11'),
('12','(42) 99649-3133', null,'12'),
('13','(83) 99772-7749', null,'13'),
('14','(69) 98671-7424','(69) 2809-1847','14'),
('15','(95) 98322-1696','(95) 2674-0425','15'),
('16','(91) 98458-0538','(91) 3919-0690','16'),
('17','(32) 98561-5622','(32) 3923-5321','17'),
('18','(41) 99549-8073', null,'18'),
('19','(16) 99195-9999', null,'19'),
('20','(11) 99214-9687', null,'20');



-- VIEWs -- 

-- VIEW 1 --
 create view vw_login_senha
as select tb_cliente.nm_cliente as Cliente,tb_login.cd_email_login as Email,tb_login.cd_senha_login as Senha 
from tb_cliente
join tb_login
on tb_cliente.cd_login = tb_login.cd_login;

select * from 
vw_login_senha
order by Cliente;
-- FIM --

-- VIEW 2 -- 
create view vw_informacao_cliente
 as select c.nm_cliente as 'Cliente', ci.nm_cidade as 'Nome da cidade', t.cd_numero1 as 'Número 1', t.cd_numero2 as 'Número 2'
 from tb_cliente as c
 join tb_pessoa_fisica as pf
 on pf.cd_cliente = c.cd_cliente
 join tb_pessoa_juridica as pj
 on pj.cd_cliente = c.cd_cliente
 join tb_bairro as b
 on b.cd_bairro = pf.cd_bairro and pj.cd_bairro
 join  tb_cidade as ci
 on ci.cd_cidade = b.cd_cidade
 join tb_telefone as t
 on t.cd_cliente = c.cd_cliente;
 
 select * from 
 vw_informacao_cliente
order by Cliente;
-- FIM --

-- VIEW 3 --
create view vw_informacao_carro_cliente 
as select c.nm_cliente as 'Cliente' , mo.nm_modelo as 'Modelo', e.nm_estacionamento as 'Nome do Estacionamento'
from tb_cliente as c
join tb_veiculo as v
on v.cd_cliente = c.cd_cliente
join tb_modelo as mo
on mo.cd_modelo = v.cd_veiculo
join tb_estacionamento as e
on e.cd_veiculo = v.cd_veiculo;

select * from 
vw_informacao_carro_cliente
order by Cliente;
-- FIM --

-- VIEW 4 --
create view vw_informacao_fluxo_cliente
as select c.nm_cliente as 'Cliente', hr.hr_entrada as 'Horário entrada', hr.hr_saida as 'Horário saída'
from tb_horario as hr
join tb_estacionamento as e
on e.cd_horario = hr.cd_horario
join tb_veiculo as v
on v.cd_veiculo = e.cd_veiculo
join tb_cliente as c
on c.cd_cliente = v.cd_cliente;

select * from 
vw_informacao_fluxo_cliente
order by Cliente;
-- FIM --

-- VIEW 5 --
create view vw_informacao_veiculo_cliente
as select c.nm_cliente as 'Cliente', mo.nm_modelo as 'Modelo', ma.nm_marca 'Marca', co.nm_cor as 'Cor do veiculo', v.cd_placa as'Placa do veiculo' 
from tb_cliente as c
join tb_veiculo as v
on v.cd_cliente = c.cd_cliente
join tb_modelo as mo
on mo.cd_modelo = v.cd_modelo
join tb_marca as ma
on ma.cd_marca = mo.cd_marca
join tb_cor as co
on v.cd_cor = co.cd_cor;

select * from 
vw_informacao_veiculo_cliente
order by Cliente;
-- FIM --

-- VIEW 6 --
create view vw_quantidade_cliente
as select count(nm_cliente) as 'Total Clientes', count(cd_cpf) as 'Pessoa Fisica', count(cd_cnpj) as 'Pessoa Jurídica'
from tb_cliente as c
join tb_pessoa_fisica as pf
on pf.cd_cliente =  c.cd_cliente
join tb_pessoa_juridica as pj
on pj.cd_cliente = c.cd_cliente;

select * from 
vw_quantidade_cliente;
-- FIM --

-- VIEW 7 --
create view vw_cliente_sul
as select nm_cliente as 'Cliente', sg_uf as 'Estado'
from tb_pessoa_fisica as pf
join tb_bairro as b
on pf.cd_bairro = b.cd_bairro
join tb_cidade as ci
on ci.cd_cidade = b.cd_cidade
join tb_uf as uf
on uf.cd_uf = ci.cd_uf
join tb_cliente as c
on c.cd_cliente = pf.cd_cliente;

select * from 
vw_cliente_sul
where Estado = 'PR'or Estado = 'SC' or Estado = 'RS' 
order by Estado;
-- FIM --

-- VIEW 8 --
create view vw_cliente_nordeste
as select nm_cliente as 'Cliente', sg_uf as 'Estado'
from tb_pessoa_fisica as pf
join tb_bairro as b
on pf.cd_bairro = b.cd_bairro
join tb_cidade as ci
on ci.cd_cidade = b.cd_cidade
join tb_uf as uf
on uf.cd_uf = ci.cd_uf
join tb_cliente as c
on c.cd_cliente = pf.cd_cliente;

select * from 
vw_cliente_nordeste
where Estado = 'MA' or Estado = 'BA'or Estado = 'AL' or Estado = 'SE' or Estado = 'PE'
or Estado = 'PI' or Estado = 'RN' or Estado = 'CE' or Estado = 'PB'
order by Estado;
-- FIM --

-- VIEW 9 --
create view vw_cliente_sudeste
as select nm_cliente as 'Cliente', sg_uf as 'Estado'
from tb_pessoa_juridica as pj
join tb_bairro as b
on pj.cd_bairro = b.cd_bairro
join tb_cidade as ci
on ci.cd_cidade = b.cd_cidade
join tb_uf as uf
on uf.cd_uf = ci.cd_uf
join tb_cliente as c
on c.cd_cliente = pj.cd_cliente;

select * from
vw_cliente_sudeste
where Estado = 'ES'or Estado = 'MG' or Estado = 'RJ' or Estado = 'SP'
order by Estado;
-- FIM --

-- VIEW 10 --
create view vw_cliente_centrooeste
as select nm_cliente as 'Cliente', sg_uf as 'Estado'
from tb_pessoa_juridica as pj
join tb_bairro as b
on pj.cd_bairro = b.cd_bairro
join tb_cidade as ci
on ci.cd_cidade = b.cd_cidade
join tb_uf as uf
on uf.cd_uf = ci.cd_uf
join tb_cliente as c
on c.cd_cliente = pj.cd_cliente;

select * from 
vw_cliente_centrooeste
where Estado = 'GO'or Estado = 'MT' or Estado = 'MS' or Estado = 'DF'
order by Estado;
-- FIM --


-- Atividade Procedure Parametrizada --

-- Procedure 1 --
DELIMITER //
create procedure pc_consulta_cliente (out retorno int)
BEGIN
select count(*) into retorno from tb_cliente;
select retorno as 'Clientes';
END //
DELIMITER ;

call pc_consulta_cliente (@retorno);
-- FIM --

-- Procedure 2 --
DELIMITER //
create procedure pc_consulta_cliente_cidade (in id_cidade int, out retorno int)
BEGIN
select count(cd_cpf) into retorno from tb_pessoa_fisica as pf
join tb_bairro as b
on pf.cd_bairro = b.cd_bairro
join tb_cidade as ci
on ci.cd_cidade = b.cd_cidade
join tb_uf as uf
on uf.cd_uf = ci.cd_uf
join tb_cliente as c
on c.cd_cliente = pf.cd_cliente
where ci.cd_cidade = id_cidade;
select retorno as 'Clientes';
END //
DELIMITER ;

call pc_consulta_cliente_cidade (2 ,@retorno);
-- FIM --

-- Procedure 3 --
DELIMITER //
create procedure pc_consulta_telefone (in id_cliente int)
BEGIN
select cd_numero1 as 'Número' from tb_telefone
where cd_cliente = id_cliente;
END //
DELIMITER ;

select * from tb_telefone;
call pc_consulta_telefone(2220);
-- FIM--


-- Procedure 4 --
DELIMITER //
create procedure pc_consulta_login (in id_login int)
BEGIN
select nm_cliente as 'Cliente', cd_email_cliente as 'Email', cd_senha_cliente as 'Email' from tb_cliente
where cd_login = id_login;
END //
DELIMITER ;

select * from tb_cliente;
call pc_consulta_login(15);
-- FIM--


-- Procedure 5 --
DELIMITER //
create procedure pc_consulta_veiculo (in id_marca int)
BEGIN
select nm_modelo as 'Modelo' from tb_modelo
where cd_marca = id_marca;
END //
DELIMITER ;

select * from tb_modelo;
call pc_consulta_veiculo(4);
-- FIM--


-- Atividade CRUD --

-- CRUD - CADASTRA --
DELIMITER //
create procedure pc_cadastra_cor (in id_cor int, in nome_cor varchar(50), out retorno varchar(100)) 
BEGIN 
if not exists (select * from tb_cor where cd_cor = id_cor or nm_cor = nome_cor) 
then 
BEGIN
insert into tb_cor (cd_cor, nm_cor)
value (id_cor, nome_cor);
if row_count() = 0 
then
set retorno = "ERRO! A cor NÃO foi castrada";
else 
set retorno = "SUCESSO! A cor foi cadastrada";
END if;
END;
else 
set retorno = "ERRO! Essa cor JÁ foi cadastrada";
END if;
select retorno;
END//
DELIMITER ;

call pc_cadastra_cor(14 ,'Verde Claro', @retorno);

select * from tb_cor;
-- FIM --


-- CRUD - EDITA --
DELIMITER //
create procedure pc_edita_cor (in id_cor int,in nome_cor varchar(100),out retorno varchar(100)) 
BEGIN 
if not exists (select * from tb_cor where cd_cor = id_cor or nm_cor = nome_cor) 
then 
BEGIN
set retorno = "ERRO! Cor NÂO encontarda!";
END;
else
UPDATE tb_cor
SET nm_cor = nome_cor
WHERE id_cor = cd_cor;
if row_count() = 0 
then
set retorno = "ERRO! A cor NÃO foi Alterada!";
else 
set retorno = "SUCESSO! A cor foi Alterada!";
END if;
END if;
select retorno;
END//
DELIMITER ;
drop procedure pc_edita_cor; 
call pc_edita_cor(11, 'Outros',@retorno);

select * from tb_cor;
-- FIM --


-- CRUD - DELETA --
DELIMITER //
create procedure pc_deleta_cor (in id_cor int, out retorno varchar(100)) 
BEGIN 
if not exists (select * from tb_cor where cd_cor = id_cor) 
then 
BEGIN
set retorno = "ERRO! Cor NÂO encontarda!";
END;
else
delete from  tb_cor 
where cd_cor = id_cor;
if row_count() = 0 
then
set retorno = "ERRO! A cor NÃO foi Deletada!";
else 
set retorno = "SUCESSO! A cor foi Deletada!";
END if;
END if;
select retorno;
END//
DELIMITER ;

call pc_deleta_cor(11 ,@retorno);

select * from tb_cor;
-- FIM --



select c.cd_cliente, v.cd_veiculo, c.nm_cliente as 'Cliente', mo.nm_modelo as 'Modelo', ma.nm_marca 'Marca', co.nm_cor as 'Cor do veiculo', v.cd_placa as'Placa do veiculo' 
from tb_cliente as c
join tb_veiculo as v
on v.cd_cliente = c.cd_cliente
join tb_modelo as mo
on mo.cd_modelo = v.cd_modelo
join tb_marca as ma
on ma.cd_marca = mo.cd_marca
join tb_cor as co
on v.cd_cor = co.cd_cor;

DELETE FROM tb_cliente WHERE cd_cliente = 2;

select * from tb_veiculo;

select *from tb_cliente;

select * from tb_login;

UPDATE tb_cliente
JOIN tb_login ON tb_login.cd_login = tb_cliente.cd_login
SET tb_login.cd_login = 7, tb_cliente.cd_cliente = 7
WHERE cd_cliente = 8;

SELECT
  CONSTRAINT_NAME,
  COLUMN_NAME,
  REFERENCED_TABLE_NAME,
  REFERENCED_COLUMN_NAME
FROM
  INFORMATION_SCHEMA.KEY_COLUMN_USAGE
WHERE
  TABLE_SCHEMA = 'db_tcc_estacionamento1'
  AND TABLE_NAME = 'tb_estacionamento'
  AND REFERENCED_TABLE_NAME IS NOT NULL;
  

START TRANSACTION;
insert into tb_login values
('', 'julio-pereira88@simoesmendonca.adv.br', 'HA0bRoSHGs');
 insert into tb_cliente values
(LAST_INSERT_ID(), 'julio-pereira88@simoesmendonca.adv.br', 'HA0bRoSHGs',LAST_INSERT_ID(), 'Julio Thiago Pereira');
COMMIT;


select LAST_INSERT_ID();
select * from tb_cliente;
select * from tb_login;

