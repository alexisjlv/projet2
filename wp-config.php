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
define('DB_NAME', 'projet2');

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
define('AUTH_KEY',         'IXEM$@~ A?AYTO0U=kvq@{c~e30)%?-g}UpjOwAEltDg1zcw&*+V>Fe7oj:bS)k^');
define('SECURE_AUTH_KEY',  'N0|S4:IHekMcG_~D{nAu{=%4-C#@.1qBL!5TOi=5O;B^hs&Xe&4S~{Bj[nr.#lJh');
define('LOGGED_IN_KEY',    'c8o6)L ce~q2`jM.KH^pF^0-w]Ow9>x(+0=-$iy,hu|(yI@FXnuzx^25CxwRV~.q');
define('NONCE_KEY',        'poj?UR]8EPvc@,z!byy1B&E(1q!wC]2&W&-]iw%eUndo)LssD Cd>kjQ9^mo@C_0');
define('AUTH_SALT',        '%M@1H7Rm^N~)P`s=%A9*{ClX~.lZtxJ@}}J@]<;e[#1Ya]rlc ja:LVfJS,QoSK8');
define('SECURE_AUTH_SALT', '*vo7wROJQ Kg!z?+>1Si#pIg0AGk-?!=Q7YBt$:ro&(Mz^}VjOF^0y6*pIe_JU+F');
define('LOGGED_IN_SALT',   'LukX$0?zh(c4g;[6T!EIa>i)pybcT&UC[xO[zrh(n.>QFW3FA]%D:tGx35G`0L+<');
define('NONCE_SALT',       'V>oj4|tI6:qp.f@/[>K`.lh5)5bP:U)%&rrA@Nv1tk<h_{!NyNa JMlVnVMUj=0g');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'prjt2_';

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