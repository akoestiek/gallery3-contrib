<?php defined("SYSPATH") or die("No direct script access.") ?>
<div id="g-add-to-basket">
<div id="basketThumb">
 <img src="<?= $item->thumb_url()?>" title="<?= $item->title?>" alt="<?= $item->title?>" />
</div>
<div id="basketForm">
  <?= $form ?>
</div>
</div>