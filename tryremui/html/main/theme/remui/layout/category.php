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
 * A drawer based layout for the boost theme.
 *
 * @package   theme_remui
 * @copyright (c) 2023 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once("{$CFG->dirroot}/theme/{$PAGE->theme->name}/layout/common.php");

use theme_remui\utility;

global $DB;
// Get the filters first.
$filterdata = \theme_remui_coursehandler::get_course_filters_data();

$templatecontext['categories'] = $filterdata['catdata'];
$templatecontext['searchhtml'] = $filterdata['searchhtml'];

if (\theme_remui\toolbox::get_setting('enablenewcoursecards')) {
    $templatecontext['latest_card'] = true;
}

$categoryid = 'all';
$categoryid = optional_param('categoryid', $categoryid, PARAM_RAW);

if ($categoryid != 'all') {
    if (core_course_category::get($categoryid, IGNORE_MISSING) == null) {
        $categoryid = 'all';
    }
}

$courserenderer = $PAGE->get_renderer('core', 'course');
if ($categoryid != "all") {
    $coursecat = core_course_category::get($categoryid);
    $chelper = new coursecat_helper();
    if ($description = $chelper->get_category_formatted_description($coursecat)) {
        $templatecontext['categorydesciption'] = $description;
    }
}
$templatecontext['coursearchivefiltermenumorebutton'] = $courserenderer->get_morebutton_pagetitle($categoryid);
$templatecontext['defaultcat'] = $categoryid;
// Must be called before rendering the template.
// This will ease us to add body classes directly to the array.
require_once($CFG->dirroot . '/theme/remui/layout/common_end.php');

// It will handle the view buttons synchronization with myoverview settings
$viewarray = get_config('block_myoverview', 'layouts');
$viewarray = explode(',', $viewarray);
$viewarray = array_combine($viewarray, $viewarray);
$templatecontext['viewoptions'] = $viewarray;
$templatecontext['hideavailableview'] = false;
if(!get_user_preferences('course_view_state')){
    $templatecontext['viewactivebtn'] = true;
}

if(count($templatecontext['viewoptions']) == 1){
    $templatecontext['hideavailableview'] = true;
}


$categories = $DB->get_records('course_categories');
$caegoryfilterhtml = utility::generateCategoryStructure($categories);
$templatecontext['caegoryfilterhtml'] = $caegoryfilterhtml;
echo $OUTPUT->render_from_template('theme_remui/coursearchive', $templatecontext);
