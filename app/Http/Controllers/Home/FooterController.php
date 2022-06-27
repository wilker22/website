<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function footerSetup()
    {
        $allfooter = Footer::find(1);
        return view('admin.footer.footer_all', compact('allfooter'));
    }

    public function updateFooter(Request $request)
    {
        $footer_id = $request->id;

        Footer::findOrFail($footer_id)->update([
            'number' => $request->number,
            'short_description' => $request->short_description,
            'adress' => $request->adress,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'copyright' => $request->copyright,
        ]);

        $notification = [
            'message' => "Footer Update Successfully!",
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }
}
