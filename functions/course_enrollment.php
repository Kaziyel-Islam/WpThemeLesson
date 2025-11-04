

<?php
// ============================
// 1. Handle Enrollment via AJAX
// ============================
function lessonlms_handle_enrollment() {

    $course_id = isset($_POST['course_id']) ? intval($_POST['course_id']) : 0;
    if ($course_id <= 0) {
        wp_send_json_error('Invalid Course ID');
    }

    $user_id = get_current_user_id();
    if ($user_id == 0) {
        wp_send_json_error('Please Login to Enroll');
    }

    // Check if user already enrolled
    $user_enrollments = get_user_meta($user_id, '_user_enrollments', true);
    if (!is_array($user_enrollments)) {
        $user_enrollments = [];
    }

    foreach ($user_enrollments as $enrolled) {
        if ($enrolled['course_id'] == $course_id) {
            wp_send_json_error('Already Enrolled');
        }
    }

    // Increase course enrolled count
    $current_enrolled = (int) get_post_meta($course_id, '_enrolled_students', true);
    $new_count = $current_enrolled + 1;
    update_post_meta($course_id, '_enrolled_students', $new_count);

    // Add user enrollment data
    $user_enrollments[] = [
        'course_id' => $course_id,
        'date'      => current_time('mysql')
    ];
    update_user_meta($user_id, '_user_enrollments', $user_enrollments);

    // Return success
    wp_send_json_success(number_format($new_count));
}

add_action('wp_ajax_lessonlms_enroll_course', 'lessonlms_handle_enrollment');
add_action('wp_ajax_nopriv_lessonlms_enroll_course', 'lessonlms_handle_enrollment');


// ============================
// 2. Pass AJAX URL to JS
// ============================
function lessonlms_enqueue_scripts() {
    wp_enqueue_script(
        'lessonlms-enroll',
        get_template_directory_uri() . '/assets/js/lessonlms-enroll.js',
        ['jquery'],
        null,
        true
    );

    wp_localize_script('lessonlms-enroll', 'ajax_object', [
        'ajaxurl'   => admin_url('admin-ajax.php'),
        'login_url' => wp_login_url(),
    ]);
}
add_action('wp_enqueue_scripts', 'lessonlms_enqueue_scripts');
