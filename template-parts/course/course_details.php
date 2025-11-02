

<?php 
$R_price = get_post_meta(get_the_ID(), '_rprice', true) ? : '0.00'; 
$D_price = get_post_meta(get_the_ID(), '_dprice', true) ? : '0:00'; 

$discount = '';
if(!empty($D_price) && $R_price > $D_price){
    $discount = round((($R_price - $D_price)/$D_price)*100);
}
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
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <span>4.8 (1,245 reviews)</span>
        </div>
        <div class="enrolled">
          <i class="fas fa-users"></i>
          <span>3,450 students enrolled</span>
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
            <button class="enroll-btn">Enroll Now</button>

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



