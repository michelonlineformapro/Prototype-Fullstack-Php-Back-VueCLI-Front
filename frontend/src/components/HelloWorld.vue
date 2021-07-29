<template>
  <div class="hello">
    <h3 class="title is-3 has-text-centered has-text-danger">NOS PRODUITS</h3>
    <ul>
      <li v-for="produit in produits" v-bind:key="produit.id">
        {{ produit.title }}
        <img :src="produit.image" width="25%" />
        <p>Description</p>
        <br />
        <p>{{produit.description}}</p>
        <br />
        <p>PRIX : {{produit.price}} €</p>
      </li>
    </ul>
  </div>
</template>

<script>

//Import de la classe et ses methodes services/ProduitDataService.js
import ProduitsDatasServices from "../../services/ProduitsDatasServices";
export default {
  name: 'HelloWorld',

  data(){
    return{
      //Tableau vide de produits
      produits:[],
    }
  },

  methods:{
    afficherProduits(){
      //Appel de la classe de services (requète http axios)
      ProduitsDatasServices.recupererTousProduits()
      //Promesse
      .then(response => {
        this.produits = response.data
        console.log(response.data)
      })
          //Sinon on declenche une erreur
      .catch(err => {
        console.log("Erreur ici = " + err)
      })
    }
  },

  //Cycle de vie VueJs
  mounted() {
    this.afficherProduits()
  }
}
</script>


<style scoped>

</style>
