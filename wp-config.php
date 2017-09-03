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

define('DB_NAME', 'wygarage_db');



/** MySQL database username */

define('DB_USER', 'wygarage_wydg');



/** MySQL database password */

define('DB_PASSWORD', 'eI%g,+IImtF-');



/** MySQL hostname */

define('DB_HOST', 'localhost');



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8mb4');



/** The Database Collate type. Don't change this if in doubt. */

define('DB_COLLATE', '');



/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         'QFAn_t>noQ^Hs&$h;=jLu%%j9~$yRX78-*;iH8!0v:G;CLquN8G4i])XsK.u9&L5');

define('SECURE_AUTH_KEY',  'O@xc[Em@#=Vi*DnXgYVIDA)T$AVl3lZ0m%fISiLUj?0O4Rn=e{QZ2x5&eMP 2IZ%');

define('LOGGED_IN_KEY',    'v`7QIa>JE9ev&EUF-cAv|j[ijH>?zs8?bN(]n(Wk&3[Vr%5xp#C2b.zBtT})/%]U');

define('NONCE_KEY',        '`-KC=Orx/g<w7Fqj/jM8kzb`[4Pt2[*N8t|rf6ud.,Gnp8r;+g1R~fH-kO^rS|qv');

define('AUTH_SALT',        'Q~do5acCP_4-dnv@-*v?B2v.W:.[`pG-t ~reC@-Vh3u{Tcf8-eD$<Agr `@{RSz');

define('SECURE_AUTH_SALT', 'R4.hg^s;a@K&z>QBWJFCQHo|s@UxyWlT%v]i2sZ^&!EwDZD)m{pb(%`| !`v!n]j');

define('LOGGED_IN_SALT',   ' jUi1apPLtAF7t^KtU.3GnTOy`$EIN4;RyDX%+8F@&O8q1S-8nd-39vQc,X m-S@');

define('NONCE_SALT',       '~t=?JhhreWj$htt3>d)upYSr[P.|80c6~q^!%:kJb+6I.[s0j9/kQ,kY V4!&>0l');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'wp_';



/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define('WP_DEBUG', false);



define( 'WP_MEMORY_LIMIT', '512M' );

ini_set('post_max_size', '32M');

ini_set('upload_max_filesize', '32M');





/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

