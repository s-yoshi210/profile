<template>
<div>
  <the-header></the-header>

  <main class="actual_results mt-4">
    <div class="container text-center">
      <p class="page-title mb-4">過去実績</p>
      <div class="row justify-content-center">
        <div class="col-md-10 py-3" v-for="result in actual_results" :key="result.id">
          <div class="card text-left">
            <div class="card-header bg-primary text-white font-weight-bold">
              <i class="fas fa-tasks mx-3"></i><span>{{ result.title }}</span>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-2 header font-weight-bold text-center">案件内容</div>
                <div class="col-12 col-md-10 py-3 px-3 space-pre">{{ result.content }}</div>
              </div>
              <div class="row">
                <div class="col-12 col-md-2 header font-weight-bold text-center">担当業務</div>
                <div class="col-12 col-md-10 py-3 px-3 space-pre">{{ result.job }}</div>
              </div>
              <div class="row">
                <div class="col-12 col-md-2 header font-weight-bold text-center">開発環境</div>
                <div class="col-12 col-md-10 py-3 px-3 space-pre">{{ result.environment }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <Loading v-show="loading"></Loading>
    </div>
  </main>

  <the-footer></the-footer>

</div>
</template>

<script>
import TheHeader from "../layout/TheHeader";
import TheFooter from "../layout/TheFooter";
import Loading from "../Loading";

export default {
  components: {
      TheHeader,
      TheFooter,
      Loading
  },
  data() {
    return {
      actual_results: [],
      loading: true
    }
  },
  created() {
    this.$http.get("/api/actual_result").then(response => {
      this.actual_results = response.data;
      this.loading = false;
    });
  }
};
</script>
