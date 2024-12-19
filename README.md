## Sistema de Ponto Eletrônico

Este é um sistema de ponto eletrônico desenvolvido em PHP 7.4, seguindo o padrão de arquitetura MVC (Model-View-Controller). O projeto utiliza Docker para gerenciar o ambiente de desenvolvimento, com MySQL como banco de dados e suporte para funcionalidades como login de usuários e geração de relatórios de ponto.

---

### **Recursos Principais**
- **Login Seguro**: Sistema de autenticação com controle de acesso.
- **Registro de Ponto**: Registre entradas e saídas diárias de funcionários.
- **Geração de Relatórios**: Criação de relatórios personalizados para controle e análise de jornada de trabalho.
- **Arquitetura MVC**: Código organizado para facilitar a manutenção e extensibilidade.
- **Ambiente Dockerizado**: Configuração pronta para desenvolvimento com Docker.

---

### **Pré-requisitos**
Certifique-se de ter os seguintes softwares instalados em sua máquina:
- [Docker](https://www.docker.com/)

---

### **Configuração do Ambiente**
1. **Clone o Repositório**:
   ```bash
   git clone https://github.com/seu-usuario/ControleDePonto.git
   cd ControleDePonto
   ```

2. **Inicie os Contêineres com Docker Compose**:
   ```bash
   docker-compose up -d
   ```

3. **Acesse o Sistema**:
   Após iniciar os contêineres, o sistema estará disponível no navegador em:
   ```
   http://localhost:8000
   ```

### **Funcionalidades Futuras**
- Exportação de relatórios em formato PDF e Excel.
- Integração com APIs de folha de pagamento.
- Dashboard para visualização gráfica de horas trabalhadas.

---


