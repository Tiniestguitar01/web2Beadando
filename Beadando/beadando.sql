-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Okt 25. 13:49
-- Kiszolgáló verziója: 10.4.24-MariaDB
-- PHP verzió: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `beadando`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `id` int(10) UNSIGNED NOT NULL,
  `csaladi_nev` varchar(45) NOT NULL DEFAULT '',
  `utonev` varchar(45) NOT NULL DEFAULT '',
  `bejelentkezes` varchar(40) NOT NULL DEFAULT '',
  `jelszo` varchar(256) NOT NULL DEFAULT '',
  `jogosultsag` varchar(3) NOT NULL DEFAULT '_1_'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `csaladi_nev`, `utonev`, `bejelentkezes`, `jelszo`, `jogosultsag`) VALUES
(2, 'Szabó', 'Dániel', 'Tiniestguitar01', '$2y$10$iOEdJ3yAgIg2lXkb4bvs2.Q.Nx60g4Lkf2UxtkNYzdxrJGf1mqYiy', '_1_'),
(3, 'admin', 'admin', 'admin', '$2y$10$y3bhGG5HXAc2CNBfFRXDWeS1Qwok.BFXNeR6DkpmHpqA2ClH76nWq', '__1'),
(4, 'dadadadad', 'adadadsadada', 'adasda', '$2y$10$uCqcLSlTd/mCg.r3mgcSSOuiM8k0.PaQsFKreIAZDoSQ2ji6zPFhu', '_1_'),
(5, 'sadadada', 'adadadasd', 'asdadad', '$2y$10$MsKknRtr1.d/lBl/nEOhyeWsXommX0Dxx1cnUVL1oRS8sX4xJlBS.', '_1_'),
(6, 'almafa', 'almásfa', 'almafa', '$2y$10$lycrmuHqewN8Mdlpbtyt1ei42Lx6jCETM.wlnXo8X9/eNZPD1YpsS', '_1_'),
(7, 'adadadad', 'adadada', 'asdadad131', '$2y$10$7L6tjgc3C1VKaGyObPdFguXjBjnpE45fQlD5yDJwBxXe2LZtlVHya', '_1_'),
(8, 'dadadadd', 'adadadad', 'adadasda12412542151', '$2y$10$Q1eaIz0grEtyronDmxageOdIXkHq2gRJtrjco72wtGKYDx.IN0ica', '_1_'),
(9, 'teszt', 'teszt', 'teszt', '$2y$10$/Y5MYoLAJXOYKI29Wbo45epuF9tG7fwcaLhrcc6det0BC.6oBabIe', '_1_'),
(10, 'teszelek most', 'mostan', 'teszt2', '$2y$10$SP9HPeQRi.PHXRa8YJ9nL.GuEzi696C6RxrPQoSrEluEzor/WuhEa', '_1_'),
(11, 'adminkiraly', 'kiralyadmin', 'admind', '$2y$10$jwhplRykGG02t8Fskbeia.Rf7cd2jfXxmVPn856CtLyX2vGs4u1QC', '__1');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kapcsolat`
--

CREATE TABLE `kapcsolat` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefonszam` varchar(10) DEFAULT NULL,
  `cim` varchar(40) NOT NULL,
  `tartalom` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `kapcsolat`
--

INSERT INTO `kapcsolat` (`id`, `email`, `telefonszam`, `cim`, `tartalom`) VALUES
(1, 'asdadad@gmail.com', 'adadadada', 'adsadadad', 'adadadadad'),
(2, 'tesztelek@gmail.com', '', 'CIM', 'CIMECSKE\r\n'),
(3, 'emailcim@gmail.com', '', 'adsadad', 'dadadadadadadadda'),
(4, 'asdadasa@gmail.com', 'lamd1', 'asdadad', 'asdadadada'),
(5, 'asdadasa@gmail.com', 'lamd1', 'asdadad', 'asdadadada'),
(6, 'dasdaasadadadad@g.com', '1313221', 'laaamai', 'asidnaidadad'),
(7, 'dasdaasadadadad@g.com', '1313221', 'laaamai', 'asidnaidadad'),
(8, 'asdandia@gmail.com', 'almafa1321', 'almafaa', 'amsaidnadiad\r\n');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menu`
--

CREATE TABLE `menu` (
  `url` varchar(30) NOT NULL,
  `nev` varchar(30) NOT NULL,
  `szulo` varchar(30) NOT NULL,
  `jogosultsag` varchar(3) NOT NULL,
  `sorrend` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `menu`
--

INSERT INTO `menu` (`url`, `nev`, `szulo`, `jogosultsag`, `sorrend`) VALUES
('admin', 'Admin', '', '001', 60),
('belepes', 'Belépés', '', '100', 80),
('elerhetoseg', 'Elérhetőség', '', '111', 30),
('kapcsolat', 'Kapcsolat', '', '111', 40),
('kilepes', 'Kilépés', '', '011', 90),
('nyitolap', 'Nyitólap', '', '111', 10),
('regisztracio', 'Regisztráció', '', '100', 70),
('uzenofal', 'Üzenőfal', '', '011', 30);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `uzenet`
--

CREATE TABLE `uzenet` (
  `id` int(11) NOT NULL,
  `felhasznalo` varchar(40) NOT NULL,
  `tartalom` varchar(250) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `uzenet`
--

INSERT INTO `uzenet` (`id`, `felhasznalo`, `tartalom`, `datum`) VALUES
(1, 'teszt', 'asdad', '2023-10-25'),
(2, 'teszt', 'asdadsad', '2023-10-25'),
(3, 'teszt', 'Faszom kivan ezzel a szarral\r\n', '2023-10-25'),
(4, 'teszt', 'adadasdadada', '2023-10-25'),
(5, 'teszt', 'adsada', '2023-10-25'),
(6, 'teszt', 'adsada', '2023-10-25'),
(7, 'teszelek most', 'mivan itt\r\n', '2023-10-25'),
(8, 'teszt', 'csá dani', '2023-10-25');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `kapcsolat`
--
ALTER TABLE `kapcsolat`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`url`);

--
-- A tábla indexei `uzenet`
--
ALTER TABLE `uzenet`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT a táblához `kapcsolat`
--
ALTER TABLE `kapcsolat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT a táblához `uzenet`
--
ALTER TABLE `uzenet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
