<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Models\Post;
use Illuminate\Queue\SerializesModels;

class PostCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The post instance.
     *
     * @var \App\Models\Post
     */
    protected $post;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.post-created')
                    ->with([
                        'title' => $this->post->title,
                        'content' => $this->post->content,
                    ]);
    }
}
