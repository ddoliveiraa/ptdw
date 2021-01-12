<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    {

        if ($request->ajax()) {
            $s = $request->search;
            if ($request->filtro == "todos") {
                $data = Produto::where('designacao', 'LIKE', "%$s%")
                    ->orWhere('formula', 'ILIKE', "%$s%")
                    ->orWhere('CAS', 'ILIKE', "%$s%")
                    ->orWhere('id', 'ILIKE', "%$s%")->take(5)->get();
            } elseif ($request->filtro == "quimico") {
                $data = Produto::where('familia', '=', 1)->where(function ($query) use ($s) {
                    $query->where('designacao', 'ILIKE', "%$s%")
                        ->orWhere('formula', 'ILIKE', "%$s%")
                        ->orWhere('CAS', 'ILIKE', "%$s%")
                        ->orWhere('id', 'ILIKE', "%$s%");
                })->take(5)->get();
            } elseif ($request->filtro == "naoquimico") {
                $data = Produto::where('familia', '=', 2)->where(function ($query) use ($s) {
                    $query->where('designacao', 'ILIKE', "%$s%")
                        ->orWhere('id', 'ILIKE', "%$s%");
                })->take(5)->get();
            }

            $output = '';

            if (count($data) > 0) {

                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';

                foreach ($data as $row) {
                    $output .= '<li class="list-group-item"><a href="/ficha/' . $row->id . '"> Produto: ' . $row->designacao . '</a></li>';
                }

                $output .= '</ul>';
            } else {

                $output .= '<li class="list-group-item">' . 'Sem Resutados' . '</li>';
            }

            return $output;
        }
    }
}
