<?php

namespace Drupal\asu_footer\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block for the ASU global footer
 *
 * @Block(
 *   id = "asu_global_footer",
 *   admin_label = @Translation("ASU Global Footer"),
 *   category = @Translation("ASU"),
 * )
 */
class AsuGlobalFooter extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    return [
      '#theme' => 'asu_footer_block',
      '#attached' => [
        'library' => [
          'asu_footer/footer',
        ],
      ],
    ];
  }


}
