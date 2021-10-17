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
        session_start();  
        if($_POST['card_id']!='')
        {
            $card_id = $_POST['card_id'];
        } elseif($_SESSION['project_id']!='') 
        {
            $card_id = $_SESSION['project_id'];
        }
        $card = App::get('database')->selectAllById('projects',$card_id);
        $card_next = App::get('database')->selectAllNextByProjectId("next",$card_id);
        array_push($card, $card_next);
        return view('projectCard', compact('card'));
    }
    public function storeNext()
    {
        App::get('database')->insert('next', [
            'title' => $_POST['title'],
            'project_id' => $_POST['project_id'],
        ]);
        session_start();
        $_SESSION['project_id'] = $_POST['project_id'];
       
        return redirect('project-card');
    }
    public function deleteNext()
    {
        App::get('database')->delete('next', [
            $_POST['delete'] => 'id'
        ]);
        session_start();
        $_SESSION['project_id'] = $_POST['project_id'];
        return redirect('project-card');
    }
    
}
?>