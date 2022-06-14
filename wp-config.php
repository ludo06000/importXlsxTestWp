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
define( 'DB_NAME', 'TestTechMentor' );

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
define( 'AUTH_KEY',         'U4*N7uBM}#;Cy-yji EhxGG*Yfma@ZVi<~;9?;}n+{f9&zpkC}@|i~3S<6NAsBl;' );
define( 'SECURE_AUTH_KEY',  ') l=H!:R=OeA=(;f1Kf-!y#p0?:Le|!;!U^nJ&a_! )IqtUU-*h|z!$cI]AgLu^T' );
define( 'LOGGED_IN_KEY',    'qX&Ch5Wu{i_EptrKjGMSb_]AStj-17A&%%}h2r#/[2ZZ}BerGT<d`k8UGEW*Uf~]' );
define( 'NONCE_KEY',        'QB&TPE{<NiMepcB21-;WYKm3ns>*jL^FTWm:>ArE1tF5RF_BKRE17E_PqV,a*bR=' );
define( 'AUTH_SALT',        'dSSJ{$bA7S%l4(eB3czHR;{fGfI+,N)v.p0{&*iD]-4w8Zd2vnu(8|`oJ^3.t&wQ' );
define( 'SECURE_AUTH_SALT', 'yL32!D05?/Ow%tniu4<T<j5A-)* TWA3FD?X7Ec(f._$liUw+*:|Y--6~HI>M{{a' );
define( 'LOGGED_IN_SALT',   'ETgviCdr(Ze*tm@!m3r!)pS.%{e&zW/X{V51~a3hxxpmIek(:l=4t`|]}FkU:)[z' );
define( 'NONCE_SALT',       '0vO#X /_,n{b!JdnmIm%K$33#ebG%HRc6j5u&m Q2eisOJ?G~3u?tR#jIviW-OmQ' );
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
