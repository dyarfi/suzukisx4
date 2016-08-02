-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2015 at 02:34 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dentsu_pocky.sticker`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ci_sessions`
--

CREATE TABLE IF NOT EXISTS `tbl_ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_ci_sessions`
--

INSERT INTO `tbl_ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('f165d9cc1a7fa1a5115d33c4aca288c7', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:36.0) Gecko/20100101 Firefox/36.0', 1427347091, 'a:3:{s:9:"user_data";s:0:"";s:8:"curr_url";s:36:"admin-panel/authenticate/favicon.ico";s:8:"prev_url";b:0;}'),
('1ec99d7e26f1c2dab9326fb031e5bc0f', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36', 1427347081, 'a:6:{s:9:"user_data";s:0:"";s:8:"curr_url";s:27:"admin-panel/dashboard/index";s:8:"prev_url";s:27:"admin-panel/dashboard/index";s:11:"module_list";s:634:"{"Admin":{"dashboard{{slash}}/index":"Dashboard Panel","user{{slash}}/index":"Users","usergroup{{slash}}/index":"User Groups","language{{slash}}/index":"Languages","setting{{slash}}/index":"Settings","serverlog{{slash}}/index":"Server Logs"},"Module":{"modulelist{{slash}}/index":"Modules"},"Page":{"page{{slash}}/index":"Pages","pagemenu{{slash}}/index":"Page Menus"},"Participant":{"participant{{slash}}/index":"Participant","gallery{{slash}}/index":"Gallery"},"Region":{"province{{slash}}/index":"Province","urbandistrict{{slash}}/index":"Urban District","suburban{{slash}}/index":"Sub Urban","district{{slash}}/index":"District"}}";s:20:"module_function_list";s:5239:"{"Admin":{"dashboard{{slash}}/index":"Dashboard Panel","user{{slash}}/index":"Users","usergroup{{slash}}/index":"User Groups","language{{slash}}/index":"Languages","setting{{slash}}/index":"Settings","serverlog{{slash}}/index":"Server Logs","dashboard{{slash}}/add":"Add New Dashboard","dashboard{{slash}}/view":"View Dashboard","dashboard{{slash}}/edit":"Edit Dashboard","dashboard{{slash}}/delete":"Delete Dashboard","dashboard{{slash}}/change":"Change Dashboard Status","user{{slash}}/add":"Add User","user{{slash}}/view":"View User","user{{slash}}/edit":"Edit User","user{{slash}}/delete":"Delete User","user{{slash}}/change":"Change User Status","usergroup{{slash}}/add":"Add User Group","usergroup{{slash}}/view":"View User Group","usergroup{{slash}}/edit":"Edit User Group","usergroup{{slash}}/delete":"Delete User Group","usergroup{{slash}}/change":"Change User Group Status","language{{slash}}/add":"Add Language","language{{slash}}/view":"View Language","language{{slash}}/edit":"Edit Language","language{{slash}}/delete":"Delete Language","language{{slash}}/change":"Change Language Status","setting{{slash}}/add":"Add Setting","setting{{slash}}/view":"View Setting","setting{{slash}}/edit":"Edit Setting","setting{{slash}}/delete":"Delete Setting","setting{{slash}}/change":"Change Setting Status","serverlog{{slash}}/view":"View Server Log","serverlog{{slash}}/edit":"Edit Server Log","serverlog{{slash}}/delete":"Delete Server Log","serverlog{{slash}}/trash":"Trash Server Log"},"Module":{"modulelist{{slash}}/edit":"Edit Module"},"Page":{"page{{slash}}/index":"Pages","pagemenu{{slash}}/index":"Page Menus","page{{slash}}/index{{slash}}/add":"Add Page","page{{slash}}/index{{slash}}/view":"View Page","page{{slash}}/index{{slash}}/edit":"Edit Page","page{{slash}}/index{{slash}}/delete":"Delete Page","page{{slash}}/index{{slash}}/change":"Change Page Status","page{{slash}}/index{{slash}}/export":"Export Page","page{{slash}}/index{{slash}}/print":"Print Page","pagemenu{{slash}}/index{{slash}}/add":"Add Page Menu","pagemenu{{slash}}/index{{slash}}/view":"View Page Menu","pagemenu{{slash}}/index{{slash}}/edit":"Edit Page Menu","pagemenu{{slash}}/index{{slash}}/delete":"Delete Page Menu","pagemenu{{slash}}/index{{slash}}/change":"Change Page Menu Status","pagemenu{{slash}}/index{{slash}}/export":"Export Page Menu","pagemenu{{slash}}/index{{slash}}/print":"Print Page Menu"},"Participant":{"participant{{slash}}/index":"Participant","gallery{{slash}}/index":"Gallery","participant{{slash}}/index{{slash}}/add":"Add Participant","participant{{slash}}/index{{slash}}/view":"View Participant","participant{{slash}}/index{{slash}}/edit":"Edit Participant","participant{{slash}}/index{{slash}}/delete":"Delete Participant","participant{{slash}}/index{{slash}}/change":"Change Participant Status","participant{{slash}}/index{{slash}}/export":"Export Participant","participant{{slash}}/index{{slash}}/print":"Print Participant","gallery{{slash}}/index{{slash}}/add":"Add Gallery","gallery{{slash}}/index{{slash}}/view":"View Gallery","gallery{{slash}}/index{{slash}}/edit":"Edit Gallery","gallery{{slash}}/index{{slash}}/delete":"Delete Gallery","gallery{{slash}}/index{{slash}}/change":"Change Gallery Status","gallery{{slash}}/index{{slash}}/export":"Export Gallery","gallery{{slash}}/index{{slash}}/print":"Print Gallery"},"Region":{"province{{slash}}/index":"Province","urbandistrict{{slash}}/index":"Urban District","suburban{{slash}}/index":"Sub Urban","district{{slash}}/index":"District","province{{slash}}/index{{slash}}/add":"Add Province","province{{slash}}/index{{slash}}/view":"View Province","province{{slash}}/index{{slash}}/edit":"Edit Province","province{{slash}}/index{{slash}}/delete":"Delete Province","province{{slash}}/index{{slash}}/change":"Change Province Status","province{{slash}}/index{{slash}}/export":"Export Province","province{{slash}}/index{{slash}}/print":"Print Province","urbandistrict{{slash}}/index{{slash}}/add":"Add Urban District","urbandistrict{{slash}}/index{{slash}}/view":"View Urban District","urbandistrict{{slash}}/index{{slash}}/edit":"Edit Urban District","urbandistrict{{slash}}/index{{slash}}/delete":"Delete Urban District","urbandistrict{{slash}}/index{{slash}}/change":"Change Urban District Status","urbandistrict{{slash}}/index{{slash}}/export":"Export Urban District","urbandistrict{{slash}}/index{{slash}}/print":"Print Urban District","suburban{{slash}}/index{{slash}}/add":"Add Sub Urban","suburban{{slash}}/index{{slash}}/view":"View Sub Urban","suburban{{slash}}/index{{slash}}/edit":"Edit Sub Urban","suburban{{slash}}/index{{slash}}/delete":"Delete Sub Urban","suburban{{slash}}/index{{slash}}/change":"Change Sub Urban Status","suburban{{slash}}/index{{slash}}/export":"Export Sub Urban","suburban{{slash}}/index{{slash}}/print":"Print Sub Urban","district{{slash}}/index{{slash}}/add":"Add District","district{{slash}}/index{{slash}}/view":"View District","district{{slash}}/index{{slash}}/edit":"Edit District","district{{slash}}/index{{slash}}/delete":"Delete District","district{{slash}}/index{{slash}}/change":"Change District Status","district{{slash}}/index{{slash}}/export":"Export District","district{{slash}}/index{{slash}}/print":"Print District"}}";s:12:"user_session";O:8:"stdClass":9:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@admin.com";s:8:"password";s:8:"********";s:8:"group_id";s:1:"1";s:6:"status";s:1:"1";s:10:"last_login";s:10:"1427193024";s:9:"logged_in";b:1;s:4:"name";s:21:"Administrator Website";}}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
