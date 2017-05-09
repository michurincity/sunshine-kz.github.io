<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '4jWbfQDajDRdhnK5');

/** Имя сервера MySQL */
define('DB_HOST', 'sunshine-kz.github.io');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jh SHE68<9*=/vszELH5iVRn$%F[k_F%{<%}/d;<Y-_I4zC=W$a<n{eyw$VDh{(:');
define('SECURE_AUTH_KEY',  '.ex5aG/i?(bTyVPk!#y:,-qr9 o$w orQ&eDi-<p)vXDb)hebIIcR:RG1x9A<34{');
define('LOGGED_IN_KEY',    'q9twAr!Jk|UBs$tFz5wYA._N>iR*5p6v?x@p1U~-6)Y(V!+Pu>=5)+P:Ne~3w2(4');
define('NONCE_KEY',        'EUVt?6Z.iVNG1NKgRBgfr$Cwb<G$6r&C-vjFHswhXUSdYtMa:6V34-8;vu6p h=<');
define('AUTH_SALT',        '73z7v#6MvdB*{,Nai?O1m=I&O<-j$^%:KOy2eM25:w+hnI/Yi-p(/Pp&;8s+e-Vp');
define('SECURE_AUTH_SALT', 'r|I>l!.SRSd?]G;l+sL5[<V}Zi)FIjJw@xG6NE(Gu {K|,?!r7}tBHU@z|_4{N~~');
define('LOGGED_IN_SALT',   'E)-k@>&6v`W;vQ.>2B-iB>j IMdBCBJTnDG@-$_)M!Voq@>R[CT?8#h{EgW^:EO8');
define('NONCE_SALT',       'HSVf9W13&1Xao9r0L}apu9W?:8d)B>&xUABo+d^:+iy?5yXpHUEwjVHhNdrHhfC&');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
