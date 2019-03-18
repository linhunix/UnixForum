<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?= lnxmcp()->getResource("title") ?>
    </title>
    <?= lnxmcp()->ShowBlock("meta",array(),"seo"); ?>
    <?= lnxmcp()->ShowBlock("head"); ?>
    <?= lnxmcp()->Block("head",array(),"bootstrap"); ?>
</head>
<body>
<?= lnxmcp()->ShowBlock("navbar",array(),"bootstrap");?>
<?= lnxmcp()->Block("title",array(),"bootstrap");?>

