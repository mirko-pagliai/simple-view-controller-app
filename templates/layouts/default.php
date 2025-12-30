<?php
declare(strict_types=1);

/**
 * Default layout.
 *
 * @var string $content
 */
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simple view controller app</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <main class="container p-4">
            <?php echo $content; ?>
        </main>

        <footer class="bg-light text-center py-4 mt-5">
            <div class="container">
                <p class="text-muted mb-0">&copy; <?= date('Y') ?></p>
            </div>
        </footer>
    </body>
</html>
