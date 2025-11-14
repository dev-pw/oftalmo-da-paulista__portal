<?php
/*
    Template Name: Formulário Análise Curricular Prévia – Ano Opcional 2332 – R4 Subespecialidades

*/

get_header(); ?>

<section class="py-5">
    <form
    class="form-theme form_avaliacao"
    data-action-caminho="<?= get_template_directory_uri(); ?>"
    data-action="avaliacao/inserir" method="POST"
    enctype="multipart/form-data">
    
        <p class="fw-bold mb-5"><span class="obrigatorio">* Campos Obrigatórios</span></p>
        <div class="row gy-5">

            <div class="col-12">
                <label class="fw-bold mb-2 small">Nome completo <span class="text-secondary">*</span></label>
                <input type="text" class="form-control" name="nome">
            </div>

            <div class="col-lg-4">
                <label class="fw-bold mb-2 small">Endereço de E-mail <span class="text-secondary">*</span></label>
                <input name="email" type="email" class="form-control">
            </div>

            <div class="col-lg-4">
                <label class="fw-bold mb-2 small">Data de Nascimento <span class="text-secondary">*</span></label>
                <input type="date" id="idade" maxlength="10" class="form-control" name="idade">
            </div>

            <div class="col-lg-4">
                <label class="fw-bold mb-2 small">Naturalidade <span class="text-secondary">*</span></label>
                <input type="text" class="form-control" name="naturalidade">
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">1. A instituição que cursou residência é reconhecida como centro formador, assistencial e/ou de pesquisa científica? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="centro_formador" id="optionsRadios1" value="Sim">
                        <label class="form-check-label" for="optionsRadios1">  Sim </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="centro_formador" id="optionsRadios2" value="Não">
                        <label class="form-check-label" for="optionsRadios2"> Não </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small">Nome da Instituição <span class="text-secondary">*</span></label>
                        <input type="text" name="nome_instituicao" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">2. A instituição que cursou residência possui serviço de Oftalmologia próprio com atendimento pelo SUS? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="inst_possui_sus" id="inst_possui_sus1" value="Sim">
                        <label class="form-check-label" for="inst_possui_sus1">  Sim </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="inst_possui_sus" id="inst_possui_sus2" value="Não">
                        <label class="form-check-label" for="inst_possui_sus2">  Não </label>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">3. A instituição que cursou residência possui programa de Oftalmologia credenciado pela CNRM/MEC <strong>e</strong> pelo Conselho Brasileiro de Oftalmologia/AMB? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="inst_possui_oftalmo_cred" id="inst_possui_oftalmo_cred1" value="Sim">
                        <label class="form-check-label" for="inst_possui_oftalmo_cred1">  Sim </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="inst_possui_oftalmo_cred" id="inst_possui_oftalmo_cred2" value="Não">
                        <label class="form-check-label" for="inst_possui_oftalmo_cred2">  Não </label>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">4. A instituição que cursou residência oferece ensino de Oftalmologia nos três níveis de atenção à saúde? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="inst_oferece_ensino_oft" id="inst_oferece_ensino_oft1" value="Sim">
                        <label class="form-check-label" for="inst_oferece_ensino_oft1">  Sim </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="inst_oferece_ensino_oft" id="inst_oferece_ensino_oft2" value="Não">
                        <label class="form-check-label" for="inst_oferece_ensino_oft2">  Não </label>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">5. A instituição que cursou residência possui programa de Pós-Graduação strictu senso em Oftalmologia? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="inst_possui_prog_posgrad" id="inst_possui_prog_posgrad1" value="Sim">
                        <label class="form-check-label" for="inst_possui_prog_posgrad1">  Sim </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="inst_possui_prog_posgrad" id="inst_possui_prog_posgrad2" value="Não">
                        <label class="form-check-label" for="inst_possui_prog_posgrad2">  Não </label>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h3 class="fw-bold text-primary">RELACIONADAS AO CANDIDATO</h3>
                <div>
                    <label class="fw-bold mb-2 small">6. Produção científica durante a residência <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="prod_cient_durante_res" id="id15" value="2 ou mais publicações em revista indexada">
                        <label class="form-check-label" for="id15"> 2 ou mais publicações em revista indexada</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="prod_cient_durante_res" id="id16" value="1 publicação em revista indexada">
                        <label class="form-check-label" for="id16"> 1 publicação em revista indexada</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="prod_cient_durante_res" id="id17" value="Publicação em revista não indexada">
                        <label class="form-check-label" for="id17"> Publicação em revista não indexada</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="prod_cient_durante_res" id="id18" value="Não">
                        <label class="form-check-label" for="id18"> Não</label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small">Se sim, qual/quais? (Referência Vancouver) <span class="text-secondary">*</span></label>
                        <input type="text" name="prod_cient_durante_res_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">7. Atividades extracurriculares relacionadas ao ensino, assistência médica e extensão durante a residência <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ativ_extracurr_relac" id="id20" value="Sim">
                        <label class="form-check-label" for="id20"> Sim</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ativ_extracurr_relac" id="id21" value="Não">
                        <label class="form-check-label" for="id21"> Não</label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small">Se sim, quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="ativ_extracurr_relac_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">8. Participação em congressos e cursos de extensão durante a residência. Quais? <span class="text-secondary">*</span></label>
                    <input type="text" name="partic_cong_cursos_durante" class="form-control">
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">9. Apresentação de trabalho oral ou poster em Congresso <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="apresentacao_trab_em_cong" id="id24" value="Sim">
                        <label class="form-check-label" for="id24"> Sim</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="apresentacao_trab_em_cong" id="id25" value="Não">
                        <label class="form-check-label" for="id25"> Não</label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small">Se sim, quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="apresentacao_trab_em_cong_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">10. Prêmios e distinções acadêmicas durante a residência <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="premios_e_dist_durante" id="id27" value="Sim">
                        <label class="form-check-label" for="id27"> Sim</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="premios_e_dist_durante" id="id28" value="Não">
                        <label class="form-check-label" for="id28"> Não</label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small">Se sim, quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="premios_e_dist_durante_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">11. Atividades comunitárias em oftalmologia <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ativ_comunit_oft" id="id30" value="Sim">
                        <label class="form-check-label" for="id30"> Sim</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ativ_comunit_oft" id="id31" value="Não">
                        <label class="form-check-label" for="id31"> Não</label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small">Se sim, quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="ativ_comunit_oft_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">12. Estágios externos durante a residência médica <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="estagios_ext_durante" id="id33" value="Sim">
                        <label class="form-check-label" for="id33"> Sim</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="estagios_ext_durante" id="id34" value="Não">
                        <label class="form-check-label" for="id34"> Não</label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small">Se sim, quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="estagios_ext_durante_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">13. Lingua estrangeira? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ligua_estrangeira" id="id36" value="Inglês avançado">
                        <label class="form-check-label" for="id36"> Inglês avançado</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ligua_estrangeira" id="id37" value="Inglês intermediário">
                        <label class="form-check-label" for="id37"> Inglês intermediário</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ligua_estrangeira" id="id38" value="Ingles nível básico">
                        <label class="form-check-label" for="id38"> Ingles básico</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ligua_estrangeira" id="id40" value="Não">
                        <label class="form-check-label" for="id40"> Não</label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small">Se outras, cite quais e o nível de fluência: <span class="text-secondary">*</span></label>
                        <input type="text" name="ligua_estrangeira_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">14.	No edital, contam as vagas de residência separadas por área de concentração, sendo que o candidato será selecionado para 1 (uma) delas. Cite 3 (três) áreas de atuação que possui interesse em cursar, na ordem decrescente de preferência: <span class="text-secondary">*</span></label>
                    <input type="text" name="areas_interesse" class="form-control">
                </div>
            </div>

            <div class="col-12">
                <div class="alert alert-secondary">
                    Uma cópia de suas respostas, será enviada para o email cadastrado acima.
                </div>
                <script src="https://www.google.com/recaptcha/api.js"></script>
                <div>
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                    <div class="g-recaptcha" data-sitekey="6Ld9L34eAAAAAGLaHAEb4rWfUNOlz4R6kHbf9k9u" style="margin:10px 0px;"></div>
                </div>

                <div class="mt-4">
                    <input type="submit" value="Enviar formulário" class="btn btn-primary w-100 py-2 bg-primary text-white btn-block">
                </div>

            </div>

        </div>

    </form>
</section>

<?php

get_footer();
?>
