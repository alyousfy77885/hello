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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id18940237_wp_5257f7719dd9a6163d7ec65e2e6417fb' );

/** MySQL database username */
define( 'DB_USER', 'id18940237_wp_5257f7719dd9a6163d7ec65e2e6417fb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dc4b03a03a543940c8021b13b61a9e8043a99dae' );

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
define( 'AUTH_KEY',          '38IU3WLGg7fEaE88v8D7JRFdXm,+Jq)&cR#;TK OYP5F,0n~z.3kOVJF5$dN|>()' );
define( 'SECURE_AUTH_KEY',   'bW~MeFpf?8[s6xpTP64?I(4;O/k60GsztGp): ``N%)h[}H 30%gDDUE8e}%#?E6' );
define( 'LOGGED_IN_KEY',     'a[k&XJ5[}=jK}KZ;&T)Idf8p2Fr@(Kd(5p10ChWCcgl{gdsCDC!YJ3~CDj[(-O$g' );
define( 'NONCE_KEY',         '~9yPMZ@;v;^bzGn]FD!|W^j]~Ur6kbYtHcILGrhq*=}I@x>z`l6%^^f0$u3DW|f(' );
define( 'AUTH_SALT',         '{n@[Lh,o@L=.sa5rj{tCYSeux7j!NL}mzo!|TYPG_g?z}<JL1 }]V.]?(Kv2{Mgf' );
define( 'SECURE_AUTH_SALT',  '^:%[s.Ti4|pVP}:`-f]8BV7cV!#`2n0lXl<9KwFR]l7uL=bsbuj_}5r %oeH3.>|' );
define( 'LOGGED_IN_SALT',    'GV[wSr}-R:?#rB;o~<RCOLq7*-)I#xU#e@{wI[K?B9.{Rf&0s! cKvU%Fxg/w?EC' );
define( 'NONCE_SALT',        'UFa ZK08z8-J}d[$%pNi|p/t?}>UCGI2b0n Me/ yhCEyKf.7XU|kv_A?s$mD*Q8' );
define( 'WP_CACHE_KEY_SALT', 'obVHk35NL$7%6r.r0f6c.PO0Jk#|e23C=}/cxr$2(I#}48S4e9F;}3.n-{tjsVVo' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
