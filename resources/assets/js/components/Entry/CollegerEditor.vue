<template>
  <div class="form">
    <div class="input">
      <div class="sub-title">College</div>
      <el-autocomplete :fetch-suggestions="suggest(colleges)" placeholder="College" v-model="colleger.college.name"></el-autocomplete>
    </div>
    <div class="input">
      <div class="sub-title">Program</div>
      <el-autocomplete :fetch-suggestions="suggest(programs)" placeholder="Program" v-model="colleger.program.name"></el-autocomplete>
    </div>
    <div class="input">
      <div class="sub-title">Generation</div>
      <el-input placeholder="Generation" v-model="colleger.generation"></el-input>
    </div>
    <div class="input">
      <div class="sub-title">Admission</div>
      <el-autocomplete :fetch-suggestions="suggest(admissions)" placeholder="Admission" v-model="colleger.admission.name"></el-autocomplete>
    </div>
    <div class="input">
      <el-button type="primary" size="small">Save</el-button>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      data: {
        type: Object,
        required: false
      },
      colleges: {
        type: Array,
        required: false,
        default: () => []
      },
      programs: {
        type: Array,
        required: false,
        default: () => []
      },
      admissions: {
        type: Array,
        required: false,
        default: () => []
      },
    },
    data() {
      var colleger = {
        college: { name: "" },
        program: { name: "" },
        generation: null,
        admission: { name: "" }
      }

      if (this.data) {
        colleger = this.data;
      }

      return {
        colleger: colleger
      }
    },
    methods: {
      suggest(data) {
        return (query, done) => {
          done(query ? data.filter((data) => {
            return (data.value.toLowerCase().indexOf(query.toLowerCase()) >= 0);
          }).slice(0, 10) : data.slice(0, 10));
        }
      }
    }
  }
</script>
