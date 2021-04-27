<template>
    <div class="card col-lg-12 col-md-12 col-sm-12 mt-2 shadow p-0">
        <div class="card-header btn text-left" @click="showDetails = !showDetails">
            <a class="font-weight-bold" target="__blank" :href="depend.source.url">{{ depend.name }}</a>
            
            <div class="badges float-right">
                <span class="badge badge-warning mr-1">
                    <i class="fas fa-window-restore"></i>
                    {{ depend.version }}
                </span>

                <span class="badge badge-success mr-1">
                    {{ depend.type }}
                </span>

                <span v-if="depend.abandoned" class="badge badge-danger mr-1">
                    <i class="fa fa-close"></i>
                    abandoned
                </span>

                <a :href="depend.dist.url" class="badge badge-info mr-1"> 
                    <i class="fas fa-download mr-2"></i> 
                    <small>{{ depend.dist.type }}</small> 
                </a>
            </div>
        </div>

        <div class="card-body" v-if="showDetails">
            <div>
                <!-- package description -->
                <p>{{ depend.description }}</p>
            </div>
            
            <hr class="hr">
            <div>
                <h5>Authors</h5>
                <div v-bind:key="author.name" v-for="author in depend.authors">
                    <small>
                        <i class="fa fa-user mr-1"></i>
                        {{ author.name }}
                        <a v-if="author.email" :href="'mailto:'+author.email">
                            ( {{ author.email }} )
                        </a>
                    </small>
                </div>
            </div>
            <hr class="hr">
            <span> <i class="fa fa-calendar mr-2"></i> <small>{{ depend.time }}</small> </span>
        </div>
    </div>
</template>

<script>
export default {
    name:"Package",
    props:['depend'],
    data:function(){
        return {
            showDetails:false,
        }
    }
}
</script>

<style scoped>

</style>