-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2017 at 11:17 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `centralize_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ansid` int(6) NOT NULL,
  `quesid` int(6) DEFAULT NULL,
  `answers` text,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ansid`, `quesid`, `answers`, `userid`) VALUES
(1, 22, 'jjjjjjjjjjjjjjjjjjjjjjjj', 6),
(2, 24, 'fhghghghjghjghj', 6),
(3, 29, 'yyyyyyyyyyyyyyyyyyyyyyy', 6),
(4, 24, 'This is my answer.....', 6),
(5, 22, 'i gave answer', 8),
(6, 22, 'i gave answer', 8),
(7, 36, 'fucntiona nswer', 8),
(8, 25, 'answerishere', 8),
(9, 24, 'Youranswer here', 8),
(10, 28, 'pqr123 answer ', 8),
(11, 22, 'answer', 6),
(12, 31, 'this', 6),
(13, 29, 'jygyh', 6),
(14, 37, 'python answer', 8),
(15, 22, 'Answer by myra123', 47),
(16, 22, '"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the &quot;jhdjdfjsfhsfjsfhjsfh&quot;&quot;&quot;,savdhsagdhsafh"', 47),
(17, 24, '"The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.3The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.3 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham."', 47),
(18, 24, '"&lt;div class=&quot;technology-1&quot;&gt;\r\n	&lt;div class=&quot;container&quot;&gt;\r\n		&lt;div class=&quot;col-md-12&quot;&gt;\r\n			&lt;div class=&quot;login_bg&quot;&gt;\r\n				&lt;div id=&quot;contact&quot; class=&quot;contact&quot;&gt;\r\n				&lt;h3&gt;&lt;u&gt;Answers&lt;/u&gt;&lt;/h3&gt;&lt;br&gt;\r\n				&lt;label&gt;&lt;b&gt;Q : &lt;/b&gt;&lt;?php echo $r-&gt;questions; ?&gt;&lt;/label&gt;&lt;br&gt;\r\n        &lt;label class=&quot;marginleft20&quot;&gt;Tehnology : &lt;/label&gt; &lt;?php echo $r-&gt;techname; ?&gt;&lt;br&gt;\r\n        &lt;p class=&quot;marginleft20&quot; style=&quot;text-align: justify;&quot;&gt;&lt;?php echo $r-&gt;query_desc; ?&gt;&lt;i class=&quot;pull-right&quot; style=&quot;color:skyblue; &quot;&gt;- &lt;?php echo $r-&gt;username; ?&gt;&lt;/i&gt;&lt;/p&gt;"', 47),
(19, 25, '"&lt;p&gt;jheghgfhdgf&lt;/p&gt;\r\n"', 8),
(20, 22, '"&lt;p&gt;yesyesyesyemy nswersis this&lt;/p&gt;\r\n"', 8),
(21, 22, '', 8),
(22, 22, '', 8),
(23, 22, '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as&nbsp;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as&nbsp;</p>\r\n', 8),
(24, 28, '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as&nbsp;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as&nbsp;</p>\r\n', 8),
(25, 39, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 8),
(26, 22, '&lt;p&gt;&amp;lt;script&amp;gt;&lt;br /&gt;\r\n&amp;nbsp; &amp;nbsp; CKEDITOR.replace( &amp;#39;text&amp;#39;, {&lt;br /&gt;\r\n&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; toolbar: [&lt;br /&gt;\r\n// &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;{ name: &amp;#39;clipboard&amp;#39;, items: [ &amp;#39;Undo&amp;#39;, &amp;#39;Redo&amp;#39; ] },&lt;br /&gt;\r\n// &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;{ name: &amp;#39;styles&amp;#39;, items: [ &amp;#39;Styles&amp;#39;, &amp;#39;Format&amp;#39; ] },&lt;br /&gt;\r\n&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; { name: &amp;#39;basicstyles&amp;#39;, items: [ &amp;#39;Bold&amp;#39;, &amp;#39;Italic&amp;#39;, &amp;#39;Strike&amp;#39;, &amp;#39;-&amp;#39;, &amp;#39;RemoveFormat&amp;#39; ] },&lt;br /&gt;\r\n&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; { name: &amp;#39;paragraph&amp;#39;, items: [ &amp;#39;NumberedList&amp;#39;, &amp;#39;BulletedList&amp;#39;, &amp;#39;-&amp;#39;, &amp;#39;Outdent&amp;#39;, &amp;#39;Indent&amp;#39;, &amp;#39;-&amp;#39;, &amp;#39;Blockquote&amp;#39; ] },&lt;br /&gt;\r\n&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; { name: &amp;#39;links&amp;#39;, items: [ &amp;#39;Link&amp;#39;, &amp;#39;Unlink&amp;#39; ] },&lt;br /&gt;\r\n&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; { name: &amp;#39;insert&amp;#39;, items: [ &amp;#39;Image&amp;#39;, &amp;#39;EmbedSemantic&amp;#39;, &amp;#39;Table&amp;#39; ] },&lt;br /&gt;\r\n&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; { name: &amp;#39;tools&amp;#39;, items: [ &amp;#39;Maximize&amp;#39; ] },&lt;br /&gt;\r\n&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; { name: &amp;#39;editing&amp;#39;, items: [ &amp;#39;Scayt&amp;#39; ] }&lt;br /&gt;\r\n&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; ],&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;br /&gt;\r\n&amp;nbsp; &amp;nbsp; } );&lt;br /&gt;\r\n&amp;lt;/script&amp;gt;&lt;br /&gt;\r\n&amp;lt;?php&lt;br /&gt;\r\ninclude(&amp;#39;footer.php&amp;#39;);&lt;br /&gt;\r\n?&amp;gt;&lt;/p&gt;\r\n', 47),
(27, 48, '<p>this isisisisismy answerrsrsrsrsrsrs</p>\r\n', 8),
(28, 52, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 8),
(29, 40, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 8),
(30, 53, '<p>answerishere</p>\r\n', 8),
(31, 46, '<ul>\r\n	<li><strong>Connecting lines</strong>, solid lines that connect attributes to show the relationships of entities in the diagram.</li>\r\n	<li><strong>Connecting lines</strong>, solid lines that connect attributes to show the relationships of entities in the diagram.</li>\r\n</ul>\r\n', 8),
(32, 41, '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>\r\n', 8),
(33, 42, '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>\r\n', 8),
(34, 52, '<p>tgisisisisisisisisi</p>\r\n', 8),
(35, 55, '<p>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>\r\n', 8),
(36, 53, '<p>iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiijjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>\r\n', 8),
(37, 52, '<p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh &nbsp; &nbsp; ehfrterye hegfhrgfqhyreg hjdgfyqetfgrey</p>\r\n\r\n<p>&nbsp;</p>\r\n', 8),
(38, 55, '<p>hgfsdhGWFD HGWSDNHGFdhgw nbwVDHGfwdghfdgeh jhwgdhgwefd hjgdheGDHGED HEFDHEGFEHF HGJHFDGHF JHDSFDFHD HGDSGFVHGDFG DSVCGHDCGF JHJDGCHDGCF JHGDCHDC JHDGCHDAC</p>\r\n', 8);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(20) DEFAULT NULL,
  `sid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `sid`) VALUES
