<?php
    include 'server/server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Info</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Server & File Info</h1>
        <?php if ($server):?>
            <ul class="list-group">
                <?php foreach ($_SERVER as $parm => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $parm; ?>: </strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <br>

        <h1>Client Info</h1>
        <?php if (isset($_POST['fullname'])):?>
            <ul class="list-group">
                <?php foreach ($_POST as $parm => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $parm; ?>: </strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>