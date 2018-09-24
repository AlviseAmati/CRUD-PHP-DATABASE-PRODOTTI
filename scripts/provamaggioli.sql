-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Set 24, 2018 alle 09:09
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
-- Database: `provamaggioli`
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

-- --------------------------------------------------------

--
-- Struttura della tabella `logoperazioni`
--

CREATE TABLE `logoperazioni` (
  `IdLog` int(11) NOT NULL,
  `IdNome` varchar(45) COLLATE utf8_bin NOT NULL,
  `DataOra` varchar(45) COLLATE utf8_bin NOT NULL,
  `DescrizioneOperazione` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `logoperazioni`
--

INSERT INTO `logoperazioni` (`IdLog`, `IdNome`, `DataOra`, `DescrizioneOperazione`) VALUES
(317, 'Dario', '20/09/2018 17:15', 'Accesso'),
(318, 'Dario', '20/09/2018 17:17', 'Inserimento  dalla tabella Prodotti '),
(319, 'Dario', '20/09/2018 17:17', 'Inserimento  dalla tabella Prodotti '),
(320, 'Dario', '20/09/2018 17:17', 'Accesso'),
(321, 'Dario', '20/09/2018 17:17', 'Eliminazione dalla tabella Prodotti'),
(322, 'Dario', '20/09/2018 17:18', 'Inserimento  dalla tabella Magazzini'),
(323, 'Dario', '20/09/2018 17:18', 'Eliminazione dalla tabella Magazzini'),
(324, 'Dario', '20/09/2018 17:18', 'Accesso'),
(325, 'Dario', '20/09/2018 17:18', 'Accesso'),
(326, 'Dario', '20/09/2018 17:21', 'Accesso'),
(327, 'Dario', '20/09/2018 17:21', 'Uscita'),
(328, 'Dario', '20/09/2018 17:21', 'Accesso'),
(329, 'Dario', '21/09/2018 8:28', 'Accesso'),
(330, 'Dario', '21/09/2018 8:29', 'Inserimento  dalla tabella Prodotti '),
(331, 'Dario', '21/09/2018 8:29', 'Modifica'),
(332, 'Dario', '21/09/2018 8:29', 'Modifica'),
(333, 'Dario', '21/09/2018 8:29', 'Eliminazione dalla tabella Prodotti'),
(334, 'Dario', '21/09/2018 8:33', 'Inserimento  dalla tabella Magazzini'),
(335, 'Dario', '21/09/2018 8:33', 'Modifica'),
(336, 'Dario', '21/09/2018 8:33', 'Modifica'),
(337, 'Dario', '21/09/2018 8:33', 'Eliminazione dalla tabella Magazzini'),
(338, 'Dario', '21/09/2018 8:34', 'Modifica'),
(339, 'Dario', '21/09/2018 8:34', 'Eliminazione dalla tabella Magazzini'),
(340, 'Dario', '21/09/2018 8:34', 'Eliminazione dalla tabella Magazzini'),
(341, 'Dario', '21/09/2018 8:34', 'Eliminazione dalla tabella Magazzini'),
(342, 'Dario', '21/09/2018 8:49', 'Accesso'),
(343, 'Dario', '21/09/2018 9:04', 'Modifica dalla tabella Magazzini '),
(344, 'Dario', '21/09/2018 9:04', 'Modifica dalla tabella Prodotti '),
(345, 'Dario', '21/09/2018 9:04', 'Accesso'),
(346, 'Dario', '21/09/2018 9:04', 'Accesso'),
(347, 'Dario', '21/09/2018 9:04', 'Uscita'),
(348, 'Dario', '21/09/2018 9:04', 'Accesso'),
(349, 'Dario', '21/09/2018 9:06', 'Accesso'),
(350, 'Dario', '21/09/2018 9:06', 'Eliminazione dalla tabella Magazzini'),
(351, 'Dario', '21/09/2018 9:06', 'Eliminazione dalla tabella Magazzini'),
(352, 'Dario', '21/09/2018 9:06', 'Eliminazione dalla tabella Magazzini'),
(353, 'Dario', '21/09/2018 9:06', 'Eliminazione dalla tabella Magazzini'),
(354, 'Dario', '21/09/2018 9:06', 'Eliminazione dalla tabella Magazzini'),
(355, 'Dario', '21/09/2018 9:06', 'Eliminazione dalla tabella Magazzini'),
(356, 'Dario', '21/09/2018 9:07', 'Inserimento  dalla tabella Prodotti '),
(357, 'Dario', '21/09/2018 9:07', 'Eliminazione dalla tabella Prodotti'),
(358, 'Dario', '21/09/2018 9:07', 'Accesso'),
(359, 'Dario', '21/09/2018 9:08', 'Inserimento  dalla tabella Magazzini'),
(360, 'Dario', '21/09/2018 9:08', 'Inserimento  dalla tabella Magazzini'),
(361, 'Dario', '21/09/2018 9:08', 'Inserimento  dalla tabella Magazzini'),
(362, 'Dario', '21/09/2018 9:09', 'Modifica dalla tabella Magazzini '),
(363, 'Dario', '21/09/2018 9:09', 'Modifica dalla tabella Magazzini '),
(364, 'Dario', '21/09/2018 9:10', 'Modifica dalla tabella Magazzini '),
(365, 'Dario', '21/09/2018 9:10', 'Inserimento  dalla tabella Prodotti '),
(366, 'Dario', '21/09/2018 9:25', 'Accesso'),
(367, 'Dario', '21/09/2018 9:41', 'Inserimento  dalla tabella Magazzini'),
(368, 'Dario', '21/09/2018 9:41', 'Inserimento  dalla tabella Prodotti '),
(369, 'Dario', '21/09/2018 10:02', 'Accesso'),
(370, 'Dario', '21/09/2018 10:08', 'Accesso'),
(371, '212', '21/09/2018 10:08', 'Inserimento  nella tabella Utenti'),
(372, '22', '21/09/2018 10:09', 'Inserimento  nella tabella Utenti'),
(373, 'Dario', '21/09/2018 10:14', 'Accesso'),
(374, 'Dario', '21/09/2018 10:14', 'Eliminazione dalla tabella Utenti'),
(375, 'Dario', '21/09/2018 10:14', 'Eliminazione dalla tabella Utenti'),
(376, 'Dario', '21/09/2018 10:15', 'Eliminazione dalla tabella Utenti'),
(377, 'Dario', '21/09/2018 10:15', 'Eliminazione dalla tabella Utenti'),
(378, 'Dario', '21/09/2018 10:17', 'Eliminazione dalla tabella Utenti'),
(379, '222', '21/09/2018 10:17', 'Inserimento  nella tabella Utenti'),
(380, 'Dario', '21/09/2018 10:17', 'Uscita'),
(381, '222', '21/09/2018 10:17', 'Accesso'),
(382, '222', '21/09/2018 10:17', 'Uscita'),
(383, '222', '21/09/2018 10:41', 'Accesso'),
(384, 'Dario', '21/09/2018 10:41', 'Accesso'),
(385, 'Dario', '21/09/2018 10:42', 'Modifica dalla tabella Magazzini '),
(386, 'Dario', '21/09/2018 10:42', 'Modifica dalla tabella Magazzini '),
(387, 'Dario', '21/09/2018 10:44', 'Modifica'),
(388, '222111', '21/09/2018 10:47', 'Modifica dalla tabella Magazzini '),
(389, 'Dario', '21/09/2018 10:47', 'Accesso'),
(390, '2221221', '21/09/2018 10:49', 'Modifica dalla tabella Magazzini '),
(391, '2222223', '21/09/2018 10:50', 'Modifica dalla tabella Magazzini '),
(392, '222ddd', '21/09/2018 10:51', 'Modifica dalla tabella Magazzini '),
(393, '22222111', '21/09/2018 10:54', 'Modifica dalla tabella Magazzini '),
(394, 'Dario', '21/09/2018 10:56', 'Accesso'),
(395, 'Dario', '21/09/2018 11:04', 'Accesso'),
(396, 'Dario', '21/09/2018 11:05', 'Accesso'),
(397, 'Dario', '21/09/2018 11:06', 'Accesso'),
(398, 'Dario', '21/09/2018 11:06', 'Uscita'),
(399, 'Dario', '21/09/2018 11:06', 'Accesso'),
(400, 'Delli', '21/09/2018 11:07', 'Accesso'),
(401, 'Delli', '21/09/2018 11:07', 'Accesso'),
(402, 'Dario', '21/09/2018 11:07', 'Accesso'),
(403, 'Dario', '21/09/2018 11:18', 'Accesso'),
(404, 'Dario', '21/09/2018 11:19', 'Visualizzazione nella tabella Prodotti'),
(405, 'Dario', '21/09/2018 11:20', 'Visualizzazione nella tabella Magazzini'),
(406, 'Dario', '21/09/2018 11:20', 'Visualizzazione nella tabella Utenti'),
(407, 'Dario', '21/09/2018 11:20', 'Visualizzazione nella tabella Ruoli'),
(408, 'Delli', '21/09/2018 11:22', 'Accesso'),
(409, 'Delli', '21/09/2018 11:22', 'Visualizzazione nella tabella Prodotti'),
(410, 'Delli', '21/09/2018 11:22', 'Uscita'),
(411, 'Dario', '21/09/2018 11:22', 'Accesso'),
(412, 'Dario', '21/09/2018 11:23', 'Visualizzazione nella tabella Prodotti'),
(413, 'Dario', '21/09/2018 11:23', 'Inserimento  nella tabella Prodotti '),
(414, 'Dario', '21/09/2018 11:23', 'Visualizzazione nella tabella Prodotti'),
(415, 'Dario', '21/09/2018 11:24', 'Visualizzazione nella tabella Ruoli'),
(416, 'Dario', '21/09/2018 11:24', 'Visualizzazione nella tabella Ruoli'),
(417, 'Dario', '21/09/2018 11:24', 'Visualizzazione nella tabella Utenti'),
(418, 'Dario', '21/09/2018 11:24', 'Eliminazione dalla tabella Utenti'),
(419, 'Dario', '21/09/2018 11:24', 'Visualizzazione nella tabella Utenti'),
(420, 'Dario', '21/09/2018 11:26', 'Modifica'),
(421, 'Delli', '21/09/2018 11:26', 'Modifica nella tabella Utenti '),
(422, 'Dario', '21/09/2018 11:26', 'Visualizzazione nella tabella Utenti'),
(423, 'Dario', '21/09/2018 11:26', 'Eliminazione dalla tabella Utenti'),
(424, 'Dario', '21/09/2018 11:26', 'Visualizzazione nella tabella Utenti'),
(425, '2', '21/09/2018 11:28', 'Inserimento  nella tabella Utenti'),
(426, 'Dario', '21/09/2018 11:28', 'Visualizzazione nella tabella Utenti'),
(427, 'Delli', '21/09/2018 11:30', 'Inserimento  nella tabella Utenti'),
(428, 'Dario', '21/09/2018 11:30', 'Visualizzazione nella tabella Utenti'),
(429, 'Dario', '21/09/2018 11:30', 'Modifica nella tabella Utenti '),
(430, 'Dario', '21/09/2018 11:30', 'Visualizzazione nella tabella Utenti'),
(431, 'Dario', '21/09/2018 11:30', 'Visualizzazione nella tabella Utenti'),
(432, 'Dario', '21/09/2018 11:31', 'Modifica nella tabella Utenti '),
(433, 'Dario', '21/09/2018 11:31', 'Visualizzazione nella tabella Utenti'),
(434, 'Dario', '21/09/2018 11:31', 'Visualizzazione nella tabella Prodotti'),
(435, 'Dario', '21/09/2018 11:32', 'Modifica nella tabella Prodotti '),
(436, 'Dario', '21/09/2018 11:32', 'Visualizzazione nella tabella Prodotti'),
(437, 'Dario', '21/09/2018 11:32', 'Visualizzazione nella tabella Magazzini'),
(438, 'Dario', '21/09/2018 11:32', 'Modifica nella tabella Magazzini '),
(439, 'Dario', '21/09/2018 11:32', 'Visualizzazione nella tabella Magazzini'),
(440, 'Dario', '21/09/2018 11:33', 'Visualizzazione nella tabella Prodotti'),
(441, 'Dario', '21/09/2018 11:33', 'Modifica nella tabella Prodotti '),
(442, 'Dario', '21/09/2018 11:33', 'Visualizzazione nella tabella Prodotti'),
(443, 'Dario', '21/09/2018 11:33', 'Modifica nella tabella Prodotti '),
(444, 'Dario', '21/09/2018 11:33', 'Visualizzazione nella tabella Prodotti'),
(445, 'Dario', '21/09/2018 11:33', 'Visualizzazione nella tabella Prodotti'),
(446, 'Dario', '21/09/2018 11:34', 'Modifica nella tabella Prodotti '),
(447, 'Dario', '21/09/2018 11:34', 'Visualizzazione nella tabella Prodotti'),
(448, 'Dario', '21/09/2018 11:34', 'Inserimento  nella tabella Prodotti '),
(449, 'Dario', '21/09/2018 11:34', 'Visualizzazione nella tabella Prodotti'),
(450, 'Dario', '21/09/2018 11:34', 'Modifica nella tabella Prodotti '),
(451, 'Dario', '21/09/2018 11:35', 'Modifica nella tabella Prodotti '),
(452, 'Dario', '21/09/2018 11:35', 'Visualizzazione nella tabella Prodotti'),
(453, 'Dario', '21/09/2018 11:36', 'Modifica nella tabella Prodotti '),
(454, 'Dario', '21/09/2018 11:36', 'Visualizzazione nella tabella Prodotti'),
(455, 'Dario', '21/09/2018 11:36', 'Modifica nella tabella Prodotti '),
(456, 'Dario', '21/09/2018 11:36', 'Modifica nella tabella Prodotti '),
(457, 'Dario', '21/09/2018 11:36', 'Modifica nella tabella Prodotti '),
(458, 'Dario', '21/09/2018 11:36', 'Visualizzazione nella tabella Prodotti'),
(459, 'Dario', '21/09/2018 11:37', 'Visualizzazione nella tabella Prodotti'),
(460, 'Dario', '21/09/2018 11:42', 'Visualizzazione nella tabella Prodotti'),
(461, 'Dario', '21/09/2018 11:44', 'Visualizzazione nella tabella Prodotti'),
(462, 'Dario', '21/09/2018 11:44', 'Modifica nella tabella Prodotti '),
(463, 'Dario', '21/09/2018 11:44', 'Visualizzazione nella tabella Prodotti'),
(464, 'Dario', '21/09/2018 11:44', 'Modifica nella tabella Prodotti '),
(465, 'Dario', '21/09/2018 11:44', 'Visualizzazione nella tabella Prodotti'),
(466, 'Dario', '21/09/2018 11:45', 'Visualizzazione nella tabella Prodotti'),
(467, 'Dario', '21/09/2018 11:48', 'Accesso'),
(468, 'Dario', '21/09/2018 11:48', 'Visualizzazione nella tabella Prodotti'),
(469, 'Delli', '21/09/2018 11:49', 'Accesso'),
(470, 'Delli', '21/09/2018 11:49', 'Visualizzazione nella tabella Prodotti'),
(471, 'Delli', '21/09/2018 11:57', 'Visualizzazione nella tabella Prodotti'),
(472, 'Delli', '21/09/2018 11:57', 'Visualizzazione nella tabella '),
(473, 'Delli', '21/09/2018 11:58', 'Visualizzazione nella tabella Prodotti'),
(474, 'Delli', '21/09/2018 11:58', 'Visualizzazione nella tabella Prodotti'),
(475, 'Delli', '21/09/2018 11:58', 'Accesso'),
(476, 'Delli', '21/09/2018 11:58', 'Visualizzazione nella tabella Prodotti'),
(477, 'Delli', '21/09/2018 12:00', 'Visualizzazione nella tabella Prodotti'),
(478, 'Delli', '21/09/2018 12:02', 'Visualizzazione nella tabella Prodotti'),
(479, 'Delli', '21/09/2018 12:04', 'Accesso'),
(480, 'Delli', '21/09/2018 12:04', 'Visualizzazione nella tabella Prodotti'),
(481, 'Delli', '21/09/2018 12:04', 'Uscita'),
(482, 'Delli', '21/09/2018 12:05', 'Accesso'),
(483, 'Delli', '21/09/2018 12:05', 'Visualizzazione nella tabella Prodotti'),
(484, 'Delli', '21/09/2018 12:06', 'Visualizzazione nella tabella Prodotti'),
(485, 'Delli', '21/09/2018 12:06', 'Visualizzazione nella tabella Magazzini'),
(486, 'Delli', '21/09/2018 12:06', 'Eliminazione dalla tabella Magazzini'),
(487, 'Delli', '21/09/2018 12:06', 'Visualizzazione nella tabella Magazzini'),
(488, 'Delli', '21/09/2018 12:07', 'Eliminazione dalla tabella Magazzini'),
(489, 'Delli', '21/09/2018 12:07', 'Visualizzazione nella tabella Magazzini'),
(490, 'Delli', '21/09/2018 12:07', 'Eliminazione dalla tabella Magazzini'),
(491, 'Delli', '21/09/2018 12:07', 'Visualizzazione nella tabella Magazzini'),
(492, 'Delli', '21/09/2018 12:07', 'Eliminazione dalla tabella Magazzini'),
(493, 'Delli', '21/09/2018 12:07', 'Visualizzazione nella tabella Magazzini'),
(494, 'Delli', '21/09/2018 12:07', 'Eliminazione dalla tabella Magazzini'),
(495, 'Delli', '21/09/2018 12:07', 'Visualizzazione nella tabella Magazzini'),
(496, 'Delli', '21/09/2018 12:07', 'Eliminazione dalla tabella Magazzini'),
(497, 'Delli', '21/09/2018 12:07', 'Visualizzazione nella tabella Magazzini'),
(498, 'Delli', '21/09/2018 12:07', 'Eliminazione dalla tabella Magazzini'),
(499, 'Delli', '21/09/2018 12:07', 'Visualizzazione nella tabella Magazzini'),
(500, 'Delli', '21/09/2018 12:08', 'Visualizzazione nella tabella Magazzini'),
(501, 'Delli', '21/09/2018 12:08', 'Visualizzazione nella tabella Magazzini'),
(502, 'Delli', '21/09/2018 12:08', 'Visualizzazione nella tabella Magazzini'),
(503, 'Delli', '21/09/2018 12:09', 'Visualizzazione nella tabella Magazzini'),
(504, 'Delli', '21/09/2018 12:13', 'Visualizzazione nella tabella Magazzini'),
(505, 'Delli', '21/09/2018 12:13', 'Eliminazione dalla tabella Magazzini'),
(506, 'Delli', '21/09/2018 12:13', 'Visualizzazione nella tabella Magazzini'),
(507, 'Delli', '21/09/2018 12:13', 'Eliminazione dalla tabella Magazzini'),
(508, 'Delli', '21/09/2018 12:13', 'Visualizzazione nella tabella Magazzini'),
(509, 'Delli', '21/09/2018 12:13', 'Visualizzazione nella tabella Prodotti'),
(510, 'Delli', '21/09/2018 12:13', 'Visualizzazione nella tabella Prodotti'),
(511, 'Delli', '21/09/2018 12:13', 'Visualizzazione nella tabella Prodotti'),
(512, 'Delli', '21/09/2018 12:15', 'Visualizzazione nella tabella Prodotti'),
(513, 'Delli', '21/09/2018 12:16', 'Visualizzazione nella tabella Prodotti'),
(514, 'Delli', '21/09/2018 12:16', 'Visualizzazione nella tabella Prodotti'),
(515, 'Delli', '21/09/2018 12:17', 'Visualizzazione nella tabella Prodotti'),
(516, 'Delli', '21/09/2018 12:17', 'Visualizzazione nella tabella Magazzini'),
(517, 'Delli', '21/09/2018 12:19', 'Inserimento  nella tabella Magazzini'),
(518, 'Delli', '21/09/2018 12:19', 'Visualizzazione nella tabella Magazzini'),
(519, 'Delli', '21/09/2018 12:19', 'Visualizzazione nella tabella Prodotti'),
(520, 'Delli', '21/09/2018 12:20', 'Modifica nella tabella Prodotti '),
(521, 'Delli', '21/09/2018 12:20', 'Visualizzazione nella tabella Prodotti'),
(522, 'Delli', '21/09/2018 12:20', 'Inserimento  nella tabella Prodotti '),
(523, 'Delli', '21/09/2018 12:20', 'Visualizzazione nella tabella Prodotti'),
(524, 'Delli', '21/09/2018 12:21', 'Visualizzazione nella tabella Prodotti'),
(525, 'Delli', '21/09/2018 12:23', 'Visualizzazione nella tabella Prodotti'),
(526, 'Delli', '21/09/2018 12:25', 'Visualizzazione nella tabella Prodotti'),
(527, 'Delli', '21/09/2018 12:28', 'Visualizzazione nella tabella Prodotti'),
(528, 'Delli', '21/09/2018 12:28', 'Modifica nella tabella Prodotti '),
(529, 'Delli', '21/09/2018 12:28', 'Visualizzazione nella tabella Prodotti'),
(530, 'Delli', '21/09/2018 12:35', 'Visualizzazione nella tabella Prodotti'),
(531, 'Delli', '21/09/2018 12:35', 'Visualizzazione nella tabella Prodotti'),
(532, 'Delli', '21/09/2018 12:44', 'Visualizzazione nella tabella Prodotti'),
(533, 'Delli', '21/09/2018 12:47', 'Accesso'),
(534, 'Delli', '21/09/2018 12:47', 'Visualizzazione nella tabella Prodotti'),
(535, 'Delli', '21/09/2018 12:48', 'Visualizzazione nella tabella Prodotti'),
(536, 'Delli', '21/09/2018 12:49', 'Visualizzazione nella tabella Prodotti'),
(537, 'Delli', '21/09/2018 12:50', 'Visualizzazione nella tabella Prodotti'),
(538, 'Delli', '21/09/2018 12:50', 'Inserimento  nella tabella Prodotti '),
(539, 'Delli', '21/09/2018 12:50', 'Visualizzazione nella tabella Prodotti'),
(540, 'Delli', '21/09/2018 12:50', 'Visualizzazione nella tabella Prodotti'),
(541, 'Delli', '21/09/2018 12:51', 'Visualizzazione nella tabella Prodotti'),
(542, 'Delli', '21/09/2018 12:53', 'Visualizzazione nella tabella Prodotti'),
(543, 'Delli', '21/09/2018 12:54', 'Inserimento  nella tabella Prodotti '),
(544, 'Delli', '21/09/2018 12:54', 'Visualizzazione nella tabella Prodotti'),
(545, 'Delli', '21/09/2018 12:55', 'Visualizzazione nella tabella Prodotti'),
(546, 'Delli', '21/09/2018 12:55', 'Inserimento  nella tabella Prodotti '),
(547, 'Delli', '21/09/2018 12:55', 'Visualizzazione nella tabella Prodotti'),
(548, 'Delli', '21/09/2018 12:55', 'Visualizzazione nella tabella Prodotti'),
(549, 'Delli', '21/09/2018 12:56', 'Visualizzazione nella tabella Prodotti'),
(550, 'Delli', '21/09/2018 12:56', 'Visualizzazione nella tabella Prodotti'),
(551, 'Delli', '21/09/2018 12:56', 'Inserimento  nella tabella Prodotti '),
(552, 'Delli', '21/09/2018 12:56', 'Visualizzazione nella tabella Prodotti'),
(553, 'Delli', '21/09/2018 12:57', 'Modifica nella tabella Prodotti '),
(554, 'Delli', '21/09/2018 12:57', 'Visualizzazione nella tabella Prodotti'),
(555, 'Delli', '21/09/2018 12:57', 'Visualizzazione nella tabella Prodotti'),
(556, 'Delli', '21/09/2018 12:57', 'Modifica nella tabella Prodotti '),
(557, 'Delli', '21/09/2018 12:57', 'Visualizzazione nella tabella Prodotti'),
(558, 'Delli', '21/09/2018 14:16', 'Accesso'),
(559, 'Delli', '21/09/2018 14:18', 'Accesso'),
(560, 'Delli', '21/09/2018 14:19', 'Accesso'),
(561, 'Delli', '21/09/2018 14:20', 'Accesso'),
(562, 'Delli', '21/09/2018 14:22', 'Accesso'),
(563, 'Delli', '21/09/2018 14:24', 'Visualizzazione nella tabella Prodotti'),
(564, 'Delli', '21/09/2018 14:25', 'Inserimento  nella tabella Prodotti '),
(565, 'Delli', '21/09/2018 14:25', 'Visualizzazione nella tabella Prodotti'),
(566, 'Delli', '21/09/2018 14:26', 'Visualizzazione nella tabella Prodotti'),
(567, 'Delli', '21/09/2018 14:27', 'Inserimento  nella tabella Prodotti '),
(568, 'Delli', '21/09/2018 14:27', 'Visualizzazione nella tabella Prodotti'),
(569, 'Delli', '21/09/2018 14:27', 'Eliminazione dalla tabella Prodotti'),
(570, 'Delli', '21/09/2018 14:27', 'Visualizzazione nella tabella Prodotti'),
(571, 'Delli', '21/09/2018 14:27', 'Visualizzazione nella tabella Prodotti'),
(572, 'Delli', '21/09/2018 14:29', 'Modifica nella tabella Prodotti '),
(573, 'Delli', '21/09/2018 14:29', 'Visualizzazione nella tabella Prodotti'),
(574, 'Delli', '21/09/2018 14:30', 'Uscita'),
(575, 'Delli', '21/09/2018 14:30', 'Accesso'),
(576, 'Delli', '21/09/2018 14:30', 'Visualizzazione nella tabella Magazzini'),
(577, 'Delli', '21/09/2018 14:30', 'Inserimento  nella tabella Magazzini'),
(578, 'Delli', '21/09/2018 14:30', 'Visualizzazione nella tabella Magazzini'),
(579, 'Delli', '21/09/2018 14:31', 'Eliminazione dalla tabella Magazzini'),
(580, 'Delli', '21/09/2018 14:31', 'Visualizzazione nella tabella Magazzini'),
(581, 'Delli', '21/09/2018 14:31', 'Modifica nella tabella Magazzini '),
(582, 'Delli', '21/09/2018 14:31', 'Visualizzazione nella tabella Magazzini'),
(583, 'Delli', '21/09/2018 14:31', 'Visualizzazione nella tabella Magazzini'),
(584, 'Delli', '21/09/2018 14:31', 'Inserimento  nella tabella Magazzini'),
(585, 'Delli', '21/09/2018 14:31', 'Visualizzazione nella tabella Magazzini'),
(586, 'Delli', '21/09/2018 14:31', 'Visualizzazione nella tabella Magazzini'),
(587, 'Delli', '21/09/2018 14:31', 'Eliminazione dalla tabella Magazzini'),
(588, 'Delli', '21/09/2018 14:31', 'Visualizzazione nella tabella Magazzini'),
(589, 'Delli', '21/09/2018 14:31', 'Uscita'),
(590, 'Delli', '21/09/2018 14:31', 'Accesso'),
(591, 'Delli', '21/09/2018 14:34', 'Visualizzazione nella tabella Ruoli'),
(592, 'Delli', '21/09/2018 14:35', 'Visualizzazione nella tabella Utenti'),
(593, 'w', '21/09/2018 14:37', 'Inserimento  nella tabella Utenti'),
(594, 'Delli', '21/09/2018 14:37', 'Visualizzazione nella tabella Utenti'),
(595, 'Delli', '21/09/2018 14:38', 'Eliminazione dalla tabella Utenti'),
(596, 'Delli', '21/09/2018 14:38', 'Visualizzazione nella tabella Utenti'),
(597, '2', '21/09/2018 14:38', 'Modifica nella tabella Utenti '),
(598, 'Delli', '21/09/2018 14:38', 'Visualizzazione nella tabella Utenti'),
(599, 'Delli', '21/09/2018 14:42', 'Visualizzazione nella tabella Utenti'),
(600, 'Delli', '21/09/2018 14:43', 'Visualizzazione nella tabella Utenti'),
(601, 'Delli', '21/09/2018 14:44', 'Visualizzazione nella tabella Utenti'),
(602, 'Delli', '21/09/2018 14:44', 'Accesso'),
(603, 'Delli', '21/09/2018 14:44', 'Visualizzazione nella tabella Prodotti'),
(604, 'Delli', '21/09/2018 14:44', 'Visualizzazione nella tabella Prodotti'),
(605, 'Delli', '21/09/2018 14:44', 'Uscita'),
(606, 'Delli', '21/09/2018 14:44', 'Accesso'),
(607, 'Delli', '21/09/2018 14:45', 'Visualizzazione nella tabella Utenti'),
(608, 'Delli', '21/09/2018 14:47', 'Visualizzazione nella tabella Utenti'),
(609, 'Delli', '21/09/2018 14:48', 'Visualizzazione nella tabella Utenti'),
(610, '2', '21/09/2018 14:48', 'Inserimento  nella tabella Utenti'),
(611, 'Delli', '21/09/2018 14:48', 'Visualizzazione nella tabella Utenti'),
(612, 'Delli', '21/09/2018 14:48', 'Visualizzazione nella tabella Utenti'),
(613, '2', '21/09/2018 14:49', 'Inserimento  nella tabella Utenti'),
(614, 'Delli', '21/09/2018 14:49', 'Visualizzazione nella tabella Utenti'),
(615, 'Delli', '21/09/2018 14:49', 'Visualizzazione nella tabella Utenti'),
(616, '2', '21/09/2018 14:49', 'Inserimento  nella tabella Utenti'),
(617, 'Delli', '21/09/2018 14:49', 'Visualizzazione nella tabella Utenti'),
(618, '2', '21/09/2018 14:49', 'Inserimento  nella tabella Utenti'),
(619, 'Delli', '21/09/2018 14:49', 'Visualizzazione nella tabella Utenti'),
(620, 'Delli', '21/09/2018 14:50', 'Visualizzazione nella tabella Utenti'),
(621, 'd', '21/09/2018 14:50', 'Inserimento  nella tabella Utenti'),
(622, 'Delli', '21/09/2018 14:50', 'Visualizzazione nella tabella Utenti'),
(623, 'Delli', '21/09/2018 14:53', 'Visualizzazione nella tabella Utenti'),
(624, 'd', '21/09/2018 14:54', 'Modifica nella tabella Utenti '),
(625, 'Delli', '21/09/2018 14:54', 'Visualizzazione nella tabella Utenti'),
(626, '', '21/09/2018 14:54', 'Modifica nella tabella Utenti '),
(627, 'Delli', '21/09/2018 14:54', 'Visualizzazione nella tabella Utenti'),
(628, 'Delli', '21/09/2018 14:54', 'Uscita'),
(629, 'Delli', '21/09/2018 14:54', 'Accesso'),
(630, 'Delli', '21/09/2018 14:56', 'Visualizzazione nella tabella Prodotti'),
(631, 'Delli', '21/09/2018 15:03', 'Uscita'),
(632, 'Delli', '21/09/2018 15:04', 'Accesso'),
(633, 'Delli', '21/09/2018 15:04', 'Accesso'),
(634, 'Delli', '21/09/2018 15:04', 'Visualizzazione nella tabella Prodotti'),
(635, 'Delli', '21/09/2018 15:04', 'Uscita'),
(636, 'Delli', '21/09/2018 15:04', 'Accesso'),
(637, 'Delli', '21/09/2018 15:04', 'Accesso'),
(638, 'Delli', '21/09/2018 15:04', 'Visualizzazione nella tabella Utenti'),
(639, 'Delli', '21/09/2018 15:05', 'Uscita'),
(640, 'Delli', '21/09/2018 15:05', 'Accesso'),
(641, 'Delli', '21/09/2018 15:05', 'Uscita'),
(642, 'Delli', '21/09/2018 15:06', 'Accesso'),
(643, 'Delli', '21/09/2018 15:06', 'Uscita'),
(644, 'Dario', '21/09/2018 15:06', 'Accesso'),
(645, 'Dario', '21/09/2018 15:06', 'Visualizzazione nella tabella Prodotti'),
(646, 'Dario', '21/09/2018 15:07', 'Visualizzazione nella tabella Utenti'),
(647, 'Dario', '21/09/2018 15:07', 'Accesso'),
(648, 'Dario', '21/09/2018 15:07', 'Visualizzazione nella tabella Prodotti'),
(649, 'Dario', '21/09/2018 15:08', 'Accesso'),
(650, 'Dario', '21/09/2018 15:08', 'Visualizzazione nella tabella Prodotti'),
(651, 'Dario', '21/09/2018 15:08', 'Visualizzazione nella tabella Magazzini'),
(652, 'Dario', '21/09/2018 15:09', 'Accesso'),
(653, 'Dario', '21/09/2018 15:09', 'Visualizzazione nella tabella Prodotti'),
(654, 'Dario', '21/09/2018 15:13', 'Accesso'),
(655, 'Dario', '21/09/2018 15:13', 'Visualizzazione nella tabella Prodotti'),
(656, 'Delli', '21/09/2018 15:13', 'Accesso'),
(657, 'Delli', '21/09/2018 15:13', 'Visualizzazione nella tabella Prodotti'),
(658, 'Delli', '21/09/2018 15:13', 'Visualizzazione nella tabella Utenti'),
(659, 'Delli', '21/09/2018 15:13', 'Visualizzazione nella tabella Utenti'),
(660, 'Delli', '21/09/2018 15:16', 'Visualizzazione nella tabella Utenti'),
(661, 'Delli', '21/09/2018 15:16', 'Visualizzazione nella tabella Utenti'),
(662, 'Delli', '21/09/2018 15:18', 'Visualizzazione nella tabella Utenti'),
(663, 'Delli', '21/09/2018 15:18', 'Visualizzazione nella tabella Utenti'),
(664, 'Delli', '21/09/2018 15:20', 'Visualizzazione nella tabella Utenti'),
(665, 'Delli', '21/09/2018 15:21', 'Visualizzazione nella tabella Utenti'),
(666, 'Delli', '21/09/2018 15:23', 'Visualizzazione nella tabella Utenti'),
(667, 'Delli', '21/09/2018 15:23', 'Visualizzazione nella tabella Utenti'),
(668, 'Delli', '21/09/2018 15:24', 'Visualizzazione nella tabella Utenti'),
(669, 'Delli', '21/09/2018 15:24', 'Visualizzazione nella tabella Utenti'),
(670, 'Delli', '21/09/2018 15:24', 'Visualizzazione nella tabella Utenti'),
(671, 'Delli', '21/09/2018 15:25', 'Visualizzazione nella tabella Utenti'),
(672, 'Delli', '21/09/2018 15:25', 'Visualizzazione nella tabella Utenti'),
(673, 'Delli', '21/09/2018 15:25', 'Visualizzazione nella tabella Utenti'),
(674, 'Delli', '21/09/2018 15:25', 'Visualizzazione nella tabella Utenti'),
(675, 'Delli', '21/09/2018 15:25', 'Visualizzazione nella tabella Utenti'),
(676, 'Delli', '21/09/2018 15:26', 'Visualizzazione nella tabella Utenti'),
(677, 'Delli', '21/09/2018 15:26', 'Visualizzazione nella tabella Utenti'),
(678, 'Delli', '21/09/2018 15:27', 'Visualizzazione nella tabella Utenti'),
(679, 'Delli', '21/09/2018 15:29', 'Visualizzazione nella tabella Utenti'),
(680, 'Delli', '21/09/2018 15:30', 'Visualizzazione nella tabella Utenti'),
(681, 'Delli', '21/09/2018 15:30', 'Visualizzazione nella tabella Utenti'),
(682, 'Delli', '21/09/2018 15:31', 'Visualizzazione nella tabella Utenti'),
(683, 'Delli', '21/09/2018 15:36', 'Accesso'),
(684, 'Delli', '21/09/2018 15:39', 'Accesso'),
(685, 'Delli', '21/09/2018 15:39', 'Uscita'),
(686, 'Delli', '21/09/2018 15:40', 'Accesso'),
(687, 'Delli', '21/09/2018 15:41', 'Visualizzazione nella tabella Prodotti'),
(688, 'Delli', '21/09/2018 15:42', 'Accesso'),
(689, 'Delli', '21/09/2018 15:42', 'Visualizzazione nella tabella Prodotti'),
(690, 'Delli', '21/09/2018 15:44', 'Visualizzazione nella tabella Prodotti'),
(691, 'Delli', '21/09/2018 15:44', 'Accesso'),
(692, 'Delli', '21/09/2018 15:45', 'Visualizzazione nella tabella Prodotti'),
(693, 'Delli', '21/09/2018 15:45', 'Modifica nella tabella Prodotti '),
(694, 'Delli', '21/09/2018 15:45', 'Visualizzazione nella tabella Prodotti'),
(695, 'Delli', '21/09/2018 15:46', 'Modifica nella tabella Prodotti '),
(696, 'Delli', '21/09/2018 15:46', 'Visualizzazione nella tabella Prodotti'),
(697, 'Delli', '21/09/2018 15:46', 'Modifica nella tabella Prodotti '),
(698, 'Delli', '21/09/2018 15:46', 'Visualizzazione nella tabella Prodotti'),
(699, 'Delli', '21/09/2018 15:47', 'Modifica nella tabella Prodotti '),
(700, 'Delli', '21/09/2018 15:47', 'Visualizzazione nella tabella Prodotti'),
(701, 'Delli', '21/09/2018 15:48', 'Modifica nella tabella Prodotti '),
(702, 'Delli', '21/09/2018 15:48', 'Visualizzazione nella tabella Prodotti'),
(703, 'Delli', '21/09/2018 15:53', 'Modifica'),
(704, 'Delli', '21/09/2018 15:54', 'Modifica'),
(705, 'Delli', '21/09/2018 15:54', 'Modifica'),
(706, 'Delli', '21/09/2018 15:54', 'Modifica nella tabella Prodotti '),
(707, 'Delli', '21/09/2018 15:54', 'Visualizzazione nella tabella Prodotti'),
(708, 'Delli', '21/09/2018 15:55', 'Uscita'),
(709, 'Delli', '21/09/2018 15:55', 'Accesso'),
(710, 'Delli', '21/09/2018 15:55', 'Visualizzazione nella tabella Prodotti'),
(711, 'Delli', '21/09/2018 15:56', 'Modifica'),
(712, 'Delli', '21/09/2018 15:57', 'Modifica nella tabella Prodotti '),
(713, 'Delli', '21/09/2018 15:57', 'Visualizzazione nella tabella Prodotti'),
(714, 'Delli', '21/09/2018 15:58', 'Modifica nella tabella Prodotti '),
(715, 'Delli', '21/09/2018 15:58', 'Visualizzazione nella tabella Prodotti'),
(716, 'Delli', '21/09/2018 15:58', 'Eliminazione dalla tabella Prodotti'),
(717, 'Delli', '21/09/2018 15:58', 'Visualizzazione nella tabella Prodotti'),
(718, 'Delli', '21/09/2018 15:59', 'Modifica nella tabella Prodotti '),
(719, 'Delli', '21/09/2018 15:59', 'Visualizzazione nella tabella Prodotti'),
(720, 'Delli', '21/09/2018 15:59', 'Visualizzazione nella tabella Prodotti'),
(721, 'Delli', '21/09/2018 16:00', 'Visualizzazione nella tabella Utenti'),
(722, 'Delli', '21/09/2018 16:00', 'Visualizzazione nella tabella Utenti'),
(723, 'Delli', '21/09/2018 16:01', 'Visualizzazione nella tabella Magazzini'),
(724, 'Delli', '21/09/2018 16:03', 'Inserimento  nella tabella Magazzini'),
(725, 'Delli', '21/09/2018 16:03', 'Visualizzazione nella tabella Magazzini'),
(726, 'Delli', '21/09/2018 16:03', 'Modifica nella tabella Magazzini '),
(727, 'Delli', '21/09/2018 16:03', 'Visualizzazione nella tabella Magazzini'),
(728, 'Delli', '21/09/2018 16:03', 'Eliminazione dalla tabella Magazzini'),
(729, 'Delli', '21/09/2018 16:03', 'Visualizzazione nella tabella Magazzini'),
(730, 'Delli', '21/09/2018 16:06', 'Visualizzazione nella tabella Utenti'),
(731, 'Delli', '21/09/2018 16:06', 'Visualizzazione nella tabella Utenti'),
(732, 'Delli', '21/09/2018 16:31', 'Accesso'),
(733, 'Delli', '21/09/2018 16:32', 'Visualizzazione nella tabella Utenti'),
(734, 'Delli', '21/09/2018 16:33', 'Visualizzazione nella tabella Utenti'),
(735, 'Delli', '21/09/2018 16:34', 'Visualizzazione nella tabella Utenti'),
(736, 'Delli', '21/09/2018 16:37', 'Visualizzazione nella tabella Utenti'),
(737, 'Dario', '21/09/2018 16:44', 'Inserimento  nella tabella Utenti'),
(738, 'Delli', '21/09/2018 16:44', 'Visualizzazione nella tabella Utenti'),
(739, 'Delli', '21/09/2018 16:48', 'Visualizzazione nella tabella Ruoli'),
(740, 'Delli', '21/09/2018 16:52', 'Visualizzazione nella tabella Utenti'),
(741, 'Delli', '21/09/2018 16:55', 'Visualizzazione nella tabella Utenti'),
(742, 'Delli', '21/09/2018 16:56', 'Uscita'),
(743, 'Dario', '21/09/2018 16:56', 'Accesso'),
(744, 'Dario', '21/09/2018 16:56', 'Visualizzazione nella tabella Prodotti');

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
(1, 'MagazzinoCentraleRimini', 'Rimini'),
(17, 'MagazzinoCentraleRiccione', 'RiminiRN');

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
(1, 'Accesso'),
(2, 'Uscita'),
(3, 'Inserimento '),
(4, 'Modifica'),
(5, 'Eliminazione'),
(6, 'Visualizzazione');

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `IdProdotti` int(11) NOT NULL,
  `Descrizione` varchar(45) CHARACTER SET latin1 NOT NULL,
  `Prezzo` double NOT NULL,
  `QuantitaDisponibile` int(11) NOT NULL,
  `IdMagazzino` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`IdProdotti`, `Descrizione`, `Prezzo`, `QuantitaDisponibile`, `IdMagazzino`) VALUES
