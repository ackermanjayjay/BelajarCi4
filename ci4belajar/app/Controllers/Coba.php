<?php

namespace App\Controllers;

//inheritance 
class Coba extends BaseController
{
	public function index()
	{
		echo "ini coba";
	}
    public function about($nama='')
    {
        echo "ini about $nama";
      
    }
	
}
