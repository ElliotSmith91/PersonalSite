<?php if(isset($success)) :?>
  <div class="message--green">
    <?= $success ?>
  </div>
<?php endif ?>

<?php if($alert): ?>
  <div class="message--alert">
    <ul>
      <?php foreach($alert as $message): ?>
        <li><?php echo html($message) ?></li>
      <?php endforeach ?>
    </ul>
  </div>
<?php endif ?>

<?php if(!isset($success)) {
  snippet('form');
} ?>
