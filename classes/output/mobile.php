<?php 
class mobile {
 
    /**
    * Main course page.
    *
    * @param array $args Standard mobile web service arguments
    * @return array
    */
    public static function mobile_course_view($args) {
        global $OUTPUT, $CFG;

        $course = get_course($args['courseid']);
        require_login($course);
        $html = $OUTPUT->render_from_template('format_thinkmod-mobile/mobile_course');

        return [
            'templates' => [
                [
                    'id' => 'main',
                    'html' => $html
                ]
            ]
        ];
    }
} ?>