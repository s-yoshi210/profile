<template>
<div>
  <the-header></the-header>

  <main class="development mt-4">
    <div class="container text-center">
      <p class="page-title mb-4">個人開発成果物</p>
      <div class="row justify-content-center">
        <div class="col-md-10 py-4" v-for="development in developments" :key="development.id">
          <div class="card text-left">
            <div class="card-header bg-success text-white font-weight-bold">
                <i class="far fa-file-code mx-3"></i><span>{{ development.title }}</span>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-2 header font-weight-bold text-center">開発理由</div>
                <div class="col-12 col-md-10 py-3 px-3">
                  <pre>{{ development.reason }}</pre>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-2 header font-weight-bold text-center">内容</div>
                <div class="col-12 col-md-10 py-3 px-2 px-3">
                  <pre>{{ development.content }}</pre>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-2 header font-weight-bold text-center">開発環境</div>
                <div class="col-12 col-md-10 py-3 px-3">
                  <pre>{{ development.development }}</pre>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-2 header font-weight-bold text-center">GitHub</div>
                <div class="col-12 col-md-10 py-3 px-3">
                  <a target="_blank" rel="noopener" :href="development.git_url">こちら</a>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-2 header font-weight-bold text-center">サイト</div>
                <div class="col-12 col-md-10 py-3 px-3">
                  <pre>{{ development.demo }}</pre>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-2 header font-weight-bold py-2 text-center">コメント</div>
                <div class="col-12 col-md-10 py-3 px-3">
                  <pre>{{ development.comment }}</pre>
                </div>
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
      developments: [],
      loading: true
    }
  },
  created() {
    this.$http.get("/api/development").then(response => {
      this.developments = response.data;
      this.loading = false;
    });
  }
};
</script>
