<template>
<div>
  <the-header></the-header>

  <main class="skill my-4">
    <div class="container text-center">
      <h1 class="mb-4">スキルセット</h1>
      <div class="row justify-content-center">
        <div class="col-md-6 py-3" v-for="category in skills" :key="category.id">
          <div class="card">
            <div class="card-header text-white font-weight-bold" :class='`bg-${category.color}`'>
              <i class="fas fa-desktop mr-3"></i><span>{{ category.categorie }}</span>
            </div>
            <div class="card-body">
              <p>{{ category.comment }}</p>
              <table class="table table-borderless">
                <thead>
                <tr>
                  <th scope="col">技術</th>
                  <th scope="col">経験年数</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="skill in category.skills" :key="skill.id">
                  <td>{{ skill.technology }}</td>
                  <td>{{ skill.years }}</td>
                </tr>
                </tbody>
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
import TheHeader from "../layout/TheHeader"
import TheFooter from "../layout/TheFooter"
import Loading from "../Loading"

export default {
  components: {
      TheHeader,
      TheFooter,
      Loading
  },
  data() {
    return {
      skills :[],
      loading: true
    };
  },
  created() {
    this.$http.get("/api/skill").then(response => {
      this.skills = response.data;
      this.loading = false;
    });
  }
};
</script>
