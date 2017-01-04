<?php
function steffenstheme_form_system_theme_settings_alter(&$form, $form_state) {
  $form['copyright'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Copyright'),
    '#default_value' => theme_get_setting('copyright'),
    '#description'   => t("Copyright"),
  );
}
?>
