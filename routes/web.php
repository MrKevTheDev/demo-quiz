<?php

/** @var Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Libs\Markov\Dictionary;
use App\Libs\Markov\Generator\MarkovFromText;
use App\Libs\Markov\MarkovWithCustomFormatting;
use App\Models\Question;
use Laravel\Lumen\Routing\Router;

$router->get('/', function () use ($router) {
    return view('index');
});
$router->get('/question/{id}', function ($id) use ($router) {
    $question = new Question();
    $dDictionary = Dictionary::get();
    /*    $markov = (new MarkovWithCustomFormatting)->generateTableFromText($dDictionary);*/
    $markov = (new MarkovWithCustomFormatting)->setTable(
        new MarkovFromText($dDictionary, 40)
    );
    $question->question = $markov->generateLine(45) . '?';
    $question->type = 'qa';
    $question->hint = 'this is a made question';
    $question->answers = [
        $markov->generateLine(30),
        $markov->generateLine(10),
        $markov->generateLine(12),
    ];
    return response()->json($question);


});
