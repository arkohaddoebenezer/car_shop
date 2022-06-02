

<?php $__env->startSection('content'); ?>
<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border border">
                    <h3 class="bg-gray p-4">Register Now</h3>
                    <div class="p-4">
                        <!-- Validation Errors -->
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
                        <fieldset class="p-4">
                            <input id="name" class="border p-3 w-100 my-2" type="text" name="name" placeholder="Name*"
                                :value="old('name')" required autofocus />
                            <input id="email" class="border p-3 w-100 my-2" type="email" placeholder="Email*"
                                name="email" :value="old('email')" required>
                            <input id="password" class="border p-3 w-100 my-2" type="password" placeholder="Password*"
                                name="password" required autocomplete="new-password">
                            <input id="password_confirmation" class="border p-3 w-100 my-2" type="password"
                                placeholder="Confirm Password*" name="password_confirmation" required>
                            <div class="loggedin-forgot d-inline-flex my-3">
                                <input type="checkbox" id="registering" class="mt-1">
                                <label for="registering" class="px-2">By registering, you accept our <a
                                        class="text-primary font-weight-bold" href="terms-condition.html">Terms &
                                        Conditions</a></label>
                            </div>
                            <button type="submit"
                                class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">Register
                                Now</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\car_shop\resources\views/auth/register.blade.php ENDPATH**/ ?>