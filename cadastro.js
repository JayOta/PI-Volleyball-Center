function cadastro() {
    var usuario = document.getElementById("usuario").value;
    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;

    localStorage.setItem( "usuario", usuario);
    localStorage.setItem( "email", email);
    localStorage.setItem( "senha", senha);

    var resultado = confirm("Castrado com sucesso!");

    window.location.href = "login.html";
}