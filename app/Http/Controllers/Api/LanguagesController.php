<?php

namespace SON\Http\Controllers\Api;


use SON\Http\Controllers\Controller;
use SON\Http\Requests\LanguageRequest;
use SON\Repositories\LanguageRepository;



class LanguagesController extends Controller
{

    /**
     * @var LanguageRepository
     */
    protected $repository;



    public function __construct(LanguageRepository $repository)
    {
        $this->repository = $repository;

    }


    /**
     * Display a listing of the resource.
     *
     * @SWG\GET(
     *     path="/api/language",
     *     description="Listar Language",
     *     @SWG\Parameter(
     *          name="Authorization", in="header", type="string", description="Bearer __token__"
     *     ),
     *     @SWG\Response(response="200", description="Coleção de language")
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
     *     path="/api/language",
     *     description="Criar Language",
     *     @SWG\Parameter(
     *          name="Authorization", in="header", type="string", description="Bearer __token__"
     *     ),
     *     @SWG\Parameter(
     *          name="body", in="body", required=true,
     *       @SWG\Schema(
     *          @SWG\Property( property="choes", type="string" ),
     *          @SWG\Property( property="votes", type="number"),
     *          @SWG\Property( property="question_id", type="integer"),
     *       )
     *          ),
     *     @SWG\Response(response="201", description="Language criada")
     * )
     * @param  LanguageRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(LanguageRequest $request)
    {
            $language = $this->repository->create($request->all());
            return response()->json($language, 201);
    }


    /**
     * Display the specified resource.
     *
     * @SWG\GET(
     *     path="/api/language/{id}",
     *     description="Listar uma categoria",
     *     @SWG\Parameter(
     *          name="Authorization", in="header", type="string", description="Bearer __token__"
     *     ),
     *     @SWG\Parameter(
     *          name="id", in="path", required=true, type="integer"
     *          ),
     *     @SWG\Response(response="200", description="Language encontrada")
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
     * Update the specified resource in storage.
     *
     * * @SWG\PUT(
     *     path="/api/language/{id}",
     *     description="Atualizar language",
     *     @SWG\Parameter(
     *          name="Authorization", in="header", type="string", description="Bearer __token__"
     *     ),
     *     @SWG\Parameter(
     *          name="id", in="path", required=true, type="integer"
     *          ),
     *     @SWG\Parameter(
     *          name="body", in="body", required=true,
     *       @SWG\Schema(
     *          @SWG\Property( property="choes", type="string" ),
     *          @SWG\Property( property="votes", type="number"),
     *          @SWG\Property( property="question_id", type="integer"),
     *       )
     *          ),
     *     @SWG\Response(response="201", description="Language atualizada")
     * )
     * @param  LanguageRequest $request
     * @param  string $id
     *
     * @return Response
     */
    public function update(LanguageRequest $request, $id)
    {
            $language = $this->repository->update($request->all(),$id);
            return response()->json($language, 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @SWG\DELETE(
     *     path="/api/language/{id}",
     *     description="Excluir language",
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

        if($deleted){
            return response()->json([], 204);
        }else{
            return response()->json([
                'error' => 'Resource can not be deleted'
            ], 500);
        }

    }
}
