<template>
    <div class="d-flex flex-wrap justify-content-center">

        <div class="card col-lg-4 col-md-6 col-sm-12">
            <div class="card-body">
          
              Only <strong>.card-body</strong>
          
            </div>
        </div>

        <div class="card col-lg-4 col-md-6 col-sm-12">
            <div class="card-body">
          
              Only <strong>.card-body</strong>
          
            </div>
        </div>

        <div class="card col-lg-4 col-md-6 col-sm-12">
            <div class="card-body">
          
              Only <strong>.card-body</strong>
          
            </div>
        </div>

    </div>
</template>

<script>
import { Bar } from 'vue-chartjs'

export default {
  extends: Bar,
  name:"Charts",
  data:function(){
    return {
      data:[
        1,2,3,43,54,465,75,56
      ],
    }
  },
  mounted () {
    this.renderChart(this.data)
  }
}
</script>

<style scoped>

</style>