<?php
/**
 * PaymentFrequencyType
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 13-March-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

/**
 * Xero Payroll AU API
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * PaymentFrequencyType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentFrequencyType
{
    /**
     * Possible values of this enum
     */
    const WEEKLY = 'WEEKLY';
    const MONTHLY = 'MONTHLY';
    const FORTNIGHTLY = 'FORTNIGHTLY';
    const QUARTERLY = 'QUARTERLY';
    const TWICEMONTHLY = 'TWICEMONTHLY';
    const FOURWEEKLY = 'FOURWEEKLY';
    const YEARLY = 'YEARLY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WEEKLY,
            self::MONTHLY,
            self::FORTNIGHTLY,
            self::QUARTERLY,
            self::TWICEMONTHLY,
            self::FOURWEEKLY,
            self::YEARLY,
        ];
    }
}


