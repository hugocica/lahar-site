<!DOCTYPE html>
<!--  Last Published: Fri Sep 28 2018 13:19:55 GMT+0000 (UTC)  -->
<html data-wf-page="5b61fa57f40d766db0e53b3a" data-wf-site="5b61fa57f40d761dfde53b39">
<head>
    <title>Assine um de nossos planos e comece agora a mesmo a utilizar a LAHAR.</title>
    <meta content="Automação de Marketing, Landing Pages, E-mail Marketing, Ferramentas para mídias sociais e muito mais." name="description">
    <meta content="Assine um de nossos planos e comece agora a mesmo a utilizar a LAHAR." property="og:title">
    <meta content="Automação de Marketing, Landing Pages, E-mail Marketing, Ferramentas para mídias sociais e muito mais." property="og:description">

    <?php include_once './includes/header.php'; ?>

</head>

<body>

    <div class="section-hero assinar">
        <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar alternativo w-nav">
            <div class="container-navbar noheader w-container">
                <a href="<?php echo base_url; ?>">
                    <img src="assets/images/logo.png" width="143" class="logo-white">
                </a>
                <div class="txt-block-top"><span class="yellow">Dúvidas?</span> Ligue para nossa Central de Vendas: <a href="tel:(14)3010-3330" class="link-yellow">(14) 3010-3330</a> ou <a href="tel:(11)3230-1825" class="link-yellow">(11) 3230-1825</a>
                </div>
                <div class="w-hidden-medium w-hidden-small w-hidden-tiny w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
            <div class="line-nav"></div>
        </div>
        <div class="container-center w-container">
            <div class="spacer _50"></div>
            <h1 class="h1" data-ix="show-on-scroll">Comece agora mesmo a utilizar o nosso software!</h1>
            <div class="spacer _30"></div>
            <div class="div-passos w-clearfix" data-ix="show-on-scroll">
                <div class="steps w-clearfix">
                    <div class="div-circle y"></div>
                    <a href="#" class="step active">1</a>
                    <div class="div-circle y"></div>
                    <div class="txtblock _15">SEUS DADOS</div>
                </div>
                <div class="steps w-clearfix">
                    <div class="div-circle w"></div>
                    <a href="#" class="step">2</a>
                    <div class="div-circle w"></div>
                    <div class="txtblock _15">SEU PLANO</div>
                </div>
                <div class="steps w-clearfix">
                    <div class="div-circle w"></div>
                    <a href="#" class="step">3</a>
                    <div class="div-circle w"></div>
                    <div class="txtblock _15">PAGAMENTO</div>
                </div>
                <div class="steps w-clearfix">
                    <div class="div-circle w"></div>
                    <a href="#" class="step">4</a>
                    <div class="div-circle w"></div>
                    <div class="txtblock _15">CONFIRMAÇÃO</div>
                </div>
            </div>
        </div>
    </div>
    <div id="formulario" class="div-padding-bottom">
        <div class="container-center w-container">
            <div class="spacer _50 w-hidden-main w-hidden-medium w-hidden-small"></div>
            <h1 class="h1-medium" data-ix="show-on-scroll">Responsável pelo Contrato:</h1>
            <div>
                <div class="div-width-60">
                    <div class="w-form">
                        <form id="email-form" name="email-form" data-name="Email Form" data-ix="show-on-scroll">
                            <div class="w-row">
                                <div class="w-col w-col-6">
                                    <a href="#" class="button-yellow w-button active tipo-cadastro" data-tipo="pf">PESSOA FÍSICA</a>
                                    <div class="spacer w-hidden-main w-hidden-medium"></div>
                                </div>
                                <div class="w-col w-col-6">
                                    <a href="#" class="button-yellow w-button tipo-cadastro" data-tipo="pj">PESSOA JURÍDICA</a>
                                </div>
                            </div>
                            <div class="spacer"></div>
                            <div id="dados-pessoais-wrapper">
                                <h2 class="h2 left tipo-dados-label" data-ix="show-on-scroll">Dados Pessoais</h2>
                                <div class="w-row">
                                    <div class="column-zero-pad w-col w-col-6">
                                        <input type="text" class="field w-input" maxlength="256" name="CPF" data-name="CPF" placeholder="CPF*" id="CPF" required="">
                                    </div>
                                    <div class="column-zero-pad w-col w-col-6">
                                        <input type="text" class="field w-input" maxlength="256" name="Nome" data-name="Nome" placeholder="Nome Completo*" id="nome" required="">
                                    </div>
                                </div>
                            </div>
                            <div id="dados-empresariais-wrapper">
                                <h2 class="h2 left tipo-dados-label" data-ix="show-on-scroll">Dados Empresariais</h2>
                                <div class="w-row">
                                    <div class="column-zero-pad w-col w-col-6">
                                        <input type="text" class="field w-input" maxlength="256" name="CNPJ" data-name="CNPJ" placeholder="CNPJ*" id="CNPJ" required="">
                                    </div>
                                    <div class="column-zero-pad w-col w-col-6">
                                        <input type="text" class="field w-input" maxlength="256" name="razao_social" data-name="razao_social" placeholder="Razão Social*" id="razao_social" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="spacer"></div>
                            <h2 class="h2 left" data-ix="show-on-scroll">Endereço</h2>
                            <div class="w-row">
                                <div class="column-zero-pad w-col w-col-6">
                                    <input type="text" class="field w-input" maxlength="256" name="CEP" data-name="CEP" placeholder="CEP*" id="CEP" required="">
                                    <input type="text" class="field w-input" maxlength="256" name="Numero-complemento" data-name="Numero-complemento" placeholder="Número / complemento*" id="Numero-complemento" required="">
                                    <input type="text" class="field w-input" maxlength="256" name="Cidade" data-name="Cidade" placeholder="Cidade*" id="Cidade" required="">
                                    <input type="text" class="field w-input" maxlength="256" name="Telefone" data-name="Telefone" placeholder="Telefone*" id="Telefone" required="">
                                </div>
                                <div class="column-zero-pad w-col w-col-6">
                                    <input type="text" class="field w-input" maxlength="256" name="Endere-o" data-name="Endereço" placeholder="Endereço*" id="Endere-o" required="">
                                    <input type="text" class="field w-input" maxlength="256" name="Bairro" data-name="Bairro" placeholder="Bairro*" id="Bairro" required="">
                                    <select id="Estado" name="Estado" data-name="Estado" required="" class="select w-select">
                                        <option value="">Estado*</option>
                                        <option value="First">First Choice</option>
                                        <option value="Second">Second Choice</option>
                                        <option value="Third">Third Choice</option>
                                    </select>
                                    <input type="text" class="field w-input" maxlength="256" name="Contato-financeiro" data-name="Contato-financeiro" placeholder="Contato Financeiro*" id="Contato-financeiro-2" required="">
                                </div>
                            </div>
                            <div class="spacer"></div>
                            <h2 class="h2 left" data-ix="show-on-scroll">Dados conta</h2>
                            <div class="w-row">
                                <div class="column-zero-pad w-col w-col-6">
                                    <input type="email" class="field w-input" maxlength="256" name="E-mail" data-name="E-mail" placeholder="E-mail*" id="E-mail" required="">
                                    <input type="text" class="field w-input" maxlength="256" name="Website" data-name="Website" placeholder="Website*" id="Website" required="">
                                </div>
                                <div class="column-zero-pad w-col w-col-6">
                                    <input type="text" class="field w-input" maxlength="256" name="Nome-empresa" data-name="Nome-empresa" placeholder="Nome empresa*" id="Nome-empresa" required="">
                                    <select id="Objetivo" name="Objetivo" data-name="Objetivo" required="" class="select w-select">
                                        <option value="">Qual o seu objetivo com a LAHAR?*</option>
                                        <option value="Possuo um negócio e desejo ter resultados com a internet">Possuo um negócio e desejo ter resultados com a internet</option>
                                        <option value="Já utilizei/utilizo outra ferramenta e desejo saber mais sobre a LAHAR">Já utilizei/utilizo outra ferramenta e desejo saber mais sobre a LAHAR</option>
                                        <option value="Sou uma agência e desejo entender como utilizar para meus clientes">Sou uma agência e desejo entender como utilizar para meus clientes</option>
                                        <option value="Sou estudante e interessado em conhecer esse tipo de software">Sou estudante e interessado em conhecer esse tipo de software</option>
                                    </select>
                                </div>
                            </div>
                            <div class="spacer"></div>
                            <a href="#" class="button-yellow w-button">CONTINUAR</a>
                            <div class="spacer"></div>
                        </form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-center w-container" data-ix="show-on-scroll" style="display: none">
            <h1 class="h1-medium" data-ix="show-on-scroll">Seu Plano</h1>
            <h2 class="h2 small _20">Escolha um de nosso planos e a forma de pagamento, sendo mensal ou anual:<br></h2>
            <div class="spacer _50"></div>
            <div class="txtblock-medium uppercase" data-ix="show-on-scroll">NÚMERO DE CONTATOS</div>
            <a href="#" class="links-contatos active" data-value="5" data-ix="show-on-scroll">5 MIL</a>
            <a href="#" class="links-contatos" data-value="10" data-ix="show-on-scroll">10 MIL</a>
            <a href="#" class="links-contatos" data-value="25" data-ix="show-on-scroll">25 MIL</a>
            <a href="#" class="links-contatos" data-value="50" data-ix="show-on-scroll">50 MIL</a>
            <a href="#" class="links-contatos" data-value="75" data-ix="show-on-scroll">75 MIL</a>
            <a href="#" class="links-contatos" data-value="100" data-ix="show-on-scroll">100 MIL</a>
            <a href="#" class="links-contatos" data-value="125" data-ix="show-on-scroll">125 MIL</a>
            <a href="#" class="links-contatos" data-value="150" data-ix="show-on-scroll">150 MIL</a>
            <a href="#" class="links-contatos" data-value="200" data-ix="show-on-scroll">200 MIL</a>
            <div class="div-period">
                <div class="w-form" data-ix="show-on-scroll">
                    <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-switch">
                        <div class="radio-button-field w-radio">
                            <input type="radio" id="radio-mensal" name="radio" value="Radio" data-name="Radio" class="radio-button w-radio-input">
                            <label for="radio" class="w-form-label">mensal</label>
                        </div>
                        <div class="radio-button-field active w-radio">
                            <input type="radio" id="radio-anual" name="radio" value="Radio" data-name="Radio" class="radio-button w-radio-input">
                            <label for="radio" class="w-form-label">anual</label>
                        </div>
                    </form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
            <div class="spacer _50"></div>
            <div class="w-row" data-ix="show-on-scroll">
                <div class="column-center w-col w-col-3">
                    <div class="div-content-planos" data-plano="basic">
                        <div class="parte-cima">
                            <h2 class="h2 small blue bold">BASIC</h2>
                            <div class="txtblock-20"><span class="rs">R$</span><span id="planPrice-basic" class="_58">229</span><span>/mês</span></div>
                            <div class="txtblock-gray center"><span class="bolder">Cobrado anualmente<br></span>equivalente a R$<span id="equivalentPrice-month-basic">3.490,00</span>/ano</div>
                            <div class="spacer _30"></div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">5 usuários</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Suporte via Email / Chat / Ticket</div>
                            </div>
                        </div>
                        <a href="#" class="link-nav cta _100percent w-button">ASSINAR AGORA</a>
                    </div>
                </div>
                <div class="column-zero-pad w-col w-col-3">
                    <div class="div-content-planos destaque" data-plano="professional">
                        <div class="parte-cima">
                            <div class="featured">MAIS CONTRATADO</div>
                            <h2 class="h2 small blue bold">Professional</h2>
                            <div class="txtblock-20"><span class="rs">R$</span><span id="planPrice-professional" class="_58">349</span><span>/mês</span></div>
                            <div class="txtblock-gray center"><span class="bolder">Cobrado anualmente<br></span>equivalente a R$<span id="equivalentPrice-month-professional">3.490,00</span>/ano</div>
                            <div class="spacer _30"></div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">10 usuários</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Automação de Marketing</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">SMS Marketing</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Lead Tracking</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Suporte via Email / Chat / Ticket</div>
                            </div>
                        </div>
                        <a href="#" class="link-nav cta _100percent w-button">ASSINAR AGORA</a>
                    </div>
                </div>
                <div class="column-zero-pad w-col w-col-3">
                    <div class="div-content-planos" data-plano="enterprise">
                        <div class="parte-cima">
                            <h2 class="h2 small blue bold">enterprise</h2>
                            <div class="txtblock-20"><span class="rs">R$</span><span id="planPrice-enterprise" class="_58">549</span><span>/mês</span></div>
                            <div class="txtblock-gray center"><span class="bolder">Cobrado anualmente<br></span>equivalente a R$<span id="equivalentPrice-month-enterprise">3.490,00/ano</span></div>
                            <div class="spacer _30"></div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">15 usuários</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Automação de Marketing</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">SMS Marketing</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Lead Tracking</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Lead Scoring</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Suporte via Email / Chat / Ticket</div>
                            </div>
                        </div>
                        <a href="#" class="link-nav cta _100percent w-button">ASSINAR AGORA</a>
                    </div>
                </div>
                <div class="column-zero-pad w-col w-col-3">
                    <div class="div-content-planos">
                        <div class="parte-cima">
                            <div class="txtblock-20"><span class="rs">CORPORATE</span></div>
                            <div class="spacer _30"></div>
                            <div class="txtblock-gray center">Sua empresa possui necessidades especiais? Conheça nossos planos Corporate.</div>
                        </div>
                        <a href="#" class="link-nav cta _100percent w-button">SAIBA MAIS</a>
                    </div>
                </div>
            </div>
            <div class="div-width-60">
                <div class="w-form">
                    <form id="email-form" name="email-form" data-name="Email Form">
                        <h2 class="h2 left" data-ix="show-on-scroll">Cupom de desconto</h2>
                        <div class="w-row">
                            <div class="column-zero-pad w-col w-col-6"><input type="text" class="field w-input" maxlength="256" name="C-digo-do-cupom" data-name="Código do cupom" placeholder="Código do cupom*" id="C-digo-do-cupom"></div>
                            <div class="column-zero-pad w-clearfix w-col w-col-6">
                                <a href="#" class="links-contatos nopad" data-ix="show-on-scroll">VALIDAR CUPOM</a>
                            </div>
                        </div>
                        <div class="spacer"></div>
                        <h2 class="h2 left" data-ix="show-on-scroll">Implementação orientada do software*</h2>
                        <div class="w-row">
                            <div class="column-zero-pad w-col w-col-6"><select id="Objetivo-3" name="Objetivo-3" data-name="Objetivo 3" required="" class="select w-select"><option value="Implementação Gratuita em 7 dias - R$ 0,00">Implementação Gratuita em 7 dias - R$ 0,00</option><option value="Implementação Rápida em 30 dias - 2x R$ 350,00">Implementação Rápida em 30 dias - 2x R$ 350,00</option><option value="Implementação Padrão em 90 dias - 3x R$ 600,00">Implementação Padrão em 90 dias - 3x R$ 600,00</option></select>
                                <div class="txt-14-white-small" data-ix="show-on-scroll">Deseja conhecer melhor nossos planos de implementação? <a href="#" class="link-white">Quero saber mais.</a><br></div>
                            </div>
                            <div class="column-align-left w-col w-col-6">
                                <div class="txt-14-white-small" data-ix="show-on-scroll">A escolha de um dos planos de implementação é obrigatória e essencial para guiar você no alcance de seus resultados. Os planos foram criados para que você escolha aquele que atende melhor a sua necessidade.<br></div>
                            </div>
                        </div>
                        <div class="spacer"></div>
                        <h2 class="h2 left" data-ix="show-on-scroll">Contrato</h2>
                        <div class="w-row">
                            <div class="column-zero-pad w-col w-col-6"><input type="email" class="field w-input" maxlength="256" name="E-mail-2" data-name="E Mail 2" placeholder="E-mail*" id="E-mail-2" required=""></div>
                            <div class="column-align-left w-col w-col-6">
                                <div class="txt-14-white-small" data-ix="show-on-scroll">Neste e-mail, você receberá os dados deste formulário e a cópia do contrato.<br></div>
                            </div>
                        </div>
                        <div class="checkbox-field w-checkbox"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="checkbox w-checkbox-input"><label for="checkbox" class="w-form-label">Declaro que li e aceito os <a href="<?php echo base_url; ?>contrato-de-prestacao-de-servicos" class="link-white" style="margin: 0 5px;">termos de uso</a> deste contrato.</label></div>
                        <div class="spacer"></div>
                        <div class="w-row">
                            <div class="w-col w-col-6">
                                <a href="#" class="buttons-outline zeropad w-button">VOLTAR</a>
                            </div>
                            <div class="w-col w-col-6">
                                <div class="spacer w-hidden-main w-hidden-medium w-hidden-small"></div>
                                <a href="#" class="button-yellow full w-button">SALVAR E EFETUAR O PAGAMENTO</a>
                            </div>
                        </div>
                        <div class="spacer"></div>
                    </form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-numeros zeropad">
        <div class="container-center w-container">
            <div class="titulos-padding" data-ix="show-on-scroll">
                <h1 class="h1 medium inverted">Depoimentos</h1>
                <h2 class="h2 small blue">O que nossos clientes dizem sobre nosso software de automação:</h2>
            </div>
            <div class="spacer _50"></div>
            <div data-animation="slide" data-hide-arrows="1" data-duration="500" data-infinite="1" class="slider-testimonials w-slider" data-ix="show-on-scroll">
                <div class="mask w-slider-mask">
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“Estava em busca de um software de automação de marketing para conseguir concentrar todas as ações dos nossos clientes em um lugar só, foi quando eu conheci a LAHAR. Tive um excelente atendimento desde o começo, e o que mais me chamou a atenção foi o pós vendas com a preocupação em saber as minhas experiências e o que pode ser melhorado para eu ter um atendimento cada vez melhor. Recomendo!”</div>
                        <div class="spacer _50"></div><img src="assets/images/fotoRafael.png" srcset="assets/images/fotoRafael-p-500.png 500w, assets/images/fotoRafael.png 816w" sizes="100px" class="foto-author">
                        <div class="title-testimonial">Rafael Alves</div>
                        <div class="txt-14 testimonial">Publique-se</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“A LAHAR é uma ferramenta de automação 100% útil em uma estratégia de Inbound Marketing, com páginas de captura, automação de emails, gestão de contatos e muito mais. Com ótimo custo benefício, ajuda muito na hora de interligar os departamentos de marketing e vendas de uma empresa. Recomendo.”</div>
                        <div class="spacer _50"></div><img src="assets/images/fotoKim.png" srcset="assets/images/fotoKim-p-500.png 500w, assets/images/fotoKim.png 762w" sizes="100px" class="foto-author">
                        <div class="title-testimonial">Kim Kopycki</div>
                        <div class="txt-14 testimonial">Lowe</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“Hoje temos tudo automatizado em nosso site, todas as áreas de conversão são integrados na plataforma. Com a LAHAR, intensificamos a nossa atuação em marketing digital. A plataforma nos garante gestão e mensuração dos resultados e visão dos processos de marketing digital de ponta a ponta.”</div>
                        <div class="spacer _50"></div><img src="assets/images/fotoMarina.png" srcset="assets/images/fotoMarina-p-500.png 500w, assets/images/fotoMarina.png 762w" sizes="100px" class="foto-author">
                        <div class="title-testimonial">Marina Oliveira</div>
                        <div class="txt-14 testimonial">Lecom</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“Realizamos webinars em uma média de 3 vezes por semana, o que leva a um processo constante da utilização do e-mail marketing com o objetivo de divulgar esses eventos. Com o sistema de automação de marketing da LAHAR, conseguimos aumentar em muito o número de pessoas participando de webinars, o que levou a um maior engajamento de nossos leads.”</div>
                        <div class="spacer _50"></div><img src="assets/images/fotoMocelim.png" class="foto-author">
                        <div class="title-testimonial">Antonio Mocelim</div>
                        <div class="txt-14 testimonial">M3Corp</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“Satisfação de ponta a ponta com aumento das nossas oportunidades.Tanto a plataforma de automação de marketing quanto a Equipe da LAHAR superou as nossas expectativas. O trabalho de consultoria orientado a resultados e personalizado para cada perfil de cliente torna cada trabalho único e muito produtivo, identificando oportunidades em conjunto e realmente fazendo a várias mãos. Com isso estamos trabalhando cada vez mais em sinergia com a LAHAR e consequentemente na construção do relacionamento com nossos clientes levando pra eles soluções que integram e complementam as suas necessidades.”</div>
                        <div class="spacer _50"></div><img src="assets/images/fotoThiago.png" srcset="assets/images/fotoThiago-p-500.png 500w, assets/images/fotoThiago.png 654w" sizes="100px" class="foto-author">
                        <div class="title-testimonial">Thiago Andrade</div>
                        <div class="txt-14 testimonial">PÃO Criação</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“É bom poder contar com o apoio constante da LAHAR como software de marketing durante toda a execução do plano estratégico, desde o planejamento, passando pela execução até a mensuração dos resultados.”</div>
                        <div class="spacer _50"></div><img src="assets/images/fotoRoberta.png" srcset="assets/images/fotoRoberta-p-500.png 500w, assets/images/fotoRoberta-p-800.png 800w, assets/images/fotoRoberta.png 914w" sizes="100px" class="foto-author">
                        <div class="title-testimonial">Roberta Kawashima</div>
                        <div class="txt-14 testimonial">Unimagem</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">&quot;Aqui na Vesti utilizávamos outra plataforma de automação de marketing que atendia as nossas necessidades junto a nossos clientes. Depois da contratação da LAHAR percebemos que poderíamos fazer muito mais, ou seja, ir além daquilo que estávamos praticando e oferecendo. A possibilidade de trabalhar em conjunto com a equipe da LAHAR nos proporciona a certeza de bons negócios.&quot;</div>
                        <div class="spacer _50"></div><img src="assets/images/fotoWagner.png" class="foto-author">
                        <div class="title-testimonial">Wagner de Souza</div>
                        <div class="txt-14 testimonial">Vesti</div>
                    </div>
                </div>
                <div class="left-arrow w-hidden-tiny w-slider-arrow-left">
                    <div class="icon-blue w-icon-slider-left"></div>
                </div>
                <div class="right-arrow w-hidden-tiny w-slider-arrow-right">
                    <div class="icon-blue w-icon-slider-right"></div>
                </div>
                <div class="slide-nav-2 w-slider-nav w-slider-nav-invert w-round"></div>
            </div>
        </div>
    </div>
    <div class="section-footer home alternative">
        <div class="div-last-footer alternative">
            <div class="div-line"></div>
            <div class="container-assinatura w-container">
                <div class="w-row">
                    <div class="w-clearfix w-col w-col-6">
                        <div class="flags">
                            <a href="#"  onclick="changeLanguage('')" class="flag w-inline-block"><img src="assets/images/brasil.svg"></a><div class="divider-flags"></div>
                            <a href="#"  onclick="changeLanguage('en')" class="flag w-inline-block"><img src="assets/images/united-states.svg"></a>
                            <div class="divider-flags gray"></div>
                            <a href="#" onclick="changeLanguage('es')"  class="flag w-inline-block"><img src="assets/images/spain.svg"></a>
                        </div>
                        <div class="txtblocks-blue medium _14 middle">Copyright © 2018 - LAHAR. Todos os direitos reservados.</div>
                    </div>
                    <div class="w-hidden-tiny w-col w-col-3"></div>
                    <div class="column-social w-hidden-tiny w-col w-col-3"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="assets/js/lahar-v2.js" type="text/javascript"></script>
    <script src="assets/js/custom.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

    <script>
        jQuery(document).ready(function($) {
            /* ADICIONA AÇÕES DO FORMULÁRIO (BOTÕES E SEÇÕES) */
            $('.links-contatos').click(function(e) {
                $('.links-contatos').removeClass('active');
                $(this).addClass('active');

                numberOfContacts = $(this).attr('data-value');
                changePrice();
            });

            $('.div-period .radio-button-field').click(function() {
                $('.radio-button-field').removeClass('active').children('input').removeAttr('checked');
                $(this).addClass('active').children('input').attr('checked', 'checked');

                paymentPeriod = ( $('#radio-mensal').is(':checked') ) ? 'month' : 'year';

                changePrice();
            });

            $('.div-content-planos .link-nav').click(function() {
                $('.div-content-planos').removeClass('destaque');
                $(this).closest('.div-content-planos').addClass('destaque');
            });

            $('.tipo-cadastro').click(function() {
                $('.tipo-cadastro').removeClass('active');
                $(this).addClass('active');

                if ( $(this).attr('data-tipo') == 'pf' ) {
                    $('.tipo-dados-label').text('Dados Pessoais');
                } else if ( $(this).attr('data-tipo') == 'pj' ) {
                    $('.tipo-dados-label').text('Dados Empresariais');
                }
            });


            /* TRATA DADOS VINDOS DA PÁGINA DE PLANOS */
            var plano = '<?php echo ( isset($_GET['plano']) ) ? trim($_GET['plano']) : ''; ?>',
                contatos = '<?php echo ( isset($_GET['contatos']) ) ? trim($_GET['contatos']) : ''; ?>',
                periodo = '<?php echo ( isset($_GET['periodo']) ) ? trim($_GET['periodo']) : ''; ?>';

            if ( plano !== '' ) {
                $('.div-content-planos[data-plano="'+ plano +'"] .link-nav').click();
            }

            if ( contatos !== '' ) {
                $('.links-contatos[data-value="'+ contatos +'"]').click();
            }

            if ( periodo !== '' ) {
                if ( periodo == 'anual' ) {
                    $('#radio-anual').closest('.radio-button-field').click();
                } else {
                    $('#radio-mensal').closest('.radio-button-field').click();
                }
            }
        });
    </script>

</body>
</html>
