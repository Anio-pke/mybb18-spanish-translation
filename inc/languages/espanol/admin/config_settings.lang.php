<?php
/**
 * MyBB 1.8 Spanish Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 * Translator: Anio_pke
 */

$l['board_settings'] = "Ajustes del foro";
$l['change_settings'] = "Cambiar ajuste";
$l['change_settings_desc'] = "Esta sección te permite configurar algunos de los ajustes en relación a tu foro. Para empezar, selecciona un grupo de los de abajo para configurar sus posibles ajustes.";
$l['add_new_setting'] = "Agregar ajuste";
$l['add_new_setting_desc'] = "Esta sección te permite añadir un nuevo ajuste a tu foro.";
$l['modify_existing_settings'] = "Editar ajustes";
$l['modify_existing_settings_desc'] = "Esta sección te permite editar los ajustes existentes en tu foro.";
$l['add_new_setting_group'] = "Agregar un grupo de ajustes";
$l['add_new_setting_group_desc'] = "Esta sección te permite crear un nuevo grupo para organizar ajustes individuales.";
$l['edit_setting_group'] = "Editar grupo de ajustes";
$l['edit_setting_group_desc'] = "Esta sección te permite editar un grupo de ajustes existente.";

$l['title'] = "Título";
$l['description'] = "Descripción";
$l['group'] = "Grupo";
$l['display_order'] = "Orden";
$l['name'] = "Identificador";
$l['name_desc'] = "Este identificador único se usa para referenciar este ajuste (En plugins, traducciones y plantillas).";
$l['group_name_desc'] = "Este identificador único se usa para el sistema de traducción.";
$l['text'] = "Texto";
$l['numeric_text'] = "Texto numérico";
$l['textarea'] = "Área de texto";
$l['yesno'] = "Elección Sí / No";
$l['onoff'] = "Elección On / Off";
$l['select'] = "Caja de selección";
$l['radio'] = "Botones de radio";
$l['checkbox'] = "Cajas de validación";
$l['language_selection_box'] = "Caja de selección de idioma";
$l['forum_selection_box'] = "Caja de selección de foro";
$l['forum_selection_single'] = "Caja de selección de foro simple";
$l['group_selection_box'] = "Caja de selección de grupo";
$l['group_selection_single'] = "Caja de selección de grupo simple";
$l['adminlanguage'] = "Caja de selección de idioma de administración";
$l['cpstyle'] = "Caja de selección de estilo del panel de control";
$l['php'] = "PHP";
$l['type'] = "Tipo";
$l['extra'] = "Extra";
$l['extra_desc'] = "Si este ajuste es una caja de selección, radio o caja de validación introduce las posibles elecciones. Separa cada elección con una nueva línea. Si es PHP, introduce el PHP que va a ser ejecutado.";
$l['value'] = "Valor";
$l['insert_new_setting'] = "Insertar nuevo ajuste";
$l['edit_setting'] = "Editar ajuste";
$l['delete_setting'] = "Eliminar ajuste";
$l['setting_configuration'] = "Configuración del ajuste";
$l['update_setting'] = "Actualizar ajuste";
$l['save_settings'] = "Guardar ajuste";
$l['setting_groups'] = "Grupos de ajustes";
$l['bbsettings'] = "Ajustes";
$l['insert_new_setting_group'] = "Insertar nuevo grupo de ajustes";
$l['setting_group_setting'] = "Grupo de ajustes / Ajuste";
$l['order'] = "Orden";
$l['delete_setting_group'] = "Eliminar grupo de ajustes";
$l['save_display_orders'] = "Guardar orden de muestra";
$l['update_setting_group'] = "Actualizar grupo de ajustes";
$l['modify_setting'] = "Modificar ajuste";
$l['search'] = "Buscar";
$l['plugin_settings'] = "Ajustes de los plugin";

$l['show_all_settings'] = "Mostrar todos los ajustes";
$l['settings_search'] = "Buscar ajustes";

$l['confirm_setting_group_deletion'] = "¿Estás seguro de querer eliminar este grupo de ajustes?";
$l['confirm_setting_deletion'] = "¿Estás seguro de querer eliminar este ajuste?";

$l['error_missing_title'] = "No has introducido un título para este ajuste";
$l['error_missing_group_title'] = "No has introducido un título para este grupo de ajustes";
$l['error_invalid_gid'] = "No has seleccionado un grupo válido para este ajuste";
$l['error_invalid_gid2'] = "El enlace introducido lleva a un grupo de ajustes inválido. Asegúrate de que existe.";
$l['error_missing_name'] = "No has introducido un identificador para este ajuste";
$l['error_missing_group_name'] = "No has introducido un identificador para este grupo de ajustes";
$l['error_invalid_type'] = "No has seleccionado un tipo válido para este ajuste";
$l['error_invalid_sid'] = "El ajuste especificado no existe";
$l['error_duplicate_name'] = "El identificador especificado ya está en uso por el ajuste \"{1}\" -- debe ser único";
$l['error_duplicate_group_name'] = "El identificador especificado ya está en uso por el grupo de ajustes \"{1}\" -- debe ser único";
$l['error_no_settings_found'] = "No se han encontrado ajustes con la búsqueda especificada.";
$l['error_cannot_edit_default'] = "Los ajustes y grupos de ajustes por defecto no se pueden editar o eliminar.";
$l['error_cannot_edit_php'] = "Este es un tipo de ajuste especial que no puede ser editado.";
$l['error_ajax_search'] = "Ha ocurrido un error al buscar ajustes:";
$l['error_ajax_unknown'] = "Ha ocurrido un error desconicido al buscar ajustes.";
$l['error_chmod_settings_file'] = "El archivo de configuración \"./inc/settings.php\" no tiene permisos de escritura. Por favor configura el ajuste CHMOD a 777.<br />Para más información sobre los ajustes CHMOD, visita <a href=\"https://docs.mybb.com/1.8/administration/security/file-permissions\" target=\"_blank\" rel=\"noopener\">MyBB Docs</a>.";

$l['success_setting_added'] = "El ajuste se ha creado correctamente.";
$l['success_setting_updated'] = "El ajuste se ha actualizado correctamente.";
$l['success_setting_deleted'] = "El ajuste se ha eliminado correctamente.";
$l['success_settings_updated'] = "Los ajustes se han actualizado correctamente.";
$l['success_settings_updated_hiddencaptchaimage'] = '<div class="smalltext" style="font-weight: normal;">Por favor, ten en cuenta que los ajustes del campo <strong>CAPTCHA oculto</strong> se han revertido a <strong>{1}</strong> por un conflicto con el campo <strong>{2}</strong> en el formulario de registro.</div>';
$l['success_settings_updated_username_method'] = '<div class="smalltext" style="font-weight: normal;">Por favor, ten en cuenta que el ajuste <b>Métodos de inicio de sesión permitidos</b> no se ha actualizado debido a que varios usuarios están usando el mismo email en este momento.</div>';
$l['success_settings_updated_allowmultipleemails'] = '<div class="smalltext" style="font-weight: normal;">Por favor, ten en cuenta que el ajuste <b>¿Permitir usar el mismo email varias veces?</b> no se puede activar porque el ajuste <b>Métodos de inicio de sesión permitidos</b> permite a los usuarios iniciar sesión con el email.</div>';
$l['success_settings_updated_captchaimage'] = '<div class="smalltext" style="font-weight: normal;">Por favor, ten en cuenta que el ajuste <strong>Imágenes CAPTCHA para registros y publicaciones</strong> se ha revertido a <strong>MyBB Captcha</strong> debido a la falta de la(s) clave(s) pública/privada.</div>';
$l['success_display_orders_updated'] = "El orden de muestra de los ajustes se ha actualizado correctamente.";
$l['success_setting_group_added'] = "El grupo de ajustes se ha creado correctamente.";
$l['success_setting_group_updated'] = "El grupo de ajustes se ha actulizado correctamente.";
$l['success_setting_group_deleted'] = "El grupo de ajustes se ha eliminado correctamente.";
$l['success_duplicate_settings_deleted'] = "Todos los grupos de ajustes duplicados se han eliminado correctamente.";

$l['searching'] = 'Buscando...';
$l['search_error'] = 'Ha ocurrido un error al cargar los resultados de la búsqueda:';
$l['search_done'] = '¡Listo!';

//SETTINGS
// Grupo 1 onlineoffline
$l['setting_group_onlineoffline'] = "Foro abierto / cerrado";
$l['setting_group_onlineoffline_desc'] = "Estos parámetros permiten abrir o cerrar tus foros y en caso de cierre especificar el motivo.";
//Ajustes
$l['setting_boardclosed'] = "Foro cerrado";
$l['setting_boardclosed_desc'] = "Si necesitas cerrar tus foros para hacer cambios o realizar una actualización, este es un interruptor global. Los visitantes no podrán ver tus foros; sin embargo, verán un mensaje con la razón especificada debajo.<br /><br /><b>Los administradores podrán ver los foros.</b>";
$l['setting_boardclosed_reason'] = "Razón del cierre";
$l['setting_boardclosed_reason_desc'] = "Si tus foros están cerrados, puedes escribir un mensaje aquí que se mostrará a los visitantes cuando entren a tus foros. Puedes dejarlo en blanco para usar el mensaje por defecto incluído en los archivos de idioma.";
/**************************************************************************************************************************************************/

// Grupo 2 details
$l['setting_group_details'] = "Detalles del sitio";
$l['setting_group_details_desc'] = "Esta sección contiene varios parámetros como el nombre y URL de tu foro y también nombre y URL de tu sitio web.";
//Ajustes
$l['setting_bbname'] = "Nombre del foro";
$l['setting_bbname_desc'] = "El nombre de tu foro. Es recomendable no exceder de 75 caracteres.";
$l['setting_bburl'] = "URL del foro";
$l['setting_bburl_desc'] = "La url de tus foros.<br />Incluir el http://. NO incluir la barra (/) al final.";
$l['setting_homename'] = "Nombre de la web";
$l['setting_homename_desc'] = "Nombre de tu página de inicio. Esto aparecerá en el pie con un enlace.";
$l['setting_homeurl'] = "URL de la web";
$l['setting_homeurl_desc'] = "La URL completa de tu web. Esto estará de enlace en el pie si se ha puesto el nombre de la web.";
$l['setting_adminemail'] = "Email de administrador";
$l['setting_adminemail_desc'] = "La dirección de email del administrador. Este email se usará para los emails enviados desde el foro.";
$l['setting_returnemail'] = "Email de respuesta";
$l['setting_returnemail_desc'] = "Dirección de email para las respuestas de los usuarios para enviar emails desde el foro con cuentas  'No responder (no-reply)'. Dejar en blanco para usar el email de administrador.";
$l['setting_contactemail'] = "Email de contacto";
$l['setting_contactemail_desc'] = "Dirección de email a la que se envían los mensajes enviados a través del formulario de contacto (contact.php). Dejar en blanco para usar el email de administrador.";
$l['setting_contactlink'] = "Enlace contáctanos";
$l['setting_contactlink_desc'] = "La dirección se utilizará en el enlace contáctanos al pie de todas las páginas del foro. Puedes usar una dirección de email (mailto:email@website.com) o un enlace.";
$l['setting_cookiedomain'] = "Dominio de las cookies";
$l['setting_cookiedomain_desc'] = "El dominio en el que las cookies se deben establecer. Se puede dejar en blanco. Puedes también iniciar con un . y así cubrir todos los subdominios.";
$l['setting_cookiepath'] = "Ruta de las cookies";
$l['setting_cookiepath_desc'] = "Ruta en la que se estableceran las cookies. Recomendamos configurarlo para todos tus foros con una barra inclinada '/'.";
$l['setting_cookieprefix'] = "Prefijo para cookie";
$l['setting_cookieprefix_desc'] = "Añadir un prefijo a las cookies del MyBB. Esto es recomendable cuando deseas instalar múltiples copias de MyBB en un dominio o tienes otro software instalado que podría crear conflictos con los nombres de las cookies de MyBB. Si no se especifica uno, no se usará ningún prefijo.";
$l['setting_cookiesecureflag'] = "Indicador de cookie segura";
$l['setting_cookiesecureflag_desc'] = "Las cookies se pueden enviar con el indicador de cookie segura para evitar que se envíen a través de conexiones no cifradas. Debe activar esta opción sólo si su foro funciona correctamente bajo HTTPS.";
$l['setting_showvernum'] = "Mostrar número de versión";
$l['setting_showvernum_desc'] = "Te permite deshabilitar el número de versión que se muestra en el MyBB.";
$l['setting_mailingaddress'] = "Dirección de correo";
$l['setting_mailingaddress_desc'] = "Si tienes una dirección de correo ordinaria, introdúcela aquí. Esto se mostrará con el formulario COPPA.";
$l['setting_faxno'] = "Número de fax";
$l['setting_faxno_desc'] = "Si tienes un número de fax, introdúcelo aquí. Esto se mostrará con el formulario COPPA.";
/**************************************************************************************************************************************************/

