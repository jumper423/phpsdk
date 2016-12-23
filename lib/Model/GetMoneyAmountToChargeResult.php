<?php
/**
 * GetMoneyAmountToChargeResult
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
 * GetMoneyAmountToChargeResult Class Doc Comment
 *
 * @category    Class */
 // @description The GetMoneyAmountToCharge function result.
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetMoneyAmountToChargeResult implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GetMoneyAmountToChargeResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'int',
        'min_amount' => 'int',
        'bank_card_amount_usd' => 'int',
        'min_bank_card_amount_usd' => 'int',
        'robokassa_amount_rub' => 'int',
        'min_robokassa_amount_rub' => 'int',
        'subscriptions' => '\Swagger\Client\Model\SubscriptionsToChargeType[]'
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
        'amount' => 'amount',
        'min_amount' => 'min_amount',
        'bank_card_amount_usd' => 'bank_card_amount_usd',
        'min_bank_card_amount_usd' => 'min_bank_card_amount_usd',
        'robokassa_amount_rub' => 'robokassa_amount_rub',
        'min_robokassa_amount_rub' => 'min_robokassa_amount_rub',
        'subscriptions' => 'subscriptions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'min_amount' => 'setMinAmount',
        'bank_card_amount_usd' => 'setBankCardAmountUsd',
        'min_bank_card_amount_usd' => 'setMinBankCardAmountUsd',
        'robokassa_amount_rub' => 'setRobokassaAmountRub',
        'min_robokassa_amount_rub' => 'setMinRobokassaAmountRub',
        'subscriptions' => 'setSubscriptions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'min_amount' => 'getMinAmount',
        'bank_card_amount_usd' => 'getBankCardAmountUsd',
        'min_bank_card_amount_usd' => 'getMinBankCardAmountUsd',
        'robokassa_amount_rub' => 'getRobokassaAmountRub',
        'min_robokassa_amount_rub' => 'getMinRobokassaAmountRub',
        'subscriptions' => 'getSubscriptions'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['min_amount'] = isset($data['min_amount']) ? $data['min_amount'] : null;
        $this->container['bank_card_amount_usd'] = isset($data['bank_card_amount_usd']) ? $data['bank_card_amount_usd'] : null;
        $this->container['min_bank_card_amount_usd'] = isset($data['min_bank_card_amount_usd']) ? $data['min_bank_card_amount_usd'] : null;
        $this->container['robokassa_amount_rub'] = isset($data['robokassa_amount_rub']) ? $data['robokassa_amount_rub'] : null;
        $this->container['min_robokassa_amount_rub'] = isset($data['min_robokassa_amount_rub']) ? $data['min_robokassa_amount_rub'] : null;
        $this->container['subscriptions'] = isset($data['subscriptions']) ? $data['subscriptions'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if ($this->container['min_amount'] === null) {
            $invalid_properties[] = "'min_amount' can't be null";
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
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['min_amount'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount The money amount of the subscriptions + tariff + negative_balance in the specified currency.
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets min_amount
     * @return int
     */
    public function getMinAmount()
    {
        return $this->container['min_amount'];
    }

    /**
     * Sets min_amount
     * @param int $min_amount The 'amount' value minus the positive account balance in the specified currency.
     * @return $this
     */
    public function setMinAmount($min_amount)
    {
        $this->container['min_amount'] = $min_amount;

        return $this;
    }

    /**
     * Gets bank_card_amount_usd
     * @return int
     */
    public function getBankCardAmountUsd()
    {
        return $this->container['bank_card_amount_usd'];
    }

    /**
     * Sets bank_card_amount_usd
     * @param int $bank_card_amount_usd Exists if bank card payments are allowed. It's the maximum of the 'amount' in USD and the min_card_payment (10$).
     * @return $this
     */
    public function setBankCardAmountUsd($bank_card_amount_usd)
    {
        $this->container['bank_card_amount_usd'] = $bank_card_amount_usd;

        return $this;
    }

    /**
     * Gets min_bank_card_amount_usd
     * @return int
     */
    public function getMinBankCardAmountUsd()
    {
        return $this->container['min_bank_card_amount_usd'];
    }

    /**
     * Sets min_bank_card_amount_usd
     * @param int $min_bank_card_amount_usd Exists if bank card payments are allowed. It's the maximum of the 'min_amount' in USD and the min_card_payment (10$).
     * @return $this
     */
    public function setMinBankCardAmountUsd($min_bank_card_amount_usd)
    {
        $this->container['min_bank_card_amount_usd'] = $min_bank_card_amount_usd;

        return $this;
    }

    /**
     * Gets robokassa_amount_rub
     * @return int
     */
    public function getRobokassaAmountRub()
    {
        return $this->container['robokassa_amount_rub'];
    }

    /**
     * Sets robokassa_amount_rub
     * @param int $robokassa_amount_rub Exists if robokassa payments are allowed. It's the maximum of the 'min_amount' in RUR and the min_robokassa_payment (500 RUR).
     * @return $this
     */
    public function setRobokassaAmountRub($robokassa_amount_rub)
    {
        $this->container['robokassa_amount_rub'] = $robokassa_amount_rub;

        return $this;
    }

    /**
     * Gets min_robokassa_amount_rub
     * @return int
     */
    public function getMinRobokassaAmountRub()
    {
        return $this->container['min_robokassa_amount_rub'];
    }

    /**
     * Sets min_robokassa_amount_rub
     * @param int $min_robokassa_amount_rub Exists if robokassa payments are allowed. It's the maximum of the 'min_amount' in RUR and the min_robokassa_payment (500 RUR).
     * @return $this
     */
    public function setMinRobokassaAmountRub($min_robokassa_amount_rub)
    {
        $this->container['min_robokassa_amount_rub'] = $min_robokassa_amount_rub;

        return $this;
    }

    /**
     * Gets subscriptions
     * @return \Swagger\Client\Model\SubscriptionsToChargeType[]
     */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
     * Sets subscriptions
     * @param \Swagger\Client\Model\SubscriptionsToChargeType[] $subscriptions
     * @return $this
     */
    public function setSubscriptions($subscriptions)
    {
        $this->container['subscriptions'] = $subscriptions;

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
