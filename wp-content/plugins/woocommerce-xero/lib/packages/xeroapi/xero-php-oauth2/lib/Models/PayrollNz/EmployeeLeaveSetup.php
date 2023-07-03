<?php
/**
 * EmployeeLeaveSetup
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
 * Xero Payroll NZ
 *
 * This is the Xero Payroll API for orgs in the NZ region.
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollNz;

use \ArrayAccess;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\PayrollNzObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * EmployeeLeaveSetup Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmployeeLeaveSetup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeLeaveSetup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'include_holiday_pay' => 'bool',
        'holiday_pay_opening_balance' => 'double',
        'annual_leave_opening_balance' => 'double',
        'negative_annual_leave_balance_paid_amount' => 'double',
        'sick_leave_hours_to_accrue_annually' => 'double',
        'sick_leave_maximum_hours_to_accrue' => 'double',
        'sick_leave_opening_balance' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'include_holiday_pay' => null,
        'holiday_pay_opening_balance' => 'double',
        'annual_leave_opening_balance' => 'double',
        'negative_annual_leave_balance_paid_amount' => 'double',
        'sick_leave_hours_to_accrue_annually' => 'double',
        'sick_leave_maximum_hours_to_accrue' => 'double',
        'sick_leave_opening_balance' => 'double'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'include_holiday_pay' => 'includeHolidayPay',
        'holiday_pay_opening_balance' => 'holidayPayOpeningBalance',
        'annual_leave_opening_balance' => 'annualLeaveOpeningBalance',
        'negative_annual_leave_balance_paid_amount' => 'negativeAnnualLeaveBalancePaidAmount',
        'sick_leave_hours_to_accrue_annually' => 'sickLeaveHoursToAccrueAnnually',
        'sick_leave_maximum_hours_to_accrue' => 'sickLeaveMaximumHoursToAccrue',
        'sick_leave_opening_balance' => 'sickLeaveOpeningBalance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'include_holiday_pay' => 'setIncludeHolidayPay',
        'holiday_pay_opening_balance' => 'setHolidayPayOpeningBalance',
        'annual_leave_opening_balance' => 'setAnnualLeaveOpeningBalance',
        'negative_annual_leave_balance_paid_amount' => 'setNegativeAnnualLeaveBalancePaidAmount',
        'sick_leave_hours_to_accrue_annually' => 'setSickLeaveHoursToAccrueAnnually',
        'sick_leave_maximum_hours_to_accrue' => 'setSickLeaveMaximumHoursToAccrue',
        'sick_leave_opening_balance' => 'setSickLeaveOpeningBalance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'include_holiday_pay' => 'getIncludeHolidayPay',
        'holiday_pay_opening_balance' => 'getHolidayPayOpeningBalance',
        'annual_leave_opening_balance' => 'getAnnualLeaveOpeningBalance',
        'negative_annual_leave_balance_paid_amount' => 'getNegativeAnnualLeaveBalancePaidAmount',
        'sick_leave_hours_to_accrue_annually' => 'getSickLeaveHoursToAccrueAnnually',
        'sick_leave_maximum_hours_to_accrue' => 'getSickLeaveMaximumHoursToAccrue',
        'sick_leave_opening_balance' => 'getSickLeaveOpeningBalance'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['include_holiday_pay'] = isset($data['include_holiday_pay']) ? $data['include_holiday_pay'] : null;
        $this->container['holiday_pay_opening_balance'] = isset($data['holiday_pay_opening_balance']) ? $data['holiday_pay_opening_balance'] : null;
        $this->container['annual_leave_opening_balance'] = isset($data['annual_leave_opening_balance']) ? $data['annual_leave_opening_balance'] : null;
        $this->container['negative_annual_leave_balance_paid_amount'] = isset($data['negative_annual_leave_balance_paid_amount']) ? $data['negative_annual_leave_balance_paid_amount'] : null;
        $this->container['sick_leave_hours_to_accrue_annually'] = isset($data['sick_leave_hours_to_accrue_annually']) ? $data['sick_leave_hours_to_accrue_annually'] : null;
        $this->container['sick_leave_maximum_hours_to_accrue'] = isset($data['sick_leave_maximum_hours_to_accrue']) ? $data['sick_leave_maximum_hours_to_accrue'] : null;
        $this->container['sick_leave_opening_balance'] = isset($data['sick_leave_opening_balance']) ? $data['sick_leave_opening_balance'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets include_holiday_pay
     *
     * @return bool|null
     */
    public function getIncludeHolidayPay()
    {
        return $this->container['include_holiday_pay'];
    }

    /**
     * Sets include_holiday_pay
     *
     * @param bool|null $include_holiday_pay Identifier if holiday pay will be included in each payslip
     *
     * @return $this
     */
    public function setIncludeHolidayPay($include_holiday_pay)
    {

        $this->container['include_holiday_pay'] = $include_holiday_pay;

        return $this;
    }



    /**
     * Gets holiday_pay_opening_balance
     *
     * @return double|null
     */
    public function getHolidayPayOpeningBalance()
    {
        return $this->container['holiday_pay_opening_balance'];
    }

    /**
     * Sets holiday_pay_opening_balance
     *
     * @param double|null $holiday_pay_opening_balance Initial holiday pay balance. A percentage — usually 8% — of gross earnings since their last work anniversary.
     *
     * @return $this
     */
    public function setHolidayPayOpeningBalance($holiday_pay_opening_balance)
    {

        $this->container['holiday_pay_opening_balance'] = $holiday_pay_opening_balance;

        return $this;
    }



    /**
     * Gets annual_leave_opening_balance
     *
     * @return double|null
     */
    public function getAnnualLeaveOpeningBalance()
    {
        return $this->container['annual_leave_opening_balance'];
    }

    /**
     * Sets annual_leave_opening_balance
     *
     * @param double|null $annual_leave_opening_balance Initial annual leave balance. The balance at their last anniversary, less any leave taken since then and excluding accrued annual leave.
     *
     * @return $this
     */
    public function setAnnualLeaveOpeningBalance($annual_leave_opening_balance)
    {

        $this->container['annual_leave_opening_balance'] = $annual_leave_opening_balance;

        return $this;
    }



    /**
     * Gets negative_annual_leave_balance_paid_amount
     *
     * @return double|null
     */
    public function getNegativeAnnualLeaveBalancePaidAmount()
    {
        return $this->container['negative_annual_leave_balance_paid_amount'];
    }

    /**
     * Sets negative_annual_leave_balance_paid_amount
     *
     * @param double|null $negative_annual_leave_balance_paid_amount The dollar value of annual leave opening balance if negative.
     *
     * @return $this
     */
    public function setNegativeAnnualLeaveBalancePaidAmount($negative_annual_leave_balance_paid_amount)
    {

        $this->container['negative_annual_leave_balance_paid_amount'] = $negative_annual_leave_balance_paid_amount;

        return $this;
    }



    /**
     * Gets sick_leave_hours_to_accrue_annually
     *
     * @return double|null
     */
    public function getSickLeaveHoursToAccrueAnnually()
    {
        return $this->container['sick_leave_hours_to_accrue_annually'];
    }

    /**
     * Sets sick_leave_hours_to_accrue_annually
     *
     * @param double|null $sick_leave_hours_to_accrue_annually Number of hours accrued annually for sick leave. Multiply the number of days they're entitled to by the hours worked per day
     *
     * @return $this
     */
    public function setSickLeaveHoursToAccrueAnnually($sick_leave_hours_to_accrue_annually)
    {

        $this->container['sick_leave_hours_to_accrue_annually'] = $sick_leave_hours_to_accrue_annually;

        return $this;
    }



    /**
     * Gets sick_leave_maximum_hours_to_accrue
     *
     * @return double|null
     */
    public function getSickLeaveMaximumHoursToAccrue()
    {
        return $this->container['sick_leave_maximum_hours_to_accrue'];
    }

    /**
     * Sets sick_leave_maximum_hours_to_accrue
     *
     * @param double|null $sick_leave_maximum_hours_to_accrue Maximum number of hours accrued annually for sick leave. Multiply the maximum days they can accrue by the hours worked per day
     *
     * @return $this
     */
    public function setSickLeaveMaximumHoursToAccrue($sick_leave_maximum_hours_to_accrue)
    {

        $this->container['sick_leave_maximum_hours_to_accrue'] = $sick_leave_maximum_hours_to_accrue;

        return $this;
    }



    /**
     * Gets sick_leave_opening_balance
     *
     * @return double|null
     */
    public function getSickLeaveOpeningBalance()
    {
        return $this->container['sick_leave_opening_balance'];
    }

    /**
     * Sets sick_leave_opening_balance
     *
     * @param double|null $sick_leave_opening_balance Initial sick leave balance. This will be positive unless they've taken sick leave in advance
     *
     * @return $this
     */
    public function setSickLeaveOpeningBalance($sick_leave_opening_balance)
    {

        $this->container['sick_leave_opening_balance'] = $sick_leave_opening_balance;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            PayrollNzObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


