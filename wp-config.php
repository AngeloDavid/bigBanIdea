<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp-bigBanidea');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '8gDmF(7*7<e2.jZoo8[gkB])*bhw/{5iur[B2/faD>a<sZR_@vSzh{|AHmB}525k');
define('SECURE_AUTH_KEY', 'N00^B+Pari^+T:53nG;CAfy/[A^8pnskyS,);Hu^i+Jv,i~Y:hprx| .[sX+xjYR');
define('LOGGED_IN_KEY', 'Mxk-.R{ Z`8j Qo_PLnC9]#E7qM~D{nm;vO#JQlN`o2r;F4 b3Zp2x:KD@cMV&i7');
define('NONCE_KEY', '[{$-0~-ER]qthd~PC.a+(Vmxqk=UJ`.]QY{*f7(Ob+E+?x$u9]V8PZ>c:!1W@1#b');
define('AUTH_SALT', '-=>ER X=q7.#`, KSF,``]@mVz,uE7ME>PaX{Xvzgi.c$1H)UgM7I$H{>8G(D#VK');
define('SECURE_AUTH_SALT', ':$*w2hL 4JTcPr)<CtlpH2xJ!u_Fhg$iJ6)Bsv8G-E-EfLJ!?HO@!g~[$]H0#SVI');
define('LOGGED_IN_SALT', 'IpS1=,V@[@.T*,:A*?y>/}ZA|gy* TZ750r}fyV5=z;Ii1DoRfP_wL(J1:wr]/nh');
define('NONCE_SALT', 'Tk1O/tX0FfWXbX88N=0$^|FNUB~nf/ipk0l&>Bep<6Cn]Ir9F$5Nq 8fKG#<}MGg');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

