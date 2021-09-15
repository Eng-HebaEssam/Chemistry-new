-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 08:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `math`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `exam_id`, `mark`, `user_id`, `date`, `lesson_id`, `answer`) VALUES
(3, 6, 1, 1, '2020-08-30', 64, ''),
(4, 6, 1, 1, '2020-12-29', NULL, ''),
(5, 6, 2, 1, '2020-12-30', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL,
  `ordering` int(11) DEFAULT 0,
  `parent` int(11) NOT NULL,
  `Visibility` tinyint(4) NOT NULL,
  `Allow_Comment` tinyint(4) NOT NULL,
  `Allow_Ads` tinyint(4) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`, `ordering`, `parent`, `Visibility`, `Allow_Comment`, `Allow_Ads`, `image`) VALUES
(4, 'الجبر ', 'مجموعه دروس الخاصه بجزء الجبر  الفصل الدراسى الاول ', 0, 9, 0, 0, 0, ''),
(5, 'حساب المثلثات', 'حساب المثلثات', 0, 9, 0, 0, 0, ''),
(6, 'الصف الاول الاعدادى', 'محتوي منهج لصف الاول الاعدادى', 1, 0, 0, 0, 0, ''),
(7, 'الصف الثاني الاعدادى', 'محتوى منهج الصف الثانى الاعدادى', 2, 0, 0, 0, 0, ''),
(8, 'الصف الثالث الاعدادى', 'محتوى منهج الصف الثالث الاعدادى', 3, 0, 0, 0, 0, ''),
(9, 'الصف الاول الثانوى', 'محتوى منهج الصف الاول الثانوى', 4, 0, 0, 0, 0, ''),
(10, ' الصف الثانى الثانوى علمى', ' محتوي الصف الثانى الثانوى علمى', 5, 0, 0, 0, 0, ''),
(11, 'الصف الثالث الثانوى', 'محتوي الصف الثالث الثانوى ', 7, 0, 0, 0, 0, ''),
(12, 'الجبر والاحصاء', ' مجموعة الدروس الخاصة بجزء الجبر والاحصاء الفصل الدراسى الاول', 0, 6, 0, 0, 0, ''),
(13, 'الهندسه والقياس ', 'مجموعه دروس الخاصه بجزء الهندسه والقياس الفصل الدراسى الاول ', 0, 6, 0, 0, 0, 'pcb.jpg'),
(14, 'الجبر و الاحصاء ', 'مجموعه دروس الخاصه بجزء الجبر والاحصاء  الفصل الدراسى الاول ', 0, 7, 0, 0, 0, ''),
(15, 'الهندسة والقياس', 'مجموعه الدروس الخاصه بجزء الهندسه و القياس الفصل الدراسى الاول ', 0, 7, 0, 0, 0, ''),
(17, 'الجبر والاحصاء', 'مجموعه دروس الخاصه بجزء الجبر والاحصاء  الفصل الدراسى الاول ', 0, 8, 0, 0, 0, ''),
(18, ' حساب المثلثات والهندسه', 'مجموعه الدروس الخاصه بجزء  حساب المثلثات والهندسه الفصل الدراسى الاول ', 0, 8, 0, 0, 0, ''),
(20, 'الصف الثانى الثانوى ادبى', ' محتوي الصف الثانى الثانوى ادبى', 6, 0, 0, 0, 0, ''),
(21, 'الهندسه التحليليه ', 'مجموعه الدروس الخاصه بجزء الهندسه التحليليه الفصل الدراسى الاول ', 0, 9, 0, 0, 0, ''),
(22, 'الجبر ', 'مجموعه دروس الخاصه بجزء الجبر الفصل الدراسى الاول ', 0, 10, 0, 0, 0, ''),
(23, 'التفاضل', 'مجموعه دروس الخاصه بجزء التفاضل الفصل الدراسى الاول ', 0, 10, 0, 0, 0, ''),
(24, 'حساب المثلثات', 'مجموعه دروس الخاصه بجزء حساب المثلثات  الفصل الدراسى الاول ', 0, 10, 0, 0, 0, ''),
(25, 'الاستاتيكا', 'مجموعه دروس الخاصه بجزء الاستاتيكا  الفصل الدراسى الاول ', 0, 10, 0, 0, 0, ''),
(26, 'الهندسه و القياس ', 'مجموعه الدروس الخاصه بجزء الهندسه و القياس الفصل الدراسى الاول ', 0, 10, 0, 0, 0, ''),
(27, 'الجبر', 'مجموعه الدروس الخاصه بجزء الجبر الفصل الدراسي الاول ', 0, 20, 0, 0, 0, ''),
(28, 'التفاضل', 'مجموعه دروس الخاصه بجزء التفاضل الفصل الدراسى الاول ', 0, 20, 0, 0, 0, ''),
(29, 'حساب مثلثات ', 'مجموعه دروس الخاصه بجزء حساب مثلثات الفصل الدراسى الاول ', 0, 20, 0, 0, 0, ''),
(30, 'التفاضل و التكامل ', 'مجموعه دروس الخاصه بجزء التفاضل والتكامل  ', 0, 11, 0, 0, 0, ''),
(31, 'الجبر والهندسه الفرغيه ', 'مجموعه دروس الخاصه بجزء الجبر والهندسه الفرغيه   الفصل الدراسى الاول ', 0, 11, 0, 0, 0, ''),
(32, 'الاستاتيكا', 'مجموعه دروس الخاصه بجزء الاستاتيك الفصل الدراسى الاول ', 0, 11, 0, 0, 0, ''),
(33, 'الديناميكا', 'مجموعه دروس الخاصه بجزء الديناميكاالفصل الدراسى الاول ', 0, 11, 0, 0, 0, ''),
(38, 'الاحصاء', ' الاحصاء للصف الثالث الثانوي ', 8, 0, 0, 0, 0, ''),
(39, 'مراجعة على ما لم يتم تدريسة العام الماضي', 'مراجعة على ما لم يتم تدريسة العام الماضي', 0, 7, 0, 0, 0, ''),
(40, 'مراجعة على ما لم يتم تدريسة العام الماضي', 'مراجعة على ما لم يتم تدريسة العام الماضي', 0, 8, 0, 0, 0, ''),
(41, 'مراجعة على ما لم يتم تدريسة العام الماضي', 'مراجعة على ما لم يتم تدريسة العام الماضي', 0, 9, 0, 0, 0, ''),
(42, 'مراجعة على ما لم يتم تدريسة العام الماضي', 'مراجعة على ما لم يتم تدريسة العام الماضي', 0, 10, 0, 0, 0, ''),
(43, 'مراجعة على ما لم يتم تدريسة العام الماضي', 'مراجعة على ما لم يتم تدريسة العام الماضي', 0, 20, 0, 0, 0, ''),
(44, 'مراجعة على ما لم يتم تدريسة العام الماضي', 'مراجعة على ما لم يتم تدريسة العام الماضي', 0, 11, 0, 0, 0, ''),
(46, 'الاحصاء', 'الاحصاء', 0, 38, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_data` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `member_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `message_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `comment_data`, `status`, `member_id`, `post_id`, `lesson_id`, `message_id`) VALUES
(15, 'لا يوجد امتحان على ذلك الدرس', '2020-08-08', 1, 1, NULL, 24, NULL),
(17, 'لا يوجد امتحان على ذلك الدرس', '2020-08-08', 1, 1, NULL, 25, NULL),
(19, 'لا يوجد امتحان على ذلك الدرس', '2020-08-08', 1, 1, NULL, 26, NULL),
(21, 'لا يوجد امتحان على ذلك الدرس', '2020-08-08', 1, 1, NULL, 27, NULL),
(23, 'لا يوجد امتحان على ذلك الدرس', '2020-08-08', 1, 1, NULL, 28, NULL),
(24, 'لا يوجد امتحان على ذلك الدرس	', '2020-08-10', 1, 1, NULL, 5, NULL),
(25, 'لا يوجد امتحان على ذلك الدرس', '2020-08-10', 1, 1, NULL, 6, NULL),
(26, 'لا يوجد امتحان على ذلك الدرس', '2020-08-10', 1, 1, NULL, 9, NULL),
(27, 'لا يوجد امتحان على ذلك الدرس', '2020-08-10', 1, 1, NULL, 8, NULL),
(28, 'لا يوجد امتحان على ذلك الدرس', '2020-08-10', 1, 1, NULL, 11, NULL),
(29, 'لا يوجد امتحان على ذلك الدرس', '2020-08-10', 1, 1, NULL, 10, NULL),
(31, 'استاذ محمد لو سمحت مش فاهمه اخر جزء في السؤال  الخامس في الشكل الرباعي الدائري\r\n', '2020-08-14', 0, 104, NULL, 52, NULL),
(32, 'اين هو الامتحان الخاص بهذا الدرس', '2020-08-15', 0, 130, NULL, 28, NULL),
(33, 'استاذ لو سمحت مفيش امتحان على الدرس', '2020-08-16', 0, 74, NULL, 24, NULL),
(34, 'استاذ لو سمحت مفيش امتحان على الدرس', '2020-08-16', 0, 74, NULL, 24, NULL),
(35, 'تسلم استاذنا ربنا يبارك فى حضرتك \r\n', '2020-08-18', 0, 98, NULL, 10, NULL),
(36, 'شكرا على الشرح الجميل دا يا استاذ محمد', '2020-08-19', 0, 163, NULL, 24, NULL),
(37, 'lil', '2020-08-30', 1, 1, 14, NULL, NULL),
(38, ']vs lil', '2020-08-30', 0, 1, NULL, 64, NULL),
(39, 'lili', '2020-08-30', 1, 1, NULL, 64, NULL),
(42, 'dddddddddddd', '2020-12-30', 0, 1, NULL, NULL, NULL),
(43, 'dddddddddddd', '2020-12-30', 0, 1, NULL, NULL, NULL),
(44, 'dddddddddddd', '2020-12-30', 1, 1, NULL, NULL, NULL),
(45, 'dddd', '2020-12-30', 0, 1, NULL, NULL, NULL),
(46, 'dddd', '2020-12-30', 0, 1, NULL, NULL, NULL),
(47, 'ddddddd', '2020-12-30', 0, 1, 14, NULL, NULL),
(48, 'ddddddadoajiaidy8yd7', '2020-12-30', 0, 1, 14, NULL, NULL),
(49, 'd.l;l;dl.,d.,dkodjl', '2020-12-30', 0, 1, 14, NULL, NULL),
(50, 'd.l;l;dl.,d.,dkodjl', '2020-12-30', 0, 1, 14, NULL, NULL),
(51, 'ddokkdkkodokodkd;;ldpodkd', '2020-12-30', 1, 1, 14, NULL, NULL),
(52, 'dkdkjkjdijd', '2020-12-30', 1, 1, 14, NULL, NULL),
(53, 'jjgauigiuhik', '2020-12-30', 1, 1, 21, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `exam_date` date NOT NULL,
  `categ_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `link` varchar(225) NOT NULL,
  `exam_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_id`, `exam_name`, `exam_date`, `categ_id`, `member_id`, `lesson_id`, `link`, `exam_desc`) VALUES
(6, 'ايجاد نهاية الدالة بيانيا', '2020-08-30', 43, 1, 5, '', ''),
(7, 'ddsdf', '2020-08-31', 43, 61, 5, 'fddds', ''),
(8, 'ds', '0000-00-00', 4, 601, NULL, 'dsds', '');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` varchar(255) NOT NULL,
  `lesson_description` text NOT NULL,
  `video` varchar(255) NOT NULL,
  `lesson_data` date NOT NULL,
  `member_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `tags` varchar(225) NOT NULL,
  `allow_comments` tinyint(4) NOT NULL DEFAULT 0,
  `Approve` tinyint(1) NOT NULL DEFAULT 0,
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `lesson_name`, `lesson_description`, `video`, `lesson_data`, `member_id`, `cat_id`, `tags`, `allow_comments`, `Approve`, `pdf`) VALUES
(5, 'مراجعة على ماسبق دراسته ', 'مراجعة على ماسبق دراسته في المرحلة الإبتدائية', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XBEErbSfpdc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-06', 1, 12, 'مراجعة,', 0, 1, '$key_1'),
(6, 'مجموعة الاعداد النسبية', 'مجموعة الاعداد النسبية', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/aviJk_Tn1sU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-07-13', 1, 12, 'الاعدادالنسبية', 0, 1, 'https://drive.google.com/file/d/1WttoeAeXywFsT15xgAF157G5uWfd-Xgc/view'),
(8, 'الجذر التعكيبى للعد النسبى ن ', 'الجذر التعكيبى للعد النسبى ن ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/WojZNyjC-XM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-07-13', 1, 12, 'الجذر ,  الجذرالتكعيبى, العددالنسبى, معادلةالدرجةالثالثة,', 0, 1, 'https://drive.google.com/file/d/1U3-CDZMbPnrGJtdTOPOoXcOv20NoOZMQ/view'),
(9, 'متوسطات المثلث ', 'متوسطات المثلث ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/sSMFMrBkWQk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-07-13', 1, 15, 'متوسطات-المثلث, نقطةتقاطع-المتوسطات,', 0, 1, 'https://drive.google.com/file/d/1SpCDN7onvc4kiVVA5BIq2q9CitMDjy9v/view'),
(10, 'حاصل الضرب الديكارتى', 'حاصل الضرب الديكارتى', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VdUdXRc60Uw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-07-13', 1, 17, 'الضرب-الديكارتى', 0, 1, 'https://drive.google.com/file/d/1Y4Z_iHis6EqBI09pAvYDCXYGYFK4JHFU/view'),
(11, 'حساب المثلثات', 'النسب المثلثية للزاوية الحادة - النسب المثلثية الاساسية لبعض الزوايا الخاصة 30-45-60', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MxxYvWP3GeQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-07-13', 1, 18, 'حساب-المثلثات, الزاويةالحادة, الزواياالخاصة', 0, 1, 'https://drive.google.com/file/d/1YOMgxUfjYGLcn1B8Kkl4P3A7ip_j4e7h/view'),
(18, 'ايجاد نهاية الدالة بيانيا', '  مقدمة في النهايات وايجاد نهاية الدالة بيانيا', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/SWzgv-Qu9mY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-07-13', 1, 23, 'تفاضل, نهايات, بيانيا, جبريا,', 0, 1, 'https://drive.google.com/file/d/1RALVaXj89itrVctTzMB5LHpPu-QYC4Aa/view'),
(20, 'الباب الأول', 'الارتباط والانحدار', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/VicbiATnhTE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-06', 1, 35, 'قانون سبيرمان, قانون بيرسون , معادلة خط الأنحدار', 0, 0, NULL),
(21, 'إشتقاق الدوال المثلثية', 'اشتقاق الدوال المثلثية واستخدام قوانين الاشتقاق ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/6fuqEoU9Y3k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-06', 1, 30, 'اشتقاق-الدوال-المثلثية , قواعد-الأشتقاق', 0, 1, 'https://drive.google.com/file/d/185qMyJ8dbc9vzLqbMthDgGOTPcDgR8bw/view'),
(22, 'حل معادلة الدرجة الثانية في متغير واحد', 'حل معادلة الدرجة الثانية في متغير واحد جبريا وبيانيا  ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/5ozWnQm0VOM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-06', 1, 19, 'معدلة, بيانيا, جبريا, القانون العام', 0, 1, NULL),
(24, 'حل المعادلات من الدرجة الأولى في مجهول واحد في ن', 'حل المعادلات من الدرجة الأولى في مجهول واحد في ن', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/BAIxUh1CS9A\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-08', 1, 39, 'المعادلات, الدرجةالاولى, مجهول-واحد, ن', 0, 1, 'https://drive.google.com/file/d/1A2MYpUTvMLuigoHkcD6buU1L3CCOCt6j/view'),
(25, 'أستخدم المعادلات لحل المسائل اللفظية', 'أستخدم المعادلات لحل المسائل اللفظية', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/wvblVz9_3m8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-08', 1, 39, 'المعادلات,المسائل-اللفظية, ن', 0, 1, 'https://drive.google.com/file/d/1AGeqGm4TeDxvu7TTF2YNk-7IcWE8c8pR/view'),
(26, 'حل المتباينات في ن', 'حل المتباينات في ن', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/wydYDnWWGbg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-08', 1, 39, 'المتباينات, ن', 0, 1, 'https://drive.google.com/file/d/1AYgiVk24X0CXEgaV82T2CF8SyDA1iCK8/view'),
(27, 'نظرية فيثاغورث', 'نظرية فيثاغورث', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xiUohFscSCM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-08', 1, 39, 'نظرية ,فيثاغورث', 0, 1, 'https://drive.google.com/file/d/1B8_3NH0zot9vfO31aYx9F78KFie8vYQ2/view'),
(28, 'التشابة', 'التشابة', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/uJgMZq1GvgU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-08', 1, 40, 'التشابة', 0, 1, 'https://drive.google.com/file/d/1BWv4hWhMiz6RrygBHZYUhAFmC6O3XXGk/view'),
(30, 'قواعد الاشتقاق', 'قواعد الاشتقاق', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/l9-1BUBvtIg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 1, 44, ' الاشتقاق,قواعدالاشتقاق ', 0, 1, 'https://drive.google.com/file/d/14Au0D6jcXMNxOd6dzTCx87YMdGhP6iMQ/view'),
(31, 'مشتقة دالة الدالة - الجزء الأول', 'مشتقة دالة الدالة (قاعدة السلسلة) - الجزء الأول ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7X9d430qiOE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 44, 'الدالة, قاعدةالسلسلة', 0, 1, 'https://drive.google.com/file/d/14CA-bZPia1-LeCiALz_cJ6i_6G0nsed6/view'),
(32, 'مشتقة دالة الدالة - الجزء الثاني', 'مشتقة دالة الدالة - الجزء الثاني', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KuH7kv6n72w\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 44, 'الدالة,مشتقةدالةالدالة ', 0, 1, 'https://drive.google.com/file/d/14MpWVs6WPsb6kvV8IzCmzbDiv5_c7HKN/view'),
(33, 'مشتقة الدوال المثلثية', 'مشتقة الدوال المثلثية', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0J41_QCAnuY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 44, 'مشتقة-الدوال-المثلثية', 0, 1, 'https://drive.google.com/file/d/14YkZ84hAaawUeW2sQLhtr0g_JooDbnAq/view'),
(34, 'تطبيقات على المشتقة - الجزء الأول', 'تطبيقات على المشتقة - الجزء الأول', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Aygf6AMY_R0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 44, 'تطبيقات-على-المشتقة ', 0, 1, 'https://drive.google.com/file/d/15NrpqeNuO7hHwnncafFMnIo_-FyLbgqV/view'),
(35, 'تطبيقات على المشتقة - الجزء الثاني', 'تطبيقات على المشتقة - الجزء الثاني', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/WT5JN1vOO3I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 44, 'تطبيقات-على-لمشتقة', 0, 1, 'https://drive.google.com/file/d/15rAKdGIhVe9dImIGwh9XpDDcjDAKIjGd/view'),
(36, 'التكامل - الجزء الأول', 'التكامل - الجزء الأول', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8xLGmIDUrkw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 44, 'التكامل ', 0, 1, 'https://drive.google.com/file/d/168sK18aC_fglmLJY82UEB349b2j4sQ5X/view'),
(37, 'التكامل - الجزء الثاني', 'التكامل - الجزء الثاني', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/buGeqDgvVJ0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 44, 'التكامل', 0, 1, 'https://drive.google.com/file/d/16JLBGbWc3H4x-oKmqKBi6ht7Fusfqt31/view'),
(38, 'تكامل بعض الدوال المثلثية', 'تكامل بعض الدوال المثلثية', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1BdqGWqi2eA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 44, 'تكامل , الدوال-المثلثية', 0, 1, 'https://drive.google.com/file/d/16pSvLoeOOcVC79ZbW58xtn3z878sPhdm/view'),
(39, 'الدوال المثلثية لمجموع و فرق زاويتين - الجزء الأول', 'الدوال المثلثية لمجموع و فرق زاويتين - الجزء الأول', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/cTTodTeJC40\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 44, 'الدوال-المثلثية ,لمجموع-و-فرق-زاويتين', 0, 1, 'https://drive.google.com/file/d/16pSvLoeOOcVC79ZbW58xtn3z878sPhdm/view'),
(40, 'الدوال المثلثية لمجموع وفرق زاويتين - الجزء الثاني', 'الدوال المثلثية لمجموع وفرق زاويتين - الجزء الثاني', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zTqQc9WxAKQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 44, 'الدوال-المثلثية, لمجموع-و-فرق-زاويتين', 0, 1, 'https://drive.google.com/file/d/17AFbbg1JVJjIeWdNQIXTPF97wFYMp42g/view'),
(41, 'الدوال المثلثية لضعف قياس الزاوية - الجزء الأول', 'الدوال المثلثية لضعف قياس الزاوية - الجزء الأول', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1Fn3CPVOgZM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 44, 'الدوال المثلثية, ضعف-قياس-الزاوية', 0, 1, 'https://drive.google.com/file/d/17eQ5uP_G_W3E5XwvYvj9u7O8aCw0QYLF/view'),
(42, 'الدوال المثلثية لضعف قياس الزاوية - الجزء الثاني', 'الدوال المثلثية لضعف قياس الزاوية - الجزء الثاني', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XLZepu3w9_o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 44, 'الدوال-المثلثية, ضعف-قياس-الزاوية ', 0, 1, 'https://drive.google.com/file/d/17oL3GfvLuH18DkFS8jYvQsSQ49gncXeo/view'),
(43, 'قاعدة هيرون', 'قاعدة هيرون', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VKx7PW36aqs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 44, 'قاعدة-هيرون', 0, 1, 'https://drive.google.com/file/d/1ZtUgG1VnRyZu355FB-PnTrmQsL1GHRWO/view'),
(44, 'معادلة الخط المستقيم - الجزء الأول', 'معادلة الخط المستقيم - الجزء الأول', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TIwrrakpz-c\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 42, 'معادلة-الخط-المستقيم', 0, 1, 'https://drive.google.com/file/d/18RV0Jfi2GcYtDvuqIe9UVJLzIBK-uvP1/view'),
(45, 'معادلة الخط المستقيم - الجزء الثاني', 'معادلة الخط المستقيم - الجزء الثاني', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_7FKiuEyzuU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 42, 'معادلة-الخط-المستقيم', 0, 1, 'https://drive.google.com/file/d/18SVr4SVK9OFAplEfdjz5MZATuNUwxzsV/view'),
(46, 'قياس الزاوية بين مستقيمين', 'قياس الزاوية بين مستقيمين', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ba_VpmrBZyo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 42, 'قياس-الزاوية-بين-مستقيمين', 0, 1, 'https://drive.google.com/file/d/19hFTi2WTO3-i8dznyo9xSGOPsLBANy51/view'),
(47, 'طول العمود المرسوم من نقطة إلى مستقيم', 'طول العمود المرسوم من نقطة إلى مستقيم', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mAk1e7VUDVY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 42, 'طول-العمود-المرسوم-من-نقطة-إلى-مستقيم', 0, 1, 'https://drive.google.com/file/d/19qEmtBkJp5bEHXhzEzgNuK2jJWZBuvLQ/view'),
(48, 'المعادلة العامة للمستقيم المار بنقطة تقاطع مستقيمين', 'المعادلة العامة للمستقيم المار بنقطة تقاطع مستقيمين', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eYcXt3FlScA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 42, 'المعادلةالعامة, المستقيم-المار-بنقطة-تقاطع-مستقيمين', 0, 1, 'https://drive.google.com/file/d/197RnBkS6UFLSdbETYnw2SP47QcWiKQ03/view'),
(49, 'القطاع الدائرى', 'القطاع الدائرى ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/OnuHpqkGP1k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 42, 'القطاع-الدائرى ', 0, 1, 'https://drive.google.com/file/d/1Ag3vagLW2h71HCkGfxrBsEPEWEyY0cvS/view'),
(50, 'القطعة الدائرية', 'القطعة الدائرية', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/dzitCukOrhM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 42, 'القطعةالدائرية', 0, 1, 'https://drive.google.com/file/d/1AwI-FKAvx2rw2joL41fEKR3NW8cbblb6/view'),
(51, ' المساحات', 'المساحات', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/-440MnL2PRM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 42, 'المساحات', 0, 1, 'https://drive.google.com/file/d/1AdE56xHS_dNXx4WEPF0huTlEdxyM3-oJ/view'),
(52, '  الشكل الرباعي الدائري', '  الشكل الرباعي الدائري', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/r2t_iRVDZMs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 41, '  الشكل-الرباعي-الدائري', 0, 1, 'https://drive.google.com/file/d/1UF-wLjoKlq1vYG3yFeZtZ7zr49ORd0Ek/view'),
(53, ' خواص الشكل الرباعي الدائري', ' خواص الشكل الرباعي الدائري', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/x5qSYbF8Vo8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 41, '  الشكل-الرباعي-الدائري', 0, 1, 'https://drive.google.com/file/d/1UdFTwPnmz-PjMnYk0jWfoMkDnQQEtbtT/view'),
(54, 'خواص الشكل الرباعي الدائري - الجزء الثاني', 'خواص الشكل الرباعي الدائري - الجزء الثاني', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1BVGiGeT4pg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 41, '  الشكل-الرباعي-الدائري', 0, 1, 'https://drive.google.com/file/d/1UdFTwPnmz-PjMnYk0jWfoMkDnQQEtbtT/view'),
(55, 'العلاقة بين مماسات الدائرة', 'العلاقة بين مماسات الدائرة', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Vj6S9mo_FxQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 41, 'العلاقة-بين-مماسات-الدائرة', 0, 1, 'https://drive.google.com/file/d/1UnRAGilyQnf7nUvTF6UULc_1xSPhITkE/view'),
(56, 'الزاوية المماسية - الجزء الأول', 'الزاوية المماسية - الجزء الأول', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/X_oQ7WhzKYs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 41, 'الزاويةالمماسية', 0, 1, 'https://drive.google.com/file/d/1V39vqf9uerkJ-2VSXt4wABpSfZV3Lznk/view'),
(57, 'الزاوية المماسية - الجزء الثاني ', 'الزاوية المماسية - الجزء الثاني ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/BAU2cTPKVnU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 41, 'الزاويةالمماسية ', 0, 1, 'https://drive.google.com/file/d/1V39vqf9uerkJ-2VSXt4wABpSfZV3Lznk/view'),
(58, 'عكس نظرية فيثاغورث', 'عكس نظرية فيثاغورث', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Q6g36Jz6kYk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 40, 'عكس-نظرية-فيثاغورث', 0, 1, 'https://drive.google.com/file/d/1BoqVe9C_D7YVxPP3BzvRqZ-70rrcY92-/view'),
(59, 'المساقط', 'المساقط', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/IircdWDQ3Dg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 40, 'المساقط', 0, 1, 'https://drive.google.com/file/d/1BuXCV3Wiih9R0S2YHIuSE8r4tMEy2TKM/view'),
(60, 'نظرية إقليدس ', 'نظرية إقليدس ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aOjwRPhMhrE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 40, 'نظريةإقليدس ', 0, 1, 'https://drive.google.com/file/d/1C-JXOjVLkMyNPMa-kc0OQxNWZ31Zj4_d/view'),
(62, 'الوحدة الأولى', 'الوحدة الأولى', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VicbiATnhTE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 46, 'الوحدةالأولى', 0, 1, 'https://drive.google.com/file/d/1vX5L9lTBUYD_zlOot7J8OFc0w7JRCIyl/view'),
(63, 'ايجاد نهاية الدالة بيانيا', 'مقدمة في النهايات وايجاد نهاية الدالة بيانيا', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/SWzgv-Qu9mY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 28, 'تفاضل, نهايات, بيانيا, جبريا,', 0, 1, 'https://drive.google.com/file/d/1RALVaXj89itrVctTzMB5LHpPu-QYC4Aa/view'),
(64, 'معادلة الخط المستقيم - الجزء الأول', 'معادلة الخط المستقيم - الجزء الأول', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TIwrrakpz-c\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 43, 'معادلة-الخط-المستقيم', 0, 1, 'https://drive.google.com/file/d/18RV0Jfi2GcYtDvuqIe9UVJLzIBK-uvP1/view'),
(65, 'معادلة الخط المستقيم - الجزء الثاني', 'معادلة الخط المستقيم - الجزء الثاني', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_7FKiuEyzuU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 43, 'معادلة-الخط-المستقيم', 0, 1, 'https://drive.google.com/file/d/18SVr4SVK9OFAplEfdjz5MZATuNUwxzsV/view'),
(66, 'قياس الزاوية بين مستقيمين', 'قياس الزاوية بين مستقيمين', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ba_VpmrBZyo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 43, 'قياس-الزاوية-بين-مستقيمين', 0, 1, 'https://drive.google.com/file/d/19hFTi2WTO3-i8dznyo9xSGOPsLBANy51/view'),
(67, 'قياس الزاوية بين مستقيمين', 'قياس الزاوية بين مستقيمين', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ba_VpmrBZyo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 43, 'قياس-الزاوية-بين-مستقيمين', 0, 1, 'https://drive.google.com/file/d/19hFTi2WTO3-i8dznyo9xSGOPsLBANy51/view'),
(68, 'طول العمود المرسوم من نقطة إلى مستقيم', 'طول العمود المرسوم من نقطة إلى مستقيم', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mAk1e7VUDVY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 43, 'طول-العمود-المرسوم-من-نقطة-إلى-مستقيم', 0, 1, 'https://drive.google.com/file/d/19qEmtBkJp5bEHXhzEzgNuK2jJWZBuvLQ/view'),
(69, 'المعادلة العامة للمستقيم المار بنقطة تقاطع مستقيمين', 'المعادلة العامة للمستقيم المار بنقطة تقاطع مستقيمين', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eYcXt3FlScA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 43, 'المعادلةالعامة, المستقيم-المار-بنقطة-تقاطع-مستقيمين', 0, 1, 'https://drive.google.com/file/d/197RnBkS6UFLSdbETYnw2SP47QcWiKQ03/view'),
(70, 'القطاع الدائرى', 'القطاع الدائرى', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/OnuHpqkGP1k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 43, 'القطاع-الدائرى ', 0, 1, 'https://drive.google.com/file/d/1Ag3vagLW2h71HCkGfxrBsEPEWEyY0cvS/view'),
(71, 'القطعة الدائرية', 'القطعة الدائرية', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/dzitCukOrhM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 43, 'القطعةالدائرية', 0, 1, 'https://drive.google.com/file/d/1AwI-FKAvx2rw2joL41fEKR3NW8cbblb6/view'),
(72, ' المساحات', ' المساحات', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/-440MnL2PRM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-11', 61, 43, 'المساحات', 0, 1, 'https://drive.google.com/file/d/1AdE56xHS_dNXx4WEPF0huTlEdxyM3-oJ/view'),
(73, 'حل معادلة الدرجة الثانية في متغير واحد ', 'حل معادلة الدرجة الثانية في متغير واحد ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5ozWnQm0VOM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-08-13', 61, 4, ' معادلةالدرجةالثانية  ', 0, 0, 'https://drive.google.com/file/d/1VBPraIQGSB_m62x8QwCpa-LNB5Ve9eMN/view');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `groupid` int(11) NOT NULL DEFAULT 0,
  `regstatus` int(11) NOT NULL DEFAULT 0,
  `date` date NOT NULL,
  `avatar` varchar(225) NOT NULL DEFAULT 'img.png',
  `lil` text DEFAULT NULL,
  `exam answer` int(11) DEFAULT NULL,
  `lil_data` date DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `only` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`userid`, `username`, `password`, `email`, `fullname`, `groupid`, `regstatus`, `date`, `avatar`, `lil`, `exam answer`, `lil_data`, `phone`, `only`) VALUES
(1, 'احمد الطارون', '601f1889667efaebb33b8c12572835da3f027f78', 'amged@gmail.com', 'احمد الطارون', 1, 1, '2020-07-15', '1.jpg', 'يجب الدراسة', 0, '2020-08-30', 1066343874, 1),
(59, 'Farg', '601f1889667efaebb33b8c12572835da3f027f78', 'frjalastwrt914@gmail.com', 'Farg Altonoby', 4, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1022551931, 0),
(61, 'محمد عبد العزيز عبد العال', 'f4b6916edb41fdc54ae5619079613089fa33ccd5', NULL, NULL, 6, 0, '2020-08-11', '6d6bffc6-c153-4615-9888-2a1c086d8fa7.jpg', 'صباح الخير ياستاذ محمد يارب الصورة تعجبك', NULL, '2020-08-11', 1000919748, 0),
(62, 'MOSTAFA ', '24d3c6fe567c74749a2534b1ca2bd3d611528e27', NULL, NULL, 1, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1066954763, 0),
(63, 'حبيبه العشري', '03769634da4fa5b9efd59c75f29fec2c602de96c', NULL, NULL, 5, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1021085849, 0),
(64, 'محمد احمد محمود سليمان ', 'fd9c3fa50bb85a66a7e5c67353e2db4769c5f0ff', NULL, NULL, 5, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1013636620, 0),
(65, 'مها عبد القادر خليل النقراشى ', '433c1f276743aa9e1116477c1c4a6a8c9de19e90', NULL, NULL, 5, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1012714387, 0),
(66, 'نهال ', 'e6263e37321216d4a6a09bc715e2b86b47dd2a7e', NULL, NULL, 5, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1011266261, 0),
(67, 'على ابراهيم مرعى ', '5a962c70c4ec058428ac04888cfc07c24f900a7e', NULL, NULL, 4, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1060415968, 0),
(68, 'بسمله مصطفى احمد هلال', '8263c55a09d9026c3f7a557a18ac8cf911b8fa77', NULL, NULL, 5, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1030599908, 0),
(69, 'نهال عادل فرج ', 'e6263e37321216d4a6a09bc715e2b86b47dd2a7e', NULL, NULL, 5, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1011266261, 0),
(70, 'آلاء مصطفى أحمد البحيري', 'b9d78c03df049e61e14b14fc4123104ed54eab17', NULL, NULL, 3, 0, '2020-08-11', 'img.png', '', NULL, '2020-08-11', 1090460667, 0),
(71, 'هدير ابراهيم عباس', '0a31ab323027282ca93c3ed048a80133dd23906b', NULL, NULL, 5, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1010256028, 0),
(72, 'محمداسماعيل هلال', '0f4783e886ee4daa8945b38f9b206e07553d87fd', NULL, NULL, 3, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1062592982, 0),
(73, 'شهد عبد البصير محمد محمد علم الدين', '8bca3d16166d680fe9641b52701dbce9a2a05941', NULL, NULL, 4, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1011722121, 0),
(74, 'حنين محمود هارون', '63b2216c6f0716c62b34c5b6e9dc9215242aafb6', NULL, NULL, 2, 0, '2020-08-11', 'img.png', '        الدروس ', NULL, '2020-08-12', 1012123028, 0),
(75, 'Asmaa metwally ', '345120426285ff8b1d43653a4d078170b4761f75', NULL, NULL, 3, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1069034226, 0),
(76, 'Ibrahim shaban elashry', '7ac79f22c15e3e4ca71ce5cc01657154a318dc84', NULL, NULL, 5, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1060130315, 0),
(77, ' إسراء مصطفى أحمد البحيري', '04d6c54fea3d3e0536d2743beb6abecd9a2a15a6', NULL, NULL, 2, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1065362022, 0),
(78, 'Aya Rabie Ramadan ', '604a8da73ab6ebe959568e5a90e4b87b3e6ba6cc', NULL, NULL, 3, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1033707912, 0),
(79, 'محمد مصطفى مصطفى  الشامي ', '027b723187896512712a6e45b94581faa5f7dc85', NULL, NULL, 5, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1013855757, 0),
(80, 'جميله بدوي على الشنواني', '7d63d53beb2221c51fe9a6eecd044aeb78d952a3', NULL, NULL, 3, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1012588986, 0),
(81, 'Mohahed Saber Elshamy ', 'fdaa35ad2bfc1a8616878fb6d9981e4a701da1ee', NULL, NULL, 3, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1098738454, 0),
(82, 'خالد إبراهيم محمد جمعه سعد ', 'caa7380cd7ac83ac169265ea681aca08e00eb380', NULL, NULL, 7, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1025401357, 0),
(83, 'خالد إبراهيم محمد جمعه ', 'a5883ba8caa8b7c6cb8de22b64f9820235344ee4', NULL, NULL, 7, 0, '2020-08-11', 'img.png', NULL, NULL, NULL, 1025401357, 0),
(84, 'محمد شوقي عبدالرحمن ', 'b80a9aed8af17118e51d4d0c2d7872ae26e2109e', NULL, NULL, 5, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1098454834, 0),
(85, 'إسراء محمد علي الشناوي', 'd2252e6c6934bda8dde4c86cce7b5561fb438e92', NULL, NULL, 7, 0, '2020-08-12', 'img.png', '', NULL, '2020-08-12', 1007828668, 0),
(86, 'أحمد شعبان صبرة', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, 4, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1097884060, 0),
(87, 'رزق الغنام', '622d09f951819c12a6e3d2d6c99db6e7d8f48d33', NULL, NULL, 7, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1024981466, 0),
(88, 'Rizk Alghnnam', '622d09f951819c12a6e3d2d6c99db6e7d8f48d33', NULL, NULL, 7, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1024981466, 0),
(89, 'رزق السيد الغنام', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, 7, 0, '2020-08-12', 'img.png', '', NULL, '2020-08-12', 100000111, 0),
(90, 'محمد احمد حنفي محمد', 'd5be22159376e6a83114994fcfd150fc7137ff4e', NULL, NULL, 5, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1018093489, 0),
(91, 'اسمه عادل ابوشعيشع', 'f91d8f69c042267444b74cc0b3c747757eb0e065', NULL, NULL, 5, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1021472140, 0),
(92, 'Ahmed', '601f1889667efaebb33b8c12572835da3f027f78', NULL, NULL, 1, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 2147483647, 0),
(93, 'شروق وليد ريحان', 'bd5e5eb049f3907175f54f5a571ba6b9fdea36ab', NULL, NULL, 2, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1092590513, 0),
(94, 'هبه وليد ريحان', 'bd5e5eb049f3907175f54f5a571ba6b9fdea36ab', NULL, NULL, 1, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1027059923, 0),
(95, 'ملك عمرو السيد ', '1fab377b85e59d1de7c2a3eecd3a00120d11456a', NULL, NULL, 5, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1033465003, 0),
(96, 'آلاء ماهر عبد الحفيظ العيسوى', 'd0b9fa9b8e144886de01ac120b050b40a902cce7', NULL, NULL, 3, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1030005727, 0),
(97, 'كريم محمود عبد الحي عباس العمري', '38d1fdb30b3d4c9ab8985e3fed8bc43d4834696c', NULL, NULL, 7, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1553240546, 0),
(98, 'أنس السيد فتحي عطية رزق الويشي', '0c0364292f255f505a1826b5bbe7ddf91082345c', NULL, NULL, 3, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1062101562, 0),
(99, 'يوسف السيد مصطفي عبدالفتاح علي ', '55cfb09c595195b5ed77be014651070d7bb48f0a', NULL, NULL, 1, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1006886897, 0),
(100, 'ريم إبراهيم فؤاد محمد ', 'cc35d6d70c9692bcd4318d48c0170420390501db', NULL, NULL, 4, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1121418048, 0),
(101, 'reem ibrahim ', 'cc35d6d70c9692bcd4318d48c0170420390501db', NULL, NULL, 4, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1121418048, 0),
(102, 'طارق السلكاوى', '8ed8a282388d84d09ed5ce55bcc44f5397d80312', NULL, NULL, 4, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1091431123, 0),
(103, 'Mai abdallah abdelbary', 'f83c80ce56ee55d59359aa0909a800f5de76735a', NULL, NULL, 4, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1004635605, 0),
(104, 'منه عبد الحميد مصطفى أبوسليمان ', '1c09791018966252b2851ddb321802f619e90576', NULL, NULL, 4, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1023957522, 0),
(105, 'طارق ابراهيم مرعي', '37306da2c361383985b1d3c10d2727e5375b97f5', NULL, NULL, 4, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1013315585, 0),
(106, 'دنيا وحيد الفرماوي ', 'a6680f1cb0758ce04ae716197ed26c4330d56d96', NULL, NULL, 2, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1025670892, 0),
(107, 'ابرار علاء كمال', 'c65972ea0caa78416b1e2307cc8599b2fe621334', NULL, NULL, 2, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1003826356, 0),
(108, 'تسنيم علاء كمال', 'c65972ea0caa78416b1e2307cc8599b2fe621334', NULL, NULL, 5, 0, '2020-08-12', 'img.png', NULL, NULL, NULL, 1093877331, 0),
(109, 'شهد ربيع شعبان يوسف', '9847556b7b9ddda51b06b21e4cfe788d2b7cb3d8', NULL, NULL, 5, 0, '2020-08-13', 'img.png', NULL, NULL, NULL, 1098646829, 0),
(110, ' ابراهيم محمد فرج عبداللا', '9cb07f709f7a2ccff87d56259f2fa11a43b7672f', NULL, NULL, 3, 0, '2020-08-13', 'img.png', NULL, NULL, NULL, 1002941847, 0),
(111, 'إسراء مصطفى أحمد البحيري ', '8d93375d653fb7340914ff83d471c0ec497fe10c', NULL, NULL, 2, 0, '2020-08-13', 'img.png', NULL, NULL, NULL, 1065362022, 0),
(112, 'جهاد سعد محمود ', 'adaff672acb5ff7910556a12afeff66fe1291d4c', NULL, NULL, 5, 0, '2020-08-13', 'img.png', NULL, NULL, NULL, 1027643626, 0),
(113, 'جهاد سعد محمود شعبان ', 'adaff672acb5ff7910556a12afeff66fe1291d4c', NULL, NULL, 5, 0, '2020-08-13', 'img.png', NULL, NULL, NULL, 1027643626, 0),
(114, 'كريم احمد طه سرور', '19aa4959b6bd6f7520a333abcce74452574d4322', NULL, NULL, 3, 0, '2020-08-13', 'img.png', NULL, NULL, NULL, 1022316145, 0),
(115, 'حنين محمود نوح', '759d32601547772fcf42309f12ff922f59214457', NULL, NULL, 4, 0, '2020-08-13', 'img.png', NULL, NULL, NULL, 1013847877, 0),
(116, 'شهد عبد البصير محمد علم الدين', '8bca3d16166d680fe9641b52701dbce9a2a05941', NULL, NULL, 4, 0, '2020-08-14', 'img.png', NULL, NULL, NULL, 1011722121, 0),
(117, 'ندا بسيونى عبدالحليم شعبان عبدالله ', '8f83c62227ecba488c2dd47f7d392aa3f6eb6148', NULL, NULL, 5, 0, '2020-08-14', 'img.png', '', NULL, '2020-08-30', 1016596300, 0),
(118, 'Malak Ibrahim Mohamed Elwehishy ', '03181b9372dc13ea6c5fbd26e628d64af029b9ab', NULL, NULL, 4, 0, '2020-08-14', 'img.png', NULL, NULL, NULL, 1062311744, 0),
(119, 'شهد عبد الحميد مصطفى أبوسليمان ', '1c09791018966252b2851ddb321802f619e90576', NULL, NULL, 2, 0, '2020-08-14', 'img.png', NULL, NULL, NULL, 1023957522, 0),
(120, 'حبيبه السيد فرج', '16cc08fde7415d9ada4a8da49620954662f21356', NULL, NULL, 3, 0, '2020-08-14', 'img.png', 'امتحانات', NULL, '2020-08-15', 1019803276, 0),
(121, 'Habiba elsayed farg', '16cc08fde7415d9ada4a8da49620954662f21356', NULL, NULL, 3, 0, '2020-08-14', 'img.png', NULL, NULL, NULL, 1019803276, 0),
(122, 'بسمله محمود مصطفى', 'a0d5158e5da743af213a30f0fbe43ccd93037d31', NULL, NULL, 4, 0, '2020-08-14', 'img.png', NULL, NULL, NULL, 1092124216, 0),
(123, ' بسمله محمود', 'a0d5158e5da743af213a30f0fbe43ccd93037d31', NULL, NULL, 4, 0, '2020-08-14', 'img.png', NULL, NULL, NULL, 1092124216, 0),
(124, 'رحمه شعبان', '93ba1608fc10b710894fb9f8c89724c6eeb44d11', NULL, NULL, 4, 0, '2020-08-14', 'img.png', NULL, NULL, NULL, 1012932033, 0),
(125, 'محمد حسب الله عباس الخولي ', '6eeafaef013319822a1f30407a5353f778b59790', NULL, NULL, 4, 0, '2020-08-14', 'img.png', NULL, NULL, NULL, 1025878685, 0),
(126, 'Mohamed Hasaballah Abass Elkholy ', 'fc1628a8f3c1f3cc9476320d6e6db7a134a6f8cf', NULL, NULL, 1, 0, '2020-08-14', 'img.png', NULL, NULL, NULL, 1025878685, 0),
(127, 'رحمه شعبان علي ', '93ba1608fc10b710894fb9f8c89724c6eeb44d11', NULL, NULL, 4, 0, '2020-08-14', 'img.png', NULL, NULL, NULL, 1012932033, 0),
(128, 'نادر عثمان الروينى', '24beb4fc5c19d868412393abf6d8d241d5a6bd49', NULL, NULL, 4, 0, '2020-08-14', 'img.png', NULL, NULL, NULL, 1270423787, 0),
(129, 'علي نصر علي شليل', 'a514e8ae99db97990c83545f5ac283dc82c6f346', NULL, NULL, 4, 0, '2020-08-14', 'img.png', NULL, NULL, NULL, 1029010564, 0),
(130, 'Kareem Ahmed Soroor', '7db60a4dadc12e642a3363b97815cda2a0ec3ad8', NULL, NULL, 3, 0, '2020-08-15', 'img.png', '', NULL, '2020-08-15', 1022316145, 0),
(131, 'Omar Shawkat ', 'd637e6edaf4193ffcd807b5f60282a26ff72989b', NULL, NULL, 1, 0, '2020-08-15', 'img.png', NULL, NULL, NULL, 1060028481, 0),
(132, 'هدير ابراهيم عباس ابراهيم ', '0a31ab323027282ca93c3ed048a80133dd23906b', NULL, NULL, 5, 0, '2020-08-15', 'img.png', NULL, NULL, NULL, 1010256028, 0),
(133, 'احمد عبد المنعم ابو سليمان', 'c94286f2a3a73a3c2f0357c2644216adbbb09569', NULL, NULL, 3, 0, '2020-08-15', 'img.png', NULL, NULL, NULL, 1003313566, 0),
(134, 'بسملة احمد طه سرور', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, 1, 0, '2020-08-15', 'img.png', NULL, NULL, NULL, 1002839310, 0),
(135, ' احمد عبدالمنعم ابوسليمان ', 'c94286f2a3a73a3c2f0357c2644216adbbb09569', NULL, NULL, 3, 0, '2020-08-15', 'img.png', NULL, NULL, NULL, 1003313566, 0),
(136, 'احمد عبدالمنعم ابوسليمان', 'c94286f2a3a73a3c2f0357c2644216adbbb09569', NULL, NULL, 3, 0, '2020-08-15', 'img.png', NULL, NULL, NULL, 1003313566, 0),
(137, 'حبيبة غانم ابراهيم', 'b74a50a0348b1e31d75933917bde17fdf8804957', NULL, NULL, 7, 0, '2020-08-15', 'img.png', NULL, NULL, NULL, 1159317446, 0),
(138, 'ريم ابراهيم فؤاد', 'fcba4e0816ae0fe76d9fa72644a83810615f1059', NULL, NULL, 4, 0, '2020-08-15', 'img.png', NULL, NULL, NULL, 1121418048, 0),
(139, 'ريم ابراهيم', '0f0c8145a4523f2ffefbe81b281a187443096341', NULL, NULL, 4, 0, '2020-08-15', 'img.png', NULL, NULL, NULL, 1121418048, 0),
(140, 'محمد محمود حسن الشناوي', '069e348b6590e009eb74dff5c6a54870c62d8cda', NULL, NULL, 2, 0, '2020-08-16', 'img.png', NULL, NULL, NULL, 1000847012, 0),
(141, 'Shazly ashraf', '0ed941bc3f1ba59edb9876c5111f9eb5f5e2ac19', NULL, NULL, 7, 0, '2020-08-16', 'img.png', NULL, NULL, NULL, 1094931688, 0),
(142, 'عبير عبدالعزيز صديق 1', '54d51085fcfc34ef02358d2c30be548c2d87c981', NULL, NULL, 4, 0, '2020-08-16', 'img.png', NULL, NULL, NULL, 1097838274, 0),
(143, 'صفية عبدالعزيز صديق 2', 'ed11bd75c84f832e143e819b62f87f753b62b0bc', NULL, NULL, 1, 0, '2020-08-16', 'img.png', NULL, NULL, NULL, 1097838274, 0),
(144, 'عبير عبدالعزيز حسين صديق', '54d51085fcfc34ef02358d2c30be548c2d87c981', NULL, NULL, 5, 0, '2020-08-16', 'img.png', NULL, NULL, NULL, 1097838274, 0),
(145, 'Kareem Soroor', '72db7c48cbf94bc9a130fd34407007d02f82daca', NULL, NULL, 3, 0, '2020-08-16', 'img.png', NULL, NULL, NULL, 1022316145, 0),
(146, 'reem esmail', '32d3e7f77ed1521a03286e5e1f6bd1287008ac49', NULL, NULL, 4, 0, '2020-08-16', 'img.png', NULL, NULL, NULL, 1022542635, 0),
(147, 'ZEINAB EBRIHEM', '2df592f80c6ba2c843781e79c5b65872f0c339ba', NULL, NULL, 5, 0, '2020-08-16', 'img.png', NULL, NULL, NULL, 1094823434, 0),
(148, 'احمد رمضان الراوي احمد', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, 7, 0, '2020-08-16', 'img.png', '', NULL, '2020-08-16', 1008466359, 0),
(149, 'هاجر رزق السيد اسماعيل', '3a826909a930f8837e1b95a4c20091e474c44af4', NULL, NULL, 2, 0, '2020-08-17', 'img.png', NULL, NULL, NULL, 1003596176, 0),
(150, 'نوران أحمد عبدالله الدسوقي', 'efd4c794c96694fcb0d19df807f8af6d430c93a7', NULL, NULL, 5, 0, '2020-08-17', 'img.png', NULL, NULL, NULL, 1008643680, 0),
(151, 'هبه قدري عبدالنبي رمضان مرزوق ', 'd7c04f3499a1be77114c1f6d7d7c0012353295a6', NULL, NULL, 5, 0, '2020-08-17', 'img.png', NULL, NULL, NULL, 1061223213, 0),
(152, 'امنية محمد علي مرعي', '3289685226539ff24f592472a9fcf197fbe143dd', NULL, NULL, 1, 0, '2020-08-17', 'img.png', NULL, NULL, NULL, 1065599406, 0),
(153, 'حسناء عبد السلام عوض عبد السلام', '51e2b5fbcdc0c9afd8d44154957aa0603e83d676', NULL, NULL, 5, 0, '2020-08-17', 'img.png', NULL, NULL, NULL, 1062154258, 0),
(154, 'رحمه رضا محمد عطيه ', 'b05006147d797812699b09bc2b627e8ae0c5899f', NULL, NULL, 4, 0, '2020-08-18', 'img.png', NULL, NULL, NULL, 1067834329, 0),
(155, 'امل رضا محمد عطيه ', 'a910039ea1f645db337d2d37d74192c4a491c1c6', NULL, NULL, 5, 0, '2020-08-18', 'img.png', NULL, NULL, NULL, 1026283809, 0),
(156, 'مي ممدوح رشاد ', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, 5, 0, '2020-08-18', 'img.png', NULL, NULL, NULL, 1012966344, 0),
(157, 'شهد حلمي السقا', 'e9c96220c1de8dc786b54f31f7846e7a61b1cc54', NULL, NULL, 4, 0, '2020-08-18', 'img.png', NULL, NULL, NULL, 1023594541, 0),
(158, 'ندى النشرتى', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, 5, 0, '2020-08-18', 'img.png', '', NULL, '2020-08-18', 104654000, 0),
(159, 'رحمة احمد احمد ابواسماعيل', 'af106f4de5f230c749e489ff4849462b857f64f0', NULL, NULL, 5, 0, '2020-08-19', 'img.png', NULL, NULL, NULL, 1092094110, 0),
(160, 'رنا محمد عبد البارى محمد', 'ed9e8b4bbc396f32c0cf69359b9fc19ff9c1b664', NULL, NULL, 5, 0, '2020-08-19', 'img.png', NULL, NULL, NULL, 1019734834, 0),
(161, 'رنا محمد عبد البارى', '6c86ae38e22a578c9c09a5d385d953bb4e6beff9', NULL, NULL, 5, 0, '2020-08-19', 'img.png', NULL, NULL, NULL, 1019734834, 0),
(162, 'محمود فؤاد', '5685065f5f063c6b745002e7b5d134ff8b900b49', NULL, NULL, 4, 0, '2020-08-19', 'img.png', NULL, NULL, NULL, 1015546787, 0),
(163, 'ندى ياسر السيد', '6d7933266c6ff33489fba3fe4e97010ab455b35d', NULL, NULL, 2, 0, '2020-08-19', 'img.png', '', NULL, '2020-08-19', 1093917920, 0),
(164, 'سلمي عجيزه', '9b06ae137d1fbfba0995478894a6add1e8246e72', NULL, NULL, 5, 0, '2020-08-19', 'img.png', NULL, NULL, NULL, 1060840153, 0),
(165, 'ريم ابراهيم فؤاد محمد ابراهيم', 'f3ba16186c3bed4356eb5d05b867ca4109b963aa', NULL, NULL, 4, 0, '2020-08-20', 'img.png', NULL, NULL, NULL, 1121418048, 0),
(166, 'محمود محمد ', '6bfa378d533b8828f61d5095a803e37adc8069af', NULL, NULL, 7, 0, '2020-08-20', 'img.png', NULL, NULL, NULL, 1010778758, 0),
(167, 'عصام حمدان', '7645e6a0695ef3d5f01db976a96219a33e460b2f', NULL, NULL, 7, 0, '2020-08-21', 'img.png', NULL, NULL, NULL, 1277488140, 0),
(168, 'abuanss esam', '7645e6a0695ef3d5f01db976a96219a33e460b2f', NULL, NULL, 7, 0, '2020-08-21', 'img.png', '', NULL, '2020-08-21', 1277488140, 0),
(169, 'خالد إبراهيم محمد ', 'c5956ec928f65320dfbd91a3ccb63da6afae6b43', NULL, NULL, 7, 0, '2020-08-21', 'img.png', '', NULL, '2020-08-21', 1025401357, 0),
(170, 'باسل محمد لطفى عصر', '30a77bd545db9c304174a816d0d00c7344e40476', NULL, NULL, 3, 0, '2020-08-21', 'img.png', NULL, NULL, NULL, 1025272788, 0),
(171, 'على محمد علي طه ', 'ec22ff6728f2ea10d11ef21b19f9e5b4f5a0954d', NULL, NULL, 7, 0, '2020-08-21', 'img.png', NULL, NULL, NULL, 2147483647, 0),
(172, 'نسمه عادل ابوشعيشع', 'f91d8f69c042267444b74cc0b3c747757eb0e065', NULL, NULL, 2, 0, '2020-08-21', 'img.png', NULL, NULL, NULL, 1021472140, 0),
(173, 'إيهاب إبراهيم فؤاد الشرقاوي ', '6eb10d022250950912652aee8e5ad5459a00c81e', NULL, NULL, 5, 0, '2020-08-22', 'img.png', NULL, NULL, NULL, 1553259629, 0),
(174, 'محمد سليمان على الطباخ', 'd6b8d523d06e8ae43f226845882a59e9b629000e', NULL, NULL, 5, 0, '2020-08-22', 'img.png', NULL, NULL, NULL, 1018091255, 0),
(175, 'امنية محمد فاروق غزلان', '4a58ebb449294e6cc0d26537cbec3b32f5e7782b', NULL, NULL, 4, 0, '2020-08-22', 'img.png', NULL, NULL, NULL, 1093472125, 0),
(176, 'ايه رمضان مرزوق ', 'c2202cf4c594883fda660a104a2571e8e081f218', NULL, NULL, 4, 0, '2020-08-22', 'img.png', NULL, NULL, NULL, 1010932677, 0),
(177, 'ايهاب إبراهيم فؤاد الشرقاوي ', '6eb10d022250950912652aee8e5ad5459a00c81e', NULL, NULL, 5, 0, '2020-08-22', 'img.png', NULL, NULL, NULL, 1553259629, 0),
(178, 'ايه رمضان مرز', 'c2202cf4c594883fda660a104a2571e8e081f218', NULL, NULL, 4, 0, '2020-08-22', 'img.png', NULL, NULL, NULL, 1010932677, 0),
(179, 'ندي شعبان حماد', '4cb33d8f8ecee558ca15f927000571aee4ed8b80', NULL, NULL, 4, 0, '2020-08-22', 'img.png', NULL, NULL, NULL, 1027135191, 0),
(180, 'ندي شعبان شعبان حماد', 'bbc8f2117881fecf796ecad7c35cca2e4df1ed4d', NULL, NULL, 4, 0, '2020-08-22', 'img.png', NULL, NULL, NULL, 1027135191, 0),
(181, 'امنيه محمد فاروق غزلان ', 'f822911e8844420ea0147df92bc6668a3433fab6', NULL, NULL, 4, 0, '2020-08-23', 'img.png', NULL, NULL, NULL, 1093472125, 0),
(182, 'سما شعبان حماد', '48767c82f678901847ce37c8bc032f8ea03a3161', NULL, NULL, 4, 0, '2020-08-23', 'img.png', NULL, NULL, NULL, 1032045444, 0),
(183, 'الدكتورة ندى حماد', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, 4, 0, '2020-08-23', 'img.png', NULL, NULL, NULL, 2147483647, 0),
(184, 'ندي حماد', '3d0f7c1389b3c7247970dab998083f23f9315309', NULL, NULL, 4, 0, '2020-08-23', 'img.png', NULL, NULL, NULL, 1027135191, 0),
(185, 'محمد عباس ', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, 4, 0, '2020-08-23', 'img.png', NULL, NULL, NULL, 159632547, 0),
(186, 'الدكتوره ندي حماد', '3d0f7c1389b3c7247970dab998083f23f9315309', NULL, NULL, 4, 0, '2020-08-23', 'img.png', NULL, NULL, NULL, 1027135191, 0),
(187, 'الدكتورة ندي حماد', '3d0f7c1389b3c7247970dab998083f23f9315309', NULL, NULL, 4, 0, '2020-08-23', 'img.png', NULL, NULL, NULL, 1027135191, 0),
(188, 'هند شعبان حماد', '9048ead9080d9b27d6b2b6ed363cbf8cce795f7f', NULL, NULL, 4, 0, '2020-08-23', 'img.png', NULL, NULL, NULL, 1000513957, 0),
(189, 'فؤاد ابراهيم ', 'd50193625f41ce66f919eb7e342aba4b6e4b309c', NULL, NULL, 4, 0, '2020-08-23', 'img.png', NULL, NULL, NULL, 1010195415, 0),
(190, 'Yasmeen ahmed mohamed', 'f2c8c29246174dcced9e2f054e9813c4747878d9', NULL, NULL, 4, 0, '2020-08-24', 'img.png', NULL, NULL, NULL, 1011722026, 0),
(191, 'احمد محمد عبدالله', 'f638e2789006da9bb337fd5689e37a265a70f359', NULL, NULL, 4, 0, '2020-08-24', 'img.png', NULL, NULL, NULL, 1091903489, 0),
(192, 'ايهاب ابراهيم فؤاد الشرقاوي ', '6eb10d022250950912652aee8e5ad5459a00c81e', NULL, NULL, 5, 0, '2020-08-25', 'img.png', NULL, NULL, NULL, 1553259629, 0),
(193, 'Habiba esmail', '880a5df382205361b74d4b17d0cf2ce916f880f1', NULL, NULL, 7, 0, '2020-08-25', 'img.png', NULL, NULL, NULL, 1022542635, 0),
(194, 'محمد بكر عبدالنبى نظيف', '77890b3e56ea27fe49c35a4afe0c22c10c863d02', NULL, NULL, 5, 0, '2020-08-25', 'img.png', NULL, NULL, NULL, 1016714920, 0),
(195, 'احمد الدسوقي عبدالله عبدالعال', 'dcf6aab3caed04e85f66592f880091c4c627ab11', NULL, NULL, 5, 0, '2020-08-26', 'img.png', NULL, NULL, NULL, 1064029294, 0),
(196, 'اميرة محمد ميره', 'd3b400763b4a01277c23de77ef81bcc5b3eef5a3', NULL, NULL, 7, 0, '2020-08-26', 'img.png', '', NULL, '2020-08-26', 1003711556, 0),
(197, 'حبيبه جمال عبد السلام', 'ec8bdbef70ffdc65c6bf80b0dc9dcb142ad52742', NULL, NULL, 4, 0, '2020-08-26', 'img.png', NULL, NULL, NULL, 1023124075, 0),
(198, 'جهاد فتوح يوسف المحلاوى', '46941d8e4078b1efa99c56fdc1911cf63e00b2ec', NULL, NULL, 4, 0, '2020-08-26', 'img.png', '', NULL, '2020-08-26', 1016684927, 0),
(199, 'رحمة غازي عبد اللطيف رجب', '1b608df1c5b75c59355489af958d28d7e38e7724', NULL, NULL, 4, 0, '2020-08-27', 'img.png', NULL, NULL, NULL, 1099543833, 0),
(200, 'محمد فتوح يوسف المحلاوي', '05b530ad0fb56286fe051d5f8be5b8453f1cd93f', NULL, NULL, 7, 0, '2020-08-27', 'img.png', NULL, NULL, NULL, 1092300841, 0),
(201, 'كريم محمد فهمي العكل', 'd8f627093e740c9a806f86d293ba14b10dd150a2', NULL, NULL, 5, 0, '2020-08-28', 'img.png', '', NULL, '2020-08-28', 1015321626, 0),
(202, 'براء ', '7c222fb2927d828af22f592134e8932480637c0d', NULL, NULL, 5, 0, '2020-08-28', 'img.png', NULL, NULL, NULL, 1065828355, 0),
(203, 'تتىتىت', '7c222fb2927d828af22f592134e8932480637c0d', NULL, NULL, 1, 0, '2020-08-28', 'img.png', NULL, NULL, NULL, 1065858355, 0),
(204, 'Baraa samy ', '18d09901a98b3c18603a3450e679853bb00e2206', NULL, NULL, 1, 0, '2020-08-28', 'img.png', NULL, NULL, NULL, 1065858355, 0),
(205, 'براء سامي', '18d09901a98b3c18603a3450e679853bb00e2206', NULL, NULL, 7, 0, '2020-08-28', 'img.png', 'تسىؤتسىتؤىيتسؤىتيىؤي', NULL, '2020-08-28', 1065858355, 0),
(206, 'Ahmed Ebrahiem', '14fc7436245bb9ece4d9af9a8dc62ff289410c1e', NULL, NULL, 2, 0, '2020-08-29', 'img.png', NULL, NULL, NULL, 1012387928, 0),
(207, ' ميرنا محمد على عبيد', '0b5db550d36e32df596a80bc93f0aefa0a2bc463', NULL, NULL, 5, 0, '2020-08-29', 'img.png', NULL, NULL, NULL, 1096626013, 0),
(208, 'ميرنا محمد علي عبيد', '75cc49a293125c26081ee1f0b7d1d4293a6e4193', NULL, NULL, 1, 0, '2020-08-29', 'img.png', NULL, NULL, NULL, 1096626013, 0),
(209, 'ميرنا محمد علي', 'cd030a9ea952cf1dca760adff291b12abd545de6', NULL, NULL, 5, 0, '2020-08-29', 'img.png', NULL, NULL, NULL, 1099757576, 0),
(210, 'سلمي خالد محمد محمد ابراهيم الشناوي', '1411678a0b9e25ee2f7c8b2f7ac92b6a74b3f9c5', NULL, NULL, 5, 0, '2020-08-29', 'img.png', NULL, NULL, NULL, 1015375969, 0),
(211, 'سلمي خالد محمد محمد ابراهيم الشرقاوي', '9258a5b182bdfcff276fc4767b0782ff90e495a7', NULL, NULL, 5, 0, '2020-08-29', 'img.png', NULL, NULL, NULL, 1015375969, 0),
(212, 'منه احمد ', 'f5b6d455ee0ef874e8637a90677d35f8bae7f9ea', NULL, NULL, 5, 0, '2020-08-29', 'img.png', NULL, NULL, NULL, 1098926811, 0),
(213, ' منه احمد عبدالرحمن ', '9167677752ec7c739bd180f730efa733177e25c4', NULL, NULL, 1, 0, '2020-08-29', 'img.png', NULL, NULL, NULL, 1098926811, 0),
(214, 'آلاء محمد علي عويضه', '5c36cf0f925454c36700d6d5b59f0d38d62633d4', NULL, NULL, 4, 0, '2020-08-29', 'img.png', NULL, NULL, NULL, 1156047484, 0),
(215, 'شهد نسيم عبدالله عبدالعاطى', '0ba76bc82b7e6b23859b8ea3695b59450b8c0509', NULL, NULL, 5, 0, '2020-08-29', 'img.png', NULL, NULL, NULL, 1552359741, 0),
(216, '  عاطف صفوت عاطف الطنوبي', '58e1b700807af61e1ee98e9f883d6b61d8c28449', NULL, NULL, 1, 0, '2020-08-29', 'img.png', NULL, NULL, NULL, 1011570768, 0),
(217, 'Salmeen mohamed', '1401c8d6368020c1a68283fa4e21eab62d1d0fea', NULL, NULL, 3, 0, '2020-08-29', 'img.png', NULL, NULL, NULL, 1006722550, 0),
(218, 'كريم فايز عبدالغفار بطاح', '232bbe874eeca2e6f6f078c7893b1a38cf0221e1', NULL, NULL, 5, 0, '2020-08-29', 'img.png', '', NULL, '2020-08-29', 1007514426, 0),
(219, 'حنين محمد عبدالله الدسوقى عبدالعال', 'ca5894f37c37ca51f7aba59e4b740b832aa329d6', NULL, NULL, 5, 0, '2020-08-29', 'img.png', NULL, NULL, NULL, 1097287383, 0),
(220, 'ياسمينا ياسر فتحي محمد الوكيل ', '23241c2fec92568beaba201c348f7340dcaf1c8a', NULL, NULL, 4, 0, '2020-08-30', 'img.png', NULL, NULL, NULL, 1000266336, 0),
(222, 'hihi', '6880aa7be2aa9880386d8c50d16adf6cd52d229b', NULL, NULL, 1, 0, '2020-09-07', 'img.png', NULL, NULL, NULL, 1066343874, 0),
(223, 'vbvc', '011c945f30ce2cbafc452f39840f025693339c42', NULL, NULL, 1, 0, '2020-09-07', 'img.png', NULL, NULL, NULL, 1066343874, 0),
(224, 'goma', '601f1889667efaebb33b8c12572835da3f027f78', 'ahmed@gmail.com', NULL, 0, 0, '2020-12-29', 'img.png', NULL, NULL, NULL, 1066343874, 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `user_id`, `date`, `username`, `email`) VALUES
(1, 'يي]', 1, '2020-12-30', NULL, NULL),
(2, 'dsdsCxcscsd', NULL, '2020-12-30', 'dssdsd', 'ahmed@gmail.com'),
(3, 'fnkjdv kkjfn;laWC', NULL, '2020-12-30', 'dhfhhdkjf', 'ahmed@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_description` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_data` date NOT NULL,
  `allow_comment` tinyint(4) NOT NULL DEFAULT 0,
  `users` int(11) NOT NULL,
  `tags` varchar(225) NOT NULL,
  `type` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_name`, `post_description`, `post_image`, `post_data`, `allow_comment`, `users`, `tags`, `type`) VALUES
