<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('settings', [SettingsController::class, 'index']);
Route::post('update_jackpot_prize', [SettingsController::class, 'updateJackpotPrice']);
Route::post('update_raffle_winner',[SettingsController::class, 'updateRaffleWinner']);
Route::post('update_bonus_item_claim_date',  [SettingsController::class, 'updateBonusItemClaimDate']);
Route::post('update_bonuses', [SettingsController::class, 'updateBonuses']);
Route::post('update_payout_request', [SettingsController::class, 'updatePayoutRequest']);
Route::get('/', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'home']);
Route::get('pay-ins', [DashboardController::class, 'payinsPage']);
Route::get('pay-outs', [DashboardController::class, 'payOutsPage']);
Route::post('/fund/approved', [DashboardController::class, 'payInsApprove']);
Route::post('/fund/deleted', [DashboardController::class, 'payInsDeleted']);
Route::get('members', [DashboardController::class, 'membersPage']);
Route::get('spins', [DashboardController::class, 'spinsPage']);
Route::get('bonus-items', [DashboardController::class, 'bonusItemPage']);
Route::get('raffle', [DashboardController::class, 'rafflePage']);
Route::get('settings', [DashboardController::class, 'settingsPage']);