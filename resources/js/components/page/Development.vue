<template>
<div>
  <the-header></the-header>

  <main class="development mt-4">
    <div class="container text-center">
      <p class="page-title mb-4">個人開発成果物</p>
      <div class="row justify-content-center">
        <div class="col-md-10 py-4" v-for="development in developments" :key="development.id">
          <div class="card text-left">
            <div class="card-header font-weight-bold">
                <i class="far fa-file-code mx-3"></i><span>{{ development.title }}</span>
            </div>
            <div class="card-body table-responsive">
              <table class="table">
                <tr>
                  <th class="text-center">開発理由</th>
                  <td><pre>{{ development.reason }}</pre></td>
                </tr>
                <tr>
                  <th class="text-center">内容</th>
                  <td><pre>{{ development.content }}</pre></td>
                </tr>
                <tr>
                  <th class="text-center">開発環境</th>
                  <td><pre>{{ development.development }}</pre></td>
                </tr>
                <tr>
                  <th class="text-center">GitHub</th>
                  <td><a target="_blank" rel="noopener" :href="development.git_url">こちら</a></td>
                </tr>
                <tr>
                  <th class="text-center">デモサイト</th>
                  <td><pre>{{ development.demo }}</pre></td>
                </tr>
                <tr>
                  <th class="text-center">コメント</th>
                  <td><pre>{{ development.comment }}</pre></td>
                </tr>
              </table>
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
