<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'facetwp' );

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
define( 'AUTH_KEY',         'oZLy,JHA`4rewUF]xpxD5/U!kBS7V{@;(B!{xT!i/XK;d@9jB=fu-qRpq4q&F6}.' );
define( 'SECURE_AUTH_KEY',  '@mx6XDShM#9fBn9DOl=*@3veT#I/qs^/;|0/ng9|/GV},l>xL)ZvWH`huiQc-&#L' );
define( 'LOGGED_IN_KEY',    'C9aB.$=QGIg,Wi:!z.Q`5Z.|?46F? lOH0iVV`:631qE]CyHQ9F0B@Ur:L9tQ~v/' );
define( 'NONCE_KEY',        'fUV%3W@3/W4^hJj5,M.)>o?)Gnp]P`ovZ=5k0FTFIx}}z3ENZg} i=U?jwzF#U$V' );
define( 'AUTH_SALT',        'c~{<fL)X%4/ZelZ0ah;VlU ?ZD-hF|~VL^pqsCrm*75)?|!o?8;@6@{S,2FsWpw(' );
define( 'SECURE_AUTH_SALT', '$G#w4w[=Rj^~m92vu%a+zgp5yF <X1I&Yd#`w}J`{D{r]2c}iWilfU%H?`Aifan1' );
define( 'LOGGED_IN_SALT',   '2 *[]R:VIoImHoW!sK`@Fjc1[E_y!lhae6EUz_Ptddn<d[O9GzECPG<}-@->Fy~g' );
define( 'NONCE_SALT',       'cY~3qcWnw[PX0H?5$=jHRRL}>A.TPUBRzB@1AuxWUTbRP8q2`?66hI$E%L@$mqpp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
