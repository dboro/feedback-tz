<template>
	<b-form @submit.prevent="onSubmit">
		<b-alert v-show="message" variant="success" show>
			{{ message }}
		</b-alert>
		<b-form-group label="Name:">
			<b-form-input
				v-model="form.name"
			></b-form-input>
		</b-form-group>
		<b-form-group label="Email address:" class="mt-3">
			<b-form-input
				v-model="form.email"
			></b-form-input>
		</b-form-group>
		<b-form-group label="Message:" class="mt-3">
			<b-form-textarea
				v-model="form.message"
			></b-form-textarea>
		</b-form-group>
		<div class="mt-4">
			<b-btn type="submit" class="btn-success">Submit</b-btn>
			<b-btn @click="onCancel" class="btn-secondary ms-2">Cancel</b-btn>
		</div>
	</b-form>
</template>

<script>

const axios = require('axios');

export default {
	name: "FeedbackForm",
	data() {
		return {
			message: false,
			form: {},
			errors: {}
		}
	},

	methods: {
		onSubmit() {
			axios.post('http://api.feedback.loc/v1/feedback', this.form)
				.then((response) => {
					this.message = response.data.data.message
				})
				.catch((error) => {
					this.errors = error.response.data.errors;
				});
		},

		onCancel() {
			this.message = false
			this.form = {}
		}
	}
}
</script>

<style scoped>

</style>