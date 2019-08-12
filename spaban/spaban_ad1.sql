--
-- PostgreSQL database dump
--

-- Dumped from database version 9.2.6
-- Dumped by pg_dump version 9.2.6
-- Started on 2014-08-21 11:02:52

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 186 (class 3079 OID 11727)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2025 (class 0 OID 0)
-- Dependencies: 186
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 185 (class 1259 OID 115182)
-- Name: t_arsip; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE t_arsip (
    id bigint NOT NULL,
    no_seleksi character varying,
    pendidikan character varying,
    garjas character varying,
    kasjas character varying,
    ket_1 text,
    psikologi character varying,
    kesehatan character varying,
    ket_2 text,
    litpers character varying,
    ket_3 text,
    administrasi character varying,
    ket_4 text,
    akademik bigint,
    pengum bigint,
    pengmilum bigint,
    pengmilcab bigint,
    aplikasi bigint,
    bhs_inggris bigint,
    toefl bigint,
    tpa bigint,
    ketdik bigint,
    no_surat character varying,
    tgl_surat date,
    id_jenisdik bigint,
    thn_dik bigint,
    nama_dik character varying,
    tgl_buka_dik date,
    c_log character varying,
    t_dataid bigint
);


ALTER TABLE public.t_arsip OWNER TO postgres;

--
-- TOC entry 184 (class 1259 OID 115180)
-- Name: t_arsip_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE t_arsip_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.t_arsip_id_seq OWNER TO postgres;

--
-- TOC entry 2026 (class 0 OID 0)
-- Dependencies: 184
-- Name: t_arsip_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE t_arsip_id_seq OWNED BY t_arsip.id;


--
-- TOC entry 183 (class 1259 OID 115171)
-- Name: t_data; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE t_data (
    id bigint NOT NULL,
    nama character varying,
    id_pangkat bigint,
    nrp character varying,
    jabatan character varying,
    kotama character varying,
    panda character varying,
    id_korp bigint,
    tgl_lahir date,
    id_sumber bigint,
    tahun bigint,
    dikum character varying,
    gelar_s1 character varying,
    gelar_s2 character varying,
    gelar_s3 character varying,
    c_log character varying,
    foto character varying
);


ALTER TABLE public.t_data OWNER TO postgres;

--
-- TOC entry 182 (class 1259 OID 115169)
-- Name: t_data_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE t_data_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.t_data_id_seq OWNER TO postgres;

--
-- TOC entry 2027 (class 0 OID 0)
-- Dependencies: 182
-- Name: t_data_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE t_data_id_seq OWNED BY t_data.id;


--
-- TOC entry 179 (class 1259 OID 115149)
-- Name: t_dikbangspes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE t_dikbangspes (
    id bigint NOT NULL,
    nama character varying
);


ALTER TABLE public.t_dikbangspes OWNER TO postgres;

--
-- TOC entry 178 (class 1259 OID 115147)
-- Name: t_dikbangspes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE t_dikbangspes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.t_dikbangspes_id_seq OWNER TO postgres;

--
-- TOC entry 2028 (class 0 OID 0)
-- Dependencies: 178
-- Name: t_dikbangspes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE t_dikbangspes_id_seq OWNED BY t_dikbangspes.id;


--
-- TOC entry 181 (class 1259 OID 115160)
-- Name: t_dikum; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE t_dikum (
    id bigint NOT NULL,
    nama character varying
);


ALTER TABLE public.t_dikum OWNER TO postgres;

--
-- TOC entry 180 (class 1259 OID 115158)
-- Name: t_dikum_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE t_dikum_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.t_dikum_id_seq OWNER TO postgres;

--
-- TOC entry 2029 (class 0 OID 0)
-- Dependencies: 180
-- Name: t_dikum_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE t_dikum_id_seq OWNED BY t_dikum.id;


--
-- TOC entry 168 (class 1259 OID 98775)
-- Name: t_jenisdik; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE t_jenisdik (
    id bigint NOT NULL,
    nama character varying
);


ALTER TABLE public.t_jenisdik OWNER TO postgres;

