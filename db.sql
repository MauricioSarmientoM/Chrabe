CREATE DATABASE chrabe;
USE chrabe;
CREATE TABLE users (name VARCHAR(128) NOT NULL, surname VARCHAR(128) NOT NULL, username VARCHAR(128), password VARCHAR(256), email VARCHAR(128), birthdate DATE, sex varchar(32), interests varchar(32), PRIMARY KEY (username));
INSERT INTO users (name, surname, username, password, email, birthdate, sex, interests) VALUES
('Camila', 'Vicencio', 'Blitzel', 'momo', 'cmblitzel@gmail.com', datetime.date(1996, 6, 10), 'Female', None),
('Eduardo', 'Cortes', 'HyperStrider', 'qwer', 'hypers@gmail.com', datetime.date(2002, 4, 9), 'Normal', None),
('Klaus', 'Bieger', 'Lockhead', 'dlkjja#34543F', 'KlausB@outlook.cl', datetime.date(1974, 8, 1), 'Male', 'Community Member'),
('Víctor', 'Carrasco', 'Nanashi', 'lolajksFF12', 'nanashifoster@gmail.com', datetime.date(2001, 9, 29), 'Male', 'Collaborator'),
('Seal', 'Scorpus', 'SealSCR', 'as', 'a@e.cl', datetime.date(2001, 1, 1), 'Normal', 'Community Member'),
('Celeste', 'Marambio', 'SelfSpectrum', '$2y$10$3LvE4X4EdIensLn9lhl1luQ0eOX3vV0H0X9ir1IRJcsxraV79Hb.a','celestemarmar2@gmail.com', datetime.date(2001, 7, 12), 'Female', 'Development'),
('Sas', 'Sos', 'Sis', 'ses', 'sus@gmail.com', datetime.date(2011, 11, 11), 'Normal', None),
('123', '546', 'X', '0', 'nciais@g.c', datetime.date(2000, 1, 1), 'Normal', 'Community Member'),
('Даж', 'Иванович', 'Гетерофобик', 'pizdec', 'dazhi@gmail.com', datetime.date(2005, 2, 10), 'Female', None),
('Саша', 'Речка', 'Сареч', 'nhadifinajADA123', 'ssarsu24@gmail.com', datetime.date(2001, 9, 12), 'Female', 'Community Member'),
('Птаха', 'Фред', 'Фред24', 'xaxa', 'cvinitye@gmail.com', datetime.date(1995, 9, 1), 'Male', None);