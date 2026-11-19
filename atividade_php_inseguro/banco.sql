CREATE TABLE
    IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
                    -- CORREÇÃO: Adicionar NOT NULL
        nome VARCHAR(120) NOT NULL,
                    -- Correção: Adicionar: NOT NULL UNIQUE
        email VARCHAR(150) NOT NULL UNIQUE,
                    -- CORREÇÃO: Aumentar o limite de caracteres pois a senha normalmente não é armazenada só escrito, ela é armazenada em códigos hashes que possuem muito mais caracteres | Adicionar NOT NULL
        senha VARCHAR(225) NOT NULL,
                    -- CORREÇÃO: Adicionar: NOT NULL DEFAULT 'operador'
        perfil VARCHAR(30) NOT NULL DEFAULT 'operador'
    );

CREATE TABLE
    IF NOT EXISTS produtos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(150) NOT NULL,
        descricao TEXT,
        preco DECIMAL(10, 2) NOT NULL,
        estoque INT NOT NULL,
        categoria VARCHAR(80) NOT NULL,
        criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

INSERT INTO
    usuarios (nome, email, senha, perfil)
VALUES
    (
        'Administrador',
        'admin@exemplo.local',
        'admin123',
        'admin'
    ),
    (
        'Operador',
        'operador@exemplo.local',
        '123456',
        'operador'
    );

INSERT INTO
    produtos (nome, descricao, preco, estoque, categoria)
VALUES
    (
        'Mouse USB',
        'Mouse para escritório',
        35.90,
        12,
        'Periféricos'
    ),
    (
        'Teclado',
        'Teclado básico',
        59.90,
        7,
        'Periféricos'
    ),
    (
        'Monitor',
        'Monitor de laboratório',
        699.00,
        3,
        'Monitores'
    );