<template>
	<b-container>
		<b-row class="mt-2">
			<b-col offset-lg="4" offset-md="2" lg="4" md="8">
				<h1>Feedback</h1>
				<feedback-form></feedback-form>
			</b-col>
		</b-row>
	</b-container>
</template>

<script>
import FeedbackForm from "@/components/FeedbackForm";
export default {
	name: "feedback",
	components: {FeedbackForm}
}
</script>

<style scoped>

</style>