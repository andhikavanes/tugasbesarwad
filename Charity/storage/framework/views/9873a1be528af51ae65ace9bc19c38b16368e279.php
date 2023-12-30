<?php $__env->startSection('content'); ?>
<!-- ============================================================= Content Start ============================================================= -->
<style type="text/css">
    .banner-area{background:url('<?php echo e(asset($Cause->image)); ?>') no-repeat;background-size:cover}
</style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center banner-content">
                <div class="col-lg-8">
                    <!--================ Start Popular Causes Area =================-->
                    <h1 class="text-white"><?php echo $Cause->Title_en; ?></h1>
                </div>
            </div>
        </div>
    </section>
    <!--================ End top-section Area =================-->

    <!--================ Start Recent Event Area =================-->
    <section class="event_details section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!--================ Start Popular Causes Area =================-->
                    <img src="<?php echo e(asset($Cause->image)); ?>" class="img-fluid">
                </div>
            </div>
            <div class="event_content mb-40">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                    <div class="right_content">
                    <!--================ Start Popular Causes Area =================-->
                    <h2><?php echo $Cause->Title_en; ?></h2>
                    <p>
                        <!--================ Start Popular Causes Area =================-->
                        <?php echo $Cause->Content_en; ?>

                    </p>
                    <!--================ Start Popular Causes Area =================-->        
                    <form class="form-contact contact_form" method="POST" id="payment-form" action="<?php echo URL::to('paypal'); ?>">
                     <?php echo csrf_field(); ?>

                     
                    <input type="hidden" name="_token" value="ug6eemUCaFgFpEhMsNXGItcSnp67y91yci5xvp3J">
                    <div class="form-group">
                      <input class="form-control" id="amount" type="text" name="amount" placeholder="Donation with Paypal">
                    </div>
                    <div class="form-group mt-2 mb-5 mb-lg-0">
                      <button type="submit" class="button button-contactForm primary-btn">Donation with PayPal</button>
                    </div>
                    </form>  
                    <!--================ Start Popular Causes Area =================-->
                    </div>
                    </div>
                    <div class="col-lg-2 mt-lg-0 mt-5">
                        <div class="left_content">
                            <div class="mb-40">
                                <h5>
                                    <i class=" icon-material-outline-local-atm"></i>
                                    Raised
                                </h5>
                                <!--================ Start Popular Causes Area =================-->
                                <div class="ml-30"><?php echo $Cause->Raised; ?></div>
                            </div>

                            <div class="mb-40">
                                <h5>
                                    <i class="icon-feather-airplay"></i>
                                    Goal
                                </h5>
                                <!--================ Start Popular Causes Area =================-->
                                <div class="ml-30"><?php echo $Cause->Goal; ?></div>
                            </div>

                            <div class="">
                                <h5>
                                    <i class=" icon-feather-heart"></i>
                                    Donors
                                </h5>
                                <!--================ Start Popular Causes Area =================-->
                                <div class="ml-30"><?php echo $Cause->Donors; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Recent Event Area =================-->
    <!--================ Start CTA Area =================-->
    <div class="cta-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="top_text">Thanks for your heart.</p>
                    <h1>Contribute on my charity work by your donation. Thanks for your heart.</h1>
                     <a href="<?php echo url('Contact'); ?>" class="primary-btn">donation</a>
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('english.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugasbesarwad\Charity\resources\views/english/Causes/show.blade.php ENDPATH**/ ?>