<template>
  <div class="w-full relative">
    <table class="w-full text-gray-600">
      <div
        class="w-2/3 h-full bg-gray-600 top-0 left-0 absolute"
        style="margin-left: 20%;"
        v-show="updateModalState"
      >
        <div class="opacity-100 m-20 p-20 bg-white rounded-md shadow-sm">
          <div class="mb-4">
            <a href="#" @click="toggleModalState()" class="mr-5">Cancel</a>
          </div>
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

          <h1 class="text-md mb-3 text-gray-700">Salary</h1>

          <div class="flex justify-between mb-4">
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
            <a href="#" @click="toggleModalState()" class="mr-5">Cancel</a>
            <button
              class="text-white text-xs bg-purple-900 rounded-md py-3 px-8"
              @click="updateGig"
            >Update</button>
          </div>
        </div>
      </div>
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
          class="items-start rounded-full bg-white text-gray-700"
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
              class="bg-green-200 text-green-600 text-xs px-8 py-1 rounded-lg"
              @click="toggleModalState(gig.id)"
            >Update</button>

            <button
              type="submit"
              class="bg-yellow-200 text-yellow-600 text-xs px-8 py-1 rounded-lg"
              @click="deleteGig(gig.id)"
            >Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      allGigs: [],
      updateModalState: false,
      role: "",
      company: "",
      state: "",
      country: "",
      address: "",
      tags: "",
      min_salary: 0,
      max_salary: 0,
      id: 0,
      updateStatus: "",
    };
  },
  methods: {
    getAllGigs() {
      axios
        .get("/gigs")
        .then((data) => {
          this.allGigs = data.data;
        })
        .catch();
    },
    getOneGig(gigId) {
      if (gigId) {
        axios
          .get(`/gig/${gigId}`)
          .then((data) => {
            this.role = data.data.role;
            this.company = data.data.company;
            this.state = data.data.state;
            this.country = data.data.country;
            this.address = data.data.address;
            this.tags = data.data.tags;
            this.min_salary = data.data.min_salary;
            this.max_salary = data.data.max_salary;
            this.id = gigId;
          })
          .catch();
      }
    },
    toggleModalState(gigId) {
      this.updateModalState = !this.updateModalState;
      this.getOneGig(gigId);
    },
    updateGig() {
      // alert(`TODO: Update modal for ${gigId}`);
      axios
        .put(`gig/${this.id}`, {
          role: this.role,
          company: this.company,
          state: this.state,
          country: this.country,
          address: this.address,
          tags: this.tags,
          min_salary: this.min_salary,
          max_salary: this.max_salary,
        })
        .then((res) => {
          this.updateStatus = "Employee Updated !!!";
          console.log(this.updateStatus);
          res.data;
        })
        .catch((err) => {
          this.updateStatus = "Employee Update Failed, Check the form !!!";
        });
    },
    deleteGig(gigId) {
      if (confirm(`Are you sure you want to delete gig ${gigId}`)) {
        axios
          .delete(`/gig/${gigId}`)
          .then((data) => {
            this.getAllGigs();
          })
          .catch();
      }
    },
  },
  mounted() {
    this.getAllGigs();
  },
};
</script>