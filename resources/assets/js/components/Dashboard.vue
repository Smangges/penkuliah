<template>
  <div class="dashboard-wrapper">
    <div class="dashboard-side-wrapper">
      <el-menu class="dashboard-menu">
        <el-submenu index="1" v-if="uid">
          <template slot="title"><i class="el-icon-menu"></i>{{ name }}</template>
          <el-menu-item index="1-1" v-on:click="to('/user/'+uid)">My Profile</el-menu-item>
          <el-menu-item index="1-2">Settings</el-menu-item>
          <el-menu-item index="1-3" v-on:click="to('/logout')">Logout</el-menu-item>
        </el-submenu>
        <el-menu-item index="2" v-on:click="to('/data-entry')"><i class="el-icon-document"></i>Data Entry</el-menu-item>
        <el-menu-item index="3" v-on:click="to('/explorer')"><i class="el-icon-search"></i>Explorer</el-menu-item>
        <el-menu-item index="4" v-on:click="to('/analytics')"><i class="el-icon-d-arrow-right"></i>Analytics</el-menu-item>
        <el-menu-item index="5" v-on:click="to('/help-desk')"><i class="el-icon-information"></i>Help Desk</el-menu-item>
      </el-menu>
    </div>
    <div class="dashboard-content-wrapper">
      <slot></slot>
    </div>
  </div>
</template>

<style>
  .dashboard-wrapper {
    width: 100%;
    min-width: 1024px;
  }
  .dashboard-side-wrapper {
    position: fixed;
    width: 260px;
    height: 100%;
  }
  .dashboard-menu {
    height: 100%;
    overflow-y: auto;
  }
  .dashboard-content-wrapper {
    margin: 0px;
    width: 100%;
    padding-left: 260px;
  }
</style>

<script>
  export default {
    props: ['uid', 'name'],

    methods: {
      to(route) {
        window.open(route, '_self');
      }
    }
  }
</script>
