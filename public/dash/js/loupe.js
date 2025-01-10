// document.addEventListener('DOMContentLoaded', function() {
//     const toggleButton = document.getElementById('toggle-loupe');
//     const loupe = document.getElementById('loupe');
//     const zoomedContent = document.getElementById('zoomed-content');
//     const content = document.querySelector('.content');
//     let loupeActive = false;

//     // Adicionar ícone dentro do círculo da lupa
//     const loupeIcon = document.createElement('i');
//     loupeIcon.classList.add('fas', 'fa-search');
//     loupe.appendChild(loupeIcon);

//     function isCursorOverContent(event) {
//         const contentRect = content.getBoundingClientRect();
//         return (
//             event.clientX >= contentRect.left &&
//             event.clientX <= contentRect.right &&
//             event.clientY >= contentRect.top &&
//             event.clientY <= contentRect.bottom
//         );
//     }

//     function updateZoomedContent(event) {
//         const loupeSize = 50; // Metade do tamanho anterior
//         const zoomFactor = 2;

//         const offsetX = event.offsetX;
//         const offsetY = event.offsetY;

//         loupe.style.borderRadius = '50%'; // Torna a lupa circular

//         zoomedContent.style.backgroundColor = 'black'; // Muda a cor de fundo do conteúdo ampliado
//         zoomedContent.style.color = 'white'; // Muda a cor do texto
//         zoomedContent.style.padding = '10px'; // Ajusta o padding
//         zoomedContent.style.width = 'auto'; // Define a largura do bloco automaticamente
//         zoomedContent.style.maxWidth = '400px'; // Define a largura máxima do bloco
//         zoomedContent.style.maxHeight = '210px'; // Define a altura máxima do bloco
//         zoomedContent.style.fontSize = '14px'; // Define o tamanho da fonte
//         zoomedContent.style.overflow = 'hidden'; // Remove as barras de rolagem

//         loupe.style.backgroundImage = 'none'; // Remove a imagem de fundo
//         loupe.style.display = 'flex'; // Exibe o ícone de lupa
//         loupe.style.left = `${event.pageX - loupeSize / 2}px`;
//         loupe.style.top = `${event.pageY - loupeSize / 2}px`;

//         if (isCursorOverContent(event)) {
//             const target = event.target;
//             let description = '';

//             if (target.tagName === 'IMG' && target.alt) {
//                 description = target.alt;
//             } else if (target.tagName === 'P' || target.tagName === 'H1' || target.tagName === 'H2' ||
//                 target.tagName === 'H3' || target.tagName === 'H4' || target.tagName === 'H5' || target
//                 .tagName === 'H6' || target.tagName === 'SPAN' || target.tagName === 'A' || target.tagName === 'LABEL') {
//                 description = target.textContent;
//             }

//             if (description) {
//                 zoomedContent.innerHTML = `<p>${description}</p>`;
//                 zoomedContent.style.display = 'block';
//                 zoomedContent.style.left = `${event.pageX}px`;
//                 zoomedContent.style.top = `${event.pageY + loupeSize}px`;
//                 zoomedContent.style.transform = `scale(${zoomFactor})`;
//             }
//         } else {
//             zoomedContent.style.display = 'none';
//         }
//     }

//     toggleButton.addEventListener('click', function() {
//         loupeActive = !loupeActive;
//         if (!loupeActive) {
//             loupe.style.display = 'none';
//             zoomedContent.style.display = 'none';
//         }
//     });

//     document.addEventListener('mousemove', function(event) {
//         if (loupeActive) {
//             updateZoomedContent(event);
//         }
//     });

//     document.addEventListener('mouseleave', function() {
//         if (loupeActive) {
//             loupe.style.display = 'none';
//             zoomedContent.style.display = 'none';
//         }
//     });
// });




