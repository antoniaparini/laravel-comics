<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * DETAIL PAGE FOR COMIC ITEM
     */

    public function show($id){
        //return 'DETAIL PAGE FOR ID:' . $id;
        $comics = config('comics');
        //dd($comics);

        /**
         * Get specific comic by ID
         */

         $comic = [];
         
         //Itero e vado a pescare solo l'elemento che mi serve
         //Io itero su tutti gli items di comics, ciclo su tutti gli elementi e ad ogni elemento faccio una comparazione tra la sua chiave 'id' e l'id passato in rotta
         foreach ($comics as $item){
             if($id == $item['id']){
                 $comic = $item;
             }

         }
         //dd($comic);
         return view ('comics.show');

    }



}
