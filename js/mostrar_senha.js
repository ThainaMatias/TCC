function mostrarSenha(){
    
    /*
       forma antiga: var senha = document.getElementById('pwd')
    */
    //selecionando o elemento id
    const senha = document.querySelector('#pwd')
    
    if(senha.type == 'password')
    {
        senha.type = 'text'
    }
    else
    {
        senha.type = 'password'
    }
}