<?php

/**
 * Plugin Name: InterestCalculator
 * Plugin URI: https://acerohernan.com/
 * Description: An interest calculator on demand
 * Version: 0.0.1
 * Author: Hernan Acero
 * Author URI: https://acerohernan.com
 * Text Domain: insteres-calculator
 * Domain Path: /i18n/languages/
 * Requires at least: 6.4
 * Requires PHP: 7.4
 *
 * @package Interest Calculator
 */

defined('ABSPATH') || exit;

function intcalc_activation_hook()
{
};

function intcalc_deactivation_hook()
{
};

register_activation_hook(__FILE__, 'intcalc_activation_hook');
register_deactivation_hook(__FILE__, 'intcalc_deactivation_hook');
