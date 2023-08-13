<header>
    <h3><i class="bi bi-person-square"></i> Cadastro de Contato</h3>
</header>



<div>
    <form class="needs-validation" action="index.php?menuop=inserir-contato" method="post" novalidate>
        <div class="col-sm-6">
            <label class="form-label" for="nomeContato">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="nomeContato" placeholder="Seu nome completo" required>
                <div class="valid-feedback">
                    Está correto.
                </div>
                <div class="invalid-feedback">
                   Campo obrigatório de no máximo 255 caracteres 
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="cpfContato">CPF</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
                <input class="form-control" type="text" name="cpfContato"  id="cpfContato" size="11" maxlength="14" placeholder="000.000.000-00" required>
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
                <script>
		$("#cpfContato").mask("999.999.999-99");
	</script>

            </div>
            </div>           
        <div class="col-sm-6">
            <label class="form-label" for="emailContato">E-Mail</label>
            <div class="input-group">
                <span class="input-group-text">@</span>
                <input class="form-control" type="email" name="emailContato" placeholder="exemplo@dominio.com" required>
                <div class="help-block with-errors"></div>

        </div>
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="telefoneContato">Telefone</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input class="form-control" type="text"  name="telefoneContato" id="telefoneContato" placeholder="(00) 00000-0000" required>

                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
                <script>
		$("#telefoneContato").mask("(99) 99999-9999");
	</script>
            </div>
        </div>
        <div class="col-sm-6">
         <form method="get" action=".">
            <label class="form-label" for="cepContato">CEP</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
                <input class="form-control" name="cepContato" type="text" id="cep" value="" size="31" maxlength="9"
               onblur="pesquisacep(this.value);" placeholder="00000-000" required/>
            </div>
        </div>
        <div class="col-sm-6">
         <form method="get" action=".">
            <label class="form-label" for="enderecoContato">Endereço</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
                <input class="form-control" name="enderecoContato" type="text" id="rua" value="" size="31" maxlength="20"
               onblur="pesquisacep(this.value);" />
            </div>
        </div>
        
      <script>
    

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
  

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };  
    </script>

        <div class="row">
        <div class="mb-3 col-3">
            <label class="form-label" for="sexoContato">Sexo</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
            <select class="form-select" name="sexoContato" id="sexoContato" required>
                <option selected value="">Selecione o sexo do aluno</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
            </div>
           
        </div>
        <div class="mb-3 col-3">
            <label class="form-label" for="dataNascContato">Data de Nasc.</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                <input class="form-control" type="date" name="dataNascContato" required>
            </div>
        </div>
        </div>
        
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>