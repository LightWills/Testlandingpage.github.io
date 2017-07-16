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
define('DB_NAME', 'expertdesgatdeseaux');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '1!QqWfC~sy?x,STnF+A78#8#ll^-Et4#dj<HtHnM?>#uaNA%N`4+M!X2(c>c0uKJ');
define('SECURE_AUTH_KEY',  '##9DTQ_d($Y?D|0oN3WM#8&R}AtK*fmV,7x@]V_^AP~|P?bW)7gO-WQEr]P?CG13');
define('LOGGED_IN_KEY',    'p(=j9(<;pn)2i*mwS-a}rj0/7GgtktOAaz.^rc| AxLBYoH=X)jpo9qdGd?/*yid');
define('NONCE_KEY',        '?Z2bZov]@Z?725+h3<k1$Fw^k34mzw4RP+:iC**s??u|#{fmdGPph>WI?c#^U:mn');
define('AUTH_SALT',        'd-pFgcqepz$OCb!/tU{,1?YH e<}8EWETLD}2<dARg%d0Y|y~qLGi_Q28P2+s0KC');
define('SECURE_AUTH_SALT', 'k/Z({BYYPZ0zl8y~-9rnb9EI|>Z}a>F0SUNvMnX%l66%77Q`%4rtBQv)Eu`v#mqc');
define('LOGGED_IN_SALT',   'PK]/:zOTY%.g_lc|;MW(|)r&P VNEI[fnaLb`AiV6-KA:ZmbWQFwTn0Bs~P_CGDd');
define('NONCE_SALT',       'T: >ZJYMn0Y KZJ6W#6MG6g/83ahBh-<[064U,Ew9.sM%:X*AW!_:wX s T#n2Yz');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');