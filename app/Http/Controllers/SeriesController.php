<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::all();
        $mensagemSucesso = session('mensagem.sucesso');
        return view('series.index', compact('series', 'mensagemSucesso'));
    }

    public function create(Request $request)
    {
        return view('series.create');
    }

    public function store (SeriesFormRequest $request)
    {

        $res = Serie::create($request->all());   ///substitui o conteudo abaixo, tem q incluit no model $fillable
//        $request->session()->flash('mensagem.sucesso', "Série '{$res->name}' adicionada com sucesso");
//        Serie::create($request->only(['name']));   ///pegando os dados individuais da requisição
//        Serie::create($request->exect(['name']));   ///pegar td menos o token

//        $nameSerie = $request->name;
//        $serie = new Serie();
//        $serie->name = $nameSerie;
//        $serie->save();


        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$res->name}' adicionada com sucesso");
    }

    public function destroy(Serie $series)
    {
//        dd($series);
//        $id = $request->series;
//        Serie::destroy($id);
        $series->delete();
//        $request->session()->flash('mensagem.sucesso', "Série '{$series->name}' removida com sucesso");
        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->name}' removida com sucesso");
    }

    public function edit(Serie $series)
    {
        return view('series.edit')->with('serie',$series);
    }

    public function update(Serie $series, SeriesFormRequest $request)
    {
        $series->name = $request->name;
        ///$series->fill($request->all()) /// para trazer e enviar todos os inputs
        $series->save();
        return to_route('series.index')->with('mensagem.sucesso', "Nome '{$series->name}' alterado com sucesso");
    }
}

