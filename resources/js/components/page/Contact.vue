<template>
<div>
  <the-header></the-header>

  <!-- メイン -->
  <main class="contact mt-4">
    <div class="container">
      <h1 class="mb-4">お問い合わせ</h1>
      <div class="row justify-content-center">
        <div class="col-md-9 py-4">
          <form @submit.prevent="postInquiry" v-show="!emailSent">
            <div class="form-group row mb-3">
              <label for="inputName" class="col-md-3 col-form-label text-left text-md-right">お名前</label>
              <div class="col-md-9">
                <input v-model.trim="fullName" type="text" class="form-control" id="inputName" required>
                <div class="error_message" v-html="errors.full_name"></div>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="inputMailAddress" class="col-md-3 col-form-label text-left text-md-right">メールアドレス</label>
              <div class="col-md-9">
                <input v-model.trim="email" type="email" class="form-control" id="inputMailAddress" required>
                <div class="error_message" v-html="errors.email"></div>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="inputContent" class="col-md-3 col-form-label text-left text-md-right">お問い合わせ内容</label>
              <div class="col-md-9">
                <textarea v-model.trim="iquiry" class="form-control" id="inputContent" cols="30" rows="7" placeholder="お問い合わせ内容をご入力下さい。" required></textarea>
                <div class="error_message" v-html="errors.iquiry"></div>
              </div>
            </div>
            <button class="btn btn-success btn-lg my-1">送信</button>
          </form>
          <div class="emailSentMessage" v-show="emailSent">メッセージが送信されました。ありがとうございました。</div>
        </div>
      </div>
      <mail-loading v-show="mailLoading"></mail-loading>
    </div>
  </main>

  <the-footer></the-footer>

</div>
</template>

<script>
  import TheHeader from "../layout/TheHeader";
  import TheFooter from "../layout/TheFooter";
  import MailLoading from "../MailLoading";

  export default {
    components: {
        TheHeader,
        TheFooter,
        MailLoading
    },
    data() {
      return {
        errors: [],
        emailSent: false,
        mailLoading: false,
        fullName: '',
        email: '',
        iquiry: ''
      }
    },
    methods: {
      postInquiry() {
        if(!confirm('送信します。よろしいですか？')) {
          return;
        }

        const url = '/api/mail/inquiry';
        const self = this;

        var params = {
          full_name: self.fullName,
          email: self.email,
          iquiry: self.iquiry
        };

        self.mailLoading = true;

        this.$http.post(url, params)
          .then(res => {
            if(res.data.result) {
              // メール送信完了画面に遷移する
              self.mailLoading = false;
              self.emailSent = true;
            }
          })
          .catch(e => {
            var errors = {};
            for(var key in e.response.data.errors) {
              errors[key] = e.response.data.errors[key].join('<br>');
            }
            self.errors = errors;
          });
      }
    }
  };
</script>