// Grupo 3 general
$l['setting_group_general'] = "Ajustes generales";
$l['setting_group_general_desc'] = "Esta sección ter permite configurar los aspectos generales de tu foro.";
//Ajustes
$l['setting_bblanguage'] = "Idioma por defecto";
$l['setting_bblanguage_desc'] = "El idioma por defecto de MyBB para invitados y usuarios que no han seleccionado un idioma en su panel de control.";
$l['setting_captchaimage'] = "Imágenes CAPTCHA para registros y publicaciones";
$l['setting_captchaimage_desc'] = "Para ayudar a prevenir registros y publicaciones automáticas, puedes elegir un tipo de verificación para el usuario que debe completar. Por favor, visita el Wiki de MyBB para más información sobre los CAPTCHAs";
$l['setting_captchaimage_0'] = "Sin CAPTCHA";
$l['setting_captchaimage_1'] = "MyBB CAPTCHA";
$l['setting_captchaimage_2'] = "reCAPTCHA";
$l['setting_captchaimage_4'] = "NoCAPTCHA reCAPTCHA";
$l['setting_captchaimage_5'] = "reCAPTCHA invisible";
$l['setting_captchapublickey'] = "Clave pública reCAPTCHA";
$l['setting_captchapublickey_desc'] = "Tu clave pública reCAPTCHA.";
$l['setting_captchaprivatekey'] = "Clave privada reCAPTCHA";
$l['setting_captchaprivatekey_desc'] = "Tu clave privada reCAPTCHA.";
$l['setting_reportmethod'] = "Método de aviso para contenido reportado";
$l['setting_reportmethod_desc'] = "Por favor, selecciona de la lista el método que se utilizará para notificar a los moderadores cuando un contenido es reportado. Nota: Los moderadores solo será notificados con los mensajes en los foros que moderan o de todo el contenido si es super moderador.";
$l['setting_reportmethod_db'] = "Mostrar solo en el panel de moderación";
$l['setting_reportmethod_pms'] = "Enviar mensajes privados y mostrar en el panel de moderación";
$l['setting_reportmethod_email'] = "Enviar un email y mostrar en el panel de moderación";
$l['setting_decpoint'] = "Punto decimal";
$l['setting_decpoint_desc'] = "El punto decimal que se usa en tu región (Por ejemplo, configurar ',' con el número 0,1 dará como resultado el número 0,1).";
$l['setting_thousandssep'] = "Separador de miles";
$l['setting_thousandssep_desc'] = "El separador de millares que se usa en tu región (Por ejemplo, configurar '.' con el número 1200 dará como resultado el número 1.200).";
$l['setting_showlanguageselect'] = "Mostrar selección de idioma en el pie";
$l['setting_showlanguageselect_desc'] = "Establece como 'No' si no quieres que se muestre el selector de idioma en el pie de todas las páginas de tu foro.";
$l['setting_showthemeselect'] = "Mostrar selección de estilo en el pie";
$l['setting_showthemeselect_desc'] = "Establece como 'No' si no quieres que se muestre el selector de estilo en el pie de todas las páginas de tu foro.";
$l['setting_maxmultipagelinks'] = "Enlaces máximos de paginación";
$l['setting_maxmultipagelinks_desc'] = "Aquí puedes establecer el número de enlaces (Anterior o siguiente) que se mostrarán en la paginación de los temas con más de una página de resultados. Establece como '0' para desactivar la limitación.";
$l['setting_jumptopagemultipage'] = "Mostrar 'Saltar a' en la paginación";
$l['setting_jumptopagemultipage_desc'] = "¿Quieres mostrar el formulario 'Saltar a' en la paginación si el número de páginas supera lo establecido en \"Enlaces máximos de paginación\"?";
$l['setting_no_plugins'] = "Deshabilitar todos los plugins";
$l['setting_no_plugins_desc'] = "Configurar esto a 'Sí' deshabilitará todos los plugins sin desactivarlos o desinstalarlos. Esto es equivalente a definir manualmente NO_PLUGINS al inicio de init.php.";
$l['setting_deleteinvites'] = "Caducidad de las invitaciones de grupos de usuario";
$l['setting_deleteinvites_desc'] = "Número de días que se quedarán pendientes las invitaciones a los grupos de usuarios antes de caducar. Establece 0 para desactivar.";
$l['setting_redirects'] = "Páginas de redirección";
$l['setting_redirects_desc'] = "Activando esta opción activas las páginas de redireccionamiento en vez de enviar al usuario directamente a la página.";
$l['setting_enableforumjump'] = "¿Activar el menú salto de foro?";
$l['setting_enableforumjump_desc'] = "El menú \"Salto de foro\" se muestra en las páginas de foros y mensajes. Añade una significativa carga a tus foros si tienes una cantidad considerable de foros. Selecciona 'No' para desactivarlo.";
/**************************************************************************************************************************************************/

//Grupo 4 server
$l['setting_group_server'] = "Servidor y opciones de optimización";
$l['setting_group_server_desc'] = "Estas opciones permiten configurar varios parámetros del servidor y de optimización permitiendo reducir la carga de tu servidor y tener un mejor rendimiento en el foro.";
//Ajustes
$l['setting_seourls'] = "Activar sistema de URLs amigables (Engine friendly URLs)";
$l['setting_seourls_desc'] = "El sistema de URLs amigables cambia los enlaces de MyBB por unos más cortos que los motores de búsqueda prefieren y que son más fáciles de escribir. showthread.php?tid=1 se convierte en thread1.html. <strong>Una vez activada esta opción, asegúrate que el archivo .htaccess está en tu directorio raíz de MyBB (O equivalente para tu servidor). La detección automática no funciona en todos los servidores.</strong> Por favor, visita <a href=\"https://docs.mybb.com/1.8/administration/configuring-search-engine-friendly-URLs\">MyBB Docs</a> para más información.";
$l['setting_seourls_auto'] = "Detección automática";
$l['setting_seourls_yes'] = "Activada";
$l['setting_seourls_no'] = "Desactivada";
$l['setting_seourls_archive'] = "Activar sistema de URLs amigables en el Archivo (Engine friendly URLs)";
$l['setting_seourls_archive_desc'] = "Las URLs amigables pueden usarse en el archivo. <strong>Una vez activado este ajuste, debes asegurarte de que funciona correctamente.";
$l['setting_gzipoutput'] = "¿Usar compresión GZip en las páginas?";
$l['setting_gzipoutput_desc'] = "¿Quieres comprimir las páginas con el formato GZip cuando se envían al navegador? Con esto se aceleran las descargas para tus visitantes, y reducen el uso de ancho de banda.";
$l['setting_gziplevel'] = "Nivel de compresión GZip";
$l['setting_gziplevel_desc'] = "Establece el nivel  de compresión GZip en las páginas de 0-9. (0=sin compresión, 9=máxima compresión). Esto únicamente afecta si está activada la compresión GZip en las páginas y tu versión de PHP es 4.2 o superior. Si tu servidor usa una versión más antigua, se utilizará el nivel de compresión predeterminado en la librería zlib.";
$l['setting_nocacheheaders'] = "Enviar cabeceras \"No cache\"";
$l['setting_nocacheheaders_desc'] = "Con esta opción evitas que los navegadores guarden páginas en la cache (Archivos temporales).";
$l['setting_load'] = "Límite de carga *NIX";
$l['setting_load_desc'] = "Límite de carga máxima del servidor antes de que myBB rechace usuarios. 0 para desactivar. Límite recomendado 5.0.";
$l['setting_tplhtmlcomments'] = "Mostrar comentarios de plantillas (Inicio/Fin)";
$l['setting_tplhtmlcomments_desc'] = "Activa los comentarios de inicio y fin de las plantillas en el código de salida HTML.";
$l['setting_use_xmlhttprequest'] = "¿Activar funciones de XMLHttp request?";
$l['setting_use_xmlhttprequest_desc'] = "Este ajuste activará o desactivará las funciones de XMLHttp request (Funciones AJAX).";
$l['setting_extraadmininfo'] = "Estadísticas avanzadas / Información debug";
$l['setting_extraadmininfo_desc'] = "Mostrar carga del servidor, tiempo de análisis, tiempo de generación, compresión Gzip, etc al final de todas las páginas de la raíz del foro. Esta información solo podrán verla los administradores.";
$l['setting_uploadspath'] = "Ruta de subidas";
$l['setting_uploadspath_desc'] = "Ruta que usa el foro para las subidas. Es <b>necesario chmod 777</b> (en servidores Unix).";
$l['setting_useerrorhandling'] = "Usar sistema de guardado de errores";
$l['setting_useerrorhandling_desc'] = "Si no quieres usar el sistema de guardado de errores de MyBB, debes desactivar esta opción. De todas formas, es recomendable activarlo";
$l['setting_errorlogmedium'] = "Guardar errores";
$l['setting_errorlogmedium_desc'] = "Tipo de guardado de errores.";
$l['setting_errorlogmedium_none'] = "Ninguno";
$l['setting_errorlogmedium_log'] = "Guardar en un archivo log";
$l['setting_errorlogmedium_email'] = "Enviar al email";
$l['setting_errorlogmedium_both'] = "Guardar log y enviar email";
$l['setting_errortypemedium'] = "Tipo de errores";
$l['setting_errortypemedium_desc'] = "Tipo de errores que se mostrarán";
$l['setting_errortypemedium_warning'] = "Advertencias";
$l['setting_errortypemedium_error'] = "Errores";
$l['setting_errortypemedium_both'] = "Advertencias y errores";
$l['setting_errortypemedium_none'] = "Ocultar errores y advertencias";
$l['setting_errorloglocation'] = "Archivo en el que se guardan los errores";
$l['setting_errorloglocation_desc'] = "Localización del archivo en el que se guadarán, si se activa el sistema es necesario indicar el archivo que se utilizará.";
$l['setting_ip_forwarded_check'] = "¿Examinar la dirección IP del usuario?";
$l['setting_ip_forwarded_check_desc'] = "¿Quieres comprobar la dirección IP de un usuario para las cabeceras HTTP_X_FORWARDED_FOR o HTTP_X_REAL_IP? Si no estás seguro, selecciona 'No'.";
$l['setting_minifycss'] = "¿Minimizar las hojas de estilo?";
$l['setting_minifycss_desc'] = "¿Quieres minimizar las hojas de estilo? Escogiendo 'Sí' podrás ahorrar ancho de banda y conseguir que las páginas carguen antes.";
$l['setting_usecdn'] = "¿Usar CDN?";
$l['setting_usecdn_desc'] = "¿Quieres utilizar CDN (Content Delivery Network) para reducir la descarga de archivos estáticos, como las hojas de estilo, JavaScript e imágenes?";
$l['setting_cdnurl'] = "URL que se utilizará para los archivos estáticos";
$l['setting_cdnurl_desc'] = "Si tienes activado CDN en la opción anterior, introduce la URL base desde la que se servirá el contenido estático. Esto debe ser una URL válida sin la barra inclinada final (/).";
$l['setting_cdnpath'] = "Ruta en la que se almacenarán los archivos";
$l['setting_cdnpath_desc'] = "Si tienes activado CDN en la opción anterior, introduce la ruta completa en la que se almacenarán los archivos estáticos. Esto solo es útil para CDNs de tipo 'Push' o para instalaciones locales en subdominios. Esta ruta no lleva la barra inclinada final (/).";
/**************************************************************************************************************************************************/

