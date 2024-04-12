<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
    <!-- Styles -->

</head>

<body class="antialiased">
    <div id="app">
        <test-component></test-component>
    </div>
</body>

</html>
<?php /**PATH C:\Users\migue\Desktop\clevr\resources\views/welcome.blade.php ENDPATH**/ ?>