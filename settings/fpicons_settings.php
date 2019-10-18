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
 * File : settings/fpicon_settings.php
 * Settings files copied from Fordson.
 */

defined('MOODLE_INTERNAL') || die();

// Icon Navigation);
$page = new admin_settingpage('theme_fordsonucp_iconnavheading', get_string('iconnavheading', 'theme_fordson'));

// This is the descriptor for icon One
$name = 'theme_fordsonucp/iconwidthinfo';
$heading = get_string('iconwidthinfo', 'theme_fordson');
$information = get_string('iconwidthinfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Icon width setting.
$name = 'theme_fordsonucp/iconwidth';
$title = get_string('iconwidth', 'theme_fordson');
$description = get_string('iconwidth_desc', 'theme_fordson');;
$default = '100px';
$choices = array(
    '75px' => '75px',
    '85px' => '85px',
    '95px' => '95px',
    '100px' => '100px',
    '105px' => '105px',
    '110px' => '110px',
    '115px' => '115px',
    '120px' => '120px',
    '125px' => '125px',
    '130px' => '130px',
    '135px' => '135px',
    '140px' => '140px',
    '145px' => '145px',
    '150px' => '150px',
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for teacher create a course
$name = 'theme_fordsonucp/createinfo';
$heading = get_string('createinfo', 'theme_fordson');
$information = get_string('createinfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Creator Icon
$name = 'theme_fordsonucp/createicon';
$title = get_string('navicon', 'theme_fordson');
$description = get_string('navicondesc', 'theme_fordson');
$default = 'edit';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/createbuttontext';
$title = get_string('naviconbuttontext', 'theme_fordson');
$description = get_string('naviconbuttontextdesc', 'theme_fordson');
$default = get_string('naviconbuttoncreatetextdefault', 'theme_fordson');
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/createbuttonurl';
$title = get_string('naviconbuttonurl', 'theme_fordson');
$description = get_string('naviconbuttonurldesc', 'theme_fordson');
$default =  $CFG->wwwroot.'/course/edit.php?category=1';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for teacher create a course
$name = 'theme_fordsonucp/sliderinfo';
$heading = get_string('sliderinfo', 'theme_fordson');
$information = get_string('sliderinfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Creator Icon
$name = 'theme_fordsonucp/slideicon';
$title = get_string('navicon', 'theme_fordson');
$description = get_string('naviconslidedesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/slideiconbuttontext';
$title = get_string('naviconbuttontext', 'theme_fordson');
$description = get_string('naviconbuttontextdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Slide Textbox.
$name = 'theme_fordsonucp/slidetextbox';
$title = get_string('slidetextbox', 'theme_fordson');
$description = get_string('slidetextbox_desc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for icon One
$name = 'theme_fordsonucp/navicon1info';
$heading = get_string('navicon1', 'theme_fordson');
$information = get_string('navicondesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// icon One
$name = 'theme_fordsonucp/nav1icon';
$title = get_string('navicon', 'theme_fordson');
$description = get_string('navicondesc', 'theme_fordson');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav1buttontext';
$title = get_string('naviconbuttontext', 'theme_fordson');
$description = get_string('naviconbuttontextdesc', 'theme_fordson');
$default = get_string('naviconbutton1textdefault', 'theme_fordson');
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav1buttonurl';
$title = get_string('naviconbuttonurl', 'theme_fordson');
$description = get_string('naviconbuttonurldesc', 'theme_fordson');
$default =  $CFG->wwwroot.'/my/';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for icon One
$name = 'theme_fordsonucp/navicon2info';
$heading = get_string('navicon2', 'theme_fordson');
$information = get_string('navicondesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

$name = 'theme_fordsonucp/nav2icon';
$title = get_string('navicon', 'theme_fordson');
$description = get_string('navicondesc', 'theme_fordson');
$default = 'calendar';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav2buttontext';
$title = get_string('naviconbuttontext', 'theme_fordson');
$description = get_string('naviconbuttontextdesc', 'theme_fordson');
$default = get_string('naviconbutton2textdefault', 'theme_fordson');
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav2buttonurl';
$title = get_string('naviconbuttonurl', 'theme_fordson');
$description = get_string('naviconbuttonurldesc', 'theme_fordson');
$default =  $CFG->wwwroot.'/calendar/view.php?view=month';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for icon three
$name = 'theme_fordsonucp/navicon3info';
$heading = get_string('navicon3', 'theme_fordson');
$information = get_string('navicondesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

$name = 'theme_fordsonucp/nav3icon';
$title = get_string('navicon', 'theme_fordson');
$description = get_string('navicondesc', 'theme_fordson');
$default = 'bookmark';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav3buttontext';
$title = get_string('naviconbuttontext', 'theme_fordson');
$description = get_string('naviconbuttontextdesc', 'theme_fordson');
$default = get_string('naviconbutton3textdefault', 'theme_fordson');
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav3buttonurl';
$title = get_string('naviconbuttonurl', 'theme_fordson');
$description = get_string('naviconbuttonurldesc', 'theme_fordson');
$default =  $CFG->wwwroot.'/badges/mybadges.php';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for icon four
$name = 'theme_fordsonucp/navicon4info';
$heading = get_string('navicon4', 'theme_fordson');
$information = get_string('navicondesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

$name = 'theme_fordsonucp/nav4icon';
$title = get_string('navicon', 'theme_fordson');
$description = get_string('navicondesc', 'theme_fordson');
$default = 'book';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav4buttontext';
$title = get_string('naviconbuttontext', 'theme_fordson');
$description = get_string('naviconbuttontextdesc', 'theme_fordson');
$default = get_string('naviconbutton4textdefault', 'theme_fordson');
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav4buttonurl';
$title = get_string('naviconbuttonurl', 'theme_fordson');
$description = get_string('naviconbuttonurldesc', 'theme_fordson');
$default =  $CFG->wwwroot.'/course/';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for icon four
$name = 'theme_fordsonucp/navicon5info';
$heading = get_string('navicon5', 'theme_fordson');
$information = get_string('navicondesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

$name = 'theme_fordsonucp/nav5icon';
$title = get_string('navicon', 'theme_fordson');
$description = get_string('navicondesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav5buttontext';
$title = get_string('naviconbuttontext', 'theme_fordson');
$description = get_string('naviconbuttontextdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav5buttonurl';
$title = get_string('naviconbuttonurl', 'theme_fordson');
$description = get_string('naviconbuttonurldesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for icon six
$name = 'theme_fordsonucp/navicon6info';
$heading = get_string('navicon6', 'theme_fordson');
$information = get_string('navicondesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

$name = 'theme_fordsonucp/nav6icon';
$title = get_string('navicon', 'theme_fordson');
$description = get_string('navicondesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav6buttontext';
$title = get_string('naviconbuttontext', 'theme_fordson');
$description = get_string('naviconbuttontextdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav6buttonurl';
$title = get_string('naviconbuttonurl', 'theme_fordson');
$description = get_string('naviconbuttonurldesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for icon seven
$name = 'theme_fordsonucp/navicon7info';
$heading = get_string('navicon7', 'theme_fordson');
$information = get_string('navicondesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

$name = 'theme_fordsonucp/nav7icon';
$title = get_string('navicon', 'theme_fordson');
$description = get_string('navicondesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav7buttontext';
$title = get_string('naviconbuttontext', 'theme_fordson');
$description = get_string('naviconbuttontextdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav7buttonurl';
$title = get_string('naviconbuttonurl', 'theme_fordson');
$description = get_string('naviconbuttonurldesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for icon eight
$name = 'theme_fordsonucp/navicon8info';
$heading = get_string('navicon8', 'theme_fordson');
$information = get_string('navicondesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

$name = 'theme_fordsonucp/nav8icon';
$title = get_string('navicon', 'theme_fordson');
$description = get_string('navicondesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav8buttontext';
$title = get_string('naviconbuttontext', 'theme_fordson');
$description = get_string('naviconbuttontextdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/nav8buttonurl';
$title = get_string('naviconbuttonurl', 'theme_fordson');
$description = get_string('naviconbuttonurldesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);