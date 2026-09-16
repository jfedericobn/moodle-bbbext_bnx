<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Paquete de idioma español internacional para BigBlueButton BN Experience.
 *
 * @package   bbbext_bnx
 * @copyright 2025 onwards, Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 */

defined('MOODLE_INTERNAL') || die();

$string['activitynotfound'] = 'No se ha encontrado la actividad';
$string['addreminder'] = 'Añadir recordatorio';
$string['approvalbeforejoin'] = 'Se requiere la aprobación del moderador para unirse a la sesión +';
$string['approvalbeforejoin_default'] = 'Sala de espera activada de forma predeterminada';
$string['approvalbeforejoin_default_desc'] = 'Cuando está activada, los participantes deben esperar la aprobación de un moderador antes de unirse a una sesión de forma predeterminada.';
$string['approvalbeforejoin_editable'] = 'Permitir que el profesorado cambie la configuración de la sala de espera por actividad';
$string['approvalbeforejoin_editable_desc'] = 'Cuando está activada, el profesorado puede activar o desactivar la sala de espera en actividades individuales.';
$string['approvalbeforejoin_help'] = 'Si está activada, los participantes deben ser aprobados por un moderador antes de unirse a la sesión.';
$string['cam_default'] = 'Cámara web activada de forma predeterminada';
$string['cam_default_desc'] = 'Elija si las cámaras web están activadas o desactivadas de forma predeterminada en las nuevas actividades.';
$string['cam_editable'] = 'Permitir que el profesorado cambie la configuración de la cámara web';
$string['cam_editable_desc'] = 'Cuando está activada, el profesorado puede anular el comportamiento predeterminado de la cámara web en la configuración de la actividad.';
$string['check_emails_reminder'] = 'Comprobar recordatorios por correo electrónico';
$string['config_general_description_credentials_preconfigured'] = 'Las credenciales del servidor BigBlueButton están configuradas en config.php y no se pueden editar aquí.';
$string['emailcontent'] = 'Recordatorios por correo electrónico: contenido';
$string['emailcontent:desc'] = 'Esta configuración personaliza el mensaje enviado a las personas usuarias.';
$string['emailfooter'] = 'Información del pie de página';
$string['emailfooter:desc'] = 'Añada información adicional, como la ubicación de la institución y los datos de contacto, como pie de página de los correos electrónicos.';
$string['emailsubject'] = 'Asunto del correo electrónico';
$string['emailsubject:default'] = 'Recordatorio de la reunión {$name}';
$string['emailsubject:desc'] = 'El asunto del correo electrónico.';
$string['emailtemplate'] = 'Plantilla de correo electrónico';
$string['emailtemplate:default'] = '<p>
Hola:<br><br>
Este es un recordatorio de la próxima reunión <a href="{$url}">{$name}</a> de {$course_fullname}, programada para comenzar el {$date}.
</p>';
$string['emailtemplate:desc'] = 'La plantilla de correo electrónico para enviar recordatorios. Se pueden usar las siguientes variables:<ul>
    <li>{$course_fullname}: el nombre completo del curso</li>
    <li>{$course_shortname}: el nombre corto del curso</li>
    <li>{$date}: la fecha y hora de la reunión</li>
    <li>{$name}: el nombre de la reunión</li>
