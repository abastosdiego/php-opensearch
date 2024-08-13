**Projeto de exemplo utilizando php, opensearch e docker**  

**-Para rodar o projeto, execute os seguintes passos:**  
docker compose up -d  
docker exec -it php-opensearch bash  
composer install  

**-Abra o navegador**  
http://localhost:8001/create-index.php  
http://localhost:8001/create-document.php  
http://localhost:8001/search-document.php?pesquisa=administracao  

**Referência:**  
https://opensearch.org/docs/latest/clients/php/
