<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Trainingcourse;


class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {
    //     return $this->view('emails.welcome')
    //         ->subject('Welcome Email');
    // }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function build()
    {
        $course = Trainingcourse::find($this->id);
        // $id = $this->id; // เข้าถึงค่า $id จากตัวแปร $this->id

        // dd($course);exit();
        return $this->view('emails.welcome', compact('course'))
            ->subject('Reserve Success');
    }
}
