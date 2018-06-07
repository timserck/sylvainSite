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
define('DB_NAME', 'sylv');

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
define('AUTH_KEY',         'OC[K)^>[^m!C[ikoGJ5,=ku/>z4>*tH[MEqbru! E>kuR^|DKP6vtZv3k;oZQZFU');
define('SECURE_AUTH_KEY',  'SO$XSa4CeK<s7G6zM2CCohvs?1RQ>%x;WN3qDB9T&2B`MNURR)M1{&Ju7UjWO02j');
define('LOGGED_IN_KEY',    'f.(A*@|V532OCt[I}]]8b{|8o<kIaN*VI}a|M^QW+lQ;L4|DZ<@*}p!ne&TW-b-Y');
define('NONCE_KEY',        'z>c<`okj@Yt2^I|tOvH+OZU-:l)MLogX8>ty._UQ!):Hw>Qjz^-Dol|{r2y+=}+X');
define('AUTH_SALT',        'b3&~ls+:<lc$eD8ga?W}dQ|rX4~L1P-cl2n:*No>B^dQk{j-!hChWoWV?,:+&LDU');
define('SECURE_AUTH_SALT', '~xyGPrAwB1wx[7Xbm#;!#[cjoFhQdvT!~n`noa^FZmU#lv*p9`p--I0FdbGbZpK%');
define('LOGGED_IN_SALT',   'M*PPNvP%x>YPRO0kk+~R?2Q,6Q5CDI0M< 1C,g5t8t&anWYbL u(yc0Wi<G0:b)e');
define('NONCE_SALT',       '^UFc9~)X}XM{PV0),C>q s/*o<Il2y[Leqxg+~@I[O5hRe?)lu7f;{JDEKbnSdcq');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'sylv_';

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