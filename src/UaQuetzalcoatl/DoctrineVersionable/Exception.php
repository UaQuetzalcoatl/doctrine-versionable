<?php
namespace UaQuetzalcoatl\DoctrineVersionable;

/**
 * A custom exception class
 *
 * @author alex
 */
class Exception extends \Exception
{
    public static function invalidArgument($message = 'Invalid argument')
    {
        throw new self($message);
    }
}
