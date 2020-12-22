-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Dec 22. 15:00
-- Kiszolgáló verziója: 10.4.11-MariaDB
-- PHP verzió: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `fishshop`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `conn_move`
--

CREATE TABLE `conn_move` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `db` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `conn_move`
--

INSERT INTO `conn_move` (`id`, `mid`, `fid`, `db`) VALUES
(1, 2, 1, 10),
(2, 2, 2, 2),
(3, 2, 3, 5),
(4, 2, 4, 6),
(5, 3, 1, 5),
(6, 3, 2, 5),
(7, 3, 3, 5),
(8, 3, 4, 5),
(9, 4, 1, 5),
(10, 4, 2, 5),
(11, 4, 3, 5),
(12, 4, 4, 5),
(13, 5, 1, 1),
(14, 5, 2, 1),
(15, 5, 3, 1),
(16, 5, 4, 1),
(17, 6, 1, 5),
(18, 6, 2, 5),
(19, 6, 3, 5),
(20, 6, 4, 5);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fish`
--

CREATE TABLE `fish` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `db` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `fish`
--

INSERT INTO `fish` (`id`, `name`, `db`, `price`, `visibility`) VALUES
(1, 'Ékfoltos razbóra', 15, 400, 1),
(2, 'Tejút dánió', 16, 500, 1),
(3, 'Sziámi algázó', 10, 600, 1),
(4, 'Törpe szívóharcsa', 12, 700, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `movement`
--

CREATE TABLE `movement` (
  `id` int(11) NOT NULL,
  `code` tinyint(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `movement`
--

INSERT INTO `movement` (`id`, `code`, `timestamp`) VALUES
(1, 1, '2020-12-21 19:52:49'),
(2, 1, '2020-12-21 20:00:28'),
(3, 1, '2020-12-21 20:34:28'),
(4, 1, '2020-12-21 20:35:13'),
(5, 2, '2020-12-22 13:55:03'),
(6, 1, '2020-12-22 13:55:13');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `conn_move`
--
ALTER TABLE `conn_move`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `fish`
--
ALTER TABLE `fish`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `movement`
--
ALTER TABLE `movement`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `conn_move`
--
ALTER TABLE `conn_move`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT a táblához `fish`
--
ALTER TABLE `fish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT a táblához `movement`
--
ALTER TABLE `movement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
