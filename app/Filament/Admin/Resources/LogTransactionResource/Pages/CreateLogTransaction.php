<?php

namespace App\Filament\Admin\Resources\LogTransactionResource\Pages;

use App\Filament\Admin\Resources\LogTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLogTransaction extends CreateRecord
{
    protected static string $resource = LogTransactionResource::class;
}
