<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    public function index() {
        
        return view('settings');
    }

    public function updatejackPotPrice() {
        Settings::where('description', 'JACKPOT_PRIZE')
       ->update([
           'value' => $_POST['value']
        ]);
        return \Redirect::back()->with('message', 'Jackpot prize update successfully');
    }

    public function updateRaffleWinner(){
        Settings::where('description', 'RAFFLE_WINNER')
       ->update([
           'value' => $_POST['value']
        ]);
        return \Redirect::back()->with('message', 'Raffle winner update successfully');
    }

    public function updateBonusItemClaimDate(){
        Settings::where('description', 'BONUS_ITEM_CLAIM_DATE')
       ->update([
           'value' => $_POST['value']
        ]);
        return \Redirect::back()->with('message', 'Bonus Item claim Date update successfully');
    }

    public function updateBonuses(){
        Settings::where('description', 'BONUSES_DRB')
       ->update([
           'value' => $_POST['drb']
        ]);

        Settings::where('description', 'BONUSES_SPIN_BONUS')
       ->update([
           'value' => $_POST['spin_bonus']
        ]);
        return \Redirect::back()->with('message', 'Bonuses update successfully');
    }

    public function updatePayoutRequest() {
        Settings::where('description', 'PAYOUT_REQUEST_MINIMUM_DAILY_SPIN')
       ->update([
           'value' => $_POST['daily_spin']
        ]);

        Settings::where('description', 'PAYOUT_REQUEST_MINIMUM_BONUSES')
       ->update([
           'value' => $_POST['bonuses']
        ]);
        return \Redirect::back()->with('message', 'Payout Request update successfully');
    }
}
