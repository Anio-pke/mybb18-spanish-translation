<?php
/**
 * MyBB 1.8 Spanish Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 * Translator: Anio_pke
 */

/* INSTALL LANGUAGE VARIABLES */
$l['none'] = 'Ninguno';
$l['not_installed'] = 'No instalado';
$l['installed'] = 'Instalado';
$l['not_writable'] = 'Sin escritura';
$l['writable'] = 'Escritura';
$l['done'] = 'hecho';
$l['next'] = 'Siguiente';
$l['error'] = 'Error';
$l['multi_byte'] = 'Multi-Byte';
$l['recheck'] = 'Recomprobar';

$l['title'] = 'Asistente de instalación de MyBB';
$l['welcome'] = 'Bienvenido';
$l['license_agreement'] = 'Acuerdo de licencia';
$l['req_check'] = 'Comprobar requisitos';
$l['db_config'] = 'Configurar la base de datos';
$l['table_creation'] = 'Creación de tablas';
$l['data_insertion'] = 'Inserción de datos';
$l['theme_install'] = 'Instalación de estilos';
$l['board_config'] = 'Configuración del foro';
$l['admin_user'] = 'Usuario administrador';
$l['finish_setup'] = 'Fin de la instalación';
$l['upgrade_complete'] = 'Actualización completa';

$l['table_population'] = 'Inserción de datos';
$l['theme_installation'] = 'Inserción de estilos';
$l['create_admin'] = 'Crear cuenta de administrador';

$l['already_installed'] = 'MyBB ya está instalado';
$l['mybb_already_installed'] = "<p>Bienvenido al asistente de instalación de MyBB {1}. MyBB ha detectado que ya está configurado en este directorio.</p>
<p>Por favor, selecciona la acción a realizar abajo:</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>Actualizar mi copia de MyBB a {1} <span style=\"font-size: 80%; color: maroon;\">(Recomendado)</span></h3>
	<p>Esta opción actualizará tu versión actual de MyBB a MyBB {1}.</p>
	<p>Debes escoger esta opción cuando quieras conservar tus foros, temas, mensajes, usuarios y otra información.</p>
	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Actualizar a MyBB {1} &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>Instalar una nueva copia de MyBB</h3>
	<p>Esta opción <span style=\"color: red;\">eliminará cualquier foro existente</span> e instalará una copia limpia de esta versión de MyBB.</p>
	<p>Debes escoger esta opción para eliminar tu copia existente de MyBB si quieres comenzar de nuevo.</p>
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('¿Estás seguro de querer instalar una copia nueva de MyBB?\\n\\nEsto eliminará tu foro actual. ESTE PROCESO NO SE PUEDE DESHACER.');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Instalar MyBB {1} &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>MyBB ha detectado que está ejecutándose desde el directorio \"Upload\".</h3>
	<p>Esto no está mal, pero se recomienda subir el contenido del directorio \"Upload\" y no el directorio en si.<br /><br />Para más información visita <a href=\"https://docs.mybb.com/1.8/install/#uploading-files\" target=\"_blank\" rel=\"noopener\">MyBB Docs</a>.</p>
</div>";

$l['welcome_step'] = '<p>Bienvenido al asistente de instalación de MyBB {1}. Este asistente instalará y configurará una copia de MyBB en tu servidor.</p>
<p>Ahora que has subido los archivos de MyBB es necesario crear e importar la base de datos y los ajustes. A continuación se muestra un resumen de lo que se va a realizar durante la instalación.</p>
<ul>
	<li>Comprobar requisitos de MyBB</li>
	<li>Configurar la base de datos</li>
	<li>Creación de las tablas de la base de datos</li>
	<li>Inserción de datos predefinidos</li>
	<li>Importación de plantillas y estilos predefinidos</li>
	<li>Creación de una cuenta de administrador para configurar tu foro</li>
	<li>Configuración de los ajustes básicos del foro</li>
</ul>
<p>Después de que cada paso esté completado, pulsa "Siguiente" para continuar.</p>
<p>Pulsa "Siguiente" para ver el acuerdo de licencia de MyBB.</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> Enviar estadísticas anónimas de las especificaciones de tu servidor al Grupo MyBB</label> (<a href="https://docs.mybb.com/1.8/install/anonymous-statistics/" style="color: #555;" target="_blank" rel="noopener"><small>¿Qué infomación se envía?</small></a>)</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>Pulsar "Siguiente", significa que aceptas los términos descritos arriba en el acuerdo de licencia de MyBB.</strong></p>';


