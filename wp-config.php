<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'iepp_site_web' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'sercom' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'IeppSercom&2019' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define('DB_COLLATE', 'utf8mb4_general_ci');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A3-!dl(6TM1=Y~enxCpWAE:ZS>hvW.8MmCHw9g^9$>NSVzO}Hu tRpN+2:iiG(N+' );
define( 'SECURE_AUTH_KEY',  'Ndx(+ak O`qz:Cny D:dZ7*@+yoi.~BU/RdWESek51Z}f[75sOauZl/[jHtSL2QX' );
define( 'LOGGED_IN_KEY',    '38~L/T1d8>TZg 9tv$y:n`A5|(rBV$ULoN(Hgwo:6PjXsl6+H/F-v}C?/<RAdQf[' );
define( 'NONCE_KEY',        '|TU`raeyR,VJ d!koYPSui+q|6D:v6U;)t!F#.n~7X+*M-6;+&ND;X*#pNd5enxh' );
define( 'AUTH_SALT',        'oul#)A]0t2qMRCn%^}WgX@&=msWsuY%D[&F|?N))F)1&^HhG62WVb&,HT$.G(C%i' );
define( 'SECURE_AUTH_SALT', 'B/aXKdq((::zyK1<o`y;N=.Il1{y{x&~<^rbIFD:xmBso3jR]4`CzkQlOR6_Ix4!' );
define( 'LOGGED_IN_SALT',   '96gsSL;^`eV@>^G;;OANX9>|X:R qf%,(E6E,iK`f|l<kT&D3_i0F;kme]zp}I_a' );
define( 'NONCE_SALT',       'Jw &Gf,mpl80N&)/sdEsnCYy@o3xK*C>[`Vbn8cRa.kOZmu!T1),$*5u@s>s)/N9' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

/** Impossible de localiser le répertoire racine de WordPress. */
if(is_admin()){
    add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
    define( 'FS_CHMOD_DIR', 0751 );
}
