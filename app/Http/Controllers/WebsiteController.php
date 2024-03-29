<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Branch;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Option;
use App\Models\Service;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class WebsiteController extends Controller
{
    public function homepage()
    {
        $meta = meta('homepage', ['body', 'excerpt', 'heading']);
        return view('website.pages.homepage', compact('meta'));
    }

    public function whoWeAre()
    {
        $meta = meta('who-we-are', ['body']);
        return view('website.pages.who-we-are', compact('meta'));
    }

    public function about()
    {
        $meta = meta('about', ['body']);
        return view('website.pages.about', compact('meta'));
    }
    public function policy()
    {
        return view('website.pages.policy');
    }

    public function service(Service $service)
    {
        $services = Service::active()->orderBy('ordering')->get();
        return view('website.pages.service', compact('service', 'services'));
    }

    public function videoBlog()
    {
        return view('website.pages.video-blog')->with([
            'posts' => Category::where('slug', 'vlog')->first()->posts()->paginate(12)->withQueryString()
        ]);
    }

    public function articles()
    {
        return view('website.pages.articles')->with([
            'meta' => meta('articles'),
            'posts' => Category::where('slug', 'blog')->first()->posts()->orderByDesc('ordering')->paginate(12)->withQueryString()
        ]);
    }

    public function article(Post $post)
    {
        return view('website.pages.article')->with([
            'post' => $post,
            'shares' => [
                [
                    'url' => 'https://www.facebook.com/sharer/sharer.php?u='.route('article', $post),
                    'icon' => 'facebook'
                ],
            ]
        ]);
    }

    public function branches()
    {
        return view('website.pages.branches')->with([
            'branches' => Branch::active()->get()
        ]);
    }

    public function faqs()
    {
        return view('website.pages.faqs')->with([
            'faqs' => Faq::active()->get()
        ]);
    }

    public function contact()
    {
        return view('website.pages.contact');
    }
    public function contactUs()
    {
        return view('website.pages.contact-us');
    }
    public function contactForm(ContactRequest $request)
    {
        Contact::create($request->validated());

        return redirect()->back();
    }
}
