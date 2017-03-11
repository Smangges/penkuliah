<template>
  <div class="form">
    <div class="sub-title">Ranks</div>
    <el-row class="input" v-for="rank in ranks" :gutter="4">
      <el-col :span="8">
        <el-input placeholder="Semester" v-model="rank.semester">
          <template slot="prepend">
            S
          </template>
        </el-input>
      </el-col>
      <el-col :span="8">
        <el-input placeholder="Position" v-model="rank.position">
          <template slot="prepend">
            P
          </template>
        </el-input>
      </el-col>
      <el-col :span="8">
        <el-button-group>
          <el-button type="primary" size="small" v-on:click="save()"><i class="el-icon-check"></i></el-button>
          <el-button type="danger" size="small" v-on:click="remove()"><i class="el-icon-close"></i></el-button>
        </el-button-group>
      </el-col>
    </el-row>
    <el-row class="input" :gutter="4">
      <el-col :span="8">
        <el-input placeholder="Semester" v-model="inputSemester"></el-input>
      </el-col>
      <el-col :span="8">
        <el-input placeholder="Position" v-model="inputPosition"></el-input>
      </el-col>
      <el-col :span="8">
        <el-button type="primary" size="small" v-on:click="add()"><i class="el-icon-plus"></i></el-button>
      </el-col>
    </el-row>
  </div>
</template>

<script>
  export default {
    props: ['data'],
    data() {
      var ranks = [];

      if (this.data) {
        ranks = this.data;
      }

      return {
        ranks: ranks,
        inputSemester: null,
        inputPosition: null,
      }
    },
    methods: {
      add() {
        this.ranks.push({
          semester: this.inputSemester,
          position: this.inputPosition
        });
        this.inputSemester = "";
        this.inputPosition = "";
      },
      save() {
        // todo
      },
      remove() {
        // todo
      }
    }
  }
</script>