$l['req_step_top'] = '<p>Antes de instalar MyBB, debemos comprobar que cumples los requisitos mínimos para funcionar correctamente.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">Comprobar requisitos</div>
		<table class="general" cellspacing="0">
		<thead>
			<tr>
				<th colspan="2" class="first last">Requisitos</th>
			</tr>
		</thead>
		<tbody>
		<tr class="first">
			<td class="first">Versión de PHP:</td>
			<td class="last alt_col">{1}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Extensiones soportadas de BD:</td>
			<td class="last alt_col">{2}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Extensiones soportadas de conversión:</td>
			<td class="last alt_col">{3}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Extensiones XML de PHP:</td>
			<td class="last alt_col">{4}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Archivo de configuración:</td>
			<td class="last alt_col">{5}</td>
		</tr>
		<tr>
			<td class="first">Archivo de ajustes:</td>
			<td class="last alt_col">{6}</td>
		</tr>
		<tr>
			<td class="first">Directorio caché:</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Directorio de subidas de archivos:</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">Directorio de subidas de avatares:</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>Enhorabuena, cumples todos los requisitos para instalar MyBB.</strong></p>
<p>Pulsa "Siguiente" para continuar con el proceso de instalación.</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'MyBB requiere PHP 5.2.0 o posterior para ejecutarse. Actualmente tienes instalado {1}.';
$l['req_step_error_dboptions'] = 'MyBB requiere una o más extensiones de base de datos para instalarse. El servidor avisa de que ninguna está disponible.';
$l['req_step_error_xmlsupport'] = 'MyBB requiere PHP con soporte XML Data Handling. Por favor, visita <a href="http://www.php.net/xml" target="_blank" rel="noopener">PHP.net</a> para más información.';
$l['req_step_error_configdefaultfile'] = 'El archivo de configuración (inc/config.default.php) no puede ser renombrado. Por favor, renómbralo manualmente de <u>config.default.php</u> a <u>config.php</u> para permitir la escritura en él, o contacta con el <a href="https://mybb.com/support" target="_blank" rel="noopener">soporte de MyBB.</a>';
$l['req_step_error_configfile'] = 'El archivo de configuración (inc/config.php) no tiene permisos de escritura. Por favor, ajusta los permisos <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">chmod</a> para permitir escribir en él.';
$l['req_step_error_settingsfile'] = 'El archivo de opciones (inc/settings.php) no tiene permisos de escritura. Por favor, ajusta los permisos <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">chmod</a> para permitir escribir en él.';
$l['req_step_error_cachedir'] = 'El directorio cache (cache/) no tiene permisos de escritura. Por favor, ajusta los permisos <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">chmod</a> para permitir escribir en él.';
$l['req_step_error_uploaddir'] = 'El directorio de subidas (uploads/) no tiene permisos de escritura. Por favor, ajusta los permisos <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">chmod</a> para permitir escribir en él.';
$l['req_step_error_avatardir'] = 'El directorio de avatares (uploads/avatars/) no tiene permisos de escritura. Por favor, ajusta los permisos <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">chmod</a> para permitir escribir en él.';
$l['req_step_error_cssddir'] = 'El directorio css (css/) no tiene permisos de escritura. Por favor, ajusta los permisos <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">chmod</a> para permitir escribir en él.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>Error</h3>
<p>La comprobación de requisitos de MyBB ha fallado por las siguientes razones. La instalación de MyBB no puede continuar porque no cumples todos los requisitos. Por favor, corrige los errores e inténtalo de nuevo:</p>
{1}
</div>';


$l['db_step_config_db'] = '<p>Ahora es el momento de configurar la base de datos que MyBB utilizará incluyendo los detalles de autenticación. Si no dispones de esta información, normalmente puedes obtenerla de tu proveedor de alojamiento web.</p>';
$l['db_step_config_table'] = '<div class="border_wrapper">
<div class="title">Configurar la base de datos</div>
<table class="general" cellspacing="0">
<tr>
	<th colspan="2" class="first last">Ajustes de la base de datos</th>
