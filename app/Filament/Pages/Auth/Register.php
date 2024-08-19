<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Auth\Register as BaseRegister;
use Illuminate\Database\Eloquent\Model;

class Register extends BaseRegister
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getFirstName(),
                        $this->getLastName(),
                        $this->getPhoneNumber(),
                        $this->getAddress(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                    ])
                    ->statePath('data')

            )
        ];
    }

    protected function getFirstName(): Component {
        return TextInput::make('First Name')
            ->required();
    }

    protected function getLastName(): Component {
        return TextInput::make('Last Name')
            ->required();
    }

    protected function getPhoneNumber(): Component {
        return TextInput::make('Phone number')->required();
    }

    protected function getAddress(): Component {
        return TextInput::make('Address')->nullable();
    }

}
