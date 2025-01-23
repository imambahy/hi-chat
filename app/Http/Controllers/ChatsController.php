<?php

namespace App\Http\Controllers;

use App\Traits\Chat;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ChatsController extends Controller
{
    use Chat;

    public function index(){
        try{
            return Inertia::render('chats/Index');
        }catch (\Exception $e){
            dd($e->getMessage());
        }
    }

    public function loadChats(){
        try{
            // chats() is a traits, cause archived will use it too
            $chats = $this->chats();

            return $this->ok($chats);
        }catch(\Exception $e){
            return $this->oops($e->getMessage());
        }
    }
}
