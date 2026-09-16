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
 * Paquet d'idioma català internacional per a BigBlueButton BN Experience.
 *
 * @package   bbbext_bnx
 * @copyright 2025 onwards, Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 */

defined('MOODLE_INTERNAL') || die();

$string['activitynotfound'] = 'No s\'ha trobat l\'activitat';
$string['addreminder'] = 'Afegeix un recordatori';
$string['approvalbeforejoin'] = 'Cal l\'aprovació del moderador per unir-se a la sessió +';
$string['approvalbeforejoin_default'] = 'Sala d\'espera activada per defecte';
$string['approvalbeforejoin_default_desc'] = 'Quan està activada, els participants han d\'esperar l\'aprovació d\'un moderador abans d\'unir-se a una sessió per defecte.';
$string['approvalbeforejoin_editable'] = 'Permet que el professorat canviï la configuració de la sala d\'espera per activitat';
$string['approvalbeforejoin_editable_desc'] = 'Quan està activada, el professorat pot activar o desactivar la sala d\'espera en activitats individuals.';
$string['approvalbeforejoin_help'] = 'Si està activada, els participants han de ser aprovats per un moderador abans d\'unir-se a la sessió.';
$string['cam_default'] = 'Càmera web activada per defecte';
$string['cam_default_desc'] = 'Trieu si les càmeres web estan activades o desactivades per defecte en les activitats noves.';
$string['cam_editable'] = 'Permet que el professorat canviï la configuració de la càmera web';
$string['cam_editable_desc'] = 'Quan està activada, el professorat pot substituir el comportament per defecte de la càmera web en la configuració de l\'activitat.';
$string['check_emails_reminder'] = 'Comprova els recordatoris per correu electrònic';
$string['config_general_description_credentials_preconfigured'] = 'Les credencials del servidor BigBlueButton estan configurades a config.php i no es poden editar aquí.';
$string['emailcontent'] = 'Recordatoris per correu electrònic: contingut';
$string['emailcontent:desc'] = 'Aquesta configuració personalitza el missatge que s\'envia als usuaris.';
$string['emailfooter'] = 'Informació del peu de pàgina';
$string['emailfooter:desc'] = 'Afegiu informació addicional, com ara la ubicació de la institució i les dades de contacte, com a peu de pàgina dels correus electrònics.';
$string['emailsubject'] = 'Assumpte del correu electrònic';
$string['emailsubject:default'] = 'Recordatori de la reunió {$name}';
$string['emailsubject:desc'] = 'L\'assumpte del correu electrònic.';
$string['emailtemplate'] = 'Plantilla de correu electrònic';
$string['emailtemplate:default'] = '<p>
Hola,<br><br>
Aquest és un recordatori de la propera reunió <a href="{$url}">{$name}</a> del curs {$course_fullname}, programada per començar el {$date}.
</p>';
$string['emailtemplate:desc'] = 'La plantilla de correu electrònic per enviar recordatoris. Es poden utilitzar les variables següents:<ul>
    <li>{$course_fullname}: el nom complet del curs</li>
    <li>{$course_shortname}: el nom curt del curs</li>
    <li>{$date}: la data i l\'hora de la reunió</li>
    <li>{$name}: el nom de la reunió</li>
