<update-profile-details :user="user" inline-template>
    <div class="panel panel-default">
        <div class="panel-heading">Profile Details</div>

        <div class="panel-body">
            <!-- Success Message -->
            <div class="alert alert-success" v-if="form.successful">
                Your profile has been updated!
            </div>

            <form class="form-horizontal" role="form">
                <!-- Age -->
                <div class="form-group" :class="{'has-error': form.errors.has('due_date')}">
                    <label class="col-md-4 control-label">Due Date</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="due_date" v-model="form.due_date">

                        <span class="help-block" v-show="form.errors.has('due_date')">
                            @{{ form.errors.get('due_date') }}
                        </span>
                    </div>
                </div>

                <!-- Update Button -->
                <div class="form-group">
                    <div class="col-md-offset-4 col-md-6">
                        <button type="submit" class="btn btn-primary"
                                @click.prevent="update"
                                :disabled="form.busy">

                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</update-profile-details>