document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.getElementById('toggle-loupe');
    const loupe = document.getElementById('loupe');
    const zoomedContent = document.getElementById('zoomed-content');
    const content = document.querySelector('.content');
    let loupeActive = false;

    // Adicionar ícone dentro do círculo da lupa
    const loupeIcon = document.createElement('i');
    loupeIcon.classList.add('fas', 'fa-search');
    loupe.appendChild(loupeIcon);



 // Função para desativar a lupa
 function deactivateLoupe() {
    loupeActive = false;
    loupe.style.display = 'none';
    zoomedContent.style.display = 'none';
    document.body.classList.remove('loupe-active');
}

// Desativar a lupa ao carregar a página
deactivateLoupe();


    function isCursorOverContent(event) {
        const contentRect = content.getBoundingClientRect();
        return (
            event.clientX >= contentRect.left &&
            event.clientX <= contentRect.right &&
            event.clientY >= contentRect.top &&
            event.clientY <= contentRect.bottom
        );
    }

    function updateZoomedContent(event) {
        const loupeSize = 50; // Metade do tamanho anterior
        const zoomFactor = 2;

        const offsetX = event.offsetX;
        const offsetY = event.offsetY;

        loupe.style.borderRadius = '50%'; // Torna a lupa circular

        zoomedContent.style.backgroundColor = 'black'; // Muda a cor de fundo do conteúdo ampliado
        zoomedContent.style.color = 'white'; // Muda a cor do texto
        zoomedContent.style.padding = '10px'; // Ajusta o padding
        zoomedContent.style.width = 'auto'; // Define a largura do bloco automaticamente
        zoomedContent.style.maxWidth = '400px'; // Define a largura máxima do bloco
        zoomedContent.style.maxHeight = '220px'; // Define a altura máxima do bloco
        zoomedContent.style.fontSize = '14px'; // Define o tamanho da fonte
        zoomedContent.style.overflow = 'hidden'; // Remove as barras de rolagem
        zoomedContent.style.borderRadius = '20px'; // Remove as barras de rolagem placeholder

        loupe.style.backgroundImage = 'none'; // Remove a imagem de fundo
        loupe.style.display = 'flex'; // Exibe o ícone de lupa
        loupe.style.left = `${event.pageX - loupeSize / 2}px`;
        loupe.style.top = `${event.pageY - loupeSize / 2}px`;

        if (isCursorOverContent(event)) {
            const target = event.target;
            let description = '';

            if (target.tagName === 'IMG' && target.alt) {
                description = target.alt;
            } else if (target.tagName === 'P' || target.tagName === 'H1' || target.tagName === 'H2' ||
                target.tagName === 'H3' || target.tagName === 'H4' || target.tagName === 'H5' || target
                .tagName === 'H6' || target.tagName === 'SPAN' || target.tagName === 'A' || target.tagName === 'LABEL' || target.tagName === 'TH' || target.tagName === 'TR') {
                description = target.textContent;
            }

            if (description) {
                zoomedContent.innerHTML = `<p>${description}</p>`;
                zoomedContent.style.display = 'block';
                zoomedContent.style.left = `${event.pageX}px`;
                zoomedContent.style.top = `${event.pageY + loupeSize + 10}px`; // Adicionado deslocamento de 10px
                zoomedContent.style.transform = `scale(${zoomFactor})`;
            } else {
                zoomedContent.style.display = 'none'; // Esconder o conteúdo ampliado se não houver descrição
            }
        } else {
            zoomedContent.style.display = 'none';
        }
    }

    toggleButton.addEventListener('click', function() {
        loupeActive = !loupeActive;
        if (!loupeActive) {
            loupe.style.display = 'none';
            zoomedContent.style.display = 'none';
        }
    });

    document.addEventListener('mousemove', function(event) {
        if (loupeActive) {
            updateZoomedContent(event);
        }
    });

    document.addEventListener('mouseleave', function() {
        if (loupeActive) {
            loupe.style.display = 'none';
            zoomedContent.style.display = 'none';
        }
    });
});