--
-- TOC entry 169 (class 1259 OID 98781)
-- Name: t_jenisdik_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE t_jenisdik_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.t_jenisdik_id_seq OWNER TO postgres;

--
-- TOC entry 2030 (class 0 OID 0)
-- Dependencies: 169
-- Name: t_jenisdik_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE t_jenisdik_id_seq OWNED BY t_jenisdik.id;


--
-- TOC entry 170 (class 1259 OID 98783)
-- Name: t_korp; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE t_korp (
    id bigint NOT NULL,
    nama character varying
);


ALTER TABLE public.t_korp OWNER TO postgres;

--
-- TOC entry 171 (class 1259 OID 98789)
-- Name: t_korp_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE t_korp_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.t_korp_id_seq OWNER TO postgres;

--
-- TOC entry 2031 (class 0 OID 0)
-- Dependencies: 171
-- Name: t_korp_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE t_korp_id_seq OWNED BY t_korp.id;


--
-- TOC entry 172 (class 1259 OID 98791)
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
-- TOC entry 173 (class 1259 OID 98793)
-- Name: t_member; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE t_member (
    id integer DEFAULT nextval('t_member_id_seq'::regclass) NOT NULL,
    username character varying,
    passwd character varying,
    nama_user character varying,
    pangkat character varying,
    nrp character varying,
    tambah_data character varying,
    c_log character varying
);


ALTER TABLE public.t_member OWNER TO postgres;

--
-- TOC entry 174 (class 1259 OID 98800)
-- Name: t_pangkat; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE t_pangkat (
    id bigint NOT NULL,
    nama character varying
);


ALTER TABLE public.t_pangkat OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 98806)
-- Name: t_pangkat_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE t_pangkat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.t_pangkat_id_seq OWNER TO postgres;

--
-- TOC entry 2032 (class 0 OID 0)
-- Dependencies: 175
-- Name: t_pangkat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE t_pangkat_id_seq OWNED BY t_pangkat.id;


--
-- TOC entry 176 (class 1259 OID 98808)
-- Name: t_sumber; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE t_sumber (
    id bigint NOT NULL,
    nama character varying
);


ALTER TABLE public.t_sumber OWNER TO postgres;

--
-- TOC entry 177 (class 1259 OID 98814)
-- Name: t_sumber_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE t_sumber_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.t_sumber_id_seq OWNER TO postgres;

--
-- TOC entry 2033 (class 0 OID 0)
-- Dependencies: 177
-- Name: t_sumber_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE t_sumber_id_seq OWNED BY t_sumber.id;


--
-- TOC entry 1875 (class 2604 OID 115185)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY t_arsip ALTER COLUMN id SET DEFAULT nextval('t_arsip_id_seq'::regclass);


--
-- TOC entry 1874 (class 2604 OID 115174)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY t_data ALTER COLUMN id SET DEFAULT nextval('t_data_id_seq'::regclass);


--
-- TOC entry 1872 (class 2604 OID 115152)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY t_dikbangspes ALTER COLUMN id SET DEFAULT nextval('t_dikbangspes_id_seq'::regclass);


--
-- TOC entry 1873 (class 2604 OID 115163)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY t_dikum ALTER COLUMN id SET DEFAULT nextval('t_dikum_id_seq'::regclass);


--
-- TOC entry 1867 (class 2604 OID 98817)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY t_jenisdik ALTER COLUMN id SET DEFAULT nextval('t_jenisdik_id_seq'::regclass);


--
-- TOC entry 1868 (class 2604 OID 98818)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY t_korp ALTER COLUMN id SET DEFAULT nextval('t_korp_id_seq'::regclass);


--
-- TOC entry 1870 (class 2604 OID 98819)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY t_pangkat ALTER COLUMN id SET DEFAULT nextval('t_pangkat_id_seq'::regclass);


--
-- TOC entry 1871 (class 2604 OID 98820)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY t_sumber ALTER COLUMN id SET DEFAULT nextval('t_sumber_id_seq'::regclass);


