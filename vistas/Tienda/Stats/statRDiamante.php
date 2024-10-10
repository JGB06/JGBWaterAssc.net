<canvas id="AguaRDiamante"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Función para crear el gráfico
function crearGrafico5() {
    // Etiquetas y datos con porcentajes de consumo de agua
    const sectores = ["Agrícola", "Humano"];
    const porcentajes = [85, 4];

    const ctx = document.getElementById('AguaRDiamante');

    return new Chart(ctx, {
        type: 'pie',  // Cambia a 'doughnut' si prefieres un gráfico tipo dona
        data: {
            labels: sectores,
            datasets: [{
                label: 'Consumo de Agua (%)',
                data: porcentajes,
                backgroundColor: [
                    'rgba(18, 230, 32, 0.2)', // Color para "Agrícola"
                    'rgba(18, 113, 230, 0.2)', // Color para "Humano"

                ],
                borderColor: [
                    'rgba(18, 230, 32, 1)', // Borde para "Agrícola"
                    'rgba(18, 113, 230, 1)', // Borde para "Humano"

                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top', // Posición de la leyenda
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw + '%';
                        }
                    }
                }
            }
        }
    });
}

// Variable global para almacenar el gráfico
var miGrafico5;

// Función para manejar el evento de cambio de tamaño de ventana
function manejarCambioDeTamaño() {
    // Destruir el gráfico existente si existe
    if (miGrafico5) {
        miGrafico5.destroy();
    }

    // Crear el nuevo gráfico
    miGrafico5 = crearGrafico5();
}

// Agregar un event listener para el evento 'resize'
window.addEventListener('resize', manejarCambioDeTamaño);

// Inicializar el gráfico al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    miGrafico5 = crearGrafico5();
});
</script>