<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')dZ-m`~CkO9mH@s%g6=LqQL9j+Lk%TQuI/Nq&czm-yuT4RGNM>C;Hqp<9B~pN?.N' );
define( 'SECURE_AUTH_KEY',  '~[{W]1I}gWB}v7A(CwFk%1ZxT=fEHxA:00tGhk%+TAor{o4w:W=^t?.=w[XFN6 7' );
define( 'LOGGED_IN_KEY',    '/e?:t>ic!;jr:-~0(>j)Xw,eIMqaM2HyFiR3/%1gb8@[Qe]6En4()z^JQ ExL_n>' );
define( 'NONCE_KEY',        'G-I`ICY<UGJLwr#kt?f#6y{,QFs{5N}`fcODrU*fH4E@B@FXW/YML>WtK.wY}R?G' );
define( 'AUTH_SALT',        'L_4Y.1A.KX-b^8t]j:f6LXS7z*(Ga1>O)>X/VjId{Vt0KA1Z5;JjtDY}.m73{4rB' );
define( 'SECURE_AUTH_SALT', '0LZ/o5U)IC]/!GB50/E; B>>;U(v`QRts({Z&44v#S1ftxUtd8:?6ps27Aycd)V.' );
define( 'LOGGED_IN_SALT',   '=ws2cd-[]B^!@hn[ddea]Kf+KT%Zv&ETAL>q3*Ln)IM|zmRC#c~[jZvRRgo9Y`DG' );
define( 'NONCE_SALT',       '51^ PsWVU5Yr` j J7_^t}gBX1T<,0`0`3;0i%lsI-Vq-<jHR&j+bR(r=28q6@Po' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
