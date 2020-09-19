<?php

namespace App\Providers;

use App\User;
use App\ContactMessag;
use App\UserComplaint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\view;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\AdminNotificationComposer;

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
        //
                $userComp=UserComplaint::with('user')->where('is_checked', '0')->latest()->get();
                $userEmails=ContactMessag::where('is_checked', '0')->latest()->get();
                $newUser=User::where('is_checked', 0)->get();
                $notifiEmail=array();
                $notifiEmail['newUser']= $newUser;
                $notifiEmail['userComp']= $userComp;
                $notifiEmail['userEmails']=$userEmails;

                view()->share('notifiEmail', $notifiEmail);

    }
}
