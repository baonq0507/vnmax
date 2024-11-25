<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BankResource\Pages;
use App\Filament\Admin\Resources\BankResource\RelationManagers;
use App\Models\Bank;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\Section;
class BankResource extends Resource
{
    protected static ?string $model = Bank::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Quản lý';

    protected static ?string $navigationLabel = 'Ngân hàng';

    public static ?string $label = 'ngân hàng';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->orderBy('id', 'desc');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Thông tin ngân hàng')
                    ->schema([
                        TextInput::make('bank_name')
                            ->label('Tên ngân hàng')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('bank_account_name')
                            ->label('Tên chủ tài khoản')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('bank_account_number')
                            ->label('Số tài khoản')
                            ->required()
                            ->maxLength(255),
                        Select::make('type')
                            ->label('Loại ngân hàng')
                            ->options([
                                'Việt Nam' => 'Việt Nam',
                                'Hàn Quốc' => 'Hàn Quốc',
                            ])
                            ->required(),
                        Select::make('status')
                            ->label('Trạng thái')
                            ->options([
                                'active' => 'Kích hoạt',
                                'inactive' => 'Không kích hoạt',
                            ])
                            ->required(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('bank_name')->label('Tên ngân hàng')->searchable()->sortable(),
                TextColumn::make('bank_account_name')->label('Tên chủ tài khoản')->searchable()->sortable(),
                TextColumn::make('bank_account_number')->label('Số tài khoản')->searchable()->sortable(),
                TextColumn::make('type')->badge()->color(fn ($state) => $state === 'Việt Nam' ? 'success' : 'danger')
                    ->label('Loại ngân hàng')->sortable(),
                TextColumn::make('status')->badge()->color(fn ($state) => $state === 'active' ? 'success' : 'danger')
                    ->formatStateUsing(fn ($state) => $state === 'active' ? 'Kích hoạt' : 'Không kích hoạt')
                    ->label('Trạng thái')->sortable(),
            ])
            ->filters([
                //filter type
                SelectFilter::make('type')
                    ->options([
                        'Việt Nam' => 'Việt Nam',
                        'Hàn Quốc' => 'Hàn Quốc',
                    ]),
                SelectFilter::make('status')
                    ->options([
                        'active' => 'Kích hoạt',
                        'inactive' => 'Không kích hoạt',
                    ]),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListBanks::route('/'),
            'create' => Pages\CreateBank::route('/create'),
            'edit' => Pages\EditBank::route('/{record}/edit'),
        ];
    }
}
