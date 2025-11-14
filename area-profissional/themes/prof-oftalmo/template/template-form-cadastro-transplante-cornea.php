<?php
/*
    Template Name: Formulário de Cadastro – Transplante de Córnea

*/

get_header(); 

$estado = array(
    'AC'=>'Acre',
    'AL'=>'Alagoas',
    'AP'=>'Amapá',
    'AM'=>'Amazonas',
    'BA'=>'Bahia',
    'CE'=>'Ceará',
    'DF'=>'Distrito Federal',
    'ES'=>'Espírito Santo',
    'GO'=>'Goiás',
    'MA'=>'Maranhão',
    'MT'=>'Mato Grosso',
    'MS'=>'Mato Grosso do Sul',
    'MG'=>'Minas Gerais',
    'PA'=>'Pará',
    'PB'=>'Paraíba',
    'PR'=>'Paraná',
    'PE'=>'Pernambuco',
    'PI'=>'Piauí',
    'RJ'=>'Rio de Janeiro',
    'RN'=>'Rio Grande do Norte',
    'RS'=>'Rio Grande do Sul',
    'RO'=>'Rondônia',
    'RR'=>'Roraima',
    'SC'=>'Santa Catarina',
    'SP'=>'São Paulo',
    'SE'=>'Sergipe',
    'TO'=>'Tocantins'
);

