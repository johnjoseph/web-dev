
--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `details`) VALUES
(1, 'Dirt race', 'Here is your chance to feel the passion and live the dream. Defy the traps, time your gaps, plunge through impediments and speed through the tunnels.'),
(2, 'tycoon', 'Business Tycoon which will test your on-the-spot management skills. Winning this competition requires the ability to extract most out of the limited resources. \r\n'),
(3, 'aqua missile', 'Here at Aqua Missile, we attempt to invoke a small fragment of its true power into launching a water powered rocket. '),
(4, 'koderkombat', 'One of the major coding events, KoderKombat gives you an opportunity to put your coding skills to the test.'),
(5, 'Interrupteur', 'Make a chemical switch that comprises of a beaker and some fluid to complete the given open circuit. The circuit is to be switched off after 4 minutes automatically and if you succeed, you get to go home with the spoils.'),
(6, 'new event', 'some description');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `reg`
--
