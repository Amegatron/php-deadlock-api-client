<?php
/**
 * BuildHeroDetailsAbilityOrderCurrencyChange
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DeadlockAPI\Data
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Deadlock Data API
 *
 * API for Deadlock game data, containing builds and active matches
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DeadlockAPI\Data\Model;

use \ArrayAccess;
use \DeadlockAPI\Data\ObjectSerializer;

/**
 * BuildHeroDetailsAbilityOrderCurrencyChange Class Doc Comment
 *
 * @category Class
 * @package  DeadlockAPI\Data
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BuildHeroDetailsAbilityOrderCurrencyChange implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BuildHeroDetailsAbilityOrderCurrencyChange';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ability_id' => 'int',
        'currency_type' => 'int',
        'delta' => 'int',
        'annotation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ability_id' => null,
        'currency_type' => null,
        'delta' => null,
        'annotation' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ability_id' => false,
        'currency_type' => false,
        'delta' => false,
        'annotation' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ability_id' => 'ability_id',
        'currency_type' => 'currency_type',
        'delta' => 'delta',
        'annotation' => 'annotation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ability_id' => 'setAbilityId',
        'currency_type' => 'setCurrencyType',
        'delta' => 'setDelta',
        'annotation' => 'setAnnotation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ability_id' => 'getAbilityId',
        'currency_type' => 'getCurrencyType',
        'delta' => 'getDelta',
        'annotation' => 'getAnnotation'
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
        $this->setIfExists('ability_id', $data ?? [], null);
        $this->setIfExists('currency_type', $data ?? [], null);
        $this->setIfExists('delta', $data ?? [], null);
        $this->setIfExists('annotation', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ability_id'] === null) {
            $invalidProperties[] = "'ability_id' can't be null";
        }
        if ($this->container['currency_type'] === null) {
            $invalidProperties[] = "'currency_type' can't be null";
        }
        if ($this->container['delta'] === null) {
            $invalidProperties[] = "'delta' can't be null";
        }
        if ($this->container['annotation'] === null) {
            $invalidProperties[] = "'annotation' can't be null";
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
     * Gets ability_id
     *
     * @return int
     */
    public function getAbilityId()
    {
        return $this->container['ability_id'];
    }

    /**
     * Sets ability_id
     *
     * @param int $ability_id ability_id
     *
     * @return self
     */
    public function setAbilityId($ability_id)
    {
        if (is_null($ability_id)) {
            throw new \InvalidArgumentException('non-nullable ability_id cannot be null');
        }
        $this->container['ability_id'] = $ability_id;

        return $this;
    }

    /**
     * Gets currency_type
     *
     * @return int
     */
    public function getCurrencyType()
    {
        return $this->container['currency_type'];
    }

    /**
     * Sets currency_type
     *
     * @param int $currency_type currency_type
     *
     * @return self
     */
    public function setCurrencyType($currency_type)
    {
        if (is_null($currency_type)) {
            throw new \InvalidArgumentException('non-nullable currency_type cannot be null');
        }
        $this->container['currency_type'] = $currency_type;

        return $this;
    }

    /**
     * Gets delta
     *
     * @return int
     */
    public function getDelta()
    {
        return $this->container['delta'];
    }

    /**
     * Sets delta
     *
     * @param int $delta delta
     *
     * @return self
     */
    public function setDelta($delta)
    {
        if (is_null($delta)) {
            throw new \InvalidArgumentException('non-nullable delta cannot be null');
        }
        $this->container['delta'] = $delta;

        return $this;
    }

    /**
     * Gets annotation
     *
     * @return string
     */
    public function getAnnotation()
    {
        return $this->container['annotation'];
    }

    /**
     * Sets annotation
     *
     * @param string $annotation annotation
     *
     * @return self
     */
    public function setAnnotation($annotation)
    {
        if (is_null($annotation)) {
            throw new \InvalidArgumentException('non-nullable annotation cannot be null');
        }
        $this->container['annotation'] = $annotation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


