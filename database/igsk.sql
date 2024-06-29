-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2024 at 04:05 AM
-- Server version: 10.6.17-MariaDB-cll-lve-log
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `igskjtak_igskweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment_processes`
--

CREATE TABLE `assessment_processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assessment_processes`
--

INSERT INTO `assessment_processes` (`id`, `class_name`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Playgroup', 'Assessment Process at International Grammar School:', '<p>At International Grammar School, our commitment to academic excellence is reflected in our thoughtful and comprehensive assessment process. We believe in assessing student progress in a fair, transparent, and constructive manner. Our assessment process encompasses various methods to provide a holistic understanding of each student&#39;s learning journey.</p>\r\n\r\n<p>1. Formative Assessment:</p>\r\n\r\n<p><strong>Definition:</strong></p>\r\n\r\n<ul>\r\n	<li>Formative assessments are ongoing evaluations conducted during the learning process to provide real-time feedback and guide instructional decisions.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Implementation:</strong></p>\r\n\r\n<ul>\r\n	<li>Regular quizzes, class discussions, and interactive activities are used to gauge understanding.</li>\r\n	<li>Teachers provide timely feedback to help students identify strengths and areas for improvement.</li>\r\n</ul>\r\n\r\n<p>2. Continuous Feedback Loop:</p>\r\n\r\n<p><strong>Definition:</strong></p>\r\n\r\n<ul>\r\n	<li>We maintain an ongoing dialogue with students through continuous feedback to ensure a dynamic learning environment.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Implementation:</strong></p>\r\n\r\n<ul>\r\n	<li>Regular teacher-student conferences, progress reports, and feedback sessions facilitate communication.</li>\r\n	<li>Feedback is tailored to individual learning styles and needs.</li>\r\n</ul>\r\n\r\n<p>3. Data-Informed Instruction:</p>\r\n\r\n<p><strong>Definition:</strong></p>\r\n\r\n<ul>\r\n	<li>Assessment data guides instructional decisions, enabling us to adapt teaching methods based on student needs.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Implementation:</strong></p>\r\n\r\n<ul>\r\n	<li>Teachers analyze assessment results to identify trends and areas for improvement.</li>\r\n	<li>Personalized learning plans may be implemented to address individual student needs.</li>\r\n</ul>\r\n\r\n<p>4. Parental Involvement:</p>\r\n\r\n<p><strong>Definition:</strong></p>\r\n\r\n<ul>\r\n	<li>Parents are integral partners in the assessment process, with regular updates on student progress.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Implementation:</strong></p>\r\n\r\n<ul>\r\n	<li>Parent-teacher conferences are scheduled to discuss assessment results.</li>\r\n	<li>Parental portals provide access to real-time grades and feedback.</li>\r\n</ul>\r\n\r\n<p>5. Comprehensive Records:</p>\r\n\r\n<p><strong>Definition:</strong></p>\r\n\r\n<ul>\r\n	<li>Thorough documentation of assessment results ensures transparency and accountability</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Implementation:</strong></p>\r\n\r\n<ul>\r\n	<li>Detailed records of assessment scores, feedback, and individual learning plans are maintained.</li>\r\n	<li>Records contribute to student portfolios and support accreditation requirements.</li>\r\n</ul>\r\n\r\n<p>Your Child&#39;s Success, Our Priority:</p>\r\n\r\n<p>At International Grammar School, we view assessments not only as measures of academic achievement but also as tools for growth and improvement. Our assessment process is designed to foster a positive learning experience, encourage continuous improvement, and prepare students for success in their educational journey.</p>', NULL, '2024-04-30 19:01:44'),
(2, ' Kinder 1', 'test', '<p>enter your own data</p>', NULL, '2024-04-30 19:00:56'),
(3, 'Kinder 2', NULL, '', NULL, NULL),
(4, 'Grade I', NULL, '', NULL, NULL),
(5, 'Grade II', NULL, '', NULL, NULL),
(6, 'Grade III', NULL, '', NULL, NULL),
(7, 'Grade IV', NULL, '', NULL, NULL),
(8, 'Grade V', NULL, '', NULL, NULL),
(9, 'Grade VI', NULL, '', NULL, NULL),
(10, 'Grade VII', NULL, '', NULL, NULL),
(11, 'Grade VIII', NULL, '', NULL, NULL),
(12, 'Grade IX', NULL, '', NULL, NULL),
(13, 'Grade x', NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `code_line` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `code_line`, `created_at`, `updated_at`) VALUES
(7, 'images/1714649344_user.jpg', 'Empowering minds, shaping futures', '2024-04-27 05:32:17', '2024-05-02 21:29:04'),
(8, 'images/1714649424_user.jpg', 'Empowering minds, shaping futures', '2024-04-27 05:32:45', '2024-05-02 21:30:24'),
(10, 'images/1714647815_user.jpg', 'Empowering minds, shaping', '2024-04-27 06:56:16', '2024-05-02 21:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `curricula`
--

CREATE TABLE `curricula` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curricula`
--

INSERT INTO `curricula` (`id`, `class_name`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Playgroup', 'Playgroup Curriculum', '<p><strong>The Early Year school of IGSK comprises Play Group, Kinder I, and Kinder II (age: 3 to 5 years).</strong></p>\r\n\r\n<p>The Early Year Stage, defined as the period from birth to the first five years of a child, is a crucial time for the development and salient growth of mental and intellectual abilities. In this stage, children are highly influenced by the academic environment that surrounds them. As a result, Early Childhood Care and Education (ECCE) is more than amplified for the elementary school period. Keeping this in mind, we target the holistic development of a child&rsquo;s cognitive, social, motor, emotional, language skills in order to build a solid foundation for lifelong learning.</p>\r\n\r\n<ul>\r\n	<li>For the best learning experience of our young students, we have created classrooms full of creative and nurturing environments. We provide the children effective knowledge through playing stuff, multimedia and productive activities.</li>\r\n	<li>We have formed a students&rsquo; counseling process which will encourage them to discover themselves more rather than engaging in non-cooperative competition.</li>\r\n	<li>For the overall growth of each child along with cognitive, motor and socialization skills, we focus on subjects like English, Mathematics, Science, Bengali, Arts and activity-based subjects which include painting, crafting, cooking, multimedia approach and physical education respective to their ages.</li>\r\n	<li>We follow a blended curriculum for our early year students to give them the best experience of learning. Our aim is to flourish children&rsquo;s reading and oral skills, maintain appropriate pronunciation and phonetics and initiate the creative thought process while they are in the Early Years.</li>\r\n	<li>We consider both English and Bangla as the first languages of a child, so that the root of speaking dual languages becomes potent from a very early stage. Besides, our motive is to connect the students with Bengali language and culture along with growing up as a global citizen.</li>\r\n	<li>Learning languages helps the children to grow their analytical ability and to be open towards various perspectives of life. For this reason, we focus on learning foreign languages such as Arabic and French.</li>\r\n	<li>IGSK makes every subject playful using a variety of creative and practical materials. We also prefer safe and flexible outdoor learning for a kid&rsquo;s social, mental and moral augment. With this preference we have created well-designed and fully furnished play rooms and gaming rooms where each child can fuel up their creative passions beside learning.</li>\r\n</ul>', NULL, '2024-04-30 18:34:51'),
(2, ' Kinder 1', 'test', '<p>enter your own data</p>', NULL, '2024-04-30 18:37:10'),
(3, 'Kinder 2', NULL, '', NULL, NULL),
(4, 'Grade I', NULL, '', NULL, NULL),
(5, 'Grade II', NULL, '', NULL, NULL),
(6, 'Grade III', NULL, '', NULL, NULL),
(7, 'Grade IV', NULL, '', NULL, NULL),
(8, 'Grade V', NULL, '', NULL, NULL),
(9, 'Grade VI', NULL, '', NULL, NULL),
(10, 'Grade VII', NULL, '', NULL, NULL),
(11, 'Grade VIII', NULL, '', NULL, NULL),
(12, 'Grade IX', NULL, '', NULL, NULL),
(13, 'Grade x', NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `school_type` varchar(255) DEFAULT NULL,
  `team` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `email`, `phone`, `position`, `department`, `image`, `experience`, `education`, `school_type`, `team`, `created_at`, `updated_at`) VALUES
(19, 'Tuhin', 'Biswas', 'tuhinbiswas21@gmail.com', '01935645864', 'Senior Teacher', 'IT', 'images/1715157942_user.jpg', NULL, NULL, '2', '1', '2024-05-08 18:45:42', '2024-05-08 18:45:42'),
(20, 'Chayan', 'Biswas', 'chayanbiswas55@gmail.com', '01935645864', 'Senior Teacher', NULL, 'images/1715158089_user.jpg', NULL, NULL, '2', '1', '2024-05-08 18:48:09', '2024-05-08 18:48:09'),
(21, 'Tanzil', 'Fatima', 'tanzil.fatima19@gmail.com', '01730585311', 'School Administrative Manager', NULL, 'images/1715158566_user.jpg', NULL, NULL, '2', '2', '2024-05-08 18:56:06', '2024-05-08 18:56:22'),
(22, 'Sultana Kaniz', 'Fatima', 'kanizigsk@gmail.com', '01935645864', 'Senior Teacher', NULL, 'images/1715158775_user.jpg', NULL, NULL, '2', '1', '2024-05-08 18:59:35', '2024-05-08 18:59:35'),
(23, 'Kaberi', 'Sultana', 'kaberishumon@gmail.com', '01935645864', 'Senior Teacher', NULL, 'images/1715158943_user.jpg', NULL, NULL, '2', '1', '2024-05-08 19:02:23', '2024-05-08 19:02:23'),
(24, 'Roja Sultana', 'Priyanka', 'rs.priyanka20@gmail.com', '01935645864', 'Senior Teacher', NULL, 'images/1715159111_user.jpg', NULL, NULL, '2', '1', '2024-05-08 19:05:11', '2024-05-08 19:05:11'),
(28, 'Dewan', 'Sonia', 'dewansonia@gmail.com', '01935645864', 'Assistant Teacher', NULL, 'images/1715256001_user.jpg', NULL, NULL, '2', '1', '2024-05-09 22:00:01', '2024-05-09 22:00:01'),
(30, 'Sahi', 'Farhana', 'sahifarhana@gmail.com', '01935645864', 'Assistant Teacher', NULL, 'images/1715256268_user.jpg', NULL, NULL, '2', '1', '2024-05-09 22:04:28', '2024-05-09 22:04:28'),
(31, 'Muhammad Belal', 'Sharif', 'belalshorif@gmail.com', '01958216723', 'Assistant Teacher', NULL, 'images/1715506916_user.jpg', NULL, NULL, '2', '1', '2024-05-12 19:41:56', '2024-05-12 19:41:56');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_forms`
--

CREATE TABLE `enquiry_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `parents_name` varchar(255) DEFAULT NULL,
  `guardian__name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `color_code` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end_date` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color_code`, `description`, `start_date`, `end_date`, `user_id`, `created_at`, `updated_at`) VALUES
(14, 'International Mother Language Day', '#de3f1b', 'International Mother Language Day', '2024-02-21 05:00:00', '2024-02-21 05:00:00', 1, '2024-05-02 21:55:25', '2024-05-02 21:55:25'),
(15, 'Independence Day', '#0ad658', 'Independence Day', '2024-03-26 04:00:00', '2024-03-26 04:00:00', 1, '2024-05-02 21:57:02', '2024-05-02 21:57:02'),
(16, 'Bengali Festival', '#f1b81e', 'Pohela Baishakh', '2024-04-14 04:00:00', '2024-04-14 04:00:00', 1, '2024-05-02 22:01:06', '2024-05-02 22:01:06'),
(17, 'International Labour Day', '#e73e18', 'International Labour Day', '2024-05-01 04:00:00', '2024-05-01 04:00:00', 1, '2024-05-02 22:02:48', '2024-05-02 22:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(2, 'Why English medium school?', '<p>Choosing an English medium school provides several advantages, including global communication skills, access to a broader range of resources and information, and enhanced opportunities for higher education and career prospects in an increasingly interconnected world.</p>', '2024-05-01 08:17:43', '2024-05-01 08:17:43'),
(3, 'What is the difference between English medium and English version school?', '<p>The English medium school is an English-speaking school with a wide range of resources and opportunities. The English version school is an English-speaking school with a narrow range of resources and opportunities.</p>', '2024-05-01 08:18:09', '2024-05-01 08:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_title` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_title`, `image`, `created_at`, `updated_at`) VALUES
(34, 3, 'images/66337a7e456bc_user.jpg', '2024-05-02 21:35:26', '2024-05-02 21:35:26'),
(35, 2, 'images/66337aa795dc5_user.jpg', '2024-05-02 21:36:07', '2024-05-02 21:36:07'),
(38, 1, 'images/66337b816b402_user.jpg', '2024-05-02 21:39:45', '2024-05-02 21:39:45'),
(40, 1, 'images/66337d06c44fd_user.jpg', '2024-05-02 21:46:14', '2024-05-02 21:46:14'),
(41, 2, 'images/66337d57b79d9_user.jpg', '2024-05-02 21:47:35', '2024-05-02 21:47:35'),
(42, 3, 'images/66337d8d72c8f_user.jpg', '2024-05-02 21:48:29', '2024-05-02 21:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_title`
--

CREATE TABLE `gallery_title` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_title`
--

INSERT INTO `gallery_title` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'this is title 1', NULL, NULL),
(2, 'this is title 1', NULL, NULL),
(3, 'this is album', '2024-04-28 11:22:01', '2024-04-28 11:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `join_us`
--

CREATE TABLE `join_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fast_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `carriar_objective` varchar(255) DEFAULT NULL,
  `massage` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_27_060240_create_banners_table', 2),
(6, '2024_04_27_105142_create_short_infos_table', 3),
(7, '2024_04_27_151955_create_notice_controllers_table', 4),
(8, '2024_04_27_222713_create_newes_table', 5),
(9, '2024_04_28_151118_create_galleries_table', 6),
(10, '2024_04_28_152752_create_gallery_title_table', 6),
(11, '2024_04_28_172357_create_events_table', 7),
(12, '2024_04_29_183433_create_testimonials_table', 8),
(13, '2024_04_30_143612_create_enquiry_forms_table', 9),
(14, '2024_04_30_211946_create_join_u_s_table', 10),
(15, '2024_04_30_215625_create_curricula_table', 11),
(16, '2024_05_01_004052_create_assessment_processes_table', 12),
(17, '2024_05_01_012208_create_site_settings_table', 13),
(18, '2024_04_29_180239_create_employees_table', 14),
(19, '2024_05_01_134128_create__faqs_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `event_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `sub_title`, `event_date`, `created_at`, `updated_at`) VALUES
(6, 'images/1714649538_user.jpg', 'Carving memories…', 'together, as ever', '2024-04-27', '2024-04-28 08:57:04', '2024-05-02 21:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice_date` date DEFAULT NULL,
  `week` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_date`, `week`, `image`, `title`, `details`, `created_at`, `updated_at`) VALUES
(10, '2024-05-12', NULL, 'images/1715502902_user.pdf', 'Happy Mothers Day', '<p>Happy Mothers Day</p>', '2024-05-12 18:35:02', '2024-05-12 18:35:02'),
(11, '2024-05-13', NULL, 'images/1715503049_user.pdf', 'Happy Mothers Day', '<p>Happy Mothers Day</p>', '2024-05-12 18:37:29', '2024-05-12 18:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_type`
--

CREATE TABLE `school_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_type`
--

INSERT INTO `school_type` (`id`, `name`) VALUES
(1, 'Early Year'),
(2, 'Elementary School'),
(3, 'Mid School'),
(4, 'High School');

-- --------------------------------------------------------

--
-- Table structure for table `short_infos`
--

CREATE TABLE `short_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `short_infos`
--

INSERT INTO `short_infos` (`id`, `image`, `title`, `sub_title`, `details`, `created_at`, `updated_at`) VALUES
(4, 'images\\1714226523_user.png', 'Quick Info - 1', 'Sunday to Thursday:', '<ul>\r\n	<li>Early year (PG to Kinder II): 8.30 am to 11.30 am.</li>\r\n	<li>All grades: 8.30 am to 3.00 pm.</li>\r\n</ul>', '2024-04-27 06:36:13', '2024-04-27 08:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `image`, `facebook`, `twitter`, `whatsapp`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'images\\1714506317_user.webp', '#', '#', '#', '#', NULL, '2024-04-30 19:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`) VALUES
(1, 'Faculty'),
(2, 'Staffs');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `massage` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `massage`, `created_at`, `updated_at`) VALUES
(1, 'Taan\'s Mother', 'I got a warm environment in IGSK and found the guidance that fulfilled my wish list...Compassion is integrated into their teaching standards, the importance of values is emphasized...Helps students to have the insight already in elementary school that I have earned in my high school stage...', '2024-04-30 06:10:50', '2024-04-30 07:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$oMW6hvbdSKK01XWMC/6QoeE7Wy56wUFxaaGqb8BFO5FX1u9uDxtpO', 'BxwFgQgFwYZBj4khOuBtGxQFqBsleHmlxQDT28LXfwKVDfZtOIRlpilr3FCa', '2024-04-25 12:48:32', '2024-05-07 14:31:16'),
(5, 'Rasel Ahammed', 'raselahommed2002@gmail.com', NULL, '$2y$10$sKBHeLbO8Yn6eau.jL6Dy.BcceCw/pYwqa4RxGZO6PMRzCOu/Fdsy', NULL, '2024-05-07 14:44:53', '2024-05-07 14:44:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment_processes`
--
ALTER TABLE `assessment_processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curricula`
--
ALTER TABLE `curricula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- Indexes for table `enquiry_forms`
--
ALTER TABLE `enquiry_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_title`
--
ALTER TABLE `gallery_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_us`
--
ALTER TABLE `join_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `school_type`
--
ALTER TABLE `school_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `short_infos`
--
ALTER TABLE `short_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment_processes`
--
ALTER TABLE `assessment_processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `curricula`
--
ALTER TABLE `curricula`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `enquiry_forms`
--
ALTER TABLE `enquiry_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `gallery_title`
--
ALTER TABLE `gallery_title`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `join_us`
--
ALTER TABLE `join_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_type`
--
ALTER TABLE `school_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `short_infos`
--
ALTER TABLE `short_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
