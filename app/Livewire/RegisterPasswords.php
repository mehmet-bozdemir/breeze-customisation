<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class RegisterPasswords extends Component
{
  public string $password = '';

  public string $passwordConfirmation = '';

  public function generatePassword(): void
    {
        $password = Str::password(12);

        $this->setPasswords($password);
    }

    protected function setPasswords($value): void
    {
        $this->password = $value;
        $this->passwordConfirmation = $value;
        // $this->updatedPassword($value);
    }

  public function render()
  {
    return view('livewire.register-passwords');
  }
}
