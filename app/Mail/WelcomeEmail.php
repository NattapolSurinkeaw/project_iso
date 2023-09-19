<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\PendingTraining;
use App\Models\OtherTraining;


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
        $pendingtrain = PendingTraining::find($this->id);
        $otherTrainings = OtherTraining::where('pending_id', $pendingtrain->id)->get();
        // $id = $this->id; // เข้าถึงค่า $id จากตัวแปร $this->id

        // dd($otherTrainings);exit();
        return $this->view('emails.welcome', compact('pendingtrain', 'otherTrainings'))
            ->subject('Reserve Success');
    }
}
