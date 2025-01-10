/*--------------------------------------------------
    BMI Calculator
---------------------------------------------------*/
function calculateBMI() {
    // Obtém os valores de peso e altura do formulário
    var weightInput = document.bmiCalc.weight.value;
    var heightInput = document.bmiCalc.height.value;

    // Remove vírgulas e substitui vírgulas por pontos, se necessário
    var weight = parseFloat(weightInput.replace(',', '.'));
    var height = parseFloat(heightInput.replace(',', '.'));

    // Verifica se os valores de peso e altura são válidos
    if (!isNaN(weight) && !isNaN(height) && weight > 0 && height > 0) {
        // Converte altura para metros se estiver em centímetros
        if (height > 100) {
            height = height / 100;
        }

        // Calcula o IMC usando a fórmula e multiplica por 703
        var finalBmi = (weight / (height * height)) * 703;

        // Define o valor do campo de resultado do IMC com duas casas decimais
        document.bmiCalc.bmi.value = new Number(finalBmi).toFixed(2);

        // Determina a categoria do IMC e define o significado correspondente
        if (finalBmi < 18.5) {
            document.bmiCalc.meaning.value = "IMC Abaixo do Peso";
        } else if (finalBmi < 25) {
            document.bmiCalc.meaning.value = "IMC Normal";
        } else if (finalBmi < 30) {
            document.bmiCalc.meaning.value = "IMC Sobrepeso";
        } else if (finalBmi < 35) {
            document.bmiCalc.meaning.value = "IMC Obeso";
        } else {
            document.bmiCalc.meaning.value = "IMC Extremamente Obeso";
        }
    } else {
        // Exibe um alerta se os campos não estiverem preenchidos ou se os valores não forem válidos
        alert("Por favor, insira valores válidos para peso e altura.");
    }
}
