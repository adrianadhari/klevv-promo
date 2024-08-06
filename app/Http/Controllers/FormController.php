<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'placeOfBirth' => 'required',
            'city' => 'required',
            'idCardNumber' => 'required',
            'headline' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'invoice' => 'file|mimes:jpeg,jpg,png,pdf|max:3072'
        ]);

        $invoice = $request->file('invoice');
        if ($invoice) {
            $fileName = time() . $invoice->getClientOriginalName();
            $invoice->storeAs('public/invoice', $fileName);
            $data['invoice'] = $fileName;
        }

        Form::create($data);
        return back()->with('success', 'Data submitted successfully!');
    }

    public function viewData()
    {
        $datas = Form::all();
        $totalData = $datas->count();
        return view('data', compact('datas', 'totalData'));
    }

    public function getInvoice($filename)
    {
        $path = storage_path('app/public/invoice/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            return redirect("/viewdata")->with('success', 'Login success');
        }
        return back()->with('error', 'Email atau Password salah');
    }
}
