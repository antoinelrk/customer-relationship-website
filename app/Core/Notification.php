<?php

namespace App\Core;

use App\Enum\EnumNotificationState;
use App\Helpers\Str;
use Random\RandomException;

class Notification
{
    private const int MAX_NOTIFICATIONS = 10;

    /**
     * @return bool
     */
    public static function as(): bool
    {
        if (count(self::all()) > 0) {
            return true;
        }

        return false;
    }

    /**
     * @return void
     */
    public static function init(): void
    {
        if (!isset($_SESSION['notifications'])) {
            $_SESSION['notifications'] = [];
        }
    }

    /**
     * @return array
     */
    public static function all(): array
    {
        self::init();

        return $_SESSION['notifications'];
    }

    /**
     * @return void
     */
    public static function reset(): void
    {
        $_SESSION['notifications'] = [];
    }

    /**
     * @throws RandomException
     */
    public static function push(string $message, ?string $state = null): array
    {
        if (count($_SESSION['notifications']) === self::MAX_NOTIFICATIONS) {
            array_pop($_SESSION['notifications']);
        }

        $_SESSION['notifications']["n" . Str::basicId()] = [
            'message' => $message,
            'state' => $state ?? EnumNotificationState::INFO->value,
        ];

        return self::all();
    }

    /**
     * @param $notificationId
     * @return array
     */
    public static function drop($notificationId): array
    {
        if ($notificationId) {
            if (isset($_SESSION['notifications'][$notificationId])) {
                unset($_SESSION['notifications'][$notificationId]);
            }
        }

        return self::all();
    }
}
