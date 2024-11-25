<?php

namespace App\Filament\Admin\Resources\TransactionWithDrawResource\Pages;

use App\Filament\Admin\Resources\TransactionWithDrawResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTransactionWithDraw extends CreateRecord
{
    protected static string $resource = TransactionWithDrawResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['transaction_type'] = 'withdraw';
        return $data;
    }
}
