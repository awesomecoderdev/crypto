<?php

namespace App\Console\Commands;

use App\Jobs\ProcessClearMedia;
use App\Models\Article;
use DOMDocument;
use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class ClearMedia extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remove:media';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove Media from public path';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $articles = Article::select("id", "content")->orderBy("id", "DESC")->get();
        $articles = array_chunk($articles->toArray(), 500);
        foreach ($articles as $key => $article) {
            ProcessClearMedia::dispatch($article);
        }
    }
}
