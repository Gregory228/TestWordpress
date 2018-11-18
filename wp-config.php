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
define('DB_NAME', 'TestWordPress_db');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ',w[QT^zC73 S(MB_(GnLgbjO5K;($?}f(dVCj_[!6)%uu^&W0IKcwH(f%OK%Ql/ ');
define('SECURE_AUTH_KEY',  'HLY? Kxhk$SPO2[r&X#Bb-e^$lVk(nf7aRkp:.((xxP_1Yx1c#{V^^>PENgk$)VB');
define('LOGGED_IN_KEY',    'O!;3TWEA$&M-W9/k`j2#| DqQEx=V9t(D4xb@JnfC&0ADKgn!lS#q4F~t,jw9J;v');
define('NONCE_KEY',        '`g%t+Bj=N{HI*:id&s67mgi2e8wr|<*<CqC*{n?uZ(,lhKZfV?vB @J!^<w{SP[[');
define('AUTH_SALT',        ' JoWVx}sohCT;e)S1/9i7$ri`.2`IH}#StKN9+mYHEdmEg$0rACQo2 SM:-gyV{F');
define('SECURE_AUTH_SALT', 'V-53h{mtW9sC(}CVLeMVo)[5In= jw7IM}9m58g&AC086 5g6(xBm[,j]`#hEn*:');
define('LOGGED_IN_SALT',   'Qdq^gN7^Ju:&ZkZsoY9OQ$hzuVu_E}dI_K?JaqZu6Vvfov`wAGY*|*@U{kio})Uw');
define('NONCE_SALT',       '#eMCVRhCdB- }~fwYs#VME`4%.li?xCFy:~Aq[=0545C4C&XoEBJoNn>Phe6a3v%');

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
