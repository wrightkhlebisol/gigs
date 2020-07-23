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
        />
        <input
          type="text"
          class="border-2 border-gray-200 rounded-lg p-2 w-full mt-3"
          name="state"
          placeholder="State/Region"
        />
      </div>
      <div>
        <input
          type="text"
          class="border-2 border-gray-200 rounded-lg p-2 w-full mt-3"
          name="address"
          placeholder="Address"
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
        @click="$emit('detailsEvent')"
      >Continue</button>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    id: 0,
    role: "",
    company: "",
    country: "",
    state: "",
    tags: "",
    address: ""
  }
};
</script>

<style>
</style>