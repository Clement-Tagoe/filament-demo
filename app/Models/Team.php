<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Filament\Models\Contracts\HasCurrentTenantLabel;

class Team extends Model implements HasCurrentTenantLabel
{
    public function getCurrentTenantLabel(): string
    {
        return 'Current team';
    }
}
