/*
    Definisi Grounding -> Koding Ilmu = Koordinat Makna
*/

CREATE TABLE Def_DataClass (
    Id INT NOT NULL AUTO_INCREMENT,
    Class CHAR(3),
    Lv INT,
    PRIMARY KEY (Id)
);

INSERT INTO Def_DataClass(Class, Lv) VALUES("G",2);
INSERT INTO Def_DataClass(Class, Lv) VALUES("G",1);
INSERT INTO Def_DataClass(Class, Lv) VALUES("G",0);
INSERT INTO Def_DataClass(Class, Lv) VALUES("E",0);

CREATE TABLE Ilmu (
    Id INT NOT NULL AUTO_INCREMENT,
    Describe_Ilmu VARCHAR(100),
    PRIMARY KEY (Id)
);

INSERT INTO Ilmu(Describe_Ilmu) VALUES ("RUMPUN MATEMATIKA DAN ILMU PENGETAHUAN ALAM (MIPA)");

/*
    Definisi Singularitas -> Ekonomi sebagai Phlogiston dan bentuk Komunikasi
*/

CREATE TABLE Diphda_Rill (
    Id INT NOT NULL AUTO_INCREMENT,
    RegDate DATETIME,
    Nama VARCHAR(50),
    Harta INT,
    Hutang INT,
    PRIMARY KEY (Id)
);

CREATE TABLE Transaksi_Mental (
    Id INT NOT NULL AUTO_INCREMENT,
    RegDate DATETIME,
    Pengirim VARCHAR(50),
    Penerima VARCHAR(50),
    Nominal INT,
    A4 INT,
    F1 INT,
    F2b INT,
    Keterangan VARCHAR(100),
    PRIMARY KEY (Id)
);

CREATE TABLE Pollux_Def(
    IdPasar INT NOT NULL AUTO_INCREMENT,
    Pasar VARCHAR(50),
    PRIMARY KEY (IdPasar)
);

INSERT INTO Pollux_Def(Pasar) VALUES 
("Saham"),("Akademik"),("Pariwisata"),
("Manufaktur"),("Wira Usaha"),("Transportasi"),
("Logam Mulia (Emas)"),("Kesehatan");

CREATE TABLE Pollux(
    Id INT NOT NULL AUTO_INCREMENT,
    Nama_Barang VARCHAR(50),
    JenisPasar INT,
    PRIMARY KEY (Id),
    FOREIGN KEY (JenisPasar) REFERENCES Pollux_Def(IdPasar)
        ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO Pollux(Nama_Barang, JenisPasar) VALUES ("Waktu", 2);

/*
   Definisi Historik -> MOC_Idea + MOC_TimeBlock
*/

CREATE TABLE Def_Skill (
    Id INT NOT NULL AUTO_INCREMENT,
    Describe VARCHAR(50),
    PRIMARY KEY (Id)
);

INSERT INTO Def_Skill(Describe) VALUES 
("Kompetensi Dasar"),
("Kompetensi Induk"),
("Standar Kompetensi");

CREATE TABLE MOC_Idea (
    Idea_Central VARCHAR(40) NOT NULL,
    Soure TEXT,
    Methode INT,
    Idea_Rel INT,
    Canopus DATETIME,
    PRIMARY KEY (Idea_Central)
);

CREATE TABLE MOC_TimeBlock (
    HV121 DATE NOT NULL,
    Canopus DATETIME,
    Hierarch INT,
    Soure TEXT,
    Actor INT,
    PRIMARY KEY (HV121),
    FOREIGN KEY (Canopus) REFERENCES MOC_Idea(Canopus)
        ON DELETE SET NULL ON UPDATE CASCADE,
    FOREIGN KEY (Hierarch) REFERENCES Def_Skill(Id)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (Actor) REFERENCES Diphda_Rill(Id)
        ON DELETE CASCADE ON UPDATE CASCADE
);

/*
    Pendidikan = Integrasi Grounding + Singularitas + Historik
*/

CREATE TABLE Sylabus (
    mapel_id INT NOT NULL AUTO_INCREMENT,
    nama_mapel VARCHAR(100),
    Kode INT,
    PRIMARY KEY (mapel_id),
    FOREIGN KEY (Kode) REFERENCES Ilmu(Id)
        ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE RPP (
    Tingkatan INT NOT NULL AUTO_INCREMENT,
    IdSylabus INT,
    MateriId VARCHAR(40),
    OutputRPP VARCHAR(100),
    LvSkill INT,
    Min_SkillVal INT,
    JenisBiaya INT,
    Produk INT,
    PRIMARY KEY (Tingkatan),
    FOREIGN KEY (MateriId) REFERENCES MOC_Idea(Idea_Central)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (IdSylabus) REFERENCES Sylabus(mapel_id)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (LvSkill) REFERENCES Def_Skill(Id)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (JenisBiaya) REFERENCES Pollux(Id)
        ON DELETE SET NULL ON UPDATE CASCADE
);