// Grupo 5 datetime
$l['setting_group_datetime'] = "Formato de fecha y hora";
$l['setting_group_datetime_desc'] = "Aquí puedes especificar un formato diferente de fecha y hora para las fechas y horas mostradas en los foros.";
//Ajustes
$l['setting_dateformat'] = "Formato de fecha";
$l['setting_dateformat_desc'] = "Formato de las fechas que se usan en este foro. Este formato se usa en la función de PHP 'date()'. Recomendamos no cambiarlo si no estás seguro de lo que estás haciendo.";
$l['setting_timeformat'] = "Formato de hora";
$l['setting_timeformat_desc'] = "Formato de las horas que se usan en este foro. Este formato se usa en la función de PHP 'date()'. Recomendamos no cambiarlo si no estás seguro de lo que estás haciendo.";
$l['setting_datetimesep'] = "Separador Fecha/Hora";
$l['setting_datetimesep_desc'] = "Cuando MyBB muestra la fecha y hora juntas, se usa este ajuste para separarlas (normalmente un espacio o una coma).";
$l['setting_regdateformat'] = "Formato de la fecha de registro";
$l['setting_regdateformat_desc'] = "Este formato se usa en los mensajes y muestra la fecha en la que se registro el usuario.";
$l['setting_timezoneoffset'] = "Zona horaria por defecto";
$l['setting_timezoneoffset_desc'] = "Aquí puedes establecer la zona horaria por defecto para los invitados y los miebros que hayan elegido la Zona Horaria por defecto.";
$l['setting_dstcorrection'] = "Corrección del horario de verano";
$l['setting_dstcorrection_desc'] = "Si tienes una hora más y tu zona horaria está seleccionada correctamente, activa la corrección del horario de verano.";
/**************************************************************************************************************************************************/

// Grupo 6 forumhome
$l['setting_group_forumhome'] = "Opciones de la página de inicio del foro";
$l['setting_group_forumhome_desc'] = "Esta sección te permite configurar varios parámetros que se utilizan en la página de inicio (index.php) de tus foros activando y desactivando diferentes opciones.";
//Ajustes
$l['setting_showdescriptions'] = "¿Mostrar descripciones de los foros?";
$l['setting_showdescriptions_desc'] = "Esta opción te permite desactivar las descripciones que se muestran para los foros.";
$l['setting_subforumsindex'] = "Subforos que se muestran en el inicio";
$l['setting_subforumsindex_desc'] = "Número de subforos que quieres mostrar en el inicio. Introduce 0 para no mostrar la lista de subforos";
$l['setting_subforumsstatusicons'] = "¿Mostrar iconos de estado de los subforos?";
$l['setting_subforumsstatusicons_desc'] = "¿Mostrar iconos que indican si un subforo tiene o no nuevos mensajes? Esta opción no afectará si está desactivado el listado de subforos en el inicio.";
$l['setting_hideprivateforums'] = "¿Ocultar foros privados?";
$l['setting_hideprivateforums_desc'] = "Puesdes ocultar los foros privados activando esta opción. Esta opción también oculta los foros en el salto de foro y todos sus subforos.";
$l['setting_modlist'] = "Mostrar lista de moderadores";
$l['setting_modlist_desc'] = "Aquí puedes activar o desactivar la lista de moderadores que se muestra en index.php y en forumdisplay.php";
$l['setting_showbirthdays'] = "¿Mostrar cumpleaños de hoy?";
$l['setting_showbirthdays_desc'] = "¿Quieres mostrar los cumpleaños de hoy en la página de inicio del foro?";
$l['setting_showbirthdayspostlimit'] = "Solo mostrar cumpleaños con x mensajes";
$l['setting_showbirthdayspostlimit_desc'] = "Puedes elegir que se muestren solo los usuarios que han escrito una cantidad de mensajes. Establecer  0 mostrará a todos los usuarios que cumplan años.";
$l['setting_showwol'] = "¿Mostrar Quién está en línea?";
$l['setting_showwol_desc'] = "Muestra los usuarios activos en la página de inicio del foro.";
$l['setting_showindexstats'] = "¿Mostrar sección de estadísticas sencilla?";
$l['setting_showindexstats_desc'] = "¿Quieres mostrar el número total de temas, mensajes, miembros, y el último miembro registrado en la página de inicio del foro?";
$l['setting_showforumviewing'] = "¿Mostrar usuarios visitando un foro?";
$l['setting_showforumviewing_desc'] = "Muestra los usuarios activos viendo un foro en la página de inicio.";
/**************************************************************************************************************************************************/

// Grupo 7 forumdisplay
$l['setting_group_forumdisplay'] = "Opciones de visualización del foro";
$l['setting_group_forumdisplay_desc'] = "Esta sección permite configurar varios parámetros que se utilizan al visualizar el foro (forumdisplay.php) de tus foros activando y desactivando diferentes opciones.";
//Ajustes
$l['setting_threadsperpage'] = "Temas por página";
$l['setting_threadsperpage_desc'] = "Número de temas que se mostrarán por página en el foro.";
$l['setting_hottopic'] = "Respuestas para tema concurrido";
$l['setting_hottopic_desc'] = "Número de respuestas para que un tema sea considerado 'Concurrido'.";
$l['setting_hottopicviews'] = "Vistas para tema concurrido";
$l['setting_hottopicviews_desc'] = "Número de vistas para que un tema sea considerado 'Concurrido'.";
$l['setting_usertppoptions'] = "Opciones seleccionables de temas por página";
$l['setting_usertppoptions_desc'] = "Si quieres permitir a los usuarios elegir cuántos temas quieren ver por página que se muestran en el foro, introduce las opciones que quieras permitir separadas con comas. Si prefires no permitir que escojan el número de temas por página, déjalo en blanco.";
$l['setting_dotfolders'] = "Usar iconos de mensaje";
$l['setting_dotfolders_desc'] = "Si quieres usar un punto en el indicador en los temas cuando el usuario ha participado en ese tema.";
$l['setting_allowthreadratings'] = "Usar calificaciones de tema";
$l['setting_allowthreadratings_desc'] = "Permitir a los usuarios calificar los temas";
$l['setting_browsingthisforum'] = "Usuarios navegando este foro";
$l['setting_browsingthisforum_desc'] = "Aquí puedes desactivar la característica 'Usuarios navegando este foro'.";
$l['setting_announcementlimit'] = "Límite de anuncios";
$l['setting_announcementlimit_desc'] = "Número de anuncios que se mostrán en el foro en la lista de temas. Introduce 0 para desactivar el límite de anuncios.";
$l['setting_readparentforums'] = "Intentar marcar los foros padre como leídos";
$l['setting_readparentforums_desc'] = "Cuando se activa esta opción, se intentará marcar los foros padre de un subforo como leído si no hay más mensajes sin leer. Ten en cuenta que esta opción puede disminuir el rendimiento al realizar algunas consultas extras a la base de datos, por lo tanto debes tratarlo como algo experimental. Visita <a href=\"https://docs.mybb.com/versions/1.6.5/\">MyBB Docs</a>  para obtener más información acerca de este cambio.";
/**************************************************************************************************************************************************/

//Grupo 8 showthread
$l['setting_group_showthread'] = "Opciones de visualización de temas";
$l['setting_group_showthread_desc'] = "Esta sección permite configurar varios parámetros que se utilizan al visualizar los temas (showthread.php) de tus foros activando y desactivando diferentes opciones.";
//Ajustes
$l['setting_postlayout'] = "Vista de mensajes";
$l['setting_postlayout_desc'] = "Este ajuste te permite cambiar entre la vista clásica y la nueva horizontal. La vista clásica muestra la información del autor a la izquierda del post; la horizontal muestra la información encima del mensaje.";
$l['setting_postlayout_horizontal'] = "Mostrar mensajes usando la nueva vista horizontal";
$l['setting_postlayout_classic'] = "Mostrar mensajes usando la vista clásica";
$l['setting_postsperpage'] = "Mensajes por página";
$l['setting_postsperpage_desc'] = "Número de mensajes que se muestran por cada página. Se recomienda no utilizar más de 20 para la gente con conexiones lentas.";
$l['setting_userpppoptions'] = "Opciones seleccionables de mensajes por página";
$l['setting_userpppoptions_desc'] = "Si quieres permitir a los usuarios elegir cuántos mensajes quieren ver por página que se muestran en un tema, introduce las opciones que quieras permitir separadas con comas. Si prefires no permitir que escojan el número de mensajes por página, déjalo en blanco.";
$l['setting_postmaxavatarsize'] = "Dimensión máxima del avatar en los mensajes";
$l['setting_postmaxavatarsize_desc'] = "La dimensión máxima que pueden tener los avatares cuando se muestran en los mensajes. Si un avatar es muy grande se redimensionará automáticamente.";
$l['setting_threadreadcut'] = "Temas leídos en la base de datos (Días)";
$l['setting_threadreadcut_desc'] = "Número de días que quieres almacenar los temas leídos en la base de datos. Para foros grandes, se recomienda no utilizar un número muy grande o el foro se ralentizará. Introducir 0 para desactivar.";
$l['setting_threadusenetstyle'] = "Usar modo compacto";
$l['setting_threadusenetstyle_desc'] = "Si seleccionas sí, el foro utilizará el modo compacto al mostrar los temas. No influye en la vista de los mensajes.";
$l['setting_quickreply'] = "Mostrar respuesta rápida";
$l['setting_quickreply_desc'] = "Permite activar un formulario de respuesta rápida que se mostrará en la parte de debajo de los temas.";
$l['setting_multiquote'] = "Mostrar botones de multi-cita";
$l['setting_multiquote_desc'] = "La multi-cita permite a los usuarios seleccionar varios mensajes y al pulsar responder tendrán todos los mensajes citados en sus mensajes.";
$l['setting_showsimilarthreads'] = "Mostrar la tabla 'Temas similares'";
$l['setting_showsimilarthreads_desc'] = "La tabla de 'Temas similares' muestra otros temas que posiblemente traten lo mismo que el que estás leyendo. Puedes establecer la exactitud abajo.";
$l['setting_similarityrating'] = "Exactitud en los temas similares";
$l['setting_similarityrating_desc'] = "Permite limitar la exactitud para la tabla de 'Temas Similares' (0 mínima exactitud). Este número no debe ser mayor de 10 y en foros grandes (<5) para que no se relentice.";
$l['setting_similarlimit'] = "Número de temas similares";
$l['setting_similarlimit_desc'] = "Aquí puedes cambiar el número de temas similares que se mostrarán en la tabla. Se recomienda no usar más de 15 para los usuarios de 56k.";
$l['setting_showforumpagesbreadcrumb'] = "Mostrar menú desplegable en foros multipágina";
$l['setting_showforumpagesbreadcrumb_desc'] = "Si un foro tiene más de una página de temas, ¿quieres que se muestre un menú de paginación desplegable  en los breadcrumbs?";
$l['setting_browsingthisthread'] = "Usuarios navegando por este tema";
$l['setting_browsingthisthread_desc'] = "Aquí puedes desactivar la opción 'usuarios navegando por este tema'.";
$l['setting_delayedthreadviews'] = "Actualizar número de vistas con Retraso";
$l['setting_delayedthreadviews_desc'] = "Si este ajuste está activado, el número de veces que se ha visto un tema se actualizará en segundo plano por el sistema de tareas. Si no está activa, se actualizará instantáneamente.";
/**************************************************************************************************************************************************/

