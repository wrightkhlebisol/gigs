<template>
  <table class="w-full text-gray-600">
    <thead class="py-2 text-xs font-light">
      <tr class="items-start">
        <th class="text-left py-5"></th>
        <th class="text-left py-5">Role</th>
        <th class="text-left py-5">Company</th>
        <th class="text-left py-5">
          Date
          <img src="img/Group288.svg" class="h-4 w-4 inline" />
        </th>
        <th class="text-left py-5">
          Salary ($)
          <img src="img/Group288.svg" class="h-4 w-4 inline" />
        </th>
        <th class="text-left py-5"></th>
      </tr>
    </thead>

    <tbody class="font-medium">
      <tr
        class="items-start rounded-full bg-white text-gray-800"
        v-for="gig in allGigs"
        :key="gig.id"
      >
        <td class="py-2 pl-5">
          <input type="checkbox" name :value="gig.id" :id="`gig_${gig.id}`" />
        </td>
        <td class="py-2">{{gig.role}}</td>
        <td class="py-2">{{gig.company}}</td>
        <td class="py-2">{{gig.created_at}}</td>
        <td class="py-2">{{gig.min_salary}} - {{gig.max_salary}}</td>
        <td class="py-2 text-right pr-2">
          <button
            type="submit"
            class="bg-yellow-200 text-yellow-600 text-xs px-8 py-1 rounded-lg"
            @click="deleteGig(gig.id)"
          >Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  data() {
    return {
      allGigs: []
    };
  },
  methods: {
    getAllGigs() {
      axios
        .get("/gigs")
        .then(data => {
          this.allGigs = data.data;
        })
        .catch();
    },
    deleteGig(gigId) {
      if (confirm(`Are you sure you want to delete gig ${gigId}`)) {
        axios
          .delete(`/gig/${gigId}`)
          .then(data => {
            this.getAllGigs();
          })
          .catch();
      }
    }
  },
  mounted() {
    this.getAllGigs();
  }
};
</script>