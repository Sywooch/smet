-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 17 2016 г., 13:18
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_smet`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anounce` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `lang_id` int(11) DEFAULT '0',
  `is_published` int(11) DEFAULT '0',
  `sort_index` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL,
  `created_user_id` int(11) DEFAULT NULL,
  `updated_user_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `category_id`, `title`, `anounce`, `description`, `photo`, `views`, `lang_id`, `is_published`, `sort_index`, `created`, `updated`, `created_user_id`, `updated_user_id`, `slug`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(1, 1, 'О нас', NULL, 'Описание контента', '', 0, 2, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'o-nas', NULL, NULL, NULL),
(2, 1, 'Цены и оплата', NULL, 'Описание контента', '', 0, 2, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'ceny-i-oplata', NULL, NULL, NULL),
(3, 1, 'Карьера', NULL, 'Описание контента', '', 0, 2, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'kariera', NULL, NULL, NULL),
(4, 1, 'Контакты', NULL, 'Описание контента', '', 0, 2, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'contact', NULL, NULL, NULL),
(5, 2, 'текстовый перевод', NULL, 'Описание контента', 'service1.png', 0, 2, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'textoviy-perevod', NULL, NULL, NULL),
(6, 2, 'устный перевод', NULL, 'Описание контента', 'service2.png', 0, 2, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'ustniy-perevod', NULL, NULL, NULL),
(7, 2, 'телефизионный перевод', NULL, 'Описание контента', 'service3.png', 0, 2, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'television-perevod', NULL, NULL, NULL),
(8, 2, 'локализация', NULL, 'Описание контента', 'service4.png', 0, 2, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'locality', NULL, NULL, NULL),
(9, 2, 'сурдоперевод и тифлокомментирование', NULL, 'Описание контента', 'service5.png', 0, 2, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'surdoperevod', NULL, NULL, NULL),
(10, 2, 'перевод рекламы', NULL, 'Описание контента', 'service6.png', 0, 2, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'perevod-reklamy', NULL, NULL, NULL),
(11, 1, 'About us', NULL, 'Description of content', '', 0, 1, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'o-nas', NULL, NULL, NULL),
(12, 1, 'Price and payment', NULL, 'Description of content', '', 0, 1, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'ceny-i-oplata', NULL, NULL, NULL),
(13, 1, 'Career', NULL, 'Description of content', '', 0, 1, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'kariera', NULL, NULL, NULL),
(14, 1, 'Contacts', NULL, 'Description of content', '', 0, 1, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'contact', NULL, NULL, NULL),
(15, 2, 'text translation', NULL, 'Description of content', 'service1.png', 0, 1, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'textoviy-perevod', NULL, NULL, NULL),
(16, 2, 'oral translation', NULL, 'Описание контента', 'service2.png', 0, 1, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'ustniy-perevod', NULL, NULL, NULL),
(17, 2, 'TV transfer', NULL, 'Описание контента', 'service3.png', 0, 1, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'television-perevod', NULL, NULL, NULL),
(18, 2, 'localization', NULL, 'Описание контента', 'service4.png', 0, 1, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'locality', NULL, NULL, NULL),
(19, 2, 'sign language and tiflokommentirovanie', NULL, 'Описание контента', 'service5.png', 0, 1, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'surdoperevod', NULL, NULL, NULL),
(20, 2, 'advertising translation', NULL, 'Описание контента', 'service6.png', 0, 1, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'perevod-reklamy', NULL, NULL, NULL),
(21, 1, 'Біз туралы', NULL, 'мазмұнына сипаттамасы', '', 0, 3, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'o-nas', NULL, NULL, NULL),
(22, 1, 'Бағасы және төлем', NULL, 'мазмұнына сипаттамасы', '', 0, 3, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'ceny-i-oplata', NULL, NULL, NULL),
(23, 1, 'Карьера', NULL, 'мазмұнына сипаттамасы', '', 0, 3, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'kariera', NULL, NULL, NULL),
(24, 1, 'Байланыстар', NULL, 'мазмұнына сипаттамасы', '', 0, 3, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'contact', NULL, NULL, NULL),
(25, 2, 'мәтінді аударма', NULL, 'мазмұнына сипаттамасы', 'service1.png', 0, 3, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'textoviy-perevod', NULL, NULL, NULL),
(26, 2, 'ауызша аударма', NULL, 'Описание контента', 'service2.png', 0, 3, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'ustniy-perevod', NULL, NULL, NULL),
(27, 2, 'ТВ аудару', NULL, 'Описание контента', 'service3.png', 0, 3, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'television-perevod', NULL, NULL, NULL),
(28, 2, 'жергіліктендіру', NULL, 'Описание контента', 'service4.png', 0, 3, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'locality', NULL, NULL, NULL),
(29, 2, 'ым тілі және тифлокомментирование', NULL, 'Описание контента', 'service5.png', 0, 3, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'surdoperevod', NULL, NULL, NULL),
(30, 2, 'жарнама аударма', NULL, 'Описание контента', 'service6.png', 0, 3, 1, NULL, 1465994128, 1465994128, NULL, NULL, 'perevod-reklamy', NULL, NULL, NULL),
(31, 1, 'ghngvhgh', NULL, '<p><img src="http://smet/images/57638d2da869f.jpg"></p><p>ghfghghj</p>', '57638ce889973.jpg', 0, 2, 1, 1, 1466141930, 1466142000, 1, 1, 'ghngvhgh', NULL, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `is_published` int(11) DEFAULT '0',
  `sort_index` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `banner`
--

INSERT INTO `banner` (`id`, `title`, `photo`, `link`, `is_published`, `sort_index`, `created`, `updated`) VALUES
(1, 'Астана креатив', 'partner1.jpg', '', 1, NULL, NULL, NULL),
(2, 'название', 'partner2.jpg', '', 1, NULL, NULL, NULL),
(3, 'название', 'partner3.jpg', '', 1, NULL, NULL, NULL),
(4, 'название', 'partner4.jpg', '', 1, NULL, NULL, NULL),
(5, 'название', 'partner5.jpg', '', 1, NULL, NULL, NULL),
(6, 'название', 'partner6.jpg', '', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `model_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang_id` smallint(6) DEFAULT NULL,
  `is_published` smallint(6) DEFAULT '0',
  `sort_index` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL,
  `created_user_id` int(11) DEFAULT NULL,
  `updated_user_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `model_name`, `title`, `description`, `icon`, `photo`, `lang_id`, `is_published`, `sort_index`, `created`, `updated`, `created_user_id`, `updated_user_id`, `slug`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(1, 0, 'article', 'О компании', 'Описание контента', NULL, NULL, NULL, 1, NULL, 1465994130, 1465994130, NULL, NULL, 'category-1', NULL, NULL, NULL),
