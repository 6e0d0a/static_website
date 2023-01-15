<?php

define('GIT', '/usr/bin/git ');

$commands = [
    GIT . 'status',
    GIT . 'pull'
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deploy</title>
</head>
<body>
    <?php foreach ($commands as $com): ?>
        <li>
            <strong><?= $com ?></strong>
            <pre>
            <?= htmlentities(shell_exec($com)) ?>
            </pre>
        </li>
    <?php endforeach; ?>
</body>
</html>