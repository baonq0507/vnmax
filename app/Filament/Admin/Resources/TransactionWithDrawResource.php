<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TransactionWithDrawResource\Pages;
use App\Filament\Admin\Resources\TransactionWithDrawResource\RelationManagers;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\ActionGroup;
use Filament\Notifications\Notification;
use Filament\Forms\Components\TimePicker;

class TransactionWithDrawResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationGroup = 'Giao dịch';

    protected static ?string $navigationLabel = 'Rút tiền';

    public static ?string $label = 'rút tiền';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->orderBy('id', 'desc')->where('transaction_type', 'withdraw');
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Thông tin giao dịch')
                ->schema([
                    TextInput::make('transaction_amount')->label('Số tiền')->required()->numeric(),
                    DatePicker::make('transaction_date')->label('Ngày giao dịch')->required(),
                    TimePicker::make('transaction_time')->label('Giờ giao dịch')->required(),
                    Select::make('bank_id')->label('Ngân hàng')->relationship('bank', 'bank_name')
                    ->required()->preload()->searchable(),
                    Select::make('user_id')->label('Người dùng')->relationship('user', 'name')
                    ->required()->preload()->searchable(),
                    Select::make('transaction_status')->label('Trạng thái')->default('pending')
                    ->options([
                        'pending' => 'Chờ duyệt',
                        'approved' => 'Đã duyệt',
                        'rejected' => 'Đã từ chối',
                    ])->required(),

                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('transaction_date')->label('Ngày giao dịch')->searchable()->sortable(),
                TextColumn::make('transaction_time')->label('Giờ giao dịch')->searchable()->sortable(),
                TextColumn::make('transaction_amount')->label('Số tiền')->searchable()->sortable(),
                TextColumn::make('bank.bank_name')->label('Ngân hàng')->searchable()->sortable(),
                TextColumn::make('user.name')->label('Người dùng')->searchable()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\EditAction::make(),

                    // duyệt giao dịch
                    Tables\Actions\Action::make('approve')->label('Duyệt')->color('success')->icon('heroicon-o-check-circle')
                    ->action(function (Transaction $record) {
                        $record->update(['transaction_status' => 'approved']);
                        $record->user->increment('balance', $record->transaction_amount);
                        $record->logTransactions()->create([
                            'log_type' => $record->transaction_type,
                            'log_message' => 'Duyệt giao dịch thành công',
                            'transaction_id' => $record->id,
                            'user_id' => auth()->user()->id,
                        ]);
                        Notification::make()->title('Duyệt giao dịch thành công')->success()->send();
                    })->visible(fn(Transaction $record) => $record->transaction_status === 'pending'),

                    // từ chối giao dịch
                    Tables\Actions\Action::make('reject')->label('Từ chối')->color('danger')->icon('heroicon-o-x-circle')
                    ->action(function (Transaction $record) {
                        $record->update(['transaction_status' => 'rejected']);
                        $record->logTransactions()->create([
                            'log_type' => $record->transaction_type,
                            'log_message' => 'Từ chối giao dịch',
                            'transaction_id' => $record->id,
                            'user_id' => auth()->user()->id,
                        ]);
                        Notification::make()->title('Đã từ chối giao dịch')->success()->send();
                    })->visible(fn(Transaction $record) => $record->transaction_status === 'pending'),
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
            'index' => Pages\ListTransactionWithDraws::route('/'),
            'create' => Pages\CreateTransactionWithDraw::route('/create'),
            'edit' => Pages\EditTransactionWithDraw::route('/{record}/edit'),
        ];
    }
}
