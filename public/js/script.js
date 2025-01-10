document.addEventListener('DOMContentLoaded', function () {
    const imagemExibidaTop = document.getElementById('imagemExibidaTop');
    const darkModeToggle = document.getElementById('darkModeToggle');



        function applyDarkMode() {
            const isDarkMode = localStorage.getItem('darkMode') === 'true';


            document.body.classList.toggle('dark-mode', isDarkMode);

            if(isDarkMode){
                imagemExibidaTop.src = 'assets/img/bg/sec-shape2-top-escuro.png';
            }
            else{
                imagemExibidaTop.src = 'assets/img/bg/sec-shape2-top.png';
            }


            if (darkModeToggle) {
                darkModeToggle.checked = isDarkMode;
            }
        }


        applyDarkMode();



        if (darkModeToggle) {
            darkModeToggle.addEventListener('change', function () {
                const isDarkMode = darkModeToggle.checked;
                localStorage.setItem('darkMode', isDarkMode);
                applyDarkMode();
            });
        }
});



function showAlert(mensagem, targetElementId, timeout = 3000) {
    var messageDiv = document.getElementById(targetElementId);
    messageDiv.innerHTML = mensagem;
    messageDiv.classList.remove('contatoMensagem');

    setTimeout(function() {
        messageDiv.classList.add('contatoMensagem');
    }, timeout);
}

function displayError(erros){
    let todosOsErros = "";

    for(const[key,value] of Object.entries(erros)){
        todosOsErros += `<div class="alert alert-danger">${value.join(
            ", "
        )}</div>`;
    }
    if(todosOsErros){
        showAlert(todosOsErros,"contatoMensagem");
    }
}



document.getElementById('formContato').addEventListener('submit', function(e){
    e.preventDefault();

    var data = {
        nomeContato: document.getElementById('nomeContato').value,
        emailContato: document.getElementById('emailContato').value,
        foneContato: document.getElementById('foneContato').value,
        msgContato: document.getElementById('msgContato').value
    };

    fetch('/contato/enviar', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro na resposta do servidor');
        }
        return response.json();
    })
    .then(data => {
        showAlert(`<div class="alert alert-success">${data.success}</div>`, 'contatoMensagem');
        document.getElementById('formContato').reset();
    })
    .catch(errorResponse => {
        errorResponse.json().then(errorData => {
            if (errorData.errors) {
                let errorMessages = Object.values(errorData.errors).map(error => `<div class="alert alert-danger">${error}</div>`).join('');
                showAlert(errorMessages, 'contatoMensagem');
            }
        });
    });
});


