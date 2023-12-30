<?php $__env->startSection('dashboardcontent'); ?>
 <!-- ====================== links Galleres Content Start =============================================== -->
<!-- / .main-navbar -->
  <?php if($message = Session::get('success')): ?>
  <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> <?php echo e($message); ?></div>
  <?php endif; ?>
  <!-- ====================== links Galleres Content Start =============================================== -->
  <?php if($message = Session::get('Delete')): ?>
  <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Delete!</strong> <?php echo e($message); ?> </div>
  <?php endif; ?>
  <!-- ====================== links Galleres Content Start =============================================== -->
    <div class="main-content-container container-fluid px-4">
      <!-- Page Header -->
      <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
          <span class="text-uppercase page-subtitle">Overview</span>
          <h3 class="page-title"><i class=" icon-feather-file-text"></i> Galleres 
            <a href="<?php echo e(route('dashboardGalleres.create')); ?>" class="mb-2 btn btn-success mr-2">
              <i class="icon-material-outline-add-circle-outline"></i> Add Galleres</a>
            </h3>  
          </div>
        </div>
        <!-- ====================== links Galleres Content Start =============================================== -->
        <div class="row">
          <div class="col-lg-12 mb-4">
            <div class="card card-small lo-stats h-100">
              <div class="card-header border-bottom">
                <h6 class="m-0">Latest Galleres</h6>
                <div class="block-handle"></div>
              </div>
              <div class="card-body p-0">
                <div class="container-fluid px-0">
                  <table class="table mb-0">
                    <thead class="py-2 bg-light text-semibold border-bottom">
                      <tr>
                        <th>Details</th>
                        <th>Details</th>
                        <th class="text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- ====================== links Galleres Content Start =============================================== -->
                      <?php $__currentLoopData = $Galleres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td class="lo-stats__image">
                          <img class="border rounded" src="<?php echo asset($Gallery->image); ?>">
                        </td>
                        <!-- ====================== links Galleres Content Start =============================================== -->
                        <td class="lo-stats__order-details">
                          <span><?php echo e(date('M j, Y', strtotime($Gallery->created_at))); ?></span>
                        </td>
                        <!-- ====================== links Galleres Content Start =============================================== -->
                        <td class="lo-stats__actions">
                          <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                            <form action="<?php echo e(route('dashboardGalleres.destroy',$Gallery->id)); ?>" method="POST" files="true" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <!-- ====================== links Galleres Content Start =============================================== -->
                            <?php echo method_field('DELETE'); ?>
                            <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>
                          </form>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <!-- ====================== links Galleres Content Start =============================================== -->
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer border-top">
                <div class="row">
                   <div class="col">
                    <!-- ====================== links Galleres Content Start =============================================== -->
                    <?php echo $Galleres->links(); ?>

                    <!-- ====================== links Galleres Content Start =============================================== -->
                  </div>
                  <div class="col text-right view-report">
                    <!-- ====================== links Galleres Content Start =============================================== -->
                    <?php if(COUNT($Galleres) != NULL): ?>
                    <a>Showing 10 to <?php echo e(COUNT($Galleres)); ?> of <?php echo e(COUNT($Galleres)); ?> Galleres</a>
                    <?php else: ?>
                    <a>Showing 10 to 0 of 0 Galleres</a>
                    <?php endif; ?>
                    <!-- ====================== links Galleres Content Start =============================================== -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Default Light Table -->
        <!-- Default Dark Table -->
        <!-- End Default Dark Table -->
      </div>
<!-- ====================== links Galleres Content Start =============================================== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cobalagi\Charity\resources\views/dashboard/dashboardGalleres/index.blade.php ENDPATH**/ ?>