--
-- TOC entry 2017 (class 0 OID 115182)
-- Dependencies: 185
-- Data for Name: t_arsip; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY t_arsip (id, no_seleksi, pendidikan, garjas, kasjas, ket_1, psikologi, kesehatan, ket_2, litpers, ket_3, administrasi, ket_4, akademik, pengum, pengmilum, pengmilcab, aplikasi, bhs_inggris, toefl, tpa, ketdik, no_surat, tgl_surat, id_jenisdik, thn_dik, nama_dik, tgl_buka_dik, c_log, t_dataid) FROM stdin;
1	INF/SESKOAD/001/JY-1	akmil	75	70		L65 MS PSI	MS		MS		MS		500	60	65	70	80	85	550	520	1	SPRIN/1234/VII/2014	2014-02-07	1	2014	DIKREG SESKOAD	2015-06-01		2
\.


--
-- TOC entry 2034 (class 0 OID 0)
-- Dependencies: 184
-- Name: t_arsip_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('t_arsip_id_seq', 1, true);


--
-- TOC entry 2015 (class 0 OID 115171)
-- Dependencies: 183
-- Data for Name: t_data; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY t_data (id, nama, id_pangkat, nrp, jabatan, kotama, panda, id_korp, tgl_lahir, id_sumber, tahun, dikum, gelar_s1, gelar_s2, gelar_s3, c_log, foto) FROM stdin;
2	Heri Dwi Susilo	16	11010012341080	Pabanda Kompers Spaban I/Ren Spersad	Denma Mabesad	JAYA-1	1	1980-10-21	1	2001	SMU / 2000	S.H. / 2012 / UI	M.M / 2014 / UNPAD			1408339349-akmil.jpg
\.


--
-- TOC entry 2035 (class 0 OID 0)
-- Dependencies: 182
-- Name: t_data_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('t_data_id_seq', 4, true);


