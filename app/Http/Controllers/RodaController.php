<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

class RodaController extends Controller
{
    /**
     * Gira o número
     *
     * @return Response
     */

    public function girar()
    {
        // Sorteia o número

        $numSorteado = rand(0, 5000000);

        return response()->json(['numSorteado' => $numSorteado]);
    }

    /**
     * Retorna a pagina de como jogar
     *
     * @return void
     */

    public function howtoplay()
    {
        return view('how_to_play');
    }

    public function answers () {
        return view ('answers');
    }

}
