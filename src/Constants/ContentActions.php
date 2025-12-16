<?php

namespace TetOtt\HelperModule\Constants;

/**
 * Content Actions Constants
 * 
 * Defines all valid action types for content interactions.
 */
class ContentActions
{
    /**
     * Individual action constants.
     */
    public const PLAY = 'play';
    public const PAUSE = 'pause';
    public const COMPLETE = 'complete';
    public const LIKE = 'like';
    public const SHARE = 'share';

    /**
     * All valid content action types.
     */
    public const ACTIONS = [
        self::PLAY,
        self::PAUSE,
        self::COMPLETE,
        self::LIKE,
        self::SHARE,
    ];

    /**
     * Get all actions as a comma-separated string for validation.
     *
     * @return string
     */
    public static function asString(): string
    {
        return implode(',', self::ACTIONS);
    }

    /**
     * Check if an action is valid.
     *
     * @param string $action
     * @return bool
     */
    public static function isValid(string $action): bool
    {
        return in_array($action, self::ACTIONS, true);
    }
}

