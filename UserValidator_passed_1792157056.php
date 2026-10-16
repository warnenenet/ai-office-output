<?php
class Validator
{
    public function isValidEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function isValidUsername(string $username): bool
    {
        return strlen($username) >= 3;
    }

    public function isValidPassword(string $password): bool
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

    public function validateAll(string $email, string $username, string $password): array
    {
        return [
            'email'    => $this->isValidEmail($email),
            'username' => $this->isValidUsername($username),
            'password' => $this->isValidPassword($password),
        ];
    }
}
?>