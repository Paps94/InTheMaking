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

    public function createv2($title, $message, $key = 'flash_message'){

        return session()->flash($key, [

            'title'    =>  $title,
            'message'  =>  $message

          ]);
    }

    public function createv3($title, $message, $confirm, $cancel ,$key = 'flash_message'){

        return session()->flash($key, [

            'title'    =>  $title,
            'message'  =>  $message,
            'confirm'  =>  $confirm,
            'cancel'  =>  $cancel

          ]);
    }

    public function info($title, $message){

        return $this->create($title, $message, 'info');
    }

    public function question($title, $message){

        return $this->create($title, $message, 'question');
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

    public function overlay_dual($title, $message, $confirm, $cancel){

        return $this->createv3($title, $message, $confirm, $cancel, 'flash_message_overlay_dual');
    }

    public function gif($title, $message){

        return $this->createv2($title, $message, 'flash_message_gif');
    }
}