</ul>';
$string['emailunsubscribemessage'] = '<span>
Puede cancelar la suscripción a este recordatorio haciendo clic en el siguiente <a href="{$a->unsubscribeurl}">enlace para cancelar la suscripción</a>.
</span>';
$string['error:duplicate'] = 'Ya tiene un recordatorio para esta reunión con el mismo intervalo de tiempo';
$string['eventstate_changed'] = 'El estado de BNX ha cambiado';
$string['eventstate_changed_disabled_desc'] = 'Se ha desactivado el complemento bbbext_bnx.';
$string['eventstate_changed_enabled_desc'] = 'Se ha activado el complemento bbbext_bnx.';
$string['hideviewerscursor_default'] = 'Mostrar de forma predeterminada los cursores de las personas participantes';
$string['hideviewerscursor_default_desc'] = 'Elija si los cursores de las personas participantes están visibles de forma predeterminada durante las sesiones de pizarra multiusuario en nuevas actividades.';
$string['hideviewerscursor_editable'] = 'Permitir que el profesorado cambie la visibilidad del cursor';
$string['hideviewerscursor_editable_desc'] = 'Cuando está activada, el profesorado puede decidir si los cursores de las personas participantes permanecen visibles durante la colaboración en la pizarra.';
$string['invalidinstanceid'] = 'ID de actividad no válido';
$string['messageprovider:reminder'] = 'Recordatorio por correo electrónico de BigBlueButton';
$string['mic_default'] = 'Micrófono activado de forma predeterminada';
$string['mic_default_desc'] = 'Elija si los micrófonos están activados o desactivados de forma predeterminada en las nuevas actividades.';
$string['mic_editable'] = 'Permitir que el profesorado cambie la configuración del micrófono';
$string['mic_editable_desc'] = 'Cuando está activada, el profesorado puede anular el comportamiento predeterminado del micrófono en la configuración de la actividad.';
$string['mod_form_block_guestaccess'] = 'Acceso de invitados +';
$string['mod_form_block_room'] = 'Configuración de la sala +';
$string['mod_form_locksettings'] = 'Configuración de bloqueo +';
$string['mod_form_locksettings_desc'] = 'Elija qué herramientas de colaboración están disponibles para las personas participantes en esta actividad.';
$string['mod_form_overridecam'] = 'Activar cámara web';
$string['mod_form_overridehideviewerscursor'] = 'Mostrar los cursores de otras personas';
$string['mod_form_overridemic'] = 'Activar micrófono';
$string['mod_form_overridenote'] = 'Activar notas compartidas';
$string['mod_form_overrideprivatechat'] = 'Activar chat privado';
$string['mod_form_overridepublicchat'] = 'Activar chat público';
$string['mod_form_overrideuserlist'] = 'Activar lista de personas usuarias';
$string['mod_form_reminders'] = 'Recordatorios por correo electrónico +';
$string['mod_form_reminders_desc'] = 'Enviar recordatorios a las personas estudiantes como notificaciones.';
$string['navlabel'] = 'BigBlueButton +';
$string['notes_default'] = 'Notas compartidas activadas de forma predeterminada';
$string['notes_default_desc'] = 'Elija si las notas compartidas están activadas o desactivadas de forma predeterminada en las nuevas actividades.';
$string['notes_editable'] = 'Permitir que el profesorado cambie la configuración de las notas compartidas';
$string['notes_editable_desc'] = 'Cuando está activada, el profesorado puede anular el comportamiento predeterminado de las notas compartidas en la configuración de la actividad.';
$string['options_disabled'] = 'Desactivado';
$string['options_enabled'] = 'Activado';
$string['pluginname'] = 'BigBlueButton BN Experience';
$string['preview_toggle_label_close'] = 'Ocultar miniaturas de vista previa adicionales';
$string['preview_toggle_label_plural'] = 'Mostrar {$a} miniaturas más';
$string['preview_toggle_label_singular'] = 'Mostrar una miniatura más';
$string['privacy:metadata'] = 'El complemento BigBlueButton BN Experience almacena las preferencias de suscripción de las personas usuarias a los recordatorios por correo electrónico.';
$string['privacy:metadata:bbbext_bnx_reminders_guests'] = 'Suscripciones de correo electrónico de invitados que se usan para enviar recordatorios de sesiones a participantes no inscritos.';
$string['privacy:metadata:bbbext_bnx_reminders_guests:email'] = 'La dirección de correo electrónico de la persona invitada que puede recibir recordatorios de sesiones.';
$string['privacy:metadata:bbbext_bnx_reminders_guests:isenabled'] = 'Indica si la persona invitada está suscrita actualmente para recibir recordatorios.';
$string['privacy:metadata:bbbext_bnx_reminders_guests:userfrom'] = 'La persona usuaria que añadió la dirección de correo electrónico de la persona invitada para los recordatorios.';
$string['privacy:metadata:preference:bbbext_bnx_reminder'] = 'Indica si se desean recibir recordatorios sobre próximas sesiones de una actividad BigBlueButton.';
$string['privacy:reminderpreferenceno'] = 'No recibir recordatorios de próximas sesiones de la actividad BigBlueButton con ID {$a->activityid}.';
$string['privacy:reminderpreferenceyes'] = 'Recibir recordatorios de próximas sesiones de la actividad BigBlueButton con ID {$a->activityid}.';
$string['privatechat_default'] = 'Chat privado activado de forma predeterminada';
$string['privatechat_default_desc'] = 'Elija si el chat privado está activado o desactivado de forma predeterminada en las nuevas actividades.';
$string['privatechat_editable'] = 'Permitir que el profesorado cambie la configuración del chat privado';
$string['privatechat_editable_desc'] = 'Cuando está activada, el profesorado puede anular el comportamiento predeterminado del chat privado en la configuración de la actividad.';
$string['publicchat_default'] = 'Chat público activado de forma predeterminada';
$string['publicchat_default_desc'] = 'Elija si el chat público está activado o desactivado de forma predeterminada en las nuevas actividades.';
$string['publicchat_editable'] = 'Permitir que el profesorado cambie la configuración del chat público';
$string['publicchat_editable_desc'] = 'Cuando está activada, el profesorado puede anular el comportamiento predeterminado del chat público en la configuración de la actividad.';
$string['reminder'] = 'Recordatorio';
$string['reminder:message'] = 'antes de que comience la reunión';
$string['reminder:openingtime:disabled'] = 'La hora de apertura está desactivada';
$string['reminder_default'] = 'Recordatorios activados de forma predeterminada';
$string['reminder_default_desc'] = 'Cuando está activada, los recordatorios por correo electrónico para las próximas sesiones se activan de forma predeterminada en las nuevas actividades.';
$string['reminder_editable'] = 'Permitir que el profesorado cambie la configuración de recordatorios por actividad';
$string['reminder_editable_desc'] = 'Cuando está activada, el profesorado puede activar o desactivar los recordatorios por correo electrónico en actividades individuales.';
$string['reminders'] = 'Recordatorios';
$string['reminders:enabled'] = 'Enviar recordatorios por correo electrónico antes de la sesión';
$string['reminders:guestenabled'] = 'Añadir invitados a la lista de personas que recibirán el recordatorio';
$string['reminders:preferences'] = 'Preferencias de recordatorios de BigBlueButton';
$string['reminders_help'] = 'Si está activado y se ha establecido una fecha de inicio, enviar recordatorios por correo electrónico a las personas inscritas en la actividad.';
$string['section_locksettings_desc'] = 'Configure qué herramientas de colaboración están activadas de forma predeterminada y si el profesorado puede cambiarlas por actividad.';
$string['section_locksettings_heading'] = 'Configuración de bloqueo';
$string['section_reminders_desc'] = 'Enviar recordatorios por correo electrónico a las personas participantes antes de que comience una sesión.';
$string['section_reminders_heading'] = 'Recordatorios por correo electrónico';
$string['section_waitingroom_desc'] = 'Requerir la aprobación de un moderador antes de que las personas participantes puedan unirse a una sesión.';
$string['section_waitingroom_heading'] = 'Sala de espera';
$string['subscribed'] = 'Suscrito';
$string['subscribed:cancel'] = 'No se ha realizado ningún cambio en su suscripción';
$string['subscribed:success'] = 'Se ha suscrito correctamente a los recordatorios de {$a->name}.';
$string['subscriptions'] = 'Suscripciones';
$string['timespan'] = 'Intervalo de tiempo';
$string['timespan:bell'] = 'Intervalo de tiempo';
$string['timespan:p1d'] = 'Un día';
$string['timespan:p1w'] = 'Una semana';
$string['timespan:p2d'] = 'Dos días';
$string['timespan:pt1h'] = 'Una hora';
$string['timespan:pt2h'] = 'Dos horas';
$string['unsubscribe'] = 'Cancelar suscripción';
$string['unsubscribe:label'] = '¿Está seguro de que desea cancelar la suscripción?';
$string['unsubscribe:managepreferences'] = 'Gestionar las preferencias de recordatorios';
$string['unsubscribe:title'] = 'Gestionar suscripciones a recordatorios de BigBlueButton';
$string['unsubscribe:title:meeting'] = 'Cancelar la suscripción al recordatorio de la actividad BigBlueButton {$a}';
$string['unsubscribed'] = 'Suscripción cancelada';
$string['unsubscribed:success'] = 'Se ha cancelado correctamente su suscripción a los recordatorios de {$a->name}.';
$string['userlist_default'] = 'Lista de personas usuarias activada de forma predeterminada';
$string['userlist_default_desc'] = 'Elija si la lista de personas usuarias está activada o desactivada de forma predeterminada en las nuevas actividades.';
$string['userlist_editable'] = 'Permitir que el profesorado cambie la configuración de la lista de personas usuarias';
$string['userlist_editable_desc'] = 'Cuando está activada, el profesorado puede anular el comportamiento predeterminado de la lista de personas usuarias en la configuración de la actividad.';
$string['view_recording_list_actionbar_publish'] = 'Hacer visible';
$string['view_recording_list_actionbar_unpublish'] = 'Ocultar';
$string['view_recording_protect_confirmation'] = '¿Está seguro de que desea hacer privada esta grabación {$a}?';
$string['view_recording_publish_confirmation'] = '¿Está seguro de que desea hacer visible esta grabación {$a}?';
$string['view_recording_search'] = 'Buscar';
$string['view_recording_search_placeholder'] = 'Buscar grabaciones';
$string['view_recording_unprotect_confirmation'] = '¿Está seguro de que desea hacer pública esta grabación {$a}?';
$string['view_recording_unpublish_confirmation'] = '¿Está seguro de que desea ocultar esta grabación {$a}?';
