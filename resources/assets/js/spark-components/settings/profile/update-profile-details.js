Vue.component('update-profile-details', {
    props: ['user'],

    data() {
        return {
            form: new SparkForm({
                due_date: ''
            })
        };
    },

    ready() {
        this.form.due_date = this.user.due_date;
    },

    methods: {
        update() {
            Spark.put('/settings/profile/details', this.form)
                .then(response => {
                this.$dispatch('updateUser');
        });
        }
    }
});