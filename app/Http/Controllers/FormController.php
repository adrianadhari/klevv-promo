<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
        return view('data', [
            'datas' => $datas
        ]);
    }

    public function getInvoice($filename)
    {
        $path = storage_path('app/public/invoice/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }
}
