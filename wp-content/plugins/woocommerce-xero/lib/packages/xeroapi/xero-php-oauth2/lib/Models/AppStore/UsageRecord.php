<?php
/**
 * UsageRecord
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
 * Xero AppStore API
 *
 * These endpoints are for Xero Partners to interact with the App Store Billing platform
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\AppStore;

use \ArrayAccess;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\AppStoreObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * UsageRecord Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UsageRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UsageRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'quantity' => 'int',
        'subscription_id' => 'string',
        'subscription_item_id' => 'string',
        'test_mode' => 'bool',
        'recorded_at' => '\DateTime',
        'usage_record_id' => 'string',
        'price_per_unit' => 'float',
        'product_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'quantity' => 'int32',
        'subscription_id' => 'guid',
        'subscription_item_id' => 'guid',
        'test_mode' => null,
        'recorded_at' => 'date-time',
        'usage_record_id' => 'guid',
        'price_per_unit' => 'decimal',
        'product_id' => 'guid'
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
        'quantity' => 'quantity',
        'subscription_id' => 'subscriptionId',
        'subscription_item_id' => 'subscriptionItemId',
        'test_mode' => 'testMode',
        'recorded_at' => 'recordedAt',
        'usage_record_id' => 'usageRecordId',
        'price_per_unit' => 'pricePerUnit',
        'product_id' => 'productId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
        'subscription_id' => 'setSubscriptionId',
        'subscription_item_id' => 'setSubscriptionItemId',
        'test_mode' => 'setTestMode',
        'recorded_at' => 'setRecordedAt',
        'usage_record_id' => 'setUsageRecordId',
        'price_per_unit' => 'setPricePerUnit',
        'product_id' => 'setProductId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
        'subscription_id' => 'getSubscriptionId',
        'subscription_item_id' => 'getSubscriptionItemId',
        'test_mode' => 'getTestMode',
        'recorded_at' => 'getRecordedAt',
        'usage_record_id' => 'getUsageRecordId',
        'price_per_unit' => 'getPricePerUnit',
        'product_id' => 'getProductId'
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
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
        $this->container['subscription_item_id'] = isset($data['subscription_item_id']) ? $data['subscription_item_id'] : null;
        $this->container['test_mode'] = isset($data['test_mode']) ? $data['test_mode'] : null;
        $this->container['recorded_at'] = isset($data['recorded_at']) ? $data['recorded_at'] : null;
        $this->container['usage_record_id'] = isset($data['usage_record_id']) ? $data['usage_record_id'] : null;
        $this->container['price_per_unit'] = isset($data['price_per_unit']) ? $data['price_per_unit'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['subscription_id'] === null) {
            $invalidProperties[] = "'subscription_id' can't be null";
        }
        if ($this->container['subscription_item_id'] === null) {
            $invalidProperties[] = "'subscription_item_id' can't be null";
        }
        if ($this->container['test_mode'] === null) {
            $invalidProperties[] = "'test_mode' can't be null";
        }
        if ($this->container['recorded_at'] === null) {
            $invalidProperties[] = "'recorded_at' can't be null";
        }
        if ($this->container['usage_record_id'] === null) {
            $invalidProperties[] = "'usage_record_id' can't be null";
        }
        if ($this->container['price_per_unit'] === null) {
            $invalidProperties[] = "'price_per_unit' can't be null";
        }
        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
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
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity The quantity recorded
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {

        $this->container['quantity'] = $quantity;

        return $this;
    }



    /**
     * Gets subscription_id
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param string $subscription_id The unique identifier of the Subscription.
     *
     * @return $this
     */
    public function setSubscriptionId($subscription_id)
    {

        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }



    /**
     * Gets subscription_item_id
     *
     * @return string
     */
    public function getSubscriptionItemId()
    {
        return $this->container['subscription_item_id'];
    }

    /**
     * Sets subscription_item_id
     *
     * @param string $subscription_item_id The unique identifier of the SubscriptionItem.
     *
     * @return $this
     */
    public function setSubscriptionItemId($subscription_item_id)
    {

        $this->container['subscription_item_id'] = $subscription_item_id;

        return $this;
    }



    /**
     * Gets test_mode
     *
     * @return bool
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     *
     * @param bool $test_mode If the subscription is a test subscription
     *
     * @return $this
     */
    public function setTestMode($test_mode)
    {

        $this->container['test_mode'] = $test_mode;

        return $this;
    }



    /**
     * Gets recorded_at
     *
     * @return \DateTime
     */
    public function getRecordedAt()
    {
        return $this->container['recorded_at'];
    }

    /**
     * Sets recorded_at
     *
     * @param \DateTime $recorded_at The time when this usage was recorded in UTC
     *
     * @return $this
     */
    public function setRecordedAt($recorded_at)
    {

        $this->container['recorded_at'] = $recorded_at;

        return $this;
    }



    /**
     * Gets usage_record_id
     *
     * @return string
     */
    public function getUsageRecordId()
    {
        return $this->container['usage_record_id'];
    }

    /**
     * Sets usage_record_id
     *
     * @param string $usage_record_id The unique identifier of the usageRecord.
     *
     * @return $this
     */
    public function setUsageRecordId($usage_record_id)
    {

        $this->container['usage_record_id'] = $usage_record_id;

        return $this;
    }



    /**
     * Gets price_per_unit
     *
     * @return float
     */
    public function getPricePerUnit()
    {
        return $this->container['price_per_unit'];
    }

    /**
     * Sets price_per_unit
     *
     * @param float $price_per_unit The price per unit
     *
     * @return $this
     */
    public function setPricePerUnit($price_per_unit)
    {

        $this->container['price_per_unit'] = $price_per_unit;

        return $this;
    }



    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id The unique identifier of the linked Product
     *
     * @return $this
     */
    public function setProductId($product_id)
    {

        $this->container['product_id'] = $product_id;

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
            AppStoreObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


