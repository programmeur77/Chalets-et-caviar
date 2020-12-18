<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?Bs3%BeB=xT&~pw~jGoaxG3Hb:ye#MF}HPRg~ts>:csYcuG5lzKSIn$v?9P<|y^W' );
define( 'SECURE_AUTH_KEY',  'a_CkUU~{75hnEQ:r}ue_PfKJ<XS0_OxSem<C5oa3LH^GNZp!J(d$HFRx,jJ9!Hll' );
define( 'LOGGED_IN_KEY',    '_k] F7d:3]_}mgLMFQE3SmK^,ctUSW&g?qwSD5zL:9>f Y Fdv?[QKiY(e!MtA^q' );
define( 'NONCE_KEY',        '~O2} UAIq|Epxe3oM0|Q`)o?z[9*8`cx_).F]Xf.sY~Djhuk+Kc|ht!m`.GoqR.@' );
define( 'AUTH_SALT',        '^3@}a])1@l2<:ndyTtTCj<=a9Dcr>1<x*;?^&}9pylcc%I_Zf%G/jxy7H+ !j<<J' );
define( 'SECURE_AUTH_SALT', 'x!mIPXsO?N1MMA1u*W<9Lb@YohH3|>2oW^e.|h]!5&7_S@[Z6*.G,VJ8v*olCjJ:' );
define( 'LOGGED_IN_SALT',   'c9)w2;.Wv GOh[(N[$rly-!&<%+IFZe1-PMTE/!DKUxv;QHV=a?-Y}qb6A5+2.cx' );
define( 'NONCE_SALT',       'FhNB&S[YPQhX$`s5DZ?mG})j+jF0/`i4/W;r/xS1_ ER&)a>zv#.6vNz^;g@,uy-' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
