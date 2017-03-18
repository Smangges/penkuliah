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
      <el-dialog title="Confirm Deletion" v-model="showConfirmDelete" size="tiny">
        <span>Are you sure want to delete "{{ nameToDelete }}/{{ idToDelete }}"?</span>
        <span slot="footer" class="dialog-footer">
          <el-button v-on:click="showConfirmDelete = false">Cancel</el-button>
          <el-button type="primary" v-on:click="confirmDelete(idToDelete)">Confirm</el-button>
        </span>
      </el-dialog>
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
        suggestions: [],
        showConfirmDelete: false,
        nameToDelete: null,
        idToDelete: null,
        indexToDelete: null
      }
    },
    methods: {
      add() {
        var model = this;
        axios.post('/api/data-entry/add', {
          id: this.id,
          name: this.name,
          generation: this.generation
        }).then(function(res) {
          model.$notify({
            title: "Success",
            message: model.name + " is added!",
            type: "success"
          });
          model.clear();
        }).catch(function(err) {
          if (err.response.status && err.response.status == 422) {
            var messages = [];
            var ems, em;

            for (ems in err.response.data) {
              for (em in  err.response.data[ems]) {
                messages.push(err.response.data[ems][em]);
              }
            }

            model.$notify({
              title: "Invalid",
              message: messages.join(' '),
              type: "error"
            });

            return false;
          }

          model.$notify({
            title: "Error",
            message: model.name + " failed to be added!",
            type: "error"
          });
        });
      },

      edit(index, data) {
        this.$emit('edit', data);
      },

      remove(index, data) {
        this.nameToDelete = data.name;
        this.idToDelete = data.id;
        this.showConfirmDelete = true;
        this.indexToDelete = index;
      },

      confirmDelete(idToDelete) {
        var model = this;

        this.showConfirmDelete = false;

        axios.get('/api/data-entry/destroy', { params: { id: idToDelete }})
          .then(function(res) {
            model.$notify({
              title: "Success",
              message: "\""+model.nameToDelete+"\" is deleted",
              type: "success"
            });

            model.suggestions.splice(model.indexToDelete, 1);

            model.nameToDelete = null;
            model.idToDelete = null;
            model.indexToDelete = null;
          })
          .catch(function(err) {
            console.log(err);
          });
      },

      filter() {
        var params = {};
        var model = this;

        if (model.id) {
          params.id = model.id;
        }

        if (model.name) {
          params.name = model.name;
        }

        if (model.generation) {
          params.generation = model.generation;
        }

        axios.get('/api/data-entry/filter', { params: params })
          .then(function(res) {
            if (!res.data) {
              return null;
            }

            model.suggestions = res.data;
          })
          .catch(function(err) {
            console.log(err);
          });
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