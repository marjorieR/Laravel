<?php

namespace App\Console\Commands;

use App\Model\Categories;
use App\Model\Notifications;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CategoryCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category:check {confirm=false}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'All checks in categories and handle notifications';

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
     * @return mixed
     */
    public function handle(){


        //récupere l'argument confirm
        $confirm = $this->argument('confirm');

        $categories = Categories::all();


//        if($confirm == "false"){

//            if($this->confirm('Do you want to continue? [y|N]')){

                DB::connection('mongodb')->collection('notifications')->delete();

                $ctp =0;


                foreach($categories as $category){

                    if($category->movies->isEmpty()){

                        $ctp++;
                        $notification = new Notifications();
                        $notification-> category = $category->toArray();
                        $notification-> message = "la categorie {$category->title} est vide";
                        $notification-> criticity = "warning";
                        $notification->save();

                    }
                }

//            }else{
//
//                $this->error('Aucune catégorie!');
//            }
//        }




    }
}
