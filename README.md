# 👗 Inventário de Roupas - Atividade Ana Júlia

Este projeto é uma aplicação web simples desenvolvida para demonstrar a integração entre um banco de dados relacional **PostgreSQL** e a linguagem de programação **PHP**. A aplicação gerencia um estoque de roupas, permitindo a visualização de itens, preços e lojas.

---

## 🛠️ Tecnologias Utilizadas

* **Backend:** PHP 8.x
* **Banco de Dados:** PostgreSQL 16
* **Servidor Local:** XAMPP (Apache)
* **Editor de Código:** VS Code
* **Ferramenta de Gestão de DB:** pgAdmin 4

---

## 🗄️ Estrutura do Banco de Dados

O banco de dados se chama `atividade_anajulia`. A tabela principal é a `usuario` (adaptada para um contexto de inventário), com a seguinte estrutura:

| Coluna | Tipo | Descrição |
| :--- | :--- | :--- |
| `id_roupa` | SERIAL | Chave Primária (Auto-incremento) |
| `roupa` | VARCHAR(100) | Nome da peça de roupa |
| `preco` | DECIMAL(10,2) | Preço do item (Ex: 89.90) |
| `loja` | VARCHAR(100) | Nome da loja física ou online |

---

## 🚀 Como Executar o Projeto

### 1. Configuração do Banco de Dados
No **pgAdmin**, execute os seguintes comandos SQL para criar a estrutura e popular os dados:

```sql
CREATE DATABASE atividade_anajulia;

CREATE TABLE public.usuario (
    id_roupa SERIAL PRIMARY KEY,
    roupa VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    loja VARCHAR(100)
);

INSERT INTO public.usuario (roupa, preco, loja)
VALUES 
('Camiseta Oversized Preta', 89.90, 'Loja Centro'),
('Calça Jeans Baggy', 159.00, 'Loja Shopping'),
('Vestido Midi Floral', 120.50, 'Loja Online'),
('Jaqueta Jeans Classic', 199.90, 'Loja Shopping'),
('Shorts de Linho Bege', 75.00, 'Loja Centro'),
('Moletom Canguru Cinza', 145.00, 'Loja Online'),
('Saia Plissada Mid', 95.80, 'Loja Centro'),
('Camisa Polo Branca', 65.00, 'Loja Shopping'),
('Blazer Alfaiataria', 250.00, 'Loja Premium'),
('Top Cropped Canelado', 39.90, 'Loja Online'),
('Calça Sarja Khaki', 130.00, 'Loja Centro'),
('Cardigan de Tricô', 110.00, 'Loja Shopping'),
('Bermuda Tactel Surf', 55.00, 'Loja Online'),
('Tênis Casual Branco', 180.00, 'Loja Shopping'),
('Meia Cano Alto Kit', 29.90, 'Loja Centro');
