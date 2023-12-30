<?php $__env->startSection('content'); ?>
<!-- ============================================================= Content Start ============================================================= -->
	<!--================ start banner Area =================-->
	<section class="home-banner-area relative" id="home" data-parallax="scroll" data-image-src="<?php echo e(asset(Setting()->HomePicture)); ?>">
		<div class="overlay-bg overlay"></div>
		<div class="container">
			<div class="row fullscreen justify-content-lg-begin">
				<div class="banner-content col-lg-7">
					<!-- ===============================  Home  ======================================== -->
					<?php if($message = Session::get('success')): ?>
					<div class="alert alert-success" role="alert">
			          <?php echo $message; ?>

			        </div>
                    <?php Session::forget('success');?>
                    <?php endif; ?>
                    <!-- ===============================  Home  ======================================== -->
                    <?php if($message = Session::get('error')): ?>
                    <div class="alert alert-success" role="alert">
			          <?php echo $message; ?>

			        </div>
                    <?php Session::forget('error');?>
                    <!-- ===============================  Home  ======================================== -->
                    <?php endif; ?>
					<h1>
						<!-- ===============================  Home  ======================================== -->
						<?php echo e(Setting()->title_home_ar); ?> <br>
						الأطفال
					</h1>
					<!-- ===============================  Home  ======================================== -->
					<h4><?php echo Setting()->sub_title_home_ar; ?></h4>
					<a href="<?php echo e(url('Contact')); ?>" class="primary-btn">
						انضم إلينا
						<i class="ti-angle-left ml-1"></i>
					</a>
					<!-- ===============================  Home  ======================================== -->
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->
	<!--================ Start About Area =================-->
	<section class="about_area lite_bg">
		<!-- ===============================  Home  ======================================== -->
		<style type="text/css">
			.about_area .about_bg{
				background:linear-gradient(0deg, rgb(48, 77, 48), rgb(48, 77, 48)),
				url('<?php echo e(asset(Setting()->AboutPicture)); ?>');background-repeat:no-repeat;background-size:cover;
				background-size:cover;
				position:absolute;right:0;top:0;height:100%;width:50%;z-index:-1}
		</style>
		<!-- ===============================  Home  ======================================== -->
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-5">
					<div class="about_details lite_bg">
						<!-- ===============================  Home  ======================================== -->
						<h2><?php echo Setting()->title_about_ar; ?></h2>
						<!-- ===============================  Home  ======================================== -->
						<p class="mb-0">
							<?php echo Setting()->content_about_ar; ?>

						</p>
						<!-- ===============================  Home  ======================================== -->
						<a href="<?php echo e(url('about')); ?>" class="primary-btn mt-5">
							قراءة المزيد
							<i class="ti-angle-left ml-1"></i>
						</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1 d-lg-block d-none">
					<div class="about_right">
						<div class="video-inner justify-content-center align-items-center d-flex">
							<a id="play-home-video" class="video-play-button" 
							   href="<?php echo Setting()->video; ?>">
								<span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="about_bg d-lg-block d-none" style="right:inherit;"></div>
		</div>
	</section>
	<!--================ End About Area =================-->

	<!--================ Start Features Area =================-->
	<section class="features-area section-gap-top">
		<div class="container">
			
			<div class="row feature_inner">
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-compass"></i>
						<h4>تبرع</h4>
						<!-- ===============================  Home  ======================================== -->
						<p><?php echo Setting()->content_feature_ar; ?></p>
						<!-- ===============================  Home  ======================================== -->
						<a href="<?php echo e(url('Contact')); ?>" class="primary-btn2">أعرف أكثر</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-desk"></i>
						<h4>أعط الإلهام</h4>
						<!-- ===============================  Home  ======================================== -->
						<p><?php echo Setting()->content_feature_two_ar; ?></p>
						<!-- ===============================  Home  ======================================== -->
						<a href="<?php echo e(url('Contact')); ?>" class="primary-btn2">أعرف أكثر</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-bathroom"></i>
						<h4>تصبح متطوعا</h4>
						<!-- ===============================  Home  ======================================== -->
						<p><?php echo Setting()->content_feature_three_ar; ?></p>
						<!-- ===============================  Home  ======================================== -->
						<a href="<?php echo e(url('Contact')); ?>" class="primary-btn2">أعرف أكثر</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =========================-->
	<!--================ Start Popular Causes Area =================-->
	<section class="popular-cause-area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<span> الكرامة ، الفرصة ، الأمل </span>
						<h2><span>أسبابنا</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- ===============================  Home  ======================================== -->
                <?php $__currentLoopData = $Causes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Cause): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>      
				<div class="col-lg-4 col-md-6">
					<div class="card single-popular-cause">
						<div class="card-body">
							<figure>
								<!-- ===============================  Home  ======================================== -->
								<img class="card-img-top img-fluid" src="<?php echo asset($Cause->image); ?>" alt="Card image cap">
							</figure>
							<div class="card_inner_body">
								<!-- ===============================  Home  ======================================== -->
								 <?php if(isset($Cause->Category->title)): ?>
								 <div class="tag"><?php echo e($Cause->Category->title); ?></div>
		                         <?php else: ?>
		                           <div class="tag">لا تصنيف</div>
		                         <?php endif; ?>
		                         <!-- ===============================  Home  ======================================== -->
								<h4 class="card-title"><?php echo substr($Cause->Title_ar, 0, 190); ?></h4>
								<div class="d-flex justify-content-between raised_goal">
									<!-- ===============================  Home  ======================================== -->
									<p>رفع : <?php echo $Cause->Raised; ?></p>
									<!-- ===============================  Home  ======================================== -->
									<p><span>هدف: <?php echo $Cause->Goal; ?></span></p>
									<!-- ===============================  Home  ======================================== -->
								</div>
								<div class="d-flex justify-content-between donation align-items-center">
									<!-- ===============================  Home  ======================================== -->
									<a href="<?php echo url('Causes'); ?>/<?php echo $Cause->slug; ?>" class="primary-btn">تبرع</a>
									<!-- ===============================  Home  ======================================== -->
									<p><span class="ti-heart mr-1"></span> <?php echo $Cause->Donors; ?> الجهات المانحة</p>
									<!-- ===============================  Home  ======================================== -->
								</div>
							</div>
						</div>
					</div>
				</div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- ===============================  Home  ======================================== -->
			</div>
		</div>
	</section>
	<!--================ End Popular Causes Area =================-->

	<!--================ Start callto Area =================-->
	<section class="callto-area section-gap relative" data-parallax="scroll" data-image-src="<?php echo e(asset(Setting()->HomePicture)); ?>">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<p class="top_text">احتاج مساعدتك؟</p>
					<div class="call-wrap mx-auto">
						<h1>مطلوب المتطوعين في منطقتك</h1>
						<p>في تلك حياتنا أنا أمتلك الأنوار حتى يظهران ليومان حكم القاعدة شيء يطير بشكل رئيسي لسبب رئيسي هو طيور جافة