</tr>
<tr class="first">
	<td class="first"><label for="dbengine">Motor de BD:</label></td>
	<td class="last alt_col"><select name="dbengine" id="dbengine" onchange="updateDBSettings();">{1}</select></td>
</tr>
{2}
</table>
</div>
<p>Una vez compruebes que todos los datos son correctos, pulsa siguiente para continuar.</p>';

$l['database_settings'] = "- Ajustes de base de datos";
$l['database_path'] = "Ruta de la base de datos:";
$l['database_host'] = "Nombre del servidor de BD:";
$l['database_user'] = "Nombre de usuario de BD:";
$l['database_pass'] = "Contraseña de BD:";
$l['database_name'] = "Nombre de la BD:";
$l['table_settings'] = "- Ajustes de las tablas";
$l['table_prefix'] = "Prefijo de las tablas:";
$l['table_encoding'] = "Codificación de las tablas:";

$l['db_step_error_config'] = '<div class="error">
<h3>Error</h3>
<p>Parece que se han producido uno o más errores con la configuración de la base de datos que has proporcionado:</p>
{1}
<p>Una vez sean correctos, continúa con la instalación.</p>
</div>';
$l['db_step_error_invalidengine'] = 'Has seleccionado un motor de BD inválido. Por favor, escoge uno de la lista de abajo.';
$l['db_step_error_noconnect'] = 'No se ha podido conectar con el servidor de bases de datos en \'{1}\' con el nombre de usuario y contraseña proporcionados. ¿Estás seguro de que el nombre del servidor y los detalles del usuario son correctos?';
$l['db_step_error_nodbname'] = 'No se ha podido seleccionar la base de datos \'{1}\'. ¿Estás seguro de que existe y que el usuario y la contraseña te dan acceso a ella?';
$l['db_step_error_missingencoding'] = 'No has seleccionado una codificación. Por favor, asegúrate que seleccionas una codificación antes de continuar. (Selecciona \'UTF-8 Unicode\' si no estás seguro)';
$l['db_step_error_sqlite_invalid_dbname'] = 'No puedes usar URLs relativas para las bases de datos de SQLite. Por favor, usa una ruta completa al archivo (ej. /home/user/database.db) para tu base de datos SQLite.';
$l['db_step_error_invalid_tableprefix'] = 'Solo puedes utilizar barra baja (_) y caracteres alfanuméricos en el prefijo de la tabla. Por favor, utiliza un prefijo válido antes de continuar.';
$l['db_step_error_tableprefix_too_long'] = 'Solo puedes utilizar prefijos con menos de 40  caracteres. Por favor, usa un prefijo más corto antes de continuar';
$l['db_step_error_utf8mb4_error'] = '\'4-Byte UTF-8 Unicode\' necesita MySQL 5.5.3 o superior. Por favor, selecciona esta codificación si es compatible con tu versión de MySQL.';

$l['tablecreate_step_connected'] = '<p>Se ha conectado con el servidor de bases de datos especificado correctamente.</p>
<p>Motor de Base de Datos: {1} {2}</p>
<p>Ahora se crearán las tablas de la base de datos de MyBB.</p>';
$l['tablecreate_step_created'] = 'Creando tabla {1}...';
$l['tablecreate_step_done'] = '<p>Se han creado todas las tablas, pulsa Siguiente para rellenarlas.</p>';

$l['populate_step_insert'] = '<p>Ahora que las tablas básicas ya están creadas, es el momento de insertar los datos predefinidos.</p>';
$l['populate_step_inserted'] = '<p>Los datos predefinidos se han insertado correctamente en la base de datos. Pulsa siguiente para insertar los estilos y plantillas predefinidas de MyBB.</p>';


$l['theme_step_importing'] = '<p>Cargando e importando los archivos de estilo y plantillas...</p>';
$l['theme_step_imported'] = '<p>Las plantillas y los estilos predefinidos se han insertado correctamente. Pulsa siguiente para configurar las opciones básicas de tu foro.</p>';


