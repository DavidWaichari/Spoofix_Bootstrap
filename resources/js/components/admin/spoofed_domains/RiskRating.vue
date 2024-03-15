<template>
    <div class="card bg-white">
        <div class="card-header">
        <h3 class="card-title">Risk Rating</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body" style="padding: 2px;">
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Webflow Rating
                </p>
                <p class="w-100 m-1">     
                  High
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Domain Rating
                </p>
                <p class="w-100 m-1">
                  High                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Interface Rating
                </p>
                <p class="w-100 m-1">
                  High
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Age
                </p>
                <p class="w-100 m-1">
                  1 year
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  IP Adress
                </p>
                <p class="w-100 m-1">
                  216.245.197.46
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Status
                </p>
                <p class="w-100 m-1">
                  <button type="button" class="btn btn-danger  ml-2 rounded-button btn-sm">
                    Active
                  </button>
                </p>
              </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</template>

<style scoped>
.card{
  margin-top: 0px;
  margin-bottom: 5px;
  margin-left: 0px;
}
.card-header{
  display: flex; 
  padding: 4px
}
</style>