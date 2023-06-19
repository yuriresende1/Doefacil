<!-- ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS
ESSA PÁGINA PROVAVELMENTE NÃO VAI EXISTIR MAIS -->


<!DOCTYPE html>
<html>
<head>
	<title>Seu Perfil</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<script>
		feather.replace();
		// Código JavaScript
	</script>
</head>
    <body>
        <div class="container">
            <h2 class="text-center mt-4">Ficha de Cadastro</h2>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" id="pessoaFisica-tab" data-bs-toggle="tab" href="#pessoaFisica">Pessoa Física</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pessoaJuridica-tab" data-bs-toggle="tab" href="#pessoaJuridica">Pessoa Jurídica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pessoaJuridicaOng-tab" data-bs-toggle="tab" href="#pessoaJuridicaOng">Entidade Filantrófica</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pessoaFisica">
                    <h3 class="mt-4">Dados Pessoais - Pessoa Física</h3>
                    <form>
                        <div class="mb-3">
                            <label for="nomePF" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="nomePF" name="nomePF" placeholder="Insira seu nome">
                        </div>
                        <div class="mb-3">
                            <label for="cpf" class="form-label">CPF:</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira seu CPF">
                        </div>
                        <div class="mb-3">
                            <label for="emailPF" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="emailPF" name="emailPF" placeholder="Insira seu e-mail">
                        </div>
                        <div class="mb-3">
                            <label for="telefonePF" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" id="telefonePF" name="telefonePF" placeholder="Insira seu telefone">
                        </div>
                        <div class="mb-3">
                            <label for="estadoCivil" class="form-label">Estado Civil:</label>
                            <input type="text" class="form-control" id="estadoCivil" name="estadoCivil" placeholder="Insira seu estado civil">
                        </div>
                        <div class="mb-3">
                            <label for="enderecoPF" class="form-label">Endereço:</label>
                            <input type="text" class="form-control" id="enderecoPF" name="enderecoPF" placeholder="Insira seu endereço">
                        </div>
                        <div class="mb-3">
                            <label for="numeroResidencia" class="form-label">Número da Residência:</label>
                            <input type="text" class="form-control" id="numeroResidencia" name="numeroResidencia" placeholder="Insira o número da residência">
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="cidadePF" class="form-label">Cidade:</label>
                                <input type="text" class="form-control" id="cidadePF" name="cidadePF" placeholder="Insira sua cidade">
                            </div>
                        </div>
                        <div class="mb-3">
							<label for="estadoPF" class="form-label">Estado:</label>
							<input type="text" class="form-control" id="estadoPF" name="estadoPF" placeholder="Insira seu estado">
                        </div>
                        <div class="mb-3">
							<label for="paisDomicilio" class="form-label">País de Domicílio:</label>
							<input type="text" class="form-control" id="paisDomicilio" name="paisDomicilio" placeholder="Insira seu país de domicílio">
                        </div>
                        <div class="mb-3">
							<label for="paisOrigem" class="form-label">País de Origem:</label>
							<input type="text" class="form-control" id="paisOrigem" name="paisOrigem" placeholder="Insira seu país de origem">
                        </div>
                        <div class="mb-3">
							<label for="doacaoPF" class="form-label">O que você gostaria de doar:</label>
							<input type="text" class="form-control" id="doacaoPF" name="doacaoPF" placeholder="Insira o que você gostaria de doar">
                        </div>
                        <div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="notificacoesPF" name="notificacoesPF">
							<label class="form-check-label" for="notificacoesPF">Aceito receber notificações do site para participar de futuras campanhas de doação</label>
                        </div>
                        <div class="mb-3">
							<label for="doadorRecorrentePF" class="form-label">O que seria necessário para você se tornar um doador recorrente:</label>
							<textarea class="form-control" id="doadorRecorrentePF" name="doadorRecorrentePF" placeholder="Descreva o que seria necessário para se tornar um doador recorrente"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="pessoaJuridica">
                    <h3 class="mt-4">Dados Empresariais - Pessoa Jurídica</h3>
                    <form>
                        <div class="mb-3">
                            <label for="nomePJ" class="form-label">Nome:</label>
							<input type="text" class="form-control" id="nomePJ" name="nomePJ" placeholder="Insira o nome da empresa">
                        </div>
                        <div class="mb-3">
							<label for="cnpj" class="form-label">CNPJ:</label>
							<input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Insira o CNPJ da empresa">
                        </div>
                        <div class="mb-3">
							<label for="emailPJ" class="form-label">E-mail:</label>
							<input type="email" class="form-control" id="emailPJ" name="emailPJ" placeholder="Insira o e-mail da empresa">
						</div>
						<div class="mb-3">
                            <label for="telefonePJ" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" id="telefonePJ" name="telefonePJ" placeholder="Insira o telefone da empresa">
						</div>
						<div class="mb-3">
                            <label for="enderecoPJ" class="form-label">Endereço:</label>
                            <input type="text" class="form-control" id="enderecoPJ" name="enderecoPJ" placeholder="Insira o endereço da empresa">
						</div>
						<div class="mb-3">
                            <label for="numeroLocalizacao" class="form-label">Número da Localização:</label>
                            <input type="text" class="form-control" id="numeroLocalizacao" name="numeroLocalizacao" placeholder="Insira o número da localização">
						</div>
						<div class="mb-3">
                            <label for="cidadePJ" class="form-label">Cidade:</label>
                            <input type="text" class="form-control" id="cidadePJ" name="cidadePJ" placeholder="Insira a cidade">
						</div>
						<div class="mb-3">
                            <label for="estadoPJ" class="form-label">Estado:</label>
                            <input type="text" class="form-control" id="estadoPJ" name="estadoPJ" placeholder="Insira o estado">
						</div>
						<div class="mb-3">
                            <label for="paisDomicilioPJ" class="form-label">País de Domicílio:</label>
                            <input type="text" class="form-control" id="paisDomicilioPJ" name="paisDomicilioPJ" placeholder="Insira o país de domicílio">
						</div>
						<div class="mb-3">
                            <label for="paisOrigemPJ" class="form-label">País de Origem:</label>
                            <input type="text" class="form-control" id="paisOrigemPJ" name="paisOrigemPJ" placeholder="Insira o país de origem">
						</div>
						<div class="mb-3">
                            <label for="doacaoPJ" class="form-label">O que a empresa gostaria de doar:</label>
                            <input type="text" class="form-control" id="doacaoPJ" name="doacaoPJ" placeholder="Insira o que a empresa gostaria de doar">
						</div>
						<div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="notificacoesPJ" name="notificacoesPJ">
                            <label class="form-check-label" for="notificacoesPJ">Aceito receber notificações do site para participar de futuras campanhas de doação</label>
						</div>
						<div class="mb-3">
                            <label for="doadorRecorrentePJ" class="form-label">O que seria necessário para a empresa se tornar um doador recorrente:</label>
                            <textarea class="form-control" id="doadorRecorrentePJ" name="doadorRecorrentePJ" placeholder="Descreva o que seria necessário para a empresa se tornar um doador recorrente"></textarea>
						</div>
						<button type="submit" class="btn btn -primary">Enviar</button>
					</form>
                </div>
                <div class="tab-pane fade" id="pessoaJuridicaOng">
                    <h3 class="mt-4">Dados - Entidade Filantrófica</h3>
                    <!-- Mudar todos os campos -->
                    <form>
                        <div class="mb-3">
                            <label for="nomePJ" class="form-label">Nome:</label>
							<input type="text" class="form-control" id="nomePJ" name="nomePJ" placeholder="Insira o nome da empresa">
                        </div>
                        <div class="mb-3">
							<label for="cnpj" class="form-label">CNPJ:</label>
							<input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Insira o CNPJ da empresa">
                        </div>
                        <div class="mb-3">
							<label for="emailPJ" class="form-label">E-mail:</label>
							<input type="email" class="form-control" id="emailPJ" name="emailPJ" placeholder="Insira o e-mail da empresa">
						</div>
						<div class="mb-3">
                            <label for="telefonePJ" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" id="telefonePJ" name="telefonePJ" placeholder="Insira o telefone da empresa">
						</div>
						<div class="mb-3">
                            <label for="enderecoPJ" class="form-label">Endereço:</label>
                            <input type="text" class="form-control" id="enderecoPJ" name="enderecoPJ" placeholder="Insira o endereço da empresa">
						</div>
						<div class="mb-3">
                            <label for="numeroLocalizacao" class="form-label">Número da Localização:</label>
                            <input type="text" class="form-control" id="numeroLocalizacao" name="numeroLocalizacao" placeholder="Insira o número da localização">
						</div>
						<div class="mb-3">
                            <label for="cidadePJ" class="form-label">Cidade:</label>
                            <input type="text" class="form-control" id="cidadePJ" name="cidadePJ" placeholder="Insira a cidade">
						</div>
						<div class="mb-3">
                            <label for="estadoPJ" class="form-label">Estado:</label>
                            <input type="text" class="form-control" id="estadoPJ" name="estadoPJ" placeholder="Insira o estado">
						</div>
						<div class="mb-3">
                            <label for="paisDomicilioPJ" class="form-label">País de Domicílio:</label>
                            <input type="text" class="form-control" id="paisDomicilioPJ" name="paisDomicilioPJ" placeholder="Insira o país de domicílio">
						</div>
						<div class="mb-3">
                            <label for="paisOrigemPJ" class="form-label">País de Origem:</label>
                            <input type="text" class="form-control" id="paisOrigemPJ" name="paisOrigemPJ" placeholder="Insira o país de origem">
						</div>
						<div class="mb-3">
                            <label for="doacaoPJ" class="form-label">O que a empresa gostaria de doar:</label>
                            <input type="text" class="form-control" id="doacaoPJ" name="doacaoPJ" placeholder="Insira o que a empresa gostaria de doar">
						</div>
						<div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="notificacoesPJ" name="notificacoesPJ">
                            <label class="form-check-label" for="notificacoesPJ">Aceito receber notificações do site para participar de futuras campanhas de doação</label>
						</div>
						<div class="mb-3">
                            <label for="doadorRecorrentePJ" class="form-label">O que seria necessário para a empresa se tornar um doador recorrente:</label>
                            <textarea class="form-control" id="doadorRecorrentePJ" name="doadorRecorrentePJ" placeholder="Descreva o que seria necessário para a empresa se tornar um doador recorrente"></textarea>
						</div>
						<button type="submit" class="btn btn -primary">Enviar</button>
					</form>
                </div>
            </div>
        </div>		
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    </body>
</html>