//Grupo 9 member
$l['setting_group_member'] = "Opciones de registro de usuario e inicio de sesión";
$l['setting_group_member_desc'] = "Aquí controlas varios parámetros relacionados con el registro de usuarios y el mantenimiento de cuentas.";
//Ajustes
$l['setting_disableregs'] = "Desactivar registros";
$l['setting_disableregs_desc'] = "Permite desactivar los registros de nuevos usuarios con un solo clic.";
$l['setting_regtype'] = "Método de registro";
$l['setting_regtype_desc'] = "Por favor, selecciona el método que se utilizará en los resgitros de nuevos usuarios.";
$l['setting_regtype_instant'] = "Activación instantánea";
$l['setting_regtype_verify'] = "Enviar email de verificación";
$l['setting_regtype_randompass'] = "Enviar contraseña aleatoria";
$l['setting_regtype_admin'] = "Activación por administración";
$l['setting_regtype_both'] = "Enviar email de verificación y activación por administración";
$l['setting_awactialert'] = "Notificación de activación en espera";
$l['setting_awactialert_desc'] = "¿Quieres mostrar a los administradores la notificación sobre los usuarios que están esperando activación?";
$l['setting_forcelogin'] = "Forzar usuarios a iniciar sesión";
$l['setting_forcelogin_desc'] = "Establecer 'Sí' forzarás a los invitados a iniciar sesión o a registrarse para acceder al foro.";
$l['setting_minnamelength'] = "Longitud mínima de nombre de usuario";
$l['setting_minnamelength_desc'] = "Mínimo número de caracteres para un nombre de usuario.";
$l['setting_maxnamelength'] = "Longitud máxima de nombre de usuario";
$l['setting_maxnamelength_desc'] = "Máximo número de caracteres para un nombre de usuario.";
$l['setting_minpasswordlength'] = "Longitud mínima para la contraseña";
$l['setting_minpasswordlength_desc'] = "Mínimo número de caracteres para una contraseña.";
$l['setting_maxpasswordlength'] = "Longitud máxima para la contraseña";
$l['setting_maxpasswordlength_desc'] = "Máximo número de caracteres para una contraseña.";
$l['setting_requirecomplexpasswords'] = "¿Requerir contraseña compleja?";
$l['setting_requirecomplexpasswords_desc'] = "¿Quieres que tus usuarios usen contraseñas complejas? Las contraseñas complejas requieren una letra mayúscula, una minúscula y un número.";
$l['setting_betweenregstime'] = "Tiempo entre registros";
$l['setting_betweenregstime_desc'] = "Tiempo (En horas) que deben esperar los usuarios para volver a registrarse desde la misma IP. Establecer como '0' para desactivar";
$l['setting_maxregsbetweentime'] = "Máximos registros por IP";
$l['setting_maxregsbetweentime_desc'] = "Esta opción te permite establecer el número máximo de registros desde una misma IP.";
$l['setting_allowmultipleemails'] = "¿Permitir usar el mismo email varias veces?";
$l['setting_allowmultipleemails_desc'] = "Selecciona 'Sí' si quieres permitir que los usuarios se puedan registrar varias veces con un mismo email, en otro caso selecciona 'No'.";
$l['setting_emailkeep'] = "Mantener email";
$l['setting_emailkeep_desc'] = "Si un usuario está registrado con un email que está en la lista de suspendidos, ¿Tiene permitido mantenerlo?";
$l['setting_hiddencaptchaimage'] = "Usar CAPTCHA oculto";
$l['setting_hiddencaptchaimage_desc'] = "¿Quieres usar un campo CAPTCHA oculto en el proceso de registro? Esto ayuda a prevenir registros de  spambots en tu foro.";
$l['setting_hiddencaptchaimagefield'] = "Campo CAPTCHA oculto";
$l['setting_hiddencaptchaimagefield_desc'] = "Aquí puedes elegir un nombre para tu campo CAPTCHA oculto.";
$l['setting_usereferrals'] = "Usar recomendantes";
$l['setting_usereferrals_desc'] = "¿Quieres que los usuarios puedan usar el sistema de recomendantes en estos foros?";
$l['setting_coppa'] = "Formulario COPPA";
$l['setting_coppa_desc'] = "Si quieres activar el soporte <a href=\"http://www.coppa.org/comply.htm\">COPPA</a> en tus foros, por favor, selecciona el tipo de registro permitido.";
$l['setting_coppa_enabled'] = "Activada";
$l['setting_coppa_deny'] = "Denegar registros a menores de 13 años";
$l['setting_coppa_disabled'] = "Desactivar esta función";
$l['setting_username_method'] = "Métodos de inicio de sesión permitidos";
$l['setting_username_method_desc'] = "Métodos de inicio de sesión que quieres permitir para el campo de nombre de usuario. Nombre de usuario, Email o permitir ambos.<br />Para permitir el email como un método válido para iniciar sesión, los usuarios no pueden usar el email en más de un usuario a la vez.";
$l['setting_username_method_0'] = "Solo nombre de usuario";
$l['setting_username_method_1'] = "Solo email";
$l['setting_username_method_2'] = "Ambos (Nombre de usuario y email)";
$l['setting_failedcaptchalogincount'] = "Número de fallos al iniciar sesión antes de pedir una verificación";
$l['setting_failedcaptchalogincount_desc'] = "El número de veces que se permite fallar a alguien al iniciar sesión antes de requerir introducir una verificación CAPTCHA. Establecer como '0' para desactivar.";
$l['setting_failedlogincount'] = "Número de fallos permitidos al iniciar sesión";
$l['setting_failedlogincount_desc'] = "Número de veces que se permite fallar cuando se intenta iniciar sesión. Establecer como '0' para desactivar.";
$l['setting_failedlogintime'] = "Tiempo entre fallos al iniciar sesión";
$l['setting_failedlogintime_desc'] = "Tiempo (En horas) que deben esperar los usuarios para volver a intentar iniciar sesión de nuevo. Solo si la opción de arriba es distinta de 0";
$l['setting_failedlogintext'] = "Mostrar número de fallos";
$l['setting_failedlogintext_desc'] = "¿Quieres mostrar una línea de texto al usuario que diga cuántos intentos de inicio de sesión le quedan?";
$l['setting_regtime'] = "Tiempo mínimo de registro";
$l['setting_regtime_desc'] = "El mínimo tiempo de registro es el número de segundos que le debe llevar a un usuario rellenar el formulario de registro.  Se utiliza para prevenir registros automáticos. Establece '0' para desactivar esta función.";
$l['setting_securityquestion'] = "Mostrar pregunta de seguridad";
$l['setting_securityquestion_desc'] = "¿Quieres mostrar la pregunta de seguridad que debe ser respondida cuando un usuario se registra?";
/**************************************************************************************************************************************************/

//Grupo 10 profile
$l['setting_group_profile'] = "Opciones de perfil";
$l['setting_group_profile_desc'] = "Estas opciones controlan los ajustes de los perfiles de los usuarios en el foro.";
//Ajustes
$l['setting_sigmycode'] = "Permitir MyCode en las firmas";
$l['setting_sigmycode_desc'] = "¿Quieres que los usuarios puedan utilizar MyCode en sus firmas?";
$l['setting_sigcountmycode'] = "¿MyCode afecta a la longitud de las firmas?";
$l['setting_sigcountmycode_desc'] = "¿Quieres que el MyCode cuente como parte del límite para las firmas?";
$l['setting_sigsmilies'] = "Permitir emoticonos en las firmas";
$l['setting_sigsmilies_desc'] = "¿Quieres que los usuarios puedan utilizar iconos gestuales en sus firmas?";
$l['setting_sightml'] = "Permitir HTML en las firmas";
$l['setting_sightml_desc'] = "¿Quieres que los usuarios puedan utilizar HTML en sus firmas?";
$l['setting_sigimgcode'] = "Permitir Código [img] en las firmas";
$l['setting_sigimgcode_desc'] = "¿Quieres que los usuarios puedan utilizar el código [img] en sus firmas?";
$l['setting_maxsigimages'] = "Máximo número de imágenes por firma";
$l['setting_maxsigimages_desc'] = "Introduce el máximo número de imágenes (Incluidos iconos gestuales) que un usuario puede poner en su firma. Introduce 0 para no permitir ninguna imagen en las firmas.";
$l['setting_siglength'] = "Longitud máxima de las firmas";
$l['setting_siglength_desc'] = "Máximo número de caracteres que un usuario puede utilizar en su firma. Establecer como '0' para desactivar la limitación";
$l['setting_hidesignatures'] = "Ocultar las firmas";
$l['setting_hidesignatures_desc'] = "Selecciona los grupos de usuario a los que se les ocultarán las firmas.";
$l['setting_hidewebsite'] = "Ocultar los sitios web";
$l['setting_hidewebsite_desc'] = "Selecciona los grupos de usuario a los que se les ocultarán los sitios web.";
$l['setting_useravatar'] = "Avatar por defecto";
$l['setting_useravatar_desc'] = "Si el usuario no establece un avatar se utilizará esta imagen en su lugar. Si quieres utilizar una imagen diferente para los distintos estilos, por favor, utiliza <strong>{theme}</strong> para representar el directorio de imágenes para cada estilo.";
$l['setting_useravatardims'] = "Dimensiones del avatar por defecto";
$l['setting_useravatardims_desc'] = "Las dimensiones deben seguir este formato: ancho x alto (ej. 40|40).]";
$l['setting_useravatarrating'] = "Calificación de Gravatar";
$l['setting_useravatarrating_desc'] = "Te permite establecer la calificación máxima para Gravatars si el usuario escoge uno. Si la calificación del avatar del usuario es mayor se usará el avatar por defecto. Las calificaciones son las siguientes:

