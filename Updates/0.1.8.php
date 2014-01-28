<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik
 * @package Piwik
 */

namespace Piwik\Plugins\CustomAlerts;

use Piwik\Common;
use Piwik\Site;
use Piwik\Updater;
use Piwik\Updates;

/**
 * @package Updates
 */
class Updates_0_1_8 extends Updates
{
    static function getSql($schema = 'Myisam')
    {
        return array(
            "ALTER TABLE `" . Common::prefixTable('alert_triggered') . "` CHANGE `compared_to` `compared_to` SMALLINT( 4 ) UNSIGNED NOT NULL DEFAULT 1" => 1060,
            "ALTER TABLE `" . Common::prefixTable('alert') . "` CHANGE `compared_to` `compared_to` SMALLINT( 4 ) UNSIGNED NOT NULL DEFAULT 1" => 1060,
        );
    }

    static function update()
    {
        Updater::updateDatabase(__FILE__, self::getSql());
    }
}
