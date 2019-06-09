const axios = require('axios');
const token = document.querySelector('meta[name="csrf"]').getAttribute('content');

document.addEventListener('DOMContentLoaded', () => {

    let scss = {
        build: {
            base: {
                normalize: false,
            },
            util: {
                position: false,
            },
            components: {
                alerts: true,
                breadcrumb: true,
                card: true,
        
            }
        },
        variables: {


        }
    };

    let json = JSON.stringify(scss);
    
    document.querySelectorAll('.component').forEach((element) => {
        console.log(element.checked);

    });

    document.querySelector('.build-css').addEventListener('click', () => {

        axios.post('/builder/ajax/render', {
            _token: token, 
            scss
        })
        .then(function (response) {
            //console.log(response);
            const id = response.data
            const url = '/builder/download/' + id;
            const link = document.createElement('a');
            link.href = url;
            document.body.appendChild(link);
            link.click();
        })
        .catch(function (error) {
            console.log(error);
        });
        

    });


}); //End content loaded