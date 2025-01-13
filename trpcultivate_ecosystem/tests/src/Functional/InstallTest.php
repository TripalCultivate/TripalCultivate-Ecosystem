<?php

namespace Drupal\Tests\trpcultivate_ecosystem\Functional;

use Drupal\Core\Routing\RouteMatch;
use Drupal\Core\Url;
use Drupal\tripal_chado\Database\ChadoConnection;
use Drupal\Tests\tripal_chado\Functional\ChadoTestBrowserBase;

/**
 * Simple test to ensure that main page loads with module enabled.
 *
 * @group template
 * @group Installation
 */
class InstallTest extends ChadoTestBrowserBase {

  /**
   * The theme to use when testing.
   *
   * @var string
   */
  protected $defaultTheme = 'stark';

  /**
   * A Database query interface for querying Chado using Tripal DBX.
   *
   * @var \Drupal\tripal_chado\Database\ChadoConnection
   */
  protected ChadoConnection $chado_connection;

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = ['help', 'tripal_chado'];

  /**
   * The name of your module in the .info.yml.
   *
   * @var string
   */
  protected static string $module_name = 'Ecosystem Survey';

  /**
   * The machine name of this module.
   *
   * @var string
   */
  protected static string $module_machinename = 'trpcultivate_ecosystem';

  /**
   * A small excert from your help page.
   *
   * Do not cross newlines.
   *
   * @var string
   */
  protected static string $help_text_excerpt = 'content types, fields and importers focused on surveying ecosystem plants and insects.';

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {

    parent::setUp();

    // Ensure we see all logging in tests.
    \Drupal::state()->set('is_a_test_environment', TRUE);

    // Open connection to Chado.
    $this->chado_connection = $this->getTestSchema(ChadoTestBrowserBase::PREPARE_TEST_CHADO);

    $moduleHandler = $this->container->get('module_handler');
    $moduleInstaller = $this->container->get('module_installer');
    $this->assertFalse($moduleHandler->moduleExists('trpcultivate_ecosystem'));
    $this->assertTrue($moduleInstaller->install(['trpcultivate_ecosystem']));
  }

  /**
   * Tests that a specific set of pages load with a 200 response.
   */
  public function testLoad() {
    $session = $this->getSession();

    // Ensure we have an admin user.
    $user = $this->drupalCreateUser(['access administration pages', 'administer modules']);
    $this->drupalLogin($user);

    $context = '(modules installed: ' . implode(',', self::$modules) . ')';

    // Front Page.
    $this->drupalGet(Url::fromRoute('<front>'));
    $status_code = $session->getStatusCode();
    $this->assertEquals(200, $status_code, "The front page should be able to load $context.");

    // Extend Admin page.
    $this->drupalGet('admin/modules');
    $status_code = $session->getStatusCode();
    $this->assertEquals(200, $status_code, "The module install page should be able to load $context.");
    $this->assertSession()->pageTextContains(self::$module_name);

  }

  /**
   * Tests the module overview help.
   */
  public function testHelp() {
    $session = $this->getSession();

    $some_expected_text = self::$help_text_excerpt;

    // Ensure we have an admin user.
    $permissions = ['access administration pages', 'administer modules', 'access help pages'];
    $user = $this->drupalCreateUser($permissions);
    $this->drupalLogin($user);

    $context = '(modules installed: ' . implode(',', self::$modules) . ')';

    // Call the hook to ensure it is returning text.
    $name = 'help.page.' . $this::$module_machinename;
    $match = $this->createStub(RouteMatch::class);
    $hook_name = self::$module_machinename . '_help';
    $output = $hook_name($name, $match);
    $this->assertNotEmpty($output, "The help hook should return output $context.");
    $this->assertStringContainsString($some_expected_text, $output);

    // Help Page.
    $this->drupalGet('admin/help');
    $status_code = $session->getStatusCode();
    $this->assertEquals(200, $status_code, "The admin help page should be able to load $context.");
    $this->assertSession()->pageTextContains(self::$module_name);
    $this->drupalGet('admin/help/' . self::$module_machinename);
    $status_code = $session->getStatusCode();
    $this->assertEquals(200, $status_code, "The module help page should be able to load $context.");
    $this->assertSession()->pageTextContains($some_expected_text);
  }

}
