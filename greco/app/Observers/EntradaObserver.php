<?php

namespace App\Observers;

use App\Models\Entrada;
use App\Models\Produto;
use App\Models\Notification;

class EntradaObserver
{
    /**
     * Handle the Entrada "created" event.
     *
     * @param  \App\Models\Entrada  $entrada
     * @return void
     */
    public function created(Entrada $entrada)
    {
        Produto::find($entrada->id_inventario)->increment('stock');

        $p = Produto::find($entrada->id_inventario);

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
     * Handle the Entrada "updated" event.
     *
     * @param  \App\Models\Entrada  $entrada
     * @return void
     */
    public function updated(Entrada $entrada)
    {
        //
    }

    /**
     * Handle the Entrada "deleted" event.
     *
     * @param  \App\Models\Entrada  $entrada
     * @return void
     */
    public function deleted(Entrada $entrada)
    {
        //
    }

    /**
     * Handle the Entrada "restored" event.
     *
     * @param  \App\Models\Entrada  $entrada
     * @return void
     */
    public function restored(Entrada $entrada)
    {
        //
    }

    /**
     * Handle the Entrada "force deleted" event.
     *
     * @param  \App\Models\Entrada  $entrada
     * @return void
     */
    public function forceDeleted(Entrada $entrada)
    {
        //
    }
}
