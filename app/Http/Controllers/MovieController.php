<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    protected $apiKey;
    protected $baseUrl;
    protected $imageBaseUrl;

    public function __construct()
    {
        $this->apiKey = env('MOVIE_DB_API_KEY');
        $this->baseUrl = env('MOVIE_DB_BASE_URL');
        $this->imageBaseUrl = env('MOVIE_DB_IMAGE_BASE_URL');
    }

    public function index()
    {
        // Mengambil data film populer
        $moviesResponse = Http::get("{$this->baseUrl}/movie/popular", [
            'api_key' => $this->apiKey,
            'language' => 'en-US',
            'page' => 1,
        ]);

        // Mendapatkan 3 film teratas
        $movies = [];
        if ($moviesResponse->successful()) {
            $movies = collect($moviesResponse->json()['results'])->take(3);
        }

        // Mengambil data TV show populer
        $tvShowsResponse = Http::get("{$this->baseUrl}/tv/popular", [
            'api_key' => $this->apiKey,
            'language' => 'en-US',
            'page' => 1,
        ]);

        // Mendapatkan 3 TV show teratas
        $tvShows = [];
        if ($tvShowsResponse->successful()) {
            $tvShows = collect($tvShowsResponse->json()['results'])->take(3);
        }

        // Mengirimkan data ke view
        return view('welcome', [
            'movies' => $movies,
            'tvShows' => $tvShows,
            'imageBaseUrl' => $this->imageBaseUrl
        ]);
    }
}
