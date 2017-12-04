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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'BeXr-`6=s7<1-#W! Z9IqVZY.G}Dv_:/Ev^:9-Yg/OD(kU8,,/}RjX^v=o`+81]y');
define('SECURE_AUTH_KEY',  '>kdue`t5B2JaVH;QV+9bj?NZG.Q]Ozt6gC3V$xNR_t&2xN/xzn$*:m?fYp;Sn7|G');
define('LOGGED_IN_KEY',    'y+efVl4I2pS;=*ePGV>x#nOq285sMb)6CWME-r[c}YOF]EDW6g~UAAh^_+HS6ak9');
define('NONCE_KEY',        'ir8xYG[(sw4fD6E-=L5D`,EdoHD&^~w?DA8f|s5:{D@:#%]Y5<@4>u(tc.aMKU%0');
define('AUTH_SALT',        '5-qOH%0g&@LSB#[h7;gh}k_7WbU/1A*fPi2cl_=/r^at=8c7dgYLaIjDx{zOMtlo');
define('SECURE_AUTH_SALT', '/]t[R:F4(sw/qS_8-Kg{Skc{~4dhVp+Tqdm+Bbc7Z-M8g%=y`L=2vfj#25e^!l B');
define('LOGGED_IN_SALT',   'j~>*0%/kcH2-y~.A/Bx/CA;)8OK`M|~>wW84CO`Oaq{Yz)(X0Xl5Y-kh5XcFp_hW');
define('NONCE_SALT',       'eQm5`COys$Lr9?6A!5_q}p.n$ja4eDD xv:xhlIAD/UE9=Hnjv@!=#e0v PAXU~]');

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
