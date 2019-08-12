--
-- PostgreSQL database dump
--

-- Dumped from database version 9.2.6
-- Dumped by pg_dump version 9.2.6
-- Started on 2014-07-16 10:37:26

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 257 (class 1259 OID 18668)
-- Name: t_member; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE t_member (
    id integer NOT NULL,
    uname character varying(50),
    passw character varying(50),
    level character varying(50)
);


ALTER TABLE public.t_member OWNER TO postgres;

--
-- TOC entry 256 (class 1259 OID 18666)
-- Name: t_member_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE t_member_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.t_member_id_seq OWNER TO postgres;

--
-- TOC entry 2198 (class 0 OID 0)
-- Dependencies: 256
-- Name: t_member_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE t_member_id_seq OWNED BY t_member.id;


--
-- TOC entry 2082 (class 2604 OID 18671)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY t_member ALTER COLUMN id SET DEFAULT nextval('t_member_id_seq'::regclass);


--
-- TOC entry 2193 (class 0 OID 18668)
-- Dependencies: 257
-- Data for Name: t_member; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO t_member VALUES (1, 'admin1', 'admin123', 'ADMIN');
INSERT INTO t_member VALUES (2, 'plp', 'plp_1map', 'PLP');
INSERT INTO t_member VALUES (3, 'am', 'am_1map', 'AIR MINUM');
INSERT INTO t_member VALUES (4, 'pbl', 'pbl_1map', 'PBL');
INSERT INTO t_member VALUES (5, 'bangkim', 'bangkim_1map', 'BANGKIM');


--
-- TOC entry 2199 (class 0 OID 0)
-- Dependencies: 256
-- Name: t_member_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('t_member_id_seq', 5, true);


--
-- TOC entry 2084 (class 2606 OID 18673)
-- Name: t_member_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY t_member
    ADD CONSTRAINT t_member_pkey PRIMARY KEY (id);


-- Completed on 2014-07-16 10:37:26

--
-- PostgreSQL database dump complete
--

