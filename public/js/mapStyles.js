const mapStyles = [
    // Estiliza la geometría general del mapa para usar un color de fondo blanco.
    // Esto proporciona una base neutra que puede ayudar a que otros colores resalten más.
    {
        elementType: 'geometry',
        stylers: [{
            color: '#ffffff'
        }]
    },
    // Aumenta el contraste de las etiquetas de texto mediante un trazo blanco.
    // Esto puede hacer que el texto sea más legible contra una variedad de fondos.
    {
        elementType: 'labels.text.stroke',
        stylers: [{
            color: '#ffffff'
        }]
    },
    // Establece el color del texto de las etiquetas a un gris oscuro (#424242).
    // Proporciona un contraste sólido sin ser demasiado duro, manteniendo la legibilidad.
    {
        elementType: 'labels.text.fill',
        stylers: [{
            color: '#424242'
        }]
    },
    // Personaliza las etiquetas de texto de las localidades administrativas
    // para que coincidan con el estilo general de texto del mapa.
    {
        featureType: 'administrative.locality',
        elementType: 'labels.text.fill',
        stylers: [{
            color: '#424242'
        }]
    },
    // Oculta las etiquetas de texto de los puntos de interés (POI).
    // Esto reduce el desorden visual, permitiendo que los usuarios se centren en elementos más importantes.
    {
        featureType: 'poi',
        elementType: 'labels.text.fill',
        stylers: [{
            visibility: 'off'
        }]
    },
        // Añade esta nueva regla para ocultar los iconos de los puntos de interés.
        {
            featureType: 'poi',
            elementType: 'labels.icon',
            stylers: [{
                visibility: 'off'
            }]
        },
    // Personaliza el color de las carreteras para un azul claro (#add8e6).
    // Esto puede ayudar a mejorar la visualización de las vías sin dominar el diseño general del mapa.
    {
        featureType: 'road',
        elementType: 'geometry',
        stylers: [{
            color: '#add8e6'
        }]
    },
    // Define el color del trazo de las carreteras a un azul más intenso (#0000ff).
    // Aumenta la distinción de las vías principales frente a otras características del mapa.
    {
        featureType: 'road',
        elementType: 'geometry.stroke',
        stylers: [{
            color: '#0000ff'
        }]
    },
    // Estiliza el color del texto de las etiquetas de las carreteras para mantener la coherencia
    // con el esquema de color general del texto en el mapa.
    {
        featureType: 'road',
        elementType: 'labels.text.fill',
        stylers: [{
            color: '#424242'
        }]
    },
    // Aumenta la visibilidad de las etiquetas de las carreteras añadiendo un trazo blanco más grueso.
    // Esto puede hacer que las etiquetas sean más legibles sobre fondos complejos o coloridos.
    {
        featureType: 'road',
        elementType: 'labels.text.stroke',
        stylers: [{
            color: '#FFFFFF'
        }, {
            weight: 2
        }]
    },
    // Cambia el color de la geometría del agua a un gris claro (#dcdcdc).
    // Ofrece una representación más sutil de cuerpos de agua, integrándose suavemente con el diseño general.
    {
        featureType: 'water',
        elementType: 'geometry',
        stylers: [{
            color: '#dcdcdc'
        }]
    },
    // Estiliza el color del texto de las etiquetas sobre el agua para que coincida con el color del agua.
    // Mantiene la legibilidad mientras se integra visualmente con la representación del agua.
    {
        featureType: 'water',
        elementType: 'labels.text.fill',
        stylers: [{
            color: '#dcdcdc'
        }]
    }
];
