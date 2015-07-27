SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(20) NOT NULL auto_increment,
  `page_name` varchar(50) collate latin1_general_ci NOT NULL,
  `Page_cont` longtext collate latin1_general_ci NOT NULL,
  `page_sort` int(3) NOT NULL,
  `page_place` int(1) NOT NULL,
  `page_active` int(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `Page_cont`, `page_sort`, `page_place`, `page_active`) VALUES
(1, 'contact us', 's fsd a<span style="font-weight: bold;">fsda fasd </span>fasd', 7, 2, 1),
(8, 'hello', 'hellooooooooooooooo', 1, 0, 1),
(4, 'test', '<span style="font-weight: bold;">????? ???<br /></span>', 6, 1, 1),
(6, '??', '<span class="Title">???? ???<br /><br /><img alt="" src="/FCKeditor/editor/images/smiley/msn/shades_smile.gif" /><br /><br />No arabic <img alt="" src="/FCKeditor/editor/images/smiley/msn/cry_smile.gif" /></span>', 5, 1, 1),
(10, 'fdsfds', 'afsdafsda', 3, 0, 1),
(12, 'about as', '', 0, 0, 1),
(11, 'profile', '<h3 id="csscodetitle">Solid Block Menu</h3>\r\n<!-- CSS Example-->\r\n<p><strong>Author:</strong> <a href="http://www.dynamicdrive.com/">Dynamic Drive</a></p>\r\nThis is a lean, professional looking CSS menu thats draped in a solid two color background image. The divider between the menu items is simply a white CSS border. The style is extremely easy to customize thanks to the simple background image used.This is a lean, professional looking CSS menu thats draped in a solid two color background image. The divider between the menu items is simply a white CSS border. The style is extremely easy to customize thanks to the simple background image used.<br />T<span class="Code">his is a lean, professional looking CSS menu thats draped in a solid two color background image. The divider between the menu items is simply a white CSS border. The style is extremely easy to customize thanks to the simple background image used.This is a lean, professional looking CSS menu thats draped in a solid two color background image. The divider between the menu items is simply a white CSS border. The style is extremely easy to cus</span>tomize thanks to the simple background image used.This is a lean, professional looking CSS menu thats draped in a solid two color background image. The divider between the menu items is simply a white CSS border. The style is extremely easy to customize thanks to the simple background image used.<br />This is a lean, professional looking CSS menu thats draped in a solid two color background image. The divider between the menu items is simply a white CSS border. The style is extremely easy to customize thanks to the simple background image used.This is a lean, professional looking CSS menu thats draped in a solid two color background image. The divider between the menu items is simply a white CSS border. The style is extremely easy to customize thanks to the simple background image used.<br />This is a lean, professional looking CSS menu thats draped in a solid two color background image. The divider between the menu items is simply a white CSS border. The style is extremely easy to customize thanks to the simple background image used.<br />This is a lean, professional looking CSS menu thats draped in a solid two color background image. The divider between the menu items is simply a white CSS border. The style is extremely easy to customize thanks to the simple background image used.This is a lean, professional looking CSS menu thats draped in a solid two color background image. The divider between the menu items is simply a white CSS border. The style is extremely easy to customize thanks to the simple background image used.<br />This is a lean, professional looking CSS menu thats draped in a solid two color background image. The divider between the menu items is simply a white CSS border. The style is extremely easy to customize thanks to the simple background image used.This is a lean, professional looking CSS menu thats draped in a solid two color background image. The divider between the menu items is simply a white CSS border. The style is extremely easy to customize thanks to the simple background image used.<br />This is a lean, professional looking CSS menu thats draped in a solid two color background image. The divider between the menu items is simply a white CSS border. The style is extremely easy to customize thanks to the simple background image used.', 4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sett`
--

CREATE TABLE IF NOT EXISTS `sett` (
  `id` int(20) NOT NULL auto_increment,
  `s_string` varchar(250) collate latin1_general_ci NOT NULL,
  `s_value` longtext collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sett`
--

INSERT INTO `sett` (`id`, `s_string`, `s_value`) VALUES
(1, '%title%', 'simple CMS '),
(2, '%keyword%', 'arab team 2000 simple cms project'),
(3, '%Template_style%', 'red_style'),
(4, '%Copyrights%', 'Copyrights ? 2000-2008'),
(8, 'waw', 'simple CMS'),
(7, 'rafik', '123'),
(9, '?????? ???? ??? ???', '????');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL auto_increment,
  `user_name` varchar(20) collate latin1_general_ci NOT NULL,
  `user_pass` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_pass`) VALUES
(1, 'admin', '123'),
(2, 'bassam', '123'),
(6, 'osama', '123'),
(7, 'sms', '6666');
