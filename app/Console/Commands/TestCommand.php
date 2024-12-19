<?php

namespace App\Console\Commands;


use App\Models\SuperCouponModel;
use App\Models\CouponHolderModel;
use App\Models\DwPartnerModel;
use App\Models\PartnerOPDContactModel;
use App\Models\PartnerPathologyContactModel;
use App\Models\PartnerDoctorContactModel;
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
    protected $description = 'is this working?';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $coupons = SuperCouponModel::orderBy('id', 'desc')->get();

        $partnerId = DwPartnerModel::where('id', 24)->first()->id;

        foreach ($coupons as $coupon) {
            $coupon->status = $coupon->status == 'Active' ? 'Inactive' : 'Active';
            $coupon->save();

            $couponHolders = CouponHolderModel::where('coupon_code', $coupon->coupon_code)
                ->where('currently_loggedin_partner_id', $partnerId)
                ->get();

            foreach ($couponHolders as $holder) {
                $partner = DwPartnerModel::find($holder->partner_id);
                if ($partner) {
                    $partner->status = $coupon->status;
                    $partner->save();
                }
            }

            $this->info('Coupon and related partner statuses updated successfully!');
        }
    }
}
