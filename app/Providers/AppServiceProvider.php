<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\TreatmentType;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $contact = Contact::first();
        $treatmentTypes = TreatmentType::all();
        View::share(['contact' => $contact, 'treatmentTypes' => $treatmentTypes]);
    }
}
