<?php
/**
 * ItemType
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
use \DeadlockApi\ObjectSerializer;

/**
 * ItemType Class Doc Comment
 *
 * @category Class
 * @package  DeadlockApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ItemType
{
    /**
     * Possible values of this enum
     */
    public const WEAPON = 'weapon';

    public const ABILITY = 'ability';

    public const UPGRADE = 'upgrade';

    public const TECH = 'tech';

    public const ARMOR = 'armor';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WEAPON,
            self::ABILITY,
            self::UPGRADE,
            self::TECH,
            self::ARMOR
        ];
    }
}