(2, 0, 'article', 'Услуги', 'Описание контента', NULL, NULL, NULL, 1, NULL, 1465994130, 1465994130, NULL, NULL, 'category-2', NULL, NULL, NULL),
(3, 1, 'news', 'Категория 6', 'Описание контента', NULL, NULL, NULL, 1, NULL, 1465994130, 1465994130, NULL, NULL, 'category-6', NULL, NULL, NULL),
(4, 2, 'news', 'Категория 7', 'Описание контента', NULL, NULL, NULL, 1, NULL, 1465994130, 1465994130, NULL, NULL, 'category-7', NULL, NULL, NULL),
(5, 2, 'news', 'Категория 8', 'Описание контента', NULL, NULL, NULL, 1, NULL, 1465994130, 1465994130, NULL, NULL, 'category-8', NULL, NULL, NULL),
(6, 2, 'news', 'Категория 9', 'Описание контента', NULL, NULL, NULL, 1, NULL, 1465994130, 1465994130, NULL, NULL, 'category-9', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `is_published` smallint(6) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `country_id`, `latitude`, `longitude`, `title`, `is_published`) VALUES
(1, 1, 43.238253, 76.945465, 'Алматы', 1),
(2, 1, 51.128422, 71.430564, 'Астана', 1),
(3, 1, 43.635379, 51.169135, 'Актау', 1),
(4, 1, 50.300411, 57.154636, 'Актобе', 1),
(5, 1, 47.105241, 51.910101, 'Атырау', 1),
(6, 1, 47.800225, 67.713605, 'Жезказган', 1),
(7, 1, 49.806406, 73.085485, 'Караганда', 1),
(8, 1, 53.284635, 69.377554, 'Кокшетау', 1),
(9, 1, 53.214917, 63.631031, 'Костанай', 1),
(10, 1, 44.83986, 65.50268, 'Кызылорда', 1),
(11, 1, 52.285577, 76.940947, 'Павлодар', 1),
(12, 1, 54.865472, 69.135602, 'Петропавловск', 1),
(13, 1, 50.416526, 80.25617, 'Семей', 1),
(14, 1, 45.018028, 78.383596, 'Талдыкорган', 1),
(15, 1, 42.901183, 71.378309, 'Тараз', 1),
(16, 1, 51.212173, 51.367069, 'Уральск', 1),
(17, 1, 49.948759, 82.628459, 'Усть-Каменогорск', 1),
(18, 1, 42.317301, 69.589709, 'Шымкент', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `example`
--

CREATE TABLE `example` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anounce` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `lang_id` smallint(6) DEFAULT NULL,
  `is_published` smallint(6) DEFAULT '0',
  `sort_index` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL,
  `created_user_id` int(11) DEFAULT NULL,
  `updated_user_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `example`
--

INSERT INTO `example` (`id`, `category_id`, `title`, `anounce`, `description`, `photo`, `views`, `lang_id`, `is_published`, `sort_index`, `created`, `updated`, `created_user_id`, `updated_user_id`, `slug`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(1, 0, 'Образец 1', 'Анонс контента', 'Описание контента', 'example.png', 0, NULL, 1, NULL, 1465994127, 1465994127, NULL, NULL, 'example-1', NULL, NULL, NULL),
(2, 0, 'Образец 2', 'Анонс контента', 'Описание контента', 'example.png', 0, NULL, 1, NULL, 1465994127, 1465994127, NULL, NULL, 'example-2', NULL, NULL, NULL),
(3, 0, 'Образец 3', 'Анонс контента', 'Описание контента', 'example.png', 0, NULL, 1, NULL, 1465994127, 1465994127, NULL, NULL, 'example-3', NULL, NULL, NULL),
(4, 0, 'Образец 4', 'Анонс контента', 'Описание контента', 'example.png', 0, NULL, 1, NULL, 1465994127, 1465994127, NULL, NULL, 'example-4', NULL, NULL, NULL),
(5, 0, 'Образец 5', 'Анонс контента', 'Описание контента', 'example.png', 0, NULL, 1, NULL, 1465994127, 1465994127, NULL, NULL, 'example-5', NULL, NULL, NULL),
(6, 0, 'Образец 6', 'Анонс контента', 'Описание контента', 'example.png', 0, NULL, 1, NULL, 1465994127, 1465994127, NULL, NULL, 'example-6', NULL, NULL, NULL),
(7, 0, 'Образец 7', 'Анонс контента', 'Описание контента', 'example.png', 0, NULL, 1, NULL, 1465994127, 1465994127, NULL, NULL, 'example-7', NULL, NULL, NULL),
(8, 0, 'Образец 8', 'Анонс контента', 'Описание контента', 'example.png', 0, NULL, 1, NULL, 1465994127, 1465994127, NULL, NULL, 'example-8', NULL, NULL, NULL),
(9, 0, 'Образец 9', 'Анонс контента', 'Описание контента', 'example.png', 0, NULL, 1, NULL, 1465994127, 1465994127, NULL, NULL, 'example-9', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `massage` text,
  `feed_file` varchar(255) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `massage`, `feed_file`, `created`, `updated`) VALUES
(1, 'vdfv', 'malikarabbay@gmail.com', 'fsfsdfsf', '576239b1e4ffe.jpg', 1466055089, 1466055089),
(2, 'vdfv', 'malikarabbay@gmail.com', 'sccsdc', '57623a9823ecd.jpg', 1466055320, 1466055320),
(3, 'malika', 'malikarabbay@gmail.com', 'dfgdfgdfg', '576240ee499fd.doc', 1466056942, 1466056942),
(4, 'malika', 'malikarabbay@gmail.com', 'пвапвапвап', '57625b7603e36.doc', 1466063734, 1466063734),
(5, 'sherhan', 'ggga@gmail.com', 'dsvdvdfv', '57638dee9b7ba.doc', 1466142190, 1466142190);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anounce` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `lang_id` int(11) DEFAULT NULL,
  `is_published` int(11) DEFAULT '0',
  `sort_index` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL,
  `created_user_id` int(11) DEFAULT NULL,
  `updated_user_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `category_id`, `title`, `anounce`, `description`, `photo`, `views`, `lang_id`, `is_published`, `sort_index`, `created`, `updated`, `created_user_id`, `updated_user_id`, `slug`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(1, 0, 'Галерея 1', NULL, 'Описание контента', 'gallery.jpg', 0, NULL, 1, NULL, 1465994132, 1465994132, NULL, NULL, 'gallery-1', NULL, NULL, NULL),
(2, 0, 'Галерея 2', NULL, 'Описание контента', 'gallery.jpg', 0, NULL, 1, NULL, 1465994132, 1465994132, NULL, NULL, 'gallery-2', NULL, NULL, NULL),
(3, 0, 'Галерея 3', NULL, 'Описание контента', 'gallery.jpg', 0, NULL, 1, NULL, 1465994132, 1465994132, NULL, NULL, 'gallery-3', NULL, NULL, NULL),
(4, 0, 'Галерея 4', NULL, 'Описание контента', 'gallery.jpg', 0, NULL, 1, NULL, 1465994132, 1465994132, NULL, NULL, 'gallery-4', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `is_main` smallint(6) DEFAULT '0',
  `model_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `filename`, `item_id`, `is_main`, `model_name`, `title`) VALUES
(1, 'news.jpg', 1, 0, 'news', NULL),
(2, 'news.jpg', 1, 0, 'news', NULL),
(3, 'news.jpg', 1, 0, 'news', NULL),
(4, 'news.jpg', 1, 0, 'news', NULL),
(5, 'news.jpg', 1, 0, 'news', NULL),
(6, 'news.jpg', 1, 0, 'news', NULL),
(7, 'news.jpg', 1, 0, 'news', NULL),
(8, 'news.jpg', 1, 0, 'news', NULL),
(9, 'news.jpg', 1, 0, 'news', NULL),
(10, 'gallery1.jpg', 1, 0, 'gallery', NULL),
(11, 'gallery2.jpg', 1, 0, 'gallery', NULL),
(12, 'gallery3.jpg', 1, 0, 'gallery', NULL),
(13, 'gallery3.jpg', 1, 0, 'gallery', NULL),
(14, 'gallery2.jpg', 1, 0, 'gallery', NULL),
(15, 'gallery1.jpg', 1, 0, 'gallery', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `default` smallint(6) NOT NULL DEFAULT '0',
  `date_update` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lang`
--

INSERT INTO `lang` (`id`, `photo`, `url`, `local`, `name`, `default`, `date_update`, `date_create`) VALUES
(1, 'eng.png', 'en', 'en-EN', 'English', 0, 1465994143, 1465994143),
(2, 'rus.png', 'ru', 'ru-RU', 'Русский', 1, 1465994143, 1465994143),
(3, 'kaz.png', 'kz', 'kz-KZ', 'Қазақша', 0, 1465994143, 1465994143);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1465994120),
('m130524_201442_init', 1465994123),
('m150503_173534_create_news_table', 1465994124),
('m160108_194403_create_image_table', 1465994125),
('m160109_163949_create_example_table', 1465994127),
('m160109_174513_create_article_table', 1465994128),
('m160109_190626_create_category_table', 1465994130),
('m160110_163005_create_gallery_table', 1465994132),
('m160112_182121_create_slider_table', 1465994134),
('m160115_175421_create_city_table', 1465994135),
('m160119_165716_create_feedback_table', 1465994136),
('m160119_190015_create_settings_table', 1465994137),
('m160121_180909_create_text_table', 1465994138),
('m160121_185759_create_review_table', 1465994139),
('m160614_112806_create_banner_table', 1465994141),
('m160615_042000_create_lang_table', 1465994143),
('m160615_123122_create_resume_table', 1465994146);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anounce` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `lang_id` int(11) DEFAULT '0',
  `is_published` int(11) DEFAULT '0',
  `sort_index` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL,
  `created_user_id` int(11) DEFAULT NULL,
  `updated_user_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `category_id`, `title`, `anounce`, `description`, `photo`, `views`, `lang_id`, `is_published`, `sort_index`, `created`, `updated`, `created_user_id`, `updated_user_id`, `slug`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(1, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. ', 'news_big.jpg', 0, 1, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-1', NULL, NULL, NULL),
(2, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. ', 'news_big.jpg', 0, 1, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-2', NULL, NULL, NULL),
(3, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. ', 'news_big.jpg', 0, 1, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-3', NULL, NULL, NULL),
(4, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. ', 'news_big.jpg', 0, 1, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-4', NULL, NULL, NULL),
(5, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. ', 'news_big.jpg', 0, 1, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-5', NULL, NULL, NULL),
(6, 0, 'Новость 1', NULL, 'текст текст', 'news_big.jpg', 0, 2, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-1', NULL, NULL, NULL),
(7, 0, 'Новость 2', NULL, 'текст текст', 'news_big.jpg', 0, 2, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-2', NULL, NULL, NULL),
(8, 0, 'Новость 3', NULL, 'текст текст', 'news_big.jpg', 0, 2, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-3', NULL, NULL, NULL),
(9, 0, 'Новость 4', NULL, 'текст текст', 'news_big.jpg', 0, 2, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-4', NULL, NULL, NULL),
(10, 0, 'Новость 5', NULL, 'текст текст', 'news_big.jpg', 0, 2, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-5', NULL, NULL, NULL),
(11, 0, 'Жаңалық 1', NULL, 'мәтін мәтін', 'news_big.jpg', 0, 3, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-1', NULL, NULL, NULL),
(12, 0, 'Жаңалық 2', NULL, 'мәтін мәтін', 'news_big.jpg', 0, 3, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-2', NULL, NULL, NULL),
(13, 0, 'Жаңалық 3', NULL, 'мәтін мәтін', 'news_big.jpg', 0, 3, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-3', NULL, NULL, NULL),
(14, 0, 'Жаңалық 4', NULL, 'мәтін мәтін', 'news_big.jpg', 0, 3, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-4', NULL, NULL, NULL),
(15, 0, 'Жаңалық 5', NULL, 'мәтін мәтін', 'news_big.jpg', 0, 3, 1, NULL, 1465994124, 1465994124, NULL, NULL, 'news-5', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `unit` smallint(6) DEFAULT NULL,
  `fio` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `is_conviction` smallint(6) DEFAULT NULL,
  `bad_habits` text,
  `education` text,
  `other_education` text,
  `experience` varchar(255) DEFAULT NULL,
  `last_job` text,
  `degree` varchar(255) DEFAULT NULL,
  `other_info` text,
  `portfolio` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `resume_file` varchar(255) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `review` text,
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL,
  `is_published` smallint(6) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`id`, `user_id`, `model_name`, `model_id`, `rating`, `review`, `created`, `updated`, `is_published`) VALUES
(1, 1, 'product', 2, NULL, 'Отличный товар.', 1465994139, 1465994139, 1),
(2, 2, 'product', 1, NULL, 'Хорошие цени.', 1465994139, 1465994139, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL,
  `created_user_id` int(11) DEFAULT NULL,
  `updated_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `comment`, `created`, `updated`, `created_user_id`, `updated_user_id`) VALUES
(1, 'manager_email', 'manager@greengo.kz', 'email for feedback', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_published` smallint(6) DEFAULT '0',
  `sort_index` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL,
  `created_user_id` int(11) DEFAULT NULL,
  `updated_user_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `title`, `photo`, `link`, `is_published`, `sort_index`, `created`, `updated`, `created_user_id`, `updated_user_id`, `slug`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(1, 'Слайд 1', 'slider.jpg', NULL, 1, NULL, 1465994134, 1465994134, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Слайд 2', 'slider.jpg', NULL, 1, NULL, 1465994134, 1465994134, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Слайд 3', 'slider.jpg', NULL, 1, NULL, 1465994134, 1465994134, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `text`
--

CREATE TABLE `text` (
  `id` int(11) NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang_id` smallint(6) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL,
  `created_user_id` int(11) DEFAULT NULL,
  `updated_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `text`
--

INSERT INTO `text` (`id`, `key`, `value`, `lang_id`, `created`, `updated`, `created_user_id`, `updated_user_id`) VALUES
(1, 'email', 'info@smet.kz', NULL, NULL, NULL, NULL, NULL),
(2, 'phone', '', NULL, NULL, NULL, NULL, NULL),
(3, 'video', '<iframe width="100%" height="315" src="https://www.youtube.com/embed/HL1UzIK-flA" frameborder="0" allowfullscreen></iframe>', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `secondname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` smallint(6) DEFAULT '0',
  `role` smallint(6) DEFAULT '0',
  `vk_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fb_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mr_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ok_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `li_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gg_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tw_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated` smallint(6) DEFAULT '0',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  `deleted` smallint(6) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `secondname`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `phone`, `city_id`, `birthday`, `sex`, `role`, `vk_id`, `fb_id`, `mr_id`, `ok_id`, `li_id`, `gg_id`, `tw_id`, `activated`, `status`, `created`, `updated`, `deleted`) VALUES
(1, 'malika', 'arabbay', 'balataykizi', NULL, 'KSIUVGQArA59pE-EZFY4CCD8MpvIOvE0', '$2y$13$wQeo.4DFTOlAn4f/bzwPnOymmn5k9ijj7a4eSB8QXEm30VIEiIqJu', NULL, 'malikarabbay@gmail.com', '87716252926', 3, '1991-02-07', 0, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 10, 1465994123, 1465994123, 0),
(2, 'scsdc', 'sdcsdc', NULL, NULL, 'UBo8Gr4xtf1mCAsBF4kBH-useWoDqy_B', '$2y$13$8/.DY9SiyXR0s2dSv0tjqeEmeEZccfwxA6QhxwPN5nZHTW13R4GWy', NULL, 'malika@gmail.com', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 10, 1466077061, 1466077061, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT для таблицы `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `example`
--
ALTER TABLE `example`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
