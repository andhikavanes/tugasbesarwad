<?php $__env->startSection('dashboardcontent'); ?>
<!-- ============================================= links Content Start Setting ============================================= -->
<div class="main-content-container container-fluid px-4">
  <div class="row">
    <div class="col-lg-12 mx-auto mt-4">
      <!-- Edit User Details Card -->
      <div class="card card-small edit-user-details mb-4">
        <div class="card-header p-0">
          <div class="edit-user-details__bg">
            <!-- ============================================= links Content Start Setting ============================================= -->
            <img src="<?php echo e(asset('dashboardassets/images/content-management/3.png')); ?>" alt="Background Image">
          </div>
        </div>
        <div class="card-body p-0">
          <div class="border-bottom clearfix d-flex">
              <nav>
                <div class="nav nav-tabs mt-auto mx-4 pt-2" id="nav-tab" role="tablist" style="border-bottom: 0px solid #d1d4d8;">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">General  Settings</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Translation</a>
                </div>
              </nav>
            </div>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <!-- ============================================= links Content Start Setting ============================================= -->
            <form action="<?php echo e(route('dashboardSettings.update',$Setting->id)); ?>" method="POST" class="py-4" role="form" enctype="multipart/form-data" class="form-horizontal">
             <?php echo csrf_field(); ?>
             <?php echo method_field('PUT'); ?>
            <div class="form-row mx-4">
              <div class="col mb-3">
                <h6 class="form-text m-0">General</h6>
                <p class="form-text text-muted m-0">Setup your General Site Details.</p>
              </div>
            </div>
            <div class="form-row mx-4">
              <div class="col-lg-8">
                <div class="form-row">
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <div class="form-group col-md-6">
                    <label for="displayEmail">Display Language Publicly</label>
                    <select class="custom-select" name="Language">
                      <option selected><?php echo e($Setting->Language); ?></option>
                      <option value="Arabic">Arabic</option>
                      <option value="English">English</option>
                      <option value="German">German</option>
                    </select>
                  </div>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <div class="form-group col-md-6">
                    <label for="Site Title">Site Title</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Site Title" name="SiteTitle" value="<?php echo e($Setting->SiteTitle); ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lastName">Name</label>
                    <input type="text" class="form-control" id="lastName" name="Name" value="<?php echo e($Setting->Name); ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="userLocation">Location</label>
                    <div class="input-group input-group-seamless">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="icon-material-outline-my-location"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="Location" value="<?php echo e($Setting->Location); ?>">
                    </div>
                  </div>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <div class="form-group col-md-6">
                    <label for="userLocation">Googlemap</label>
                    <div class="input-group input-group-seamless">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="icon-material-outline-my-location"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="Googlemap" value="<?php echo e($Setting->Googlemap); ?>">
                    </div>
                  </div>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <div class="form-group col-md-6">
                    <label for="userLocation">video</label>
                    <div class="input-group input-group-seamless">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class=" icon-feather-video"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="video" value="<?php echo e($Setting->video); ?>">
                    </div>
                  </div>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <div class="form-group col-md-6">
                    <label for="phoneNumber">Phone Number</label>
                    <div class="input-group input-group-seamless">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="icon-feather-smartphone"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" id="phoneNumber" name="PhoneNumber" value="<?php echo e($Setting->PhoneNumber); ?>">
                    </div>
                  </div>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <div class="form-group col-md-6">
                    <label for="emailAddress">Email</label>
                    <div class="input-group input-group-seamless">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="icon-material-outline-email"></i>
                        </div>
                      </div>
                      <input type="email" class="form-control" id="emailAddress" name="Email" value="<?php echo e($Setting->Email); ?>">
                    </div>
                  </div>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                </div>
              </div>
              <div class="col-lg-4">
                <label for="userProfilePicture" class="text-center w-100 mb-4">Logo Picture</label>
                <div class="edit-user-details__avatar m-auto">
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <?php if(isset(Setting()->LogoPicture)): ?>
                  <img src="<?php echo asset($Setting->LogoPicture); ?>" alt="Logo">
                  <?php else: ?>
                  <img src="<?php echo e(asset('dashboardassets/images/logo2.png')); ?>" alt="Logo">
                  <?php endif; ?>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                </div>
                <!-- ============================================= links Content Start Setting ============================================= -->
                <input class="btn btn-sm btn-white d-table mx-auto mt-4" 
                       type="file" placeholder="Upload Image" name="LogoPicture" 
                       value="<?php echo e($Setting->LogoPicture); ?>">
                       <!-- ============================================= links Content Start Setting ============================================= -->
              </div>
            </div>
            <!-- ============================================= links Content Start Setting ============================================= -->
            <div class="form-row mx-4">
              <div class="form-group col-md-6">
                <label for="userBio">Meta Description</label>
                <textarea style="min-height: 87px;"  class="form-control" name="MetaDescription" >
                  <?php echo e($Setting->MetaDescription); ?>

                </textarea>
              </div>
              <!-- ============================================= links Content Start Setting ============================================= -->
              <script type="text/javascript">"use strict";jQuery("#userTags").tagsinput();</script>
              <div class="form-group col-md-6">
                <label for="userTags">Meta KeyWords</label>
                <input data-role="tagsinput" id="userTags" name="MetaKeyWords" value="<?php echo e($Setting->MetaKeyWords); ?>" class="d-none">
              </div>
            </div>
            <!-- ============================================= links Content Start Setting ============================================= -->
            <hr>
            <div class="form-row mx-4">
              <div class="col mb-3">
                <h6 class="form-text m-0">Social</h6>
                <p class="form-text text-muted m-0">Setup your social profiles info.</p>
              </div>
            </div>
            <div class="form-row mx-4">
              <div class="form-group col-md-4">
                <label for="socialFacebook">Facebook</label>
                <div class="input-group input-group-seamless">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icon-brand-facebook-f"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" name="Facebook" value="<?php echo e($Setting->Facebook); ?>">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="socialTwitter">Twitter</label>
                <div class="input-group input-group-seamless">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icon-brand-twitter"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" name="Twitter" value="<?php echo e($Setting->Twitter); ?>">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="socialGitHub">GitHub</label>
                <div class="input-group input-group-seamless">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icon-feather-github"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" name="GitHub" value="<?php echo e($Setting->GitHub); ?>">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="socialSlack">Slack</label>
                <div class="input-group input-group-seamless">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icon-feather-slack"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" name="Slack" value="<?php echo e($Setting->Slack); ?>">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="socialDribbble">Dribbble</label>
                <div class="input-group input-group-seamless">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icon-brand-dribbble"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" name="Dribbble" value="<?php echo e($Setting->Dribbble); ?>">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="socialGoogle">LinkedIn</label>
                <div class="input-group input-group-seamless">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icon-brand-linkedin"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" name="LinkedIn" value="<?php echo e($Setting->LinkedIn); ?>">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="socialGoogle">Behance</label>
                <div class="input-group input-group-seamless">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icon-line-awesome-behance"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" name="Behance" value="<?php echo e($Setting->Behance); ?>">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="socialGoogle">Digg</label>
                <div class="input-group input-group-seamless">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icon-brand-digg"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" name="Digg" value="<?php echo e($Setting->Digg); ?>">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="socialGoogle">Flickr</label>
                <div class="input-group input-group-seamless">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class=" icon-line-awesome-flickr"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" name="Flickr" value="<?php echo e($Setting->Flickr); ?>">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="socialGoogle">Vimeo</label>
                <div class="input-group input-group-seamless">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icon-brand-vimeo-v"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" name="Vimeo" value="<?php echo e($Setting->Vimeo); ?>">
                </div>
              </div>
               <div class="form-group col-md-4">
                <label for="socialGoogle">Youtube</label>
                <div class="input-group input-group-seamless">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icon-feather-youtube"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" name="youtube" value="<?php echo e($Setting->youtube); ?>">
                </div>
              </div>
               <div class="form-group col-md-4">
                <label for="socialGoogle">Site App</label>
                <div class="input-group input-group-seamless">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icon-feather-globe"></i>
                    </div>
                  </div>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <input type="text" class="form-control" name="url_App" value="<?php echo e($Setting->url_App); ?>">
                  <input hidden="" value="<?php echo e($Setting->about_en); ?>" type="text" name="about_en">
                  <input hidden="" value="<?php echo e($Setting->about_gr); ?>" type="text" name="about_gr">
                  <input hidden="" value="<?php echo e($Setting->about_ar); ?>" type="text" name="about_ar">
                  <input hidden="" value="<?php echo e($Setting->title_home_en); ?>" type="text" name="title_home_en">
                  <input hidden="" value="<?php echo e($Setting->title_home_gr); ?>" type="text" name="title_home_gr">
                  <input hidden="" value="<?php echo e($Setting->title_home_ar); ?>" type="text" name="title_home_ar">
                  <input hidden="" value="<?php echo e($Setting->sub_title_home_en); ?>" type="text" name="sub_title_home_en">
                  <input hidden="" value="<?php echo e($Setting->sub_title_home_gr); ?>" type="text" name="sub_title_home_gr">
                  <input hidden="" value="<?php echo e($Setting->sub_title_home_ar); ?>" type="text" name="sub_title_home_ar">
                  <input hidden="" value="<?php echo e($Setting->title_about_en); ?>" type="text" name="title_about_en">
                  <input hidden="" value="<?php echo e($Setting->title_about_gr); ?>" type="text" name="title_about_gr">
                  <input hidden="" value="<?php echo e($Setting->title_about_ar); ?>" type="text" name="title_about_ar">
                  <input hidden="" value="<?php echo e($Setting->content_about_en); ?>" type="text" name="content_about_en">
                  <input hidden="" value="<?php echo e($Setting->content_about_gr); ?>" type="text" name="content_about_gr">
                  <input hidden="" value="<?php echo e($Setting->content_about_ar); ?>" type="text" name="content_about_ar">
                  <input hidden="" value="<?php echo e($Setting->content_blog_en); ?>" type="text" name="content_blog_en">
                  <input hidden="" value="<?php echo e($Setting->content_blog_gr); ?>" type="text" name="content_blog_gr">
                  <input hidden="" value="<?php echo e($Setting->content_blog_ar); ?>" type="text" name="content_blog_ar">
                  <input hidden="" value="<?php echo e($Setting->content_feature_en); ?>" type="text" name="content_feature_en">
                  <input hidden="" value="<?php echo e($Setting->content_feature_gr); ?>" type="text" name="content_feature_gr">
                  <input hidden="" value="<?php echo e($Setting->content_feature_ar); ?>" type="text" name="content_feature_ar">
                  <input hidden="" value="<?php echo e($Setting->content_feature_two_en); ?>" type="text" name="content_feature_two_en">
                  <input hidden="" value="<?php echo e($Setting->content_feature_two_gr); ?>" type="text" name="content_feature_two_gr">
                  <input hidden="" value="<?php echo e($Setting->content_feature_two_ar); ?>" type="text" name="content_feature_two_ar">
                  <input hidden="" value="<?php echo e($Setting->content_feature_three_en); ?>" type="text" name="content_feature_three_en">
                  <input hidden="" value="<?php echo e($Setting->content_feature_three_gr); ?>" type="text" name="content_feature_three_gr">
                  <input hidden="" value="<?php echo e($Setting->content_feature_three_ar); ?>" type="text" name="content_feature_three_ar">
                  <!-- ============================================= links Content Start Setting ============================================= -->
                </div>
              </div>
            </div>
            <hr>
            <!-- ============================================= links Content Start Setting ============================================= -->
            <div class="form-row mx-4">
              <div class="col mb-3">
                <h6 class="form-text m-0">Favicon</h6>
                <p class="form-text text-muted m-0">Setup your Favicon with All Drive.</p>
              </div>
            </div>
            <div class="form-row mx-4">
              <div class="form-group col-md-4">
                <label for="socialFacebook">Favicon 32x32</label>
                <input class="btn btn-sm btn-white d-table" type="file" name="FaviconOne" placeholder="Upload Image 32x32" 
                       value="<?php echo e($Setting->FaviconOne); ?>">
              </div>
              <div class="form-group col-md-4">
                <label for="socialFacebook">Favicon 96x96</label>
                <input class="btn btn-sm btn-white d-table" type="file" name="FaviconTwo" placeholder="Upload Image 96x96" 
                       value="<?php echo e($Setting->FaviconTwo); ?>">
              </div>
              <div class="form-group col-md-4">
                <label for="socialFacebook">Favicon 16x16</label>
                <input class="btn btn-sm btn-white d-table" type="file" name="FaviconThree" placeholder="Upload Image 16x16" 
                       value="<?php echo e($Setting->FaviconThree); ?>">
              </div>
            </div>
            <div class="card-footer ">
              <button class="btn btn-sm btn-accent ml-auto d-table mr-3" type="submit">Save Changes</button>
            </div>
            </form>
            <!-- ============================================= links Content Start Setting ============================================= -->
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="py-2"></div>
            <div class="form-row mx-4">
              <div class="col mb-3">
                 <h6 class="form-text m-0">Translation</h6>
                  <p class="form-text text-muted m-0">Setup your Translation Site Details.</p>
              </div>
            </div>
            <!-- ============================================= links Content Start Setting ============================================= -->
            <div class="form-row mx-4">
              <!-- ============================================= links Content Start Setting ============================================= -->
              <form action="<?php echo e(route('dashboardSettings.update',$Setting->id)); ?>" method="POST" class="py-4" role="form" enctype="multipart/form-data" class="form-horizontal">
             <?php echo csrf_field(); ?>
             <?php echo method_field('PUT'); ?>
                    <div class="col-lg-12">
                      <div class="form-row">
                     <div class="form-group col-md-4">
                      <label for="about_en">About Site English</label>
                        <textarea style="min-height: 87px;" class="form-control" name="about_en" value="<?php echo e($Setting->about_en); ?>"><?php echo e($Setting->about_en); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">About Site German</label>
                      <textarea style="min-height: 87px;"  class="form-control" name="about_gr" value="<?php echo e($Setting->about_gr); ?>"><?php echo e($Setting->about_gr); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">About Site Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control" name="about_ar" value="<?php echo e($Setting->about_ar); ?>"><?php echo e($Setting->about_ar); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Title Site English</label>
                      <textarea style="min-height: 87px;" class="form-control" name="title_home_en" value="<?php echo e($Setting->title_home_en); ?>"><?php echo e($Setting->title_home_en); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">Title Site German</label>
                      <textarea style="min-height: 87px;"  class="form-control" name="title_home_gr" value="<?php echo e($Setting->title_home_gr); ?>"><?php echo e($Setting->title_home_gr); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Title Site Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control" name="title_home_ar" value="<?php echo e($Setting->title_home_ar); ?>"><?php echo e($Setting->title_home_ar); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Sub Title Site English</label>
                      <textarea style="min-height: 87px;" class="form-control" name="sub_title_home_en" value="<?php echo e($Setting->sub_title_home_en); ?>"><?php echo e($Setting->sub_title_home_en); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">Sub Title Site German</label>
                      <textarea style="min-height: 87px;" class="form-control" name="sub_title_home_gr" value="<?php echo e($Setting->sub_title_home_gr); ?>"><?php echo e($Setting->sub_title_home_gr); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="sub_title_home_ar">Sub Title Site Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control" name="sub_title_home_ar" value="<?php echo e($Setting->sub_title_home_ar); ?>"><?php echo e($Setting->sub_title_home_ar); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">About English</label>
                      <textarea style="min-height: 87px;" class="form-control" name="title_about_en" value="<?php echo e($Setting->title_about_en); ?>"><?php echo e($Setting->title_about_en); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">About German</label>
                      <textarea style="min-height: 87px;" class="form-control" name="title_about_gr" value="<?php echo e($Setting->title_about_gr); ?>"><?php echo e($Setting->title_about_gr); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">About Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control" name="title_about_ar" value="<?php echo e($Setting->title_about_ar); ?>"><?php echo e($Setting->title_about_ar); ?></textarea>
                     </div>
                    <div class="form-group col-md-4">
                      <label for="about_en">Content About English</label>
                      <textarea style="min-height: 87px;" class="form-control" name="content_about_en" value="<?php echo e($Setting->content_about_en); ?>"><?php echo e($Setting->content_about_en); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">Content About German</label>
                      <textarea style="min-height: 87px;" class="form-control" name="content_about_gr" value="<?php echo e($Setting->content_about_gr); ?>"><?php echo e($Setting->content_about_gr); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content About Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control" name="content_about_ar" value="<?php echo e($Setting->content_about_ar); ?>"><?php echo e($Setting->content_about_ar); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content blog English</label>
                      <textarea style="min-height: 87px;" class="form-control" name="content_blog_en" value="<?php echo e($Setting->content_blog_en); ?>"><?php echo e($Setting->content_blog_en); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">Content blog German</label>
                      <textarea style="min-height: 87px;" class="form-control" name="content_blog_gr" value="<?php echo e($Setting->content_blog_gr); ?>"><?php echo e($Setting->content_blog_gr); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content blog Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control" name="content_blog_ar" value="<?php echo e($Setting->content_blog_ar); ?>"><?php echo e($Setting->content_blog_ar); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content Feature English</label>
                      <textarea style="min-height: 87px;" class="form-control" name="content_feature_en" value="<?php echo e($Setting->content_feature_en); ?>"><?php echo e($Setting->content_feature_en); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">Content Feature German</label> 
                      <textarea style="min-height: 87px;" class="form-control" name="content_feature_gr" value="<?php echo e($Setting->content_feature_gr); ?>"><?php echo e($Setting->content_feature_gr); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content Feature Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control" name="content_feature_ar" value="<?php echo e($Setting->content_feature_ar); ?>"><?php echo e($Setting->content_feature_ar); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content Two Feature English</label>
                      <textarea style="min-height: 87px;" class="form-control" name="content_feature_two_en" value="<?php echo e($Setting->content_feature_two_en); ?>"><?php echo e($Setting->content_feature_two_en); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">Content Two Feature German</label>
                      <textarea style="min-height: 87px;" class="form-control" name="content_feature_two_gr" value="<?php echo e($Setting->content_feature_two_gr); ?>"><?php echo e($Setting->content_feature_two_gr); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content Two Feature Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control" name="content_feature_two_ar" value="<?php echo e($Setting->content_feature_two_ar); ?>"><?php echo e($Setting->content_feature_two_ar); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content Three Feature English</label>
                      <textarea style="min-height: 87px;" class="form-control" name="content_feature_three_en" value="<?php echo e($Setting->content_feature_three_en); ?>"><?php echo e($Setting->content_feature_three_en); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">Content Three Feature German</label>
                      <textarea style="min-height: 87px;" class="form-control" name="content_feature_three_gr" value="<?php echo e($Setting->content_feature_three_gr); ?>"><?php echo e($Setting->content_feature_three_gr); ?></textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content Three Feature Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control" name="content_feature_three_ar" value="<?php echo e($Setting->content_feature_three_ar); ?>"><?php echo e($Setting->content_feature_three_ar); ?></textarea>
                     </div>
                   <!-- ============================================= links Content Start Setting ============================================= -->
                  <input hidden="" value="<?php echo e($Setting->Language); ?>" type="text" name="Language">
                  <input hidden="" value="<?php echo e($Setting->SiteTitle); ?>" type="text" name="SiteTitle">
                  <input hidden="" value="<?php echo e($Setting->Name); ?>" type="text" name="Name">
                  <input hidden="" value="<?php echo e($Setting->Location); ?>" type="text" name="Location">
                  <input hidden="" value="<?php echo e($Setting->Googlemap); ?>" type="text" name="Googlemap">
                  <input hidden="" value="<?php echo e($Setting->video); ?>" type="text" name="video">
                  <input hidden="" value="<?php echo e($Setting->PhoneNumber); ?>" type="text" name="PhoneNumber">
                  <input hidden="" value="<?php echo e($Setting->Email); ?>" type="text" name="Email">
                  <input hidden="" value="<?php echo e($Setting->LogoPicture); ?>" type="text" name="LogoPicture">
                  <input hidden="" value="<?php echo e($Setting->MetaDescription); ?>" type="text" name="MetaDescription">
                  <input hidden="" value="<?php echo e($Setting->MetaKeyWords); ?>" type="text" name="MetaKeyWords">
                  <input hidden="" value="<?php echo e($Setting->Facebook); ?>" type="text" name="Facebook">
                  <input hidden="" value="<?php echo e($Setting->Twitter); ?>" type="text" name="Twitter">
                  <input hidden="" value="<?php echo e($Setting->GitHub); ?>" type="text" name="GitHub">
                  <input hidden="" value="<?php echo e($Setting->Slack); ?>" type="text" name="Slack">
                  <input hidden="" value="<?php echo e($Setting->Dribbble); ?>" type="text" name="Dribbble">
                  <input hidden="" value="<?php echo e($Setting->LinkedIn); ?>" type="text" name="LinkedIn">
                  <input hidden="" value="<?php echo e($Setting->Behance); ?>" type="text" name="Behance">
                  <input hidden="" value="<?php echo e($Setting->Digg); ?>" type="text" name="Digg">
                  <input hidden="" value="<?php echo e($Setting->Flickr); ?>" type="text" name="Flickr">
                  <input hidden="" value="<?php echo e($Setting->Vimeo); ?>" type="text" name="Vimeo">
                  <input hidden="" value="<?php echo e($Setting->youtube); ?>" type="text" name="youtube">
                  <input hidden="" value="<?php echo e($Setting->url_App); ?>" type="text" name="url_App">
                  <input hidden="" value="<?php echo e($Setting->FaviconOne); ?>" type="text" name="FaviconOne">
                  <input hidden="" value="<?php echo e($Setting->FaviconTwo); ?>" type="text" name="FaviconTwo">
                  <input hidden="" value="<?php echo e($Setting->FaviconThree); ?>" type="text" name="FaviconThree">
                  <!-- ============================================= links Content Start Setting ============================================= -->
                      </div>
                    </div>
                  </div>
                 <!-- ============================================= links Content Start Setting ============================================= -->
                  <hr>
                  <div class="form-row mx-4">
                    <div class="col mb-3">
                      <h6 class="form-text m-0">Picture</h6>
                      <p class="form-text text-muted m-0">Setup your Picture with All Drive.</p>
                    </div>
                  </div>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <div class="form-row mx-4">
                      <div class="form-group col-md-4">
                      <label for="socialFacebook">About Picture</label> <br>
      <input class="btn btn-sm btn-white d-table" type="file" name="AboutPicture<?php echo e($errors->has('AboutPicture') ? ' is-invalid' : ''); ?>" placeholder="Upload Image 96x96" 
                       value="<?php echo e($Setting->AboutPicture); ?>">
                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    </div>
                     <div class="form-group col-md-4">
                      <label for="socialFacebook">Home Picture</label> <br>
                       <input class="btn btn-sm btn-white d-table" type="file" name="HomePicture<?php echo e($errors->has('HomePicture') ? ' is-invalid' : ''); ?>" placeholder="Upload Image 96x96" 
                       value="<?php echo e($Setting->HomePicture); ?>">
                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    </div>
                  </div>
                  <!-- ============================================= links Content Start Setting ============================================= -->
             <div class="card-footer ">
              <button class="btn btn-sm btn-accent ml-auto d-table mr-3" type="submit">Save Changes</button>
            </div>
            </form>
            <!-- ============================================= links Content Start Setting ============================================= -->
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================= links Content Start Setting ============================================= -->
      <!-- End Edit User Details Card -->
    </div>
  </div>
</div>
<!-- ============================================= links Content Start Roles ============================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugasbesarwad\Charity\resources\views/dashboard/dashboardSettings/edit.blade.php ENDPATH**/ ?>