--
-- TOC entry 2011 (class 0 OID 115149)
-- Dependencies: 179
-- Data for Name: t_dikbangspes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY t_dikbangspes (id, nama) FROM stdin;
1	Sussarpa Intel
2	Diklat Teknis Keamanan Jaringan Komputer 
3	Diklat Teknis Adm Jab Penyusun dan Jab Setingkat
4	Sussarba Intel
5	SUSPA JASMIL
6	SUSPA MINPERSPRA
7	SUS KIBI 
8	Diklat Teknis Adm Jab Pengolah dan Jab Setingkat
9	Sussarpa Intel
10	Suspa Intelstrat
11	Susjemen Minku Han
12	Pelatihan Komprehensif Dokter Gigi (Ladokgi)
13	Susjemen Rengar Han 
14	Susjemen Litbang Tk Pertama Han 
15	Susjemen Ada dan PBMN Han 
16	Diklat Teknis Adm Jab Opr Komp dan Jab Agendaris Setingkat 
17	DTSS Penatausahaan BMN 
18	Diklat Fungsional Analis Kebijakan Hanneg
19	Sesko TNI
20	Tar Teknik WWCR (Tar Puspen)
21	Pelatihan Literasi Komputer (Pusinfolahta TNI)
22	Pelatihan Multimedia (Pusinfolahta TNI)
24	Suspa Sandi dan Intel 
25	Susgati Bintal 
26	Tar Penulisan Press Release (Tar Puspen)
27	Suspa Kontra Intel 
28	Suspa Penggalangan 
29	Suspa Lidkrimpamfik POM TNI
30	Diklat Fungsional Kataloger Tingkat Terampil
31	Diklat Teknis Teknisi Komputer
32	Suskatjemen Hanneg Eksekutif Program Kepemimpinan Nasional
33	Susjabkimmil
35	Susba Sandi dan Intel
36	Tar Minu TNI bagi Pamen, Pama dan PNS Gol III
34	Susjab Ormil TNI
37	Susjurtek Komsat TNI
38	Susjurtek dan Radio Monobs TNI
39	Pelatihan DVI Dental (Ladokgi)
40	Pelatihan Asistensi Ortodonti (Ladokgi)
41	Suspajarah TNI
42	Susbajarah TNI
43	Pelatihan Pengamanan Sistem Informasi (Pusinfolahta TNI)
44	Diklat Teknis Adm Jabatan Penyusun dan Jabatan Setingkat  S-2 UNHAN
47	Diklat Teknis Administrasi Jab Opr Komp dan Jabatan Agendaris Setingkat
46	Susjemen Pembangunan Karakter Bangsa
45	Diklat Fungsional Pembentukan Auditor Ahli
48	Suspa Hanud Pasif
49	Tar Arsip TNI bagi Pama, Ba dn PNS Gol III/II
51	Susjemen Litbang Tk Muda Han
52	Susjemen Benku Han
50	Susjemen Penanggulangan Bencana  III
53	Suspa Hartib POM TNI
54	Tar Kesekretariatan bagi Pama dan PNS Gol III
55	Tar Citizen Journalism (Tar Puspen)
56	Sekolah Instruktur Penerbang (SIP)
57	Susdasjemen Han
58	Pelatihan Programer Komputer (Pusinfolahta TNI)
59	Pelatihan Cyber Security (Pusinfolahta TNI)
60	Suspa Pernika Hanud
61	Suspa Idik POM TNI
62	Suspa Interogator
63	Susbatih Interogator 
64	Tar Penulisan Opini (Tar Puspen)
65	Suspimjemen Han
66	Diklat Teknis Adm Jab Opr Komp dan \r\nJab Agendaris Setingkat Gel III
67	Pelatihan Bedah Mulut Minor (Ladokgi)
68	Diklat Teknis Web Programming Komputer
69	Tar Minu TNI Bagi Ba dan PNS Gol II
70	Susjemen Rengar Han 
71	Diklat Teknis Prog Percepatan Akuntabilitas Keu Pemerintah
72	Diklat Teknis Cyber Defense
74	Diklat Fungsional Pembentukan Auditor Ahli 
75	DTSS Penatausahaan BMN Tk III
76	Susgadik TNI
77	Pelatihan Sishanudnas
78	Suspa Sishanudnas
79	Susba/Ta Radop
80	Diklat Teknis Pengadaan Strategi Pertahanan 
81	Tar Kesekretariatan bagi Ba dan PNS Gol II
82	Pelatihan Asistensi Bedah Mulut Minor (Ladokgi)
83	Tar Takah bagi Pama, Ba dan PNS Gol III/II
73	Susjurminku PNS TNI
23	Diklapa
84	Seskoad
\.


--
-- TOC entry 2036 (class 0 OID 0)
-- Dependencies: 178
-- Name: t_dikbangspes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('t_dikbangspes_id_seq', 84, true);


--
-- TOC entry 2013 (class 0 OID 115160)
-- Dependencies: 181
-- Data for Name: t_dikum; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY t_dikum (id, nama) FROM stdin;
1	SD
2	SMP
3	SMA
4	D1
5	D2
6	D3
7	S1
8	S2
9	S3
\.


--
-- TOC entry 2037 (class 0 OID 0)
-- Dependencies: 180
-- Name: t_dikum_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('t_dikum_id_seq', 9, true);


--
-- TOC entry 2000 (class 0 OID 98775)
-- Dependencies: 168
-- Data for Name: t_jenisdik; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY t_jenisdik (id, nama) FROM stdin;
1	DIKBANGUM
2	DIKTUKPA
3	DIKTUKBA
4	DIKBANGSPES
\.


--
-- TOC entry 2038 (class 0 OID 0)
-- Dependencies: 169
-- Name: t_jenisdik_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('t_jenisdik_id_seq', 4, true);


--
-- TOC entry 2002 (class 0 OID 98783)
-- Dependencies: 170
-- Data for Name: t_korp; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY t_korp (id, nama) FROM stdin;
1	INF
2	KAV
3	ARH
4	ARM
5	CPN
6	CZI
7	CPL
8	CHB
9	CBA
10	CTP
11	CKM
12	CPM
13	CAJ
14	CHK
15	CKU
16	TIT
17	TNI
\.


--
-- TOC entry 2039 (class 0 OID 0)
-- Dependencies: 171
-- Name: t_korp_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('t_korp_id_seq', 17, true);