(61, 'TVLED', 600, 30, 1),
(65, '211', 1, 2, NULL),
(66, '312', 12312, 312, NULL),
(67, 'TVLED', 500, 30, NULL),
(69, '2', 2, 222, NULL),
(70, '2', 2, 2, NULL),
(71, '2', 2, 2, NULL),
(72, '2', 2, 2, NULL),
(73, 'Pupazzi', 0, 200, 1);

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
(2, 'Amministratore');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `IdUtente` int(11) NOT NULL,
  `NomeUtente` varchar(45) NOT NULL,
  `Passwords` varchar(45) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Cognome` varchar(45) NOT NULL,
  `Mail` varchar(45) NOT NULL,
  `DataNascita` int(8) NOT NULL,
  `Eta` tinyint(3) NOT NULL,
  `Indirizzo` varchar(80) NOT NULL,
  `CodiceFIscale` char(16) NOT NULL,
  `IdRuoli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`IdUtente`, `NomeUtente`, `Passwords`, `Nome`, `Cognome`, `Mail`, `DataNascita`, `Eta`, `Indirizzo`, `CodiceFIscale`, `IdRuoli`) VALUES
(8, 'Dario', 'maggioli', 'Dario', 'Giovannini', 'dario.giovannini@gmail.com', 20000521, 18, 'ViaPirla16Miramare', 'GOIDARVSDSKDGCBG', 1),
(12, '2', '2', '2', '2', '2', 2, 2, '2', '3', 2),
(13, 'Delli', 'maggioli', 'Manuel', 'Delucca', 'manuel.delucca22@gmail.com', 20000225, 18, 'ViaEmilia271S.GiustinaRN', 'DLCMNL01CLAMDARC', 2),
(19, 'd', 'e', 'e', 'e', 'e', 0, 0, 'e', 'e', 1);

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
-- Indici per le tabelle `logoperazioni`
--
ALTER TABLE `logoperazioni`
  ADD PRIMARY KEY (`IdLog`);

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
  ADD UNIQUE KEY `NomeUtente_UNIQUE` (`NomeUtente`),
  ADD KEY `RuoliUtente` (`IdRuoli`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `log`
--
ALTER TABLE `log`
  MODIFY `IdLOG` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `logoperazioni`
--
ALTER TABLE `logoperazioni`
  MODIFY `IdLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=745;

--
-- AUTO_INCREMENT per la tabella `magazzino`
--
ALTER TABLE `magazzino`
  MODIFY `IdMagazzino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT per la tabella `operazionieseguite`
--
ALTER TABLE `operazionieseguite`
  MODIFY `IdOperazione` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `IdProdotti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT per la tabella `ruoli`
--
ALTER TABLE `ruoli`
  MODIFY `IdRuoli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `IdUtente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  ADD CONSTRAINT `IdMagazzino` FOREIGN KEY (`IdMagazzino`) REFERENCES `magazzino` (`IdMagazzino`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Limiti per la tabella `utenti`
--
ALTER TABLE `utenti`
  ADD CONSTRAINT `RuoliUtente` FOREIGN KEY (`IdRuoli`) REFERENCES `ruoli` (`IdRuoli`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
