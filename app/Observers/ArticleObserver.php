<?php

namespace App\Observers;

use App\Models\Article;
use Cocur\Slugify\Slugify;
use Illuminate\Support\Str;

class ArticleObserver
{
    /**
     * Handle the Article "created" event.
     */
    public function created(Article $article): void
    {
       // $instance=new Slugify();
        //$article->slug=$instance->Slugify($article->title);
        $article->slug=Str::slug($article->title,"-");
        $article->save();
    }

    /**
     * Handle the Article "updated" event.
     */
    public function updated(Article $article): void
    {
        $article->slug=Str::slug($article->title,"-");
        $article->saveQuietly();
    }

    /**
     * Handle the Article "deleted" event.
     */
    public function deleted(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "restored" event.
     */
    public function restored(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "force deleted" event.
     */
    public function forceDeleted(Article $article): void
    {
        //
    }
}
