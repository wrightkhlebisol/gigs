<template>
  <div>
    <transition name="animateView">
      <GigDetails v-show="gigShowState" @detailsEvent="toggleGigShowState"></GigDetails>
    </transition>

    <transition name="animateVieww">
      <GigSalary v-show="!gigShowState" @salaryEvent="toggleGigShowState"></GigSalary>
    </transition>
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
.animateView-enter-active {
  animation: fadeIn 1.5s ease-in;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 0.5;
  }
  100% {
    opacity: 1;
  }
}

.animateView-leave-active {
  animation: moveInUp 0.3s ease-in;
}
@keyframes moveInUp {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-400px);
  }
}

.animateVieww-enter-active {
  animation: fadeIn 1.5s ease-in;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 0.5;
  }
  100% {
    opacity: 1;
  }
}

.animateVieww-leave-active {
  animation: moveInUp 0.3s ease-in;
}
@keyframes moveInUp {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-400px);
  }
}
</style>