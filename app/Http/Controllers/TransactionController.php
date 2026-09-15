<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = \App\Models\Transaction::orderBy('date', 'desc')->get();
        
        $totalBalance = $transactions->reduce(function ($carry, $item) {
            return $item->type === 'in' ? $carry + $item->amount : $carry - $item->amount;
        }, 0);

        return view('beranda', compact('transactions', 'totalBalance'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:in,out',
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
        ]);

        \App\Models\Transaction::create([
            'type' => $request->type,
            'name' => $request->name,
            'amount' => $request->amount,
            'date' => now()
        ]);

        return redirect('/#kas')->with('success', 'Transaksi berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $transaction = \App\Models\Transaction::findOrFail($id);
        $transaction->delete();

        return redirect('/#kas')->with('success', 'Transaksi berhasil dihapus!');
    }
}