--
-- TOC entry 2005 (class 0 OID 98793)
-- Dependencies: 173
-- Data for Name: t_member; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY t_member (id, username, passwd, nama_user, pangkat, nrp, tambah_data, c_log) FROM stdin;
1	adminAD	admin	admin	admin	admin	y	\N
\.


--
-- TOC entry 2040 (class 0 OID 0)
-- Dependencies: 172
-- Name: t_member_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('t_member_id_seq', 1, true);


--
-- TOC entry 2006 (class 0 OID 98800)
-- Dependencies: 174
-- Data for Name: t_pangkat; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY t_pangkat (id, nama) FROM stdin;
1	PRADA
2	PRATU
3	PRAKA
4	KOPDA
5	KOPTU
6	KOPKA
7	SERDA
8	SERTU
9	SERKA
10	SERMA
11	PELDA
12	PELTU
13	LETDA
14	LETTU
15	KAPTEN
16	MAYOR
17	LETKOL
18	KOLONEL
19	BRIGJEN
20	MAYJEN
\.


--
-- TOC entry 2041 (class 0 OID 0)
-- Dependencies: 175
-- Name: t_pangkat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('t_pangkat_id_seq', 20, true);


--
-- TOC entry 2008 (class 0 OID 98808)
-- Dependencies: 176
-- Data for Name: t_sumber; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY t_sumber (id, nama) FROM stdin;
1	AKMIL
2	SEPA PK
3	TA PK
4	BA PK
5	SESKOAD
6	SESKO TNI
7	LEMHANAS
8	DIKLAPA 1
9	DIKLAPA 2
10	SARCAB INF
11	SARCAB KAV
12	SARCAB ARH
13	SARCAB ARM
14	SARCAB CPN
15	SARCAB CZI
16	SARCAB CPL
17	SARCAB CHB
18	SARCAB CBA
19	SARCAB CTP
20	SARCAB CKM
21	SARCAB CPM
22	SARCAB CAJ
23	SARCAB CHK
24	SARCAB CKU
\.


--
-- TOC entry 2042 (class 0 OID 0)
-- Dependencies: 177
-- Name: t_sumber_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('t_sumber_id_seq', 24, true);


--
-- TOC entry 1893 (class 2606 OID 115190)
-- Name: t_arsip_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY t_arsip
    ADD CONSTRAINT t_arsip_pk PRIMARY KEY (id);


--
-- TOC entry 1891 (class 2606 OID 115179)
-- Name: t_data_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY t_data
    ADD CONSTRAINT t_data_pk PRIMARY KEY (id);


--
-- TOC entry 1887 (class 2606 OID 115157)
-- Name: t_dikbangspes_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY t_dikbangspes
    ADD CONSTRAINT t_dikbangspes_pk PRIMARY KEY (id);


--
-- TOC entry 1889 (class 2606 OID 115168)
-- Name: t_dikum_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY t_dikum
    ADD CONSTRAINT t_dikum_pk PRIMARY KEY (id);


--
-- TOC entry 1877 (class 2606 OID 98824)
-- Name: t_jenisdik_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY t_jenisdik
    ADD CONSTRAINT t_jenisdik_pk PRIMARY KEY (id);


--
-- TOC entry 1879 (class 2606 OID 98826)
-- Name: t_korp_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY t_korp
    ADD CONSTRAINT t_korp_pk PRIMARY KEY (id);


--
-- TOC entry 1881 (class 2606 OID 98828)
-- Name: t_member_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY t_member
    ADD CONSTRAINT t_member_pkey PRIMARY KEY (id);


--
-- TOC entry 1883 (class 2606 OID 98830)
-- Name: t_pangkat_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY t_pangkat
    ADD CONSTRAINT t_pangkat_pk PRIMARY KEY (id);


--
-- TOC entry 1885 (class 2606 OID 98832)
-- Name: t_sumber_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY t_sumber
    ADD CONSTRAINT t_sumber_pk PRIMARY KEY (id);


--
-- TOC entry 2024 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2014-08-21 11:02:53

--
-- PostgreSQL database dump complete
--

