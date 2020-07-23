<template>
  <div>
    <GigDetails v-show="gigShowState" @detailsEvent="toggleGigShowState"></GigDetails>

    <GigSalary v-show="!gigShowState" @salaryEvent="toggleGigShowState"></GigSalary>
  </div>
  <!-- :id="id"
      :role="role"
      :company="company"
      :country="country"
      :state="state"
      :tags="tags"
  :address="address"-->

  <!-- :min_salary="min_salary"
  :max_salary="max_salary"-->
</template>


<script>
import GigDetails from "./GigDetails.vue";
import GigSalary from "./GigSalary.vue";

export default {
  components: { GigDetails, GigSalary },
  data() {
    return {
      //   id: 0,
      //   min_salary: 0,
      //   max_salary: 0,
      //   role: "",
      //   company: "",
      //   country: "",
      //   state: "",
      //   tags: "",
      //   address: "",
      gigShowState: true
    };
  },
  methods: {
    toggleGigShowState() {
      this.gigShowState = !this.gigShowState;
    }
  }
};
</script>

<style>
</style>