<ul>
<li><strong>G</strong>: es adecuado para mostrarlo en páginas web con contenido apto para todo el público.</li>
<li><strong>PG</strong>: pueden contener gestos groseros, personas vestidas provocativamente, palabras malsonantes o violencia leve.</li>
<li><strong>R</strong>: pueden contener blasfemias, violencia intensa, desnudez o promover el uso de drogas.</li>
<li><strong>X</strong>: pueden contener imágenes de violencia extrema o un alto contenido sexual.</li>
</ul>";
$l['setting_maxavatardims'] = "Dimensiones máximas de avatar";
$l['setting_maxavatardims_desc'] = "Dimensiones máximas para un avatar, con el formato de ancho<b>x</b>alto. Si lo dejas en blanco no habrá restricciones en la dimensión.";
$l['setting_avatarsize'] = "Tamaño máximo del avatar";
$l['setting_avatarsize_desc'] = "Tamaño máximo (En kilobytes) que se permite para subir un avatar desde el PC. Establecer como '0' para desactivar la limitación";
$l['setting_avatarresizing'] = "Redimensionar avatar";
$l['setting_avatarresizing_desc'] = "Si quieres puedes configurar que todos los avatares muy grandes se redimensionen automáticamente, permitir a los usuarios redimensionar su avatar o no redimensionar su avatar con este ajuste.";
$l['setting_avatarresizing_auto'] = "Redimensionar automáticamente los avatares grandes";
$l['setting_avatarresizing_user'] = "Dejar al usuario elegir si redimensiona los avatares grandes";
$l['setting_avatarresizing_disabled'] = "Desactivar esta función";
$l['setting_avataruploadpath'] = "Ruta de avatares subidos";
$l['setting_avataruploadpath_desc'] = "Ruta en la que se almacenarán los avatares subidos por los usuarios. Este directorio <b>debe tener chmod 777</b> (Escribible) para que las subidas funcionen.";
$l['setting_allowremoteavatars'] = "Permitir avatares remotos";
$l['setting_avataruploadpath_desc'] = "Activa esta opción para permitir avatares remotos. Nota: activar esta opción pude exponer la dirección IP de tu servidor.";
$l['setting_customtitlemaxlength'] = "Longitud máxima para el título personalizado";
$l['setting_customtitlemaxlength_desc'] = "Máximo número de caracteres para el título de usuario personalizado. Establecer como '0' para desactivar la limitación";
$l['setting_allowaway'] = "¿Permitir el estado 'Ausente'?";
$l['setting_allowaway_desc'] = "¿Permitir que los usuarios puedan establecer su estado como 'Ausente' con una razón y una fecha de regreso?";
$l['setting_allowbuddyonly'] = "¿Permitir mensajes privados solo entre amigos?";
$l['setting_allowbuddyonly_desc'] = "¿Permitir a los usuarios recibir mensajes privados solo de usuarios que estén en su lista de amigos?";
/**************************************************************************************************************************************************/

//Grupo 11 posting
$l['setting_group_posting'] = "Publicando mensajes";
$l['setting_group_posting_desc'] = "Estas opciones controlan varios elementos relacionados con la publicación de mensajes en los foros.";
//Ajustes
$l['setting_minmessagelength'] = "Longitud mínima de mensaje";
$l['setting_minmessagelength_desc'] = "Número mínimo de caracteres para los mensajes.";
$l['setting_maxmessagelength'] = "Longitud máxima de mensaje";
$l['setting_maxmessagelength_desc'] = "Número máximo de caracteres para un mensaje. Introducir 0 permite una longitud ilimitada.<br />Esto debe configurarse según el tipo de columna de la tabla de los mensajes en la base de datos. A continuación se muestran las longitudes máximas para cada tipo de columna.<ul><li>TEXT: 65535 (por defecto)</li><li>MEDIUMTEXT: 16777215</li><li>LONGTEXT: 4294967295</li></ul>";
$l['setting_mycodemessagelength'] = "¿Usar MyCode afecta a la longitud mínima de mensaje?";
$l['setting_mycodemessagelength_desc'] = "¿Quieres que MyCode cuente para el límite cuando los usuarios usan MyCode en los mensajes?";
$l['setting_postfloodcheck'] = "Comprobar envíos masivos de mensajes (Flood)";
$l['setting_postfloodcheck_desc'] = "Activa esta opción, si quieres comprobar el envío masivo de mensajes. Especificar el tiempo entre mensajes abajo.";
$l['setting_postfloodsecs'] = "Tiempo entre envío de mensajes";
$l['setting_postfloodsecs_desc'] = "Establece el tiempo (En segundos) que tienen que esperar los miembros entre los envíos de mensajes; para que tenga efecto, la opción anterior debe estar activada.";
$l['setting_postmergemins'] = "Tiempo de autocombinar mensajes";
$l['setting_postmergemins_desc'] = "Cuando está activa, los mensajes enviados antes de x minutos por el mismo autor después de enviar otro, se combinarán. Establece el tiempo límite (En minutos) para combinar mensajes. Establecer como '0' para desactivar esta opción. Por defecto: 60";
$l['setting_postmergefignore'] = "Autocombinar desactivado en algunos foros";
$l['setting_postmergefignore_desc'] = "Foros excluídos en la función autocombinar. Seleccionar ninguno para desactivar.";
$l['setting_postmergeuignore'] = "Autocombinar desactivado en algunos grupos de usuario";
$l['setting_postmergeuignore_desc'] = "Seleccionar los grupos de usuario que serán excluídos en la función autocombinar.";
$l['setting_postmergesep'] = "Separador del autocombinar";
$l['setting_postmergesep_desc'] = "El separador que se usará para combinar dos mensajes. Por defecto: '[hr]'";
$l['setting_logip'] = "Guardar IP de los mensajes";
$l['setting_logip_desc'] = "¿Quieres almacenar las IP desde las que escriben los miembros, y a quién quieres que se muestren esas direcciones IP?";
$l['setting_logip_no'] = "No almacenar IPs";
$l['setting_logip_hide'] = "Mostrar a administradores y moderadores";
$l['setting_logip_show'] = "Mostrar a todos los usuarios";
$l['setting_showeditedby'] = "Mostrar mensajes 'Modificado por'";
$l['setting_showeditedby_desc'] = "Cuando un usuario edita un post, ¿quieres que se muestre el mensaje 'Modificado por'?";
$l['setting_showeditedbyadmin'] = "Mostrar mensajes 'Modificado por' al equipo del foro";
$l['setting_showeditedbyadmin_desc'] = "¿Quieres que se muestre el mensaje 'Modificado por' cuando editan sus mensajes los miembros del equipo del foro?";
$l['setting_maxpostimages'] = "Número máximo de imágenes por mensaje";
$l['setting_maxpostimages_desc'] = "Introduce el número máximo de imágenes (incluyendo iconos gestuales) que un miembro puede usar en sus mensajes. 0 para deshabilitar el límite.";
$l['setting_maxpostvideos'] = "Número máximo de vídeos por mensaje";
$l['setting_maxpostvideos_desc'] = "Introduce el número máximo de vídeos que un miembro puede usar en sus mensajes. 0 para deshabilitar el límite.";
$l['setting_subscribeexcerpt'] = "Número de caracteres para las vistas previas de las suscripciones";
$l['setting_subscribeexcerpt_desc'] = "¿Cuantos caracteres de un mensaje quieres que se envíen en las notificaciones por email en una nueva respuesta?.";
$l['setting_maxquotedepth'] = "Nivel máximo de citas";
$l['setting_maxquotedepth_desc'] = "Nivel máximo en las citas. Cuando citas un mensaje, todas las citas antiguas que superen este valor de nivel se eliminarán automáticamente. Este valor solo afecta cuando se cita con el botón ya que siempre esrá posible exceder este límite citando a mano, este valor no afecta a los mensajes enviados con anterioridad. 0 para deshabilitar.";
$l['setting_polloptionlimit'] = "Longitud de una opción de una encuesta";
$l['setting_polloptionlimit_desc'] = "Longitud máxima permitida para una opción de una encuesta. Establecer como '0' para deshabilitar.";
$l['setting_maxpolloptions'] = "Número de opciones para una encuesta";
$l['setting_maxpolloptions_desc'] = "Número máximo de opciones permitidas en una encuesta. Establecer como '0' para deshabilitar.";
$l['setting_polltimelimit'] = "Límite de tiempo para las encuestas";
$l['setting_polltimelimit_desc'] = "Número de horas para usuarios normales a partir de las cuales no podrán añadir una encuesta a sus temas (si tienen permiso). Introduce '0' para no establecer un límite.";
$l['setting_threadreview'] = "Mostrar resumen del tema";
$l['setting_threadreview_desc'] = "¿Mostrar los mensajes más recientes al crear una nueva respuesta?";
$l['setting_alloweditreason'] = "Permitir razón de edición";
$l['setting_alloweditreason_desc'] = "¿Quieres permitir a tus usuarios la posibilidad de agregar una razón opcional de por qué editan sus mensajes?";
$l['setting_soft_delete'] = "Activar borrado suave";
$l['setting_soft_delete_desc'] = "Si lo activas, esto te permitirá restaurar los mensajes y temas eliminados por los usuarios. En otro caso, se eliminarán permanentemente.";
$l['setting_announcementshtml'] = "Permitir HTML en los anuncios";
$l['setting_announcementshtml_desc'] = "¿Permitir a los moderadores usar HTML en los anuncios?";
/**************************************************************************************************************************************************/

// Grupo 12 attachments
$l['setting_group_attachments'] = "Archivos adjuntos";
$l['setting_group_attachments_desc'] = "Varias opciones relacionadas con el sistema de adjuntos que se configuran aquí.";
//Ajustes
$l['setting_enableattachments'] = "Activar el sistema de adjuntos";
$l['setting_enableattachments_desc'] = "Si quieres desactivar los archivos adjuntos en tu foro, establece 'no'.";
$l['setting_maxattachments'] = "Número máximo de adjuntos por mensaje. Establecer como '0' para desactivar.";
$l['setting_maxattachments_desc'] = "Máximo número de archivos adjuntos que se permiten subir con cada mensaje.";
$l['setting_attachthumbnails'] = "Mostrar miniaturas en los mensajes";
$l['setting_attachthumbnails_desc'] = "¿Quieres mostrar las miniaturas generadas de las imágenes adjuntas dentro de los mensajes?";
$l['setting_attachthumbnails_yes'] = "Miniatura";
$l['setting_attachthumbnails_no'] = "Imagen completa";
$l['setting_attachthumbnails_download'] = "Enlace de descarga";
$l['setting_attachthumbh'] = "Altura máxima de las miniaturas";
$l['setting_attachthumbh_desc'] = "Introduce la altura máxima con la que se generarán las miniaturas";
$l['setting_attachthumbw'] = "Ancho máximo de las miniaturas";
$l['setting_attachthumbw_desc'] = "Introduce el ancho máximo con el que se generarán las miniaturas";
/**************************************************************************************************************************************************/

