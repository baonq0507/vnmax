<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\UserResource\Pages;
use App\Filament\Admin\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\Select;
use App\Models\Level;
use Illuminate\Support\Facades\Hash;
use Filament\Notifications\Notification;
class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Quản lý';

    protected static ?string $navigationLabel = 'Người dùng';

    public static ?string $label = 'người dùng';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->orderBy('id', 'desc');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Thông tin người dùng')
                    ->schema([
                        TextInput::make('name')->label('Tên người dùng')->required()->maxLength(255),
                        TextInput::make('email')->label('Email')->email()->maxLength(255)->unique(ignoreRecord: true),
                        TextInput::make('password')->label('Mật khẩu')->required(fn(User $user) => is_null($user->id))
                            ->visible(fn(User $user) => is_null($user->id)),
                        TextInput::make('phone')->label('Số điện thoại')->unique(ignoreRecord: true)->maxLength(255),

                    ])->columns(2),
                Section::make('Thông tin ngân hàng')
                    ->schema([
                        TextInput::make('bank_name')->label('Tên ngân hàng')->maxLength(255),
                        TextInput::make('bank_account_name')->label('Tên chủ tài khoản')->maxLength(255),
                        TextInput::make('bank_account_number')->label('Số tài khoản')->maxLength(255),
                        //số dư
                        TextInput::make('balance')->label('Số dư')->default(0)->numeric(),
                        TextInput::make('balance_locked')->label('Số dư đóng băng')->default(0)->numeric(),
                    ])->columns(2),
                Section::make('Tổng tiền giao dịch')
                ->schema([
                    TextInput::make('total_deposit')->label('Tổng tiền nạp')->default(0)->numeric(),
                    TextInput::make('total_withdrawal')->label('Tổng tiền rút')->default(0)->numeric(),
                ])->columns(2),
                Section::make('Thông tin cấp độ')
                    ->schema([
                        Select::make('level_id')->label('Cấp độ')->options(Level::all()->pluck('level_name', 'id')),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Tên người dùng')->searchable()->sortable(),
                TextColumn::make('email')->label('Email')->searchable()->sortable(),
                TextColumn::make('phone')->label('Số điện thoại')->searchable()->sortable(),
                TextColumn::make('status')->label('Trạng thái')->searchable()->sortable()
                    ->badge()
                    ->color(fn(string $state): string => $state === 'active' ? 'success' : 'danger')
                    ->formatStateUsing(fn(string $state): string => $state === 'active' ? 'Hoạt động' : 'Không hoạt động'),
                TextColumn::make('balance')->label('Số dư')->searchable()->sortable(),
                TextColumn::make('balance_locked')->label('Số dư đóng băng')->searchable()->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'active' => 'Hoạt động',
                        'inactive' => 'Không hoạt động',
                    ]),
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\EditAction::make(),

                    Tables\Actions\Action::make('change_password')->label('Đổi mật khẩu')->icon('heroicon-o-key')
                    ->form([
                        TextInput::make('password')->label('Mật khẩu')->required()->maxLength(255),
                    ])->action(function (User $record, array $data) {
                        $record->update(['password' => Hash::make($data['password'])]);
                        Notification::make()->title('Đổi mật khẩu thành công')->success()->send();
                    })->modalWidth('sm'),
                    // add balance
                    Tables\Actions\Action::make('add_balance')->label('Thêm số dư')->icon('heroicon-o-plus')
                    ->form([
                        TextInput::make('balance')->label('Số dư')->required()->numeric(),
                    ])->action(function (User $record, array $data) {
                        $record->increment('balance', $data['balance']);
                        Notification::make()->title('Thêm số dư thành công')->success()->send();
                    })->modalWidth('sm'),

                    // change status
                    Tables\Actions\Action::make('change_status')->label('Thay đổi trạng thái')->icon('heroicon-o-arrow-path')
                    ->form([
                        Select::make('status')->label('Trạng thái')->options(['active' => 'Hoạt động', 'inactive' => 'Không hoạt động']),
                    ])->action(function (User $record, array $data) {
                        $record->update(['status' => $data['status']]);
                        Notification::make()->title('Thay đổi trạng thái thành công')->success()->send();
                    })->modalWidth('sm'),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
