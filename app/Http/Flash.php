<?php

namespace App\Http;

class Flash {

    public function create($title, $message, $type, $key = 'flash_message'){

        return session()->flash($key, [

            'title'    =>  $title,
            'message'  =>  $message,
            'type'    =>   $type

          ]);
    }

    public function create1($title, $message, $key = 'flash_message'){

        return session()->flash($key, [

            'title'    =>  $title,
            'message'  =>  $message

          ]);
    }

    public function info($title, $message){

        return $this->create($title, $message, 'info');
    }

    public function success($title, $message){

        return $this->create($title, $message, 'success');
    }

    public function error($title, $message){

        return $this->create($title, $message, 'error');
    }

    public function overlay($title, $message, $level = 'info'){

        return $this->create($title, $message, $level, 'flash_message_overlay');
    }

    public function gif($title, $message){

        return $this->create1($title, $message, 'flash_message_gif');
    }
}
