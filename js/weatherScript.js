 (document.onload = function() {
    const Http = new XMLHttpRequest();
    const url = "http://api.openweathermap.org/data/2.5/weather?lat=" + 50.1791 + "&lon=" + -5.2885 + "&APPID=c8164fa3b1c605feebb21a089292ca87";
    Http.open("Get", url);
    Http.send();

    Http.onreadystatechange = (e) => {
        const weather = JSON.parse(Http.responseText);
        const degrees = Math.round(weather.main.temp - 273.15).toString();
        const foreDescription = weather.weather[0].description;
        const conditions = 'https://openweathermap.org/img/w/' + weather.weather[0].icon + '.png';
        console.log(weather);


        const temp = document.querySelectorAll('.temp')[0];
        temp.innerHTML = degrees + '&#8451';

        const forecast = document.querySelectorAll('.forecast')[0];
        forecast.innerHTML = foreDescription.charAt(0).toUpperCase() + foreDescription.substring(1, foreDescription.length);

        const weatherImage = document.querySelectorAll('.weatherImage')[0];
        weatherImage.setAttribute('src', conditions);
        
        //brochure cookie
        let orderString = '';
        const checkbox = document.getElementsByClassName('brochureContainer');
         checkbox[0].addEventListener('change', (e)=> {
         
          if(e.target.checked) {
            if(orderString === '') {
               orderString += e.target.id;
            } 
            else{
                orderString += ', ' + e.target.id;
            }
              console.log(orderString)
          }
          
       
       
          
        
     document.cookie = [orderString];
             
      
      })
      
    }
    }())