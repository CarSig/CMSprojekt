-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 11:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `published_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `published_at`) VALUES
(1, 'Američka Moderna: Naše cjepivo je gotovo 95% učinkovito', 'AMERIČKA farmaceutska kompanija Moderna upravo je objavila da njezino cjepivo protiv koronavirusa ima učinkovitost od gotovo 95%, javlja BBC.\r\n\r\nTo znači da je od zaraze zaštićeno 945 od 1000 ljudi koji se njime cijepe.\r\n\r\n', '2020-11-09 09:26:53'),
(2, 'Stožer održao presicu. Božinović o ilegalnim tulumima: Policija se pokrenula', 'NACIONALNI stožer civilne zaštite održao je redovitu konferenciju za novinare na kojoj su objavljene najnovije informacije o koronavirusu.\r\n\r\nUoči presice Stožer je objavio da je u posljednja 24 sata zabilježeno 1313 novih slučajeva zaraze virusom SARS-CoV-2 te da je broj aktivnih slučajeva u Hrvatskoj danas ukupno 15.699.\r\n\r\nMeđu njima je 1816 pacijenata na bolničkom liječenju, od čega je na respiratoru 191 pacijent. Preminule su 33 osobe.\r\n\r\nOd 25. veljače 2020., kada je zabilježen prvi slučaj zaraze u Hrvatskoj, do danas ukupno je zabilježeno 85.519 osoba zaraženih novim koronavirusom, od kojih je 1082 preminulo. Ukupno se oporavilo 68.738 osoba, a od toga 2507 u posljednja 24 sata.\r\n\r\nU samoizolaciji je trenutno 35.071 osoba.\r\n\r\nDo danas su ukupno testirane 624.393 osobe, od toga 4861 u posljednja 24 sata.', '2020-11-10 16:15:18'),
(4, 'Brodsko-posavska županija uvodi strože mjere', 'EPIDEMIOLOŠKA situacija na području Brodsko-posavske županije izrazito je nepovoljna pa je u ponedjeljak Stožer civilne zaštite te županije uputio xzahtjev Nacionalnom stožeru za uvođenje strožih mjera među kojima je i ona da se broj osoba na javnim skupovima smanji s 50 na 30.\r\n\r\nKako je rečeno u ponedjeljak na konferenciji za novinare u Slavonskom Brodu, zbog pogoršane situacije, Županijski stožer civilne zaštite u ponedjeljak je uputio zahtjev Nacionalnom stožeru da se uvedu strože epidemiološke mjere.  \r\n\r\nBroj osoba na javnim skupovima smanjio bi se s 50 na 30, a smanjio bi se i broj osoba koje mogu biti u prodavaonicama, ovisno o njihovoj veličini.', NULL),
(6, 'Milanović prihvaća sjednicu Vijeća za nacionalnu sigurnost, ali ima dva prigovora', 'PREDSTOJNIK Ureda predsjednika RH Orsat Miljenić odgovorio je danas predstojniku Ureda premijera Zvonimiru Frki Petešiću da je Zoran Milanović spreman prihvatiti 20. studenoga kao datum sjednice Vijeća za nacionalnu sigurnost nakon usuglašavanja određenih pitanja.\r\n\r\nRadi se o dopisu koji je Frka Petešić uputio 12. studenoga, a Miljenić u odgovoru poručuje da predsjednik republike i dalje smatra kako je takav način \"posredne“ komunikacije neprimjeren, pogotovo kada je riječ o važnim pitanjima za Hrvatsku.', '2020-11-16 13:34:21'),
(7, 'Mrtvi pijani zaprešićki komunalci poispadali iz kombija, pogledajte snimku', 'SNIMKA radnika zaprešićke komunalne tvrtke Vodoopskrba i odvodnja koju je dobio Index kao da je ispala iz stereotipnih šala, internetskih memova ili s neke od stranica koje skupljaju bizarne situacije.\r\n\r\nNa snimci koja se posljednjih nekoliko dana širi društvenim mrežama se vidi kako su zaprešićki komunalci poispadali mrtvi pijani iz službenog kombija i nemaju snage ustati. Obnevidjeli su od alkohola, moglo bi se reći.', '2020-11-15 10:36:20'),
(8, 'Švedska ograničila okupljanja na osam osoba, premijer: Bit će gore', 'ŠVEDSKI premijer Stefan Löfven rekao je u ponedjeljak da se broj ljudi koji se smiju okupljati smanjuje na 8 s dosadašnjih tristo.\r\n\r\n\"Bit će još gore, preuzmite odgovornost i svoju obvezu u zaustavljanju zaraze. Učinite to zbog sebe i zbog Švedske\", dvaput je, naglašavajući svaku riječ, ponovio švedski premijer Stefan Löfven u današnjem dramatičnom i iznenadnom obraćanju javnosti. Pritom je najavio da njegova vlada od 24. studenoga uvodi dosad najstrožu mjeru za suzbijanje pandemije koronavirusa - na javnim okupljanjima može sudjelovati maksimalno osam osoba. Dosad su bili dopušteni skupovi do 300 osoba. Sljedeće dvije mjere o kojima se razmišlja su preporuka da se ne putuje izvan domicilne regije i da nakon novogodišnjih praznika sve gimnazije i visokoškolske ustanove prijeđu na online nastavu. Obje su mjere bile uvedene tijekom proljetnog prvog vala.\r\n\r\nTakođer, kako piše Local.se, oni koji prekrše mjere i organiziraju veće događaje mogu biti novčano kažnjeni ili čak mogu završiti u zatvoru do šest mjeseci.', '2020-11-16 16:52:26'),
(15, 'Otpao još jedan stoper, Dalić krpa obranu. \"Fali nam i zadnji vezni\"', 'Za ostanak u elitnom razredu Lige nacija Hrvatska protiv Portugala mora ostvariti najmanje isti rezultat kao i Švedska protiv Francuske. Hrvatska je izjednačena sa Švedskom u međusobnom omjeru, imaju i istu gol-razliku, a Hrvatska je ispred Švedske jer je zabila više golova u svim utakmicama u skupini.\r\n\r\nMelnjak i Barišić su opcija na stoperu, ali vjerojatno će igrati Škorić\r\n\r\nIzbornik Zlatko Dalić zajedno s Lukom Modrićem odradio je press-konferenciju na kojoj je, između ostalog, govorio o sastavu koji bi sutra trebao istrčati na Poljud protiv aktualnog europskog prvaka.', '2020-11-17 01:49:00'),
(96, 'naslov1212', '1111111122222222222222', '2020-12-14 14:34:00'),
(98, 'Odvjetnik Miljević rekao što se događalo u klubu 11. studenog prošle godine', 'U istražnom zatvoru ostaje SDP-ov gradonačelnik Nove Gradiške i saborski zastupnik Vinko Grgić, o čijem će se mogućem izlasku na slobodu odlučivati u srijedu.\r\n\r\nU Remetincu je i prvoosumnjičeni vlasnik Elektrocentra Petek Krešo Petek kojem je oduzeta sloboda zbog opasnosti od utjecaja na svjedoke i ponavljanja nedjela. Zagrebački županijski sud bi o istražnom zatvoru za Peteka trebao odlučivati sutra.', '2020-12-16 16:32:00'),
(99, 'Tablica zaraženih, umrlih i izliječenih po državama - 16. prosinca 2020.', 'Tablica zaraženih, umrlih i izliječenih po državama - 16. prosinca 2020.\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pwhash` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `zip` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pwhash`, `zip`, `email`) VALUES
(23, 'enc', 'O7Cq', 22222, 'lovro.boric@gmail.com'),
(24, 'dave', 'LbuqQp0E', 11111, 'ivan.tomasevic@booking.com'),
(25, 'lboric', 'Lr+6Qw==', 10247, 'lovro.boric@gmail.com'),
(26, 'user1', 'b+z6BA==', 12442, 'sss.ss@gmail.com'),
(27, 'testing', 'Kru6RA==', 12121, 'testmail@aaa.ss'),
(44, 'aaaajde', 'Dr+6Q48CkZW61Cg=', 10247, 'lovro.boric@gmail.com'),
(45, 'match', 'Dr+6Q48fjJW61Cg=', 10247, 'lovro.boric@gmail.com'),
(46, 'KKOKOKO', 'Dr+6Q48fjJW61Cg=', 10247, 'lovro.boric@gmail.com'),
(47, 'dddddddddd', 'Dr+6Q48fjJW6', 10247, 'lovro.boric@gmail.com'),
(63, '611AWizlije', 'aO/4ca8ZhJ3ijH4=', 10247, 'lovro.boric@gmail.com'),
(64, '611AWizlije', 'aO/4ca8ZhJ3ijH4=', 10247, 'lovro.boric@gmail.com'),
(65, '611AWizlije', 'aO/4ca8ZhJ3ijH4=', 10247, 'lovro.boric@gmail.com'),
(66, 'lboricQQ111', 'MrymQpETr6C61yo=', 10247, 'lovro.boric@gmail.com'),
(67, 'UIIU12121aa', 'C5eAZclCz8O6h3o=', 10247, 'lovro.boric@gmail.com'),
(68, 'davedsadas111', 'C5eAZclCz8O6h3o=', 10247, 'lovro.boric@gmail.com'),
(69, 'USER12323232a', 'C42MYslCzcO41CibOQ==', 10247, 'lovro.boric@gmail.com'),
(70, 'NOVIuser12212', 'EJGfeY0Dm4O61CmYag==', 10247, 'lovro.boric@gmail.com'),
(71, 'krampuslav412K', 'NayoXYgFjZ3qkC+Yajw=', 10247, 'lovro.boric@gmail.com'),
(72, 'krampuslav4ASEQWW', 'NayoXYgFjZ3qkC/oCzJggbw=', 10247, 'lovro.boric@gmail.com'),
(73, 'krampuslav4ASEQWW11', 'NayoXYgFjZ3qkC/oCzJggbw=', 12211, 'lovro.boric@gmail.com'),
(74, 'krampuslav4ASEQWW11', 'NayoXYgFjZ3qkC/oCzJggbw=', 12211, 'lovro.boric@gmail.com'),
(75, 'krampuslav4ASEQWW11', 'NayoXYgFjZ3qkC/oCzJggbw=', 12211, 'lovro.boric@gmail.com'),
(76, 'krampuslav4ASEQWW11', 'NayoXYgFjZ3qkC/oCzJggbw=', 12211, 'lovro.boric@gmail.com'),
(77, 'krampuslav4ASEQWW11', 'NayoXYgFjZ3qkC/oCzJggbw=', 12211, 'lovro.boric@gmail.com'),
(78, 'krampuslav4ASEQWW11', 'NayoXYgFjZ3qkC/oCzJggbw=', 12211, 'lovro.boric@gmail.com'),
(79, 'usekroo111', 'H6u6VZMCkZ661yo=', 10247, 'lovro.boric@gmail.com'),
(80, 'krampuslav4', 'NYyMcaw/rMCy3i0=', 10247, '1lovro.boric@gmail.com'),
(81, 'Lboric987aaaaaa', 'ErymQpETx8m8', 10247, 'lovro.boric@gmail.com'),
(82, 'lboric1986A', 'MrymQpETz8iz0Fo=', 10247, 'lovro.boric@gmail.com'),
(83, 'lboric1986A', 'MrymQpETz8iz0Fo=', 10247, 'lovro.boric@gmail.com'),
(84, 'noviKorisnik1', 'MLG/WbMfjJj4iHLCaQ==', 10247, 'l.boric@gmail.com'),
(85, 'OPetnovisuer1', 'EY6sRJYfiJj4k37baQ==', 10247, 'lovro.boric@gmail.com'),
(86, 'nadajmoiseZadnji', 'ML+tUZIdkZj4g0HIPBlbvw==', 10247, 'lovro.boric@gmail.com'),
(87, 'lboricnadajmoiseZadnji', 'ML+tUZIdkZj4g0HIPBlbv9o=', 10247, 'lovro.boric@gmail.com'),
(88, 'lboricnadajmoiseZadnji', 'ML+tUZIdkZj4g0HIPBlbv9o=', 10247, 'lovro.boric@gmail.com'),
(89, 'retusuA!121', 'LLu9RYsFv9C61Co=', 10247, 'lovro.boric@gmail.com'),
(90, 'retusuA!121', 'LLu9RYsFv9C61Co=', 10247, 'lovro.boric@gmail.com'),
(91, 'krampuslav4ewqeA', 'NayoXYgFjZ3qkC/MLwZUlw==', 10247, 'lovro.boric@gmail.com'),
(92, 'rootuserA12', 'LLGmRI0Dm4PK1yk=', 10247, 'lovro.boric@gmail.com'),
(93, 'krampuslav4asasA', 'NayoXYgFjZ3qkC/IKxZClw==', 10247, 'lovro.boric@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
