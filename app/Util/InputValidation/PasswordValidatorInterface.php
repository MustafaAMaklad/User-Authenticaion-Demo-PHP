<?php 

declare(strict_types=1);
// namespace App\Util\InputValidation;
interface PasswordValidatorInterface {
  public function validatePassword(string $password): string;
  public function validateConfirmationPassword(string $password, string $passwordConfirm): string;
}