(1, 'Ahmedabad', 1),
(2, 'Baroda', 1),
(3, 'Anand', 1);

-- --------------------------------------------------------

--
-- Table structure for table `code_details`
--

CREATE TABLE `code_details` (
  `codeid` int(6) NOT NULL,
  `date` date NOT NULL,
  `filename` varchar(100) DEFAULT NULL,
  `userid` int(6) DEFAULT NULL,
  `tid` int(6) DEFAULT NULL,
  `code_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code_details`
--

INSERT INTO `code_details` (`codeid`, `date`, `filename`, `userid`, `tid`, `code_title`) VALUES
(4, '0000-00-00', 'Removed Apps.html', 6, 16, 'removedapps'),
(5, '0000-00-00', 'edit.php', 6, 16, 'editphp'),
(6, '0000-00-00', 'show1.php', 6, 16, 'show1php'),
(13, '0000-00-00', 'delete.php', 6, 16, 'Php file '),
(14, '0000-00-00', 'form.php', 6, 17, 'C syntax'),
(16, '0000-00-00', 'form.php', 6, 17, 'CCCCC'),
(17, '0000-00-00', 'editprofile.php', 6, 18, 'pyyyy'),
(18, '0000-00-00', 'answers.php', 6, 16, 'Uploading File in PHP'),
(19, '0000-00-00', 'answers.php', 6, 17, 'hgfhGFhs'),
(20, '0000-00-00', 'askquery.php', 6, 16, 'jhjhFDGhjf'),
(21, '2017-06-21', 'alheader.php', 47, 16, 'PHPHPHPHP'),
(22, '2017-07-03', 'dashboard.php', 8, 18, 'pythoncode'),
(23, '2017-08-05', 'code_python.txt', 8, 18, 'python prime'),
(24, '2017-08-05', 'code_cc.txt', 8, 17, 'c code');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(6) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ph_no` varchar(12) DEFAULT NULL,
  `message` text,
  `userid` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `name`, `email`, `ph_no`, `message`, `userid`) VALUES
(6, 'parin', 'pshah@gmail.com', '9999999999', 'mymy feedssndck', 8);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `cid` int(11) NOT NULL,
  `cname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `cname`) VALUES
