<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es auf der {@link http://codex.wordpress.org/Editing_wp-config.php
 * wp-config.php editieren} Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt, wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'dbname');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'dbuser');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', '123');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase. 
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service} kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         '9UP/M{>wcZ!bdWuR*sS~(+izn5Z_$JKypY/cwG5g)-N0!@~o!ewoj+s7q&6uAq^o');
define('SECURE_AUTH_KEY',  '_6v#=(5%L =Vj#TzWxOq^qPj8-/ZP&*@Qi$jt.ouR,R[O2_{,1:HbD32x+8Rs~oD');
define('LOGGED_IN_KEY',    'HTY(&0I2LH]#MMT)l/^zEqF_Gud;FT-EE8|g6%FV.k9wm,p |{:0U0U]6(L+{S72');
define('NONCE_KEY',        'Z:-g3ctvM$K=4GS!;jTn@-^1B6A](:-`=5 p/d>uEJ3ahA%%/h);ijoa<YNtW;w+');
define('AUTH_SALT',        'x2&N.}TP8j:05_>g7j~&jUHh]v8Ty}3C~3OX +$-E+Yi0GI7V@_~105qU+vK]DR@');
define('SECURE_AUTH_SALT', 'A},:X0^/6r>gI^/$WWxNU;KpCN]yE?uE--rIX-*m0dYJ.-|`6U}:gLIxfr_66SfU');
define('LOGGED_IN_SALT',   '5;j)#Xn&_{l[v0VgO,z1(S!2x|;dR!F=:,ZM9~ h^6MEC/y+pATcBy-6nL#O$m-)');
define('NONCE_SALT',       'l%:)yvF#,05N#cdDc86ykp%i7_76;X>eW3%fib{||Ol*bhWXJwK7,^=uLT$s#lsf');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Sprachdatei
 *
 * Hier kannst du einstellen, welche Sprachdatei benutzt werden soll. Die entsprechende
 * Sprachdatei muss im Ordner wp-content/languages vorhanden sein, beispielsweise de_DE.mo
 * Wenn du nichts einträgst, wird Englisch genommen.
 */
define('WPLANG', 'de_DE');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');