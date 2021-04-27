<template>
    <div class="col-lg-4 p-0 col-md-6 col-sm-12">
        <div class="card m-1">
            <div class="card-body d-flex">
                <strong>{{ title }}</strong>
                <h3 class="ml-auto">
                    <i class="fa mr-2" :class="icon"></i>
                    <strong>{{ shiffre }}</strong>
                </h3>          
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"Card",
    props:['shiffre' ,'icon' ,'title']
}
</script>

<style scoped>

</style>