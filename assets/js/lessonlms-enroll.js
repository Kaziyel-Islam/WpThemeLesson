

jQuery(document).ready(function($) {
  $('.enroll-btn').on('click', function() {
    var button = $(this);
    var courseId = button.data('course-id');
    var enrolledElement = $('.enrolled span');

    button.prop('disabled', true).text('Enrolling...');

    $.ajax({
      url: ajax_object.ajaxurl,
      type: 'POST',
      dataType: 'json',
      data: {
        action: 'lessonlms_enroll_course',
        course_id: courseId
      },
      success: function(response) {
        if (response.success) {
          enrolledElement.text(response.data + ' enrolled students');
          button.text('Enrolled').prop('disabled', true);
          alert('🎉 Enrolled successfully!');
        } else {
          if (response.data === 'Please Login to Enroll') {
            alert('Please login first!');
            window.location.href = ajax_object.login_url;
          } else if (response.data === 'Already Enrolled') {
            button.text('Enrolled');
            alert('You are already enrolled in this course.');
          } else {
            alert('Error: ' + response.data);
            button.prop('disabled', false).text('Enroll Now');
          }
        }
      },
      error: function() {
        alert('Something went wrong. Please try again.');
        button.prop('disabled', false).text('Enroll Now');
      }
    });
  });
});
