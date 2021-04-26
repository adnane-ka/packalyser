<template>
    <div>
        <!-- header -->
        <Header></Header>
        
        <!-- cards -->
        <div class="d-flex flex-wrap mt-2 mb-2 p-4" v-if="cards">
            <Card :title="'dependencies'" :shiffre="cards.depends" :icon="'fa-cubes'" ></Card>
            <Card :title="'dev dependencies'" :shiffre="cards.dev_depends" :icon="'fa-code'" ></Card>
            <Card :title="'libraries'" :shiffre="cards.libraries" :icon="'fa-book'" ></Card>
            <Card :title="'projects'" :shiffre="cards.projects" :icon="'fa-project-diagram'" ></Card>
            <Card :title="'metapackages'" :shiffre="cards.metapackages" :icon="'fa-box'" ></Card>
            <Card :title="'composer plugins'" :shiffre="cards.composer_plugins" :icon="'fa-terminal'" ></Card>
        </div>
        
        <!-- packages -->
        <div class="d-flex flex-wrap">
            <div class="col-lg-6 packages_column" v-if="packages['require']">
                <h3 class="mb-3"><strong>Dependencies</strong></h3>
                <!-- requirements -->
                <Package :depend="depend" v-bind:key="depend.name" v-for="depend in packages['require']"></Package>
            </div>

            <div class="col-lg-6 packages_column" v-if="packages['require-dev']">
                <h3 class="mb-3"><strong>Dev Dependencies</strong></h3>
                <!-- dev requirements -->
                <Package :depend="depend" v-bind:key="depend.name" v-for="depend in packages['require-dev']"></Package>
            </div>
        </div>

    </div>
</template>

<script>
import Header from './Header';
//import Charts from './Charts';
import Package from './Package';
import Card from './Card';


export default {
    name:"MainPage",

    data:function(){

        return {
            packages:[],
            cards:'',
        }

    },

    components:{
        Header,
        //Charts,
        Package,
        Card
    },

    mounted:function(){
        this.loadPackages();
        this.loadStats();
    },
    methods:{

        loadPackages(){
            axios.get('/package_simplifier/api/get_packages').then(response => {
                if(response.status == 200){
                    this.packages = response.data;
                }  
            })
        },

        loadStats(){
            axios.get('/package_simplifier/api/get_stats').then(response => {
                if(response.status == 200){
                    this.cards = response.data;
                }  
            })
        }

    }
}
</script>

<style scoped>

</style>