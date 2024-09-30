<?php
/**
 * BuildHero
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
 * BuildHero Class Doc Comment
 *
 * @category Class
 * @package  DeadlockAPI\Data
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BuildHero implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BuildHero';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hero_id' => 'int',
        'hero_build_id' => 'int',
        'author_account_id' => 'int',
        'last_updated_timestamp' => 'int',
        'name' => 'string',
        'description' => 'string',
        'language' => 'int',
        'version' => 'int',
        'origin_build_id' => 'int',
        'details' => '\DeadlockAPI\Data\Model\BuildHeroDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hero_id' => null,
        'hero_build_id' => null,
        'author_account_id' => null,
        'last_updated_timestamp' => null,
        'name' => null,
        'description' => null,
        'language' => null,
        'version' => null,
        'origin_build_id' => null,
        'details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'hero_id' => false,
        'hero_build_id' => false,
        'author_account_id' => false,
        'last_updated_timestamp' => false,
        'name' => false,
        'description' => false,
        'language' => false,
        'version' => false,
        'origin_build_id' => false,
        'details' => false
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
        'hero_id' => 'hero_id',
        'hero_build_id' => 'hero_build_id',
        'author_account_id' => 'author_account_id',
        'last_updated_timestamp' => 'last_updated_timestamp',
        'name' => 'name',
        'description' => 'description',
        'language' => 'language',
        'version' => 'version',
        'origin_build_id' => 'origin_build_id',
        'details' => 'details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hero_id' => 'setHeroId',
        'hero_build_id' => 'setHeroBuildId',
        'author_account_id' => 'setAuthorAccountId',
        'last_updated_timestamp' => 'setLastUpdatedTimestamp',
        'name' => 'setName',
        'description' => 'setDescription',
        'language' => 'setLanguage',
        'version' => 'setVersion',
        'origin_build_id' => 'setOriginBuildId',
        'details' => 'setDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hero_id' => 'getHeroId',
        'hero_build_id' => 'getHeroBuildId',
        'author_account_id' => 'getAuthorAccountId',
        'last_updated_timestamp' => 'getLastUpdatedTimestamp',
        'name' => 'getName',
        'description' => 'getDescription',
        'language' => 'getLanguage',
        'version' => 'getVersion',
        'origin_build_id' => 'getOriginBuildId',
        'details' => 'getDetails'
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
        $this->setIfExists('hero_id', $data ?? [], null);
        $this->setIfExists('hero_build_id', $data ?? [], null);
        $this->setIfExists('author_account_id', $data ?? [], null);
        $this->setIfExists('last_updated_timestamp', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('origin_build_id', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
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

        if ($this->container['hero_id'] === null) {
            $invalidProperties[] = "'hero_id' can't be null";
        }
        if ($this->container['hero_build_id'] === null) {
            $invalidProperties[] = "'hero_build_id' can't be null";
        }
        if ($this->container['author_account_id'] === null) {
            $invalidProperties[] = "'author_account_id' can't be null";
        }
        if ($this->container['last_updated_timestamp'] === null) {
            $invalidProperties[] = "'last_updated_timestamp' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['origin_build_id'] === null) {
            $invalidProperties[] = "'origin_build_id' can't be null";
        }
        if ($this->container['details'] === null) {
            $invalidProperties[] = "'details' can't be null";
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
     * Gets hero_id
     *
     * @return int
     */
    public function getHeroId()
    {
        return $this->container['hero_id'];
    }

    /**
     * Sets hero_id
     *
     * @param int $hero_id hero_id
     *
     * @return self
     */
    public function setHeroId($hero_id)
    {
        if (is_null($hero_id)) {
            throw new \InvalidArgumentException('non-nullable hero_id cannot be null');
        }
        $this->container['hero_id'] = $hero_id;

        return $this;
    }

    /**
     * Gets hero_build_id
     *
     * @return int
     */
    public function getHeroBuildId()
    {
        return $this->container['hero_build_id'];
    }

    /**
     * Sets hero_build_id
     *
     * @param int $hero_build_id hero_build_id
     *
     * @return self
     */
    public function setHeroBuildId($hero_build_id)
    {
        if (is_null($hero_build_id)) {
            throw new \InvalidArgumentException('non-nullable hero_build_id cannot be null');
        }
        $this->container['hero_build_id'] = $hero_build_id;

        return $this;
    }

    /**
     * Gets author_account_id
     *
     * @return int
     */
    public function getAuthorAccountId()
    {
        return $this->container['author_account_id'];
    }

    /**
     * Sets author_account_id
     *
     * @param int $author_account_id author_account_id
     *
     * @return self
     */
    public function setAuthorAccountId($author_account_id)
    {
        if (is_null($author_account_id)) {
            throw new \InvalidArgumentException('non-nullable author_account_id cannot be null');
        }
        $this->container['author_account_id'] = $author_account_id;

        return $this;
    }

    /**
     * Gets last_updated_timestamp
     *
     * @return int
     */
    public function getLastUpdatedTimestamp()
    {
        return $this->container['last_updated_timestamp'];
    }

    /**
     * Sets last_updated_timestamp
     *
     * @param int $last_updated_timestamp last_updated_timestamp
     *
     * @return self
     */
    public function setLastUpdatedTimestamp($last_updated_timestamp)
    {
        if (is_null($last_updated_timestamp)) {
            throw new \InvalidArgumentException('non-nullable last_updated_timestamp cannot be null');
        }
        $this->container['last_updated_timestamp'] = $last_updated_timestamp;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets language
     *
     * @return int
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param int $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets origin_build_id
     *
     * @return int
     */
    public function getOriginBuildId()
    {
        return $this->container['origin_build_id'];
    }

    /**
     * Sets origin_build_id
     *
     * @param int $origin_build_id origin_build_id
     *
     * @return self
     */
    public function setOriginBuildId($origin_build_id)
    {
        if (is_null($origin_build_id)) {
            throw new \InvalidArgumentException('non-nullable origin_build_id cannot be null');
        }
        $this->container['origin_build_id'] = $origin_build_id;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \DeadlockAPI\Data\Model\BuildHeroDetails
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \DeadlockAPI\Data\Model\BuildHeroDetails $details details
     *
     * @return self
     */
    public function setDetails($details)
    {
        if (is_null($details)) {
            throw new \InvalidArgumentException('non-nullable details cannot be null');
        }
        $this->container['details'] = $details;

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


