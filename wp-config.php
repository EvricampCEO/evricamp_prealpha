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
define('DB_NAME', 'u121350908_wp');

/** Имя пользователя MySQL */
define('DB_USER', 'u121350908_admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '45006423');

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
define('AUTH_KEY',         '49%}+/c)jDT-uuWkrJ-+@iMV$zT3P7{n3D_S[)FRX-^E<Mj<.=j;MFV:80u*s^>n');
define('SECURE_AUTH_KEY',  '6zYA/_=0?S%Y(/TRswfNy>:R@lk)D?W;Cf+H!1)Iz4|g0Uo;j/Fi!dcQP)UFZ5t1');
define('LOGGED_IN_KEY',    'mD$SFB%D&){w#Ij ,-IQej3YCm$;?^x5zjWD+0s(WwhtT+bT7FK[N}T0$h[bpVER');
define('NONCE_KEY',        '+tFX>sn#L1fy_)D}9}#Kx~mZjN@O{8_?.Hr+uT?!(3so:_;;}=Yk:vEmoN>};It=');
define('AUTH_SALT',        'w./QMeuPf Du^L*|<[,9j@]+=K0v^(Gu_)?Mxi;lgWJ8y@S3.4q!:T~;NZJ~4hRy');
define('SECURE_AUTH_SALT', 'wu|)#VS)_m4^7V(GcZ^M/LgsP@g}s3C!kKS=(Gf0z96g)V%J*Z:ri`>4<=DM$UEo');
define('LOGGED_IN_SALT',   'iSbFG.F4BqmE6dC81;2-!q%P=b%QO<:YE=(0ZTyDeMk0<@=A%Md_h^MA1wt2kw3Q');
define('NONCE_SALT',       '62Y6.ih_f%*EOu$:gq9S#h<`_/Xz]LksfuT#9BU[o<[[-(0yE.dS;[OQ_DCB!A93');

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
