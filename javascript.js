window.addEventListener('load', () => {

    let long
    let lati

    let temp_valor = document.getElementById('Temperatura-Valor')
    let temp_descr = document.getElementById('Temperatura-Descripcion')

    let ubicacion = document.getElementById('Ubicacion')
    let humedad = document.getElementById('Humedad')

    let icoAnimado = document.getElementById('icono-clima')

    //Fecha
    let hoy = new Date()
    let fecha = document.getElementById('Fecha')
    const opciones = { weekday: 'short', day: 'numeric', month: 'short' , year: 'numeric'};
    
    let date = hoy.toLocaleDateString('CL-es',opciones)
    fecha.textContent = date

    //Hora
    let hour = document.getElementById('Hora')
    let Hour = hoy.getHours() + ':' + hoy.getMinutes()
    hour.textContent = Hour;

    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition( posicion => {

            long = posicion.coords.longitude
            lati = posicion.coords.latitude
            apk = "a44784e329900138c7a11fbc080e385f"


            const url ='https://api.openweathermap.org/data/2.5/weather?&lang=es&lat='+ lati + '&lon=' + long + '&appid=' + apk + '&units=metric';

            console.log(url);

            fetch(url)
                .then( response => {return response.json() })
                .then( data => {

                    //Temperatura
                    let temp = data.main.temp
                    temp_valor.textContent = Math.round(temp) + ' °C'
                   
                   //Descripción
                    console.log(data.weather[0].description)
                    let desc = data.weather[0].description
                    temp_descr.textContent = desc.toUpperCase()

                    //Ubicación
                    ubicacion.textContent = data.name

                    //para pais console.log(data.sys.country)

                    //Humedad
                    humedad.textContent = data.main.humidity + '%'

                    //Icono Statico
                    /*console.log(data.weather[0].icon)
                    let iconCode = data.weather[0].icon
                    const urlicon = 'http://openweathermap.org/img/wn/' + iconCode + '.png';
                    console.log(urlicon)*/

                    //iconos animados
                    switch(data.weather[0].main) {
                        case 'Thunderstorm':
                            icoAnimado.src='animated/thunder.svg'
                            console.log('TORMENTA');
                            break;
                        case 'Drizzle':
                            icoAnimado.src='animated/rainy-2.svg'
                            console.log('LLOVIZNA');
                            break;
                        case 'Rain':
                            icoAnimado.src='animated/rainy-7.svg'
                            console.log('LLUVIA');
                            break;
                        case 'Snow':
                            icoAnimado.src='animated/snowy-6.svg'
                            console.log('NIEVE');
                        break;                        
                        case 'Clear':
                            if(hoy.getHours()<19 && hoy.getHours()>5){
                                icoAnimado.src = 'animated/day.svg'
                                console.log('LIMPIO')
                                break;

                            }else{
                                icoAnimado.src = 'animated/night.svg'
                                console.log('LIMPIO')
                                break;
                            }
                        case 'Tornado':
                            icoAnimado.src='animated/tornado.svg'
                            console.log('TORNADO');
                            break;  
                        case 'Ash':
                            icoAnimado.src='animated/ASH.svg'
                            console.log('TORNADO');
                            break;  
                        
                        case 'Fog' || 'Mist' || 'Haze':
                            icoAnimado.src='animated/niebla.svg'
                            console.log('NIEBLA');
                            break;  

                        case 'Clouds':
                            if(hoy.getHours()<19 && hoy.getHours()>5){
                                icoAnimado.src = 'animated/cloudy-day-1.svg'
                                console.log('NUBES')
                                break;

                            }else{
                                icoAnimado.src = 'animated/cloudy-night-1.svg'
                                console.log('NUBES')
                                break;
                            }
                        default:
                            icoAnimado.src='animated/cloudy-day-1.svg'
                            console.log('por defecto');

                    }
                })

                .catch( error => {
                    console.log(error)
                })
        })
    }
})