<?php
$class = 'message alert alert-success';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<div id="<?php echo h($key) ?>Message" class="<?php echo h($class) ?>" role="alert"><?php echo h($message) ?></div>
