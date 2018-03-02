<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;

class PageController extends Controller
{

  // Renders all the pages generated using the backpack page manager
  public function index($slug)
  {
      $page = Page::findBySlug($slug);

      if (!$page)
      {
          abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
      }

      $this->data['title'] = $page->title;
      $this->data['page'] = $page->withFakes();

      return view('pages.'.$page->template, $this->data);
  }

  // Renders the home page

  public function welcome()
  {
    return view('welcome');
  }
}
