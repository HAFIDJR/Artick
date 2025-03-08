<?php

namespace App\Filament\User\Resources\UserResource\Pages\Auth;

use App\Filament\User\Resources\UserResource;
use Filament\Pages\Auth\Register as BaseRegister;
use Filament\Resources\Pages\Page;


class Register extends BaseRegister
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                    ])
                    ->statePath('data'),

            )
        ];
    }
}
