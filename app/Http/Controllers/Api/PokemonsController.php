<?php

namespace SON\Http\Controllers\Api;


use SON\Http\Controllers\Controller;
use SON\Http\Requests\PokemonsRequest;
use SON\Repositories\PokemonsRepository;



class PokemonsController extends Controller
{

    /**
     * @var PokemonsRepository
     */
    protected $repository;


    public function __construct(PokemonsRepository $repository)
    {
        $this->repository = $repository;

    }


    /**
     * Display a listing of the resource.
     *
     * @SWG\GET(
     *     path="/api/pokemons",
     *     description="Listar pokemons",
     *     @SWG\Parameter(
     *          name="Authorization", in="header", type="string", description="Bearer __token__"
     *     ),
     *     @SWG\Response(response="200", description="Coleção de pokemons")
     * )
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->repository->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @SWG\POST(
     *     path="/api/pokemons",
     *     description="Criar Pokemons",
     *     @SWG\Parameter(
     *          name="Authorization", in="header", type="string", description="Bearer __token__"
     *     ),
     *     @SWG\Parameter(
     *          name="body", in="body", required=true,
     *       @SWG\Schema(
     *          @SWG\Property(
     *              property="name",
     *              type="string"
     *          ),
     *       )
     *          ),
     *     @SWG\Response(response="201", description="Pokemons criada")
     * )
     * @param  PokemonsRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PokemonsRequest $request)
    {
            $question = $this->repository->create($request->all());
            return response()->json($question, 201);
    }


    /**
     * Update the specified resource in storage.
     *
     * @SWG\PUT(
     *     path="/api/pokemons/{id}",
     *     description="Atualizar Pokemons",
     *     @SWG\Parameter(
     *          name="Authorization", in="header", type="string", description="Bearer __token__"
     *     ),
     *     @SWG\Parameter(
     *          name="id", in="path", required=true, type="integer"
     *     ),
     *     @SWG\Parameter(
     *          name="body", in="body", required=true,
     *       @SWG\Schema(
     *          @SWG\Property( property="name", type="string"),
     *          @SWG\Property( property="tipo", type="string" ),
     *          @SWG\Property( property="poderatack", type="integer"),
     *          @SWG\Property( property="poderdefesa", type="integer"),
     *          @SWG\Property( property="agilidade", type="integer"),
     *       )
     *          ),
     *     @SWG\Response(response="201", description="Questões atualizada")
     * )
     * @param PokemonsRequest $request
     * @param  string $id
     * @return Response
     */
    public function update(PokemonsRequest $request, $id)
    {
        $question = $this->repository->update($request->all(),$id);
        return response()->json($question, 200);
    }


    /**
     * Display the specified resource.
     *
     * @SWG\GET(
     *     path="/api/pokemons/{id}",
     *     description="Listar um Pokemon",
     *     @SWG\Parameter(
     *          name="Authorization", in="header", type="string", description="Bearer __token__"
     *     ),
     *     @SWG\Parameter(
     *          name="id", in="path", required=true, type="integer"
     *          ),
     *     @SWG\Response(response="200", description="question encontrada")
     * )
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->repository->find($id);


    }



    /**
     * Remove the specified resource from storage.
     *
     * @SWG\DELETE(
     *     path="/api/pokemons/{id}",
     *     description="Excluir pokemons",
     *     @SWG\Parameter(
     *          name="Authorization", in="header", type="string", description="Bearer __token__"
     *     ),
     *     @SWG\Parameter(
     *          name="id", in="path", required=true, type="integer"
     *     ),
     *     @SWG\Response(response="204", description="No content")
     * )
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if ($deleted) {
            return response()->json([],204);
        }else{
            return response()->json(['erro' => 'not deleted'],500);
        }

    }
}
