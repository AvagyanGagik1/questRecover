<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Helpers\SlugHelper;
use App\Models\About;
use App\Models\AboutDescription;
use App\Models\Admissions;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Home;
use App\Models\HomeDescription;
use App\Models\HomeVideo;
use App\Models\Story;
use App\Models\TeamType;
use App\Models\Testimonials;
use App\Models\TestimonialsHistory;
use App\Models\Tour;
use App\Models\TourHistory;
use App\Models\Treatment;
use App\Models\TreatmentDescription;
use App\Models\TreatmentType;
use Illuminate\Http\Response;

class HomeController extends Controller
{

    use SlugHelper;

    /**
     * @return Response
     */
    public function index(): Response
    {
        dd(public_path('images'));
        $home = Home::first();
        $homeDescription = HomeDescription::all();
        $homeVideo = HomeVideo::first();
        $story = Story::all();
        $article = Article::take(3)->get();
        $treatmentType = TreatmentType::all();
        return response()->view('front.home',
            [
                'home' => $home,
                'homeDescription' => $homeDescription,
                'homeVideo' => $homeVideo,
                'story' => $story,
                'article' => $article,
                'treatmentType' => $treatmentType,
            ]);
    }

    /**
     * @return Response
     */
    public function about(): Response
    {
        $about = About::first();
        $aboutDescription = AboutDescription::all();
        $teamType = TeamType::with(['team', 'team.position'])->get();
        return response()->view('front.about',
            [
                'header' => $about->header ?? '',
                'image' => $about->image ?? '',
                'about' => $about,
                'aboutDescription' => $aboutDescription,
                'teamType' => $teamType
            ]);
    }

    /**
     * @return Response
     */
    public function tour(): Response
    {
        $tour = Tour::first();
        $tourHistory = TourHistory::with('images')->get();
        return response()->view('front.tour',
            [
                'header' => $tour->header ?? '',
                'image' => $tour->image ?? '',
                'tour' => $tour,
                'tourHistory' => $tourHistory
            ]);
    }

    /**
     * @return Response
     */
    public function testimonials(): Response
    {
        $testimonials = Testimonials::first();
        $testimonialsHistory = TestimonialsHistory::all();
        return response()->view('front.testimonials',
            [
                'header' => $testimonials->header ?? '',
                'image' => $testimonials->image ?? '',
                'testimonials' => $testimonials,
                'testimonialsHistory' => $testimonialsHistory
            ]);
    }

    public function admissions(): Response
    {
        $admissions = Admissions::first();
        return response()->view('front.admissions',
            [
                'header' => $admissions->header ?? '',
                'image' => $admissions->image ?? '',
                'admissions' => $admissions,
            ]);
    }

    public function blog(): Response
    {
        $blog = Blog::first();
        $article = Article::all();
        return response()->view('front.blog',
            [
                'header' => $blog->header ?? '',
                'image' => $blog->image ?? '',
                'blog' => $blog,
                'article' => $article
            ]);
    }

    public function article($slug): Response
    {
        $articleId = $this->getIdWithSlug($slug);
        $article = Article::where('id', $articleId)->with('contents')->first();
        return response()->view('front.article',
            [
                'header' => $article->header ?? '',
                'image' => $article->image ?? '',
                'article' => $article
            ]);
    }

    public function contact(): Response
    {
        $contact = Contact::first();
        return response()->view('front.contact',
            [
                'header' => $contact->header ?? '',
                'image' => $contact->image ?? '',
            ]);
    }

    /**
     * @return Response
     */
    public function treatment(): Response
    {
        $treatment = Treatment::first();
        $treatmentDescription = TreatmentDescription::first();
        $treatmentType = TreatmentType::all();
        return response()->view('front.treatment',
            [
                'header' => $treatment->header ?? '',
                'image' => $treatment->image ?? '',
                'treatment' => $treatment,
                'treatmentDescription' => $treatmentDescription,
                'treatmentType' => $treatmentType,
            ]);
    }

    /**
     * @param $slug
     * @return Response
     */
    public function treatmentType($slug): Response
    {
        $treatmentTypeId = $this->getIdWithSlug($slug);
        $treatmentType = TreatmentType::where('id', $treatmentTypeId)->with('treatmentContent')->first();
        return response()->view('front.treatmentItem',
            [
                'header' => $treatmentType->header,
                'image' => $treatmentType->image,
                'treatmentType' => $treatmentType,
            ]);
    }
}
