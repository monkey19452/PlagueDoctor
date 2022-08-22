-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Gru 2021, 22:39
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Baza danych: `plague_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'adm1', '$2y$10$38aYwpp7sx4c2vsj1/cjN.0c1CfUqeaoZrtzQKPg60b7GAaDT4JNG', '2021-12-08 11:22:54'),
(2, 'adm2', '$2y$10$jZf1gb3uzh.rAbDFJmOTQusyDxguR0AK7geAVxlpNg0LTrbK0gC.a', '2021-12-08 12:01:37');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_polish_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `category` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `priority` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `insurance_nfz` varchar(3) COLLATE utf8_polish_ci DEFAULT NULL,
  `place_in_cemetery` varchar(3) COLLATE utf8_polish_ci NOT NULL,
  `question` text COLLATE utf8_polish_ci NOT NULL,
  `answer` varchar(30) COLLATE utf8_polish_ci NOT NULL DEFAULT 'Oczekuje'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `category`, `priority`, `insurance_nfz`, `place_in_cemetery`, `question`, `answer`) VALUES
(2, '', '', 'Jakosc uslug', 'Niski', 'on', 'on', '', 'Oczekuje'),
(3, 'asdasd', 'sadasd@w', 'Ceny uslug', 'Niski', 'on', 'on', 'dddddddddddddddddddddddddddddddd', 'Dziękujemy. Zapraszamy ponowni'),
(4, '', '', 'Jakosc uslug', 'Niski', 'on', 'on', '', 'Oczekuje'),
(5, 'asd', 'asd@asd', '', 'Niski', 'on', 'on', 'asd', 'Oczekuje'),
(6, 'artu', 'art@qarff', 'Inne', 'Wysoki', 'on', 'on', 'art', 'Oczekuje'),
(7, '', 's@w', 'Jakosc uslug', 'Niski', 'on', 'on', 'asd', 'Oczekuje'),
(8, '', 's@eee', 'Jakosc uslug', 'Niski', 'on', 'on', 'asdasdasdsad', 'Oczekuje'),
(9, '', 's@eee', 'Jakosc uslug', 'Niski', 'on', 'on', 'asdasdasdsad', 'Oczekuje'),
(10, 'asdsad', '2@21213213', 'Jakosc uslug', 'Niski', 'on', 'on', 'sd', 'Ignorujemy go, może się znudzi'),
(11, 'asdsad', '2@21213213', 'Jakosc uslug', 'Niski', 'on', 'on', 'sd', 'Oczekuje'),
(12, 'asd', '2@ed', 'Skarga', 'Niski', 'on', 'on', 'dsf', 'Oczekuje'),
(13, 'exit', '2@2', 'Jakosc uslug', 'Niski', 'on', 'on', 'we', 'Ignorujemy go, może się znudzi'),
(14, 'exit2', '234@3', 'Jakosc uslug', 'Niski', 'on', 'on', '888', 'Oczekuje'),
(15, 'asdsad', '2@444444444444', 'Jakosc uslug', 'Niski', 'on', 'on', 'm', 'Oczekuje'),
(16, '', '', 'Jakosc uslug', 'Niski', 'on', 'on', '', 'Oczekuje'),
(17, 'andrzej', 'duda@pis.pl', 'Jakosc uslug', 'Niski', 'on', 'on', 'nie mam długopisów', 'Oczekuje'),
(18, 'sdffd', 'sdf@e', 'Inne', 'Wysoki', 'on', 'on', 'dsfds', 'Oczekuje');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, '234@ewf'),
(2, 'sdfds@ewr'),
(3, 'sdfds@ewr'),
(4, 'artur@wp.pl'),
(5, '46@d'),
(6, '46@d'),
(7, '46@d'),
(8, 'ds@w'),
(9, '23443243@dsa'),
(10, 'asd@123456'),
(11, 'andrzej@duda.pl'),
(12, 'w@w'),
(13, '23@234'),
(15, 'kurski@tvp.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `upr` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `upr`) VALUES
(17, '111111', '$2y$10$hRhyjmBxRUn6Xj5LpY4ahO/by6Q0gggiESmFUncrZkr.OHWRfjqyS', '2021-12-08 16:57:55', 0),
(19, '11111111', '$2y$10$hr02.D.ZMD3e4vZ9pOLAHuYNm2C1jivqIUT6Gy04p2jWEIB.ZnP6K', '2021-12-08 17:02:13', 0),
(20, '222222', '$2y$10$zlkt5RF81nJeLn/gNXkIgOVDBmLKRaiBNzjsZAPGaGBeLqnkdQZKe', '2021-12-09 12:35:34', 0),
(21, '666666q', '$2y$10$6HRbdzmozDabxXyMFtbaIe9kA5jIWQRtCgpBMUx42R3A1763rCEHy', '2021-12-09 20:00:17', 0),
(22, '666666a', '$2y$10$k14wbpQZqB48E9uTJTz6CeNcsBgvSuPc2tQJVf4gbcN56pWGKRR4m', '2021-12-09 20:00:56', 0),
(23, '88888888', '$2y$10$9h.npJ7O3fCKCPcGM/Ik2ukasomiC30H4/YTvGLYhfoY3H1uf.hum', '2021-12-10 14:30:55', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `visit`
--

CREATE TABLE `visit` (
  `id` int(11) NOT NULL,
  `userlogin` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `whatspain` text COLLATE utf8_polish_ci NOT NULL,
  `doctors` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `clinics` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `visitdate` date NOT NULL,
  `robot` varchar(3) COLLATE utf8_polish_ci NOT NULL,
  `currentUs` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `answer` varchar(20) COLLATE utf8_polish_ci NOT NULL DEFAULT 'Oczekuje'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `visit`
--

INSERT INTO `visit` (`id`, `userlogin`, `firstname`, `lastname`, `whatspain`, `doctors`, `clinics`, `visitdate`, `robot`, `currentUs`, `answer`) VALUES
(27, 'adm1', 'dd', 'kk', 'kk', 'oetker', 'gdansk', '2021-12-29', 'on', 'adm1', 'Odrzucona'),
(28, '111111', '11111133333', 'jestem 111111', 'd', 'alban', 'warszawa', '2021-12-30', 'on', '111111', 'Odrzucona'),
(29, '666666a', 'sad', 'jestem 666666a', 's', 'dre', 'poznan', '2021-12-15', 'on', '666666a', 'Odrzucona'),
(30, 'adm2', 'asdasddasdas', 'asdsadasd', ' vvvvv', 'alban', 'warszawa', '2021-12-28', 'on', 'adm1', 'Zaakceptowana'),
(31, 'adm1', 'assd', 'jestem zalogowany jako adm1', 'd', 'alban', 'warszawa', '2021-12-23', 'on', 'adm1', 'Oczekuje'),
(32, '', '', '', '', '', '', '0000-00-00', '', '', 'Zaakceptowana'),
(33, '', '', '', '', '', '', '0000-00-00', '', '', 'Odrzucona'),
(34, '', '', '', '', '', '', '0000-00-00', '', '', 'Zaakceptowana'),
(35, '', '', '', '', '', '', '0000-00-00', '', '', 'Oczekuje'),
(36, '', '', '', '', '', '', '0000-00-00', '', '', 'Odrzucona'),
(37, 'adm1', 'admins', 'users', 'wwszystko', 'alban', 'gdansk', '2021-11-29', 'on', 'adm1', 'Oczekuje'),
(38, 'adm1', 'admin', 'kowaski', 'Prosze odrzucic ten wniosek', 'oetker', 'poznan', '2022-01-07', 'on', 'adm1', 'Oczekuje'),
(39, '222222', 'my login 222222', 'nie mam ', 'nic mnie nie boli', 'dre', 'gdansk', '2021-11-10', 'on', '222222', 'Oczekuje'),
(40, '111111', 'asdddd', 'aaa', 'sd', 'dre', 'poznan', '2021-12-28', 'on', '111111', 'Oczekuje'),
(41, '111111', 'jan', 'jankowski', 'wszystko mnie boli', 'alban', 'gdansk', '2022-01-09', 'on', '111111', 'Oczekuje'),
(42, '666666a', '666', '777', '888', 'alban', 'poznan', '2022-01-28', 'on', '666666a', 'Oczekuje');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT dla tabeli `visit`
--
ALTER TABLE `visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT