<?php

/**
 * @OA\Schema(
 *     schema="Project",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="Meu Projeto"),
 *     @OA\Property(property="description", type="string", example="Descrição do projeto"),
 *     @OA\Property(property="user_id", type="integer", example=1),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */

/**
 * @OA\Schema(
 *     schema="ProjectStore",
 *     type="object",
 *     required={"name"},
 *     @OA\Property(property="name", type="string", example="Novo Projeto"),
 *     @OA\Property(property="description", type="string", example="Descrição do projeto")
 * )
 */

/**
 * @OA\Schema(
 *     schema="Task",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="title", type="string", example="Implementar Login"),
 *     @OA\Property(property="description", type="string", example="Implementar sistema de autenticação"),
 *     @OA\Property(property="status", type="string", enum={"pending", "in_progress", "completed"}, example="pending"),
 *     @OA\Property(property="project_id", type="integer", example=1),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */

/**
 * @OA\Schema(
 *     schema="TaskStore",
 *     type="object",
 *     required={"title", "project_id"},
 *     @OA\Property(property="title", type="string", example="Nova Tarefa"),
 *     @OA\Property(property="description", type="string", example="Descrição da tarefa"),
 *     @OA\Property(property="project_id", type="integer", example=1)
 * )
 */

/**
 * @OA\Schema(
 *     schema="Tag",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="bug"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */

/**
 * @OA\Schema(
 *     schema="TagStore",
 *     type="object",
 *     required={"name"},
 *     @OA\Property(property="name", type="string", example="feature")
 * )
 */

/**
 * @OA\Schema(
 *     schema="Profile",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="user_id", type="integer", example=1),
 *     @OA\Property(property="bio", type="string", example="Desenvolvedor full-stack"),
 *     @OA\Property(property="avatar_url", type="string", format="url", example="https://example.com/avatar.jpg"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */

/**
 * @OA\Schema(
 *     schema="ProfileUpdate",
 *     type="object",
 *     @OA\Property(property="bio", type="string", example="Desenvolvedor full-stack"),
 *     @OA\Property(property="avatar_url", type="string", format="url", example="https://example.com/avatar.jpg")
 * )
 */

/**
 * @OA\Schema(
 *     schema="User",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="João Silva"),
 *     @OA\Property(property="email", type="string", format="email", example="joao@example.com"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */
