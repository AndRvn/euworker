<template>
    <div class="container">
        <h1>Profile (Resume)</h1>
        <a href="#" @click.prevent="$auth.logout()">Logout</a>

        <div class="row mt-5">
            <div class="col">
                <label for="first_name">First name</label>
                <b-form-input v-model="data.first_name" id="first_name" placeholder="Enter first name"></b-form-input>
            </div>
            <div class="col">
                <label for="last_name">Last name</label>
                <b-form-input v-model="data.last_name" id="last_name" placeholder="Enter last name"></b-form-input>
            </div>
            <div class="col">
                <label for="birth_date">Birth date</label>
                <b-form-input type="date" v-model="data.birth_date" id="birth_date"></b-form-input>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="country">Country</label>
                    <b-form-select id="country" v-model="country_id">
                        <option v-for="option in getCountries" :value="option.id">{{ option.name[locale] }}</option>
                    </b-form-select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="city">City</label>
                    <b-form-select id="city" v-model="city_id">
                        <option v-for="option in getCities" :value="option.id">{{ option.name[locale] }}</option>
                    </b-form-select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="address">Address</label>
                <b-form-input v-model="data.address" id="address" placeholder="Enter address"></b-form-input>
            </div>
            <div class="col">
                <label for="phone">Phone</label>
                <b-form-input v-model="data.phone" id="phone" placeholder="Enter phone"></b-form-input>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="education">Education</label>
                <b-form-select id="education" v-model="education">
                    <option value="high">High</option>
                    <option value="incomplete higher education">Incomplete higher education</option>
                    <option value="secondary special">Secondary special</option>
                </b-form-select>
            </div>
            <div class="col">
                <label for="experience">Experience</label>
                <b-form-select id="experience" v-model="experience_id">
                    <option v-for="option in getExperiences" :value="option.id">{{ option.name[locale] }}</option>
                </b-form-select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="title">Specialization</label>
                <b-form-input v-model="data.title" id="title" placeholder="Enter specialization"></b-form-input>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="category">Rubric</label>
                <b-form-select id="category" v-model="category_id">
                    <option v-for="option in getCategories" :value="option.id">{{ option.name[locale] }}</option>
                </b-form-select>
            </div>
            <div class="col">
                <label for="desired_salary">Desired salary</label>
                <b-form-input v-model="data.desired_salary" id="desired_salary" placeholder="Enter desired salary"></b-form-input>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="description">About you (skills etc)</label>
                    <b-form-textarea
                        id="description"
                        v-model="data.description"
                        placeholder="Description"
                        rows="3"
                    ></b-form-textarea>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-success" @click.prevent="submit">Save</button>
    </div>
</template>

<script>
    import { BFormInput, BFormSelect, BFormTextarea } from 'bootstrap-vue'

    export default {
        components: {
            'b-form-input': BFormInput,
            'b-form-textarea': BFormTextarea,
            'b-form-select': BFormSelect
        },

        data() {
            return {
                data: {},
                country_id: '',
                city_id: '',
                education: '',
                experience_id: '',
                category_id: '',
                locale: this.$i18n.locale,
            }
        },

        beforeMount() {
            this.$store.dispatch('GET_COUNTRIES');
            this.$store.dispatch('GET_CITIES');
            this.$store.dispatch('GET_EXPERIENCES');
            this.$store.dispatch('GET_CATEGORIES');
            this.getProfile();
        },

        computed: {
            getCountries() {
                return this.$store.getters.countries;
            },
            getCities() {
                return this.$store.getters.cities;
            },
            getExperiences() {
                return this.$store.getters.experiences;
            },
            getCategories() {
                return this.$store.getters.categories;
            }
        },

        methods: {
            getProfile() {
                axios.get('/profile')
                    .catch(err => {
                        console.log(err)
                    })
                    .then(resp => {
                        this.data = resp.data.data;
                        this.country_id = resp.data.data.country_id;
                        this.city_id = resp.data.data.city_id;
                        this.birth_date = resp.data.data.birth_date;
                        this.education = resp.data.data.education;
                        this.experience_id = resp.data.data.experience_id;
                        this.category_id = resp.data.data.category_id;
                    });
            },
            submit() {
                axios.post('/profile/' + this.data.id, {
                    first_name: this.data.first_name,
                    last_name: this.data.last_name,
                    address: this.data.address,
                    birth_date: this.data.birth_date,
                    desired_salary: this.data.desired_salary,
                    education: this.education,
                    description: this.data.description,
                    country_id: this.country_id,
                    city_id: this.city_id,
                    experience_id: this.experience_id,
                    category_id: this.category_id
                })
                    .then(response => {

                    })
                    .catch(error => {
                        console.log(err)
                    })
            }
        }
    }
</script>

<style scoped>

</style>
