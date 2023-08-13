function mensagem () {
    let res = window.document.getElementById('res')
    let form_cpf = window.document.getElementById('form_cpf')
    let tamanho = form_cpf.value.length
    if (tamanho == 0) {
        res.innerHTML = 'Resultado'
    } else if (cpf_valido()) {
        res.innerHTML = 'Válido!'
        
    } else {
        res.innerHTML = 'Inválido!'
    }
}