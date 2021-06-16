@extends("site.layout.app2")
@section("content")
    <div role="main" class="main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <section class="card card-admin form-wizard" id="w4">
                        <header class="card-header">
                            <div class="card-actions">
                                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                            </div>

                            <h2 class="card-title">Formulario de Cadastro</h2>
                        </header>
                        <div class="card-body">
                            <div class="wizard-progress wizard-progress-lg">
                                <div class="steps-progress">
                                    <div class="progress-indicator"></div>
                                </div>
                                <ul class="nav wizard-steps">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#w4-account" data-toggle="tab"><span>1</span>Dados Pessoais</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#w4-profile" data-toggle="tab"><span>2</span>Endereço</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#w4-billing" data-toggle="tab"><span>3</span>Informações para Contato</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#w4-confirm" data-toggle="tab"><span>4</span>Confirmação</a>
                                    </li>
                                </ul>
                            </div>

                            <form class="form-horizontal p-3" novalidate="novalidate">
                                <div class="tab-content">
                                    <div id="w4-account" class="tab-pane active">
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="nomecompl">Nome Completo</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="username" id="w4-username" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-password">Sexo</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" name="password" id="w4-password" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-password2">CPF</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" name="password" id="w4-password2" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-unernamefirst">Data de Nascimento</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" name="password" id="w4-unernamefirst" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="w4-profile" class="tab-pane">
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-first-name">CEP</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="first-name" id="w4-first-name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Endereço</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Número</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Bairro</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Complemento</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Cidade</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Estado</label>
                                            <div class="col-sm-9">
                                                <select id="state" class="form-control">
                                                    <option value=""></option>
                                                    <option value="AC">Acre</option>
                                                    <option value="AL">Alagoas</option>
                                                    <option value="AP">Amapá</option>
                                                    <option value="AM">Amazonas</option>
                                                    <option value="BA">Bahia</option>
                                                    <option value="CE">Ceará</option>
                                                    <option value="DF">Distrito Federal</option>
                                                    <option value="ES">Espirito Santo</option>
                                                    <option value="GO">Goiás</option>
                                                    <option value="MA">Maranhão</option>
                                                    <option value="MT">Mato Grosso</option>
                                                    <option value="MS">Mato Grosso do Sul</option>
                                                    <option value="MG">Minas Gerais</option>
                                                    <option value="PA">Pará</option>
                                                    <option value="PB">Paraíba</option>
                                                    <option value="PR">Paraná</option>
                                                    <option value="PE">Pernambuco</option>
                                                    <option value="PI">Piauí</option>
                                                    <option value="RJ">Rio de Janeiro</option>
                                                    <option value="RN">Rio Grande do Norte</option>
                                                    <option value="RS">Rio Grande do Sul</option>
                                                    <option value="RO">Rondônia</option>
                                                    <option value="RR">Roraima</option>
                                                    <option value="SC">Santa Catarina</option>
                                                    <option value="SP">São Paulo</option>
                                                    <option value="SE">Sergipe</option>
                                                    <option value="TO">Tocantins</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="w4-billing" class="tab-pane">
                                        <div class="form-group row">
                                            <div class="form-group row">
                                                <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Celular</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group row">
                                                <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Telefone</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group row">
                                                <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">E-mail</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="w4-confirm" class="tab-pane">
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-username">Nome Completo</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="username" id="w4-username" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-password">Sexo</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" name="sexo" id="w4-password" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-password2">CPF</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" name="password" id="w4-password2" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-unernamefirst">Data de Nascimento</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" name="password" id="w4-unernamefirst" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-first-name">CEP</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="first-name" id="w4-first-name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Endereço</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Número</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Bairro</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Complemento</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Cidade</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Estado</label>
                                            <div class="col-sm-9">
                                                <select id="state" class="form-control">
                                                    <option value=""></option>
                                                    <option value="AC">Acre</option>
                                                    <option value="AL">Alagoas</option>
                                                    <option value="AP">Amapá</option>
                                                    <option value="AM">Amazonas</option>
                                                    <option value="BA">Bahia</option>
                                                    <option value="CE">Ceará</option>
                                                    <option value="DF">Distrito Federal</option>
                                                    <option value="ES">Espirito Santo</option>
                                                    <option value="GO">Goiás</option>
                                                    <option value="MA">Maranhão</option>
                                                    <option value="MT">Mato Grosso</option>
                                                    <option value="MS">Mato Grosso do Sul</option>
                                                    <option value="MG">Minas Gerais</option>
                                                    <option value="PA">Pará</option>
                                                    <option value="PB">Paraíba</option>
                                                    <option value="PR">Paraná</option>
                                                    <option value="PE">Pernambuco</option>
                                                    <option value="PI">Piauí</option>
                                                    <option value="RJ">Rio de Janeiro</option>
                                                    <option value="RN">Rio Grande do Norte</option>
                                                    <option value="RS">Rio Grande do Sul</option>
                                                    <option value="RO">Rondônia</option>
                                                    <option value="RR">Roraima</option>
                                                    <option value="SC">Santa Catarina</option>
                                                    <option value="SP">São Paulo</option>
                                                    <option value="SE">Sergipe</option>
                                                    <option value="TO">Tocantins</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group row">
                                                <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Celular</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group row">
                                                <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">Telefone</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group row">
                                                <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-last-name">E-mail</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" name="terms" id="w4-terms" required>
                                                    <label for="w4-terms">Eu aceito os Termos de Serviço</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <ul class="pager">
                                <li class="previous disabled">
                                    <a><i class="fas fa-angle-left"></i>Anterior</a>
                                </li>
                                <li class="finish hidden float-right">
                                    <a>Finalizar</a>
                                </li>
                                <li class="next">
                                    <a>Proximo <i class="fas fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
