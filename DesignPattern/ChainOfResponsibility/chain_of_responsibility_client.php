<?php
require_once 'MaxLengthValidationHandler.php';
require_once 'NotNullVaildationHandler.php';

if (isset($_POST['validation_type']) && isset($_POST['input'])) {
    $validate_type = $_POST['validation_type'];
    $input = $_POST['input'];

    $not_null_handler = new NotNullValidationHandler();
    $length_handler = new MaxLengthValidationHandler(8);

    $option_handler = null;

    switch ($validate_type) {
        case 1:
            include_once 'AlphabetValidationHandler.php';
            $option_handler = new AlphabetValidationHandler();
            break;
        case 2:
            include_once 'NumberValidationHandler.php';
            $option_handler = new NumberValidationHandler();
            break;
    }

    if (!is_null($option_handler)) {
        $length_handler->setHandler($option_handler);
    }
    $handler = $not_null_handler->setHandler($length_handler);

    $result = $handler->validate($_POST['input']);
    if ($result === flase) {
        echo '検証出来ませんでした。';
    } elseif (is_string($result) && $resut !== '') {
        echo '<p style="color: #dd0000;">' . $result . '</p>';
    } else {
        echo '<p style="color: #008800;">OK</p>';
    }
}
?>

<form action="" method="post">
  <div>
    値：<input type="text" name="input">
  </div>
  <div>
    検証内容：<select name="validate_type">
    <option value="0">任意</option>
    <option value="1">半角英字で入力されているか</option>
    <option value="2">半角数字で入力されているか</option>
    </select>
  </div>
  <div>
    <input type="submit">
  </div>
</form>