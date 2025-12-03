<?php
$logfile = __DIR__ . '/logs/webhook_log.txt';
$logs = file_get_contents($logfile);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container mt-5">
        <h1 class="text-secondary">
            webhook de notificaciones
        </h1>

        <pre
            class="bg-light p-3"><?php echo htmlspecialchars($logs ? $logs : "no se encuentran notificaciones aun."); ?></pre>
    </div>

</body>

</html>