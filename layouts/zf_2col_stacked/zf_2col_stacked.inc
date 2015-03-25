<?php

/**
 * Implements hook_panels_layouts()
 */
function kolokola_zf_2col_stacked_panels_layouts() {
  $items['zf_2col_stacked'] = array(
    'title' => t('ZF: stacked 2 column row'),
    'category' => t('Foundation: 2'),
    'icon' => 'zf_2col_stacked.png',
    'theme' => 'zf_2col_stacked',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'top' => t('Top'),
      'left' => t('Left'),
      'right' => t('Right'),
      'bottom' => t('Bottom'),
    ),
  );
  return $items;
}

