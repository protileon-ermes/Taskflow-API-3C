# Swagger UI - TaskFlow API

O Swagger UI foi instalado e configurado com sucesso neste projeto! 

## Como acessar

A documentação da API está disponível em:

- **Interface Web**: http://localhost:8000/api/documentation
- **JSON Doc**: http://localhost:8000/api/docs
- **Assets**: http://localhost:8000/docs/asset/{asset}

## Funcionalidades

O L5-Swagger fornece:

✅ Documentação interativa da API  
✅ Teste de endpoints diretamente na interface  
✅ Geração automática de documentação OpenAPI  
✅ Suporte a autenticação Bearer Token  
✅ Schemas e modelos de dados bem documentados  

## Arquivos de Configuração

- **Configuração**: `/config/l5-swagger.php`
- **Anotações OpenAPI**: `/app/OpenAPI/OpenAPI.php`
- **Documentação JSON**: `/storage/api-docs/api-docs.json`

## Adicionar Novos Endpoints

Para adicionar mais endpoints à documentação, você pode:

### 1. Usar Anotações OpenAPI nos Controllers

```php
/**
 * @OA\Get(
 *     path="/api/v1/projects/{id}",
 *     tags={"Projects"},
 *     summary="Obter projeto",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID do projeto"
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Projeto obtido com sucesso"
 *     )
 * )
 */
```

### 2. Gerar Documentação

```bash
docker exec taskflow-php php artisan l5-swagger:generate
```

## Próximos Passos Recomendados

1. **Documentar Controllers**: Adicione anotações OpenAPI aos seus controllers
2. **Definir Schemas**: Crie schemas reutilizáveis para suas models
3. **Testar Endpoints**: Use a interface Web do Swagger para testar sua API
4. **Autenticação**: Configure a autenticação Bearer Token na interface
5. **CI/CD**: Integre a geração de documentação no seu pipeline de deployment

## Recursos Úteis

- [OpenAPI 3.0 Specification](https://swagger.io/specification/)
- [L5-Swagger Documentation](https://github.com/DarkaOnline/L5-Swagger)
- [Swagger/OpenAPI Annotations](https://zircote.github.io/swagger-php/)
