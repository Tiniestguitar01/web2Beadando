-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Okt 25. 18:37
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
CREATE DATABASE IF NOT EXISTS `beadando` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `beadando`;

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
(5, 'asdasd', 'asdasd', 'asdasd', '$2y$10$TMd8iO.TkjUFi2DOU0Z22uHZGliBoov5m/Tnv.aQ0M9UiKql1yO.K', '_1_');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `jatekok`
--

CREATE TABLE `jatekok` (
  `id` int(11) NOT NULL,
  `nev` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `kiado` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `kiadasi_datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `jatekok`
--

INSERT INTO `jatekok` (`id`, `nev`, `kiado`, `kiadasi_datum`) VALUES
(1, 'Resident evil 2', 'Capcom', '2019-01-25'),
(2, 'Far cry 3', 'Ubisoft', '2012-11-29'),
(3, 'Counter-Strike 2', 'Valve', '2023-09-27'),
(4, 'Neighbours from Hell', ' JoWooD Entertainment', '2003-06-20'),
(5, 'Rocket league', ' Psyonix', '2015-07-07'),
(6, 'Valorant', 'Riot', '2020-06-02'),
(7, 'Sea of Thieves', 'Rare', '2018-03-20'),
(8, 'Terraria', 'Relogic', '2011-05-16'),
(9, 'UNCHARTED: Legacy of Thieves Collection', 'Sony Interactive Entertainment', '2022-01-28');

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
(0, 'szabo@gmail.com', '1123123123', 'asd', 'asdasdqwsd'),
(0, 'dfghdrgh@asgfas', '', 'sghewg', 'sghswergh');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menu`
--

CREATE TABLE `menu` (
  `url` varchar(30) NOT NULL,
  `nev` varchar(30) NOT NULL,
  `jogosultsag` varchar(3) NOT NULL,
  `sorrend` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `menu`
--

INSERT INTO `menu` (`url`, `nev`, `jogosultsag`, `sorrend`) VALUES
('admin', 'Admin', '001', 60),
('belepes', 'Belépés', '100', 80),
('elerhetoseg', 'Elérhetőség', '111', 20),
('jatekok', 'Játékok', '111', 50),
('kapcsolat', 'Kapcsolat', '111', 40),
('kilepes', 'Kilépés', '011', 90),
('nyitolap', 'Nyitólap', '111', 10),
('regisztracio', 'Regisztráció', '100', 70),
('uzenofal', 'Üzenőfal', '011', 30);

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
(1, 'Szabó', 'alma', '2023-10-25'),
(2, 'admin', 'asdawdqaw', '2023-10-25');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `jatekok`
--
ALTER TABLE `jatekok`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `jatekok`
--
ALTER TABLE `jatekok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT a táblához `uzenet`
--
ALTER TABLE `uzenet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
