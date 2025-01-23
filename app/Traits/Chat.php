<?php

namespace App\Traits;

use App\Models\ChatMessage;

trait Chat
{
    public function chats(){
        // id: string;
        // name: string;
        // avatar: string;
        // message_id: string;
        // from_id: string;
        // body: string;
        // is_read: boolean;
        // is_reply: boolean;
        // is_online: boolean;
        // created_at: string;
        // chat_type: CHAT_TYPE;

        // use relationship instead of join
        $chats = ChatMessage::with('from')->get();

        return $chats;
    }
}
