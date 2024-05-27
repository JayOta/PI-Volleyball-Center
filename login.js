// 1- inserir dado
// localStorage.setItem("usuario", "senha",)

// 2 - restart sem perder dados

// 3 - resgatar item
// const name = localStorage.getItem("name")
// console.log(name)

// 4 - resgate de item que nao existe

// 5 - remover item 
// localStorage.removeItem("name");

// 6 - limpar todos os itens 
// localStorage.setItem("a", 1)
// localStorage.setItem("b", 2)

function login() {
    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;
    
    var emailLogin = localStorage.getItem("email");
    var senhaLogin = localStorage.getItem("senha");

    
    if (email == emailLogin && senha == senhaLogin) {
       localStorage.setItem("acesso", true);
        
        alert("Login realizado!");

        window.location.href = "http://localhost/phpPI/PI/View/inicial.php";
    }
    else { 
        alert("Email ou senha incorretos!");
    }
}