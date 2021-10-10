<?php

namespace App\Controllers;

use App\Core\App;

class InboxController
{
    /**
     * Show all users.
     */
    public function index()
    {
        $items = App::get('database')->selectAll('inbox');

        return view('inbox', compact('items'));
    }

    /**
     * Store a new user in the database.
     */
    public function store()
    {
        App::get('database')->insert('inbox', [
            'title' => $_POST['title']
        ]);

        return redirect('inbox');
    }
    public function delete()
    {
        App::get('database')->delete('inbox', [
            $_POST['delete'] => 'id'
        ]);

        return redirect('inbox');
    }
}
?>