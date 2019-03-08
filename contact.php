<?php foreach($_SERVER as $key => $value): ?>
    <?php if($key !== 'HTTP_HOST' || $key !== 'HTTP_CONNECTION'): ?>
    
    <div><?php echo "$key: $value" ?></div>
<?php endif; ?>
<?php endforeach; ?>

