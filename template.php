<?php

/**
 * Implements template_preprocess_html().
 */
function kolokola_preprocess_html(&$variables) {
}

/**
 * Implements template_preprocess_page.
 */
function kolokola_preprocess_page(&$variables) {
}

/**
 * Implements template_preprocess_node.
 */
function kolokola_preprocess_node(&$variables) {
}

function kolokola_form_alter(&$form, &$form_state, $form_id) {
  // drupal_set_message('<pre>' . print_r($form, TRUE) . '</pre>');

  // Your webform id goes here.
  if ($form_id == 'webform_client_form_2') {
    $form['actions']['submit']['#attributes']['class'] = array (
      'button',
      'radius',
      'expand'
      );
  }
}

function kolokola_preprocess_image(&$vars) {
  $vars["attributes"]["itemprop"] = "image";
}