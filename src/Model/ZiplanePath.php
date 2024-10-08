<?php
/**
 * ZiplanePath
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DeadlockApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Deadlock Assets API
 *
 * API for Deadlock assets, including hero stats and images, and item stats and images.
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

namespace DeadlockApi\Model;

use \ArrayAccess;
use \DeadlockApi\ObjectSerializer;

/**
 * ZiplanePath Class Doc Comment
 *
 * @category Class
 * @package  DeadlockApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ZiplanePath implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZiplanePath';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'origin' => 'string[]',
        'color' => 'string',
        'p0_points' => 'string[][]',
        'p1_points' => 'string[][]',
        'p2_points' => 'string[][]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'origin' => null,
        'color' => null,
        'p0_points' => null,
        'p1_points' => null,
        'p2_points' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'origin' => false,
        'color' => false,
        'p0_points' => false,
        'p1_points' => false,
        'p2_points' => false
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
        'origin' => 'origin',
        'color' => 'color',
        'p0_points' => 'P0_points',
        'p1_points' => 'P1_points',
        'p2_points' => 'P2_points'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'origin' => 'setOrigin',
        'color' => 'setColor',
        'p0_points' => 'setP0Points',
        'p1_points' => 'setP1Points',
        'p2_points' => 'setP2Points'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'origin' => 'getOrigin',
        'color' => 'getColor',
        'p0_points' => 'getP0Points',
        'p1_points' => 'getP1Points',
        'p2_points' => 'getP2Points'
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
        $this->setIfExists('origin', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('p0_points', $data ?? [], null);
        $this->setIfExists('p1_points', $data ?? [], null);
        $this->setIfExists('p2_points', $data ?? [], null);
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

        if ($this->container['origin'] === null) {
            $invalidProperties[] = "'origin' can't be null";
        }
        if ((count($this->container['origin']) > 3)) {
            $invalidProperties[] = "invalid value for 'origin', number of items must be less than or equal to 3.";
        }

        if ((count($this->container['origin']) < 3)) {
            $invalidProperties[] = "invalid value for 'origin', number of items must be greater than or equal to 3.";
        }

        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['p0_points'] === null) {
            $invalidProperties[] = "'p0_points' can't be null";
        }
        if ($this->container['p1_points'] === null) {
            $invalidProperties[] = "'p1_points' can't be null";
        }
        if ($this->container['p2_points'] === null) {
            $invalidProperties[] = "'p2_points' can't be null";
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
     * Gets origin
     *
     * @return string[]
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string[] $origin The origin of the path.
     *
     * @return self
     */
    public function setOrigin($origin)
    {
        if (is_null($origin)) {
            throw new \InvalidArgumentException('non-nullable origin cannot be null');
        }

        if ((count($origin) > 3)) {
            throw new \InvalidArgumentException('invalid value for $origin when calling ZiplanePath., number of items must be less than or equal to 3.');
        }
        if ((count($origin) < 3)) {
            throw new \InvalidArgumentException('invalid length for $origin when calling ZiplanePath., number of items must be greater than or equal to 3.');
        }
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color The color of the path.
     *
     * @return self
     */
    public function setColor($color)
    {
        if (is_null($color)) {
            throw new \InvalidArgumentException('non-nullable color cannot be null');
        }
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets p0_points
     *
     * @return string[][]
     */
    public function getP0Points()
    {
        return $this->container['p0_points'];
    }

    /**
     * Sets p0_points
     *
     * @param string[][] $p0_points The P0 points of the path.
     *
     * @return self
     */
    public function setP0Points($p0_points)
    {
        if (is_null($p0_points)) {
            throw new \InvalidArgumentException('non-nullable p0_points cannot be null');
        }
        $this->container['p0_points'] = $p0_points;

        return $this;
    }

    /**
     * Gets p1_points
     *
     * @return string[][]
     */
    public function getP1Points()
    {
        return $this->container['p1_points'];
    }

    /**
     * Sets p1_points
     *
     * @param string[][] $p1_points The P1 points of the path.
     *
     * @return self
     */
    public function setP1Points($p1_points)
    {
        if (is_null($p1_points)) {
            throw new \InvalidArgumentException('non-nullable p1_points cannot be null');
        }
        $this->container['p1_points'] = $p1_points;

        return $this;
    }

    /**
     * Gets p2_points
     *
     * @return string[][]
     */
    public function getP2Points()
    {
        return $this->container['p2_points'];
    }

    /**
     * Sets p2_points
     *
     * @param string[][] $p2_points The P2 points of the path.
     *
     * @return self
     */
    public function setP2Points($p2_points)
    {
        if (is_null($p2_points)) {
            throw new \InvalidArgumentException('non-nullable p2_points cannot be null');
        }
        $this->container['p2_points'] = $p2_points;

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


