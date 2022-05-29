<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light navigation">
                    <a class="navbar-brand" href="index.html">
                        <img class="logo" src="media/car_logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto main-nav ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item dropdown dropdown-slide">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Dashboard<span><i
                                            class="fa fa-angle-down"></i></span>
                                </a>

                                <!-- Dropdown list -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                                    <a class="dropdown-item" href="dashboard-my-ads.html">Dashboard My Ads</a>
                                    <a class="dropdown-item" href="dashboard-favourite-ads.html">Dashboard
                                        Favourite Ads</a>
                                    <a class="dropdown-item" href="dashboard-archived-ads.html">Dashboard Archived
                                        Ads</a>
                                    <a class="dropdown-item" href="dashboard-pending-ads.html">Dashboard Pending
                                        Ads</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-slide">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Pages <span><i class="fa fa-angle-down"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about-us.html">About Us</a>
                                    <a class="dropdown-item" href="contact-us.html">Contact Us</a>
                                    <a class="dropdown-item" href="user-profile.html">User Profile</a>
                                    <a class="dropdown-item" href="404.html">404 Page</a>
                                    <a class="dropdown-item" href="package.html">Package</a>
                                    <a class="dropdown-item" href="single.html">Single Page</a>
                                    <a class="dropdown-item" href="store.html">Store Single</a>
                                    <a class="dropdown-item" href="single-blog.html">Single Post</a>
                                    <a class="dropdown-item" href="blog.html">Blog</a>

                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-slide">
                                <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Listing <span><i class="fa fa-angle-down"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="category.html">Ad-Gird View</a>
                                    <a class="dropdown-item" href="ad-listing-list.html">Ad-List View</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto mt-10">
                            <?php if(Route::has('login')): ?>
                                <?php if(!Auth::check()): ?>
                                    <li class="nav-item">
                                        <a class="nav-link login-button" href="<?php echo e(route('login')); ?>">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link login-button" href="<?php echo e(route('register')); ?>">Register</a>
                                    </li>
                                <?php else: ?>
                                    <li class="nav-item">
                                        <slot name="content">
                                            <!-- Authentication -->
                                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                                <?php echo csrf_field(); ?>

                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                                        this.closest(\'form\').submit();']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                                        this.closest(\'form\').submit();']); ?>
                                                    <?php echo e(__('Log Out')); ?>

                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            </form>
                                        </slot>
                                    </li>
                                    
                                <?php endif; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<?php /**PATH E:\car_shop\resources\views/includes/users/navbar.blade.php ENDPATH**/ ?>