<template>
  <div class="wrapper">
    <el-table :data="scores" height="720" border style="width: 100%">
      <el-table-column prop="subject" sortable label="Subject">
      </el-table-column>
      <el-table-column prop="semester" sortable label="Semester">
      </el-table-column>
      <el-table-column prop="score" sortable label="Score">
      </el-table-column>
      <el-table-column
        label="Operations"
        width="170">
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
  </div>
</template>

<style>
  .wrapper {
    padding: 10px;
  }
</style>

<script>
  export default {
    data() {
      return {
        // dummy data
        scores: [
          {
            subject: "Bahasa Indonesia",
            semester: 2,
            score: 89
          },
          {
            subject: "Bahasa Inggris",
            semester: 2,
            score: 77
          },
          {
            subject: "Matematika",
            semester: 2,
            score: 65
          },
          {
            subject: "Fisika",
            semester: 2,
            score: 94
          },
          {
            subject: "Kimia",
            semester: 2,
            score: 87
          },
          {
            subject: "Biologi",
            semester: 2,
            score: 70
          },
          {
            subject: "Bahasa Indonesia",
            semester: 1,
            score: 77
          },
          {
            subject: "Bahasa Inggris",
            semester: 1,
            score: 65
          },
          {
            subject: "Matematika",
            semester: 1,
            score: 94
          },
          {
            subject: "Fisika",
            semester: 1,
            score: 87
          },
          {
            subject: "Kimia",
            semester: 1,
            score: 70
          },
          {
            subject: "Biologi",
            semester: 1,
            score: 89
          },
          {
            subject: "Bahasa Indonesia",
            semester: 3,
            score: 70
          },
          {
            subject: "Bahasa Inggris",
            semester: 3,
            score: 89
          },
          {
            subject: "Matematika",
            semester: 3,
            score: 77
          },
          {
            subject: "Fisika",
            semester: 3,
            score: 65
          },
          {
            subject: "Kimia",
            semester: 3,
            score: 94
          },
          {
            subject: "Biologi",
            semester: 3,
            score: 87
          }
        ]
      }
    }
  }
</script>
