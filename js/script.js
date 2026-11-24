const campoSenha = document.getElementById("senhau");

if (campoSenha) {
    
    const divMostrar = document.createElement("div");
    divMostrar.style.marginTop = "5px";
    divMostrar.style.fontSize = "14px";

    const checkbox = document.createElement("input");
    checkbox.type = "checkbox";
    checkbox.id = "mostrarSenha";
    checkbox.style.width = "auto"; 

    const label = document.createElement("label");
    label.htmlFor = "mostrarSenha";
    label.textContent = " Mostrar senha";
    label.style.display = "inline";

    divMostrar.appendChild(checkbox);
    divMostrar.appendChild(label);
    campoSenha.parentNode.appendChild(divMostrar);

    checkbox.addEventListener("change", function () {
        campoSenha.type = this.checked ? "text" : "password";
    });
}

const formulario = document.querySelector("form");

if (formulario) {
    formulario.addEventListener("submit", function (event) {
        const campoNome = document.getElementById("nomec");
        const email = document.getElementById("emailu").value.trim();
        const senha = campoSenha.value;

        if (campoNome) {
            const nome = campoNome.value.trim();
            if (!nome.includes(" ")) {
                alert("Digite seu nome e sobrenome.");
                event.preventDefault();
                return;
            }
        }

        if (senha.length < 8) {
            alert("A senha precisa ter no mínimo 8 caracteres.");
            event.preventDefault();
            return;
        }
    });
}
