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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '15361536');

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
define('AUTH_KEY',         'cb11EU$LnhUTd6M:kje{`Zc?|i:T%=T0e%Tf0uU?vLODBhX2(_BM:(spb~GR8+2y');
define('SECURE_AUTH_KEY',  'M6%nQDN$<r4t?^L=g<(g/W)ee&JlhUEvcH8wiJRRzG]+dA~Cz`;)?>q%h.v?eBhH');
define('LOGGED_IN_KEY',    'EJwvR^_}-0fOhlL@rZF`VA2hUQ~:.<w*.I~E$Awgoi3dE}Tg/0z(M=(0)b)T+Bpr');
define('NONCE_KEY',        'z6vMvc2nW]a-N(+%lplJTSQz0^R>G_m&&D>>$ylDSQnPnF*?=Dx*{>y.|N,]4w.2');
define('AUTH_SALT',        'Cb`m,2}U$d/Dmu0=^wkIy!vrW&JpC_C |= WG)XRVF}0Wf:hC{BiwN~LL -y#^R;');
define('SECURE_AUTH_SALT', '/1w8@_p,i9W5#6 @nsy(hW_x!Ck4Gl>HlH./0.I5p|v_gy2|J}t]L#W_5_1xA],|');
define('LOGGED_IN_SALT',   'F*@Hr~w+=2- QSY3BI! y6t1EXCx` sAs)kkC0$3(XVs=vt!uXA]6ZVME9nnAqd-');
define('NONCE_SALT',       'CpQJzuys*J! Qm|X(&W<Gu@fMe{/2`AVswkH@8S7 q]>n@[sg].ls=&@v7k*K 6W');
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
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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
