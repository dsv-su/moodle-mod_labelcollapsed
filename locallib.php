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
 * Internal library of functions and constants for module labelcollapsed
 *
 * @package    mod
 * @subpackage labelcollapsed
 * @copyright  2011 Thomas Alsén
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Fetches and returns the content text icluding images etc.
 *
 * @global object
 * @param cm_info $cm
 * @return string $content
 */
function labelcollapsed_get_html_content(cm_info $cm) {
    global $DB;
	
    $lc = $DB->get_record('labelcollapsed', array('id' => $cm->instance));
    $intro = format_module_intro('labelcollapsed', $lc, $cm->id);
    $javastr = 'javascript:toggle(\'lcc'.$cm->instance.'\',\'lch'.$cm->instance.'\');';

    $content = '
    <div id="lch'.$cm->instance.'" class="lc_header collapsed" onclick="'.$javastr.'">        
        <ul ><li>'.$cm->name.'</li></ul>
    </div>   
    <div id="lcc'.$cm->instance.'" class="lc_content" style="display: none;">'.
            $intro . 
   '</div>';
	
   return $content;
}
