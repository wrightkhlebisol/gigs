<template>
  <div class="rounded-lg shadow-lg bg-white p-12 mb-4">
    <div class="mb-4">
      <div class="flex justify-between">
        <div class="w-1/2 mr-2">
          <label for="role">Role</label>
          <input
            type="text"
            name="role"
            class="border-2 border-gray-200 rounded-lg p-2 w-full block mt-3"
            id="role"
            placeholder="e.g Product Designer"
            v-model="role"
          />
        </div>
        <div class="w-1/2">
          <label for="company">Company</label>
          <input
            id="company"
            name="company"
            class="border-2 border-gray-200 rounded-lg p-2 w-full block mt-3"
            type="text"
            placeholder="e.g Krystal Digital"
            v-model="company"
          />
        </div>
      </div>
    </div>

    <div class="mb-4">
      <p>Location</p>
      <div class="flex justify-between">
        <input
          type="text"
          class="border-2 border-gray-200 rounded-lg p-2 w-full mr-2 mt-3"
          name="country"
          placeholder="Country"
          v-model="country"
        />
        <input
          type="text"
          class="border-2 border-gray-200 rounded-lg p-2 w-full mt-3"
          name="state"
          placeholder="State/Region"
          v-model="state"
        />
      </div>
      <div>
        <input
          type="text"
          class="border-2 border-gray-200 rounded-lg p-2 w-full mt-3"
          name="address"
          placeholder="Address"
          v-model="address"
        />
      </div>
    </div>

    <div class="mb-4">
      <p>Add Tags</p>
      <div>
        <input
          type="text"
          class="border-2 border-gray-200 rounded-lg p-2 w-full my-3"
          name="tags"
          placeholder="Tags"
          v-model="tags"
        />
      </div>
      <span>
        Suggested tags:
        <span class="underline">full time</span>
        <span class="underline">Contract</span>
        <span class="underline">freelance</span>
      </span>
    </div>

    <div class="my-20 mb-10" style="text-align: right;">
      <a href="/" class="mr-5">Cancel</a>
      <button
        class="text-white text-xs bg-purple-900 rounded-md py-3 px-8"
        @click="$emit('detailsEvent'); storeTempVars();"
      >Continue</button>
    </div>
  </div>
</template>

<script>
export default {
  //   props: {
  //     id: 0,
  //     role: "",
  //     company: "",
  //     country: "",
  //     state: "",
  //     tags: "",
  //     address: ""
  //   }
  data() {
    return {
      id: 0,
      role: "",
      company: "",
      country: "",
      state: "",
      tags: "",
      address: ""
    };
  },
  methods: {
    storeTempVars() {
      localStorage.setItem("role", this.role);
      localStorage.setItem("company", this.company);
      localStorage.setItem("country", this.country);
      localStorage.setItem("state", this.state);
      localStorage.setItem("address", this.address);
      localStorage.setItem("tags", this.tags);
    }
  }
};
</script>

<style>
</style>