(1, 'India'),
(2, 'Afganistan'),
(3, 'Finland'),
(4, 'Argentina');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_details`
--

CREATE TABLE `feedback_details` (
  `fd_id` int(6) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `feedback_desc` text,
  `userid` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_details`
--

INSERT INTO `feedback_details` (`fd_id`, `fname`, `lname`, `user_email`, `rating`, `feedback_desc`, `userid`) VALUES
(2, 'Prachi ', 'Shah', 'parinshah131@yahoo.com', 4.5, '&lt;p&gt;this is my feedbackkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk&lt;/p&gt;\r\n', 8);

-- --------------------------------------------------------

--
-- Table structure for table `query_details`
--

CREATE TABLE `query_details` (
  `quid` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `tid` int(6) DEFAULT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `questions` varchar(200) NOT NULL,
  `query_desc` varchar(1000) DEFAULT NULL,
  `uid` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query_details`
--

INSERT INTO `query_details` (`quid`, `date`, `tid`, `topic`, `questions`, `query_desc`, `uid`) VALUES
(22, '2017-06-06', 16, 'PHP', 'this is the php', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. ', 6),
(24, '2017-06-06', 16, 'session123', 'askaquestion', '"&quot;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.&quot;"', 8),
(25, '2017-06-06', 16, 'jegegfjgdfjhgfjh', '1234568??????', '"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32."', 8),
(28, '2017-06-06', 16, 'JSJSJSJSJSJSSJSJSJJSSJ', 'jhdjsfhajdshfj', 'kjhdjkhsakjh', 3),
(29, '2017-06-06', 16, 'phphphph', 'php', 'dddddddd', 3),
(31, '2017-06-06', 18, 'ppppppp', 'jshdhJSGDsphphsgdjsd', 'mmmmmmmmmmm', 3),
(36, '2017-06-10', 16, 'function in python ', 'function declaration in python? ', 'dfhzgfphphghghgh', 6),
(37, '2017-06-20', 16, 'dhsdphppkkkk', 'syntax for python?', '"Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.or non-characteristic words etc.Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc."', 8),
(38, '2017-06-21', 17, 'Cprogramminghchbdsbdnsdsn', 'what is C++?', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 47),
(39, '2017-06-22', 16, 'jdjSHDJSDHJ', 'hsdjsdhj', '<p>SYNTAXSYTAN<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>\r\n', 8),
(40, '2017-06-22', 16, 'hgchdvj', 'fjdhfd', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as&nbsp;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as&nbsp;</p>\r\n', 8),
(41, '2017-06-22', 16, 'jjjjjjjjjjjjjjjjjj', 'hhhhhhhhhhhhhhh', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as&nbsp;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as&nbsp;</p>\r\n', 8),
(42, '2017-06-22', 16, 'hhhhhhhhhhhhhhhhhhhh', 'kkkkkkkkkkkkkkkkkkkkk', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as&nbsp;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as&nbsp;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as&nbsp;</p>\r\n', 8),
(43, '2017-06-24', 16, 'hshshshs', 'hhhhhhhhhhhhhhhhhhhh', '<p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh<br>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>\n', 8),
(44, '2017-06-27', 16, 'jhsdgjhghjsfjfd', 'idcjhdssfadffd', '&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n', 8),
(45, '2017-06-27', 16, 'jjjjjjjjjjjjjjjjjjjjjjj', 'gggggggggggggggg', '"Lorem Ipsum&lt;/strong&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."', 8),
(46, '2017-06-27', 16, 'this is the topic', 'this iis the new question', '<p>somwthinf to dispanasdfjn</p>\r\n', 8),
(47, '2017-06-27', 16, 'this is', 'new question', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 8),
(48, '2017-06-28', 17, 'yyyyyyyyy', 'hwwywhw', '<p>Why do we use it?</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>\r\n', 8),
(49, '2017-06-28', 18, 'hhhhhhhhhhhhhhhhhhhhh', 'whatwatwhayw?', '<p>Why do we use it?</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', 8),
(50, '2017-06-28', 17, 'hhhhhhhhhhhhhhhhhhhhh', 'ccccccccccccccc', '<p>What is Lorem Ipsum?</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>What is Lorem Ipsum?</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also th', 8),
(51, '2017-06-28', 17, 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'pppppppppppppp', '<p>What is Lorem Ipsum?</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 8),
(52, '2017-07-03', 16, 'hahahahaha', 'abcd', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 8),
(53, '2017-07-03', 16, 'jjjjjjjjjj', 'whwywhwhwhwwh', 'hghghghghghghghghghghghhhgh', 8),
(54, '2017-07-12', 17, 'hhhhhhhhhhhhhhhhhhhhhhhhh', 'hdkjwhjkhfkjahfd', '<p>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>\r\n', 8),
(55, '2017-07-25', 18, 'puthbdjhSBDSJDHSDHSJHDJHD', 'yesyesyes', '<p>MNDBCJDHCJDHFJDHFJDFHJDFHJDHFJDHFJHFJHFDJFHJDHFJDHFJDHJFHDFDJFHDJ</p>\r\n\r\n<p>JDHFDFDHHHHHHHHHHHHHHHHHHHHHHHHHH</p>\r\n', 8);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(20) DEFAULT NULL,
  `cid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `cid`) VALUES
