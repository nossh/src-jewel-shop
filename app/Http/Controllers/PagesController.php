<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
    	return view("pages.index");
    }

    public function about()
    {
    	return view("pages.about");
    }

    public function cart()
    {
    	return view("pages.cart");
    }

    public function checkout()
    {
    	return view("pages.checkout");
    }

    public function contact()
    {
    	return view("pages.contact");
    }

    public function faq()
    {
    	return view("pages.faq");
    }

    public function privacyPolicy()
    {
    	return view("pages.privacy-policy");
    }

    public function shopDetails()
    {
    	return view("pages.shop-details");
    }

    public function shop()
    {
    	return view("pages.shop");
    }

    public function terms()
    {
    	return view("pages.terms");
    }

    public function userReview()
    {
    	return view("pages.user-review");
    }

    public function wishList()
    {
    	return view("pages.wish-list");
    }

    public function blogList()
    {
        return view("pages.blog-list");
    }

    public function blogDetail()
    {
        return view("pages.blog-detail");
    }
}
