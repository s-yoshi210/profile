<template>
<div>
  <the-header></the-header>

  <main class="profile mt-4 mt-md-5">
    <div class="container text-center">
      <h1>プロフィール</h1>
      <div class="row justify-content-center mt-md-5">
        <div class="col-md-5">
          <img v-bind:src="picture" class="rounded-circle" alt="">
        </div>
        <div class="col-md-5 mt-3 text-left">
          <div class="row">
            <div class="col-md-12 minh-300">
              <p>
                  {{ content }}
              </p>
            </div>
            <div class="col-md-12">
              <table class="table text-center">
                <tr>
                  <th>GitHub</th>
                  <td><a v-bind:href="git_url">{{ git_account }}</a></td>
                </tr>
                <tr>
                  <th>Twitter</th>
                  <td><a v-bind:href="twitter_url">{{ twitter_account }}</a></td>
                </tr>
                <tr>
                  <th>Qiita</th>
                  <td><a v-bind:href="qiita_url">{{ qiita_account }}</a></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <the-footer></the-footer>

</div>
</template>

<script>
import TheHeader from "../layout/TheHeader";
import TheFooter from "../layout/TheFooter";

export default {
  components: {
      TheHeader,
      TheFooter,
  },
  data() {
    return {
      picture: '',
      content: '',
      git_url: '',
      git_account: '',
      twitter_url: '',
      twitter_account: '',
      qiita_url: '',
      qiita_account: ''
    }
  },
  mounted() {
    this.$http.get("/api/profile").then(response => {
      this.picture = response.data.picture;
      this.content = response.data.content;
      this.git_url = response.data.git_url;
      this.git_account = response.data.git_account;
      this.twitter_url = response.data.twitter_url;
      this.twitter_account = response.data.twitter_account;
      this.qiita_url = response.data.qiita_url;
      this.qiita_account = response.data.qiita_account;
    });
  }
};
</script>
