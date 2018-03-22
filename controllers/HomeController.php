<?php
/**
 * HomeController
 *
 * @license MIT
 * @copyright 2018 Tommy Teasdale
 */

declare(strict_types=1);

namespace Apine\Controllers;

use Apine\Core\Controllers\Controller;
use Apine\Core\Views\HTMLView;
use Apine\Core\Views\View;

/**
 * Class HomeController
 *
 * @package Apine\Controllers
 */
class HomeController extends Controller
{
    function index() : View
    {
        return new HTMLView('home', [
            'title' => 'Home page'
        ]);
    }
    
    function about() : View
    {
        return new HTMLView('about');
    }
}