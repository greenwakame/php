<?php require_once('ReaderFactory.php'); ?>
<html lang="ja">
<head>
<tilte>ReaderFactoryList</title>
</head>
<body>
<?php
$filename = 'list.xml';

$factory = new ReaderFactory();
$data = $factory->create($filename);
$data->read();
$data->display();
?>
</body>
</html>