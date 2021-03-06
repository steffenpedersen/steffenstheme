<!--
Drupal themes are based on template files, defined with the extension .tpl.php.
If you want to create a very simple theme, you actually don't need to have any template files at all.
Your theme could be just CSS. Drupal comes with default template files for all of the code it outputs.

There's a lot of templates
comment.tpl.php
search-results.tpl.php
html.tpl.php
-->

<div id="wrapper">

  <div id="header">
    <a href="<?php print $front_page;?>">
      <img src="/<?php print $directory;?>/images/logo.png" alt="<?php print $site_name;?>" height="40" width="184" />
    </a>

    <?php if ($main_menu): ?>
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu'))); ?>
    <?php endif; ?>

  </div>

  <?php if ($page['left']): ?>
    <div id="sidebar-left">
      <?php print render($page['left']); ?>
    </div>
  <?php endif; ?>

  <div id="content">
    <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php print render($messages); ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <?php print render($page['content']); ?>
  </div>

  <?php if ($page['right']): ?>
    <div id="sidebar-right">
      <?php print render($page['right']); ?>
    </div>
  <?php endif; ?>

  <div id="footer">
    <?php if ($page['footer']): ?>
      <?php print render($page['footer']); ?>
      <p>Copyright <?php print theme_get_setting('copyright'); ?></p>
    <?php endif; ?>
  </div>

</div>
