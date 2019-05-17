--
-- PostgreSQL database dump
--

-- Dumped from database version 11.3
-- Dumped by pg_dump version 11.3

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: enum_pagamento; Type: TYPE; Schema: public; Owner: arthur
--

CREATE TYPE public.enum_pagamento AS ENUM (
    'CARTAO',
    'BOLETO',
    'DINHEIRO'
);


ALTER TYPE public.enum_pagamento OWNER TO arthur;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: compras; Type: TABLE; Schema: public; Owner: arthur
--

CREATE TABLE public.compras (
    id integer NOT NULL,
    valor numeric DEFAULT 0 NOT NULL,
    data date,
    observacao character varying(255),
    recebido smallint,
    forma_pagamento public.enum_pagamento
);


ALTER TABLE public.compras OWNER TO arthur;

--
-- Name: compras_id_seq; Type: SEQUENCE; Schema: public; Owner: arthur
--

CREATE SEQUENCE public.compras_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.compras_id_seq OWNER TO arthur;

--
-- Name: compras_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: arthur
--

ALTER SEQUENCE public.compras_id_seq OWNED BY public.compras.id;


--
-- Name: compras id; Type: DEFAULT; Schema: public; Owner: arthur
--

ALTER TABLE ONLY public.compras ALTER COLUMN id SET DEFAULT nextval('public.compras_id_seq'::regclass);


--
-- Data for Name: compras; Type: TABLE DATA; Schema: public; Owner: arthur
--

COPY public.compras (id, valor, data, observacao, recebido, forma_pagamento) FROM stdin;
2	200	2008-02-19	MATERIAL ESCOLAR	1	CARTAO
3	3500	2008-05-21	TELEVISAO	0	CARTAO
4	1576.40	2008-04-30	MATERIAL DE CONSTRUCAO	1	CARTAO
5	163.45	2008-12-15	PIZZA PRA FAMILIA	1	CARTAO
19	827.5	2010-01-09	FESTA	1	CARTAO
21	678.43	2010-05-21	PASSAGEM PRA BAHIA	1	CARTAO
22	10937.12	2010-04-30	CARNAVAL EM CANCUN	1	CARTAO
23	1501.0	2010-06-22	PRESENTE DA SOGRA	0	CARTAO
24	1709.0	2010-08-25	PARCELA DA CASA	0	CARTAO
25	567.09	2010-09-25	PARCELA DO CARRO	0	CARTAO
26	631.53	2010-10-12	IPTU	1	CARTAO
27	909.11	2010-02-11	IPVA	1	CARTAO
28	768.18	2010-04-10	GASOLINA VIAGEM PORTO ALEGRE	1	CARTAO
29	434	2010-04-01	RODEIO INTERIOR DE SAO PAULO	0	CARTAO
31	98	2010-10-12	DIA DAS CRIANÇAS	0	CARTAO
32	253.7	2010-12-20	NATAL - PRESENTES	0	CARTAO
34	32.09	2011-07-02	LANCHONETE	1	CARTAO
35	954.12	2011-11-03	SHOW DA IVETE SANGALO	1	CARTAO
36	98.7	2011-02-07	LANCHONETE	1	CARTAO
37	213.5	2011-09-25	ROUPAS	0	CARTAO
38	1245.2	2011-10-17	ROUPAS	0	CARTAO
39	23.78	2011-12-18	LANCHONETE DO ZÉ	1	CARTAO
40	576.12	2011-09-13	SAPATOS	1	CARTAO
42	87.43	2011-05-10	GRAVATA	0	CARTAO
43	887.66	2011-02-02	PRESENTE PARA O FILHAO	1	CARTAO
44	2000	2011-03-09	CARNAVAL EM CANCUN	1	CARTAO
20	12.0	2010-02-19	GASTO PEQUENO	1	CARTAO
41	12.34	2011-07-19	GASTO PEQUENO	0	CARTAO
30	115.90	2014-06-12	DIA DOS NAMORADOS	0	CARTAO
46	0	2013-02-01	brinde	1	CARTAO
48	0	2013-02-01	brinde	1	CARTAO
49	100	2013-01-01	COMIDA	1	CARTAO
\.


--
-- Name: compras_id_seq; Type: SEQUENCE SET; Schema: public; Owner: arthur
--

SELECT pg_catalog.setval('public.compras_id_seq', 49, true);


--
-- Name: compras compras_pkey; Type: CONSTRAINT; Schema: public; Owner: arthur
--

ALTER TABLE ONLY public.compras
    ADD CONSTRAINT compras_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

