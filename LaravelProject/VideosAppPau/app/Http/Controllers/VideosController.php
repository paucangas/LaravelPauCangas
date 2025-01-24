<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class VideosController extends Controller
{
    /**
     * Mostra els detalls d'un video por el seu ID.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id): View
    {
        // Buscar el vídeo per ID
        $video = Video::findOrFail($id);

        // Retornar una vista amb les dades del vídeo
        return view('videos.show', compact('video'));
    }

    public function index(): View
    {
        // Obtenir tots els vídeos
        $videos = Video::all();

        // Retornar una vista amb tots els vídeos
        return view('videos.index', compact('videos'));
    }

    /**
     * Retorna els vídeos que han sigut testejats per un usuari en concret.
     *
     * @param int $userId
     * @return \Illuminate\Contracts\View\View
     */
    public function testedBy($userId): View
    {
        // Obtindre els vídeos testejats per un usuarie específic
        $videos = Video::whereHas('testedBy', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();

        // Retornar una vista amb els vídeos testejats per l'usuari
        return view('videos.tested-by', compact('videos'));
    }
}
