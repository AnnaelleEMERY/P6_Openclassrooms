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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'p6openclassrooms' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Tam47koo.' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sk!=SU]o%{cS#cCX@Y@_+q1)4Ew/}N:ogwF&%F>$]R>BR^zqe70Db8;D)WH{@lhq' );
define( 'SECURE_AUTH_KEY',  'yshlg+*.K/&f`=<#Dj~MR_$mcSE6=Wj=DEmLo^jtbkf}BR}-5 4Rg$uyD2TdVryS' );
define( 'LOGGED_IN_KEY',    '#xj)~Z`=i E]co0)sFY-~~OF5M k bID!=g|({dzySbK4V?t2t}31q(v=`edN<S7' );
define( 'NONCE_KEY',        '0ApAISM)r=t>eVS}7Ey>h{-,0;?ailsS;KeI^xo1%*C$EZ<=s=)f.k|v!&LX7+jU' );
define( 'AUTH_SALT',        '1R}.?60L=h7nJ-fyIcBbu8 X9[1;O,0u,/J1@h:{3+l*yt3,KdNIL;.Wr;5W%IK%' );
define( 'SECURE_AUTH_SALT', 'fkGNMNE;hUQ8SM9*>2D=T$^?z4kHPex@i0Q76HrO7~$=#:74hg11<^xzJC9,}eH:' );
define( 'LOGGED_IN_SALT',   'LM@:+z[*fnSwlwIw= }U.dY{|f(C.%E)3mgBo-qTT9z%|nB>+y&X$KwU5d-uFNB|' );
define( 'NONCE_SALT',       'LcaR@`$UP092.Y(AN#M#:dgjk]rT6X6s$tUow!p!e&wwB<NKd6=kVPJE<:i73x#Z' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
