<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\LogTransactionResource\Pages;
use App\Filament\Admin\Resources\LogTransactionResource\RelationManagers;
use App\Models\LogTransaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\ActionGroup;

class LogTransactionResource extends Resource
{
    protected static ?string $model = LogTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Giao dịch';

    protected static ?string $navigationLabel = 'Lịch sử duyệt';

    public static ?string $label = 'lịch sử duyệt';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->orderBy('id', 'desc');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Thông tin giao dịch')->schema([
                    TextInput::make('log_message')->label('Ghi chú')->required(),
                    Select::make('log_type')->label('Loại giao dịch')->options([
                        'approved' => 'Duyệt',
                        'rejected' => 'Từ chối',
                    ])->required(),
                    Select::make('transaction_id')->label('ID giao dịch')->relationship('transaction', 'id')->required(),
                    Select::make('user_id')->label('ID người dùng')->relationship('user', 'name')->required(),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('log_type')->label('Loại giao dịch')
                ->formatStateUsing(fn($state) => $state === 'deposit' ? 'Nạp tiền' : ($state === 'withdrawal' ? 'Rút tiền' : ($state === 'transfer' ? 'Chuyển tiền' : 'Hoàn tiền')))
                ->badge()->color(fn($state) => $state === 'approved' ? 'success' : ($state === 'rejected' ? 'danger' : 'warning')),
                TextColumn::make('log_message')->label('Ghi chú'),
                TextColumn::make('user.name')->label('Người duyệt'),
                TextColumn::make('created_at')->label('Thời gian duyệt')->dateTime('d-m-Y H:i:s'),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLogTransactions::route('/'),
            'create' => Pages\CreateLogTransaction::route('/create'),
            'edit' => Pages\EditLogTransaction::route('/{record}/edit'),
        ];
    }
}
