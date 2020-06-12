<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestJsSolutionController extends Controller
{
    public function getSortJs()
    {
    	return view('pages.sort_js');
    }   

    public function getFilterJs()
    {
    	return view('pages.filter_js');
    }

    public function getMapJs()
    {
    	return view('pages.map_js');
    }

    public function getReduceJs()
    {
    	return view('pages.reduce_js');
    }

    public function getForeachJs()
    {
    	return view('pages.foreach_js');
    }

    public function getAnimation()
    {
    	return view('pages.animation');
    }

    public function getImFunny()
    {
    	return view('pages.i_m_funny');
    }

    public function getDefineCallbackJs()
    {
        return view('pages.define_callback_js');
    }
}
