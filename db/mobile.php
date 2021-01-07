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
 * Format tiles plugin event handler definition.
 *
 * @package   format_thinkmod-mobile
 * @category  event
 * @copyright 2018 David Watson {@link http://evolutioncode.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$addons = [
    'format_thinkmod-mobile' => [
        'handlers' => [ // Different places where the plugin will display content.
            'thinkmod-mobile' => [ // Handler unique name (alphanumeric).
                'delegate' => 'CoreCourseFormatDelegate', // Delegate (where to display the link to the plugin)
                'method' => 'mobile_course_view', // Main function in \format_myformat\output\mobile.
                'styles' => [
                    'url' => $CFG->wwwroot . '/course/format/thinkmod-mobile/mobile.css',
                    'version' => 2019041000
                ],
                'displaysectionselector' => true, // Set to false to disable the default section selector.
                'displayenabledownload' => true, // Set to false to hide the "Enable download" option in the course context menu.
            ]
        ]
    ]
];