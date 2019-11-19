<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Http\Requests;

class SiteController extends Controller
{
    //
    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;
    
    protected $template;
    protected $vars = array();
    protected $contentLeftBar = FALSE;
    protected $contentRightBar = FALSE;
    protected $bar = FALSE;
    public function __construct(){
		
	}
	protected function renderOutput(){
		return view($this->template)->with($this->vars);
	}
    
}