</ul>';
$string['emailunsubscribemessage'] = '<span>
Podeu cancel·lar la subscripció a aquest recordatori fent clic en l\'<a href="{$a->unsubscribeurl}">enllaç per cancel·lar la subscripció</a> següent.
</span>';
$string['error:duplicate'] = 'Ja teniu un recordatori per a aquesta reunió amb el mateix interval de temps';
$string['eventstate_changed'] = 'L\'estat de BNX ha canviat';
$string['eventstate_changed_disabled_desc'] = 'El connector bbbext_bnx s\'ha desactivat.';
$string['eventstate_changed_enabled_desc'] = 'El connector bbbext_bnx s\'ha activat.';
$string['hideviewerscursor_default'] = 'Mostra els cursors dels participants per defecte';
$string['hideviewerscursor_default_desc'] = 'Trieu si els cursors dels participants són visibles per defecte durant les sessions de pissarra multiusuari en activitats noves.';
$string['hideviewerscursor_editable'] = 'Permet que el professorat canviï la visibilitat dels cursors';
$string['hideviewerscursor_editable_desc'] = 'Quan està activada, el professorat pot decidir si els cursors dels participants continuen visibles durant la col·laboració a la pissarra.';
$string['invalidinstanceid'] = 'L\'identificador de l\'activitat no és vàlid';
$string['messageprovider:reminder'] = 'Recordatori de BigBlueButton per correu electrònic';
$string['mic_default'] = 'Micròfon activat per defecte';
$string['mic_default_desc'] = 'Trieu si els micròfons estan activats o desactivats per defecte en les activitats noves.';
$string['mic_editable'] = 'Permet que el professorat canviï la configuració del micròfon';
$string['mic_editable_desc'] = 'Quan està activada, el professorat pot substituir el comportament per defecte del micròfon en la configuració de l\'activitat.';
$string['mod_form_block_guestaccess'] = 'Accés de convidats +';
$string['mod_form_block_room'] = 'Configuració de la sala +';
$string['mod_form_locksettings'] = 'Configuració de bloqueig +';
$string['mod_form_locksettings_desc'] = 'Trieu quines eines de col·laboració estan disponibles per als participants en aquesta activitat.';
$string['mod_form_overridecam'] = 'Activa la càmera web';
$string['mod_form_overridehideviewerscursor'] = 'Mostra els cursors dels altres usuaris';
$string['mod_form_overridemic'] = 'Activa el micròfon';
$string['mod_form_overridenote'] = 'Activa les notes compartides';
$string['mod_form_overrideprivatechat'] = 'Activa el xat privat';
$string['mod_form_overridepublicchat'] = 'Activa el xat públic';
$string['mod_form_overrideuserlist'] = 'Activa la llista d\'usuaris';
$string['mod_form_reminders'] = 'Recordatoris per correu electrònic +';
$string['mod_form_reminders_desc'] = 'Envia recordatoris als estudiants com a notificacions.';
$string['navlabel'] = 'BigBlueButton +';
$string['notes_default'] = 'Notes compartides activades per defecte';
$string['notes_default_desc'] = 'Trieu si les notes compartides estan activades o desactivades per defecte en les activitats noves.';
$string['notes_editable'] = 'Permet que el professorat canviï la configuració de les notes compartides';
$string['notes_editable_desc'] = 'Quan està activada, el professorat pot substituir el comportament per defecte de les notes compartides en la configuració de l\'activitat.';
$string['options_disabled'] = 'Desactivat';
$string['options_enabled'] = 'Activat';
$string['pluginname'] = 'BigBlueButton BN Experience';
$string['preview_toggle_label_close'] = 'Amaga les miniatures de vista prèvia addicionals';
$string['preview_toggle_label_plural'] = 'Mostra {$a} miniatures més';
$string['preview_toggle_label_singular'] = 'Mostra una miniatura més';
$string['privacy:metadata'] = 'El connector BigBlueButton BN Experience emmagatzema les preferències de subscripció dels usuaris als recordatoris per correu electrònic.';
$string['privacy:metadata:bbbext_bnx_reminders_guests'] = 'Subscripcions de correu electrònic de convidats que s\'utilitzen per enviar recordatoris de sessions a participants no inscrits.';
$string['privacy:metadata:bbbext_bnx_reminders_guests:email'] = 'L\'adreça de correu electrònic del convidat que pot rebre recordatoris de sessions.';
$string['privacy:metadata:bbbext_bnx_reminders_guests:isenabled'] = 'Indica si el convidat està subscrit actualment per rebre recordatoris.';
$string['privacy:metadata:bbbext_bnx_reminders_guests:userfrom'] = 'L\'usuari que ha afegit l\'adreça de correu electrònic del convidat per als recordatoris.';
$string['privacy:metadata:preference:bbbext_bnx_reminder'] = 'Indica si l\'usuari vol rebre recordatoris sobre les properes sessions d\'una activitat BigBlueButton.';
$string['privacy:reminderpreferenceno'] = 'No rebre recordatoris de les properes sessions de l\'activitat BigBlueButton amb l\'identificador {$a->activityid}.';
$string['privacy:reminderpreferenceyes'] = 'Rebre recordatoris de les properes sessions de l\'activitat BigBlueButton amb l\'identificador {$a->activityid}.';
$string['privatechat_default'] = 'Xat privat activat per defecte';
$string['privatechat_default_desc'] = 'Trieu si el xat privat està activat o desactivat per defecte en les activitats noves.';
$string['privatechat_editable'] = 'Permet que el professorat canviï la configuració del xat privat';
$string['privatechat_editable_desc'] = 'Quan està activada, el professorat pot substituir el comportament per defecte del xat privat en la configuració de l\'activitat.';
$string['publicchat_default'] = 'Xat públic activat per defecte';
$string['publicchat_default_desc'] = 'Trieu si el xat públic està activat o desactivat per defecte en les activitats noves.';
$string['publicchat_editable'] = 'Permet que el professorat canviï la configuració del xat públic';
$string['publicchat_editable_desc'] = 'Quan està activada, el professorat pot substituir el comportament per defecte del xat públic en la configuració de l\'activitat.';
$string['reminder'] = 'Recordatori';
$string['reminder:message'] = 'abans que comenci la reunió';
$string['reminder:openingtime:disabled'] = 'L\'hora d\'obertura està desactivada';
$string['reminder_default'] = 'Recordatoris activats per defecte';
$string['reminder_default_desc'] = 'Quan està activada, els recordatoris per correu electrònic de les properes sessions s\'activen per defecte en les activitats noves.';
$string['reminder_editable'] = 'Permet que el professorat canviï la configuració de recordatoris per activitat';
$string['reminder_editable_desc'] = 'Quan està activada, el professorat pot activar o desactivar els recordatoris per correu electrònic en activitats individuals.';
$string['reminders'] = 'Recordatoris';
$string['reminders:enabled'] = 'Envia recordatoris per correu electrònic abans de la sessió';
$string['reminders:guestenabled'] = 'Afegeix convidats a la llista d\'usuaris que rebran el recordatori';
$string['reminders:preferences'] = 'Preferències de recordatoris de BigBlueButton';
$string['reminders_help'] = 'Si està activat i s\'ha establert una data d\'inici, envia recordatoris per correu electrònic als usuaris inscrits a l\'activitat.';
$string['section_locksettings_desc'] = 'Configureu quines eines de col·laboració estan activades per defecte i si el professorat les pot canviar per activitat.';
$string['section_locksettings_heading'] = 'Configuració de bloqueig';
$string['section_reminders_desc'] = 'Envia recordatoris per correu electrònic als participants abans que comenci una sessió.';
$string['section_reminders_heading'] = 'Recordatoris per correu electrònic';
$string['section_waitingroom_desc'] = 'Exigeix l\'aprovació d\'un moderador abans que els participants puguin unir-se a una sessió.';
$string['section_waitingroom_heading'] = 'Sala d\'espera';
$string['subscribed'] = 'Subscrit';
$string['subscribed:cancel'] = 'No s\'ha fet cap canvi a la vostra subscripció';
$string['subscribed:success'] = 'Us heu subscrit correctament als recordatoris de {$a->name}.';
$string['subscriptions'] = 'Subscripcions';
$string['timespan'] = 'Interval de temps';
$string['timespan:bell'] = 'Interval de temps';
$string['timespan:p1d'] = 'Un dia';
$string['timespan:p1w'] = 'Una setmana';
$string['timespan:p2d'] = 'Dos dies';
$string['timespan:pt1h'] = 'Una hora';
$string['timespan:pt2h'] = 'Dues hores';
$string['unsubscribe'] = 'Cancel·la la subscripció';
$string['unsubscribe:label'] = 'Esteu segur que voleu cancel·lar la subscripció?';
$string['unsubscribe:managepreferences'] = 'Gestiona les preferències de recordatoris';
$string['unsubscribe:title'] = 'Gestiona les subscripcions als recordatoris de BigBlueButton';
$string['unsubscribe:title:meeting'] = 'Cancel·la la subscripció al recordatori de l\'activitat BigBlueButton {$a}';
$string['unsubscribed'] = 'Subscripció cancel·lada';
$string['unsubscribed:success'] = 'S\'ha cancel·lat correctament la vostra subscripció als recordatoris de {$a->name}.';
$string['userlist_default'] = 'Llista d\'usuaris activada per defecte';
$string['userlist_default_desc'] = 'Trieu si la llista d\'usuaris està activada o desactivada per defecte en les activitats noves.';
$string['userlist_editable'] = 'Permet que el professorat canviï la configuració de la llista d\'usuaris';
$string['userlist_editable_desc'] = 'Quan està activada, el professorat pot substituir el comportament per defecte de la llista d\'usuaris en la configuració de l\'activitat.';
$string['view_recording_list_actionbar_publish'] = 'Fes visible';
$string['view_recording_list_actionbar_unpublish'] = 'Amaga';
$string['view_recording_protect_confirmation'] = 'Esteu segur que voleu fer privada aquesta gravació {$a}?';
$string['view_recording_publish_confirmation'] = 'Esteu segur que voleu fer visible aquesta gravació {$a}?';
$string['view_recording_search'] = 'Cerca';
$string['view_recording_search_placeholder'] = 'Cerca gravacions';
$string['view_recording_unprotect_confirmation'] = 'Esteu segur que voleu fer pública aquesta gravació {$a}?';
$string['view_recording_unpublish_confirmation'] = 'Esteu segur que voleu amagar aquesta gravació {$a}?';
