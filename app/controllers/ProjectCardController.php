<?php

namespace App\Controllers;

use App\Core\App;

class ProjectCardController
{
    /**
     * Show current card
     */
    public function index()
    {     
        $card_id = $_POST['card_id'];
        $card = App::get('database')->selectAllById('projects',$card_id);

        return view('projectCard', compact('card'));
    }

    
}
?>