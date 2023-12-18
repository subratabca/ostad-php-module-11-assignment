<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Session;

class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $today = Carbon::now()->toDateString();
        $totalSaleToday = Transaction::where('order_date', $today)->sum('amount');


        $yesterday = Carbon::yesterday()->toDateString();
        $totalSaleYesterday = Transaction::where('order_date', $yesterday)->sum('amount');

        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        $totalSaleCurrentMonth = Transaction::whereMonth('order_date', $currentMonth)
                        ->whereYear('order_date', $currentYear)->sum('amount');

        $currentDate = Carbon::now();
        $firstDayLastMonth = $currentDate->copy()->subMonth()->startOfMonth();
        $lastDayLastMonth = $currentDate->copy()->subMonth()->endOfMonth();
        $lastMonthSales = Transaction::whereBetween('order_date', [$firstDayLastMonth,$lastDayLastMonth])->get();

        $totalSaleLastMonth = $lastMonthSales->sum('amount');
        return view('admin.home',compact('totalSaleToday','totalSaleYesterday','totalSaleCurrentMonth','totalSaleLastMonth'));
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('admin');
    }

}