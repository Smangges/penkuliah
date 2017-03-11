<template>
  <div class="form">
    <div class="input">
      <div class="sub-title">Identification Number</div>
      <el-input placeholder="Identification Number" v-model="student.id"></el-input>
    </div>
    <div class="input">
      <div class="sub-title">Name</div>
      <el-input placeholder="Name" v-model="student.name"></el-input>
    </div>
    <div class="input">
      <div class="sub-title">Generation</div>
      <el-input placeholder="Generation" v-model="student.generation"></el-input>
    </div>
    <div class="input">
      <el-button type="primary" size="small">Save</el-button>
    </div>
  </div>
</template>

<style>
  .sub-title {
    font-size: small;
    color: #999;
    margin: 4px 0px 4px 0px;
  }
  .input {
    margin-bottom: 4px;
  }
  .form {
    margin-bottom: 20px;
  }
  .el-autocomplete {
    width: 100%;
  }
</style>

<script>
  export default {
    props: ['data'],
    data() {
      var student = {
        id: null,
        name: "",
        generation: null
      };

      if (this.data) {
        student = this.data;
      }

      return {
        student: student
      };
    }
  }
</script>
