<?php
declare(strict_types=1);

/**
 * Error layout template.
 *
 * @var int $statusCode
 * @var string $content
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error <?= $statusCode ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">
<div class="container min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="col-lg-8">
        <div class="card shadow-lg border-0">
            <?= $content ?>
        </div>
    </div>
</div>
</body>
</html>
