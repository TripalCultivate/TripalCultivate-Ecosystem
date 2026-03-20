<?php

namespace Drupal\trpcultivate_ecosystem\Hook;

use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Implements hooks for TripalCultivate Ecosystem module.
 */
class TripalCultivateEcosystemHooks {

  use StringTranslationTrait;

  /**
   * Implements hook_help().
   */
  #[Hook('help')]
  public function help($route_name, RouteMatchInterface $route_match) {
    switch ($route_name) {
      // Provides the module overview in the help tab.
      case 'help.page.trpcultivate_ecosystem':
        $output = '';
        $output .= '<h3>' . $this->t('About') . '</h3>';

        $output .= '<p>' . $this->t('This module provides content types, fields and importers focused on surveying ecosystem plants and insects.') . '</p>';

        return $output;

      default:
    }
  }

}
