<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($company['company_name']); ?></title>
    <link rel="icon" href="<?php echo e($faviconLogo->faviconLogo); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('themes/default/css/custom.css')); ?>">
</head>

<body>
<div class="py-14 px-4 w-full max-w-3xl mx-auto">
    <a href="<?php echo e(route('home')); ?>" class="block mx-auto w-36 mb-8">
        <img class="w-full" src="<?php echo e($logo->logo); ?>" alt="logo">
    </a>

    <div id="loading-show" class="mx-auto w-80 <?php echo e(session()->has('error') ? 'hidden' : ''); ?>">
        <img class="w-full" src="<?php echo e(asset('images/required/payment-loading.gif')); ?>">
    </div>

    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-5 rounded relative"
                 role="alert">
                <span class="block sm:inline"><?php echo e($error); ?></span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer close-button">
                        <i class="lab lab-close-circle-line margin-top-5-px"></i>
                    </span>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php if(session()->has('error')): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-5 rounded relative" role="alert">
            <span class="block sm:inline"><?php echo e(session('error')); ?></span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer close-button">
                    <i class="lab lab-close-circle-line margin-top-5-px"></i>
                </span>
        </div>
    <?php endif; ?>

    <form id="paymentForm" class="w-full" method="POST" action="<?php echo e(route('payment.store', ['order' => $order])); ?>">
        <?php echo csrf_field(); ?>
        <fieldset class="payment-fieldset hidden">
            <?php if(!blank($paymentGateways)): ?>
                <?php $__currentLoopData = $paymentGateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paymentGateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!$cashOnDelivery && $paymentGateway->slug === 'cash-on-delivery'): ?>
                        <?php continue; ?>
                    <?php elseif(!$credit && $paymentGateway->slug === 'credit'): ?>
                        <?php continue; ?>
                    <?php endif; ?>
                    <label class="payment-label" for="<?php echo e($paymentGateway->slug); ?>">
                        <input class="paymentMethod" id="<?php echo e($paymentGateway->slug); ?>" type="radio"
                               name="paymentMethod" value="<?php echo e($paymentGateway->slug); ?>"
                               <?php if($paymentMethod->slug == $paymentGateway->slug): ?> checked <?php endif; ?>>
                        <img src="<?php echo e($paymentGateway->image); ?>" alt="payment">
                        <span><?php echo e($paymentGateway->name); ?></span>
                        <?php if($paymentGateway->slug === 'credit'): ?>
                            <span>
                                    <?php echo e($creditAmount); ?>

                                </span>
                        <?php endif; ?>
                    </label>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </fieldset>

        <?php if(!blank($paymentGateways)): ?>
            <?php $__currentLoopData = $paymentGateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paymentGateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($paymentGateway->misc !== null): ?>
                    <?php if(!blank(json_decode($paymentGateway->misc))): ?>
                        <?php if(!blank(json_decode($paymentGateway->misc)->input)): ?>
                            <?php $__currentLoopData = json_decode($paymentGateway->misc)->input; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make('paymentGateways.' . str_replace('.blade.php', '', $input), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <?php if(!blank($paymentGateways)): ?>
            <button type="submit"
                    class="py-3 w-full rounded-3xl text-center text-base font-medium bg-primary text-white hidden"
                    id="confirmBtn">
                <?php echo e(__('all.label.confirm')); ?>

            </button>
        <?php endif; ?>

        <div id="backBtn"
             class="py-5 px-4 w-full max-w-3xl mx-auto flex flex-col items-center justify-center <?php echo e(!session()->has('error') ? 'hidden' : ''); ?>">
            <a class="text-primary" href="<?php echo e(url('/#/checkout/payment')); ?>"><?php echo e(__('all.label.back_to_payment')); ?></a>
        </div>
    </form>
</div>

<?php
    $jsGateway = [];
    $onClickGateway = [];
    $submitGateway = [];
?>
<?php if(!blank($paymentGateways)): ?>
    <?php $__currentLoopData = $paymentGateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paymentGateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($paymentGateway->misc != null): ?>
            <?php if(!blank(json_decode($paymentGateway->misc))): ?>
                <?php if(!blank(json_decode($paymentGateway->misc)->js)): ?>
                    <?php $__currentLoopData = json_decode($paymentGateway->misc)->js; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $js): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('paymentGateways.' . str_replace('.blade.php', '', $js), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <?php if(!blank(json_decode($paymentGateway->misc)->input)): ?>
                    <?php if(isset(json_decode($paymentGateway->misc)->input[0])): ?>
                        <?php $jsGateway[$paymentGateway->slug] = isset(json_decode($paymentGateway->misc)->input[0]); ?>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if(!blank(json_decode($paymentGateway->misc)->onClick)): ?>
                    <?php if(isset(json_decode($paymentGateway->misc)->onClick) && json_decode($paymentGateway->misc)->onClick): ?>
                        <?php $onClickGateway[$paymentGateway->slug] = json_decode($paymentGateway->misc)->onClick; ?>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if(!blank(json_decode($paymentGateway->misc)->submit)): ?>
                    <?php if(isset(json_decode($paymentGateway->misc)->submit) && json_decode($paymentGateway->misc)->submit): ?>
                        <?php $submitGateway[$paymentGateway->slug] = json_decode($paymentGateway->misc)->submit; ?>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php
    $jsGateway = json_encode($jsGateway);
    $onClickGateway = json_encode($onClickGateway);
    $submitGateway = json_encode($submitGateway);
?>

<script src="<?php echo e(asset('lib/jquery-v3.7.1.min.js')); ?>"></script>
<script>
    const gateway        = <?= $jsGateway ?>;
    const onClickGateway = <?= $onClickGateway ?>;
    const submitGateway  = <?= $submitGateway ?>;
</script>
<?php if(!session()->has('error')): ?>
    <script src="<?php echo e(asset('paymentGateways/payment.js')); ?>"></script>
<?php endif; ?>
</body>

</html>
<?php /**PATH /home/u862866016/domains/liwy.co.in/public_html/resources/views/payment.blade.php ENDPATH**/ ?>