(1, 'Gujarat', 1),
(2, 'Goa', 1),
(3, 'Kabul', 2);

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `tech_id` int(11) NOT NULL,
  `techname` varchar(20) DEFAULT NULL,
  `techdesc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`tech_id`, `techname`, `techdesc`) VALUES
(16, 'PHP', 'Hypertextpreprocessor'),
(17, 'C++', 'advanced C'),
(18, 'Python', 'New language');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `userid` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(12) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `confirm_password` varchar(20) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `cid` int(20) DEFAULT NULL,
  `sid` int(20) DEFAULT NULL,
  `ct_id` int(20) DEFAULT NULL,
  `roll_id` int(3) NOT NULL DEFAULT '2',
  `profile_pic` varchar(255) DEFAULT NULL,
  `Status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`userid`, `username`, `fname`, `lname`, `email`, `password`, `confirm_password`, `gender`, `address`, `dob`, `cid`, `sid`, `ct_id`, `roll_id`, `profile_pic`, `Status`) VALUES
(3, 'mansi123', 'Mansi', 'Shah', 'abc@gmail.com', '1234', '1234', 'Female', 'jfghjfsdghjsfhgjfsghjfhjfsghjsfj', '2017-06-01', 1, 1, 1, 1, '96550.jpg', 1),
(4, 'JHDJHEGFJ', 'name', 'hegheG', 'abc@gmail.com', '1234', '1234', 'Female', 'HDGFHDGFDHAG', '2017-06-03', 1, 1, 1, 2, 'transformers_age_of_extinction_optimus_prime-wide.', 1),
(6, 'parinshah189parinshah189', 'Parin', 'gandhi', 'pshah@gmail.com', '12345', '12345', 'Female', 'yyyyyyyyyyyyyyyyy', '2017-06-01', 1, 1, 2, 2, 'Mxsr00R.jpg', 0),
(8, 'pqr123', 'Prachi', 'Shah', 'PQR@gmail.com', '1234', '1234', 'Male', 'KKKKJKJKJKKKKJDDDDDDD', '2017-05-10', 1, 1, 1, 2, '012.JPG', 1),
(31, 'Charissa Lindsay', 'Kadeem Emers', 'Clare Powers', 'bobefaw@yahoo.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Male', 'Aut ipsum saepe sed qui reprehenderit iste aut odit', '2017-02-14', 1, 1, 2, 2, '13754402_1069357243129875_7597741851246551995_n.jp', 0),
(32, 'Sharon Franco', 'Henry Camach', 'Jaquelyn Perkins', 'deqokes@hotmail.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Male', 'Quod enim eu sapiente occaecat repellendus Distinctio Duis quibusdam est deserunt laborum aliquid', '2017-02-09', 1, 1, 3, 2, 'Mxsr00R.jpg', 1),
(33, 'Chaim Gomez', 'Dakota Mayo', 'Bree Valentine', 'cymibus@hotmail.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Female', 'Illum voluptate eiusmod similique ut ullam sequi ex reprehenderit animi magna', '2017-02-01', 1, 1, 1, 2, '96550.jpg', 1),
(35, 'Bertha Keller', 'Kim Ramsey', 'Owen England', 'qipoxud@gmail.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Male', 'Dolorem proident ut delectus reprehenderit sequi excepteur id ut eligendi in laborum Voluptate', '2017-01-14', 1, 1, 1, 2, 'Mxsr00R.jpg', 1),
(36, 'Alfreda Macdonald', 'Maxine Alvar', 'Quinlan Wilson', 'vifif@gmail.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Male', 'Aperiam occaecat lorem ex quis exercitation omnis ea magna ut saepe reprehenderit mollit sapiente co', '2017-03-02', 1, 1, 2, 2, 'wjMfIGE.jpg', 1),
(37, 'Adena Lang', 'Vernon Niels', 'Cameron Suarez', 'pozoc@yahoo.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Female', 'Rerum suscipit dicta id quis inventore', '2017-03-01', 1, 1, 3, 2, 'Transformers.jpg', 1),
(40, 'Brady Mitchell', 'Venus Sykes', 'Rama Dixon', 'pymige@yahoo.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Female', 'In magni reiciendis sunt nulla dolorum esse sint aut magni assumenda quia rem nostrud recusandae Qui', '2017-05-29', 1, 1, 1, 2, 'transformers_age_of_extinction_optimus_prime-wide.', 1),
(41, 'Noelani Stout', 'Shoshana Con', 'Nigel Jefferson', 'dyqe@gmail.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Female', 'Tempore laborum voluptas quas et fugit fugit quia repudiandae non vero nostrud', '2017-01-15', 1, 1, 2, 2, '13754402_1069357243129875_7597741851246551995_n.jp', 1),
(42, 'Noelani Stout', 'Shoshana Con', 'Nigel Jefferson', 'dyqe@gmail.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Female', 'Tempore laborum voluptas quas et fugit fugit quia repudiandae non vero nostrud', '2017-01-15', 1, 1, 2, 2, '13754402_1069357243129875_7597741851246551995_n.jp', 1),
(43, 'Hermione Norman', 'Caryn Frank', 'Diana Duffy', 'leqofuf@yahoo.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Male', 'Minim et assumenda corporis nesciunt accusantium ad eum vero incididunt in nostrum soluta possimus m', '0000-00-00', 1, 1, 1, 2, '96550.jpg', 1),
(44, 'Hector Berger', 'Robert Gentr', 'Michael Maynard', 'focyjarit@hotmail.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Female', 'Deserunt sunt id officia vitae qui adipisci voluptas laboris adipisci qui similique quibusdam quis', '0000-00-00', 1, 1, 1, 2, 'Mxsr00R.jpg', 1),
(45, 'Lucy Hansen', 'Lunea Cummin', 'Jennifer Bates', 'kibusyvupe@hotmail.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Female', 'Corporis ipsum quo non ex non consectetur itaque reprehenderit sed ipsum et aspernatur accusamus ita', '2017-06-09', 1, 1, 1, 2, '0ca4703de1885a27e00b68d4b6be4c7a.jpg', 1),
(46, 'Merritt Fitzpatrick', 'Carla Barber', 'Astra Morrison', 'pawiqyty@yahoo.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Female', 'Dolor lorem nobis dolorem non qui minima cupidatat amet autem consequatur facere assumenda velit dol', '2017-05-30', 1, 1, 3, 2, 'index1.jpg', 1),
(47, 'myra123', 'Myra', 'Gandhi', 'myra1234@gmail.com', '12345', '12345', 'Female', 'jshdsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '2017-05-05', 1, 1, 1, 2, '96550.jpg', 1),
(48, 'Madonna Huff', 'Dennis Kim', 'Isadora Hensley', 'zoligaz@gmail.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Female', 'Incididunt quis nisi qui ipsum sit mollit aliquid ut ad suscipit occaecat cum ratione exercitationem', '2017-06-30', 1, 1, 1, 2, 'optimus-prime-revenge-of-the-fallen-hd.jpg', 1),
(49, 'Bell Herring', 'Madonna Pugh', 'Cecilia Cobb', 'nefux@hotmail.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Male', 'Ipsam Nam velit provident minim ea quam odio dolorem et voluptatum duis', '2017-06-26', 1, 1, 3, 2, 'Transformers.jpg', 1),
(50, 'Lilah King', 'Hillary Snow', 'Cheryl Browning', 'sexyturapy@yahoo.com', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Male', 'Corrupti qui qui mollitia totam debitis ut delectus pariatur Et exercitation fugiat iste ipsum esse ', '2017-06-26', 1, 1, 2, 2, '3eddc2f7-6709-4643-ab64-0839b0b1be73.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `vis` int(10) NOT NULL,
  `vname` varchar(100) DEFAULT NULL,
  `videotitle` varchar(100) NOT NULL,
  `videodesc` varchar(200) NOT NULL,
  `posteddate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`vis`, `vname`, `videotitle`, `videodesc`, `posteddate`) VALUES
(3, 'demo.mp4', 'abc', 'abc', '35/07/2017'),
(4, 'demo.mp4', 'mnmn', 'mnmnm', '2017/06/01'),
(5, 'demo.mp4', 'ABC', 'ABC', '25/05/2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ansid`),
  ADD KEY `quesid` (`quesid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `code_details`
--
ALTER TABLE `code_details`
  ADD PRIMARY KEY (`codeid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback_details`
--
ALTER TABLE `feedback_details`
  ADD PRIMARY KEY (`fd_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `query_details`
--
ALTER TABLE `query_details`
  ADD PRIMARY KEY (`quid`),
  ADD KEY `tid` (`tid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`tech_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `ct_id` (`ct_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`vis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ansid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `code_details`
--
ALTER TABLE `code_details`
  MODIFY `codeid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feedback_details`
--
ALTER TABLE `feedback_details`
  MODIFY `fd_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `query_details`
--
ALTER TABLE `query_details`
  MODIFY `quid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
  MODIFY `tech_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `vis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`quesid`) REFERENCES `query_details` (`quid`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `state` (`state_id`);

--
-- Constraints for table `code_details`
--
ALTER TABLE `code_details`
  ADD CONSTRAINT `code_details_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_details` (`userid`),
  ADD CONSTRAINT `code_details_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `technology` (`tech_id`);

--
-- Constraints for table `feedback_details`
--
ALTER TABLE `feedback_details`
  ADD CONSTRAINT `feedback_details_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_details` (`userid`);

--
-- Constraints for table `query_details`
--
ALTER TABLE `query_details`
  ADD CONSTRAINT `query_details_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `technology` (`tech_id`),
  ADD CONSTRAINT `query_details_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user_details` (`userid`);

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `country` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `country` (`cid`),
  ADD CONSTRAINT `user_details_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `state` (`state_id`),
  ADD CONSTRAINT `user_details_ibfk_3` FOREIGN KEY (`ct_id`) REFERENCES `city` (`city_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
