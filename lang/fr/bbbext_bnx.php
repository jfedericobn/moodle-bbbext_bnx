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
 * Paquet de langue français international pour BigBlueButton BN Experience.
 *
 * @package   bbbext_bnx
 * @copyright 2025 onwards, Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 */

defined('MOODLE_INTERNAL') || die();

$string['activitynotfound'] = 'Activité introuvable';
$string['addreminder'] = 'Ajouter un rappel';
$string['approvalbeforejoin'] = 'Approbation du modérateur requise pour rejoindre la session +';
$string['approvalbeforejoin_default'] = 'Salle d\'attente activée par défaut';
$string['approvalbeforejoin_default_desc'] = 'Lorsqu\'elle est activée, les participants doivent attendre l\'approbation d\'un modérateur avant de rejoindre une session par défaut.';
$string['approvalbeforejoin_editable'] = 'Autoriser les enseignants à modifier le paramètre de la salle d\'attente par activité';
$string['approvalbeforejoin_editable_desc'] = 'Lorsqu\'elle est activée, les enseignants peuvent activer ou désactiver la salle d\'attente pour chaque activité.';
$string['approvalbeforejoin_help'] = 'Si cette option est activée, les participants doivent être approuvés par un modérateur avant de rejoindre la session.';
$string['cam_default'] = 'Webcam activée par défaut';
$string['cam_default_desc'] = 'Choisissez si les webcams sont activées ou désactivées par défaut dans les nouvelles activités.';
$string['cam_editable'] = 'Autoriser les enseignants à modifier le paramètre de la webcam';
$string['cam_editable_desc'] = 'Lorsqu\'elle est activée, les enseignants peuvent remplacer le comportement par défaut de la webcam dans les paramètres de l\'activité.';
$string['check_emails_reminder'] = 'Vérifier les rappels par courriel';
$string['config_general_description_credentials_preconfigured'] = 'Les identifiants du serveur BigBlueButton sont configurés dans config.php et ne peuvent pas être modifiés ici.';
$string['emailcontent'] = 'Rappels par courriel : contenu';
$string['emailcontent:desc'] = 'Ces paramètres permettent de personnaliser le message envoyé aux utilisateurs.';
$string['emailfooter'] = 'Informations de pied de page';
$string['emailfooter:desc'] = 'Ajoutez des informations supplémentaires, telles que l\'emplacement de l\'établissement et les coordonnées, comme pied de page des courriels.';
$string['emailsubject'] = 'Objet du courriel';
$string['emailsubject:default'] = 'Rappel pour la réunion {$name}';
$string['emailsubject:desc'] = 'L\'objet du courriel.';
$string['emailtemplate'] = 'Modèle de courriel';
$string['emailtemplate:default'] = '<p>
Bonjour,<br><br>
Ceci est un rappel concernant la prochaine réunion <a href="{$url}">{$name}</a> du cours {$course_fullname}, prévue pour commencer le {$date}.
</p>';
$string['emailtemplate:desc'] = 'Le modèle de courriel utilisé pour l\'envoi des rappels. Les variables suivantes peuvent être utilisées :<ul>
    <li>{$course_fullname} : le nom complet du cours</li>
    <li>{$course_shortname} : le nom abrégé du cours</li>
    <li>{$date} : la date et l\'heure de la réunion</li>
    <li>{$name} : le nom de la réunion</li>
