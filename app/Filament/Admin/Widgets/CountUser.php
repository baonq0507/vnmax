<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use App\Models\Transaction;
class CountUser extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Tổng số người dùng', User::where('role', 'user')->count()),
            Stat::make('Tổng số đại lý', User::where('role', 'dealer')->count()),
            Stat::make('Thành viên đăng ký hôm nay', User::where('role', 'user')->whereDate('created_at', now())->count()),
            // tổng nạp tiền
            Stat::make('Tổng nạp tiền', Transaction::where('transaction_type', 'deposit')->sum('transaction_amount')),
            // tổng rút tiền
            Stat::make('Tổng rút tiền', Transaction::where('transaction_type', 'withdraw')->sum('transaction_amount')),
            // tổng hoàn tiền
            Stat::make('Tổng hoàn tiền', Transaction::where('transaction_type', 'refund')->sum('transaction_amount')),
            // tổng chuyển tiền
            Stat::make('Tổng tiền cược', 0),
            // tổng thắng
            Stat::make('Tổng thắng', 0),
            // tổng thua
            Stat::make('Tổng thua', 0),
        ];
    }
}
