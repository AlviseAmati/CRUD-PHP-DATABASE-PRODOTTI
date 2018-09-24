-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Set 13, 2018 alle 16:39
-- Versione del server: 10.1.35-MariaDB
-- Versione PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appphp`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `log`
--

CREATE TABLE `log` (
  `IdLOG` int(11) NOT NULL,
  `IdOperazione` int(11) NOT NULL,
  `DataOra` char(14) CHARACTER SET latin1 NOT NULL,
  `IdUtente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `log`
--

INSERT INTO `log` (`IdLOG`, `IdOperazione`, `DataOra`, `IdUtente`) VALUES
(3, 1, '20000101 12:30', 7),
(4, 2, '20000202 12:30', 8);

-- --------------------------------------------------------

--
-- Struttura della tabella `magazzino`
--

CREATE TABLE `magazzino` (
  `IdMagazzino` int(11) NOT NULL,
  `DescrizioneMagazzino` varchar(45) NOT NULL,
  `Ubicazione` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `magazzino`
--

INSERT INTO `magazzino` (`IdMagazzino`, `DescrizioneMagazzino`, `Ubicazione`) VALUES
(1, 'Ciao', 'Rimini'),
(2, 'CIAO', 'Bologna');

-- --------------------------------------------------------

--
-- Struttura della tabella `operazionieseguite`
--

CREATE TABLE `operazionieseguite` (
  `IdOperazione` int(11) NOT NULL,
  `DescrizioneOperazione` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `operazionieseguite`
--

INSERT INTO `operazionieseguite` (`IdOperazione`, `DescrizioneOperazione`) VALUES
(1, 'Delli è morto'),
(2, 'Delli è rinato');

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `IdProdotti` int(11) NOT NULL,
  `Descrizione` varchar(45) NOT NULL,
  `Prezzo` int(11) NOT NULL,
  `QuantitaDisponibile` int(11) NOT NULL,
  `IdMagazzino` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`IdProdotti`, `Descrizione`, `Prezzo`, `QuantitaDisponibile`, `IdMagazzino`) VALUES
(3, 'Computer', 100, 200, 1),
(4, 'Computer', 300, 150, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `ruoli`
--

CREATE TABLE `ruoli` (
  `IdRuoli` int(11) NOT NULL,
  `DescrizioneRuolo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ruoli`
--

INSERT INTO `ruoli` (`IdRuoli`, `DescrizioneRuolo`) VALUES
(1, 'Ospite'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `IdUtente` int(11) NOT NULL,
  `NomeUtente` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Cognome` varchar(45) NOT NULL,
  `Mail` varchar(45) NOT NULL,
  `DataNascita` int(8) NOT NULL,
  `Eta` tinyint(3) NOT NULL,
  `Indirizzo` varchar(45) NOT NULL,
  `CodiceFIscale` varchar(16) NOT NULL,
  `IdRuolo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`IdUtente`, `NomeUtente`, `Password`, `Nome`, `Cognome`, `Mail`, `DataNascita`, `Eta`, `Indirizzo`, `CodiceFIscale`, `IdRuolo`) VALUES
(7, 'Delli', 'delli10', 'Manuel', 'Delucca', 'manuel.delucca@gmail.com', 20000101, 18, 'ciao', 'dfsdfsdfs231', 1),
(8, 'Delli', 'delli20', 'Manuel', 'Delucca', 'manuel.delli@gmail.com', 20000202, 18, 'ciao1', 'fsdfvxcvad123', 2);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`IdLOG`),
  ADD KEY `LOGUtenti` (`IdUtente`),
  ADD KEY `LOGOperazioni` (`IdOperazione`);

--
-- Indici per le tabelle `magazzino`
--
ALTER TABLE `magazzino`
  ADD PRIMARY KEY (`IdMagazzino`);

--
-- Indici per le tabelle `operazionieseguite`
--
ALTER TABLE `operazionieseguite`
  ADD PRIMARY KEY (`IdOperazione`);

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`IdProdotti`),
  ADD KEY `IdMagazzino` (`IdMagazzino`);

--
-- Indici per le tabelle `ruoli`
--
ALTER TABLE `ruoli`
  ADD PRIMARY KEY (`IdRuoli`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`IdUtente`),
  ADD KEY `RuoliUtente` (`IdRuolo`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `log`
--
ALTER TABLE `log`
  MODIFY `IdLOG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `magazzino`
--
ALTER TABLE `magazzino`
  MODIFY `IdMagazzino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `operazionieseguite`
--
ALTER TABLE `operazionieseguite`
  MODIFY `IdOperazione` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `IdProdotti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `ruoli`
--
ALTER TABLE `ruoli`
  MODIFY `IdRuoli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `IdUtente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `LOGOperazioni` FOREIGN KEY (`IdOperazione`) REFERENCES `operazionieseguite` (`IdOperazione`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `LOGUtenti` FOREIGN KEY (`IdUtente`) REFERENCES `utenti` (`IdUtente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  ADD CONSTRAINT `IdMagazzino` FOREIGN KEY (`IdMagazzino`) REFERENCES `magazzino` (`IdMagazzino`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `utenti`
--
ALTER TABLE `utenti`
  ADD CONSTRAINT `RuoliUtente` FOREIGN KEY (`IdRuolo`) REFERENCES `ruoli` (`IdRuoli`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
