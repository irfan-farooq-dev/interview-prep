<?php
namespace App\Swagger;

/**
 * @OA\Info(
 *     title="Profile Service API",
 *     version="1.0.0",
 *     description="API for the Profile Service"
 * )
 *
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     description="Enter token as: Bearer <token>"
 * )
 *
 * @OA\Schema(
 *   schema="Info",
 *   type="object",
 *   @OA\Property(property="service", type="string", example="profile-service"),
 *   @OA\Property(property="version", type="string", example="1.0.0"),
 *   @OA\Property(property="message", type="string", example="Welcome to Profile Service (public endpoint)")
 * )
 *
 * @OA\Schema(
 *   schema="NewsItem",
 *   type="object",
 *   @OA\Property(property="title", type="string", example="Microservices concept demo"),
 *   @OA\Property(property="date", type="string", format="date-time", example="2025-12-31T12:34:56Z")
 * )
 *
 * @OA\Schema(
 *   schema="Profile",
 *   type="object",
 *   @OA\Property(property="id", type="integer", example=1),
 *   @OA\Property(property="name", type="string", example="Demo User"),
 *   @OA\Property(property="email", type="string", format="email", example="demo@example.com")
 * )
 *
 * @OA\Schema(
 *   schema="Stats",
 *   type="object",
 *   @OA\Property(property="projects", type="integer", example=5),
 *   @OA\Property(property="tasks", type="integer", example=12),
 *   @OA\Property(property="notifications", type="integer", example=3)
 * )
 */
class Schemas
{
    // This file only contains OpenAPI annotations for l5-swagger to scan.
}