(14, 'بداية العام الدراسى الجديد', 'التعليم 17 اكتوبر بداية العام الدراسى الجديد ويوم 6 فبراير اجازة نصف العام', 'important.jpg', '2020-07-16', 1, 1, 'اجازة, السنةالدراسية, التعليم', 1),
(21, 'التسجيل متاح مجانا حتى 9/1', 'التسجيل متاح مجانا حتى 9/1 وبعدها سنوافيكم بتكلفة الاشتراك \r\nاذا تواجد اى مشكلة يجب التواصل مع ادارة المنصة', '', '2020-08-11', 0, 1, 'التسجيل', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `ques` text NOT NULL,
  `added_date` date NOT NULL,
  `answer_1` text NOT NULL,
  `answer_2` text NOT NULL,
  `answer_3` text NOT NULL,
  `answer_4` text NOT NULL,
  `right_answer` varchar(255) NOT NULL,
  `photo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `exam_id`, `ques`, `added_date`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `right_answer`, `photo`) VALUES
(3, 6, 'اذكر اسم الروبوت اذكر اسم الروبوت', '2020-08-30', 'ا', 'ب', 'ج', 'د', 'ج', 'waves.jpg'),
(4, 6, 'اذكر اسم الروبوت', '2020-08-30', 'ا', 'ccx', 'ج', 'د', 'ccx', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `username` varchar(225) CHARACTER SET utf8 NOT NULL,
  `token` varchar(225) CHARACTER SET utf8 NOT NULL,
  `timemodified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `username`, `token`, `timemodified`) VALUES
(1, 'ahmed-goma', 'QLjaU2nVLD', '2020-08-08 12:34:33'),
(2, 'mohamed2020', 'kwb9Ww9Wkb', '2020-08-08 20:37:11'),
(3, 'amged', 'PJqEWu2Dkx', '2020-08-10 21:14:10'),
(4, 'mohamed', 'ohyXlTCVyV', '2020-08-10 22:03:39'),
(5, 'Farg', '4T7XKPqXkh', '2020-08-11 11:34:41'),
(6, 'امجد محمد', 'IsPhX1eYCt', '2020-08-11 12:17:36'),
(7, 'محمد عبد العزيز عبد العال', 'JyvFnrCJZc', '2020-08-11 15:17:41'),
(8, 'MOSTAFA ', 'Q9Lxqt2CAV', '2020-08-11 18:22:07'),
(9, 'حبيبه محمد عبد الخالق العشري', 'TfvMadjKYX', '2020-08-11 18:23:45'),
(10, 'محمد احمد محمود سليمان ', 'FoQU5AOLre', '2020-08-11 18:24:41'),
(11, 'مها عبد القادر خليل النقراشى ', 'ToEb3TYDKu', '2020-08-11 18:25:36'),
(12, 'نهال ', 'aGbNBeaG8f', '2020-08-11 18:31:42'),
(13, 'على ابراهيم مرعى ', 'bbiFR6JUO9', '2020-08-11 18:32:40'),
(14, 'بسمله مصطفى احمد هلال', 'Yqu7vM8WBw', '2020-08-11 18:37:23'),
(15, 'نهال عادل فرج ', '9BLWdcdstl', '2020-08-11 18:38:21'),
(16, 'آلاء مصطفى أحمد البحيري', 'rYOzjdqKou', '2020-08-11 18:40:51'),
(17, 'هدير ابراهيم عباس', 'qjtZF5Xp3E', '2020-08-11 18:43:45'),
(18, 'محمداسماعيل هلال', '1jbI4QEUVt', '2020-08-11 18:47:34'),
(19, 'شهد عبد البصير محمد محمد علم الدين', '07T7G0zvMi', '2020-08-11 18:50:44'),
(20, 'حنين محمود هارون', 'lm6XNz8pSW', '2020-08-11 19:03:11'),
(21, 'Asmaa metwally ', 'Chg4bl6HOq', '2020-08-11 19:07:45'),
(22, 'Ibrahim shaban elashry', '1nOLKYRtQh', '2020-08-11 19:09:38'),
(23, ' إسراء مصطفى أحمد البحيري', 'PPaEZWqLSS', '2020-08-11 19:14:33'),
(24, 'Aya Rabie Ramadan ', 'yr5CSf5okM', '2020-08-11 19:28:05'),
(25, 'محمد مصطفى مصطفى  الشامي ', 'pNOVOXf3hG', '2020-08-11 19:46:19'),
(26, 'جميله بدوي على الشنواني', '7K3mnrxRQO', '2020-08-11 21:06:52'),
(27, 'Mohahed Saber Elshamy ', '4sA7cs1Pdf', '2020-08-11 23:04:48'),
(28, 'خالد إبراهيم محمد جمعه سعد ', 'NFeGIXzHTj', '2020-08-12 03:11:49'),
(29, 'خالد إبراهيم محمد جمعه ', '0WywORrIAl', '2020-08-12 03:15:11'),
(30, 'محمد شوقي عبدالرحمن ', 'K6d7PeWfxM', '2020-08-12 05:32:11'),
(31, 'إسراء محمد علي الشناوي', 'H6D5oOJ2Px', '2020-08-12 05:38:14'),
(32, 'أحمد شعبان صبرة', 'BFMvCV1syM', '2020-08-12 08:01:06'),
(33, 'رزق الغنام', 'Un6y4CEtVB', '2020-08-12 08:16:28'),
(34, 'Rizk Alghnnam', 'FumQFiYjAF', '2020-08-12 08:19:36'),
(35, 'رزق السيد الغنام', 'qzF95nlM7v', '2020-08-12 08:26:47'),
(36, 'محمد احمد حنفي محمد', 'nxEfbVRTXG', '2020-08-12 08:31:15'),
(37, 'اسمه عادل ابوشعيشع', 'EW7yhTIT3x', '2020-08-12 08:40:55'),
(38, 'Ahmed', 'bwRjwDyVxs', '2020-08-12 09:41:22'),
(39, 'شروق وليد ريحان', 'ApzAnNnybQ', '2020-08-12 09:48:21'),
(40, 'هبه وليد ريحان', 'RNNUe8aFem', '2020-08-12 09:53:48'),
(41, 'ملك عمرو السيد ', 'RXrXwlWJ2s', '2020-08-12 10:22:35'),
(42, 'آلاء ماهر عبد الحفيظ العيسوى', 'QVUgOZQcfU', '2020-08-12 10:50:49'),
(43, 'كريم محمود عبد الحي عباس العمري', 'ikTVPznl3N', '2020-08-12 11:08:31'),
(44, 'أنس السيد فتحي عطية رزق الويشي', 'hsKtKI03AO', '2020-08-12 11:55:53'),
(45, 'يوسف السيد مصطفي عبدالفتاح علي ', 'bcQDUfPmDP', '2020-08-12 12:35:16'),
(46, 'ريم إبراهيم فؤاد محمد ', 'PMk2hkh4Hi', '2020-08-12 14:08:06'),
(47, 'reem ibrahim ', 'RAZQCYeBSN', '2020-08-12 14:33:12'),
(48, 'طارق السلكاوى', 'vHw76pl7oV', '2020-08-12 15:09:11'),
(49, 'Mai abdallah abdelbary', 'lXuXId2qH5', '2020-08-12 19:35:24'),
(50, 'منه عبد الحميد مصطفى أبوسليمان ', 'LFudGmTuRv', '2020-08-12 19:55:30'),
(51, 'طارق ابراهيم مرعي', '7DytWokVf0', '2020-08-12 21:28:16'),
(52, 'دنيا وحيد الفرماوي ', '1pHRZpAWBj', '2020-08-12 21:52:47'),
(53, 'ابرار علاء كمال', 'UHrrCaPheC', '2020-08-12 22:08:14'),
(54, 'تسنيم علاء كمال', '6L8ci01wlp', '2020-08-12 22:10:36'),
(55, 'شهد ربيع شعبان يوسف', 'XOOtYGfbt8', '2020-08-13 07:13:34'),
(56, ' ابراهيم محمد فرج عبداللا', '8XExpE1uHM', '2020-08-13 11:20:57'),
(57, 'إسراء مصطفى أحمد البحيري ', 'AhIa3lWlNd', '2020-08-13 15:55:47'),
(58, 'جهاد سعد محمود ', 'tg3hBme2ZK', '2020-08-13 19:52:39'),
(59, 'جهاد سعد محمود شعبان ', '51imHe6kRs', '2020-08-13 20:01:17'),
(60, 'كريم احمد طه سرور', 'CZdK81bxXD', '2020-08-13 20:25:10'),
(61, 'حنين محمود نوح', 'RtV2TOcJPy', '2020-08-13 21:25:51'),
(62, 'شهد عبد البصير محمد علم الدين', 'CchRXL3wFg', '2020-08-14 05:39:06'),
(63, 'ندا بسيونى عبدالحليم شعبان عبدالله ', 'encp7BYRqF', '2020-08-14 08:20:42'),
(64, 'Malak Ibrahim Mohamed Elwehishy ', 'FPeUqNC5dr', '2020-08-14 12:32:15'),
(65, 'شهد عبد الحميد مصطفى أبوسليمان ', 'kKvkVhydpe', '2020-08-14 12:49:24'),
(66, 'حبيبه السيد فرج', 'SYs78vIi6u', '2020-08-14 15:48:14'),
(67, 'Habiba elsayed farg', 'QK9HySoE3Y', '2020-08-14 15:52:25'),
(68, 'بسمله محمود مصطفى', '2GekwyhTND', '2020-08-14 18:46:40'),
(69, ' بسمله محمود', 'YW9WlEyvaO', '2020-08-14 18:53:34'),
(70, 'رحمه شعبان', '1XmlwgqgBy', '2020-08-14 20:21:42'),
(71, 'محمد حسب الله عباس الخولي ', '9Ed0AfxAV1', '2020-08-14 20:24:15'),
(72, 'Mohamed Hasaballah Abass Elkholy ', 'Mjyq6149zG', '2020-08-14 20:28:44'),
(73, 'رحمه شعبان علي ', 'pJB2PtJy6W', '2020-08-14 20:45:34'),
(74, 'نادر عثمان الروينى', 'qBdWCXO3Uh', '2020-08-14 20:56:33'),
(75, 'علي نصر علي شليل', 'frgvfE05iz', '2020-08-15 00:20:19'),
(76, 'Kareem Ahmed Soroor', 'OjQ61yV7Ao', '2020-08-15 11:25:49'),
(77, 'عمر محمد شوكت مصطفي ابراهيم ابوشلبي ', 'fHHKgtFcP4', '2020-08-15 12:39:59'),
(78, 'هدير ابراهيم عباس ابراهيم ', 'wE3INXhtxL', '2020-08-15 13:42:15'),
(79, 'احمد عبد المنعم ابو سليمان', 'Syke1ZbHIS', '2020-08-15 15:48:19'),
(80, 'بسملة احمد طه سرور', 'a1bMTwqoH5', '2020-08-15 17:07:22'),
(81, ' احمد عبدالمنعم ابوسليمان ', 'Mi1dEY0vNU', '2020-08-15 17:11:14'),
(82, 'احمد عبدالمنعم ابوسليمان', '0pt5sijdCe', '2020-08-15 17:16:26'),
(83, 'حبيبة غانم ابراهيم', 'QXDeZf5DD6', '2020-08-15 19:03:38'),
(84, 'ريم ابراهيم فؤاد', 'KcKfO6QsGU', '2020-08-15 22:31:43'),
(85, 'ريم ابراهيم', 'VzfRAEhaet', '2020-08-15 22:37:11'),
(86, 'محمد محمود حسن الشناوي', 'Zs5ChWVnXW', '2020-08-16 08:54:25'),
(87, 'Shazly ashraf', 'zZTKkuHJiV', '2020-08-16 09:38:46'),
(88, 'عبير عبدالعزيز صديق 1', '0elm7EKeVG', '2020-08-16 12:10:23'),
(89, 'صفية عبدالعزيز صديق 2', 'EEu8OWGDlH', '2020-08-16 12:20:02'),
(90, 'عبير عبدالعزيز حسين صديق', 'V4kjiQosBZ', '2020-08-16 12:28:20'),
(91, 'Kareem Soroor', 'Dqdjsv2wcy', '2020-08-16 14:28:07'),
(92, 'reem esmail', 'CfCkdydSWC', '2020-08-16 18:20:50'),
(93, 'ZEINAB EBRIHEM', 'ErRN1XgLzv', '2020-08-16 20:28:46'),
(94, 'احمد رمضان الراوي احمد', 'CXGbpXZqWE', '2020-08-16 20:43:52'),
(95, 'هاجر رزق السيد اسماعيل', '18KwJF8QIb', '2020-08-17 09:56:25'),
(96, 'نوران أحمد عبدالله الدسوقي', 'oeUyNJs2Cj', '2020-08-17 10:44:09'),
(97, 'هبه قدري عبدالنبي رمضان مرزوق ', 'szGLiY8pa9', '2020-08-17 10:49:19'),
(98, 'امنية محمد علي مرعي', 'eE8KSCvDG8', '2020-08-17 11:39:30'),
(99, 'حسناء عبد السلام عوض عبد السلام', 'Hl39m5K9cK', '2020-08-17 14:34:06'),
(100, 'رحمه رضا محمد عطيه ', 'kSba2xFZab', '2020-08-18 12:50:11'),
(101, 'امل رضا محمد عطيه ', 'Za2ft7Z5Mx', '2020-08-18 13:26:02'),
(102, 'مي ممدوح رشاد ', 'fbqDKNYsjX', '2020-08-18 13:47:25'),
(103, 'شهد حلمي السقا', '4dEcUJD2Z9', '2020-08-18 14:27:42'),
(104, 'ندى النشرتى', 'GocODuLRIB', '2020-08-18 20:14:53'),
(105, 'رحمة احمد احمد ابواسماعيل', 'iP6hjrEYUG', '2020-08-19 12:44:33'),
(106, 'رنا محمد عبد البارى محمد', 'aYxWH1UUHD', '2020-08-19 12:44:48'),
(107, 'رنا محمد عبد البارى', '7rcc80Fn1G', '2020-08-19 13:08:41'),
(108, 'محمود فؤاد', '2u7jO8AHAk', '2020-08-19 13:43:10'),
(109, 'ندى ياسر السيد', '3tgDhDIbGL', '2020-08-19 16:52:38'),
(110, 'سلمي عجيزه', 'ejgkfawBd4', '2020-08-19 21:05:42'),
(111, 'ريم ابراهيم فؤاد محمد ابراهيم', 'DlwcdCQlWM', '2020-08-20 12:32:18'),
(112, 'محمود محمد ', 'bbqvdkDKyD', '2020-08-20 20:36:56'),
(113, 'عصام حمدان', 'LK27eazmW3', '2020-08-21 07:56:06'),
(114, 'abuanss esam', 'pVvPGrEEUi', '2020-08-21 08:00:13'),
(115, 'خالد إبراهيم محمد ', 'dAO8LcZGR1', '2020-08-21 10:20:17'),
(116, 'باسل محمد لطفى عصر', 'StGq6Ngjkh', '2020-08-21 10:48:53'),
(117, 'على محمد علي طه ', 'k0g6fRhA94', '2020-08-21 11:35:12'),
(118, 'نسمه عادل ابوشعيشع', 'uLx1e8IFom', '2020-08-21 18:54:36'),
(119, 'إيهاب إبراهيم فؤاد الشرقاوي ', 'sOymJpen1G', '2020-08-22 06:47:01'),
(120, 'محمد سليمان على الطباخ', 'Lf6zTpgDNE', '2020-08-22 21:14:13'),
(121, 'امنية محمد فاروق غزلان', '6nlOJfw4nX', '2020-08-22 22:00:43'),
(122, 'ايه رمضان مرزوق ', '3eyzPTW4zY', '2020-08-22 22:24:24'),
(123, 'ايهاب إبراهيم فؤاد الشرقاوي ', 'LyVFk3I1jw', '2020-08-22 22:41:17'),
(124, 'ايه رمضان مرز', 'XyuibFhqG5', '2020-08-22 22:44:11'),
(125, 'ندي شعبان حماد', 'YmYXT4dpl8', '2020-08-22 23:28:28'),
(126, 'ندي شعبان شعبان حماد', 'S0dRfEeVPI', '2020-08-22 23:36:58'),
(127, 'امنيه محمد فاروق غزلان ', 'jimt3OBD2L', '2020-08-23 08:49:20'),
(128, 'سما شعبان حماد', 'aPJSc0bZzj', '2020-08-23 14:10:35'),
(129, 'الدكتورة ندى حماد', 'Nzzm1D730G', '2020-08-23 14:16:42'),
(130, 'ندي حماد', 'V6GkWeUTF6', '2020-08-23 14:21:03'),
(131, 'محمد عباس ', 'adDng0a1So', '2020-08-23 14:25:49'),
(132, 'الدكتوره ندي حماد', '76DkLfTawQ', '2020-08-23 14:25:54'),
(133, 'الدكتورة ندي حماد', 'DY4xSwVHJx', '2020-08-23 14:30:37'),
(134, 'هند شعبان حماد', 'cHHWBy1xqA', '2020-08-23 14:42:24'),
(135, 'فؤاد ابراهيم ', 'rqSi9A475I', '2020-08-23 18:47:39'),
(136, 'Yasmeen ahmed mohamed', 'RnYee6qqBA', '2020-08-24 13:04:26'),
(137, 'احمد محمد عبدالله', 'sxoH4RTEih', '2020-08-24 18:31:03'),
(138, 'ايهاب ابراهيم فؤاد الشرقاوي ', 'PeLCZI63lq', '2020-08-25 10:43:48'),
(139, 'Habiba esmail', 'A6zvjfH3fM', '2020-08-25 13:06:49'),
(140, 'محمد بكر عبدالنبى نظيف', 'myfZ1r8KD0', '2020-08-25 19:51:52'),
(141, 'احمد الدسوقي عبدالله عبدالعال', '8OyCgiaehJ', '2020-08-26 09:45:31'),
(142, 'اميرة محمد ميره', 'q1BFlOIcYq', '2020-08-26 14:41:01'),
(143, 'حبيبه جمال عبد السلام', '13SOUBwYnG', '2020-08-26 17:51:45'),
(144, 'جهاد فتوح يوسف المحلاوى', 'SHefstrJcz', '2020-08-26 21:56:11'),
(145, 'رحمة غازي عبد اللطيف رجب', 'jSJUI4HpWX', '2020-08-27 11:23:20'),
(146, 'محمد فتوح يوسف المحلاوي', 'N0QLD6W5HF', '2020-08-27 15:30:16'),
(147, 'كريم محمد فهمي العكل', 'HFw1QQPETj', '2020-08-28 15:35:53'),
(148, 'براء ', 'crLf1cGeeJ', '2020-08-28 18:33:17'),
(149, 'تتىتىت', 'ATl5KSImAP', '2020-08-28 21:30:29'),
(150, 'Baraa samy ', 'uM8rYVrMKm', '2020-08-28 21:31:16'),
(151, 'براء سامي', 'F7PrScMwAh', '2020-08-28 21:37:53'),
(152, 'Ahmed Ebrahiem', 'RwztKJoykf', '2020-08-29 07:22:18'),
(153, ' ميرنا محمد على عبيد', 'UaxiEdEHCb', '2020-08-29 16:01:52'),
(154, 'ميرنا محمد علي عبيد', '8SaEmwGrhD', '2020-08-29 16:04:54'),
(155, 'ميرنا محمد علي', '1aaYncStrh', '2020-08-29 16:16:50'),
(156, 'سلمي خالد محمد محمد ابراهيم الشناوي', 'JkgLYHp3fG', '2020-08-29 17:53:41'),
(157, 'سلمي خالد محمد محمد ابراهيم الشرقاوي', 'l3uYKJIY36', '2020-08-29 18:05:26'),
(158, 'منه احمد ', 'E85a3XdRoe', '2020-08-29 18:39:58'),
(159, ' منه احمد عبدالرحمن ', 'e9lxVCQHoX', '2020-08-29 18:40:53'),
(160, 'آلاء محمد علي عويضه', 'gu3Z8Ceqs0', '2020-08-29 19:20:56'),
(161, 'شهد نسيم عبدالله عبدالعاطى', 'ZD2xJh3pVB', '2020-08-29 19:29:58'),
(162, '  عاطف صفوت عاطف الطنوبي', 'SfMZt0x2zR', '2020-08-29 20:08:38'),
(163, 'Salmeen mohamed', 'pB8Kemdk9H', '2020-08-29 20:17:16'),
(164, 'كريم فايز عبدالغفار بطاح', 'DrDBmvHW8m', '2020-08-29 20:21:32'),
(165, 'حنين محمد عبدالله الدسوقى عبدالعال', 'MJcPXzY3th', '2020-08-30 02:08:30'),
(166, 'ياسمينا ياسر فتحي محمد الوكيل ', 'ySWXpUtxRS', '2020-08-30 06:52:02'),
(167, 'رحمة احمد احمد ابو اسماعيل', 'ADyv6cDOb9', '2020-08-30 07:55:26'),
(168, 'hihi', 'WZr5gBckhE', '2020-09-07 11:29:18'),
(169, 'vbvc', 'x1ZcbMPHD9', '2020-09-07 12:01:27'),
(170, 'goma', 'Efavs5yqJl', '2020-12-29 06:17:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments` (`member_id`),
  ADD KEY `com` (`lesson_id`),
  ADD KEY `memb` (`post_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_message` (`user_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_name` (`users`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ques` (`exam_id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `com` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments` FOREIGN KEY (`member_id`) REFERENCES `members` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memb` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `user_message` FOREIGN KEY (`user_id`) REFERENCES `members` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `user_name` FOREIGN KEY (`users`) REFERENCES `members` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `ques` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
