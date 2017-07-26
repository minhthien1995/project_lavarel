<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeContronller extends Controller
{
    //
    public function testAction() {
    	echo "đây là trang WelcomeContronller "; 
    	return redirect()->route('hcm');
    }
}
