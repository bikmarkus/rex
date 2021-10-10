<?php

namespace App\Controllers;

use App\Core\App;

class ProjectsController
{
    /**
     * Show all users.
     */
    public function index()
    {
        $items = App::get('database')->selectAll('projects');

        return view('projects', compact('items'));
    }

    /**
     * Store a new user in the database.
     */
    public function store()
    {
        App::get('database')->insert('projects', [
            'title' => $_POST['title']
        ]);

        return redirect('projects');
    }
    public function delete()
    {
        App::get('database')->delete('projects', [
            $_POST['delete'] => 'id'
        ]);

        return redirect('projects');
    }
}
?>