من جعل السبب الرئيسي الطيور نفسها الجافة.</p>
						<!-- ===============================  Home  ======================================== -->
						<a href="<?php echo e(route('register')); ?>" class="primary-btn mt-5">
							سجل
							<i class="ti-angle-right ml-1"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End callto Area ===========================-->
	<!--================ Start Upcoming Event Area =================-->
	<section class="upcoming_event_area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2><span>القادمة</span> هدف</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- ===============================  Home Event ======================================== -->
                <?php $__currentLoopData = $Events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
				<div class="col-lg-6">
					<div class="single_upcoming_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<!-- ===============================  Home Event ======================================== -->
									<img class="img-fluid w-100" src="<?php echo asset($Event->image); ?>" alt="">
									<div class="date">
										<!-- ===============================  Home Event ======================================== -->
										<?php echo e(date('M j', strtotime($Event->created_at))); ?>

									</div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<!-- ===============================  Home Event ======================================== -->
										<a href="<?php echo url('Events'); ?>/<?php echo $Event->slug; ?>"><?php echo substr($Event->Title_ar, 0, 190); ?></a>
									</h3>
									<p>
										<!-- ===============================  Home Event ======================================== -->
										<?php echo substr($Event->Content_ar, 0, 60); ?>

									</p>
									<!-- ===============================  Home Event ======================================== -->
									<div class="d-flex count_time justify-content-lg-start justify-content-center" id="clockdiv1">
										<div class="single_time">
											<h4 class="days"><?php echo $Event->Days; ?></h4>
											<p>أيام</p>
										</div>
										<div class="single_time">
											<h4 class="hours"><?php echo $Event->Hours; ?></h4>
											<p>ساعات</p>
										</div>
										<div class="single_time">
											<h4 class="minutes"><?php echo $Event->Minutes; ?></h4>
											<p>الدقائق</p>
										</div>
									</div>
									<!-- ===============================  Home Event ======================================== -->
									<a href="<?php echo url('Events'); ?>/<?php echo $Event->slug; ?>" class="primary-btn2">أعرف أكثر</a>
								</div>
							</div>
						</div>
					</div>
				</div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- ===============================  Home Event ======================================== -->
			</div>
		</div>
	</section>
	<!--================ End Upcoming Event Area =================-->

	<!--================ Start Home Blog Area =================-->
	<section class="blog-area section-gap-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="home-blog-left">
					<h2>أحدث من  دونتنا </h2>
						<p>
							<!-- ===============================  Home Post ======================================== -->
							<?php echo Setting()->content_blog_ar; ?> 
						</p>
						<a href="<?php echo e(url('Posts')); ?>" class="primary-btn2">أظهر المزيد </a>
					</div>
				</div> 
				<!-- ===============================  Home Post ======================================== -->
                <?php $__currentLoopData = $Posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-4 col-md-6 single-blog">
					<div class="thumb">
						
						<img class="img-fluid" src="<?php echo asset($Post->image); ?>" alt="<?php echo substr($Post->Title_en, 0, 190); ?>">
					</div>
					<div class="single-blog-info">
						<p class="tag">
							  <!-- ===============================  Home Post ======================================== -->
							  <?php if(isset($Post->Category->title)): ?>
                              <span><?php echo e($Post->Category->title); ?></span>
                              <?php else: ?>
                              <span>لا تصنيف</span>
                              <?php endif; ?>
                              <!-- ===============================  Home Post ======================================== -->
							<span><?php echo e(date('M j, Y', strtotime($Post->created_at))); ?></span>
						</p>
						<!-- ===============================  Home Post ======================================== -->
						<a href="<?php echo url('Posts'); ?>/<?php echo $Post->slug; ?>">
							<h4><?php echo substr($Post->Title_ar, 0, 190); ?></h4>
						</a>
						<!-- ===============================  Home Post ======================================== -->
						<div class="meta-bottom d-flex">
					     <?php if(isset($Post->Comments)): ?> 
			             <a class="mr-3"><span class="ti-comments mr-2"></span><?php echo e(count($Post->Comments)); ?> تعليقات</a>
			             <?php else: ?>
			             <a class="mr-3"><span class="ti-comments mr-2"></span> 0 تعليقات</a>
			             <?php endif; ?>
						 <a href="<?php echo url('Posts'); ?>/<?php echo $Post->slug; ?>"> <span class="ti-eye mr-2"></span> أظهر المزيد</a>
						</div>
						<!-- ===============================  Home Post ======================================== -->
					</div>
				</div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section>
	<!--================ End Home Blog Area =================-->

	<!--================ Start Gallery Area =================-->
	<section class="instagram-area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2><span>معرضنا</span></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="instagram-slider-rtl owl-carousel">
			<!--================ End Gallery Area =================-->
			 <?php $__currentLoopData = $Gallers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>      
			 <!--================ End Gallery Area =================-->    
			<a href="<?php echo asset($Gallery->image); ?>" class="single-instagram d-block img-pop-up">
				<div class="instagram-img">
					<!--================ End Gallery Area =================-->
					<img src="<?php echo asset($Gallery->image); ?>">
					<!--================ End Gallery Area =================-->
					<div class="instagram-text">
						<i class=" icon-material-outline-add"></i>
					</div>
				</div>
			</a>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<!--================ End Gallery Area =================-->
		</div>
	</section>
	<!--================ End Gallery Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('arabic.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cobalagi\Charity\resources\views/arabic/home.blade.php ENDPATH**/ ?>