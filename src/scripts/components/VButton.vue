<template lang="html">
  <button class="btn" @click="onClick">{{text}}</button>
</template>

<script>
export default {
	data: () => ({
		text: "Click Me"
	}),

	methods: {
		onClick() {
			alert("Clicked!");
		}
	}
};
</script>

<style lang="css">
.btn {
  background: blue;
}
</style>
