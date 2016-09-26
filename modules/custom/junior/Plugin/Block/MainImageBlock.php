<?php

/**
 * @file
 * Contains \Drupal\junior\Plugin\Block\MainImageBlock.
 */

namespace Drupal\junior\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Main image on front page.
 *
 * @Block(
 *   id = "main_image_block",
 *   admin_label = @Translation("Main Image"),
 * )
 */
class MainImageBlock extends BlockBase
{

  /**
   * @return array
   */
  public function build()
  {
    $build = array(
      'image' => '../images/coding_and_coffee_1.jpg'
    );

    return $build;
  }

}
