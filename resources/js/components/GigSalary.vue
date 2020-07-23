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
        />
      </div>
      <div class="w-1/2">
        <input
          type="number"
          min="0"
          class="border-2 border-gray-200 rounded-lg p-2 w-full"
          name="max_salary"
          placeholder="Maximum"
        />
      </div>
    </div>

    <div class="mb-4" style="text-align: right;">
      <a href="/" class="mr-5">Back</a>
      <button class="text-white text-xs bg-purple-900 rounded-md py-3 px-8">Add gig</button>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>