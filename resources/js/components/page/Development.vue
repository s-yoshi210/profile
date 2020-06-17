<template>
<div>
  <the-header></the-header>

  <main class="development mt-4">
    <div class="container text-center">
      <h1 class="mb-4">個人開発成果物</h1>
      <div class="row justify-content-center">
        <div class="col-md-10 py-4" v-for="development in developments" :key="development.id">
          <div class="card text-left">
            <div class="card-header font-weight-bold">
                <i class="far fa-file-code mx-3"></i><span>{{ development.title }}</span>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <th class="text-center">開発理由</th>
                  <td>{{ development.reason }}</td>
                </tr>
                <tr>
                  <th class="text-center">内容</th>
                  <td>{{ development.content }}</td>
                </tr>
                <tr>
                  <th class="text-center">開発環境</th>
                  <td>{{ development.development }}</td>
                </tr>
                <tr>
                  <th class="text-center">GitHub</th>
                  <td><a :href="development.git_url">こちら</a></td>
                </tr>
                <tr>
                  <th class="text-center">デモサイト</th>
                  <td>{{ development.demo }}</td>
                </tr>
                <tr>
                  <th class="text-center">コメント</th>
                  <td>{{ development.comment }}</td>
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
