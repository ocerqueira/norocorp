# Especificação de Requisitos de Software (SRS)

## 1. Introdução

### 1.1 Propósito
Este documento tem como objetivo fornecer uma especificação detalhada dos requisitos para o sistema de intranet que estou desenvolvendo para a noroaco. Ele será usado pela equipe de desenvolvimento para orientar a implementação e manutenção de funcionanalidades

### 1.2 Escopo
O sistema de intranet, permitirá o gerenciamento de usuários, projetos, tarefas, documentos, comunicados internos e relatórios de desempenho. Ele será utilizado por administradores, gestores e funcionários da empresa.

### 1.3 Definições, Acrônimos e Abreviações
- **MVC**: Model-View-Controller
- **SRS**: Software Requirements Specification
- **CRUD**: Create, Read, Update, Delete
- **ERP**: Enterprise Resource Planning

### 1.4 Referências
- Documento de visão do projeto
- Manuais de outros sistemas de gestão empresarial
- Normas internas da empresa

### 1.5 Visão Geral do Documento
Este documento é dividido em três partes principais: Introdução, Descrição Geral e Requisitos Específicos. A seção de Introdução fornece uma visão geral do documento, a Descrição Geral oferece um contexto do produto e a seção de Requisitos Específicos detalha os requisitos funcionais e não funcionais do sistema.

## 2. Descrição Geral

### 2.1 Perspectiva do Produto
O sistema de intranet de gestão empresarial será uma aplicação web que se integrará com o ERP da empresa e plataformas de comunicação internas. Ele substituirá processos manuais e descentralizados, centralizando a gestão e comunicação da empresa.

### 2.2 Funções do Produto
- Gerenciamento de usuários (registro, atualização, controle de acesso)
- Gerenciamento de projetos e tarefas
- Armazenamento e compartilhamento de documentos
- Publicação de comunicados internos
- Geração de relatórios de desempenho e atividades

### 2.3 Características dos Usuários
- **Administradores**: Gerenciam o sistema, configuram permissões e visualizam todos os relatórios.
- **Gestores**: Gerenciam projetos e equipes, acompanham o progresso das tarefas.
- **Funcionários**: Acessam suas tarefas, documentos e comunicados internos.

### 2.4 Restrições Gerais
- O sistema deve estar disponível 24/7.
- Deve suportar até 500 usuários simultâneos.
- O tempo de resposta para qualquer ação não deve exceder 3 segundos.

### 2.5 Suposições e Dependências
- O sistema dependerá do ERP da empresa para a integração de dados.
- Suponha que todos os usuários tenham acesso à internet e dispositivos compatíveis.

## 3. Requisitos Específicos

### 3.1 Requisitos Funcionais

#### 3.1.1 Cadastro de Usuários
- **Entrada**: Informações pessoais e profissionais do usuário (nome, e-mail, cargo, departamento, etc.).
- **Processamento**: Validação dos dados e armazenamento no banco de dados.
- **Saída**: Confirmação do cadastro e notificação ao usuário.

#### 3.1.2 Gerenciamento de Projetos
- **Entrada**: Dados do projeto (nome, descrição, prazo, responsáveis, etc.).
- **Processamento**: Criação, atualização e monitoramento do projeto.
- **Saída**: Lista de projetos e seus status.

#### 3.1.3 Gerenciamento de Tarefas
- **Entrada**: Detalhes da tarefa (descrição, prazo, responsável, etc.).
- **Processamento**: Criação, atualização e monitoramento da tarefa.
- **Saída**: Lista de tarefas e seus status.

### 3.2 Requisitos Não Funcionais
- **Desempenho**: O sistema deve processar transações em menos de 3 segundos.
- **Segurança**: Dados sensíveis devem ser criptografados e acessos devem ser controlados por permissões.
- **Usabilidade**: A interface deve ser intuitiva e fácil de usar, com suporte a múltiplos idiomas.

### 3.3 Requisitos de Interface Externa
- **Integração com ERP**: O sistema deve se integrar com o ERP da empresa para sincronização de dados de usuários e projetos.
- **Interface de E-mail**: Deve permitir o envio automático de e-mails de notificações e alertas.

### 3.4 Requisitos de Sistema
- **Hardware**: Servidor com pelo menos 32 GB de RAM e 8 núcleos de CPU.
- **Software**: Servidor web Apache, banco de dados MySQL, PHP 8.2+.
