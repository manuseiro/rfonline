# RF Online WordPress Theme

Tema WordPress desenvolvido para portais de servidores privados de RF Online.

O tema fornece páginas prontas para:

- notícias do servidor
- download do launcher
- guias do jogo
- página das raças
- página das classes
- status do servidor
- estatísticas

---

# 📸 Screenshot

![Theme Screenshot](screenshot.png)

---

# 🚀 Funcionalidades

- Layout responsivo
- Suporte a múltiplos idiomas
- Sistema de atualização automática via GitHub
- Páginas customizadas para conteúdo do servidor
- Navegação compatível com Bootstrap
- Estrutura de páginas para classes e raças do jogo

---

# 📂 Estrutura do Projeto

rfonline-main
│
├── css
│ ├── bootstrap.min.css
│ ├── animate.min.css
│ └── languages.min.css
│
├── js
│ ├── plugins.js
│ ├── wow.min.js
│ └── languages.min.js
│
├── images
│ ├── logos
│ ├── races
│ ├── classes
│ └── backgrounds
│
├── languages
│ ├── rfonline.pot
│ ├── pt_BR.po
│ └── pt_BR.mo
│
├── includes
│ └── wp_bootstrap_navwalker.php
│
├── update
│ └── Plugin Update Checker
│
├── functions.php
├── header.php
├── footer.php
├── style.css
└── theme.json
---

# 📄 Páginas Personalizadas

O tema inclui várias páginas específicas para servidores RF Online:

### Informações do servidor

page-server.php
page-statistics.php

## Download

page-download.php
page-download-thank-you.php

### Guias

page-guide.php
page-faq.php
page-rules.php

### Raças

page-race.php
page-race-acc.php
page-race-bell.php
page-race-cora.php

### Classes

page-classe-acc-ranger.php
page-classe-acc-specialist.php
page-classe-acc-warrior.php

page-classe-bell-mago.php
page-classe-bell-ranger.php
page-classe-bell-specialist.php
page-classe-bell-warrior.php

page-classe-cora-mage.php
page-classe-cora-ranger.php
page-classe-cora-specialist.php
page-classe-cora-warrior.php

---

# ⚙️ Requisitos

- WordPress 5.8+
- PHP 7.4+
- Servidor Web (Apache ou Nginx)

---

# 📦 Instalação

1. Baixe o tema:

git clone https://github.com/manuseiro/rfonline.git

2. Copie para a pasta de temas do WordPress:

wp-content/themes/

3. Ative o tema no painel:

Aparência → Temas


---

# 🌍 Idiomas

O tema possui suporte a internacionalização.

Arquivos localizados em:

/languages


Idiomas atuais:

- Português (Brasil)
- Inglês

---

# 🔄 Atualizações via GitHub

O tema utiliza a biblioteca **Plugin Update Checker** para permitir atualização automática diretamente do GitHub.

Biblioteca localizada em:

/update

---

# 🛠 Personalização

Você pode customizar:

- cores
- imagens
- páginas de classe
- páginas de raça
- downloads do launcher
- links de redes sociais

Principais arquivos para customização:
style.css
header.php
footer.php
functions.php


---

# 📊 Integração com servidor

O tema pode ser integrado com o banco de dados do jogo para mostrar:

- players online
- ranking
- guild ranking
- status do Chip War

Isso pode ser feito através de:

- API REST
- conexão direta com o banco GameDB
- backend intermediário

---

# 📜 Licença

Projeto open-source para uso em servidores privados de RF Online.

---

# 👨‍💻 Autor

Manuel Ribeiro

