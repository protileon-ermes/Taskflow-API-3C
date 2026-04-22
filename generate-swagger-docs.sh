#!/bin/bash

# Script para gerar documentação Swagger

echo "🔄 Gerando documentação Swagger UI..."

# Dentro do container
docker exec taskflow-php php artisan l5-swagger:generate

if [ $? -eq 0 ]; then
    echo "✅ Documentação gerada com sucesso!"
    echo ""
    echo "📖 Acesse a documentação em:"
    echo "   http://localhost:8000/api/documentation"
else
    echo "❌ Erro ao gerar documentação"
    exit 1
fi
