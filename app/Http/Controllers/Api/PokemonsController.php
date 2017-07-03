<?php

namespace SON\Http\Controllers\Api;


use SON\Http\Controllers\Controller;
use SON\Http\Requests\QuestionRequest;
use SON\Repositories\QuestionRepository;



class QuestionsController extends Controller
{

    /**
     * @var QuestionRepository
     */
    protected $repository;


    public function __construct(QuestionRepository $repository)
    {
        $this->repository = $repository;

    }


    /**
     * Display a listing of the resource.
     *
     * @SWG\GET(
     *     path="/api/question",
     *     description="Listar question",
     *     @SWG\Parameter(
     *          name="Authorization", in="header", type="string", description="Bearer __token__"
     *     ),
     *     @SWG\Response(response="200", description="Coleção de question")
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
     *     path="/api/question",
     *     description="Criar Question",
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
     *     @SWG\Response(response="201", description="Question criada")
     * )
     * @param  CategoryRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
            $question = $this->repository->create($request->all());
            return response()->json($question, 201);
    }


    /**
     * Update the specified resource in storage.
     *
     * @SWG\PUT(
     *     path="/api/question/{id}",
     *     description="Atualizar Question",
     *     @SWG\Parameter(
     *          name="Authorization", in="header", type="string", description="Bearer __token__"
     *     ),
     *     @SWG\Parameter(
     *          name="id", in="path", required=true, type="integer"
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
     *     @SWG\Response(response="201", description="Questões atualizada")
     * )
     * @param QuestionRequest $request
     * @param  string $id
     * @return Response
     */
    public function update(QuestionRequest $request, $id)
    {
        $question = $this->repository->update($request->all(),$id);
        return response()->json($question, 200);
    }


    /**
     * Display the specified resource.
     *
     * @SWG\GET(
     *     path="/api/question/{id}",
     *     description="Listar uma question",
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
     *     path="/api/question/{id}",
     *     description="Excluir question",
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
