<?php
/**
 * SubscriptionsToChargeType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Voximplant HTTP API
 *
 * Voximplant HTTP API description
 *
 * OpenAPI spec version: 1.0.0
 * Contact: info@voximplant.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * SubscriptionsToChargeType Class Doc Comment
 *
 * @category    Class */
 // @description The GetMoneyAmountToCharge function result field.
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionsToChargeType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionsToChargeType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subscription_amount' => 'int',
        'subscription_type' => 'string',
        'subscription_description' => 'string',
        'subscription_auto_charge' => 'bool',
        'subscription_next_renewal' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'subscription_amount' => 'subscription_amount',
        'subscription_type' => 'subscription_type',
        'subscription_description' => 'subscription_description',
        'subscription_auto_charge' => 'subscription_auto_charge',
        'subscription_next_renewal' => 'subscription_next_renewal'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'subscription_amount' => 'setSubscriptionAmount',
        'subscription_type' => 'setSubscriptionType',
        'subscription_description' => 'setSubscriptionDescription',
        'subscription_auto_charge' => 'setSubscriptionAutoCharge',
        'subscription_next_renewal' => 'setSubscriptionNextRenewal'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'subscription_amount' => 'getSubscriptionAmount',
        'subscription_type' => 'getSubscriptionType',
        'subscription_description' => 'getSubscriptionDescription',
        'subscription_auto_charge' => 'getSubscriptionAutoCharge',
        'subscription_next_renewal' => 'getSubscriptionNextRenewal'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['subscription_amount'] = isset($data['subscription_amount']) ? $data['subscription_amount'] : null;
        $this->container['subscription_type'] = isset($data['subscription_type']) ? $data['subscription_type'] : null;
        $this->container['subscription_description'] = isset($data['subscription_description']) ? $data['subscription_description'] : null;
        $this->container['subscription_auto_charge'] = isset($data['subscription_auto_charge']) ? $data['subscription_auto_charge'] : null;
        $this->container['subscription_next_renewal'] = isset($data['subscription_next_renewal']) ? $data['subscription_next_renewal'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['subscription_amount'] === null) {
            $invalid_properties[] = "'subscription_amount' can't be null";
        }
        if ($this->container['subscription_type'] === null) {
            $invalid_properties[] = "'subscription_type' can't be null";
        }
        if ($this->container['subscription_description'] === null) {
            $invalid_properties[] = "'subscription_description' can't be null";
        }
        if ($this->container['subscription_auto_charge'] === null) {
            $invalid_properties[] = "'subscription_auto_charge' can't be null";
        }
        if ($this->container['subscription_next_renewal'] === null) {
            $invalid_properties[] = "'subscription_next_renewal' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['subscription_amount'] === null) {
            return false;
        }
        if ($this->container['subscription_type'] === null) {
            return false;
        }
        if ($this->container['subscription_description'] === null) {
            return false;
        }
        if ($this->container['subscription_auto_charge'] === null) {
            return false;
        }
        if ($this->container['subscription_next_renewal'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets subscription_amount
     * @return int
     */
    public function getSubscriptionAmount()
    {
        return $this->container['subscription_amount'];
    }

    /**
     * Sets subscription_amount
     * @param int $subscription_amount The money amount to charge in the specified currency.
     * @return $this
     */
    public function setSubscriptionAmount($subscription_amount)
    {
        $this->container['subscription_amount'] = $subscription_amount;

        return $this;
    }

    /**
     * Gets subscription_type
     * @return string
     */
    public function getSubscriptionType()
    {
        return $this->container['subscription_type'];
    }

    /**
     * Sets subscription_type
     * @param string $subscription_type The subscription type, example: PHONE_NUM, SIP_REGISTRATION
     * @return $this
     */
    public function setSubscriptionType($subscription_type)
    {
        $this->container['subscription_type'] = $subscription_type;

        return $this;
    }

    /**
     * Gets subscription_description
     * @return string
     */
    public function getSubscriptionDescription()
    {
        return $this->container['subscription_description'];
    }

    /**
     * Sets subscription_description
     * @param string $subscription_description The subscription description (details). Example: the subscribed phone number.
     * @return $this
     */
    public function setSubscriptionDescription($subscription_description)
    {
        $this->container['subscription_description'] = $subscription_description;

        return $this;
    }

    /**
     * Gets subscription_auto_charge
     * @return bool
     */
    public function getSubscriptionAutoCharge()
    {
        return $this->container['subscription_auto_charge'];
    }

    /**
     * Sets subscription_auto_charge
     * @param bool $subscription_auto_charge The auto charge flag.
     * @return $this
     */
    public function setSubscriptionAutoCharge($subscription_auto_charge)
    {
        $this->container['subscription_auto_charge'] = $subscription_auto_charge;

        return $this;
    }

    /**
     * Gets subscription_next_renewal
     * @return string
     */
    public function getSubscriptionNextRenewal()
    {
        return $this->container['subscription_next_renewal'];
    }

    /**
     * Sets subscription_next_renewal
     * @param string $subscription_next_renewal The next renewal date, format: YYYY-MM-DD
     * @return $this
     */
    public function setSubscriptionNextRenewal($subscription_next_renewal)
    {
        $this->container['subscription_next_renewal'] = $subscription_next_renewal;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
