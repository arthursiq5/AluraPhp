-- pg_ctl -D /usr/local/var/postgres start -- iniciar o servidor
-- psql -U arthur postgres -- iniciar interpretador de comandos sql

CREATE DATABASE controle_compras; -- cria a base "controle_compras"
CREATE DATABASE farmacia_online; -- cria a base "farmacia_online"

\c controle_compras; -- conectar no banco controle_compras no mac
\c farmacia_online;

CREATE TABLE compras ( -- tabela compras criada
  id SERIAL PRIMARY KEY, -- id como chave primaria; id auto-incrementavel (serial)
  valor DECIMAL, -- grava numeros fracionados (ponto flutuante)
  data DATE, -- grava datas
  observacao VARCHAR(255), -- grava ate 255 caracteres
  recebido SMALLINT -- grava pequenos numeros inteiros (de -32768 a +32767)
);

INSERT INTO compras VALUES (1, 100.0, '2009-12-14', 'presente de aniversario', 1); -- insere dados

INSERT INTO compras (valor, data, observacao, recebido) VALUES (100.0, '2009-12-14', 'presente de aniversario', 1); -- insere dados com o ID auto-incrementado

SELECT * FROM compras; -- mostra todos os dados da tabela 'compras'
