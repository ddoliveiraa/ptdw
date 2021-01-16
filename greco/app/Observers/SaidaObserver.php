<?php

namespace App\Observers;

use App\Models\Entrada;
use App\Models\Operador;
use App\Models\Produto;
use App\Models\Saida;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;

class SaidaObserver
{
    /**
     * Handle the Saida "created" event.
     *
     * @param  \App\Models\Saida  $saida
     * @return void
     */
    public function created(Saida $saida)
    {
        Produto::find($saida->id_produto)->decrement('stock');
        Entrada::where('id_inventario', '=', $saida->id_produto)
            ->where('id_ordem', '=', $saida->id_ordem)->update(['data_termino' => $saida->created_at]);

        $p = Produto::find($saida->id_produto);

        Notification::where('tipo', 'Falta de Stock')->where('id_produto', $p->id)->delete();

        if ($p->stock < $p->stock_min) {
           Notification::create([
                'tipo' => 'Falta de Stock',
                'id_produto' => $p->id,
                'texto' => $p->designacao
            ]);
        }
    }

    /**
     * Handle the Saida "updated" event.
     *
     * @param  \App\Models\Saida  $saida
     * @return void
     */
    public function updated(Saida $saida)
    {
        //
    }

    /**
     * Handle the Saida "deleted" event.
     *
     * @param  \App\Models\Saida  $saida
     * @return void
     */
    public function deleted(Saida $saida)
    {
        //
    }

    /**
     * Handle the Saida "restored" event.
     *
     * @param  \App\Models\Saida  $saida
     * @return void
     */
    public function restored(Saida $saida)
    {
        //
    }

    /**
     * Handle the Saida "force deleted" event.
     *
     * @param  \App\Models\Saida  $saida
     * @return void
     */
    public function forceDeleted(Saida $saida)
    {
        //
    }
}
