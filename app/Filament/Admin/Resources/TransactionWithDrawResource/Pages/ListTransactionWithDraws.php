<?php

namespace App\Filament\Admin\Resources\TransactionWithDrawResource\Pages;

use App\Filament\Admin\Resources\TransactionWithDrawResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransactionWithDraws extends ListRecords
{
    protected static string $resource = TransactionWithDrawResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
