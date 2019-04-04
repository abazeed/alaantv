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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresstwo' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'i1N+O]!k?J),OP86 ^Z47_c- idU,Dj)`jW-N`:&i6c-NRTJlSouSleOdw8cA;wN' );
define( 'SECURE_AUTH_KEY',   '_I=eRZ)P%efg}J_S]2u/O~[c-%N[30Ms15Rz{EpHu*s(HEIS&?Zpl$3.mz%o{yai' );
define( 'LOGGED_IN_KEY',     'S6{$xb&d1=v`Pga3>z6!kH2h~RROE;<g=dX|)[*qmSU8sh]1%$gl$,uGHP/I_{m=' );
define( 'NONCE_KEY',         'BnFwxR&50SyLgCa[H4kQtT]=1C$RPeXQscE_${!=w(UC3|Yh4hU|mWp0;H,~n^E1' );
define( 'AUTH_SALT',         ' vQ%i0TcDD-lwBZXLa(y DJV2s(CVnHs`0$qa4B!J8hN-WX3)qia#MIjLerA$tbT' );
define( 'SECURE_AUTH_SALT',  'n|P)PF]JkuBeVfk~3{~gQJ-1&v@Y4R|QZ<d4l)@V@3e;BX:6+Z|7U=bn@OV,q/A`' );
define( 'LOGGED_IN_SALT',    'R137x(F;DH2.?9t>u:_tDMO/UWae<oTavTB&A7 WCw6gfS1<o@!S01()oOjCynbh' );
define( 'NONCE_SALT',        'O4y8f0os?yNda#LOQBLL=-KI^@OYmlA|gZNn>FF)_-r*WrSkE9arj4./yxvC$.QJ' );
define( 'WP_CACHE_KEY_SALT', 'wlhF&B4]O)Fvc{A5}ui_(XM:$L~:2S T7Wl3cH&Dr(a)XTbOQuGgN=N|p8t`b0]k' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
