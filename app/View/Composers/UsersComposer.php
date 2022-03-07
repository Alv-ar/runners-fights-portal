<?php

namespace App\View\Composers;

use App\Models\User;
use Illuminate\View\View;

class UsersComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $users = User::orderBy('wins', 'desc')->paginate(10);
        $view->with('users', $users);
    }
}
