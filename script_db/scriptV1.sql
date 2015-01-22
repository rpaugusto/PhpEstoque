CREATE TABLE cliente (
cli_id INT AUTO_INCREMENT,
cli_nome VARCHAR(100),
cli_endereco VARCHAR(100),
cli_bairro VARCHAR(50),
cli_cidade VARCHAR(50),
cli_estado VARCHAR(2),
cli_cep VARCHAR(10),
cli_telefone VARCHAR(13),
cli_celular VARCHAR(14),
cli_cpf VARCHAR(14),
cli_rg VARCHAR(10),
cli_email VARCHAR(100),
CONSTRAINT pk_cli_id PRIMARY KEY (cli_id)
);

CREATE TABLE fornecedor (
for_id INT AUTO_INCREMENT,
for_razao VARCHAR(100),
for_fantasia VARCHAR(100),
for_endereco VARCHAR(100),
for_bairro VARCHAR(50),
for_cidade VARCHAR(50),
for_estado VARCHAR(2),
for_cep VARCHAR(10),
for_telefone VARCHAR(13),
for_celular VARCHAR(14),
for_cpnj VARCHAR(14),
for_ie VARCHAR(10),
for_email VARCHAR(100),
for_rep_nome VARCHAR(100),
for_rep_telefone VARCHAR(14),
for_info VARCHAR(255),
CONSTRAINT pk_f_id PRIMARY KEY (for_id)
);

CREATE TABLE unidade (
un_id INT AUTO_INCREMENT,
un_descricao VARCHAR(50),
un_sigla VARCHAR(2),
CONSTRAINT pk_u_id PRIMARY KEY (un_id)
);

CREATE TABLE grupo (
gp_id INT AUTO_INCREMENT,
gp_grupo VARCHAR(50),
gp_tipo CHAR(1),
CONSTRAINT pk_g_id PRIMARY KEY (gp_id)
);

CREATE TABLE produto (
pro_id INT AUTO_INCREMENT,
pro_descricao VARCHAR(100),
pro_unidade INT,
pro_cod_bar VARCHAR(13),
pro_grupo INT,
pro_fornecedor INT,
pro_preco_custo FLOAT(10,2),
pro_margem FLOAT(2,1),
pro_preco_venda FLOAT(10,2),
pro_desconto FLOAT(2,1),
pro_estoque INT,
CONSTRAINT pk_p_id PRIMARY KEY (pro_id),
CONSTRAINT fk_for_id FOREIGN KEY (pro_fornecedor) REFERENCES fornecedor (for_id),
CONSTRAINT fk_gp_id FOREIGN KEY (pro_grupo) REFERENCES grupo (gp_id),
CONSTRAINT fk_und_id FOREIGN KEY (pro_unidade) REFERENCES unidade (un_id)
);

CREATE TABLE pedido (
ped_id INT AUTO_INCREMENT,
ped_cliente INT,
ped_data DATE,
ped_total FLOAT(10,2),
CONSTRAINT pk_ped_id PRIMARY KEY (ped_id),
CONSTRAINT fk_cli_id FOREIGN KEY (ped_cliente) REFERENCES cliente (cli_id)
);

CREATE TABLE itens_pedido (
it_ped_produto INT,
it_ped_valor FLOAT(10,2),
it_ped_qtd FLOAT(10,4),
it_pedido INT,
it_indice INT,
CONSTRAINT pk_ind_ped PRIMARY KEY (it_indice, it_pedido),
CONSTRAINT fk_ped_id FOREIGN KEY (it_pedido) REFERENCES pedido (ped_id),
CONSTRAINT fk_ped_pro FOREIGN KEY (it_ped_produto) REFERENCES produto (pro_id)
);

CREATE TABLE estoque (
est_pro_id INT,
est_tipo CHAR(1),
est_pro_qtd FLOAT(10,4),
est_ped_id INT,
CONSTRAINT pk_ind_est PRIMARY KEY (est_pro_id, est_ped_id),
CONSTRAINT fk_ped_id FOREIGN KEY (est_ped_id) REFERENCES pedido (ped_id),
CONSTRAINT fk_ped_pro FOREIGN KEY (est_pro_id) REFERENCES produto (pro_id)
);