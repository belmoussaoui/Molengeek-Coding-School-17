<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function edit($id) {
        $promotion = Promotion::find($id);
        return view('backoffice.promotion.edit', compact('promotion'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'title' => 'required',
            'button' => 'required',
            'button_href' => 'required',
            'text' => 'required',
        ]);
        
        $promotion = Promotion::find($id);

        $promotion->title = $request->title;
        $promotion->text = $request->text;
        $promotion->button = $request->button;
        $promotion->button_href = $request->button_href;

        $promotion->updated_at = now();
        $promotion->save();
        return redirect('/#promotion');//->with('message', 'The Promotion section has been updated.');
    }
}