$l['config_step_table'] = '<p>Ahora es el momento de configurar los ajustes básicos de tus foros como el nombre, URL, detalles de tu sitio web, dominio y ruta de las "cookie". Estos ajustes se podrán editar fácilmente en el futuro desde el panel de administración de MyBB.</p>
		<div class="border_wrapper">
			<div class="title">Configuración del foro</div>
			<table class="general" cellspacing="0">
				<tbody>
				<tr>
					<th colspan="2" class="first last">Detalles del foro</th>
				</tr>
				<tr class="first">
					<td class="first"><label for="bbname">Nombre del foro:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bbname" id="bbname" value="{1}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="bburl">URL del foro (Sin / al final):</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" onkeyup="warnUser(this, \'Esta opción se configura automáticamente. No lo cambies si no estás seguro de lo que haces, en otro caso los enlaces de tu foro pueden fallar.\')" onchange="warnUser(this, \'Esta opción se configura automáticamente. No lo cambies si no estás seguro de lo que haces, en otro caso los enlaces de tu foro pueden fallar.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Detalles del sitio web</th>
				</tr>
				<tr>
					<td class="first"><label for="websitename">Nombre del sitio web:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websitename" id="websitename" value="{3}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="websiteurl">URL del sitio web:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websiteurl" id="websiteurl" value="{4}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Ajustes de cookie <a title="¿Qué es esto?" target="_blank"  rel="noopener" href="https://docs.mybb.com/1.8/development/cookies">(?)</a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">Dominio de cookie:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" onkeyup="warnUser(this, \'Esta opción se configura automáticamente. No lo cambies si no estás seguro de lo que haces, en otro caso el inicio de sesión de tu foro puede fallar.\')" onchange="warnUser(this, \'Esta opción se configura automáticamente. No lo cambies si no estás seguro de lo que haces, en otro caso el inicio de sesión de tu foro puede fallar.\')" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">Ruta de cookie:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" onkeyup="warnUser(this, \'Esta opción se configura automáticamente. No lo cambies si no estás seguro de lo que haces, en otro caso el inicio de sesión de tu foro puede fallar.\')" onchange="warnUser(this, \'Esta opción se configura automáticamente. No lo cambies si no estás seguro de lo que haces, en otro caso el inicio de sesión de tu foro puede fallar.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Detalles de contacto</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="contactemail">Email de contacto:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="contactemail" id="contactemail" value="{7}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Ajustes de seguridad</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="acppin">Pin del panel de administración:</label><br />Déjalo en blanco si no quieres establecer uno</td>
					<td class="last alt_col"><input type="password" class="text_input" name="pin" id="acppin" value="" /></td>
				</tr>
				</tbody>
			</table>
		</div>

	<p>Una vez estén introducidos los detalles correctos y estés preparado para continuar, pulsa siguiente.</p>';

$l['config_step_error_config'] = '<div class="error">
<h3>Error</h3>
<p>Parece que hay uno o más errores con la configuración del foro que has introducido:</p>
{1}
<p>Una vez corregidos, puedes continuar con la instalación.</p>
</div>';
$l['config_step_error_url'] = 'No has introducido la URL a tus foros.';
$l['config_step_error_name'] = 'No has introducido un nombre para tu copia de MyBB.';
$l['config_step_revert'] = 'Haz click para regresar al valor original.';


$l['admin_step_setupsettings'] = '<p>Guardando ajustes básicos de tu foro...</p>';
$l['admin_step_insertesettings'] = '<p>Se han insertado {1} ajustes en {2} grupos.</p>
<p>Actualizando los ajustes con los valores definidos por el usuario.</p>';
$l['admin_step_insertedtasks'] = '<p>Se han insertado {1} tareas programadas.</p>';
$l['admin_step_insertedviews'] = '<p>Se han insertado {1} vistas de administrador.</p>';
$l['admin_step_createadmin'] ='<p>Ahora necesitas crear una cuenta de administrador inicial para que puedas iniciar sesión y configurar tu copia de MyBB. Por favor, rellena los campos requeridos abajo para crear esta cuenta.</p>';
$l['admin_step_admintable'] = '<div class="border_wrapper">
			<div class="title">Detalles de la cuenta administrador</div>

		<table class="general" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2" class="first last">Detalles de la cuenta</th>
		</tr>
		</thead>
		<tr class="first">
			<td class="first"><label for="adminuser">Nombre de usuario:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">Contraseña:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off" onchange="comparePass()" /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">Repetir contraseña:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off" onchange="comparePass()"  /></td>
		</tr>
		<tr>
			<th colspan="2" class="first last">Detalles de contacto</th>
		</tr>
		<tr class="first last">
			<td class="first"><label for="adminemail">Dirección de email:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminemail" id="adminemail" value="{2}" /></td>
		</tr>
	</table>
	</div>

	<p>Una vez hayas introducido los detalles y estés preparado para continuar, pulsa siguiente.</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3>Error</h3>
<p>Parece que hay uno o más errores con la configuración de la cuenta que has introducido:</p>
{1}
<p>Una vez corregidos, puedes continuar con la instalación.</p>
</div>';
$l['admin_step_error_nouser'] = 'No has introducido un nombre de usuario para la cuenta de administrador.';
$l['admin_step_error_nopassword'] = 'No has introducido una contraseña para la cuenta de administrador.';
$l['admin_step_error_nomatch'] = 'Las contraseñas introducidas no coinciden.';
$l['admin_step_error_noemail'] = 'No has introducido un email para la cuenta de administrador.';
$l['admin_step_nomatch'] = 'Las contraseñas no coinciden. Por favor, introduce correctamente las contraseñas antes de continuar.';

$l['done_step_usergroupsinserted'] = "<p>Importando grupos de usuarios...";
$l['done_step_admincreated'] = '<p>Creando cuenta de administrador...';
$l['done_step_adminoptions'] = '<p>Construyendo los permisos del administrador...';
$l['done_step_cachebuilding'] = '<p>Construyendo la caché de los datos...';
$l['done_step_success'] = '<p class="success">Tu copia de MyBB se ha instalado y configurado correctamente.</p>
<p>El grupo de MyBB te agradece que hayas instalado nuestro software y esperamos que entres en los foros de la comunidad si necesitas ayuda o quieres ser parte de la <a href="https://community.mybb.com/" target="_blank" rel="noopener">comunidad de MyBB</a>.</p>';
$l['done_step_locked'] = '<p>El instalador se ha bloqueado. Para desbloquear el instalador elimina el archivo \'lock\' de este directorio.</p><p>Ahora puedes ver tu nueva copia de <a href="../index.php">MyBB</a> o entrar al <a href="../admin/index.php">panel de administración</a>.</p>';
$l['done_step_dirdelete'] = '<p><strong><span style="color:red">Por favor, elimina este directorio antes de utilizar tu copia de MyBB.</span></strong></p>';
$l['done_whats_next'] = '<div class="error"><p><strong>¿Migrando desde otro software de foros?</strong></p><p>MyBB ofrece un sistema llamado "merge system" para mezclar facilmente múltiples foros desde otros software de foros, permitiendo una conversión sencilla a MyBB. ¡Si estás interesado en cambiar a vas en la buena dirección! Revisa <a target="_blank" rel="noopener" href="https://mybb.com/download/merge-system">Merge System</a> para más información.</p>';

/* UPGRADE LANGUAGE VARIABLES */
$l['upgrade'] = "Actualización";
$l['upgrade_welcome'] = "<p>Bienvenido al asistente de actualización de {1}.</p><p>Antes de continuar, asegúrate que conoces la versión que estás ejecutando de MyBB ya que necesitas seleccionarla abajo.</p><p><strong>Es altamente recomendado realizar una copia de seguridad completa de la base de datos y de los archivos antes de intentar actualizar</strong> para que si ocurriese algún problema, puedas regresar a la versión anterior. Además, espera a que se completen estos procesos antes de proceder.</p><p>Asegúrate de pulsar solo UNA VEZ en siguiente por cada paso de la actualización. Puede tardar en actualizarse dependiendo del tamaño de tu foro.</p><p>Si ya estás preparado, selecciona tu versión actual de MyBB y pulsa Siguiente para continuar.</p>";
$l['upgrade_templates_reverted'] = 'Plantillas actualizadas';
$l['upgrade_templates_reverted_success'] = "<p>Todas las plantillas se han actualizado correctamente con las nuevas contenidas en esta actualización. Por favor, pulsa siguiente para continuar con la actualización.</p>";
$l['upgrade_settings_sync'] = 'Sincronización de los ajustes';
$l['upgrade_settings_sync_success'] = "<p>Los ajustes de tu foro se han sincronizado con los últimos de MyBB.</p><p>Se han insertado {1} nuevos ajustes en {2} nuevos grupos.</p><p>Para finalizar la actualización, por favor, pulsa siguiente para continuar.</p>";
$l['upgrade_datacache_building'] = 'Construyendo caché de los datos';
$l['upgrade_building_datacache'] = '<p>Contruyendo la caché de los datos...';
$l['upgrade_continue'] = 'Por favor, pulsa siguiente para continuar';
$l['upgrade_locked'] = "<p>El instalador ha sido bloqueado. Para desbloquear el instalador elimina el archivo 'lock' de este directorio.</p><p>Ahora puedes ver tu foro actualizado en <a href=\"../index.php\">MyBB</a> o entrar al <a href=\"../{1}/index.php\">panel de administración</a>.</p>";
$l['upgrade_removedir'] = 'Por favor, elimina este directorio antes de explorar tu foro actualizado de MyBB.';
$l['upgrade_congrats'] = "<p>Enhorabuena, tu copia de MyBB se ha actualizado a {1}.</p>{2}<p><strong>¿Y ahora?</strong></p><ul><li>Por favor, usa la herramienta 'Buscar Actualizadas' en el panel de administración para buscar las plantillas personalizadas que se han actualizado. Edita las que contengan cambios o vuelve a las originales.</li><li>Asegúrate de que tu foro está totalmente funcional.</li></ul>";
$l['upgrade_template_reversion'] = "Advertencia revertir plantillas";
$l['upgrade_template_reversion_success'] = "<p>Todas las modificaciones necesarias para actualizar tu foro se han realizado correctamente.</p><p>Esta actualización necesita que las plantillas regresen a las originales contenidas en este paquete, así que por favor copia cualquier plantilla personalizada antes de continuar.";
$l['upgrade_send_stats'] = "<p><input type=\"checkbox\" name=\"allow_anonymous_info\" value=\"1\" id=\"allow_anonymous\" checked=\"checked\" /> <label for=\"allow_anonymous\"> Enviar estadísticas anónimas de las especificaciones de tu servidor al grupo MyBB</label> (<a href=\"https://docs.mybb.com/1.8/install/anonymous-statistics/\" style=\"color: #555;\" target=\"_blank\" rel=\"noopener\"><small>¿Qué infomación se envía?</small></a>)</p>";

$l['please_login'] = "Por favor, inicia sesión";
$l['login'] = "Iniciar sesión";
$l['login_desc'] = "Por favor, introduce tu nombre de usuario y contraseña para iniciar el proceso de actualización. Debes ser un administrador válido para realizar esta acción.";
$l['login_username'] = "Nombre de usuario";
$l['login_password'] = "Contraseña";
$l['login_password_desc'] = "Por favor, ten en cuenta que las contraseñas distinguen mayúsculas y minúsculas.";

/* Error messages */
$l['development_preview'] = "<div class=\"error\"><h2 class=\"fail\">Advertencia</h2><p>Esta versión de MyBB es de desarrollo y debe usarse únicamente para pruebas.</p><p>No se proporcionará soporte oficial, exceptuando para el desarrollo de plugins y de estilos para esta versión. Si continúas esta instalación/actualización es bajo tu responsabilidad.</p></div>";
$l['locked'] = 'El instalador está bloqueado, por favor, elimina el archivo \'lock\' de la carpeta \'install\' para continuar';
$l['no_permision'] = "No tienes permisos para ejecutar este proceso. Necesitas permisos de administrador para realizar el proceso de actualización.<br /><br />Si necesitas cerrar sesión, por favor, haz click <a href=\"upgrade.php?action=logout&amp;logoutkey={1}\">aquí</a>. Después podrás iniciar sesión de nuevo con tu cuenta de administrador.";
$l['no_theme_functions_file'] = 'No se ha encontrado el archivo de funciones del estilo. Asegúrate que todos los ficheros se han subido correctamente.';

$l['task_versioncheck_ran'] = "La tarea de comprobación de la versión se ejecutó correctamente.";
