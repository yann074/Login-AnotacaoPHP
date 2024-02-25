Sistema de Login e Anotações em PHP
Este é um sistema de login básico desenvolvido em PHP que permite que os usuários façam login, acessem uma página de anotações e façam anotações que são armazenadas em arquivos de texto. O sistema foi desenvolvido para ser executado em um servidor local XAMPP e não requer um banco de dados.

Pré-requisitos
PHP instalado e configurado no seu servidor local (XAMPP recomendado)
Ambiente de desenvolvimento web (por exemplo, XAMPP, WAMP, MAMP)
Navegador web moderno
Instalação e Uso
Clone ou baixe este repositório para o diretório htdocs do seu servidor XAMPP.
Certifique-se de que o Apache e o MySQL estejam em execução no seu servidor XAMPP.
Abra o navegador web e navegue até http://localhost/seu-diretorio para acessar o sistema.
Você será direcionado para a página de login. Use as credenciais de administrador padrão:
Usuário: admin
Senha: admin
Após fazer login, você será redirecionado para a página de anotações. Aqui você pode visualizar, adicionar e excluir anotações.
Estrutura do Diretório
index.php: Página de login. Verifica as credenciais de login e redireciona para a página de anotações.
notes.php: Página de anotações. Exibe as anotações existentes, permite adicionar novas anotações e excluir anotações existentes.
auth.php: Arquivo de autenticação PHP. Lida com a verificação das credenciais de login.
logout.php: Arquivo PHP para fazer logout do sistema.
data/: Diretório para armazenar arquivos de dados de login e anotações.
users.txt: Arquivo de texto contendo informações de login (usuário e senha) criptografadas.
notes.txt: Arquivo de texto contendo anotações do usuário.
Observações
Este sistema foi desenvolvido apenas para fins educacionais e não deve ser usado em produção sem adequada segurança e gerenciamento de dados.
Como este sistema não utiliza um banco de dados, ele não é escalável e pode não ser adequado para casos de uso de grande escala.
A segurança é limitada a técnicas básicas de criptografia de senha. Para uma segurança mais robusta, considere a implementação de técnicas de autenticação mais avançadas, como hashing de senha e autenticação de dois fatores.
