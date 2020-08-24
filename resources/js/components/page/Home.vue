<template>
<div>
  <the-header></the-header>

  <main class="profile mt-4 mt-md-5">
    <div class="container text-center">
      <p class="page-title">プロフィール</p>
      <div class="row justify-content-center mt-md-5">
        <div class="col-md-5">
          <img :src="profile.picture" class="rounded-circle" alt="">
        </div>
        <div class="col-md-5 mt-3 text-left">
          <div class="row">
            <div class="col-md-12 minh-300 space-pre">{{ profile.content }}</div>
            <div class="col-md-12">
              <table class="table text-center">
                <tr>
                  <th>GitHub</th>
                  <td><a target="_blank" rel="noopener" :href="profile.git_url">{{ profile.git_account }}</a></td>
                </tr>
                <tr>
                  <th>Twitter</th>
                  <td><a target="_blank" rel="noopener" :href="profile.twitter_url">{{ profile.twitter_account }}</a></td>
                </tr>
                <tr>
                  <th>Qiita</th>
                  <td><a target="_blank" rel="noopener" :href="profile.qiita_url">{{ profile.qiita_account }}</a></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <loading v-show="loading"></loading>
    </div>
  </main>

  <the-footer></the-footer>

</div>
</template>

<script>
import TheHeader from "../layout/TheHeader";
import TheFooter from "../layout/TheFooter";
import Loading from "../Loading"

export default {
  components: {
      TheHeader,
      TheFooter,
      Loading
  },
  data() {
    return {
      profile: [],
      loading: true
    }
  },
  created() {
    this.$http.get("/api/profile").then(response => {
      this.profile = response.data;
      this.loading = false;
    });
  }
};
</script>
