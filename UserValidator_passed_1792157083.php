<?php
class Validator
{
    public static function validateEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validateUsername(string $username): bool
    {
        return strlen($username) >= 3;
    }

    public static function validatePassword(string $password): bool
    {
        if (strlen($password) < 8) {
            return false;
        }
        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }
        if (!preg_match('/[0-9]/', $password)) {
            return false;
        }
        return true;
    }

    public static function validateAll(string $email, string $username, string $password): array
    {
        $errors = [];

        if (!self::validateEmail($email)) {
            $errors[] = 'Invalid email format.';
        }

        if (!self::validateUsername($username)) {
            $errors[] = 'Username must be at least 3 characters.';
        }

        if (!self::validatePassword($password)) {
            $errors[] = 'Password must be at least 8 characters and contain at least one digit and one uppercase letter.';
        }

        return $errors;
    }
}
?>