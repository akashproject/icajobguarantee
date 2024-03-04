<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Course;

class UpdateReview extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:review';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $courses = Course::all();

        foreach($courses as $key => $value) {
            $new_review = $value->number_of_rating+rand(5,10);
            $course = Course::findOrFail($value->id)->update(["number_of_rating"=>$new_review]);
        }
        
        return Command::SUCCESS;
    }
}