</ul>';
$string['emailunsubscribemessage'] = '<span>
Vous pouvez vous désabonner de ce rappel en cliquant sur le <a href="{$a->unsubscribeurl}">lien de désabonnement</a> suivant.
</span>';
$string['error:duplicate'] = 'Vous avez déjà un rappel pour cette réunion avec le même délai';
$string['eventstate_changed'] = 'L\'état de BNX a changé';
$string['eventstate_changed_disabled_desc'] = 'Le plugin bbbext_bnx a été désactivé.';
$string['eventstate_changed_enabled_desc'] = 'Le plugin bbbext_bnx a été activé.';
$string['hideviewerscursor_default'] = 'Afficher les curseurs des participants par défaut';
$string['hideviewerscursor_default_desc'] = 'Choisissez si les curseurs des participants sont visibles par défaut lors des sessions de tableau blanc multi-utilisateur dans les nouvelles activités.';
$string['hideviewerscursor_editable'] = 'Autoriser les enseignants à modifier la visibilité des curseurs';
$string['hideviewerscursor_editable_desc'] = 'Lorsqu\'elle est activée, les enseignants peuvent décider si les curseurs des participants restent visibles pendant la collaboration sur le tableau blanc.';
$string['invalidinstanceid'] = 'Identifiant d\'activité non valide';
$string['messageprovider:reminder'] = 'Rappel BigBlueButton par courriel';
$string['mic_default'] = 'Microphone activé par défaut';
$string['mic_default_desc'] = 'Choisissez si les microphones sont activés ou désactivés par défaut dans les nouvelles activités.';
$string['mic_editable'] = 'Autoriser les enseignants à modifier le paramètre du microphone';
$string['mic_editable_desc'] = 'Lorsqu\'elle est activée, les enseignants peuvent remplacer le comportement par défaut du microphone dans les paramètres de l\'activité.';
$string['mod_form_block_guestaccess'] = 'Accès invité +';
$string['mod_form_block_room'] = 'Paramètres de la salle +';
$string['mod_form_locksettings'] = 'Paramètres de verrouillage +';
$string['mod_form_locksettings_desc'] = 'Choisissez les outils de collaboration disponibles pour les participants dans cette activité.';
$string['mod_form_overridecam'] = 'Activer la webcam';
$string['mod_form_overridehideviewerscursor'] = 'Afficher les curseurs des autres utilisateurs';
$string['mod_form_overridemic'] = 'Activer le microphone';
$string['mod_form_overridenote'] = 'Activer les notes partagées';
$string['mod_form_overrideprivatechat'] = 'Activer la messagerie privée';
$string['mod_form_overridepublicchat'] = 'Activer la messagerie publique';
$string['mod_form_overrideuserlist'] = 'Activer la liste des utilisateurs';
$string['mod_form_reminders'] = 'Rappels par courriel +';
$string['mod_form_reminders_desc'] = 'Envoyer des rappels aux étudiants sous forme de notifications.';
$string['navlabel'] = 'BigBlueButton +';
$string['notes_default'] = 'Notes partagées activées par défaut';
$string['notes_default_desc'] = 'Choisissez si les notes partagées sont activées ou désactivées par défaut dans les nouvelles activités.';
$string['notes_editable'] = 'Autoriser les enseignants à modifier le paramètre des notes partagées';
$string['notes_editable_desc'] = 'Lorsqu\'elle est activée, les enseignants peuvent remplacer le comportement par défaut des notes partagées dans les paramètres de l\'activité.';
$string['options_disabled'] = 'Désactivé';
$string['options_enabled'] = 'Activé';
$string['pluginname'] = 'BigBlueButton BN Experience';
$string['preview_toggle_label_close'] = 'Masquer les miniatures supplémentaires';
$string['preview_toggle_label_plural'] = 'Afficher {$a} miniatures supplémentaires';
$string['preview_toggle_label_singular'] = 'Afficher une miniature supplémentaire';
$string['privacy:metadata'] = 'Le plugin BigBlueButton BN Experience enregistre les préférences d\'abonnement aux rappels par courriel des utilisateurs.';
$string['privacy:metadata:bbbext_bnx_reminders_guests'] = 'Abonnements par courriel des invités utilisés pour envoyer des rappels de session aux participants non inscrits.';
$string['privacy:metadata:bbbext_bnx_reminders_guests:email'] = 'L\'adresse de courriel de l\'invité susceptible de recevoir des rappels de session.';
$string['privacy:metadata:bbbext_bnx_reminders_guests:isenabled'] = 'Indique si l\'invité est actuellement abonné aux rappels.';
$string['privacy:metadata:bbbext_bnx_reminders_guests:userfrom'] = 'L\'utilisateur qui a ajouté l\'adresse de courriel de l\'invité pour les rappels.';
$string['privacy:metadata:preference:bbbext_bnx_reminder'] = 'Indique si la personne souhaite recevoir des rappels concernant les prochaines sessions d\'une activité BigBlueButton.';
$string['privacy:reminderpreferenceno'] = 'Ne pas recevoir de rappels concernant les prochaines sessions de l\'activité BigBlueButton portant l\'identifiant {$a->activityid}.';
$string['privacy:reminderpreferenceyes'] = 'Recevoir des rappels concernant les prochaines sessions de l\'activité BigBlueButton portant l\'identifiant {$a->activityid}.';
$string['privatechat_default'] = 'Messagerie privée activée par défaut';
$string['privatechat_default_desc'] = 'Choisissez si la messagerie privée est activée ou désactivée par défaut dans les nouvelles activités.';
$string['privatechat_editable'] = 'Autoriser les enseignants à modifier le paramètre de messagerie privée';
$string['privatechat_editable_desc'] = 'Lorsqu\'elle est activée, les enseignants peuvent remplacer le comportement par défaut de la messagerie privée dans les paramètres de l\'activité.';
$string['publicchat_default'] = 'Messagerie publique activée par défaut';
$string['publicchat_default_desc'] = 'Choisissez si la messagerie publique est activée ou désactivée par défaut dans les nouvelles activités.';
$string['publicchat_editable'] = 'Autoriser les enseignants à modifier le paramètre de messagerie publique';
$string['publicchat_editable_desc'] = 'Lorsqu\'elle est activée, les enseignants peuvent remplacer le comportement par défaut de la messagerie publique dans les paramètres de l\'activité.';
$string['reminder'] = 'Rappel';
$string['reminder:message'] = 'avant le début de la réunion';
$string['reminder:openingtime:disabled'] = 'L\'heure d\'ouverture est désactivée';
$string['reminder_default'] = 'Rappels activés par défaut';
$string['reminder_default_desc'] = 'Lorsqu\'elle est activée, les rappels par courriel des prochaines sessions sont activés par défaut dans les nouvelles activités.';
$string['reminder_editable'] = 'Autoriser les enseignants à modifier le paramètre des rappels par activité';
$string['reminder_editable_desc'] = 'Lorsqu\'elle est activée, les enseignants peuvent activer ou désactiver les rappels par courriel dans chaque activité.';
$string['reminders'] = 'Rappels';
$string['reminders:enabled'] = 'Envoyer des rappels par courriel avant la session';
$string['reminders:guestenabled'] = 'Ajouter des invités à la liste des utilisateurs qui recevront le rappel';
$string['reminders:preferences'] = 'Préférences de rappel BigBlueButton';
$string['reminders_help'] = 'Si cette option est activée et qu\'une date de début est définie, envoyer des rappels par courriel aux utilisateurs inscrits à l\'activité.';
$string['section_locksettings_desc'] = 'Configurez les outils de collaboration activés par défaut et indiquez si les enseignants peuvent les modifier par activité.';
$string['section_locksettings_heading'] = 'Paramètres de verrouillage';
$string['section_reminders_desc'] = 'Envoyer des rappels par courriel aux participants avant le début d\'une session.';
$string['section_reminders_heading'] = 'Rappels par courriel';
$string['section_waitingroom_desc'] = 'Exiger l\'approbation d\'un modérateur avant que les participants puissent rejoindre une session.';
$string['section_waitingroom_heading'] = 'Salle d\'attente';
$string['subscribed'] = 'Abonné';
$string['subscribed:cancel'] = 'Aucune modification n\'a été apportée à votre abonnement';
$string['subscribed:success'] = 'Vous êtes maintenant abonné aux rappels de {$a->name}.';
$string['subscriptions'] = 'Abonnements';
$string['timespan'] = 'Délai';
$string['timespan:bell'] = 'Délai';
$string['timespan:p1d'] = 'Un jour';
$string['timespan:p1w'] = 'Une semaine';
$string['timespan:p2d'] = 'Deux jours';
$string['timespan:pt1h'] = 'Une heure';
$string['timespan:pt2h'] = 'Deux heures';
$string['unsubscribe'] = 'Se désabonner';
$string['unsubscribe:label'] = 'Êtes-vous sûr de vouloir vous désabonner ?';
$string['unsubscribe:managepreferences'] = 'Gérer les préférences de rappel';
$string['unsubscribe:title'] = 'Gérer les abonnements aux rappels BigBlueButton';
$string['unsubscribe:title:meeting'] = 'Se désabonner du rappel pour l\'activité BigBlueButton {$a}';
$string['unsubscribed'] = 'Désabonné';
$string['unsubscribed:success'] = 'Vous avez été désabonné des rappels de {$a->name}.';
$string['userlist_default'] = 'Liste des utilisateurs activée par défaut';
$string['userlist_default_desc'] = 'Choisissez si la liste des utilisateurs est activée ou désactivée par défaut dans les nouvelles activités.';
$string['userlist_editable'] = 'Autoriser les enseignants à modifier le paramètre de la liste des utilisateurs';
$string['userlist_editable_desc'] = 'Lorsqu\'elle est activée, les enseignants peuvent remplacer le comportement par défaut de la liste des utilisateurs dans les paramètres de l\'activité.';
$string['view_recording_list_actionbar_publish'] = 'Rendre visible';
$string['view_recording_list_actionbar_unpublish'] = 'Masquer';
$string['view_recording_protect_confirmation'] = 'Êtes-vous sûr de vouloir rendre cet enregistrement {$a} privé ?';
$string['view_recording_publish_confirmation'] = 'Êtes-vous sûr de vouloir rendre cet enregistrement {$a} visible ?';
$string['view_recording_search'] = 'Rechercher';
$string['view_recording_search_placeholder'] = 'Rechercher des enregistrements';
$string['view_recording_unprotect_confirmation'] = 'Êtes-vous sûr de vouloir rendre cet enregistrement {$a} public ?';
$string['view_recording_unpublish_confirmation'] = 'Êtes-vous sûr de vouloir masquer cet enregistrement {$a} ?';
