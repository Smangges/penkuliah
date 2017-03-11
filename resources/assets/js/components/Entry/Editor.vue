<template>
  <div v-if="tabs">
    <el-row type="flex" :gutter="10" style="margin: 10px;">
      <el-col :span="24">
        <el-tabs type="card" closable>
          <el-tab-pane v-for="tab in tabs" :label="tab.name">
            <el-row type="flex" :gutter="10">
              <el-col :span="8">
                <student-editor :data="(tab.student ? tab.student : null)"></student-editor>
                <rank-editor :data="(tab.ranks ? tab.ranks : null)"></rank-editor>
                <colleger-editor :data="(tab.colleger ? tab.colleger : null)"></colleger-editor>
              </el-col>
              <el-col :span="16">
                <score-editor></score-editor>
              </el-col>
            </el-row>
          </el-tab-pane>
        </el-tabs>
      </el-col>
    </el-row>
  </div>
</template>

<script>
  import StudentEditor from "./StudentEditor.vue";
  import RankEditor from "./RankEditor.vue";
  import CollegerEditor from "./CollegerEditor.vue";
  import ScoreEditor from "./ScoreEditor.vue";

  export default {
    props: ['users'],
    components: {
      "student-editor": StudentEditor,
      "rank-editor": RankEditor,
      "colleger-editor": CollegerEditor,
      "score-editor": ScoreEditor
    },
    data() {
      var tabs;

      if (this.users) {
        var tabs = this.users;
      }

      return {
        tabs: tabs
      }
    }
  }
</script>
