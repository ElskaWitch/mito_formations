<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind / DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.20.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mito Formation | <?= $title ?></title>
</head>

<body>
    <!-- navbar -->
    <?php include('partials/_nav.php') ?>
    <main class="">
        <!-- main content -->
        <?= $content ?>
    </main>
    <!-- footer footer-->
    <?php include('partials/_footer.php') ?>
</body>

</html>