// Grupo 13 memberlist
$l['setting_group_memberlist'] = "Lista de miembros";
$l['setting_group_memberlist_desc'] = "Esta sección permite configurar varios aspectos en la lista de miembros (memberlist.php), como por ejemplo cuántos miembros se muestran por página y el orden en el que se muestran.";
//Ajustes
$l['setting_enablememberlist'] = "Activar lista de miembros";
$l['setting_enablememberlist_desc'] = "Si quieres desactivar la lista de miembros en tu foro, marca la opción no.";
$l['setting_membersperpage'] = "Miembros por página";
$l['setting_membersperpage_desc'] = "Número de miembros que se mostrarán por página en la lista de miembros.";
$l['setting_default_memberlist_sortby'] = "Campo de ordenación";
$l['setting_default_memberlist_sortby_desc'] = "Selecciona el campo por el que serán ordenados los usuarios.";
$l['setting_default_memberlist_sortby_regdate'] = "Fecha de registro";
$l['setting_default_memberlist_sortby_postnum'] = "Número de mensajes";
$l['setting_default_memberlist_sortby_username'] = "Nombre de usuario";
$l['setting_default_memberlist_sortby_lastvisit'] = "Última visita";
$l['setting_default_memberlist_order'] = "Orden para ordenación";
$l['setting_default_memberlist_order_desc'] = "Seleccionar el orden por el que se mostrarán los usuarios.<br />Ascendente: A-Z / principio-fin<br />Descendente: Z-A / fin-principio";
$l['setting_default_memberlist_order_ascending'] = "Ascendente";
$l['setting_default_memberlist_order_descending'] = "Descendente";
$l['setting_memberlistmaxavatarsize'] = "Máxima dimensión de avatar";
$l['setting_memberlistmaxavatarsize_desc'] = "Aquí puedes configurar el tamaño máximo para los avatares que se mostrarán en la lista de miembros. Si un avatar es muy grande, se redimensionará automáticamente.";
/**************************************************************************************************************************************************/

//Grupo 14 reputation
$l['setting_group_reputation'] = "Sistema de reputaciones";
$l['setting_group_reputation_desc'] = "El sistema de reputación permite a tus usuarios calificar a otros y dejarles un comentario. Esta sección tiene ajustes para desactivar y cambiar otros aspectos de la página de reputación (reputation.php).";
//Ajustes
$l['setting_enablereputation'] = "Activar sistema de reputaciones";
$l['setting_enablereputation_desc'] = "Si quieres deshabilitar el sistema de reputación en tu foro, selecciona no.";
$l['setting_posrep'] = "Permitir reputación positiva";
$l['setting_posrep_desc'] = "¿Permitir a los usuarios dar reputación positiva?";
$l['setting_negrep'] = "Permitir reputación negativa";
$l['setting_negrep_desc'] = "¿Permitir a los usuarios dar reputación negativa?";
$l['setting_neurep'] = "Permitir reputación neutral";
$l['setting_neurep_desc'] = "¿Permitir a los usuarios dar reputación neutral?";
$l['setting_multirep'] = "Permitir reputación múltiple";
$l['setting_multirep_desc'] = "¿Pueden los usuarios dar múltiples reputaciones a un mismo usuario?<br />Nota: Esto no afecta a la reputación de mensaje";
$l['setting_postrep'] = "Permitir reputación de mensaje";
$l['setting_postrep_desc'] = "¿Activar la reputación enlazada con los mensajes?";
$l['setting_repsperpage'] = "Número de comentarios por página";
$l['setting_repsperpage_desc'] = "Introduce el número de comentarios de las reputaciones que se mostarán por cada página en el sistema de reputación.";
$l['setting_maxreplength'] = "Longitud máxima de la reputación";
$l['setting_maxreplength_desc'] = "Máximo número de caracteres que se pueden usar en una reputación.";
$l['setting_minreplength'] = "Longitud mínima de la reputación";
$l['setting_minreplength_desc'] = "Mínimo número de caracteres que se pueden usar en una reputación.";
/**************************************************************************************************************************************************/

//Grupo 15 warning
$l['setting_group_warning'] = "Sistema de advertencias";
$l['setting_group_warning_desc'] = "El sistema de advertencias permite al equipo del foro advertir a usuarios que violen las normas. Aquí puedes configurar los ajustes de control del sistema de advertencias. (warnings.php)";
//Ajustes
$l['setting_enablewarningsystem'] = "¿Activar sistema de advertencias?";
$l['setting_enablewarningsystem_desc'] = "Establecer en 'No' para desactivar completamente el sistema de advertencias.";
$l['setting_allowcustomwarnings'] = "¿Permitir advertencias personalizadas?";
$l['setting_allowcustomwarnings_desc'] = "Permite personalizar la razón y el número de puntos que serán especificados por sus permisos para advertir a los usuarios.";
$l['setting_canviewownwarning'] = "¿Permitir a los Usuarios ver sus advertencias?";
$l['setting_canviewownwarning_desc'] = "Establecer este ajuste como 'Sí' permite a los usuarios ver en su panel de control las últimas advertencias y mostrar su nivel de advertencia en su perfil.";
$l['setting_allowanonwarningpms'] = "Permitir MPs anónimos en las advertencias";
$l['setting_allowanonwarningpms_desc'] = "Permitir a los moderadores enviar MPs anónimos al advertir a un usuario.";
$l['setting_maxwarningpoints'] = "Máximo número de advertencias";
$l['setting_maxwarningpoints_desc'] = "El máximo número de advertencias necesarias antes de que un usuario tenga el nivel de advertencia al 100% (Ej: 10 puntos = 100% de advertencia)";
/**************************************************************************************************************************************************/

//Grupo 16 privatemessaging
$l['setting_group_privatemessaging'] = "Mensajería privada";
$l['setting_group_privatemessaging_desc'] = "Varias opciones relacionadas con el sistema de mensajería privada de MyBB (private.php) que se configuran desde aquí.";
//Ajustes
$l['setting_enablepms'] = "Activar mensajería privada";
$l['setting_enablepms_desc'] = "Si quieres deshabilitar el sistema de mensajería privada en tu foro, selecciona no.";
$l['setting_pmquickreply'] = "Mostrar respuesta rápida";
$l['setting_pmquickreply_desc'] = "Permite activar o no la respuesta rápida que se mostrará debajo de los mensajes privados.";
$l['setting_pmsallowhtml'] = "Permitir HTML";
$l['setting_pmsallowhtml_desc'] = "Selecciona sí para permitir el uso de HTML en la mensajería privada.";
$l['setting_pmsallowmycode'] = "Permitir MyCode";
$l['setting_pmsallowmycode_desc'] = "Selecciona sí para permitir el uso de MyCode en la mensajería privada.";
$l['setting_pmsallowsmilies'] = "Permitir iconos gestuales";
$l['setting_pmsallowsmilies_desc'] = "Selecciona sí para permitir el uso de iconos gestuales en la mensajería privada.";
$l['setting_pmsallowimgcode'] = "Permitir el código [img]";
$l['setting_pmsallowimgcode_desc'] = "Selecciona sí para permitir el uso de [img] en la mensajería privada.";
$l['setting_pmsallowvideocode'] = "Permitir el código [video]";
$l['setting_pmsallowvideocode_desc'] = "Selecciona sí para permitir el uso de [video] en la mensajería privada.";
$l['setting_pmfloodsecs'] = "Tiempo de espera entre mensajes privados";
$l['setting_pmfloodsecs_desc'] = "Establece el tiempo (En segundos) que los usuarios deben esperar entre cada envío. Establecer como '0' para deshabilitar.";
$l['setting_showpmip'] = "Mostrar direcciones IP en los mensajes privados";
$l['setting_showpmip_desc'] = "¿Quieres mostrar las direcciones IP de los usuarios que envian mensajes privados y a quien se muestran?";
$l['setting_showpmip_no'] = "No mostrar IP";
$l['setting_showpmip_hide'] = "Mostrar a administradores y moderadores";
$l['setting_showpmip_show'] = "Mostrar a todos los usuarios";
$l['setting_maxpmquotedepth'] = "Máximas etiquetas de cita";
$l['setting_maxpmquotedepth_desc'] = "El nivel máximo de profundidad para las citas. Cuando responden con una cita en los MP, todas las citas que excedan el límite se eliminarán automaticamente. Ten en cuenta que este límite solo funciona al citar, con lo que es posible exceder este límite citando manualmente. Esto no afecta a los MPs ya enviados. Establece a 0 para desactivar.";
/**************************************************************************************************************************************************/

// Grupo 17 calendar
$l['setting_group_calendar'] = "Calendario";
$l['setting_group_calendar_desc'] = "El calendario del foro permite listar eventos públicos o privados y los cumpleaños de los miembros. Esta sección permite configurar los parámetros para el Calendario. (calendar.php)";
//Ajustes
$l['setting_enablecalendar'] = "Activar calendario";
$l['setting_enablecalendar_desc'] = "Si quieres desactivar el calendario en tu foro, establece esta opción a no.";
/**************************************************************************************************************************************************/

//Grupo 18 whosonline
$l['setting_group_whosonline'] = "Quién está en línea";
$l['setting_group_whosonline_desc'] = "Esta sección permite configurar varios parámetros que afectan a la funcionalidad 'Quién está en línea'. (online.php)";
//Ajustes
$l['setting_wolcutoffmins'] = "Tiempo de desconexión (Minutos)";
$l['setting_wolcutoffmins_desc'] = "Minutos que se esperan antes de marcar a un usuario como desconectado. Recomendado: 15 mins.";
$l['setting_wolorder'] = "Ordenación de 'Quién está en línea'";
$l['setting_wolorder_desc'] = "Muestra los usuarios activos por nombre de usuario o por última actividad. Nota: Este ajuste solo afecta en el portal y en la página de inicio.";
$l['setting_wolorder_username'] = "Ordenar por nombre de usuario (ASC)";
$l['setting_wolorder_activity'] = "Ordenar por última actividad (DESC)";
$l['setting_refreshwol'] = "Actualizar quién está en línea (Minutos)";
$l['setting_refreshwol_desc'] = "Tiempo entre actualizaciones de la página \"Quién está en línea\", en minutos. 0 para desactivar.";
/**************************************************************************************************************************************************/

//Grupo 19 userpruning
$l['setting_group_userpruning'] = "Borrado de usuarios";
$l['setting_group_userpruning_desc'] = "Borrado de usuarios te permite eliminar usuarios siguiendo un criterio. Aquí puedes configurar este criterio."; 
//Ajustes
$l['setting_enablepruning'] = "¿Activar borrado de usuarios?";
$l['setting_enablepruning_desc'] = "Establece 'On' para borrar usuarios usando el criterio especificado abajo.";
$l['setting_enableprunebyposts'] = "¿Borrar usuarios usando el contador de mensajes?";
$l['setting_enableprunebyposts_desc'] = "Establece 'On' para borrar usuarios usando el número de mensajes en el foro.";
$l['setting_prunepostcount'] = "Número de mensajes";
$l['setting_prunepostcount_desc'] = "Ajusta para que se borren los usuarios con menos del número de mensajes especificado.";
$l['setting_prunepostcountall'] = "¿Contar todos los mensajes?";
$l['setting_prunepostcountall_desc'] = "Si estableces sí, los mensajes que no incrementan el contador de mensajes del usuario también serán considerados al realizar el borrado.";
$l['setting_dayspruneregistered'] = "Días registrados antes de borrar por número de mensajes";
$l['setting_dayspruneregistered_desc'] = "Ajusta el número de días que debe tener un usuario para ser borrado.";
$l['setting_pruneunactived'] = "¿Borrar usuarios inactivos?";
$l['setting_pruneunactived_desc'] = "Establece que se eliminen los usuarios que estén inactivos.";
$l['setting_dayspruneunactivated'] = "Días registrados antes de borrar un usuario inactivo";
$l['setting_dayspruneunactivated_desc'] = "Ajusta el número de días que debe tener un usuario para ser borrado.";
$l['setting_prunethreads'] = "Borras mensajes/temas";
$l['setting_prunethreads_desc'] = "Para los usuarios eliminados, ¿quieres eliminar todos sus mensajes/temas?";
/**************************************************************************************************************************************************/

