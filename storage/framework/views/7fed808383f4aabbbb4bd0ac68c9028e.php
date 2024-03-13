<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="ltr">

<head>
    <!-- REQUIRED META TAGS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('themes/default/css/custom.css')); ?>">
    <!-- PAGE TITLE -->
    <title><?php echo e(Settings::group('company')->get('company_name')); ?></title>

    <!-- FAV ICON -->
    <link rel="icon" type="image" href="<?php echo e($favicon); ?>">

    <?php if(!blank($analytics)): ?>
        <?php $__currentLoopData = $analytics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $analytic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!blank($analytic->analyticSections)): ?>
                <?php $__currentLoopData = $analytic->analyticSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($section->section == \App\Enums\AnalyticSection::HEAD): ?>
                        <?php echo $section->data; ?>

                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</head>

<body>
    <?php if(!blank($analytics)): ?>
        <?php $__currentLoopData = $analytics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $analytic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!blank($analytic->analyticSections)): ?>
                <?php $__currentLoopData = $analytic->analyticSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($section->section == \App\Enums\AnalyticSection::BODY): ?>
                        <?php echo $section->data; ?>

                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <div id="app">
        <default-component />
    </div>

    <?php if(!blank($analytics)): ?>
        <?php $__currentLoopData = $analytics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $analytic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!blank($analytic->analyticSections)): ?>
                <?php $__currentLoopData = $analytic->analyticSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($section->section == \App\Enums\AnalyticSection::FOOTER): ?>
                        <?php echo $section->data; ?>

                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <script>
        const APP_URL = "<?php echo e(env('MIX_HOST')); ?>";
        const APP_DEMO = "<?php echo e(env('MIX_DEMO')); ?>";
        const APP_KEY = "<?php echo e(env('MIX_API_KEY')); ?>";
    </script>

    <script src="<?php echo e(mix('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('themes/default/js/jquery-v3.7.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('themes/default/js/drawer.js')); ?>"></script>
    <script src="<?php echo e(asset('themes/default/js/modal.js')); ?>"></script>
    <script src="<?php echo e(asset('themes/default/js/jqueryScript.js')); ?>"></script>
    <script src="<?php echo e(asset('themes/default/js/tabs.js')); ?>"></script>
    <script src="<?php echo e(asset('themes/default/js/jqueryDropdown.js')); ?>"></script>
    <script src="<?php echo e(asset('themes/default/js/apexcharts/apexcharts.min.js')); ?>"></script>

</body>

</html>
<?php /**PATH /home/u862866016/domains/liwy.co.in/public_html/resources/views/master.blade.php ENDPATH**/ ?>