import axios from 'axios';

export default axios.create({
    baseURL: "http://localhost/sass-php/backend/views/produits_datas/produits.php",
    headers:{
        "Content-type": "application/json"
    }
})