<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Traits\ResponseTrait;
use Illuminate\Http\Response;

class ProjectsController extends Controller
{
    use ResponseTrait;
    /**
     * Get List Projects
     * @OA\Get (
     *     path="/api/projects",
     *     tags={"Projects"},
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *          @OA\JsonContent(
     *             @OA\Property(
     *                 property="status",
     *                 type="boolean",
     *             ),
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *             ),
     *             @OA\Property(
     *                 type="array",
     *                 property="data",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="id_projeto",
     *                         type="number",
     *                     ),
     *                     @OA\Property(
     *                         property="pronac",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="ano_projeto",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="nome",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="segmento",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="area",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="uf",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="municipio",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="data_inicio",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="data_termino",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="situacao",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="mecanismo",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="enquadramento",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="valor_captado",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="valor_aprovado",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="acessibilidade",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="objetivos",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="justificativa",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="etapa",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="ficha_tecnica",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="impacto_ambiental",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="especificacao_tecnica",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="providencia",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="democratizacao",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="sinopse",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="resumo",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="created_at",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="updated_at",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="valor_projeto",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="outras_fontes",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="valor_proposta",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="valor_solicitado",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="objetivo",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="estrategia_execucao",
     *                         type="string",
     *                     ),
     *                     @OA\Property(
     *                         property="link_incentivadores",
     *                         type="string",
     *                     ),
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function index()
    {
        try {
            $projects = Projects::all();
            return $this->responseSuccess($projects, 'Projects List Fetch Successfully !');
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json($projects);
    }
}
