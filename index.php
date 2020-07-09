<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directory Structure</title>
</head>

<style>
    a {
        text-decoration: none;
    }

    a:visited {
        text-decoration: none;
    }

    .container {
        width: 1200px;
        display: table;
        margin: auto;
    }

    .content-center {
        display: flex;
        justify-content: center;
    }
</style>

<body>
    <div class="container">
        <h1 style="text-transform: uppercase;">List of Scripts</h1>
        <ul>
            <?php
            $files = glob('*.html');
            foreach ($files as $file) {
            ?>
                <li><a href="<?= $file ?>"><?= ucwords(str_replace('-', ' ', str_replace('.html', '', $file))) ?></a></li>
            <?php
            }
            ?>
        </ul>
    </div>
</body>

</html>