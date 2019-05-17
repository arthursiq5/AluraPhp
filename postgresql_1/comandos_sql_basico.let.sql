-- pg_ctl -D /usr/local/var/postgres start -- iniciar o servidor
-- psql -U arthur postgres -- iniciar interpretador de comandos sql
-- \l; -- mostra todas as bases criadas

CREATE DATABASE controle_compras; -- cria a base "controle_compras"
CREATE DATABASE farmacia_online; -- cria a base "farmacia_online"

-- \c controle_compras; -- conectar no banco controle_compras no mac
-- \c farmacia_online;

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

-- \i ~/Downloads/dump-postgres.sql -- importando o arquivo '~/Downloads/dump-postgres.sql' pra a base selecionada

SELECT * FROM compras WHERE valor > 1000; -- mostra todos os campos de todos os itens da tabela compras quando o valor for maior que 1000

SELECT * FROM compras WHERE valor <= 100; -- mostra todos os campos de todos os itens de valor menor ou igual a 100 reais

SELECT * FROM compras WHERE data='06-22-2010'; -- mostra o item comprado dia 22 de junto de 2010 (formato de data americano)

SELECT * FROM compras WHERE observacao='COMPRAS DE JANEIRO'; -- mostra o(s) item(ns) com a observacao igual a 'COMPRAS DE JANEIRO' (case sensitive)

SELECT * FROM compras WHERE observacao like '%COMPRAS%'; -- seleciona todos os itens que possuem em algum lugar da descricao a palavra compras (o simbolo de porcentagem pode significar tanto 'nada' quanto qualquer quantidade de caracteres de qualquer valor)

SELECT *
  FROM compras
  WHERE valor > 1000
    AND data != '06-22-2010'; -- mostra todas as compras com valor acima de 1000 reais e que nao foram comprados em 22 de junho de 2010

SELECT valor*0.2 AS imposto FROM compras; -- seleciona o campo 'valor' e retorna cada item multiplicado por 0.2 (20% de cada valor) em uma coluna com o nome 'imposto'

SELECT valor, valor*0.2 from compras; -- retorna uma coluna com cada valor, e outra com o imposto correspondente

INSERT INTO compras (
  valor,
  data,
  observacao,
  recebido)
VALUES (
  2000,
  '09-03-2011',
  'CARNAVAL EM CANCUN',
  1); -- data inserida esta errada, por causa do formato americano

UPDATE compras SET data = '03-09-2011' WHERE id = 44; -- modificando a data do item cujo 'id' e igual a 44

UPDATE compras SET observacao='GASTO PEQUENO' WHERE valor < 20; -- modifica a coluna 'observacao' para todos os itens cuja tabela 'valor' e menor que 20

SELECT valor, data, observacao FROM compras WHERE data >= '01-01-2009' AND data <= '12-31-2009'; -- seleciona os campos 'valor', 'data' e 'observacao' entre todos os itens entre 1o de Janeiro de 2009 e 31 de Dezembro de 2009

SELECT valor, data, observacao
  FROM compras WHERE data BETWEEN '01-01-2009' AND '12-31-2009'; -- faz a mesma coisa que o comando anterior, so que de forma mais limpa e concisa

SELECT valor, data, observacao
  FROM compras
  WHERE data BETWEEN '01-01-2009'
    AND '12-31-2009'
  AND NOT observacao='GASTO PEQUENO'; -- seleciona todos os itens comprados em 2009 e que nao tenham como observacao 'GASTO PEQUENO'

DELETE FROM compras
  WHERE data BETWEEN '01-01-2009'
    AND '12-31-2009'; -- deleta todos os itens comprados em 2009

/* https://pt.wikibooks.org/wiki/PostgreSQL_Pr%C3%A1tico/Administra%C3%A7%C3%A3o/Backup_e_Restore -> explicacao sobre backups*/
