

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";

DROP TABLE IF EXISTS `metro`;
CREATE TABLE IF NOT EXISTS `metro` (
`id` int(11) NOT NULL,
  `msqer` float DEFAULT NULL,
  `flor` smallint(6) DEFAULT NULL,
  `rooms` tinyint(4) DEFAULT NULL,
  `street` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `street_nr` int(11) DEFAULT NULL,
  `gps_la` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `gps_lg` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `metro`
ADD PRIMARY KEY (`id`);
ALTER TABLE `metro`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
