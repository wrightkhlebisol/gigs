<template>
  <div class="rounded-lg shadow-lg bg-white p-12 mb-4">
    <h1 class="text-md mb-3 text-gray-700">Salary</h1>
    <div class="flex justify-between mb-16">
      <div class="w-1/2 mr-2">
        <input
          type="number"
          min="0"
          class="border-2 border-gray-200 rounded-lg p-2 w-full"
          name="min_salary"
          placeholder="Minimum"
          v-model="min_salary"
        />
      </div>
      <div class="w-1/2">
        <input
          type="number"
          min="0"
          class="border-2 border-gray-200 rounded-lg p-2 w-full"
          name="max_salary"
          placeholder="Maximum"
          v-model="max_salary"
        />
      </div>
    </div>

    <div class="my-20 mb-10" style="text-align: right;">
      <a href="#" @click.prevent="$emit('salaryEvent')" class="mr-5">Back</a>
      <button
        class="text-white text-xs bg-purple-900 rounded-md py-3 px-8"
        @click="createGig"
      >Add gig</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      min_salary: 0,
      max_salary: 0
    };
  },
  methods: {
    createGig() {
      this.createStatus = ". . . Creating Gig";
      axios
        .post("/gig", {
          company: localStorage.getItem("company"),
          role: localStorage.getItem("role"),
          country: localStorage.getItem("country"),
          tags: localStorage.getItem("tags"),
          state: localStorage.getItem("state"),
          address: localStorage.getItem("address"),
          min_salary: this.min_salary,
          max_salary: this.max_salary
        })
        .then(res => {
          this.createStatus = "Gig Created !!!";
          location.href = "/";
        })
        .catch(err => {
          this.createStatus = "Gig Creation Failed, Check the form !!!";
        });
    }
  }
};
</script>

<style>
</style>