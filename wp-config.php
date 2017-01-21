<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'ornitorinco');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', 'root');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T/ ij9G0K &apS0W;5,(?lO[r7bpa-2Y-X_29Bas>Q`+k+$h*z4w3*19*b@ n})A');
define('SECURE_AUTH_KEY',  '55af^wt}y-^FbiE`; 8yi530o=vY#[`+w-!54jcVJd{sN%v!w8e$S^g[mjNcvYgO');
define('LOGGED_IN_KEY',    'I$R,lzE7SbEQkHClq-?tDWqY_i|8jO{;G|SxqZOQ(Y]GjCEH(Dj22.C/=Cc>PW3j');
define('NONCE_KEY',        'f2TH`Wii2P&`=v@7SlJMyBz+ g`9C3%S5EtvA4GK`4Q`09AHqd^WZfIaEMqU;_gD');
define('AUTH_SALT',        'D ;uZXVJQz_4KD9[}%wBjx{dFykCjrqZ5Yoi*<iS}|%M)8X9D`EaF,<<E,~-~+%y');
define('SECURE_AUTH_SALT', '!7 F-Vh&NgUIg5+%$HmFCHYEX=h2c~5OY;7TT@Tzc6rxDm9/jSo`+_Swx!8v=.9n');
define('LOGGED_IN_SALT',   'K0$v5)Eb46F-R&+<)T3wvzwBUX$GzO^HVJHp<geQ#GcOt-O{{!_FzaC #a>:LXCh');
define('NONCE_SALT',       '=w~U@4waae,o0o[Xjf]u6frhUq61Eyj6+F0Y23dSUq@evVs] B9kp o}k4]%eFKy');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'or32_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');