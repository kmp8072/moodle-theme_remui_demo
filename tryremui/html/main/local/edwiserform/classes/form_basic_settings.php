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
 * Form basic settings class.
 * @package   local_edwiserform
 * @copyright (c) 2020 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Yogesh Shirsath
 * @author    Sudam
 */

namespace local_edwiserform;

defined('MOODLE_INTERNAL') || die;

use moodleform;
use context_system;
use moodle_url;

/**
 * Edwiser Forms basic settings definition.
 * @copyright (c) 2020 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class form_basic_settings extends moodleform {

    /**
     * Constructor to initialize required variables
     *
     * @param mixed $action the action attribute for the form. If empty defaults to auto detect the
     *              current url. If a moodle_url object then outputs params as hidden variables.
     * @param mixed $customdata if your form defintion method needs access to data such as $course
     *              $cm, etc. to construct the form definition then pass it in this array. You can
     *              use globals for somethings.
     * @param string $method if you set this to anything other than 'post' then _GET and _POST will
     *               be merged and used as incoming data to the form.
     * @param string $target target frame for form submission. You will rarely use this. Don't use
     *               it if you don't need to as the target attribute is deprecated in xhtml strict.
     * @param mixed $attributes you can pass a string of html attributes here or an array.
     *               Special attribute 'data-random-ids' will randomise generated elements ids. This
     *               is necessary when there are several forms on the same page.
     * @param bool $editable
     * @param array $ajaxformdata Forms submitted via ajax, must pass their data here, instead of relying on _GET and _POST.
     */
    public function __construct(
        $action = null,
        $customdata = null,
        $method = 'post',
        $target = '',
        $attributes = null,
        $editable = true,
        $ajaxformdata = null
    ) {
        parent::__construct(
            $action,
            $customdata,
            $method,
            $target,
            array("id" => "efb-basic-form-settings"),
            $editable,
            $ajaxformdata
        );
    }

    /**
     * Method defines the form basic settings elements.
     *
     * @since Edwiser Form 1.2.0
     */
    protected function definition() {
        global $PAGE, $CFG;
        $form           = $this->_form;
        // Defines the form based events list.
        $events = array();
        $plugins = $this->_customdata['plugins'];
        $teacher = $this->_customdata['teacher'];
        $eventlist = [];
        $pluginhassetting = [];
        $multiplesubmission = [];
        $nonloggedin = [];
        foreach ($plugins as $pluginname => $plugin) {
            if ($teacher == true && !$plugin->teacher_allowed()) {
                continue;
            }
            $events[$pluginname] = get_string("efb-event-$pluginname-name", "edwiserformevents_$pluginname");
            if ($plugin->has_event()) {
                $eventlist[$pluginname] = get_string("efb-event-$pluginname-name", "edwiserformevents_$pluginname");
            }
            if ($plugin->has_settings()) {
                $pluginhassetting[] = $pluginname;
            }
            if ($plugin->support_multiple_submissions()) {
                $multiplesubmission[] = $pluginname;
            }
            if (!$plugin->support_non_logged_in()) {
                $nonloggedin[] = $pluginname;
            }
        }
        $this->get_tabs($form, $pluginhassetting);
        $form->addElement("hidden", "id", null);
        $form->addElement("select", "type", get_string("efb-lbl-event", "local_edwiserform"), $events);
        $form->setType("id", PARAM_INT);
        $form->addElement("html", "<div class='efb-settings-tab-content tab-content'>");
        $this->get_general_settings($form, $multiplesubmission, $nonloggedin);
        $this->get_notification_settings($form);
        $this->get_confirmation_settings($form);
        $this->get_event_settings($form, $eventlist);
        $form->addElement("html", "</div>");
        $PAGE->requires->data_for_js('pluginhassetting', $pluginhassetting);

    }

    /**
     * Add general settings for the form like title, description, data edit and form scheduling
     *
     * @param stdClass $form               Moodle form object
     * @param array    $multiplesubmission Forms which support multiple submission
     * @param array    $nonloggedin        Forms which support submission of non logged users
     * @since Edwiser Form 1.1.0
     */
    private function get_general_settings(&$form, $multiplesubmission, $nonloggedin) {
        $form->addElement("html", "<div class='efb-settings-tab active' id='efb-settings-general'>");
        $form->addElement("text", "title", get_string("efb-lbl-title", "local_edwiserform"), null);
        $form->addRule('title', get_string("efb-lbl-title-warning", "local_edwiserform"), "required", null, "client");
        $form->setType("title", PARAM_TEXT);
        $form->addElement("textarea", "description", get_string("efb-lbl-description", "local_edwiserform"), null);
        $form->setType("description", PARAM_TEXT);
        $form->addElement(
            "checkbox",
            "editdata",
            get_string("efb-lbl-allowedit", "local_edwiserform"),
            get_string('efb-lbl-allowedit-desc', 'local_edwiserform')
        );
        $form->addElement(
            'date_time_selector',
            'allowsubmissionsfromdate',
            get_string('allowsubmissionsfromdate', 'local_edwiserform'),
            array('optional' => true)
        );
        $form->addElement(
            'date_time_selector',
            'allowsubmissionstodate',
            get_string('allowsubmissionstodate', 'local_edwiserform'),
            array('optional' => true)
        );

        // Success message.
        $context = context_system::instance();
        $form->addElement(
            'editor',
            'success_message',
            get_string('success_message', 'local_edwiserform'),
            null,
            array(
                'maxfiles' => 0
            )
        );
        $form->setDefault("success_message", get_string('submission-successful', 'local_edwiserform'));

        $form->addElement("html", "</div>");
        if (!empty($multiplesubmission)) {
            foreach ($multiplesubmission as $pluginname) {
                $form->hideif('editdata', 'type', 'eq', $pluginname);
            }
        }
    }

    /**
     * Add notiication settings for the form like notifi_email, notifi_email_subject, notifi_email_body
     *
     * @param stdClass $form
     * @since Edwiser Form 1.0.0
     */
    private function get_notification_settings(&$form) {
        $form->addElement("html", "<div class='efb-settings-tab' id='efb-settings-notification'>");
        $form->addElement(
            "checkbox",
            "enable_notification",
            get_string("efb-enable-notification", "local_edwiserform"),
            get_string('efb-enable-notification-desc', 'local_edwiserform')
        );
        $form->addElement("text", "notifi_email", get_string("efb-lbl-notifi-email", "local_edwiserform"), null);
        $form->setType("notifi_email", PARAM_TEXT);
        $form->addElement(
            "text",
            "notifi_email_subject",
            get_string('efb-notify-email-subject-setting', 'local_edwiserform'),
            null
        );
        $form->setDefault("notifi_email_subject", get_string('efb-notify-email-subject', 'local_edwiserform'));
        $form->setType("notifi_email_subject", PARAM_TEXT);
        $context = context_system::instance();
        $form->addElement(
            "editor",
            "notifi_email_body",
            get_string("efb-notify-email-body-setting", "local_edwiserform"),
            null,
            array(
                'maxfiles' => EDITOR_UNLIMITED_FILES,
                'noclean' => true,
                'context' => $context,
                'subdirs' => false
            )
        )->setValue(array('text' => get_string('efb-notify-email-body', 'local_edwiserform')));
        $form->setType("notifi_email_message", PARAM_RAW);
        $form->addElement("html", "</div>");
    }

    /**
     * Add confirmation settings for the form like confirmation_subject, confirmation_messsage
     *
     * @param stdClass $form
     * @since Edwiser Form 1.0.0
     */
    private function get_confirmation_settings(&$form) {
        $form->addElement("html", "<div class='efb-settings-tab' id='efb-settings-confirmation'>");
        $context = context_system::instance();
        $form->addElement("text", "confirmation_subject", get_string('efb-lbl-confirmation-subject', 'local_edwiserform'), null);
        $form->setType("confirmation_subject", PARAM_RAW);
        $form->setDefault("confirmation_subject", get_string('efb-lbl-confirmation-default-subject', 'local_edwiserform'));
        $form->addElement("editor", "confirmation_msg", get_string("efb-lbl-confirmation-msg", "local_edwiserform"), null, array(
            'maxfiles' => EDITOR_UNLIMITED_FILES,
            'noclean' => true,
            'context' => $context,
            'subdirs' => false
        ))->setValue(array('text' => get_string('efb-confirmation-default-msg', 'local_edwiserform')));
        $form->setType("confirmation_msg", PARAM_RAW);
        $form->addElement("html", "</div>");
    }

    /**
     * Add event settings for the form like events list
     * User can select multiple event for his form to trigger event action on form submission
     *
     * @param stdClass $form
     * @param array $eventlist supported event list
     * @since Edwiser Form 1.0.0
     */
    private function get_event_settings(&$form, $eventlist) {
        $form->addElement("html", "<div class='efb-settings-tab' id='efb-settings-events'>");
        $form->addElement("select", "events", get_string("efb-lbl-event", "local_edwiserform"), $eventlist)->setMultiple(true);
        $form->addElement("html", "</div>");
    }

    /**
     * Get html tabs to switch between settings panel. Currently General, Notification,
     * Confirmation, Events tabs are added
     *
     * @param stdClass $form
     * @since Edwiser Form 1.0.0
     */
    private function get_tabs(&$form) {
        $tabs = ['form'];
        $form->addElement("html", "<div class='efb-settings-tab-list-container bg-primary'>");
        $form->addElement("html", "<ul class='efb-settings-tab-list list-group'>");
        $tabs = [
            "general"      => "active",
            "notification" => "",
            "confirmation" => "",
            "events"        => "",
        ];
        foreach ($tabs as $tab => $active) {
            $form->addElement(
                "html",
                "<li class='efb-settings-tab-list-item efb-list-group-item $active' data-target='efb-settings-$tab'>"
            );
            $form->addElement("html", "<div class='bg-primary'>");
            $form->addElement("html", "<h4>" . get_string("efb-settings-$tab", 'local_edwiserform') . "</h4>");
            $form->addElement("html", "</div>");
            $form->addElement("html", "</li>");
        }
        $form->addElement("html", "</ul>");
        $form->addElement("html", "</div>");
    }
}