// Grupo 20 portal
$l['setting_group_portal'] = "Opciones del portal";
$l['setting_group_portal_desc'] = "La página del portal mezcla muchas piezas de información sobre el foro, incluyendo los últimos mensajes, quién está en línea, estadísticas del foro, anuncios y más. Esta sección tiene ajustes que controlan la página del portal (portal.php).";
//Ajustes
$l['setting_portal'] = "Activar portal";
$l['setting_portal_desc'] = "Si quieres desactivar el portal en tu foro, establece esta opción a no.";
$l['setting_portal_announcementsfid'] = "Mostrar los anuncios de los foros";
$l['setting_portal_announcementsfid_desc'] = "Seleciona los foros de los que quieres mostrar los anuncios.";
$l['setting_portal_numannouncements'] = "Número de anuncios a mostrar";
$l['setting_portal_numannouncements_desc'] = "Por favor, introduce el número de anuncios que se mostarán por página en la página principal.";
$l['setting_portal_showwelcome'] = "Mostrar caja de bienvenida";
$l['setting_portal_showwelcome_desc'] = "Muestra la caja de bienvenida a invitados / usuarios.";
$l['setting_portal_showpms'] = "Mostrar el número de MPs a los usuarios";
$l['setting_portal_showpms_desc'] = "Muestra el número de mensajes privados que tiene actualmente un usuario en sus carpetas del sistema de mensajería privada.";
$l['setting_portal_showstats'] = "Mostrar estadísticas del foro";
$l['setting_portal_showstats_desc'] = "Muestra el número de mensajes, temas, miembros y el último miembro resgistrado en el portal.";
$l['setting_portal_showwol'] = "Mostrar \"Usuarios en línea\"";
$l['setting_portal_showwol_desc'] = "Muestra los usuarios que están en línea en la página del portal";
$l['setting_portal_showsearch'] = "Mostrar \"Busca en los foros\"";
$l['setting_portal_showsearch_desc'] = "Muestra una caja que permite a usuarios buscar rápidamente en el foro.";
$l['setting_portal_showdiscussions'] = "Mostrar \"Últimos temas\"";
$l['setting_portal_showdiscussions_desc'] = "Muestra los últimos temas que se han discutido en el foro";
$l['setting_portal_showdiscussionsnum'] = "Número de \"Últimos temas\" a mostrar";
$l['setting_portal_showdiscussionsnum_desc'] = "Por favor, introduce el número de los últimos temas que se mostrarán en la página del portal.";
$l['setting_portal_excludediscussion'] = "Foros que excluyes de la sección 'Últimos temas'";
$l['setting_portal_excludediscussion_desc'] = "Por favor, selecciona los foros de los que quieres que sus temas no aparezcan en la sección 'Últimos temas'";
/**************************************************************************************************************************************************/

//Grupo 21 search
$l['setting_group_search'] = "Sistema de búsqueda";
$l['setting_group_search_desc'] = "Esta sección permite configurar varios parámetros que modifican el mecanismo de búsqueda de temas, mensajes y documentos de ayuda en MyBB.";
//Ajustes
$l['setting_searchtype'] = "Tipo de búsqueda";
$l['setting_searchtype_desc'] = "Por favor, selecciona el tipo de búsqueda que quieres utilizar. Puedes elegir entre \"Estándar\", o \"Completa\" (Dependiendo de tu base de datos). La búsqueda completa es más potente y más rápida que la búsqueda estándar de MyBB.";
$l['setting_searchtype_standard'] = "Estándar";
$l['setting_searchtype_fulltext'] = "Completa";
$l['setting_searchfloodtime'] = "Tiempo de búsqueda (Segundos)";
$l['setting_searchfloodtime_desc'] = "Introduce el tiempo mínimo de espera entre búsquedas. Previene que los usuarios sobrecarguen tu servidor por hacer búsquedas constantemente. 0 para desactivar.";
$l['setting_minsearchword'] = "Longitud mínima para la búsqueda";
$l['setting_minsearchword_desc'] = "Introduce el número de caracteres para una palabra individual en la búsqueda. 0 para desactivar (Y acepta un límite por defecto de 3 para la búsqueda estándar y 4 para la búsqueda completa MySQL). Si usas búsqueda completa de MySQL y estableces un límite inferior a la configuración MySQL - MySQL lo sobreescribirá.";
$l['setting_searchhardlimit'] = "Límite máximo de resultados en una búsqueda";
$l['setting_searchhardlimit_desc'] = "Introduce el máximo de resultados que se procesarán. En foros muy grandes (Más de 1 millón de mensajes) es recomendable establecer un máximo inferior a 1000 (0 para deshabilitar).";
$l['setting_helpsearch'] = "Activar búsqueda de documentos de ayuda";
$l['setting_helpsearch_desc'] = "Si lo activas permitirás a los usuarios buscar en los documentos de ayuda.";
/**************************************************************************************************************************************************/

// Grupo 22 clickablecode
$l['setting_group_clickablecode'] = "Iconos gestuales y código BB";
$l['setting_group_clickablecode_desc'] = "Esta sección te permite cambiar cómo aparece la lista de los iconos gestuales y controla los MyCodes utilizables";
//Ajustes
$l['setting_bbcodeinserter'] = "Editor MyCode";
$l['setting_bbcodeinserter_desc'] = "Establece esta opción como 'On' para mostrar el editor MyCode en las páginas de envío de mensajes. Si cambia esto a off también desactivarás 'Lista de iconos gestuales'.";
$l['setting_partialmode'] = "Editor MyCode parcial";
$l['setting_partialmode_desc'] = "El editor estará en modo parcial si estableces 'Sí'. Algunos MyCodes, como [quote] y [img], se insertarán como etiquetas de texto plano.";
$l['setting_smilieinserter'] = "Lista de iconos gestuales";
$l['setting_smilieinserter_desc'] = "La lista de iconos gestuales aparece en las webs de publicación de mensajes si esta opción se marca como 'On'.";
$l['setting_smilieinsertertot'] = "Nº. de iconos gestuales que se muestran";
$l['setting_smilieinsertertot_desc'] = "Introduce el número total de iconos gestuales que se mostrarán en la Lista de iconos gestuales.";
$l['setting_smilieinsertercols'] = "Nº. de columnas para los iconos gestuales";
$l['setting_smilieinsertercols_desc'] = "Introduce el número de columnas que deseas para la lista de iconos gestuales.";
$l['setting_allowbasicmycode'] = "Permitir MyCodes básicos";
$l['setting_allowbasicmycode_desc'] = "Establecer 'Sí' permite a los usuarios usar los MyCodes básicos, como negrita, cursiva, subrayado, tachado y HR.";
$l['setting_allowcolormycode'] = "Permitir MyCode color";
$l['setting_allowcolormycode_desc'] = "Establecer 'Sí' permite a los usuarios usar el MyCode color.";
$l['setting_allowsizemycode'] = "Permitir MyCode tamaño (size)";
$l['setting_allowsizemycode_desc'] = "Establecer 'Sí' permite a los usuarios usar el MyCode para el tamaño de letra.";
$l['setting_allowfontmycode'] = "Permitir MyCode fuente (font)";
$l['setting_allowfontmycode_desc'] = "Establecer 'Sí' permite a los usuarios usar el MyCode para el tipo de letra.";
$l['setting_allowlinkmycode'] = "Permitir MyCode enlace (link)";
$l['setting_allowlinkmycode_desc'] = "Establecer 'Sí' permite a los usuarios usar el MyCode para insertar enlaces.";
$l['setting_allowemailmycode'] = "Permitir MyCode email";
$l['setting_allowemailmycode_desc'] = "Establecer 'Sí' permite a los usuarios usar el MyCode para insertar emails.";
$l['setting_allowalignmycode'] = "Permitir MyCode alineación (align)";
$l['setting_allowalignmycode_desc'] = "Establecer 'Sí' permite a los usuarios usar el MyCode para alinear el texto.";
$l['setting_allowlistmycode'] = "Permitir MyCode lista (list)";
$l['setting_allowlistmycode_desc'] = "Establecer 'Sí' permite a los usuarios usar el MyCode para generar listas.";
$l['setting_allowcodemycode'] = "Permitir MyCode código (code)";
$l['setting_allowcodemycode_desc'] = "Establecer 'Sí' permite a los usuarios usar el MyCodes para código code.";
$l['setting_allowsymbolmycode'] = "Permitir MyCodes símbolos (Symbol)";
$l['setting_allowsymbolmycode_desc'] = "Establecer 'Sí' permite a los usuarios usar los MyCodes (tm), (c) y (r).";
$l['setting_allowmemycode'] = "Permitir MyCodes yo (me)";
$l['setting_allowmemycode_desc'] = "Establecer 'Sí' permite a los usuarios usar los MyCodes /me y /slap.";
$l['setting_guestimages'] = "Parsear MyCode [img] a los invitados";
$l['setting_guestimages_desc'] = "Establecer esto a 'Sí' permite a los invitados ver las imagenes publicadas, si no se mostrará un enlace.";
$l['setting_guestvideos'] = "Parsear MyCode [video] a los invitados";
$l['setting_guestvideos_desc'] = "Establecer esto a 'Sí' permite a los invitados ver los videos publicados, si no se mostrará un enlace.";
/**************************************************************************************************************************************************/

// Grupo 23 cpprefs
$l['setting_group_cpprefs'] = "Opciones del panel de control (Global)";
$l['setting_group_cpprefs_desc'] = "Esta sección te permite configurar las preferencias globales del panel de administración.";
//Ajustes
$l['setting_cplanguage'] = "Idioma del panel de control";
$l['setting_cplanguage_desc'] = "El idioma del panel de control.";
$l['setting_cpstyle'] = "Estilo del panel de control";
$l['setting_cpstyle_desc'] = "Estilo por defecto para el panel de control. Los estilos están dentro de la carpeta 'styles'. El nombre de la carpeta dentro de 'styles' será el título del estilo, dentro de la carpeta del estilo estará el archivo de estilos css.";
$l['setting_maxloginattempts'] = "Número máximo de intentos de inicio de sesión";
$l['setting_maxloginattempts_desc'] = "El número máximo de intentos para iniciar sesión antes de bloquearlo. Establece 0 para desactivar.";
$l['setting_loginattemptstimeout'] = "Tiempo de espera tras fallar el número máximo de intentos";
$l['setting_loginattemptstimeout_desc'] = "Si la persona excede el número máximo de intentos para iniciar sesión, ¿Cuanto tiempo tiene que esperar antes de poder intentarlo de nuevo (En minutos)? Establecer como '0' para deshabilitar.";
/**************************************************************************************************************************************************/

