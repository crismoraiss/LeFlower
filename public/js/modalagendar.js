document.addEventListener("DOMContentLoaded", function () {
    var btn = document.getElementById("abrirModalAgendar");
    var span = document.getElementsByClassName("close")[0];
    var confirmarBtn = document.getElementById("confirmarAgendar");

    // Obter campos do formulário
    var dataField = document.getElementById("data");
    var funcionarioField = document.getElementById("idFuncionario");

    // Obter campos do modal
    var modalServico = document.getElementById("modal-servico");
    var modalData = document.getElementById("modal-data");
    var modalHorario = document.getElementById("modal-horario");
    var modalFuncionario = document.getElementById("modal-funcionario");
    var modalPreco = document.getElementById("modal-preco");

    // Quando o usuário clicar no botão, abrir o modal
    btn.onclick = function (event) {
        event.preventDefault();

        // Atualizar o conteúdo do modal
        var servicoField = document.querySelector(".acordeao-item.selected .acordeao-item-header");
        var horarioField = document.querySelector('input[name="horario"]:checked');
        if (!servicoField || !horarioField) {
            alert("Por favor, selecione um serviço e um horário.");
            return;
        }

        // Formatar data
        var date = new Date(dataField.value);
        var formattedDate = date.toLocaleDateString("pt-BR", {
            day: "2-digit",
            month: "long",
            year: "numeric",
        });

        var servicoText = servicoField.textContent;
        var nomeServico = servicoField.querySelector('.nomeServico').textContent;
        var precoServico = servicoField.querySelector('span[style*="float: right"]').textContent;

        modalServico.textContent = nomeServico;
        modalPreco.textContent = precoServico;
        modalData.textContent = formattedDate;
        modalHorario.textContent = horarioField ? horarioField.nextElementSibling.textContent : "";
        modalFuncionario.textContent = horarioField ? horarioField.closest(".funcionario").querySelector(".nome").textContent : "";

        // Mostrar o modal com animação
        var modal = document.querySelector(".modal");
        modal.style.display = "flex";
        modal.classList.add("fade-in");
    };

    // Quando o usuário clicar em <span> (x), fechar o modal
    span.onclick = function () {
        var modal = document.querySelector(".modal");
        modal.style.display = "none";
        modal.classList.remove("fade-in");
    };

    // Quando o usuário clicar fora do modal, fechar o modal
    window.onclick = function (event) {
        var modal = document.querySelector(".modal");
        if (event.target == modal) {
            modal.style.display = "none";
            modal.classList.remove("fade-in");
        }
    };

    // Quando o usuário clicar no botão de confirmar, enviar o formulário
    confirmarBtn.onclick = function () {
        document.getElementById("agendamentoForm").submit();
    };
});
