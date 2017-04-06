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
 * Add labelcollapsedcollapsed form
 *
 * @package    mod
 * @subpackage labelcollapsed
 * @copyright  2011 Thomas Alsén
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once ($CFG->dirroot.'/course/moodleform_mod.php');

class mod_labelcollapsed_mod_form extends moodleform_mod {

    function definition() {

        $mform = $this->_form;

        $mform->addElement('text', 'name', get_string('labelcollapsedheader', 'labelcollapsed'), array('size'=>'64'));
        $mform->setType('name', PARAM_TEXT);
        $mform->addRule('name', null, 'required', null, 'client');
        $mform->addRule('name', get_string('maximumchars', '', 50), 'maxlength', 50, 'client');
        $this->standard_intro_elements(get_string('labelcollapsedtext', 'labelcollapsed'));

        $this->standard_coursemodule_elements();

        $this->add_action_buttons(true, false, null);

    }

}
