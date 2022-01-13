<?php
/**
* Plugin Name: WP ADMIN ROLE
* Description: Ejemplo Basico 
* Version:     1.0
* Plugin URI: https://guidorios.cl/wp-basic-crud-plugin-wordpress/
* Author:      Guido Rios Ciaffaroni
* Author URI:  https://guidorios.cl/
* License:     GPLv2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: wpbc
* Domain Path: /languages
*/

/******************************************************************************************/
// Archivo : index.php
// Funcion : 

/******************************************************************************************/

defined( 'ABSPATH' ) or die( '¡Sin trampas!' );

/*Importa funciones de instalacion*/

// Funciones requeridas para gestionar archivos
require_once(ABSPATH . "wp-admin" . '/includes/image.php');
require_once(ABSPATH . "wp-admin" . '/includes/file.php');
require_once(ABSPATH . "wp-admin" . '/includes/media.php');
// Funciones requeridas para gestionar la base de datos
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');



/******************************************************************************************/
// Archivo : index.php
// Funcion : Kfp_Insert_form() 'funcion para el ingreso de datos'
// Objetos : $wpdb->insert

/******************************************************************************************/



/*Inicio crear shortcode en la pagina de inicio */
add_shortcode('kfp_ShortCode_User', 'Kfp_User');
/*Fin crear shortcode enla pagina de inicio*/ 


/*Inicio funcion para crear shortcode en la pagina de inicio */
function Kfp_User() 
{

	/*Variables globales*/
	global $wpdb;                   // datos del sistema
	// echo '--->'.get_current_user_id().'<br>'; 
    $current_user = wp_get_current_user();
    /*
 	printf( __( 'Username: %s <br/>', 'textdomain' ), esc_html( $current_user->user_login ) );
	printf( __( 'User email: %s <br/>', 'textdomain' ), esc_html( $current_user->user_email ) );
	printf( __( 'User first name: %s <br/>', 'textdomain' ), esc_html( $current_user->user_firstname ) );
	printf( __( 'User last name: %s <br/>', 'textdomain' ), esc_html( $current_user->user_lastname ) );
	printf( __( 'User display name: %s <br/>', 'textdomain' ), esc_html( $current_user->display_name ) );
	printf( __( 'User ID: %s <br/>', 'textdomain' ), esc_html( $current_user->ID ) );
	printf( __( 'Role: %s <br/>', 'textdomain' ), esc_html( $current_user->roles[0] ) );
	echo get_avatar( $current_user->user_email, 200 ); 
	echo get_avatar_url( $current_user->user_email);
	*/






echo '

					


							<div class="module-body">
									<br />

									<form class="form-horizontal row-fluid">



										<div class="control-group">
											<label class="control-label" for="basicinput">Imagen</label>
											<div class="controls">
												'.
												get_avatar( $current_user->user_email, 200 )
												.'
											</div>
										</div>


										<div class="control-group">
											<label class="control-label" for="basicinput">Nombre de usuario</label>
											<div class="controls">
												'.
												$current_user->user_login
												.'
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Email</label>
											<div class="controls">
												'.
												$current_user->user_email
												.'
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Nombre</label>
											<div class="controls">
												'.
												$current_user->user_firstname
												.'
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Apellido</label>
											<div class="controls">
												'.
												$current_user->user_lastname
												.'
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Display Name</label>
											<div class="controls">
												'.
												$current_user->display_name
												.'
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Rol</label>
											<div class="controls">
												'.
												$current_user->roles[0]
												.'
											</div>
										</div>

									</form>
							</div>
					

						
						
					


';























} 














?>