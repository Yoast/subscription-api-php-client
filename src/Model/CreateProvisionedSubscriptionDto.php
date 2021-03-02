<?php
/**
 * CreateProvisionedSubscriptionDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yoast\ProvisionerApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Yoast.com provisioning API
 *
 * The Yoast provisioning API
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yoast\ProvisionerApiClient\Model;

use \ArrayAccess;
use \Yoast\ProvisionerApiClient\ObjectSerializer;

/**
 * CreateProvisionedSubscriptionDto Class Doc Comment
 *
 * @category Class
 * @package  Yoast\ProvisionerApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateProvisionedSubscriptionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateProvisionedSubscriptionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customerEmail' => 'string',
'productCode' => 'string',
'site' => 'string',
'firstName' => 'string',
'lastName' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customerEmail' => null,
'productCode' => null,
'site' => null,
'firstName' => null,
'lastName' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'customerEmail' => 'customerEmail',
'productCode' => 'productCode',
'site' => 'site',
'firstName' => 'firstName',
'lastName' => 'lastName'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customerEmail' => 'setCustomerEmail',
'productCode' => 'setProductCode',
'site' => 'setSite',
'firstName' => 'setFirstName',
'lastName' => 'setLastName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customerEmail' => 'getCustomerEmail',
'productCode' => 'getProductCode',
'site' => 'getSite',
'firstName' => 'getFirstName',
'lastName' => 'getLastName'    ];

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
        return self::$swaggerModelName;
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
        $this->container['customerEmail'] = isset($data['customerEmail']) ? $data['customerEmail'] : null;
        $this->container['productCode'] = isset($data['productCode']) ? $data['productCode'] : null;
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customerEmail'] === null) {
            $invalidProperties[] = "'customerEmail' can't be null";
        }
        if ($this->container['productCode'] === null) {
            $invalidProperties[] = "'productCode' can't be null";
        }
        if ($this->container['site'] === null) {
            $invalidProperties[] = "'site' can't be null";
        }
        if ($this->container['firstName'] === null) {
            $invalidProperties[] = "'firstName' can't be null";
        }
        if ($this->container['lastName'] === null) {
            $invalidProperties[] = "'lastName' can't be null";
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
     * Gets customerEmail
     *
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->container['customerEmail'];
    }

    /**
     * Sets customerEmail
     *
     * @param string $customerEmail The email address of the customer.
     *
     * @return $this
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->container['customerEmail'] = $customerEmail;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string $productCode The product-code of the product the subscription is for.
     *
     * @return $this
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param string $site The site URL that the subscription needs to be connectd to.
     *
     * @return $this
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName The first name of the customer.
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName The last name of the customers.
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
