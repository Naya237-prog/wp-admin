<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nanay' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(UoDQIBRF0pHW$][2YaI F2z9%brgL|`{TXY%]l^_GIJJ&(n!dYb}<]La:32KjMI' );
define( 'SECURE_AUTH_KEY',  '(v1fQ&g_AoYcZ(aRF5@o{$dmLswRf<y68E!=QFgXOW`^IoMtWPiyU2(bX_Sl/sU*' );
define( 'LOGGED_IN_KEY',    '1OB3~k|[O{QhJ/ba-;R=GMd,oEgP~C@|-1f#KddG4+JcUsFY<XKOGQTrleg1vm+P' );
define( 'NONCE_KEY',        'T~xGWF?@Wd5!=b3(92Ul|ZSkRkD#K3c1Aj0x$.cP.p{>,*fb<$~g$s{nG~(qn1/f' );
define( 'AUTH_SALT',        '40(?tV-=CS;YKd0o@5n~~r}mQC>K{`@?y^LaB>d}3#yl|=K|j%Qk0SX4$k s+GpR' );
define( 'SECURE_AUTH_SALT', '2t#n=8Sb)_^hgwb&O:VrRqop[FCNkhTF}M+&%P@WS I8uf>=x,Ojn]AWkb0.q;r{' );
define( 'LOGGED_IN_SALT',   'WGa#}GrB4|wTA$h:zTbxq)L#2&aE/,*`9sn<qD%4Y4l5&mU&%2H<EfM=W@Y^l5dg' );
define( 'NONCE_SALT',       '/(XYz^CQ$.P5TH}grk7|~e*a(:QOIN8ztt*L!5J=P9Pce%w5p%&$u2%qq{M.eNH)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
