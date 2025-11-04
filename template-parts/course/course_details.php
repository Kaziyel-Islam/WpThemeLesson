

<?php 


$R_price = get_post_meta(get_the_ID(), '_rprice', true) ? : '0.00'; 
$D_price = get_post_meta(get_the_ID(), '_dprice', true) ? : '0:00'; 



$discount = '';
if(!empty($D_price) && $R_price > $D_price){
    $discount = round((($R_price - $D_price)/$D_price)*100);
}

$course_id = get_the_ID();
$current_user_id = get_current_user_id();
$enrolled_students = get_post_meta(get_the_ID(), '_enrolled_students', true) ?: 0;

$is_enrolled = false;

if ($current_user_id) {
    $user_enrollments = get_user_meta($current_user_id, '_user_enrollments', true);
    if (is_array($user_enrollments)) {
        foreach ($user_enrollments as $enrolled) {
            if (!empty($enrolled['course_id']) && intval($enrolled['course_id']) === $course_id) {
                $is_enrolled = true;
                break;
            }
        }
    }
}
?>

?>

<section class="single-course-wrapper">
  <div class="container">
    <div class="course-header">
      <div class="breadcrumb">
        <a href="<?php echo get_post_type_archive_link('course'); ?>">Courses</a> / <span><?php the_title(); ?></span>
      </div>
      <h1><?php the_title(); ?></h1>
      <div class="course-meta">
        <div class="rating">
          <div class="stars">
            <?php 
              $stats = lessonlms_get_reviews_stats(get_the_ID());
              $avg_rating = $stats['average_rating'];
              $total_reviews = $stats['total_reviews'];          
              ?>

              <?php for($i=1 ; $i <= 5; $i++): ?>
              <?php if($avg_rating >= $i) : ?>
                 <i class="fas fa-star"></i>
              <?php elseif($avg_rating >= ($i - 0.75)) : ?>
                <i class="fas fa-star-half-alt"></i>
              <?php else : ?>
                <i class="fa-thin fa-star"></i>          
                <?php endif; ?>
                <?php endfor; ?>
            </div>

              <span><?php echo esc_html($avg_rating); ?> (<?php echo esc_html($total_reviews); ?> reviews)</span>
        </div>
        <div class="enrolled">
          <i class="fas fa-users"></i>
          <span><?php echo esc_html($enrolled_students); ?> students enrolled</span>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="course-content">    
      <div class="course-main">
        <div class="course-hero">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full', [
              'class' => 'course-image',
              'alt' => get_the_title()
            ]); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course-1.png" alt="<?php the_title(); ?>" class="course-image">
          <?php endif; ?>

          <!-- Floating Price Card -->
          <div class="price-card">
            <h3><?php echo esc_html($D_price); ?>$</h3>
            <div class="original-price"><?php echo esc_html($R_price); ?></div>
            <div class="discount-badge"><?php echo esc_html($discount); ?>% OFF</div>

            <?php if ($current_user_id > 0) : ?>

             <button class="enroll-btn" data-course-id="<?php echo get_the_ID(); ?>" <?php echo $is_enrolled ? 'disabled' : ''; ?>>
                <?php echo $is_enrolled ? 'Enrolled' : 'Enroll Now'; ?>
             </button>

              <?php else : ?>
                <div class="login-required">
                  <p>Please Login or Register to enroll</p>
                  <div class="enrl-button">
                  <a class="" href="<?php echo wp_login_url(get_permalink()); ?>" class="login-btn">Login</a>
                  <a class="" href="<?php echo wp_registration_url(get_permalink()); ?>" class="register-btn">Register</a>

                  </div>
                </div>
              <?php endif; ?>

            <div class="includes">
              <h4>This course includes:</h4>
              <ul>
                <li><i class="far fa-file-video"></i> 42 hours on-demand video</li>
                <li><i class="far fa-file-alt"></i> 18 articles</li>
                <li><i class="fas fa-download"></i> 56 downloadable resources</li>
                <li><i class="fas fa-infinity"></i> Full lifetime access</li>
                <li><i class="fas fa-mobile-alt"></i> Access on mobile and TV</li>
                <li><i class="fas fa-trophy"></i> Certificate of completion</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- Tab Navigation -->
        <div class="course-tabs">
          <div class="tab-nav">
            <button class="tab-link active" data-tab="overview">Overview</button>
            <button class="tab-link" data-tab="curriculum">Curriculum</button>
            <button class="tab-link" data-tab="instructor">Instructor</button>
            <button class="tab-link" data-tab="reviews">Reviews</button>
          </div>
          
          <div class="tab-content">
            <div id="overview" class="tab-pane active">
              <div class="course-description">
                <p><?php echo get_post_meta(get_the_ID(), '_overview', true) ?></p>
                
              </div>
            </div>
            
            <div id="curriculum" class="tab-pane">
              <h3>Course Curriculum</h3>
              <p>Curriculum content will be displayed here.</p>
            </div>
            
            <div id="instructor" class="tab-pane">
              <h3>About the Instructor</h3>
              <p>Instructor information will be displayed here.</p>
            </div>
            
            <div id="reviews" class="tab-pane">
              <h3>Student Reviews</h3>
              <p>Reviews will be displayed here.</p>
              <form method="post">
                  <input type="hidden" name="course_id" value="<?php echo get_the_ID(); ?>">
                  <!-- Ratings -->
                  <label for="rating">Your Rating:</label>
                  <div class="star-rating" id="starRating">
                    <div class="form-group">
                      <input type="radio" id="star5" name="rating" value="5" required>
                      <label for="star5">★</label>

                      <input type="radio" id="star4" name="rating" value="4">
                      <label for="star4">★</label>

                      <input type="radio" id="star3" name="rating" value="3">
                      <label for="star3">★</label>

                      <input type="radio" id="star2" name="rating" value="2">
                      <label for="star2">★</label>

                      <input type="radio" id="star1" name="rating" value="1">
                      <label for="star1">★</label>
                    </div>
                  </div>

                  <div class="input-group">
                    <label for="reviewer_name">Your Name:</label>
                    <input type="text" id="reviewer_name" name="reviewer_name" placeholder="Enter your name" required />
                  </div>

                  <div class="input-group">
                    <label for="review_text">Your Review:</label>
                    <textarea id="review_text" name="review_text" placeholder="Write your thoughts here..." required></textarea>
                  </div>

                  <button type="submit" name="submit_review" value="1" class="submit-btn">Submit Review</button>
              </form>

              <div class="reviews-list">
                <?php 

                $reviews = lessonlms_get_course_reviews(get_the_ID());

                if ($reviews): ?>
                  <?php foreach (array_reverse($reviews) as $review): ?>
                    <div class="review-item">
                      <div class="review-header">
                        <span class="reviewer-name"><?php echo esc_html($review['name']); ?></span>
                        <div class="review-stars">
                          <?php for ($i = 1; $i <= 5; $i++): ?>
                            <?php if ($i <= $review['rating']): ?>
                              <span class="star filled">★</span>
                            <?php else: ?>
                              <span class="star empty">★</span>
                            <?php endif; ?>
                          <?php endfor; ?>
                        </div>
                      </div>
                      <p class="review-text"><?php echo esc_html($review['review']) ?></p>
                      <time class="review-date" datetime="<?php echo esc_attr($review['date']); ?>">
                        <?php echo date('F j, Y', strtotime($review['date'])); ?>
                      </time>
                    </div>
                  <?php endforeach; ?>
                <?php else: ?>
                  <p>No Review yet.</p>
                <?php endif; ?>    
            </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Course Details Sidebar -->
      <div class="course-sidebar">
        <!-- Course Details Card -->
        <div class="course-details">
          <h3>Course Details</h3>
          <p><i class="fas fa-clock icon"></i> Duration<br><strong><?php echo get_post_meta(get_the_ID(), '_duration', true) ?> hours</strong></p>
          <p><i class="fas fa-calendar icon"></i> Last Updated<br><strong>June 15, 2023</strong></p>
          <p><i class="fas fa-language icon"></i> Language<br><strong><?php echo get_post_meta(get_the_ID(), '_clanguage', true) ?></strong></p>
          <p><i class="fas fa-closed-captioning icon"></i> Subtitles<br><strong>English, Spanish</strong></p>
        </div>
        
        <!-- Who This Course Is For Card -->
        <div class="course-audience">
          <h3>Who this course is for:</h3>
          <ul>
            <li><i class="fas fa-check check-icon"></i> Aspiring UI/UX designers</li>
            <li><i class="fas fa-check check-icon"></i> Web developers wanting design skills</li>
            <li><i class="fas fa-check check-icon"></i> Graphic designers transitioning to digital</li>
            <li><i class="fas fa-check check-icon"></i> Product managers</li>
          </ul>
        </div>
      </div>
    </div>
</div> 
</section> 



