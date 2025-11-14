# 🏥 Oftalmo da Paulista - Portal

## 📁 Repositório de Temas - Área do Profissional e Área do Paciente

Este repositório armazena os temas utilizados nas duas áreas do portal:

- **Área do Profissional**
- **Área do Paciente**

Cada área possui seu próprio ambiente WordPress no servidor, com
diretórios de temas separados.

------------------------------------------------------------------------

## 🚀 Deploy (Envio de Arquivos)

O envio de arquivos para o servidor deve ser realizado através do plugin
do **VS Code**, utilizando a configuração presente na pasta `.vscode/sftp.json`.

Cada área tem o seu `.vscode/sftp.json`.

Antes de realizar o deploy, verifique:

- ✔️ O arquivo **`sftp.json`** (ou equivalente) está configurado
    corretamente.
- ✔️ Credenciais e host atualizados.
- ✔️ Caminhos de destino corretos para cada área.
- ✔️ Se o deploy será feito somente no tema correto

------------------------------------------------------------------------

## 📂 Caminhos dos Temas no Servidor

### **Área do Profissional**

    /home/storage/c/9b/89/oftalmodapaulist2/public_html/profissional/wp-content/themes/prof-oftalmo

### **Área do Paciente**

    /home/storage/c/9b/89/oftalmodapaulist2/public_html/paciente/wp-content/themes/prof-oftalmo

------------------------------------------------------------------------
