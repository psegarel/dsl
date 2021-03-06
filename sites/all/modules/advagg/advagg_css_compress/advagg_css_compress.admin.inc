<?php

/**
 * @file
 * Admin page callbacks for the advagg CSS compression module.
 */

/**
 * Page generation function for admin/settings/css-compress
 */
function advagg_css_compress_admin_page() {
  $output = '';
  return $output . drupal_get_form('advagg_css_compress_admin_settings_form');
}

/**
 * Form builder; Configure advagg settings.
 *
 * @ingroup forms
 * @see system_settings_form()
 */
function advagg_css_compress_admin_settings_form() {
  $form = array();

  $form['advagg_css_compress_agg_files'] = array(
    '#type' => 'checkbox',
    '#title' => t('Compress CSS Files'),
    '#default_value' => variable_get('advagg_css_compress_agg_files', ADVAGG_CSS_COMPRESS_AGG_FILES),
  );
  $form['advagg_css_compress_inline'] = array(
    '#type' => 'checkbox',
    '#title' => t('Compress Inline CSS'),
    '#default_value' => variable_get('advagg_css_compress_inline', ADVAGG_CSS_COMPRESS_INLINE),
  );
  $advagg_css_compressor = variable_get('advagg_css_compressor', ADVAGG_CSS_COMPRESSOR);
  $form['advagg_css_compressor'] = array(
    '#type' => 'radios',
    '#title' => t('Select the compression library to use'),
    '#default_value' => $advagg_css_compressor,
    '#options' => array(
      0 => 'CSSTidy',
      1 => 'CSS Compressor',
      2 => 'YUI CSSMin',
    ),
    '#description' => t('<a href="@csstidy">CSSTidy</a> is a well known CSS compression library, but it has some known issues/limitations.<br \> <a href="@csscompressor">CSS Compressor</a> is a faster CSS compression alternative.<br \> <a href="@cssmin">YUI CSSMin</a> is a php port of the java library from yahoo and is fairly quick.<br \>',
      array(
      '@csstidy' => 'https://github.com/Cerdic/CSSTidy',
      '@csscompressor' => 'http://www.codenothing.com/css-compressor/',
      '@cssmin' => 'http://code.google.com/p/minify/',
    )
    ),
  );
  if ($advagg_css_compressor == 0) {
    $form['advagg_css_compress_preserve_css'] = array(
      '#type' => 'checkbox',
      '#title' => t('CSSTidy: Preserve CSS'),
      '#default_value' => variable_get('advagg_css_compress_preserve_css', ADVAGG_CSS_COMPRESS_PRESERVE_CSS),
      '#description' => t('If disabled CSS selectors will try to be merged together, significantly reducing the css file size. May result in broken layouts is disabled. This only applies to compression through the CSSTidy library.'),
    );
  }
  elseif ($advagg_css_compressor == 1) {
    $form['advagg_css_compress_compressor_level'] = array(
      '#type' => 'radios',
      '#title' => t('CSS Compressor: Select the CSS Compression to use'),
      '#default_value' => variable_get('advagg_css_compress_compressor_level', ADVAGG_CSS_COMPRESS_COMPRESSOR_LEVEL),
      '#options' => array(
        'safe' => t('Safe mode (99% safe) does zero combinations or organizing. Its the best mode if you use a lot of CSS hacks.'),
        'sane' => t('Sane mode (90% safe) does most combinations (multiple long hand notations to single shorthand), but still keeps most declarations in their place.'),
        'small' => t('Small mode (65% safe) reorganizes the whole style sheet, combines as much as it can, and will break most comment hacks.'),
        'full' => t('Full mode (64% safe) does everything small does, but also converts hex codes to their short color name alternatives.'),
      ),
      '#description' => t('This only applies to compression through the CSS Compressor library.'),
    );
  }

  return system_settings_form($form);
}
