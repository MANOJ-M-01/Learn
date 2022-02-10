https://stackoverflow.com/questions/28729228/laravel-5-resourceful-routes-plus-middleware
use this inside the specific controller

<?php
public function __construct()
{
        $this->middleware('auth')->except(['index','show']);
        // OR
        $this->middleware('auth')->only(['store','update','edit','create']);
}
