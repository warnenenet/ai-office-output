<?php
class Validator
{
    public static function isValidEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function isValidUsername(string $username): bool
    {
        return mb_strlen($username) >= 3;
    }

    public static function isValidPassword(string $password): bool
    {
        if (strlen($password) < 8) {
            return false;
        }
        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }
        if (!preg_match('/\d/', $password)) {
            return false;
        }
        return true;
    }
}
?>