<template>
  <div>
    <div class="dashboard-side-wrapper">
      <el-menu default-active="2" class="dashboard-menu" @open="handleOpen" @close="handleClose">
        <el-submenu index="1">
          <template slot="title"><i class="el-icon-message"></i>Navigator One</template>
          <el-menu-item-group title="Group One">
            <el-menu-item index="1-1">item one</el-menu-item>
            <el-menu-item index="1-2">item one</el-menu-item>
          </el-menu-item-group>
          <el-menu-item-group title="Group Two">
            <el-menu-item index="1-3">item three</el-menu-item>
          </el-menu-item-group>
          <el-submenu index="1-4">
            <template slot="title">item four</template>
            <el-menu-item index="1-4-1">item one</el-menu-item>
          </el-submenu>
        </el-submenu>
        <el-menu-item index="2"><i class="el-icon-menu"></i>Navigator Two</el-menu-item>
        <el-menu-item index="3"><i class="el-icon-setting"></i>Navigator Three</el-menu-item>
      </el-menu>
    </div>
    <div class="dashboard-content-wrapper">
      <slot></slot>
    </div>
  </div>
</template>

<style>
  .dashboard-side-wrapper {
    position: absolute;
    width: 260px;
    height: 100%;
  }
  .dashboard-menu {
    height: 100%;
  }
  .dashboard-content-wrapper {
    margin: 0px;
    width: 100%;
    padding-left: 260px;
  }
</style>

<script>
  export default {
    //
  }
</script>
