const axios = require('axios');
const token = document.querySelector('meta[name="csrf"]').getAttribute('content');

let scss = {
    build: {
        base: {

        },
        util: {

        },
        components: {

        }
    },
    variables: {


    }
};



document.addEventListener('DOMContentLoaded', () => {

    let json = JSON.stringify(scss);
    
    document.querySelectorAll('.component').forEach((element) => {
        element.addEventListener('click', () => {
            $type = element.getAttribute('data-type');
            let id = element.getAttribute('id');

            element.checked == true ? scss.build.$type = true : scss.build.type = false;
            console.log(scss.build);
            
        });
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





// let scss = {
//     build: {
//         base: {
//             normalize: false,
//         },
//         util: {
//             position: false,
//         },
//         components: {
//             alerts: true,
//             breadcrumb: true,
//             card: true,
    
//         }
//     },
//     variables: {


//     }
// };