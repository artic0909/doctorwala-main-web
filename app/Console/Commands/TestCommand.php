<?php

namespace App\Console\Commands;

use App\Http\Controllers\Superadmin\SuperCouponController;
use App\Models\SuperCouponModel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Coupon Status Update';

    /**
     * Execute the console command.
     */


    public function handle()
    {
        $controller = app(SuperCouponController::class);
        $currentDate = Carbon::now()->toDateString();
        $coupons = SuperCouponModel::all();

        foreach ($coupons as $coupon) {
            
            if ($coupon->coupon_end_date && $coupon->coupon_end_date <= $currentDate) {
               
                if ($coupon->status !== 'Inactive') {
                    $request = new Request(['status' => 'Inactive']);
                    $controller->updateStatus($request, $coupon->id);
                    $this->info("Coupon ID {$coupon->id} has been set to Inactive due to end date.");
                }
            } else {
                
                if ($coupon->status !== 'Active') {
                    $request = new Request(['status' => 'Active']);
                    $controller->updateStatus($request, $coupon->id);
                    $this->info("Coupon ID {$coupon->id} status set to Active.");
                }
            }
        }
    }
}
