<?php

namespace App\Filament\Admin\Resources\LogTransactionResource\Pages;

use App\Filament\Admin\Resources\LogTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLogTransactions extends ListRecords
{
    protected static string $resource = LogTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
