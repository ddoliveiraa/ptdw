<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    {

        if ($request->ajax()) {

            $data = Produto::where('designacao', 'LIKE', "%$request->search%")
                    ->orWhere('formula', 'LIKE', "%$request->search%")->take(10)->get();
                
            $output = '';

            if (count($data) > 0) {

                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';

                foreach ($data as $row) {

                    $output .= '<li class="list-group-item"><a href="/ficha/'.$row->id.'"> Designação: '. $row->designacao . '</a></li>';
                }

                $output .= '</ul>';
            } else {

                $output .= '<li class="list-group-item">' . 'Sem Resutados' . '</li>';
            }

            return $output;
        }
    }
}
