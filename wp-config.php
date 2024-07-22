<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\chic_dressing\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'chicdressing' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'L$(;.7}}McKdB5tZ5i%B#mvoA/1~U mR-k%?QX1.ke=>dK*Y*g_i|i$DtI;w0zA(' );
define( 'SECURE_AUTH_KEY',  'e7x`?a]fAM>)2nUM%!sR?Ups)RgF;R%aYD+h8mNG9UzY?9#ar;PTg4s,#}&IEb1O' );
define( 'LOGGED_IN_KEY',    'q~Xx(EL)LB1Je~-<*D*13>DW`r$Ptxcn)nIpOli~+5qqH^yF]>9k5]Iz}|wx-dQG' );
define( 'NONCE_KEY',        '6gxQjS%-AM(cWsJ~(Cg#:R.3xZugp[J.{1q1Mm[ p;~R$lL[skw84s7bq|<-Wx]6' );
define( 'AUTH_SALT',        ';Y%W[[xd>=q/A qlg!*Fl]t}S(6Dpk:AXqiZoB139DFoj_m-cGn(8*I~ZUf.>_dl' );
define( 'SECURE_AUTH_SALT', '1dMD?!8Pb0MsJl~$Q0uV!ga172D7BuKd{3E?3D.sAj|Jfe<R5ty4uvFBxeKBKZvA' );
define( 'LOGGED_IN_SALT',   'T wOr=m<9FZF2:pB;r2m]8bxFGHIv9*PJ,qdMY6,&m?Ucy}*AKCsxP.=a8U$/9Vx' );
define( 'NONCE_SALT',       'p)>LjkU(=pD-ca/mrt2(Y>R/^I08FfTK%$m)pNmCy.9#^?pRp^m]og2g7~Bb&Uea' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
