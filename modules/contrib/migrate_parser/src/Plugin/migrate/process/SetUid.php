<?php

namespace Drupal\migrate_parser\Plugin\migrate\process;

use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;

/**
 * Perform custom value transformations.
 *
 * @MigrateProcessPlugin(
 *   id = "set_uid"
 * )
 *
 * To do custom value transformations use the following:
 *
 * @code
 * field_text:
 *   plugin: set_uid
 *   source: text
 * @endcode
 *
 */

class SetUid extends ProcessPluginBase {
  /**
   * {@inheritdoc}
   */
    public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
        return 1;
    }
}
