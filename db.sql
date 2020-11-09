PGDMP                     
    x            NewHorizonTest    13.0    13.0 #    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    24577    NewHorizonTest    DATABASE     t   CREATE DATABASE "NewHorizonTest" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_United States.1252';
     DROP DATABASE "NewHorizonTest";
                postgres    false            �            1259    24616    grupa_kursa    TABLE     v   CREATE TABLE public.grupa_kursa (
    naziv character varying(50) NOT NULL,
    opis text,
    id integer NOT NULL
);
    DROP TABLE public.grupa_kursa;
       public         heap    postgres    false            �            1259    32879    grupa_kursa_id_seq    SEQUENCE     �   CREATE SEQUENCE public.grupa_kursa_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.grupa_kursa_id_seq;
       public          postgres    false    200            �           0    0    grupa_kursa_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.grupa_kursa_id_seq OWNED BY public.grupa_kursa.id;
          public          postgres    false    203            �            1259    24648 	   korisnici    TABLE     =  CREATE TABLE public.korisnici (
    ime character varying(50) NOT NULL,
    prezime character varying(50) NOT NULL,
    datum_rodjanja date NOT NULL,
    e_mail character varying(50) NOT NULL,
    broj_telefona integer NOT NULL,
    sifra character varying(50) NOT NULL,
    uloga boolean,
    id integer NOT NULL
);
    DROP TABLE public.korisnici;
       public         heap    postgres    false            �            1259    32923    korisnici_id_seq    SEQUENCE     �   CREATE SEQUENCE public.korisnici_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.korisnici_id_seq;
       public          postgres    false    202            �           0    0    korisnici_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.korisnici_id_seq OWNED BY public.korisnici.id;
          public          postgres    false    204            �            1259    24624    kurs    TABLE     �   CREATE TABLE public.kurs (
    naziv character varying(50) NOT NULL,
    opis text,
    slike bytea,
    id_grupa_kursa integer,
    id integer NOT NULL
);
    DROP TABLE public.kurs;
       public         heap    postgres    false            �            1259    32976    kurs_id_seq    SEQUENCE     �   CREATE SEQUENCE public.kurs_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.kurs_id_seq;
       public          postgres    false    201            �           0    0    kurs_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.kurs_id_seq OWNED BY public.kurs.id;
          public          postgres    false    206            �            1259    32939    pohadjanje_kurseva    TABLE     }   CREATE TABLE public.pohadjanje_kurseva (
    id_korisnika integer NOT NULL,
    id_kursa integer,
    id integer NOT NULL
);
 &   DROP TABLE public.pohadjanje_kurseva;
       public         heap    postgres    false            �            1259    32993    pohadjanje_kurseva_id_seq    SEQUENCE     �   CREATE SEQUENCE public.pohadjanje_kurseva_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.pohadjanje_kurseva_id_seq;
       public          postgres    false    205            �           0    0    pohadjanje_kurseva_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.pohadjanje_kurseva_id_seq OWNED BY public.pohadjanje_kurseva.id;
          public          postgres    false    207            6           2604    32881    grupa_kursa id    DEFAULT     p   ALTER TABLE ONLY public.grupa_kursa ALTER COLUMN id SET DEFAULT nextval('public.grupa_kursa_id_seq'::regclass);
 =   ALTER TABLE public.grupa_kursa ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    203    200            8           2604    32925    korisnici id    DEFAULT     l   ALTER TABLE ONLY public.korisnici ALTER COLUMN id SET DEFAULT nextval('public.korisnici_id_seq'::regclass);
 ;   ALTER TABLE public.korisnici ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    204    202            7           2604    32978    kurs id    DEFAULT     b   ALTER TABLE ONLY public.kurs ALTER COLUMN id SET DEFAULT nextval('public.kurs_id_seq'::regclass);
 6   ALTER TABLE public.kurs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    206    201            9           2604    32995    pohadjanje_kurseva id    DEFAULT     ~   ALTER TABLE ONLY public.pohadjanje_kurseva ALTER COLUMN id SET DEFAULT nextval('public.pohadjanje_kurseva_id_seq'::regclass);
 D   ALTER TABLE public.pohadjanje_kurseva ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    207    205            �          0    24616    grupa_kursa 
   TABLE DATA           6   COPY public.grupa_kursa (naziv, opis, id) FROM stdin;
    public          postgres    false    200   �'       �          0    24648 	   korisnici 
   TABLE DATA           j   COPY public.korisnici (ime, prezime, datum_rodjanja, e_mail, broj_telefona, sifra, uloga, id) FROM stdin;
    public          postgres    false    202   �'       �          0    24624    kurs 
   TABLE DATA           F   COPY public.kurs (naziv, opis, slike, id_grupa_kursa, id) FROM stdin;
    public          postgres    false    201   A(       �          0    32939    pohadjanje_kurseva 
   TABLE DATA           H   COPY public.pohadjanje_kurseva (id_korisnika, id_kursa, id) FROM stdin;
    public          postgres    false    205   �(       �           0    0    grupa_kursa_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.grupa_kursa_id_seq', 1, true);
          public          postgres    false    203            �           0    0    korisnici_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.korisnici_id_seq', 3, true);
          public          postgres    false    204            �           0    0    kurs_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.kurs_id_seq', 2, true);
          public          postgres    false    206            �           0    0    pohadjanje_kurseva_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.pohadjanje_kurseva_id_seq', 2, true);
          public          postgres    false    207            ;           2606    32883    grupa_kursa grupa_kursa_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.grupa_kursa
    ADD CONSTRAINT grupa_kursa_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.grupa_kursa DROP CONSTRAINT grupa_kursa_pkey;
       public            postgres    false    200            ?           2606    32927    korisnici korisnici_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.korisnici
    ADD CONSTRAINT korisnici_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.korisnici DROP CONSTRAINT korisnici_pkey;
       public            postgres    false    202            =           2606    32980    kurs kurs_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.kurs
    ADD CONSTRAINT kurs_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.kurs DROP CONSTRAINT kurs_pkey;
       public            postgres    false    201            A           2606    32997 *   pohadjanje_kurseva pohadjanje_kurseva_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.pohadjanje_kurseva
    ADD CONSTRAINT pohadjanje_kurseva_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.pohadjanje_kurseva DROP CONSTRAINT pohadjanje_kurseva_pkey;
       public            postgres    false    205            B           2606    32971    kurs kurs_id_grupa_kursa_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.kurs
    ADD CONSTRAINT kurs_id_grupa_kursa_fkey FOREIGN KEY (id_grupa_kursa) REFERENCES public.grupa_kursa(id) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;
 G   ALTER TABLE ONLY public.kurs DROP CONSTRAINT kurs_id_grupa_kursa_fkey;
       public          postgres    false    2875    201    200            C           2606    32945 7   pohadjanje_kurseva pohadjanje_kurseva_id_korisnika_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pohadjanje_kurseva
    ADD CONSTRAINT pohadjanje_kurseva_id_korisnika_fkey FOREIGN KEY (id_korisnika) REFERENCES public.korisnici(id) ON UPDATE CASCADE ON DELETE CASCADE;
 a   ALTER TABLE ONLY public.pohadjanje_kurseva DROP CONSTRAINT pohadjanje_kurseva_id_korisnika_fkey;
       public          postgres    false    2879    205    202            D           2606    32988 3   pohadjanje_kurseva pohadjanje_kurseva_id_kursa_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pohadjanje_kurseva
    ADD CONSTRAINT pohadjanje_kurseva_id_kursa_fkey FOREIGN KEY (id_kursa) REFERENCES public.kurs(id) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;
 ]   ALTER TABLE ONLY public.pohadjanje_kurseva DROP CONSTRAINT pohadjanje_kurseva_id_kursa_fkey;
       public          postgres    false    201    205    2877            �   %   x��w�t�Q�uu�t�sU�WF2����� �l�      �   C   x��K�LI�tK,�L�4200�50�52��	��D�s3s���s9͌LM�-9�
J8�b���� j�      �   4   x�s���uv��r���4�4�rstvu����sU�Wps�Hq��qqq ��	�      �      x������ � �     