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
 * Initially developped for :
 * Université de Cergy-Pontoise
 * 33, boulevard du Port
 * 95011 Cergy-Pontoise cedex
 * FRANCE
 *
 * UCP fordson based theme
 *
 * @package   theme_fordsonucp
 * @copyright 2019 Laurent Guillet <laurent.guillet@u-cergy.fr>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * File : settings/menu_settings.php
 * Settings files copied from Fordson.
 */

defined('MOODLE_INTERNAL') || die();

$page = new admin_settingpage('theme_fordsonucp_menusettings', get_string('menusettings', 'theme_fordson'));

// This is the descriptor for Course Management Panel
$name = 'theme_fordsonucp/coursemanagementinfo';
$heading = get_string('coursemanagementinfo', 'theme_fordson');
$information = get_string('coursemanagementinfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Show/hide coursemanagement slider toggle.
$name = 'theme_fordsonucp/coursemanagementtoggle';
$title = get_string('coursemanagementtoggle', 'theme_fordson');
$description = get_string('coursemanagementtoggle_desc', 'theme_fordson');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Frontpage Textbox.
$name = 'theme_fordsonucp/coursemanagementtextbox';
$title = get_string('coursemanagementtextbox', 'theme_fordson');
$description = get_string('coursemanagementtextbox_desc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Frontpage Textbox.
$name = 'theme_fordsonucp/studentdashboardtextbox';
$title = get_string('studentdashboardtextbox', 'theme_fordson');
$description = get_string('studentdashboardtextbox_desc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Show/hide course editing cog.
$name = 'theme_fordsonucp/courseeditingcog';
$title = get_string('courseeditingcog', 'theme_fordson');
$description = get_string('courseeditingcog_desc', 'theme_fordson');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Show/hide student grades.
$name = 'theme_fordsonucp/showstudentgrades';
$title = get_string('showstudentgrades', 'theme_fordson');
$description = get_string('showstudentgrades_desc', 'theme_fordson');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Show/hide student completion.
$name = 'theme_fordsonucp/showstudentcompletion';
$title = get_string('showstudentcompletion', 'theme_fordson');
$description = get_string('showstudentcompletion_desc', 'theme_fordson');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Show/hide course settings for students.
$name = 'theme_fordsonucp/showcourseadminstudents';
$title = get_string('showcourseadminstudents', 'theme_fordson');
$description = get_string('showcourseadminstudents_desc', 'theme_fordson');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for course menu
$name = 'theme_fordsonucp/mycoursesmenuinfo';
$heading = get_string('mycoursesinfo', 'theme_fordson');
$information = get_string('mycoursesinfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Toggle courses display in custommenu.
$name = 'theme_fordsonucp/displaymycourses';
$title = get_string('displaymycourses', 'theme_fordson');
$description = get_string('displaymycoursesdesc', 'theme_fordson');
$default = false;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Toggle courses display in custommenu.
$name = 'theme_fordsonucp/displaythiscourse';
$title = get_string('displaythiscourse', 'theme_fordson');
$description = get_string('displaythiscoursedesc', 'theme_fordson');
$default = false;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Set terminology for dropdown course list
$name = 'theme_fordsonucp/mycoursetitle';
$title = get_string('mycoursetitle','theme_fordson');
$description = get_string('mycoursetitledesc', 'theme_fordson');
$default = 'course';
$choices = array(
	'course' => get_string('mycourses', 'theme_fordson'),
	'module' => get_string('mymodules', 'theme_fordson'),
	'unit' => get_string('myunits', 'theme_fordson'),
	'class' => get_string('myclasses', 'theme_fordson'),
	'training' => get_string('mytraining', 'theme_fordson'),
	'pd' => get_string('myprofessionaldevelopment', 'theme_fordson'),
	'cred' => get_string('mycred', 'theme_fordson'),
	'plan' => get_string('myplans', 'theme_fordson'),
	'comp' => get_string('mycomp', 'theme_fordson'),
	'program' => get_string('myprograms', 'theme_fordson'),
	'lecture' => get_string('mylectures', 'theme_fordson'),
	'lesson' => get_string('mylessons', 'theme_fordson'),
	);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

//Drawer Menu
// This is the descriptor for nav drawer
$name = 'theme_fordsonucp/drawermenuinfo';
$heading = get_string('setting_navdrawersettings', 'theme_fordson');
$information = get_string('setting_navdrawersettings_desc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

$name = 'theme_fordsonucp/shownavdrawer';
$title = get_string('shownavdrawer', 'theme_fordson');
$description = get_string('shownavdrawer_desc', 'theme_fordson');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/shownavclosed';
$title = get_string('shownavclosed', 'theme_fordson');
$description = get_string('shownavclosed_desc', 'theme_fordson');
$default = false;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);



// Must add the page after definiting all the settings!
$settings->add($page);