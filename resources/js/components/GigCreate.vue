<template>
  <div>
    <GigDetails v-show="gigShowState" @detailsEvent="toggleGigShowState"></GigDetails>

    <GigSalary v-show="!gigShowState" @salaryEvent="toggleGigShowState"></GigSalary>
  </div>
</template>


<script>
import GigDetails from "./GigDetails.vue";
import GigSalary from "./GigSalary.vue";

export default {
  components: { GigDetails, GigSalary },
  data() {
    return {
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