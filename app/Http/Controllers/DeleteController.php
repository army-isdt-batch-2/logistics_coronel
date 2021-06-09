
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logistics;
use Redirect;

class DeleteController extends Controller
{
    public function index($id)
    {
        Logistics::find($id)->delete();

        return Redirect::route('home');
    }
}
