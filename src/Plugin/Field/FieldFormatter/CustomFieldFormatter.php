<?php
/**
 * @file
 * Contains \Drupal\custom_field_formatter\Plugin\field\formatter\CustomFieldFormatter.
 */

namespace Drupal\custom_field_formatter\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'custom_link' formatter.
 *
 * @CustomFieldFormatter(
 *   id = "custom_link",
 *   label = @Translation("Custom Field Formatter"),
 *   field_types = {
 *     "link"
 *   }
 * )
 */
class CustomFieldFormatter extends FormatterBase { 
  /**
  * {@inheritdoc}
  */
  public function viewElements(FieldItemListInterface $items) {
    $elements = array();
    foreach ($items as $delta => $item) {
      $url = $item->url;
      $elements[$delta] = array(
        '#theme' => 'custom_field_formatter',
        '#url' => $url,
      );
    }

    return $elements;
  }

}