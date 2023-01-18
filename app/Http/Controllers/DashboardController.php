<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\funds;
use DB;

class DashboardController extends Controller
{
    public function home() {
        return view('dashboard');
    }

    public function payinsPage(Request $request)
    {
        $pending = funds::where('is_enabled', 0)->sum('value');
        $approved = funds::where('is_enabled', 1)->sum('value');
        $pendingData = funds::where('is_enabled', 0)->get();
        $approvedData = funds::where('is_enabled', 1)->get();
        return view('pay-ins',['approvedData' => $approvedData, 'pendingData' => $pendingData, 'pending' => $pending, 'approved' => $approved]);
    }

    public function payInsApprove(Request $request)
    {
        DB::table('funds')->where('id', $_POST['id'])->update(array(
            'is_enabled'=> 1,
        ));

        return redirect('pay-ins');
    }

    public function payInsDeleted(Request $request)
    {
        DB::table('funds')->where('id', $_POST['id'])->delete();
        return redirect('pay-ins');
    }

    public function payOutsPage() {
        return view('payouts');
    }

    public function membersPage() {
        $count = User::count();
        $query = DB::select(DB::raw('select users.id as user_id,count(funds.created_at) as count, funds.created_at as first_fund_date, users.username, user2.username as referred_by from users left join funds on funds.user_id = users.id left join users as user2 on user2.id = users.referred_by group by users.id, funds.created_at, users.username, user2.username'));
        return view('members', ['count' => $count, 'query' => $query]);
    }

    public function spinsPage()
    {
        return view('spins');
    }

    public function bonusItemPage() {
        return view('bonus-items');
    }

    public function rafflePage() {
        return view('raffle');
    }

    public function settingsPage() {
        return view('settings');
    }
}