//Grupo 24 mailsettings
$l['setting_group_mailsettings'] = "Ajustes de correo (Mailing)";
$l['setting_group_mailsettings_desc'] = "Esta sección te permite configurar varios aspectos del sistema de emails del MyBB, como enviar los emails con la función 'mail' del PHP o otro servidor SMTP.";
//Ajustes
$l['setting_mail_handler'] = "Tipo de envío";
$l['setting_mail_handler_desc'] = "Aquí seleccionas el tipo de envío de emails.";
$l['setting_smtp_host'] = "Servidor SMTP";
$l['setting_smtp_host_desc'] = "El servidor SMTP que se usará para enviar los emails a través de él.<br />Solo necesario si has seleccionado 'SMTP mail' en tipo de envío.";
$l['setting_smtp_port'] = "Puerto SMTP";
$l['setting_smtp_port_desc'] = "Puerto que utiliza el servidor SMTP para enviar los emails a través de él.<br />Solo necesario si has seleccionado 'SMTP mail' en tipo de envío.";
$l['setting_smtp_user'] = "Usuario SMTP";
$l['setting_smtp_user_desc'] = "Nombre de usuario para autentificarse con el servidor SMTP.<br />Solo necesario si has seleccionado 'SMTP mail' en tipo de envío y el servidor SMTP necesita autentificación.";
$l['setting_smtp_pass'] = "Contraseña SMTP";
$l['setting_smtp_pass_desc'] = "Contraseña para autentificarse con el servidor SMTP.<br />Solo necesario si has seleccionado 'SMTP mail' en tipo de envío y el servidor SMTP necesita autentificación.";
$l['setting_secure_smtp'] = "Modo de Encriptación SMTP";
$l['setting_secure_smtp_desc'] = "Selecciona la encriptación necesaria para comunicarse con el servidor SMTP.<br />Solo necesario si has seleccionado 'SMTP mail' en tipo de envío.";
$l['setting_secure_smtp_0'] = "Sin encriptación";
$l['setting_secure_smtp_1'] = "Encriptación SSL";
$l['setting_secure_smtp_2'] = "Encriptación TLS";
$l['setting_mail_parameters'] = "Parámetros adicionales para mail() de PHP";
$l['setting_mail_parameters_desc'] = "Este ajuste te permite establecer otros parámetros para la función mail() de PHP. <br />Solo necesario si has seleccionado 'PHP mail' en tipo de envío. <a href=\"http://php.net/function.mail\" target=\"_blank\" rel=\"noopener\">Más información</a>";
$l['setting_mail_logging'] = "Guardar envíos de correo";
$l['setting_mail_logging_desc'] = "Este ajuste te permite almacenar todos los correos salientes enviados a través de la función 'Enviar tema a un amigo'. En muchos países es ilegal almacenar todo el contenido.";
$l['setting_mail_logging_0'] = "Desactivar guardado";
$l['setting_mail_logging_1'] = "Almacenar correos sin contenido";
$l['setting_mail_logging_2'] = "Almacenar siempre";
$l['setting_mail_message_id'] = "Agregar un ID al mensaje en las cabeceras del email";
$l['setting_mail_message_id_desc'] = "Desactivando esta opción en muchos servidores compartidos resuelve problemas con los emails del foro que son marcados como spam.";
/**************************************************************************************************************************************************/

//Grupo 25 contactsettings
$l['setting_group_contactsettings'] = "Ajustes de contacto";
$l['setting_group_contactsettings_desc'] = "Esta sección te permite configurar varias opciones para cambiar el comportamiento de la página de contacto (contact.php).";
//Ajustes
$l['setting_contact'] = "Activar página de contacto";
$l['setting_contact_desc'] = "Establecer 'Sí' permite acceder a la página de contacto.";
$l['setting_contact_guests'] = "Desactivar la página de contacto a los invitados";
$l['setting_contact_guests_desc'] = "Establece 'Sí' para no permitir el acceso a los invitados a la página de contacto.";
$l['setting_contact_badwords'] = "Activar filtros de palabras";
$l['setting_contact_badwords_desc'] = "Establece 'Sí' para pasar el asunto y el mensaje por el filtro de palabras antes de ser enviado.";
$l['setting_contact_maxsubjectlength'] = "Longitud máxima del asunto";
$l['setting_contact_maxsubjectlength_desc'] = "Número máximo de caracteres (bytes) que se permiten en el asunto. Establecer a 0 permite longitud ilimitada.";
$l['setting_contact_minmessagelength'] = "Longitud mínima del mensaje";
$l['setting_contact_minmessagelength_desc'] = "Número mínimo de caracteres (bytes) que se permiten en el mensaje. Establecer a 0 desactiva el mínimo.";
$l['setting_contact_maxmessagelength'] = "Longitud máxima del mensaje";
$l['setting_contact_maxmessagelength_desc'] = "Número máximo de caracteres (bytes) que se permiten en el mensaje. Establecer a 0 permite longitud ilimitada.";
/**************************************************************************************************************************************************/

//Grupo 26 purgespammer
$l['setting_group_purgespammer'] = "Expulsar spammer";
$l['setting_group_purgespammer_desc'] = "Esta sección te permite cambiar los ajustes de la función expulsar spammer.";
//Ajustes
$l['setting_purgespammergroups'] = "Grupos permitidos";
$l['setting_purgespammergroups_desc'] = "Selecciona los grupos que tienen permitido usar 'Expulsar spammer'.";
$l['setting_purgespammerpostlimit'] = "Límite de mensajes";
$l['setting_purgespammerpostlimit_desc'] = "Este ajuste evita que esta herramienta se utilice en usuarios que tienen más de una cierta cantidad de mensajes, para que no se utilice en miembros activos. Establecer 0 desactivará el límite, sin embargo, esto no es recomendable.";
$l['setting_purgespammerbandelete'] = "Suspender o eliminar spammers";
$l['setting_purgespammerbandelete_desc'] = "¿Quieres suspender o eliminar a los spammers con esta herramienta?";
$l['setting_purgespammerbandelete_ban'] = "Suspensión permanente";
$l['setting_purgespammerbandelete_delete'] = "Eliminar completamente";
$l['setting_purgespammerbangroup'] = "Grupo de usuarios para la suspensión";
$l['setting_purgespammerbangroup_desc'] = "Escoge el grupo de usuario en el que se moverán los usuarios expulsados. Por defecto se mueven al grupo general de 'Suspendidos'.";
$l['setting_purgespammerbanreason'] = "Razón de suspensión";
$l['setting_purgespammerbanreason_desc'] = "Razón que se usará para suspender al usuario.";
$l['setting_purgespammerapikey'] = "Clave API Stop Forum Spam";
$l['setting_purgespammerapikey_desc'] = "Para poder enviar información sobre spammers a la base de datos Stop Forum Spam, necesitas una clave API. Puedes conseguir una <a href=\"https://www.stopforumspam.com/forum/register.php\" target=\"_blank\" rel=\"noopener\">aquí</a>. Cuando ya tengas la clave, pégala en la caja de abajo.";
/**************************************************************************************************************************************************/

//Grupo 27 stopforumspam
$l['setting_group_stopforumspam'] = "Detener spam";
$l['setting_group_stopforumspam_desc'] = "Esta sección te permite cambiar los ajustes utilizados en la integración con StopForumSpam.com";
//Ajustes
$l['setting_enablestopforumspam_on_register'] = "¿Comprobar los registros?";
$l['setting_enablestopforumspam_on_register_desc'] = "¿Quieres comprobar todos los nuevos registros con la base de datos de StopForumSpam.com?";
$l['setting_stopforumspam_on_contact'] = "¿Comprobar los envíos de invitados en 'Contacto'?";
$l['setting_stopforumspam_on_contact_desc'] = "¿Quieres comprobar el email y la IP de los usuarios invitados que usen el formulario de contacto con la base de datos de StopForumSpam.com?";
$l['setting_stopforumspam_on_newreply'] = "¿Comprobar las respuestas de los invitados?";
$l['setting_stopforumspam_on_newreply_desc'] = "¿Quieres comprobar el email y la IP de los usuarios invitados cuando creen nuevas respuestas con la base de datos de StopForumSpam.com?";
$l['setting_stopforumspam_on_newthread'] = "¿Comprobar los temas de los invitados?";
$l['setting_stopforumspam_on_newthread_desc'] = "¿Quieres comprobar el email y la IP de los usuarios invitados cuando creen nuevos temas con la base de datos de StopForumSpam.com?";
$l['setting_stopforumspam_min_weighting_before_spam'] = "Ponderación mínima de StopForumSpam.com";
$l['setting_stopforumspam_min_weighting_before_spam_desc'] = "Ponderación mínima recibida de StopForumSpam para considerar un usuario como spammer. Debe ser un número entre 0 y 100.";
$l['setting_stopforumspam_check_usernames'] = "¿Comprobar nombres de usuario?";
$l['setting_stopforumspam_check_usernames_desc'] = "¿Quieres comprobar los nombres de usuario con la base de datos de StopForumSpam.com?";
$l['setting_stopforumspam_check_emails'] = "¿Comprobar emails?";
$l['setting_stopforumspam_check_emails_desc'] = "¿Quieres comprobar los emails de los usuarios con la base de datos de StopForumSpam.com?";
$l['setting_stopforumspam_check_ips'] = "¿Comprobar IPs?";
$l['setting_stopforumspam_check_ips_desc'] = "¿Quieres comprobar las ips de los usuarios con la base de datos de StopForumSpam.com?";
$l['setting_stopforumspam_block_on_error'] = "¿Bloquear si falla StopForumSpam.com?";
$l['setting_stopforumspam_block_on_error_desc'] = "Si ocurre un error al recuperar la información de la API de StopForumSpam.com, ¿Se debe bloquear al usuario?";
$l['setting_stopforumspam_log_blocks'] = "Historial de bloqueos";
$l['setting_stopforumspam_log_blocks_desc'] = "Establece 'Sí' si quieres guardar el historial de bloqueos de StopForumSpam.com en tu foro.";
/**************************************************************************************************************************************************/

//Grupo 27 contactdetails
$l['setting_group_contactdetails'] = "Detalles de contacto";
$l['setting_group_contactdetails_desc'] = "Esta sección te permite cambiar los ajustes de los campos de contacto de los usuarios.";
//Ajustes
$l['setting_allowicqfield'] = "Permitir el campo Número ICQ";
$l['setting_allowicqfield_desc'] = "Selecciona los grupos de usuarios que tienen permitido usar el campo de contacto Número ICQ.";
$l['setting_allowaimfield'] = "Permitir  el campo AIM";
$l['setting_allowaimfield_desc'] = "Selecciona los grupos de usuarios que tienen permitido usar el campo de contacto AIM.";
$l['setting_allowyahoofield'] = "Permitir  el campo Yahoo!";
$l['setting_allowyahoofield_desc'] = "Selecciona los grupos de usuarios que tienen permitido usar el campo de contacto Yahoo!.";
$l['setting_allowskypefield'] = "Permitir  el campo Skype";
$l['setting_allowskypefield_desc'] = "Selecciona los grupos de usuarios que tienen permitido usar el campo de contacto Skype.";
$l['setting_allowgooglefield'] = "Permitir  el campo Google Hangouts";
$l['setting_allowgooglefield_desc'] = "Selecciona los grupos de usuarios que tienen permitido usar el campo de contacto Google Hangouts.";
/**************************************************************************************************************************************************/

//Grupo 28 statspage
$l['setting_group_statspage'] = "Estadísticas del foro";
$l['setting_group_statspage_desc'] = "Esta sección te permite cambiar los ajustes de la página de estadísticas del foro.";
//Ajustes
$l['setting_statsenabled'] = "Activar página de estadísticas";
$l['setting_statsenabled_desc'] = "Si quieres desactivar la página de estadísticas en tu foro, establece esta opción a no.";
$l['setting_statscachetime'] = "Tiempo de la caché de estadísticas";
$l['setting_statscachetime_desc'] = "Inserta el intervalo de tiempo (en horas) en el que se refrescará la caché de la página de estadísticas. Establecer como '0' para desactivar la caché";
$l['setting_statslimit'] = "Límite de estadísticas";
$l['setting_statslimit_desc'] = "Número de temas que se mostrarán en la página de estadísticas para los de más respuestas y los más vistos. Establecer como '0' para desactivar.";
$l['setting_statstopreferrer'] = "Mostrar top de recomendaciones en la página de estadísticas";
$l['setting_statstopreferrer_desc'] = "Si quieres mostrar el top de recomendaciones en la página stats.php. Esto añade una consulta adicional.";
