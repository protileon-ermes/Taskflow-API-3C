<?php

namespace App\Http\Controllers;

use App\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // O Laravel injeta automaticamente o serviço aqui
    public function __construct(
        protected ProjectService $projectService
    ) {
    }

    /**
     * @OA\Get(
     *     path="/v1/projects",
     *     summary="Listar todos os projetos",
     *     tags={"Projects"},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de projetos obtida com sucesso",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Project")
     *         )
     *     )
     * )
     */
    public function index()
    {
        $projects = $this->projectService->getAllProjects();
        return response()->json($projects);
    }

    /**
     * @OA\Post(
     *     path="/v1/projects",
     *     summary="Criar novo projeto",
     *     tags={"Projects"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/ProjectStore")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Projeto criado com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/Project")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erro de validação"
     *     )
     * )
     */
    public function store(Request $request)
    {
        // Aqui você poderia adicionar validações ($request->validate(...))
        $project = $this->projectService->createProject($request->all());

        return response()->json($project, 201);
    }

    /**
     * @OA\Get(
     *     path="/v1/projects/{id}",
     *     summary="Obter projeto por ID",
     *     tags={"Projects"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID do projeto",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Projeto obtido com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/Project")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Projeto não encontrado"
     *     )
     * )
     */
    public function show($id)
    {
        $project = $this->projectService->getProjectById($id);
        return response()->json($project);
    }

    /**
     * @OA\Put(
     *     path="/v1/projects/{id}",
     *     summary="Atualizar projeto",
     *     tags={"Projects"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID do projeto",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/ProjectStore")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Projeto atualizado com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/Project")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Projeto não encontrado"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erro de validação"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $project = $this->projectService->updateProject($id, $request->all());
        return response()->json($project);
    }

    /**
     * @OA\Delete(
     *     path="/v1/projects/{id}",
     *     summary="Deletar projeto",
     *     tags={"Projects"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID do projeto",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Projeto deletado com sucesso"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Projeto não encontrado"
     *     )
     * )
     */
    public function destroy($id)
    {
        $this->projectService->deleteProject($id);
        return response()->json(null, 204);
    }
}

