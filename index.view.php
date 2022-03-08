<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>document</title>
</head>
<body>

 <hi>Task For The Day</hi>

    <ul>
        <li>
            <strong>Name: </strong> <?= $task['title']; ?>
        </li>

        <li>
            <strong>Due Date: </strong> <?= $task['due']; ?>
        </li>

        <li>
            <strong>Personal responsible </strong> <?= $task ['assigned_to']; ?>
        </li>

        <li>
            <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
        </li>

        <li>
            <strong>Status: </strong>

            <?php if ($task ['completed']) : ?>
                <span class="icon">&#9989;</span>
            <?php else: ?>
                <span class="icon">Incomplete;</span>
            <?php endif; ?>
        </li>
    </ul>
</body>
</html>


<?php

    $title = "Hello world"

?>

<html>
    <body>
        {{ title }}
    </body>
</html?>