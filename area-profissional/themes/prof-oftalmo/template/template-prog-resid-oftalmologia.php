<?php
/* 
    Template Name: Programa Residência Médica Em Oftalmologia 2024 – Análise Curricular Prévia

*/

get_header(); ?>

<section class="py-5">
    <form
    class="form-theme form_prog_oftalmo"
    data-action-caminho="<?= get_template_directory_uri(); ?>"
    data-action="residencia-medica/inserir" method="POST"
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
                    <label class="fw-bold mb-2 small">1.  A instituição de origem é reconhecida como centro formador, assistencial e/ ou pesquisa científica? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="inst_origem" id="optionsRadios1" value="Sim">
                        <label class="form-check-label" for="optionsRadios1">  Sim </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="inst_origem" id="optionsRadios2" value="Não">
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
                    <label class="fw-bold mb-2 small">2. A instituição de origem possui hospital universitário próprio? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="inst_possui_hosp" id="inst_possui_hosp1" value="Sim">
                        <label class="form-check-label" for="inst_possui_hosp1">  Sim </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="inst_possui_hosp" id="inst_possui_hosp2" value="Não">
                        <label class="form-check-label" for="inst_possui_hosp2">  Não </label>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">3. Desempenho durante a graduação (Média final do curso ou coeficiente de rendimento) <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="desemp_graduacao" id="desemp_graduacao1" value="9 - 10">
                        <label class="form-check-label" for="desemp_graduacao1"> 9 - 10 </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="desemp_graduacao" id="desemp_graduacao2" value="8 - 9">
                        <label class="form-check-label" for="desemp_graduacao2"> 8 - 9 </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="desemp_graduacao" id="desemp_graduacao3" value="7 - 8">
                        <label class="form-check-label" for="desemp_graduacao3"> 7 - 8 </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="desemp_graduacao" id="desemp_graduacao4" value="Dependência com média maior ou igual a 7">
                        <label class="form-check-label" for="desemp_graduacao4"> Dependência com média maior ou igual a 7 </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="desemp_graduacao" id="desemp_graduacao5" value="Média 5 - 7">
                        <label class="form-check-label" for="desemp_graduacao5"> Média 5 - 7 </label>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">3.1 Anotação negativa em responsabilidade ética? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="anotacao_neg" id="anotacao_neg1" value="Sim">
                        <label class="form-check-label" for="anotacao_neg1">  Sim </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="anotacao_neg" id="anotacao_neg2" value="Não">
                        <label class="form-check-label" for="anotacao_neg2">  Não </label>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">4. Duração do internato <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="durac_internato" id="durac_internato1" value="Mais de 2 anos">
                        <label class="form-check-label" for="durac_internato1"> Mais de 2 anos </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="durac_internato" id="durac_internato2" value="2 anos">
                        <label class="form-check-label" for="durac_internato2"> 2 anos </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="durac_internato" id="durac_internato3" value="Menos de 2 anos">
                        <label class="form-check-label" for="durac_internato3"> Menos de 2 anos </label>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">5. Atividades de representação estudantil - Diretoria (Liga acadêmica / Centro acadêmico)? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ativ_estudantil" id="ativ_estudantil1" value="Sim">
                        <label class="form-check-label" for="ativ_estudantil1">  Sim </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ativ_estudantil" id="ativ_estudantil2" value="Não">
                        <label class="form-check-label" for="ativ_estudantil2">  Não </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small"> Se sim, qual/quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="ativ_estudantil_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">6. Iniciação científica <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="init_cientifica" id="id15" value="Sim, com bolsa">
                        <label class="form-check-label" for="id15"> Sim, com bolsa </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="init_cientifica" id="id16" value="Sim, sem bolsa">
                        <label class="form-check-label" for="id16"> Sim, sem bolsa </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="init_cientifica" id="id17" value="Não">
                        <label class="form-check-label" for="id17"> Não </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small">Se sim, qual/quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="init_cientifica_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">7. Publicação <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="publicacao" id="id20" value="2 ou mais publicações em revista indexada">
                        <label class="form-check-label" for="id20"> 2 ou mais publicações em revista indexada </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="publicacao" id="id21" value="1 publicação em revista indexada">
                        <label class="form-check-label" for="id21"> 1 publicação em revista indexada </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="publicacao" id="id22" value="Publicações em revista não indexada">
                        <label class="form-check-label" for="id22"> Publicações em revista não indexada </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="publicacao" id="id23" value="Não">
                        <label class="form-check-label" for="id23"> Não </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small"> Se sim, qual/quais (Referência Vancouver)? <span class="text-secondary">*</span></label>
                        <input type="text" name="publicacao_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">8. Capítulo de livro? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="cap_livro" id="id24" value="Sim">
                        <label class="form-check-label" for="id24"> Sim </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="cap_livro" id="id25" value="Não">
                        <label class="form-check-label" for="id25"> Não </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small">Se sim, qual/quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="cap_livro_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">9. Apresentação trabalho oral (paper)? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="apresentacao_trab_oral" id="id26" value="Congresso fora de País">
                        <label class="form-check-label" for="id26"> Congresso fora de País </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="apresentacao_trab_oral" id="id27" value="Congresso Nacional">
                        <label class="form-check-label" for="id27"> Congresso Nacional </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="apresentacao_trab_oral" id="id28" value="Congresso Regional">
                        <label class="form-check-label" for="id28"> Congresso Regional </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small">Qual/quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="apresentacao_trab_oral_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">10. Apresentação trabalho poster? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="apresentacao_trab_em_poster" id="id29" value="Congresso fora de País">
                        <label class="form-check-label" for="id29"> Congresso fora de País </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="apresentacao_trab_em_poster" id="id30" value="Congresso Nacional">
                        <label class="form-check-label" for="id30"> Congresso Nacional </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="apresentacao_trab_em_poster" id="id31" value="Congresso Regional">
                        <label class="form-check-label" for="id31"> Congresso Regional </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small">Qual/quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="apresentacao_trab_em_poster_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">11. Monitorias? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="monitorias" id="id32" value="1 ano ou mais">
                        <label class="form-check-label" for="id32"> 1 ano ou mais </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="monitorias" id="id33" value="6 meses - 1 ano">
                        <label class="form-check-label" for="id33"> 6 meses - 1 ano </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small">Se sim, quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="monitorias_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">12. Liga acadêmica? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="liga_academica" id="id34" value="Sim">
                        <label class="form-check-label" for="id34"> Sim</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="liga_academica" id="id35" value="Não">
                        <label class="form-check-label" for="id35"> Não</label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small">Se sim, quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="liga_academica_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">13. Atividades extracurriculares associadas a ensino, assistência médica e estágios supervisionados? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ativ_extra" id="id36" value="Sim">
                        <label class="form-check-label" for="id36"> Sim </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ativ_extra" id="id37" value="Não">
                        <label class="form-check-label" for="id37"> Não </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small"> Se sim qual/quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="ativ_extra_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">14. Participação em congressos? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="partic_congressos" id="id38" value="Congresso Internacional">
                        <label class="form-check-label" for="id38"> Congresso Internacional </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="partic_congressos" id="id39" value="Congresso Nacional">
                        <label class="form-check-label" for="id39"> Congresso Nacional </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="partic_congressos" id="id40" value="Congresso Regional">
                        <label class="form-check-label" for="id40"> Congresso Regional </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="partic_congressos" id="id41" value="Outros">
                        <label class="form-check-label" for="id41"> Outros </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small"> Cite os 2 mais importantes <span class="text-secondary">*</span></label>
                        <input type="text" name="partic_congressos_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">15. Participação em cursos de extensão? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="part_curso_ext" id="id42" value="Sim">
                        <label class="form-check-label" for="id42"> Sim </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="part_curso_ext" id="id43" value="Não">
                        <label class="form-check-label" for="id43"> Não </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small"> Se sim qual/quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="part_curso_ext_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">16. Prêmios e distinções acadêmicas? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="premios_dist_acad" id="id44" value="Sim">
                        <label class="form-check-label" for="id44"> Sim </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="premios_dist_acad" id="id45" value="Não">
                        <label class="form-check-label" for="id45"> Não </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small"> Se sim qual/quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="premios_dist_acad_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">17. Atividades comunitárias, culturais, esportivas? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ativ_comu_cult_espor" id="id46" value="Mutirões, campanhas, aulas para comunidade">
                        <label class="form-check-label" for="id46"> Mutirões, campanhas, aulas para comunidade </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ativ_comu_cult_espor" id="id47" value="Esportivas e culturais">
                        <label class="form-check-label" for="id47"> Esportivas e culturais </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ativ_comu_cult_espor" id="id48" value="Não">
                        <label class="form-check-label" for="id48"> Não </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small"> Se sim qual/quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="ativ_comu_cult_espor_quais" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">18. Lingua estrangeira? <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ligua_estrangeira" id="id49" value="Inglês avançado">
                        <label class="form-check-label" for="id49"> Inglês avançado </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ligua_estrangeira" id="id50" value="Inglês intermediário">
                        <label class="form-check-label" for="id50"> Inglês intermediário </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ligua_estrangeira" id="id51" value="Ingles nível básico">
                        <label class="form-check-label" for="id51"> Ingles nível básico </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ligua_estrangeira" id="id52" value="Outra língua (citar nível)">
                        <label class="form-check-label" for="id52"> Outra língua (citar nível) </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="ligua_estrangeira" id="id37" value="Não">
                        <label class="form-check-label" for="id37"> Não </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small"> Se sim qual/quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="ligua_estrangeira_quais" class="form-control">
                    </div>
                </div>
            </div>

            
            <div class="col-12">
                <div>
                    <label class="fw-bold mb-2 small">19. Desempenho em concurso público <span class="text-secondary">*</span></label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="desemp_consurso" id="id53" value="Sim">
                        <label class="form-check-label" for="id53"> Sim </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="desemp_consurso" id="id54" value="Não">
                        <label class="form-check-label" for="id54"> Não </label>
                    </div>
                    <div class="mt-3">
                        <label class="fw-bold mb-2 small"> Se sim qual/quais? <span class="text-secondary">*</span></label>
                        <input type="text" name="desemp_consurso_quais" class="form-control">
                    </div>
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
