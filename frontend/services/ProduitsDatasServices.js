import http from '../http-config';

class ProduitsDatasServices{

    //Recuperer les produits
    recupererTousProduits(){
        return http.get("/")
    }
}

export default new ProduitsDatasServices();