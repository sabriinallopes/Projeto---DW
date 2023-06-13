CREATE TABLE tbEspecie (
    idEspecie INT AUTO_INCREMENT,
    descEspecie VARCHAR(10) NOT NULL,
    PRIMARY KEY (idEspecie)
);

CREATE TABLE tbIdadeAnimal (
    idIdadeAnimal INT AUTO_INCREMENT,
    descIdade VARCHAR(10) NOT NULL,
    PRIMARY KEY (idIdadeAnimal)
);

CREATE TABLE tbFabricante(
    idFabricante INT AUTO_INCREMENT
    , nomeFabricante VARCHAR(50) NOT NULL
    , cnpjFabricante VARCHAR(30) NOT NULL
    , PRIMARY KEY (idFabricante)
);

CREATE TABLE tbCategoriaProduto (
    idCategoriaProduto INT AUTO_INCREMENT,
    descCategoria VARCHAR(20) NOT NULL,
    PRIMARY KEY (idCategoriaProduto)
);  

CREATE TABLE tbPerfilAcesso(
    idPerfilAcesso INT AUTO_INCREMENT,
    descPerfil VARCHAR(20),
    PRIMARY KEY(idPerfilAcesso)
);

CREATE TABLE tbPorteAnimal (
    idPorteAnimal INT AUTO_INCREMENT,
    descPorte VARCHAR(20) NOT NULL,
    PRIMARY KEY (idPorteAnimal)
);  

CREATE TABLE tbProduto (
    idProduto INT AUTO_INCREMENT,
    nomeProduto VARCHAR(30) NOT NULL,
    descProduto VARCHAR(100) NOT NULL,
    pesoProduto FLOAT NOT NULL,
    valorProduto FLOAT NOT NULL,
    imagem VARCHAR(100),
    idCategoriaProduto INT NOT NULL,
    idPorteAnimal INT NOT NULL,
    idFabricante INT NOT NULL,
    idEspecie INT NOT NULL,
  	idIdadeAnimal INT NOT NULL,
    PRIMARY KEY (idProduto),
    FOREIGN KEY (idCategoriaProduto)
        REFERENCES tbCategoriaProduto (idCategoriaProduto),
    FOREIGN KEY (idPorteAnimal)
    	REFERENCES tbporteanimal(idPorteAnimal),
    FOREIGN KEY (idfabricante) 
     	REFERENCES tbFabricante (idFabricante),
    FOREIGN KEY (idEspecie)
        REFERENCES tbEspecie (idEspecie),
     FOREIGN KEY (idIdadeAnimal)
     	REFERENCES tbidadeanimal(idIdadeAnimal)
);

CREATE TABLE tbCliente (
    idCliente INT AUTO_INCREMENT,
    nomeCliente VARCHAR(50) NOT NULL,
    cpfCliente VARCHAR(14) NOT NULL,
    telefoneCliente VARCHAR(20) NOT NULL,
    emailLogin VARCHAR(100) NOT NULL,
	senhaLogin VARCHAR(30) NOT NULL,  
    idPerfilAcesso INT NOT NULL,
    cep VARCHAR(50),
    endereco VARCHAR(50),
    numero VARCHAR(5),
    bairro VARCHAR(40),
	cidade VARCHAR(40), 
    estado VARCHAR(30),
    PRIMARY KEY (idCliente),
    FOREIGN KEY (idPerfilAcesso)
    	REFERENCES tbperfilacesso(idPerfilAcesso)    
);

CREATE TABLE tbVenda(
    idVenda INT AUTO_INCREMENT,
    dataVenda DATETIME,
    idCliente INT,
    valorTotal FLOAT,
    idProduto INT,
    qtdProduto INT,
    PRIMARY KEY(idVenda),
    FOREIGN KEY (idCliente) 
    	REFERENCES tbCliente(idCliente),
    FOREIGN KEY (idProduto) 
        REFERENCES tbProduto(idProduto) 
);


    
    