if(isset($_GET['cpf'])) {

?>

<section class="py-5">

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Atenção! Preencha corretamente todos os campo do formulário
        <button type="button" class="btn-close btn" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <form
    class="form_transplante"
    data-action-caminho="<?= get_template_directory_uri(); ?>"
    data-action="transplante/inserir" method="POST"
    enctype="multipart/form-data">
    
        <div class="row gy-4">

            <div class="col-12">
                <div class="bg-primary-subtle p-1 ps-3 rounded-1 border-bottom border-primary">
                    <p class="text-primary">Dados do paciente</p>
                </div>
            </div>

            <div class="col-12">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" iid="nome" name="nome" placeholder="nome">
                            <label for="nome"> Nome <span class="text-danger small" id="aviso_label_nome"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control cpf_mask" id="cpf" name="cpf" placeholder="cpf" readonly value="<?= $_GET['cpf']; ?>">
                            <label for="cpf"> CPF <span class="text-danger small" id="aviso_label_cpf"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="dt_nasc" name="dt_nasc" placeholder="dt_nasc">
                            <label for="dt_nasc"> Data de Nacimento <span class="text-danger small" id="aviso_label_dt_nasc"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-floating">
                            <select class="form-select" id="sexo" name="sexo" aria-label="sexo">
                                <option value="" selected disabled>-- Selecione --</option>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminina</option>
                            </select>
                            <label for="sexo">Sexo<span class="text-danger small" id="aviso_label_sexo"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-floating">
                            <select class="form-select" id="cor" name="cor" aria-label="cor">
                                <option value="" selected disabled>-- Selecione --</option>
                                <option value="branco">Branco</option>
                                <option value="negro">Negro</option>
                                <option value="pardo">Pardo</option>
                            </select>
                            <label for="cor">Cor<span class="text-danger small" id="aviso_label_cor"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nome_mae" name="nome_mae" placeholder="nome_mae">
                            <label for="nome_mae"> Nome da mãe <span class="text-danger small" id="aviso_label_nome_mae"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="cartao_sus" name="cartao_sus" placeholder="cartao_sus">
                            <label for="cartao_sus"> Cartão do SUS <span class="text-danger small" id="aviso_label_cartao_sus"></span> </label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12">
                <div class="bg-primary-subtle p-1 ps-3 rounded-1 border-bottom border-primary">
                    <p class="text-primary">Dados residências</p>
                </div>
            </div>

            <div class="col-12">
                <div class="row">

                    <div class="col-12">
                        <div class="col-lg-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control cep_mask cep_mask_res" id="cep" name="cep" placeholder="cep">
                                <label for="cep"> Cep <span class="text-danger small" id="aviso_label_cep"></span> </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control preencher_auto_rua_residencial" id="logradouro" name="logradouro" placeholder="logradouro">
                            <label for="logradouro"> Logradouro <span class="text-danger small" id="aviso_label_logradouro"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control preencher_auto_numero_residencial" id="numero" name="numero" placeholder="numero">
                            <label for="numero"> Número <span class="text-danger small" id="aviso_label_numero"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="complemento">
                            <label for="complemento"> Complemento <span class="text-danger small" id="aviso_label_complemento"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control preencher_auto_cidade_residencial" id="cidade" name="cidade" placeholder="cidade">
                            <label for="cidade"> Cidade <span class="text-danger small" id="aviso_label_cidade"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-floating">
                            <select class="form-select preencher_auto_estado_residencial" id="estado" name="estado" aria-label="estado">
                                <option selected disabled>-- Selecione --</option>
                                <?php foreach ($estado as $abrev => $nome) {
                                    echo '<option value="'.$abrev.'"> '.$nome.' </option>';
                                } ?>
                            </select>
                            <label for="estado">Estado<span class="text-danger small" id="aviso_label_estado"></span> </label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12">
                <div class="bg-primary-subtle p-1 ps-3 rounded-1 border-bottom border-primary">
                    <p class="text-primary">Dados de contato</p>
                </div>
            </div>

            <div class="col-12">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control tel_mask" id="tel_1" name="tel_1" placeholder="tel_1">
                            <label for="tel_1"> Telefone 1 <span class="text-danger small">*</span> <span class="text-danger small" id="aviso_label_tel_1"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control tel_mask" id="tel_2" name="tel_2" placeholder="tel_2">
                            <label for="tel_2"> Telefone 2 <span class="text-danger small" id="aviso_label_tel_2"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control tel_mask" id="tel_3" name="tel_3" placeholder="tel_3">
                            <label for="tel_3"> Telefone 3 <span class="text-danger small" id="aviso_label_tel_3"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control tel_mask" id="celular" name="celular" placeholder="celular">
                            <label for="celular"> Celular <span class="text-danger small" id="aviso_label_celular"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="email">
                            <label for="email"> Email <span class="text-danger small" id="aviso_label_email"></span> </label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12">
                <div class="bg-primary-subtle p-1 ps-3 rounded-1 border-bottom border-primary">
                    <p class="text-primary">Questionário</p>
                </div>
            </div>

            <div class="col-12">
                <div class="row">

                    <div class="col-lg-2">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="olho" name="olho" aria-label="olho">
                                <option value="" selected disabled>-- Selecione --</option>
                                <option value="direito">Direito</option>
                                <option value="esquerdo">Esquerdo</option>
                            </select>
                            <label for="olho">Olho <span class="text-danger small" id="aviso_label_olho"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="paciente" name="paciente" aria-label="paciente">
                                <option value="" selected disabled>-- Selecione --</option>
                                <option value="Sim">Sim</option>
                                <option value="não">Não</option>
                            </select>
                            <label for="paciente">Já é paciente do Hospital São Paulo? <span class="text-danger small" id="aviso_label_paciente"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="exames" name="exames" aria-label="exames">
                                <option value="" selected disabled>-- Selecione --</option>
                                <option value="Sim">Sim</option>
                                <option value="não">Não</option>
                            </select>
                            <label for="exames">Tem em mãos os exames realizados na avaliação? <span class="text-danger small" id="aviso_label_exames"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="hospital" name="hospital" placeholder="hospital">
                            <label for="hospital"> Em qual hospital você faz o tratamento? <span class="text-danger small" id="aviso_label_hospital"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="avaliacao" name="avaliacao" placeholder="avaliacao">
                            <label for="avaliacao"> Última avaliação <span class="text-danger small" id="aviso_label_avaliacao"></span> </label>
                        </div>
                    </div>
                                        
                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="onde_inscrito" name="onde_inscrito" placeholder="onde_inscrito">
                            <label for="onde_inscrito"> Onde você está inscrito? <span class="text-danger small" id="aviso_label_onde_inscrito"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="tempo_inscrito" name="tempo_inscrito" placeholder="tempo_inscrito">
                            <label for="tempo_inscrito"> Tempo de inscrição na fila <span class="text-danger small" id="aviso_label_tempo_inscrito"></span> </label>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="mb-2"> Tem em mãos os exames realizados na avaliação? </p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="Sim" name="exames_realizados" id="exames_realizados1">
                                <label class="form-check-label" for="exames_realizados1"> Sim </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="Não" name="exames_realizados" id="exames_realizados2" checked>
                                <label class="form-check-label" for="exames_realizados2"> Não </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="mb-2"> Já tem avaliação clínica para cirurgia? </p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="Sim" name="avaliacao_clinica" id="avaliacao1">
                                <label class="form-check-label" for="avaliacao1"> Sim </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="Não" name="avaliacao_clinica" id="avaliacao2" checked>
                                <label class="form-check-label" for="avaliacao2"> Não </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="mb-2"> Já está inscrito em alguma fila de espera para o transplante? </p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="Sim" name="inscrito_fila" id="fila1">
                                <label class="form-check-label" for="fila1"> Sim </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="Não" name="inscrito_fila" id="fila2" checked>
                                <label class="form-check-label" for="fila2"> Não </label>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="mb-2"> É uma urgência? </p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="Sim" name="urgencia" id="urgencia1">
                                <label class="form-check-label" for="urgencia1"> Sim </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="Não" name="urgencia" id="urgencia2" checked>
                                <label class="form-check-label" for="urgencia2"> Não </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="mb-2"> A doença é nos dois olhos? </p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="Sim" name="doenca" id="doenca1">
                                <label class="form-check-label" for="doenca1"> Sim </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="Não" name="doenca" id="doenca2" checked>
                                <label class="form-check-label" for="doenca2"> Não </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <p class="mb-2"> Tem idade inferior a 7 anos e doença na córnea nos dois olhos? </p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="Sim" name="idade_doenca" id="idade_doenca1">
                                <label class="form-check-label" for="idade_doenca1"> Sim </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="Não" name="idade_doenca" id="idade_doenca2" checked>
                                <label class="form-check-label" for="idade_doenca2"> Não </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12">
                <div class="bg-primary-subtle p-1 ps-3 rounded-1 border-bottom border-primary">
                    <p class="text-primary">Anexar arquivo</p>
                </div>
            </div>

            <div class="col-12">
                <div class="mb-3">
                    <label for="file" class="form-label">Se você tem algum relatório médico, anexe-o para que sua consulta seja mais rápida. <span class="text-danger small" id="aviso_label_file"></span> </label>
                    <input class="form-control form-control-sm" id="file" name="file" type="file">
                </div>
            </div>

            <div class="col-12">
                <div class="bg-primary-subtle p-1 ps-3 rounded-1 border-bottom border-primary">
                    <p class="text-primary">Observações</p>
                </div>
            </div>

            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Inclua informações adicionais que achar relevante" id="adicionais" style="height: 200px " name="adicionais"></textarea>
                    <label for="adicionais">Inclua informações adicionais que achar relevante <span class="text-danger small" id="aviso_label_adicionais"></span> </label>
                </div>
            </div>


            <div class="col-12">
                <script src="https://www.google.com/recaptcha/api.js"></script>
                <div>
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                    <div class="g-recaptcha" data-sitekey="6Ld9L34eAAAAAGLaHAEb4rWfUNOlz4R6kHbf9k9u" style="margin:10px 0px;"></div>
                </div>

                <div class="mt-4">
                    <input type="submit" value="Cadastrar" class="btn btn-primary py-2 bg-primary text-white">
                    <input type="reset" value="Limpar" class="btn btn-primary py-2 bg-primary text-white">
                </div>

            </div>

        </div>

    </form>
</section>

<?php

} else {

    echo '<section class="py-5"> <h1> Estamos em manutenção </h1> <p>Em breve retornaremos com essa página! </p> </section>';

}

get_footer();
?>
