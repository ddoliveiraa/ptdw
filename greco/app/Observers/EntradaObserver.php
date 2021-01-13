<?php

namespace App\Observers;

use App\Models\Entrada;
use App\Models\Produto;

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