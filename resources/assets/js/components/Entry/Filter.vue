<template>
  <div>
    <el-row type="flex" :gutter="10" style="margin: 10px;">
      <el-col :span="4">
        <el-input placeholder="Identification Number" v-model="id"></el-input>
      </el-col>
      <el-col :span="8">
        <el-input placeholder="Name" v-model="name"></el-input>
      </el-col>
      <el-col :span="3">
        <el-input placeholder="Generation" v-model="generation"></el-input>
      </el-col>
      <el-col :span="8">
        <el-button-group>
          <el-button type="primary" icon="search" v-on:click="filter()"> Filter</el-button>
          <el-button type="warning" icon="close" v-on:click="clear()">Clear</el-button>
        </el-button-group>
        <el-button type="success" icon="plus" v-on:click="add()">Add</el-button>
      </el-col>
    </el-row>
    <el-row v-if="suggestions.length > 0" type="flex" :gutter="10" style="margin: 10px;">
      <el-col :span="24">
        <el-table :data="suggestions" style="width: 100%">
          <el-table-column prop="id" label="Id Number" width="160">
          </el-table-column>
          <el-table-column prop="name" label="Name">
          </el-table-column>
          <el-table-column prop="generation" label="Generation" width="160">
          </el-table-column>
          <el-table-column
            label="Operations">
            <template scope="scope">
              <el-button
                size="small"
                v-on:click="edit(scope.$index, scope.row)">Edit</el-button>
              <el-button
                size="small"
                type="danger"
                v-on:click="remove(scope.$index, scope.row)">Remove</el-button>
            </template>
          </el-table-column>
        </el-table>
      </el-col>
    </el-row>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        id: null,
        name: "",
        generation: null,
        suggestions: []
      }
    },
    methods: {
      add() {
        // todo
      },

      edit(index, data) {
        // todo
      },

      remove(index, data) {
        // todo
      },

      filter() {
        // todo
        // dummy data
        this.suggestions = [
          {
            id: 131410244,
            name: "Iqbal Mohammad Abdul Ghoni",
            generation: 2013
          },
          {
            id: 131410244,
            name: "Rafifa Luthfarida",
            generation: 2013
          },
          {
            id: 131410244,
            name: "Safnah Nur Safira",
            generation: 2013
          },
          {
            id: 131410244,
            name: "Aditia Nugraha",
            generation: 2013
          }
        ];
        // end dummy data
      },

      clear() {
        this.suggestions = [];
        this.id = null;
        this.name = "";
        this.generation = null;
      }
    }
  }
</script>